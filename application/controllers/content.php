<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL);
	}
	
	function index()
	{
		$this->load->view('common/header');
		$this->load->view('pages/home');
		$this->load->view('common/footer');
	}
	
	function about()
	{				
		$data['cities'] = $this->_get_cities_offset();
						
		$this->load->view('common/header');
		$this->load->view('pages/about',$data);
		$this->load->view('common/footer');
	}
	
	
	function our_work()
	{
		$this->load->view('common/header');
		$this->load->view('pages/work/work_list');
		$this->load->view('common/footer');	
	}
	
	
	
	/*
		Private helper functions
	*/
	
	function _get_cities_offset()
	{
		$cities = array(
						'stlouis' => 'America/Chicago',
						'sydney' => 'Australia/Sydney',
						'china' => 'Asia/Shanghai'
						);
						
		$cities_offsets = array();
		foreach($cities as $key=>$val){
			$cities_offsets[$key] = $this->_calculate_utc_offset($val);
		}
		return $cities_offsets;
	}
	
	function _calculate_utc_offset($time_zone){
		$theTime = time(); # specific date/time we're checking, in epoch seconds. 
		$tz = new DateTimeZone($time_zone); 
		$transition = $tz->getTransitions($theTime, $theTime); 
		
		# only one array should be returned into $transition. Now get the data: 
		$offset = $transition[0]['offset']; 
		# $abbr = $transition[0]['abbr']; 
		return $offset/3600;	
	}
	
	
	
	
	
	
}

/* End of file content.php */
/* Location: ./application/controllers/content.php */