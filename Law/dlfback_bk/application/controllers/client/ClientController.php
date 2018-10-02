<?php
// require(APPPATH.'libraries/REST_Controller.php');
/**
* 
*/
use Restserver\Libraries\REST_Controller;
if (!defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class ClientController extends REST_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('client/Client_model','cl_model');
	}
	function index_get(){
		$clients = $this->cl_model->get_clients();
		$this->set_response($clients,REST_Controller::HTTP_OK);
	}
	function user_get(){
		$users = "Koustabh";
		 $this->response($users, REST_Controller::HTTP_OK);
	}
}