<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SupplierProcessLog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        $this->load->model('mprocess');
        $this->load->model('msubmissions');
		$this->load->library('session');
	}

    public function supplier_process_log()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $user_id = $this->musers->user_id($data["Email"]);
            $log["all_processors"] = $this->mprocess->view_process($user_id);
            $this->load->view('supplier_header',$value);
            $this->load->view('supplier_process_log',$log);
         }
    
    }
}