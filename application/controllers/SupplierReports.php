<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierReports extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        $this->load->model('msubmissions');
		$this->load->library('session');
        $this->load->model('mnotifications');
	}

    public function supplier_reports()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $user_id = $this->musers->user_id($data["Email"]);
            // $data["suppliers"] = $this->msubmissions->get_suppliers();
            // $data["member_submissions"] = $this->msubmissions->member_submissions();
            $value["notifications"]=$this->mnotifications->view_supplier_notifications($user_id);
            $this->load->view('supplier_header',$value);
            $this->load->view('supplier_reports');
         }
    
    }
}