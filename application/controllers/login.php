<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form'));
	}

	function index(){
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
			$this->load->view('login_view');
			$this->load->view('/template/login_footer');
        }
	}	

}

?>