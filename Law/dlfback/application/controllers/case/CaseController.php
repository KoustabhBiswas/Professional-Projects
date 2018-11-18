<?php
use Restserver\Libraries\REST_Controller;

if (!defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

/**
 * 
 */
class CaseController extends REST_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('case/Case_model','case_model');

	}
	function index_post()
	{
		$case = json_decode(file_get_contents("php://input",TRUE));
		$insert_array = array(
							'case_no' => $this->post('case_no'),
							'appl_name' => $this->post('appl_name'),
							'client_id_fk' => $this->post('client_id'),
							'case_status_id_fk' => $this->post('case_status'),
							'case_file_date' => $this->post('case_file_date'),
							'active_status' => '1'
						);
		$insert_status = $this->case_model->add_case($insert_array);
		if($insert_status)
		{
			$this->response(array('status' => 'false'),REST_Controller::HTTP_OK);
			// echo json_encode(array('status' => 'false'));
		}
		
	}
}