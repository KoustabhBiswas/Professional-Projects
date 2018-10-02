<?php
/**
* 
*/
class Client_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}
	function insert_client($client){
		$this->db->insert('users',$client);
		return true;
	}
	function get_clients(){
		$clients = $this->db->select('*')
							->from('users')
							->get();
		return $clients->result_array();
	}
}