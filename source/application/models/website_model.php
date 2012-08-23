<?php

class Website_model extends CI_Model {
	
	public function __construct() {
		
	}
	
	public function get_results_by_website_id($id) 
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('website', array('website_id' => (int)$id));
	}
	
}