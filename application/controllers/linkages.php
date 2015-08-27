<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start(); //we need to call PHP's session object to access it through CI
	class Linkages extends CI_Controller {

    	function __construct(){
			parent::__construct();
			$this->load->library('pagination');
			$this->load->database();
			$this->load->library('session');
			$this->load->model('linkages_model');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->dbutil();
	        $this->load->helper('download');
    	}

    	function index(){
	        if($this->session->userdata('logged_in')){
	            $session_data = $this->session->userdata('logged_in');
	            $data['username'] = $session_data['username'];
	            $data['title'] = 'TIP Career Center';
	            $this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('template/footer');
	            
	          	if ($query = $this->linkages_model->view()){
	          		$data['records'] = $query;
	          	}   
		        $this->load->view('linkage/linkages_view', $data);		    
		    }else{
		         	//If no session, redirect to localeconv(oid)                                                                                                                                                       gin page
		         	redirect('', 'refresh');
		    }
    	}

    	function create(){
    		if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
                $this->load->view('template/header', $data);
                $this->load->view('template/navbar');
                $this->load->view('linkage/linkages_create', $data);
                $this->load->view('template/footer');

            }else{
	        //If no session, redirect to login page
             redirect('', 'refresh');
            }
    	}

    	function add(){
    		$rules = array(
				array('field'=>'company_name','rules'=>'required'),
				array('field'=>'company_tel_no','rules'=>'required|numeric'),
				array('field'=>'address_no','rules'=> 'required|numeric'),
				array('field'=>'street_address','rules'=>'required'),
				array('field'=>'city_address', 'rules'=>'required'),
				array('field'=>'region','rules'=>'required'),
				array('field'=>'zip','rules'=>'required'),
				array('field'=>'contact_fname','rules'=>'required'),
				array('field'=>'contact_mi'),
				array('field'=>'contact_lname','rules'=>'required'),
				array('field'=>'contact_position','rules'=>'required'),
				array('field'=>'contact_email', 'rules'=> 'required|valid_email'),
				array('field'=>'contact_number','rules'=>'required'),
				array('field'=>'sy_start','rules'=>'required'),
				array('field'=>'sy_end','rules'=>'required'),
				array('field'=>'program_supported','rules'=>'required'),
				array('field'=>'brief_desc','rules'=>'required'),
				array('field'=>'slo','rules'=>'required'),
				array('field'=>'grad_employability','rules'=>'required')
			);
			
			$this->form_validation->set_rules($rules);
				if($this->form_validation->run() == FALSE){
					if($this->session->userdata('logged_in')){
		                $session_data = $this->session->userdata('logged_in');
		                $data['username'] = $session_data['username'];
		                $data['title'] = 'TIP Career Center';
		                $this->load->view('template/header', $data);
		                $this->load->view('template/navbar');
		                $this->load->view('linkage/linkages_create', $data);
		                $this->load->view('template/footer');

		            }else{
				        //If no session, redirect to login page
			            redirect('', 'refresh');
		            }
				}else{
					$this->linkages_model->create();
					redirect('index.php/success', 'refresh');
				}
    	}

    	function delete(){
			$this->linkages_model->delete();
			$this->index();
    	}

    	function show_linkage() {
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
				$id = $this->uri->segment(3);
				$data['linkage'] = $this->linkages_model->view();
				$data['single_linkage'] = $this->linkages_model->show_linkage($id);
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('linkage/linkages_update', $data);
	            $this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            } 
		}

		function update_linkage() {
			$id= $this->input->post('linkages_id');
			$data = array(
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
			$this->linkages_model->update_linkage($id,$data);
			$this->show_linkage();
		}

		function show_view_linkage() {
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
				$id = $this->uri->segment(3);
				$data['linkage'] = $this->linkages_model->view();
				$data['single_linkage'] = $this->linkages_model->show_linkage_rec($id);
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('linkage/view_linkage_rec', $data);
	            $this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            } 
		}
		
		function view_linkage() {
			$id= $this->input->post('linkages_id');
			$data = array(
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

			$this->linkages_model->view_linkage($id,$data);
			$this->show_view_linkage();
		}

		function csv($query, $filename = 'CSV_Report_Linkages.csv'){
	        $delimiter = ",";
	        $newline = "rn";
	        $query = $this->db->query("select * from linkages");
	        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
	        force_download($filename, $data);
    	}
		
		function search_linkage(){
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           		$data['records'] = $this->linkages_model->get_linkage();
				
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
				$this->load->view('linkage/linkages_view', $data);	            
				$this->load->view('template/footer');
	         
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            }
		}
	} 
?> 