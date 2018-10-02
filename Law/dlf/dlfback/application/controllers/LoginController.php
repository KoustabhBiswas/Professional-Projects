<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class LoginController extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('login_model');
	}
	function index()
	{
		$fail_status = 0;
		$credentials = json_decode(file_get_contents("php://input",true));
		$check_credentials = $this->login_model->check_credentials($credentials[0],$credentials[1]);
		if(count($check_credentials) > 0)
		{
			echo json_encode($check_credentials);
			
		}
		else
		{
			echo json_encode($fail_status);
		}
	}
}