<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Case_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function add_case($case)
	{
		$this->db->insert('client_case',$case);
		return true;
	}
}