<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start(); //we need to call PHP's session object to access it through CI
	class Users extends CI_Controller {

    	function __construct(){
			parent::__construct();
			$this->load->library('pagination');
			$this->load->database();
			$this->load->library('session');
			$this->load->model('users_model');
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
	            
	          	/*$linkage_result = $this->linkages_model->view();           
	          	$data['linkresult'] = $linkage_result;
	          	//load the department_view
	          	$this->load->view('linkages_view',$data);*/

	          	if ($query = $this->users_model->view()){
	          		$data['records'] = $query;
	          	}   
		        
		        $this->load->view('user/user_view', $data);
		    
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
                $this->load->view('user/users_create', $data);
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
					redirect('index.php/linkages/create');
				}else{
					$this->linkages_model->create();
					redirect('index.php/success', 'refresh');
				}
    	}

    	function delete(){
			$this->users_model->delete();
			redirect( 'index.php/users', 'refresh');
    	}

    	function show_user() {
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
				$id = $this->uri->segment(3);
				$data['users'] = $this->users_model->view();
				$data['single_user'] = $this->users_model->show_user($id);
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('user/user_update', $data);
	            $this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            } 
		}

		function update_user() {
			$id= $this->input->post('user_id');
			$data = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'c_password'=>$this->input->post('c_password'),
				'first_name'=>$this->input->post('first_name'),
				'middle_initial'=>$this->input->post('middle_initial'),
				'last_name'=>$this->input->post('last_name'),
				'email_address'=>$this->input->post('email_address'),
				'contact_number'=>$this->input->post('contact_number'),
				'role'=>$this->input->post('role'),
				'date_created'=>$this->input->post('date_created')
			);
			$this->users_model->update_user($id,$data);
			$this->show_user();
		}

		function show_view_user() {
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           
				$id = $this->uri->segment(3);
				$data['users'] = $this->users_model->view();
				$data['single_user'] = $this->users_model->show_user_rec($id);
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
	            $this->load->view('user/view_user', $data);
	            $this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            } 
		}
		
		function view_user() {
			$id= $this->input->post('user_id');
			$data = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'c_password'=>$this->input->post('c_password'),
				'first_name'=>$this->input->post('first_name'),
				'middle_initial'=>$this->input->post('middle_initial'),
				'last_name'=>$this->input->post('last_name'),
				'email_address'=>$this->input->post('email_address'),
				'contact_number'=>$this->input->post('contact_number'),
				'role'=>$this->input->post('role'),
				'date_created'=>$this->input->post('date_created')
			);
		$this->users_model->view_user($id,$data);
		$this->show_view_user();
		}

		function csv($query, $filename = 'CSV_Report_Users.csv'){
	        $delimiter = ",";
	        $newline = "rn";
	        $query = $this->db->query("select * from users");
	        $data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
	        force_download($filename, $data);
    	}

    	function search_user(){
			if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['title'] = 'TIP Career Center';
           		$data['records'] = $this->users_model->get_user();
				
				$this->load->view('template/header', $data);
	            $this->load->view('template/navbar');
				$this->load->view('user/user_view', $data);	            
				$this->load->view('template/footer');
	         }else{
		        //If no session, redirect to login page
	             redirect('', 'refresh');
            }
		}

	} 
?> 