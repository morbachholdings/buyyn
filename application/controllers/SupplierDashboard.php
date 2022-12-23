<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierDashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        $this->load->model('msubmissions');
        $this->load->model('mprocess');
        $this->load->model('mnotifications');
        $this->load->model('mdashboard');
		$this->load->library('session');
	}

    public function supplier_dashboard()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $email=$this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
            $value["user_name"] = $this->musers->user_details($data);
            // $data["suppliers"] = $this->msubmissions->get_suppliers();
            // $data["member_submissions"] = $this->msubmissions->member_submissions();
            $log["all_processors"] = $this->mprocess->view_process($user_id);
            $log["view_total_sales"] = $this->mdashboard->view_total_sales($user_id);
            $log["view_top_sales"] = $this->mdashboard->view_top_sales($user_id);
            $value["notifications"]=$this->mnotifications->view_supplier_notifications($user_id);
            $this->load->view('supplier_header',$value);
            $this->load->view('supplier_dashboard',$log);
        }
    
    }
}