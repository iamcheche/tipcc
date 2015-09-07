<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Subscribe_model extends CI_Model {
		
		public function __construct(){
			$this->load->database();
		}

		function view(){
          	$sql = 'SELECT * FROM subscribers';
          	$query = $this->db->query($sql);
          	$result = $query->result();
          	return $result;		
		}

		function subscriber(){
			$data=array(
				'name'=>$this->input->post('name'),
				'email' => $this->input->post('email'),
				'contact_number' => $this->input->post('contact_number'),
			);

			$this->db->insert('subscribers',$data);

			return true;	
		}

		function show_subscriber($data){
			$this->db->select('*');
			$this->db->from('subscribers');
			$this->db->where('sub_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		function update_subscriber($id,$data){
			$this->db->where('sub_id', $id, $this->uri->segment(3));
			$this->db->update('subscribers', $data);
		}

		function show_subscriber_rec($data){
			$this->db->select('*');
			$this->db->from('subscribers');
			$this->db->where('sub_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}

		function view_subscriber($id,$data){
			$this->db->where('sub_id', $id, $this->uri->segment(3));
			$this->db->update('subscribers', $data);
		}

		
	}
?>