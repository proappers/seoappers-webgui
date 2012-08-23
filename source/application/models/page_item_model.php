<?php

class Page_item_model extends CI_Model {

	public function __construct() {
	
	}
	
	public function get_results_by_page_id($id = false) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('page_item', array('page_id' => (int)$id));
		
		return $query->result();
	}
	
	public function get_results_by_crawl_id($id = false) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('page_item', array('crawl_id' => (int)$id));
		
		return $query->result();
	}
	
	public function get_results_by_website_id($id = false) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('page_item', array('website_id' => (int)$id));
		
		return $query->result();
	}

}