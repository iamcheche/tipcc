<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Email_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}

		function email_view(){
          	$sql = 'SELECT * FROM linkages';
          	$query = $this->db->query($sql);
          	$result = $query->result();
          	return $result;		
		}


		function show_contact($data){
			$this->db->select('contact_fname, contact_mi, contact_lname');
			$this->db->from('linkages');
			$this->db->where('contact_email', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}