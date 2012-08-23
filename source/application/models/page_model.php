<?php

class Page_model extends CI_Model {
	
	public function __construct() {
	
	}
	
	public function get_results_by_page_id($id) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('page', array('page_id' => (int)$id));
		
		return $query->result();
	}
	
	public function get_results_by_crawl_id($id) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('page', array('crawl_id' => (int)$id));
		
		return $query->result();
	}

	public function get_results_by_website_id($id) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('page', array('website_id' => (int)$id));
		
		return $query->result();
	}
	
}