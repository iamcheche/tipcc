<?php

class Pdf extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('pdf_model');
		$this->load->helper('url');
		$this->load->library('cezpdf');
		$this->load->helper('pdf');
	}
	
	function linkage()
	{	
		prep_pdf(); 

		$query =  $this->db->query('SELECT * FROM linkages');
		$data_table = array();
		foreach ($query->result_array() as $row) {
				$data_table[] = $row;
			}	
		
		$title = 'List of Linkages';

		$column_header=array(
			'company_name' => 'Company Name',
			'company_tel_no' => 'Company Telephone Number',
			'address_no' => 'Adress No.',
			'street_address' => 'Street Address',
			'city_address' => 'City Address',
			'region' => 'Region',
			'zip' => 'Zip Code',
			'contact_fname' => 'Contact First Name',
			'contact_mi' => 'Contact Middle Initial',
			'contact_lname' => 'Contact Last Name',
			'contact_position' => 'Contact Position',
			'email_address' => 'Contact Email Address',
			'contact_number' => 'Contact Number',
			'sy_start' => 'School Year Start',
			'sy_end' => 'School Year End',
			'program_supported' => 'Supported Programs',
			'brief_desc' => 'Brief Description',
			'slo' => 'Student Learning Outcome',
			'grad_employability' => 'Graduate Employability'
		);

		$this->cezpdf->ezTable($data_table, $column_header, $title, array('width'=>975));
		$this->cezpdf->ezStream();
		
	}

	function user(){	
		prep_pdf(); 

		$query =  $this->db->query('SELECT * FROM users');
		$data_table = array();
		foreach ($query->result_array() as $row) {
				$data_table[] = $row;
			}	
		
		$title = 'List of Users';

		$column_header=array(
			'user_id' => 'User ID',
			'username' => 'Username',
			'password' => 'Password',
			'c_password' => 'Confirm Password',
			'first_name' => 'First Name',
			'middle_initial' => 'Middle Initial',
			'last_name' => 'Last Name',
			'email_address' => 'Email Address',
			'contact_number' => 'Contact Number',
			'role' => 'Role',
			'date_created' => 'Date Created'
		);

		$this->cezpdf->ezTable($data_table, $column_header, $title, array('width'=>975));
		$this->cezpdf->ezStream();
		
	}

	function email_history(){	
		prep_pdf(); 

		$query =  $this->db->query('SELECT * FROM email_history');
		$data_table = array();
		foreach ($query->result_array() as $row) {
				$data_table[] = $row;
			}	
		
		$title = 'Email History';

		$column_header=array(
			'email_id' => 'Email ID',
			'subject' => 'Email Subject',
			'message' => 'Email Message(Body)',
			'email_sent' => 'Email Timestamp'
		);

		$this->cezpdf->ezTable($data_table, $column_header, $title, array('width'=>975));
		$this->cezpdf->ezStream();
		
	}

	function events(){	
		prep_pdf(); 

		$query =  $this->db->query('SELECT * FROM events ORDER BY event_date');
		$data_table = array();
		foreach ($query->result_array() as $row) {
				$data_table[] = $row;
			}	
		
		$title = 'Email History';

		$column_header=array(
			'event_date' => 'Event Date',
			'event_name' => 'Event'
		);

		$this->cezpdf->ezTable($data_table, $column_header, $title, array('width'=>975));
		$this->cezpdf->ezStream();	
	}

	function subscriber(){	
		prep_pdf(); 
		
		$query =  $this->db->query('SELECT * FROM subscribers');
		$data_table = array();
		foreach ($query->result_array() as $row) {
				$data_table[] = $row;
			}	
		
		$title = 'List of Subscribers';

		$column_header=array(
			'sub_id' => 'ID',
			'name' => 'Name',
			'email' => 'Email Address',
			'contact_number' => 'Contact Number'
		);

		$this->cezpdf->ezTable($data_table, $column_header, $title, array('width'=>975));
		$this->cezpdf->ezStream();	
	}
}

?>