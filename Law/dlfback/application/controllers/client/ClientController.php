<?php
// require(APPPATH.'libraries/REST_Controller.php');
/**
* 
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');


class ClientController extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('client/Client_model','cl_model');
	}
	function index(){
		$clients = $this->cl_model->get_clients();
		// $data['users'] = $this->cl_model->get_clients();
		echo json_encode($clients,JSON_PRETTY_PRINT);
	}
	function insert_client(){
		$client = json_decode(file_get_contents('php://input',TRUE));
		$password = "password";		
		$client_id = $this->cl_model->insert_client($client);
		$client_update = array(
			'password' => password_hash($password,PASSWORD_DEFAULT),
			'active_status' => '0',
			'role' => "Client"
		);
		$this->cl_model->update_client($client_update,$client_id);
		echo json_encode($client_id,JSON_PRETTY_PRINT);
	}
	function delete_client($client_id){
		$this->cl_model->delete_client($client_id);
		echo json_encode("200");
	}
}