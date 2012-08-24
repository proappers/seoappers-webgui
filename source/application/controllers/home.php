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
	
	public function index($crawl_id) {
		$data = menu();
		
		$data['pages'] = crawl($crawl_id);
		
		echo $crawl_id;
		
		$this->load->view('homeview', $data);
		
	}
	
}

?>