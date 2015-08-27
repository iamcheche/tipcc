<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Events_model extends CI_Model {

		public function __construct(){
			$this->load->database();
			$pref  = array('next_prev_url' => base_url() . 'index.php/home/events' , );

			$this->load->library('calendar', $pref);
			
		}

		function generate_calendar($year, $month){
			$events = $this->get_events($year, $month);

			return $this->calendar->generate($year, $month, $events);
		}

		function get_events($year, $month){
			$events = array();

			$query = $this->db->select('event_id, event_date, event_name')->from('events')->like('event_date', "$year-$month", 'after')->get();
			$query = $query->result();			

			foreach ($query as $row) {
				$day = substr($row->event_date,8,2);
				$events[$day] = $row->event_name;
			}

			return $events;
		}

		function create(){
			$data=array(
				'event_date'=>$this->input->post('event_date', $this->uri->segment(3)),
				'event_name'=>$this->input->post('event_name')
			);

			$this->db->set('event_date', 'NOW()', FALSE);
			$this->db->insert('events',$data);
		}

 		function delete(){
        	$this->db->where('event_id', $this->uri->segment(3));
        	$this->db->delete('events');
        }
    
    	function view(){
          	$sql = 'SELECT event_id, event_name FROM events WHERE event_date = CURDATE() ';
          	$query = $this->db->query($sql);
          	$result = $query->result();
          	return $result;		
		}

		function update_event($id,$data){
			$this->db->where('event_id', $id, $this->uri->segment(3));
			$this->db->update('events', $data);
		}

		function show_event($data){
			$this->db->select('*');
			$this->db->from('events');
			$this->db->where('event_id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}

		function search_event(){
			$match = $this->input->post('search_event');
			$this->db->like('event_date',$match);
  			$records = $this->db->get('events');
  			return $records->result();
		}
    }

?>