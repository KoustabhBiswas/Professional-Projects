<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function check_credentials($username,$password)
	{
		$query = $this->db->select('*')
						  ->from('users')
						  ->where(
						  		array(
						  			'email' => $username,
						  			'password' => $password
						  		)
						  	)
						  ->get();
		return $query->result_array();
	}
}