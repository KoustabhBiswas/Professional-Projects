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
							->join('states','states.state_id=users.state_id_fk','left')
							->get();
		return $clients->result();
	}
	function delete_client($client_id){
		$this->db->where('user_id_pk',$client_id)
				 ->delete('users');
		return true;
	}
	function check_duplicate_mail($mail)
	{
		$query = $this->db->select('email')
						  ->from('users')
						  ->where('email',$mail)
						  ->get();
		return $query->result_array();

	}
	function get_client_by_id($client_id)
	{
		$clients = $this->db->select('*')
							->from('users')
							->join('states','states.state_id=users.state_id_fk','left')
							->where(
								  array(
								  	  'users.user_id_pk' => $client_id
								  )
							)
							->get();
		return $clients->result_array();
	}
}