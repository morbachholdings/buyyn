<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierDashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        $this->load->model('msubmissions');
		$this->load->library('session');
	}

    public function supplier_dashboard()
    {
        // if ($this->session->userdata('full_name') != '') 
        // {
            // $data["Email"] = $this->session->userdata('full_name');
            // $value["user_name"] = $this->musers->user_details($data);
            // $data["suppliers"] = $this->msubmissions->get_suppliers();
            // $data["member_submissions"] = $this->msubmissions->member_submissions();
            $this->load->view('supplier_header');
            $this->load->view('supplier_dashboard');
        // }
    
    }
}