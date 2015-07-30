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
			/*$this->db->trans_begin();

			//company
			$company_name = array('company_name'=>$this->input->post('company_name'));
			$company_tel_no = array('company_tel_no'=>$this->input->post('company_tel_no'));
			//contact -ok
			$contact_fname = array('contact_fname'=>$this->input->post('contact_fname'));
			$contact_mi = array('contact_mi'=>$this->input->post('contact_mi'));
			$contact_lname = array('contact_lname'=>$this->input->post('contact_lname'));
			$contact_position = array('contact_position'=>$this->input->post('contact_position'));
			$contact_email = array('contact_email'=>$this->input->post('contact_email'));
			$contact_number = array('contact_number'=>$this->input->post('contact_number'));
			//address - ok
			$address_number = array('address_number'=>$this->input->post('address_number'));
			$street_address = array('street_address'=>$this->input->post('street_address'));
			$city_address = array('city_address'=>$this->input->post('city_address'));
			$region = array('region'=>$this->input->post('region'));
			$zip = array('zip'=>$this->input->post('zip'));
			//partnership
			$sy_start = array('sy_start'=>$this->input->post('sy_start'));
			$sy_end = array('sy_end'=>$this->input->post('sy_end'));
			//linkages
			$program_supported = array('program_supported'=>$this->input->post('program_supported'));
			$brief_desc = array('brief_desc'=>$this->input->post('brief_desc'));
			$grad_employability = array('grad_employability'=>$this->input->post('grad_employability'));

			$address_id = $this->db->insert_id();
			$contact_id = $this->db->insert_id();
			$company_id = $this->db->insert_id();
			$length_id = $this->db->insert_id();

			$this->db->query('INSERT INTO contacts VALUES (' . $contact_fname . ',' . $contact_mi . ',' . $contact_lname . ',' . $contact_position . ',' . $contact_email . ',' . $contact_number . ')');
			$this->db->query('INSERT INTO address VALUES (' . $address_number . ',' . $street_address . ',' . $city_address . ',' . $region . ','. $zip . ')');
			$this->db->query('INSERT INTO partnership_length VALUES ('. $sy_start . ',' . $sy_end .')');
			$this->db->query('INSERT INTO companies VALUES (' . $company_name . ',' . $address_id .',' . $company_tel_no . ',' . $contact_id . ')');
			$this->db->query('INSERT INTO industry_linkages VALUES (' . $commpany_id . ',' . $contact_id . ',' . $length_id . ',' . $program_supported . ',' . $brief_desc . ',' . $grad_employability .  ')');
			if ($this->db->trans_status() === FALSE){
			        $this->db->trans_rollback();
			}else{
			        $this->db->trans_commit();
			}*/
			
		
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

		// Function To Fetch Selected Student Record
		function show_linkage($data){
			$this->db->select('*');
			$this->db->from('linkages');
			$this->db->where('linkage_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		// Update Query For Selected Student
		function update_linkage($id,$data){
			$this->db->where('linkage_id', $id, $this->uri->segment(3));
			$this->db->update('linkages', $data);
		}

		// Function To Fetch Selected Student Record
		function show_linkage_rec($data){
			$this->db->select('*');
			$this->db->from('linkages');
			$this->db->where('linkage_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}
		
		// Update Query For Selected Student
		function view_linkage($id,$data){
			$this->db->where('linkage_id', $id, $this->uri->segment(3));
			$this->db->update('linkages', $data);
		}
	}
?>