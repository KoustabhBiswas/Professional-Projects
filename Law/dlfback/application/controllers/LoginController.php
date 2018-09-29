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
	}
	function index()
	{
		$credentials = json_decode(file_get_contents("php://input",true));
		echo json_encode($credentials);
	}
}