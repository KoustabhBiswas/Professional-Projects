<?php
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
		$this->response($clients,REST_Controller::HTTP_OK);
	}
	function users_post(){
		$fail_status = 0;
		$success_status = 1;
		//$client = json_decode(file_get_contents('php://input',TRUE));
		$password = "password";
		$check_mail = $this->cl_model->check_duplicate_mail($this->post('email'));		
		if(count($check_mail) > 0)
		{
			$this->response($fail_status,REST_Controller::HTTP_OK);
		}
		else
		{
			$client_id = $this->cl_model->insert_client($this->post());
			$client_update = array(
			
			'password' => md5($password),
			'active_status' => '0',
			'role' => "Client"
			);
			$this->cl_model->update_client($client_update,$client_id);
			$this->response($success_status,REST_Controller::HTTP_OK);
			
		}
		
	}
	function deleteclient_get($client_id){
		$success_status = 1;
		$this->cl_model->delete_client($client_id);
		$this->response($success_status,REST_Controller::HTTP_OK);
	}
	function get_client_by_id_get($client_id)
	{
		$client = $this->cl_model->get_client_by_id($client_id);
		$this->response($client,REST_Controller::HTTP_OK);
	}
}