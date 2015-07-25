<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); //we need to call PHP's session object to access it through CI
    class Email extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->library('pagination');
            $this->load->database();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }

        function index(){
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar', $data);
                $this->load->view('email_view');
                $this->load->view('template/footer');
            }else{
             //If no session, redirect to login page
             redirect('', 'refresh');
            }
        }

        function sendtoall(){
            

            $rules = array(
                array('field'=>'subject','rules'=>'required'),
                array('field'=>'message','rules'=>'required')
            );


            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == true){   
                $config = array(
                    'protocol' => 'smtp' ,
                    'mailtype' => 'text',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'eblast.noreply@gmail.com',
                    'smtp_pass' => 'emailblast123'
                );
                
                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");

                $subject = $this->input->post('subject');
                $message = $this->input->post('message');                
                
                $this->db->select('contact_email');
                $to = $this->db->get('linkages')->result_array();
                
                $recipient = array();     

                foreach($to as $key => $value){
                    $recipient[] = $value['contact_email'];
                }

                $this->email->from('eblast.noreply@gmail.com', 'Email Blast Tester');
                $this->email->to($recipient);
                $this->email->subject($subject);
                $this->email->message($message);

                if ($this->email->send()){
                    if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['title'] = 'TIP Career Center';
                        $this->load->view('template/header', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('email_success');
                        $this->load->view('template/footer');
                    }else{
                     //If no session, redirect to login page
                     redirect('', 'refresh');
                    }
                }else{

                    show_error($this->email->print_debugger());
                }
            }else{
                ECHO 'SOMETHING WENT WRONG';
            }
        }
    }

?>