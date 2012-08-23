<?php

class Crawl_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function get_results_by_crawl_id($id) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('crawl', array('crawl_id' => (int)$id));
		
		return $query->result();
	}
	
	public function get_results_by_website_id($id) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('crawl', array('website_id' => (int)$id));
		
		return $query->result();
	}

}