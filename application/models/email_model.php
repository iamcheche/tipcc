<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Email_model extends CI_Model {

		public function __construct(){
			$this->load->database();
		}

		function email_view(){
          	$sql = 'SELECT * FROM email_history';
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

		function add_email(){
			$data=array(
				'subject'=>$this->input->post('subject'),
				'message'=>$this->input->post('message')
			);

			$this->db->set('email_sent', 'NOW()', FALSE);
			$this->db->insert('email_history',$data);
		}

		function get_email(){
			$match = $this->input->post('search');
			$this->db->like('email_id',$match);
  			$this->db->or_like('subject',$match);
  			$this->db->or_like('message',$match);
  			$this->db->or_like('email_sent',$match);
  			$records = $this->db->get('email_history');
  			return $records->result();
		}

		function view_email($id,$data){
			$this->db->where('email_id', $id, $this->uri->segment(3));
			$this->db->update('email_history', $data);
		}

		function show_email_rec($data){
            $this->db->select('*');
            $this->db->from('email_history');
            $this->db->where('email_id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }

        function delete(){
        	$this->db->where('email_id', $this->uri->segment(3));
        	$this->db->delete('email_history');
        }
	}
?>