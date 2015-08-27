<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Linkages_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}

		function view(){
          	$sql = 'SELECT * FROM linkages';
          	$query = $this->db->query($sql);
          	$result = $query->result();
          	return $result;		
		}
		
		function delete(){
        	$this->db->where('linkage_id', $this->uri->segment(3));
        	$this->db->delete('linkages');
        }
    	
		public function create(){
			$data=array(
			'company_name'=>$this->input->post('company_name'),
			'company_tel_no'=>$this->input->post('company_tel_no'),
			'address_no'=>$this->input->post('address_no'),
			'street_address'=>$this->input->post('street_address'),
			'city_address'=>$this->input->post('city_address'),
			'region'=>$this->input->post('region'),
			'zip'=>$this->input->post('zip'),
			'contact_fname'=>$this->input->post('contact_fname'),
			'contact_mi'=>$this->input->post('contact_mi'),
			'contact_lname'=>$this->input->post('contact_lname'),
			'contact_position'=>$this->input->post('contact_position'),
			'contact_email'=>$this->input->post('contact_email'),
			'contact_number'=>$this->input->post('contact_number'),
			'sy_start'=>$this->input->post('sy_start'),
			'sy_end'=>$this->input->post('sy_end'),
			'program_supported'=>$this->input->post('program_supported'),
			'brief_desc'=>$this->input->post('brief_desc'),
			'slo'=>$this->input->post('slo'),
			'grad_employability'=>$this->input->post('grad_employability')
			);
			
			$this->db->insert('linkages',$data);

			return true;	
		}

		// Function To Fetch Selected Linkage Record
		function show_linkage($data){
			$this->db->select('*');
			$this->db->from('linkages');
			$this->db->where('linkage_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		// Update Query For Linkage Student
		function update_linkage($id,$data){
			$this->db->where('linkage_id', $id, $this->uri->segment(3));
			$this->db->update('linkages', $data);
		}

		// Function To Fetch Selected Linkage Record
		function show_linkage_rec($data){
			$this->db->select('*');
			$this->db->from('linkages');
			$this->db->where('linkage_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		// Update Query For Selected Linkage
		function view_linkage($id,$data){
			$this->db->where('linkage_id', $id, $this->uri->segment(3));
			$this->db->update('linkages', $data);
		}

		function get_linkage(){
			$match = $this->input->post('search');
			$this->db->like('linkage_id',$match);
  			$this->db->or_like('company_name',$match);
  			$this->db->or_like('region',$match);
  			$this->db->or_like('zip',$match);
  			$this->db->or_like('contact_fname', $match);
  			$this->db->or_like('contact_lname', $match);  			
  			$this->db->or_like('contact_position', $match);
  			$this->db->or_like('contact_email', $match);
  			$this->db->or_like('contact_number', $match);
  			$this->db->or_like('city_address', $match);
  			$records = $this->db->get('linkages');
  			return $records->result();
		}
	}
?>