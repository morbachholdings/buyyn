<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierSubmissions extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        $this->load->model('msubmissions');
		$this->load->library('session');
		$this->load->model('mnotifications');
	}

    public function supplier_submisions()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $data["user_details"] = $this->musers->user_details($data);
			$user_id = $this->musers->user_id($data["Email"]);
			// $value["notifications"]=$this->mnotifications->view_supplier_notifications($user_id);
            $data["suppliers"] = $this->msubmissions->get_suppliers();
			$data["user_id"] = $user_id;
			$value["notification_count"]=$this->mnotifications->notification_count($user_id);
            $data["member_submissions"] = $this->msubmissions->view_member_submissions($user_id);
			$data["view_supplier_submisions"]=$this->msubmissions->view_supplier_pending_submission_table($user_id);
					
			$this->msubmissions->delete_zero();
            $this->load->view('supplier_header',$value);
            $this->load->view('supplier_submissions',$data);
        }
    
    }
    public function insert_parent()
	{
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
			$email=$this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
		$data = array(
			'reference_number'	=>  $this->input->post('reference_number'),
			'Supplier_ID'		=>	$user_id,
			'Member_ID'			=>	$this->input->post('member'),
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
		$date = new DateTime("now", new DateTimeZone('Australia/Melbourne'));
		$params=array(

			'title'=>"New Submission Added for- ".$this->input->post('financial_month') ." - ". $this->input->post('financial_year'),
			'description'=>$this->input->post('reference_number'),
			'user_id'=> $user_id,
			'is_read'=>0,
			'created_date'=>$date->format('Y-m-d H:i:s')
		);
		$this->mnotifications->add_notification($params);


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

	public function view_submission()
	{
		if ($this->session->userdata('full_name') != '') {
			$data["Email"] = $this->session->userdata('full_name');
			$email=$this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
			$value["user_name"] = $this->musers->user_details($data);
			$reference = $this->input->get("id");
			$push["supplier_data"] = $this->msubmissions->view_single_submission_supplier($reference);
			$push["member_data"] = $this->msubmissions->view_submission_member($reference);
			$push["get_user"] = $this->msubmissions->get_user($reference);
			$value["notification_count"]=$this->mnotifications->notification_count($user_id);
			$this->load->view('supplier_header', $value);
			$this->load->view('single_submission', $push);
		}
	}
}