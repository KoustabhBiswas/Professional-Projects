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
		return $this->db->insert_id();
	}
	function update_client($client,$client_id){
		$this->db->set($client)
				 ->where('user_id_pk',$client_id)
				 ->update('users');
		return true;
	}
	function get_clients(){
		$clients = $this->db->select('*')
							->from('users')
							->get();
		return $clients->result();
	}
	function delete_client($client_id){
		$this->db->where('user_id_pk',$client_id)
				 ->delete('users');
		return true;
	}
}