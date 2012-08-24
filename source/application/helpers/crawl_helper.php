<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('crawl'))
{
    function crawl($id)
    {
		if(!$id) {
			return false;
		}
		
        $ci=& get_instance();
		$ci->load->model('Website_model');
		$ci->load->model('Crawl_model');
		$ci->load->model('Page_model');
		$ci->load->model('Page_item_model');
		
		$pages = array();
		
		$pages_result = $ci->Page_model->get_results_by_crawl_id($id);
		
		foreach($pages_result as $page) {
			$page_items = $ci->Page_item_model->get_results_by_page_id($page->page_id);
			$pages[] = array('page_data' => $page, 'page_items' => $page_items);
		}
		
		return $pages;

    }   
}