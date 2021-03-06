<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Users_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}

		function view(){
          	$sql = 'SELECT * FROM users';
          	$query = $this->db->query($sql);
          	$result = $query->result();
          	return $result;		
		}

		
		function delete(){
        	$this->db->where('user_id', $this->uri->segment(3));
        	$this->db->delete('users');
        }
    	
    	public function create(){
		
			$data=array(
				'user_id'=>$this->input->post('user_id'),
				'password'=>$this->input->post('password'),
				'c_password' => $this->input->post('c_password'),
				'first_name' => $this->input->post('first_name'),
				'middle_initial' => $this->input->post('middle_initial'),
				'last_name' => $this->input->post('last_name'),
				'email_address' => $this->input->post('email_address'),
				'contact_number' => $this->input->post('contact_number'),
				'role' => $this->input->post('role'),
				'date_created' => $this->input->post('date_created')
			);
			
			$this->db->insert('users',$data);

			return true;	
		}

		function show_user($data){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		function update_user($id,$data){
			$this->db->where('user_id', $id, $this->uri->segment(3));
			$this->db->update('users', $data);
		}

		function show_user_rec($data){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('user_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		function view_user($id,$data){
			$this->db->where('user_id', $id, $this->uri->segment(3));
			$this->db->update('users', $data);
		}

		function get_user(){
			$match = $this->input->post('search');
			$this->db->like('user_id',$match);
  			$this->db->or_like('username',$match);
  			$this->db->or_like('first_name',$match);
  			$this->db->or_like('last_name',$match);
  			$this->db->or_like('contact_number', $match);
  			$this->db->or_like('email_address', $match);  			
  			$this->db->or_like('role', $match);
  			$this->db->or_like('date_created', $match);
  			$records = $this->db->get('users');
  			return $records->result();
		}
	}
?>