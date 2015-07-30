<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function get_linkages(){
        $sql = 'SELECT * FROM linkages';
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;		
	}	
}
?>