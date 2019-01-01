<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('login_model');
		// $this->output->enable_profiler(TRUE);
	}
	function index()
	{
		// $this->login_model->test();
		$this->load->library('form_validation');
		$config = array(
					array(
						'field' => 'login_id',
						'label' => '<b>Login Id</b>',
						'rules' => 'trim|required'
					),

				);
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_view');
		}
		else
		{
			$login = $this->login_model->login_check($this->input->post('login_id'),$this->input->post('password'));
			if(count($login) == 1)
			{
				$this->session->set_userdata('user_info',$login[0]);
				return redirect(base_url()."admin/candidate/list_of_candidate");
			}
			else
			{
				$this->session->set_flashdata('login_error',"Invalid login credentials");
				$this->load->view('login_view');
			}
			/*print_r($login);
			die();*/
			
		}
		
		
	}
}