<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Subscribe extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
			$this->load->model('subscribe_model');
			$this->load->helper('url');
			$this->load->dbutil();
	        $this->load->helper('download');
			$this->load->helper('form');
		}

		function index(){
			if($this->session->userdata('logged_in')){
	            $session_data = $this->session->userdata('logged_in');
	            $data['username'] = $session_data['username'];
	            $data['title'] = 'TIP Career Center';
	            $this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('template/footer');
	            
	          	if ($query = $this->subscribe_model->view()){
	          		$data['records'] = $query;
	          	}   
		        
		        $this->load->view('subscribe/subscriber_view', $data);
		    
		    }else{
		         	redirect('', 'refresh');
		    }
		}

		function subscriber(){
			$rules = array(
				array('field'=>'name','rules'=>'required'),
				array('field'=>'email','rules'=>'required'),
				array('field'=>'contact_number','rules'=>'required')
			);
			
			$this->form_validation->set_rules($rules);
				if($this->form_validation->run() == FALSE){
			        echo 'ERROR IN YOUR SUBSCRIPTION';
				}else{
					$this->subscribe_model->subscriber();
					echo 'THANK YOU FOR SUBSCRIBING TO CAREER CENTER';
				}
		}

		function search_subscriber(){
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           		$data['records'] = $this->subscribe_model->get_subscriber();
				
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
				$this->load->view('subscribe/subscriber_view', $data);	            
				$this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            }
		}

		function csv($query = null, $filename = 'CSV_Report_Subscribers.csv'){
	        $delimiter = ",";
	        $newline = "rn";
	        $query = $this->db->query("select * from subscribers");
	        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
	        force_download($filename, $data);
    	}

    	function show_subscriber() {
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
				$id = $this->uri->segment(3);
				$data['subscribers'] = $this->subscribe_model->view();
				$data['single_subscriber'] = $this->subscribe_model->show_subscriber($id);
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('subscribe/update_subscriber', $data);
	            $this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            }
		}

		function show_view_subscriber() {
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
				$id = $this->uri->segment(3);
				$data['subscribers'] = $this->subscribe_model->view();
				$data['single_subscriber'] = $this->subscribe_model->show_subscriber_rec($id);
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('subscribe/view_subscriber', $data);
	            $this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            } 
		}

		function update_subscriber(){
			$id= $this->input->post('sub_id');
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'contact_number'=>$this->input->post('contact_number'),
			);
			$this->subscribe_model->update_subscriber($id,$data);
			$this->show_subscriber();
		}

	}
?>