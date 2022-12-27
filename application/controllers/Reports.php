<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('mreports');
        $this->load->library('session');
        $this->load->model('mnotifications');
    }

    public function reports()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
         
            $value["notification_count"]=$this->mnotifications->notification_count_all();
            $this->load->view('header', $value);
            $this->load->view('reports');
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }

    public function view_member_report()
    {
        $data["date_from"] = $this->input->post('date_from');
        $data["date_to"] = $this->input->post('date_to');
        $data["user_group"] = $this->input->post('user_group');
        print_r($this->mreports->view_member_report($data));
    }

    public function view_member_report_supplier()
    {
        if ($this->session->userdata('full_name') != '') {
            $val["Email"] = $this->session->userdata('full_name');
            $data["date_from"] = $this->input->post('date_from');
            $data["date_to"] = $this->input->post('date_to');
            $data["user_group"] = $this->input->post('user_group');
            $data["Supplier_ID"] = $this->musers->user_id($val["Email"]);
            print_r($this->mreports->view_member_report_supplier($data));
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }
    public function view_supplier_report()
    {
        $data["date_from"] = $this->input->post('date_from');
        $data["date_to"] = $this->input->post('date_to');
        $data["user_group"] = $this->input->post('user_group');
        print_r($this->mreports->view_supplier_report($data));
    }
}
