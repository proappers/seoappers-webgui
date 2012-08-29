<?php

class Home extends CI_Controller {
	
	public function __construct() {

        parent::__construct();

		$this->load->model('Crawl_model');
		$this->load->model('Page_model');
		$this->load->model('Website_model');
		$this->load->model('Page_item_model');
		$this->load->helper('menu');
		$this->load->helper('crawl');
		
	}
	
	public function index($crawl_id = false) {
		if(!$crawl_id) {
			$crawl_id = $this->Crawl_model->get_last_crawl();
		}
	
		$data = menu();
		
		$data['active_crawl'] = $this->Crawl_model->get_results_by_crawl_id($crawl_id);
		$data['pages'] = crawl($crawl_id);
		
		#var_dump($data);
		
		$this->load->view('homeview', $data);
		
	}
	
}

?>