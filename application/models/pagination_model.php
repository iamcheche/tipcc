<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	public function record_count() {
		return $this->db->count_all('linkages');
	}

	public function fetch_data($limit, $id) {
		$this->db->limit($limit);
		$this->db->where('linkage_id', $id);
		$query = $this->db->get('linkages');
		
		if ($query->num_rows() > 0) {
		foreach ($query->result() as $row) {
		$data[] = $row;
		}

		return $data;
		}
		return false;
	}
}
?>

