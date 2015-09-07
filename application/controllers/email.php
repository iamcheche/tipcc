<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); //we need to call PHP's session object to access it through CI
    class Email extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->library('pagination');
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('email_model');
            $this->load->library('form_validation');
            $this->load->library('upload');
            $this->load->dbutil();
            $this->load->helper('download');
        }

        function index(){
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar', $data);
                $this->load->view('email/email_view');
                $this->load->view('template/footer');
            }else{
             //If no session, redirect to login page
             redirect('', 'refresh');
            }
        }

        function history(){
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('template/footer');
                
                /*$linkage_result = $this->linkages_model->view();           
                $data['linkresult'] = $linkage_result;
                //load the department_view
                $this->load->view('linkages_view',$data);*/

                if ($query = $this->email_model->email_view()){
                    $data['records'] = $query;
                }   
                
                $this->load->view('email/view_history', $data);
            
            }else{
                    //If no session, redirect to localeconv(oid)                                                                                                                                                       gin page
                    redirect('', 'refresh');
            }   
        }

        function sendtolinkages(){  
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $rules = array(
                array('field'=>'subject','rules'=>'required'),
                array('field'=>'message','rules'=>'required')
            );
            
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == true){   
                $config = array(
                    'protocol' => 'smtp' ,
                    'mailtype' => 'html',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'eblast.noreply@gmail.com',
                    'smtp_pass' => 'emailblast123'
                );
                
                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");

                $subject = $this->input->post('subject');
                $body = $this->input->post('message');
                
                $this->db->select('contact_email');
                $to = $this->db->get('linkages')->result_array();

                $recipient = array();
                
                foreach($to as $key => $value){
                    $recipient[] = $value['contact_email'];
                }                

                $msg_head = $this->load->view('template/header_email', '', TRUE);
                $msg_foot = $this->load->view('template/footer_email', '', TRUE);

                $this->email->from('eblast.noreply@gmail.com', 'Email Blast Tester');
                $this->email->to($recipient);
                $this->email->subject($subject);
                $this->email->message($msg_head . $body . $msg_foot);

                if ($this->email->send()){
                    if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['title'] = 'TIP Career Center';
                        $this->load->view('template/header', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('email/email_success');
                        $this->load->view('template/footer');
                        $this->email_model->add_email();                        
                    }else{
                        redirect('', 'refresh');
                    }
                }else{
                    show_error($this->email->print_debugger());
                }

            }else{
                if($this->session->userdata('logged_in')){
                    $session_data = $this->session->userdata('logged_in');
                    $data['username'] = $session_data['username'];
                    $data['title'] = 'TIP Career Center';
                    $this->load->view('template/header', $data);
                    $this->load->view('template/navbar', $data);
                    $this->load->view('email/email_view');
                    $this->load->view('template/footer');
                }else{
                    //If no session, redirect to login page
                    redirect('', 'refresh');
                }
            }
        }

        function sendtosubscribers(){  
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $rules = array(
                array('field'=>'subject','rules'=>'required'),
                array('field'=>'message','rules'=>'required')
            );
            
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == true){   
                $config = array(
                    'protocol' => 'smtp' ,
                    'mailtype' => 'html',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'eblast.noreply@gmail.com',
                    'smtp_pass' => 'emailblast123'
                );
                
                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");

                $subject = $this->input->post('subject');
                $body = $this->input->post('message');
                
                $this->db->select('email_address');
                $this->db->where('role = "student"');
                $to = $this->db->get('users')->result_array();

                $recipient = array();
                
                foreach($to as $key => $value){
                    $recipient[] = $value['contact_email'];
                }                

                $msg_head = $this->load->view('template/header_email', '', TRUE);
                $msg_foot = $this->load->view('template/footer_email', '', TRUE);

                $this->email->from('eblast.noreply@gmail.com', 'Email Blast Tester');
                $this->email->to($recipient);
                $this->email->subject($subject);
                $this->email->message($msg_head . $body . $msg_foot);

                if ($this->email->send()){
                    if($this->session->userdata('logged_in')){
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['title'] = 'TIP Career Center';
                        $this->load->view('template/header', $data);
                        $this->load->view('template/navbar', $data);
                        $this->load->view('email/email_success');
                        $this->load->view('template/footer');
                        $this->email_model->add_email();                        
                    }else{
                        redirect('', 'refresh');
                    }
                }else{
                    show_error($this->email->print_debugger());
                }

            }else{
                if($this->session->userdata('logged_in')){
                    $session_data = $this->session->userdata('logged_in');
                    $data['username'] = $session_data['username'];
                    $data['title'] = 'TIP Career Center';
                    $this->load->view('template/header', $data);
                    $this->load->view('template/navbar', $data);
                    $this->load->view('email/email_view');
                    $this->load->view('template/footer');
                }else{
                    //If no session, redirect to login page
                    redirect('', 'refresh');
                }
            }
        }

        function delete(){
            $this->email_model->delete();
            $this->index();
        }
    }

?>