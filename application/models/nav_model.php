<?php
class Nav_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get_nav()
	{
		$nav = array(
					array('label' => 'home','uri' => ''),
					array('label' => 'about','uri' => 'about'),
					array('label' => 'our work','uri' => 'our-work'),
					array('label' => 'the team','uri' => 'meet-the-team'),
					array('label' => 'careers','uri' => 'careers'),
					array('label' => 'contact','uri' => 'contact')
				);
		return $nav;	
	}
}