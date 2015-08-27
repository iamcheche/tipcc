<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('session');
		$this->load->model('register');
		$this->load->helper('url');
		$this->load->helper('form');
			
	}
	
	public function index(){
		$this->load->view('login-signup/login_view');
 	}
	
	public function registered(){
		$rules = array(
		array('field'=>'username','label'=>'Username','rules'=>'trim|required|min_length[6]|max_length[32]|is_unique[users.username]'),
		array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]|matches[c_password]'),
		array('field'=>'c_password','label'=>'Retype Password', 'rules'=> 'required|min_length[6]'),
		array('field'=>'first_name','label'=>'First Name','rules'=>'required|min_length[3]'),
		array('field'=>'middle_initial','label'=>'Middle Initial'),
		array('field'=>'last_name','label'=>'Last Name','rules'=>'required|min_length[2]'),
		array('field'=>'email_address','label'=>'Email Adress','rules'=>'trim|required|valid_email|is_unique[users.email_address]'),
		array('field'=>'contact_number','label'=>'Contact Number','rules'=>'required|numeric'),
		array('field'=>'role','label'=>'Role','value' => 'user','rules'=>'required')
		);
		
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'TIP Career Center';
			$this->load->view('/template/login_header', $data);
			$this->load->view('/template/login_navbar', $data);
			$this->load->view('login-signup/login_view');
			$this->load->view('/template/login_footer');
		}else{
			$this->register->registered();
			redirect('index.php/success', 'refresh');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url());
	}
}