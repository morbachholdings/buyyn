<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Charts extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
		$this->load->model('mcharts');
		$this->load->library('session');
	}

	function all_member_data()
	{
		$data["start_year"] =  $this->input->post('date_from');
		$data["end_year"] =  $this->input->post('date_to');
		$chart_data = $this->mcharts->view_all_member($data);
		foreach ($chart_data->result_array() as $row) {
			$output[] = (floatval($row["Total"])
			);
		}

		print_r(json_encode($output));
	}

	function all_supplier_data()
	{
		$data["start_year"] =  $this->input->post('date_from');
		$data["end_year"] =  $this->input->post('date_to');
		$chart_data = $this->mcharts->view_all_supplier($data);
		foreach ($chart_data->result_array() as $row) {
			$output[] = array(
				floatval($row["Total"])
			);
		}

		print_r(json_encode($output));
	}


	function member_data()
	{
		if ($this->session->userdata('full_name') != '') {
			$data["Email"] = $this->session->userdata('full_name');
			$email = $this->session->userdata('full_name');
			$user_id = $this->musers->user_id($email);
			$chart_data = $this->mcharts->member_data($user_id);
			foreach ($chart_data->result_array() as $row) {
				$output[] = (floatval($row["Total"])
				);
			}

			print_r(json_encode($output));
		}
	}
	function member_data_single()
	{
		if ($this->session->userdata('full_name') != '') {
			$data["Email"] = $this->session->userdata('full_name');
			$email = $this->session->userdata('full_name');
			$val["user_id"] = $this->musers->user_id($email);
			$val["member_ID"] = $this->input->post('member');
			$val["year"] = $this->input->post('year');
			$chart_data = $this->mcharts->member_data_single($val);
			foreach ($chart_data->result_array() as $row) {
				$output[] = (floatval($row["Total"])
				);
			}

			print_r(json_encode($output));
		}
	}

	function member_data_single_year()
	{
		if ($this->session->userdata('full_name') != '') {
			$data["Email"] = $this->session->userdata('full_name');
			$email = $this->session->userdata('full_name');
			$val["user_id"] = $this->musers->user_id($email);
			$val["year"] = $this->input->post('year');
			$chart_data = $this->mcharts->member_data_single_year($val);
			foreach ($chart_data->result_array() as $row) {
				$output[] = (floatval($row["Total"])
				);
			}

			print_r(json_encode($output));
		}
	}
}
