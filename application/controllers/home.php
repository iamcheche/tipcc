<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); //we need to call PHP's session object to access it through CI
    class Home extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }

        function index(){
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('home_view', $data);
                $this->load->view('template/footer');
            }else{
             //If no session, redirect to login page
             redirect('', 'refresh');
            }
        }

        function logout(){
            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('', 'refresh');
        }

    }

?>