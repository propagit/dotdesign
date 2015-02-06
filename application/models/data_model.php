<?php
class Data_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get_staff()
	{
		$staff = array(
							array('name' => 'Karl','image' => 'Karl.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Elkie','image' => 'Elkie.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Mark','image' => 'Mark.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Sandra','image' => 'Sandra.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Sarah','image' => 'Sarah.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Paris Kerr','image' => 'Paris.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Miles','image' => 'Miles.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Michael','image' => 'Michael.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => '')				
						);
		return $staff;	
	}
	
	function get_projects($key = '')
	{
		$projects = array(
							'victoria-bitter' => array(
									'name' => '',
									'image' => '',
									'location' => '',
									'desc' => '',
										'gallery' => array('img1.jpg','img2.jpg')
									),
						 );
		return $projects;	
	}
}