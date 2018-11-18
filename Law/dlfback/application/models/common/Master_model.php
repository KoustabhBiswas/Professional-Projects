<?php

/**
* 
*/
class Master_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}
	function get_client()
	{
		$clients = $this->db->select('*')
							->from('users')
							->where(
								array(
									'role' => 'Client'
								)
							)
							->get();
		return $clients->result_array();
	}
	function get_case_status()
	{
		$status = $this->db->select('*')
							->from('case_status_master')
							->where(
								array(
									'active_status' => 1
								)
							)
							->get();
		return $status->result_array();
	}
	function get_states()
	{

		$states = $this->db->select('*')
						   ->from('states')
						   ->order_by('state_name','asc')
						  
						   ->get();
		return $states->result_array();
	}
	function get_city_by_state($state_id)
	{
		$cities = $this->db->select('*')
						   ->from('cities')
						   ->where(
						   		array(
						   			'state_id' => $state_id
						   		)
						   )
						   ->get();
		return $cities->result_array();
	}
}