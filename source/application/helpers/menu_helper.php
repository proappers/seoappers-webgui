<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('menu'))
{
    function menu()
    {
        $ci=& get_instance();
		$ci->load->model('Website_model');
		$ci->load->model('Crawl_model');
		
		$data['websites'] = $ci->Website_model->get_websites();
		
		$data['crawls'] = array();
		
		foreach($data['websites'] as $site) {
			$crawls = $ci->Crawl_model->get_results_by_website_id($site->website_id);
			$data['crawls']["$site->website_id"] = $crawls;
		}
	
		return $data;

    }   
}