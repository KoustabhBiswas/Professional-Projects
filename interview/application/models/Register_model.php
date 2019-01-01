<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Register_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}
	function get_states()
	{
		$query = $this->db->select('state_id,state_name')
						  ->from('states')
						  ->order_by('state_name','asc')
						  ->get();
		return $query->result_array();
	}
	function get_city_by_state($state_id)
	{
		$query = $this->db->select('city_id,city_name')
						  ->from('cities')
						  ->where('state_id',$state_id)
						  ->get();
		return $query->result_array();
	}
	function insert_details($insert_array)
	{
		$this->db->insert('users',$insert_array);
		return true;
	}
}
