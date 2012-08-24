<?php

class Website_model extends CI_Model {
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function get_results_by_website_id($id) {
		if(!$id) {
			return false;
		}
		$query = $this->db->get_where('website', array('website_id' => (int)$id));
		
		return $query->result();
	}
	
	public function get_websites() {
		$query = $this->db->get('website');
		#$this->db->order_by('created', 'desc');
		
		return $query->result();
	}
	
	public function add_website($url = false, $name = false, $state = false, $seo_score = false, $created = false, $max_sites = false) {
		if(!($url & $name & $state & $seo_score & $created & $max_sites)) {
			return false;
		}
		
		$data = array(
			'url' => $url,
			'name' => $name,
			'state' => $state,
			'seo_score' => $seo_score,
			'created' => $created,
			'max_sites' => $max_sites
		);
		
		$this->db->insert('website', $data);
	}
	
}