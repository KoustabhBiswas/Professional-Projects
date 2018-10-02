<?php


if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Master_controller extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('common/Master_model','cm_model');
	}
	function get_client()
	{
		$clients = $this->cm_model->get_client();
		echo json_encode($clients,JSON_PRETTY_PRINT);
	}
	function get_case_status()
	{

		$status = $this->cm_model->get_case_status();
		echo json_encode($status);
	}
	function get_states()
	{

		$states = $this->cm_model->get_states();
		echo json_encode($states);
	}
	function get_city_by_state($state)
	{
		
		$city = $this->cm_model->get_city_by_state($state);
		echo json_encode($city);
	}
}