<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Success extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('success_view');
	}

}

?>