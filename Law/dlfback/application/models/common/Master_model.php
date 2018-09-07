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
}