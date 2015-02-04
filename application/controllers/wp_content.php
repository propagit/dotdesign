<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wp_content extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		#error_reporting(E_ALL);
	}
	
	/* wp header top bar */
	function get_header_top_bar(){
		echo $this->load->view('common/header_top_bar',true);	
	}
	/* wp menu */
	function get_nav(){
		echo $this->load->view('common/nav',true);	
	}
	/* wp footer */
	function get_footer(){
		echo $this->load->view('common/footer_content',true);	
	}
	
	
	
	
}

/* End of file wp_content.php */
/* Location: ./application/controllers/wp_content.php */