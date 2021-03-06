<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); 
    class Home extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
            $this->load->model('events_model');
            $this->load->library('calendar');
            $this->load->helper('download');
            $this->load->dbutil();
        }

        function index(){
            $this->events();
        }

        
        function events($year = null, $month = null){

            if (!$year) {
                $year = date('Y');
            }
            if (!$month) {
                $month = date('m');
            }

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $data['calendar'] = $this->events_model->generate_calendar($year, $month); 
                $data['year'] = $this->uri->segment(3);
                $data['month'] = $this->uri->segment(4);

                if ($query = $this->events_model->view()){
                    $data['records'] = $query;
                }   
                
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('home/home_view', $data);
                $this->load->view('template/footer');                
            }else{
                redirect('', 'refresh');
            }
        
        }

        function add_event($year = null, $month = null){
            $rules = array(
                array('field'=>'event_date','rules'=>'required'),
                array('field'=>'event_name','rules'=>'required')
            );

            $this->form_validation->set_rules($rules);
                if($this->form_validation->run() == FALSE){
                    if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        
                        $data['username'] = $session_data['username'];
                        $data['title'] = 'TIP Career Center';
                        $data['calendar'] = $this->events_model->generate_calendar($year, $month); 


                        $this->load->view('template/header', $data);
                        $this->load->view('template/navbar');
                        $this->load->view('home/home_view', $data);
                        $this->load->view('template/footer');

                    }else{
                        redirect('home/home_view', 'refresh');
                    }
                }else{
                    $this->events_model->create();
                    redirect('index.php/home', 'refresh');
                }

        }

        function delete(){
            $this->events_model->delete();
            redirect('index.php/home', 'refresh');
        }

        function show_event() {
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
                $id = $this->uri->segment(3);
                $data['event'] = $this->events_model->view();
                $data['single_event'] = $this->events_model->show_event($id);
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('home/event_update', $data);
                $this->load->view('template/footer');
             }else{
                redirect('', 'refresh');
            } 
        }

        function update_event(){
            $id= $this->input->post('event_id');
            $data = array('event_name'=>$this->input->post('event_name'));

            $this->events_model->update_event($id,$data);
            $this->show_event();
        }

        function search_event($year = null, $month = null){
            if (!$year) {
                $year = date('Y');
            }
            
            if (!$month) {
                $month = date('m');
            }

            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');

                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $data['calendar'] = $this->events_model->generate_calendar($year, $month); 
                $data['year'] = $this->uri->segment(3);
                $data['month'] = $this->uri->segment(4);

                if ($query = $this->events_model->view()){
                    $data['records'] = $query;
                }   
                
                if ($query = $this->events_model->search_event()){
                    $data['event'] = $query;
                }   
                
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('home/home_view', $data);
                $this->load->view('template/footer');                
            }else{
                redirect('', 'refresh');
            }              
        }

        function csv($query = null, $filename = 'CSV_Report_Events.csv'){
            $delimiter = ",";
            $newline = "rn";
            $query = $this->db->query("select * from events");
            $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
            force_download($filename, $data);
        }
    }
?>