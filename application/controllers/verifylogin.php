<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user','',TRUE);
    }

    function index(){
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE){
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                redirect('index.php/home', $data);
                $this->load->view('template/footer');
            }else{
                $data['title'] = 'TIP Career Center';
                $this->load->view('/template/login_header', $data);
                $this->load->view('/template/login_navbar', $data);
                $this->load->view('login-signup/login_view');
                $this->load->view('/template/login_footer');
            }

        }else{
            //Go to private area
            redirect('index.php/home', 'refresh');
        }

    }

    function check_database($password){
        $username = $this->input->post('username');

        $result = $this->user->login($username, $password);

        if($result){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                    'id' => $row->user_id,
                    'username' => $row->username
                );
            $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }else{
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}