<?php

class Home extends CI_Controller {
	
	public function __construct() {

        parent::__construct();

		$this->load->model('Crawl_model');
		$this->load->model('Page_model');
		$this->load->model('Website_model');
		$this->load->model('Page_item_model');
		
	}
	
	public function index() {
		$data['websites'] = $this->Website_model->get_websites();
		
		$this->load->view('homeview', $data);
	}
	
}

?>