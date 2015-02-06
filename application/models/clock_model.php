<?php
class Clock_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get_cities_offset()
	{
		$cities = array(
						'stlouis' => 'America/Chicago',
						'sydney' => 'Australia/Sydney',
						'china' => 'Asia/Shanghai'
						);
						
		$cities_offsets = array();
		foreach($cities as $key=>$val){
			$cities_offsets[$key] = $this->calculate_utc_offset($val);
		}
		return $cities_offsets;
	}
	
	function calculate_utc_offset($time_zone){
		$theTime = time(); # specific date/time we're checking, in epoch seconds. 
		$tz = new DateTimeZone($time_zone); 
		$transition = $tz->getTransitions($theTime, $theTime); 
		
		# only one array should be returned into $transition. Now get the data: 
		$offset = $transition[0]['offset']; 
		# $abbr = $transition[0]['abbr']; 
		return $offset/3600;	
	}
}