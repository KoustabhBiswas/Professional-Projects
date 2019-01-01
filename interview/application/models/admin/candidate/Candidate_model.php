<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Candidate_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->database();

	}
	
	function  get_candidate()
	{
		$query = $this->db->select('cand.user_id_pk,cand.first_name,cand.middle_name,cand.last_name,cand.mobile_no,cand.mobile_no,cand.landline_no,cand.address_1,cand.address_2,cand.pin_code,cand.email,cand.skills,cand.10th_school_name,cand.10th_marks,cand.10th_board,cand.12th_school_name,cand.12th_marks,cand.12th_board,cand.graduation_college,cand.graduation_university,cand.graduation_marks,cand.graduation_degree,cand.experience_year,cand.experience_month,cand.gender,state.state_name,city.city_name')
							->from('users as cand')
							->join('states as state','cand.state_id_fk=state.state_id','left')
							->join('cities as city','cand.city_id_fk=city.city_id','left')
							->get();
		return $query->result_array();

	}
	function get_candidate_detls($id_hash)
	{
		$query = $this->db->select('cand.user_id_pk,cand.first_name,cand.middle_name,cand.last_name,cand.mobile_no,cand.mobile_no,cand.landline_no,cand.address_1,cand.address_2,cand.pin_code,cand.email,cand.skills,cand.10th_school_name,cand.10th_marks,cand.10th_board,cand.12th_school_name,cand.12th_marks,cand.12th_board,cand.graduation_college,cand.graduation_university,cand.graduation_marks,cand.graduation_degree,cand.experience_year,cand.experience_month,cand.gender,state.state_name,city.city_name')
							->from('users as cand')
							->join('states as state','cand.state_id_fk=state.state_id','left')
							->join('cities as city','cand.city_id_fk=city.city_id','left')
							->where(
								array(
									'md5(cand.user_id_pk) =' => $id_hash
								)
							)
							->get();
		return $query->result_array();
	}
}