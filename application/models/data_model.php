<?php
class Data_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get_staff()
	{
		$staff = array(
							array('name' => 'Emad','image' => 'Emad.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Rabah','image' => 'Rabah.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Paris','image' => 'Paris.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Nabs','image' => 'Nabs.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Mark','image' => 'Mark.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Thimy','image' => 'Thimy.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Leonard','image' => 'Leonard1.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Elkie','image' => 'Elkie.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Annette','image' => 'Annette.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Kate','image' => 'Kate.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),	
							array('name' => 'Karl','image' => 'Karl.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Kerry','image' => 'Kerry.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Sarah','image' => 'Sarah.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Romain','image' => 'Romain.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Fiona','image' => 'Fiona.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Michael','image' => 'Michael.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Natalie','image' => 'Natalie.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Chris','image' => 'Chris.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Andrew','image' => 'Andrew.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Domenic','image' => 'Domenic.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Will','image' => 'Will.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Russell','image' => 'Russell.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Bryden','image' => 'Bryden.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('name' => 'Mark','image' => 'MarkZ.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => '')
							//array('name' => 'Sandra','image' => 'Sandra.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							//array('name' => 'Alexander','image' => 'Alexander.jpg','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							//array('name' => 'Kieran','image' => 'Kieran.jpg', 'location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
				
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