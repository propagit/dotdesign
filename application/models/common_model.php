<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {
	
	
	function is_unique($param)
	{
		$this->db->where($param['db_field'],$param['input_value']);
		
		# If status field needs to be checked
		if(isset($param['db_active_field']) && isset($param['db_active_value'])){
			$this->db->where($param['db_active_field'],$param['db_active_value']);		
		}
		$result = $this->db->get($param['db_table'])->row_array();
		if($result){
			return false;	
		}
		return true;
	}
}