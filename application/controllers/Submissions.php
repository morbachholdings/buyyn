<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submissions extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        $this->load->model('msubmissions');
		$this->load->library('session');
	}

    public function submissions()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $data["suppliers"] = $this->msubmissions->get_suppliers();
            $data["member_submissions"] = $this->msubmissions->member_submissions();
            $this->load->view('header',$value);
            $this->load->view('submissions',$data);

        }
    
    }
    public function insert_parent()
	{
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');

		$data = array(
			'reference_number'	=>  $this->input->post('reference_number'),
			'Supplier_ID'		=>	$this->input->post('supplier_name'),
			'Member_ID'		=>	$this->input->post('member'),
			'amount'			=>	$this->input->post('price'),
			'date_placed'		=>	$this->input->post('date_placed'),
			'status'			=>	$this->input->post('status'),
			'is_child'			=> $this->input->post('is_child'),
			'financial_month'	=> $this->input->post('financial_month'),
			'financial_year'	=> $this->input->post('financial_year'),
            'added_by'          => $this->musers->user_id($data["Email"]),
            'updated_by'        => "",
            'created_date'        => date("Y-M-d H:i:s"),
            'updated_date'        => "",
            'deleted_date'        => "",


		);
		// $params = array(
		// 	'user_id'=> $this->session->userdata('user_id'),
		// 	'action' => "Submitted Data",
		// 	'ip' =>$_SERVER['REMOTE_ADDR'],
		// 	'created_at' => date("Y-m-d H:i:s"),
		// 	'updated_at' => date("Y-m-d H:i:s")
		// );
		// $this->mlog->add_log($params);


		print_r($this->msubmissions->insert_parent($data));
        }
        else{

        }
	}

	public function insert_child_invoices()
	{
		$member_name = $this->input->post('member_name');
		$amount = $this->input->post('amount');
		for ($count = 0; $count < count(($member_name)); $count++) {
			
			$data["reference_number"] = $this->input->post('referernce_number');
			$data["supplier_name"] = $this->input->post('supplier_name');
			$data["status"] = $this->input->post('status');
			$data["date_placed"] = $this->input->post('date_placed');
			$data["member_name"] = $member_name[$count];
			
			$data["amount"] = $amount[$count];
			$data["is_child"] = $this->input->post('is_child');
			$data["financial_month"] = $this->input->post('financial_month');
			$data["financial_year"] = $this->input->post('financial_year');
			$this->msubmissions->add_child_invoice($data);
		}
	}
}
