<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class CaseController extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('case/Case_model','case_model');

	}
	function index()
	{
		$case = json_decode(file_get_contents("php://input",TRUE));
		$insert_array = array(
							'case_no' => $case->case_no,
							'appl_name' => $case->appl_name,
							'client_id_fk' => $case->client_id,
							'case_status_id_fk' => $case->case_status,
							'case_file_date' => $case->case_file_date,
							'active_status' => '1'
						);
		$insert_status = $this->case_model->add_case($insert_array);
		if($insert_status)
		{
			echo json_encode(array('status' => 'false'));
		}
		
	}
}