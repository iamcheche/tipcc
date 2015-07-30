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
	
	
	function index(){	

	}

	function linkage()
	{	
		prep_pdf(); // creates the footer for the document we are creating.

		//$query = $this->pdf_model->get_linkages();
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

		$this->cezpdf->ezTable($data_table, $column_header, $title, array('width'=>800));
		$this->cezpdf->ezStream();
		
	}

}

?>