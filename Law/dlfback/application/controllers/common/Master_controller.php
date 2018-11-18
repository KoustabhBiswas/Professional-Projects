<?php
use Restserver\Libraries\REST_Controller;


if (!defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

/**
* 
*/
class Master_controller extends REST_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('common/Master_model','cm_model');
	}
	function get_client_get()
	{
		$clients = $this->cm_model->get_client();
		$this->response($clients,REST_Controller::HTTP_OK);
		// echo json_encode($clients,JSON_PRETTY_PRINT);
	}
	function get_case_status_get()
	{

		$status = $this->cm_model->get_case_status();
		$this->response($status,REST_Controller::HTTP_OK);
		// echo json_encode($status);
	}
	function get_states_get()
	{

		$states = $this->cm_model->get_states();
		$this->response($states,REST_Controller::HTTP_OK);
	}
	function get_city_by_state_get($state)
	{
		
		$city = $this->cm_model->get_city_by_state($state);
		$this->response($city,REST_Controller::HTTP_OK);
		// echo json_encode($city);
	}
}