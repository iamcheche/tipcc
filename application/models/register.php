<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Model {
	
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->view('register_view');//loads the register_view.php file in views folder
		}

		public function registered(){
			$data=array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'c_password'=>md5($this->input->post('c_password')),
			'first_name'=>$this->input->post('first_name'),
			'middle_initial'=>$this->input->post('middle_initial'),
			'last_name'=>$this->input->post('last_name'),
			'email_address'=>$this->input->post('email_address'),
			'contact_number'=>$this->input->post('contact_number'),
			'role'=>$this->input->post('role')
			);
			
			$this->db->set('date_created', 'NOW()', FALSE);
			$this->db->insert('users',$data);

			return true;
		}	
	}
?>