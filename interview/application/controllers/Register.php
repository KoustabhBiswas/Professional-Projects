<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Register extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('register_model');

	}
	function index()
	{
		$this->load->library('form_validation');

		$data['states'] = $this->register_model->get_states();
		$config = array(
					array(
						'field' => 'fname',
						'label' => 'First Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'mname',
						'label' => 'Middle Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'lname',
						'label' => 'Last Name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'mobile_no',
						'label' => 'Mobile',
						'rules' => 'trim|required|numeric'
					),
					array(
						'field' => 'email',
						'label' => 'Email Id',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'state_id_fk',
						'label' => 'State',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'city_id_fk',
						'label' => 'City',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'pin_code',
						'label' => 'Pincode',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'permanent_addr',
						'label' => 'Permanent address',
						'rules' => 'trim|required'
					),
					
					array(
						'field' => 'present_addr',
						'label' => 'Present address',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'gender',
						'label' => 'Gender',
						'rules' => 'trim|required'
					),

					array(
						'field' => '10th_school',
						'label' => 'Class 10 school name',
						'rules' => 'trim|required'
					),
					array(
						'field' => '10th_marks',
						'label' => 'Class 10 marks',
						'rules' => 'trim|required|numeric'
					),
					array(
						'field' => '10th_board',
						'label' => 'Class 10 board',
						'rules' => 'trim|required'
					),
					array(
						'field' => '12th_school',
						'label' => 'Class  12 school name',
						'rules' => 'trim|required'
					),
					array(
						'field' => '12th_board',
						'label' => 'Class  12th class board',
						'rules' => 'trim|required'
					),
					array(
						'field' => '12th_marks',
						'label' => 'Class  12th marks',
						'rules' => 'trim|required|numeric'
					),
					array(
						'field' => 'grad_clg',
						'label' => 'College name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'university_name',
						'label' => 'University name',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'grad_degree',
						'label' => 'Graduation degree',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'skills',
						'label' => 'Skills',
						'rules' => 'trim|required'
					),
					array(
						'field' => 'exp_yr',
						'label' => 'Experience year',
						'rules' => 'trim|required|numeric'
					),
					array(
						'field' => 'exp_month',
						'label' => 'Experience month',
						'rules' => 'trim|required|numeric'
					),

					


				);
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register/register',$data);
		}
		else
		{
			$insert_array = array(
								'first_name' => $this->input->post('fname'),
								'middle_name' => $this->input->post('mname'),
								'last_name' => $this->input->post('lname'), 
								'mobile_no' => $this->input->post('mobile_no'), 
								'landline_no' => $this->input->post('landline_no'), 
								'address_1' => $this->input->post('permanent_addr'), 
								'address_2' => $this->input->post('present_addr'),
								'gender' => $this->input->post('gender'),
								'state_id_fk' => $this->input->post('state_id_fk'), 
								'city_id_fk' => $this->input->post('city_id_fk'), 
								
								'pin_code' => $this->input->post('pin_code'), 
								'email' => $this->input->post('email'), 
								'skills' => $this->input->post('skills'), 
								'experience_year' => $this->input->post('exp_yr'), 
								'experience_month' => $this->input->post('exp_month'), 
								'10th_school_name' => $this->input->post('10th_school'), 
								'10th_board' => $this->input->post('10th_board'), 
								'10th_marks' => $this->input->post('10th_marks'), 
								'12th_school_name' => $this->input->post('12th_school'), 
								'12th_board' => $this->input->post('12th_board'), 
								'12th_marks' => $this->input->post('12th_marks'), 
								'graduation_college' => $this->input->post('grad_clg'), 
								'graduation_university' => $this->input->post('university_name'), 
								// `graduation_marks` => $this->input->post('grad_ma'), 
								'graduation_degree'  => $this->input->post('grad_degree'), 
								'entry_time' => date('Y-m-d h:i:s'), 
								'entry_ip' => $this->input->ip_address(), 
								'active_status' => 1, 
								'role' => 2, 
							);
			$insert_status = $this->register_model->insert_details($insert_array);
			if($insert_status)
			{
				$this->session->set_flashdata('success_msg',"Successfully registered");
				return redirect('register');
			}
			else
			{
				$this->session->set_flashdata('fail_msg',"Successfully Not  registered. Please try again after some time...");
				return redirect('register');
			}
		}
	}
	function get_city_by_state($state_id)
	{
		$data['cities'] = $this->register_model->get_city_by_state($state_id);
		$this->load->view('register/ajax_city',$data);
	}
}