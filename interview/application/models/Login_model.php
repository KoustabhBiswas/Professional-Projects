<?php

/**
 * 
 */
class Login_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();
	}
	/*function test()
	{
		$array = array(
					'login_id' => "biswas.koustabh@gmail.com",
					'password' => sha1("koustabh123"),
					'entry_time' => date()
				);
		$this->db->insert("user_login",$array);
	}*/
	function login_check($login_id,$password)
	{
		$query = $this->db->select('user_login_id_pk,login_id')
						  ->from('user_login')
						  ->where(
						  		array(
						  			'login_id' => $login_id,
						  			'password' => sha1($password)
						  		)
						  )
						  ->get();
		return $query->result_array();
	}
}