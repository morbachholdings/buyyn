<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('mnotifications');
        $this->load->library('session');
        $this->load->model('mdashboard');
    }

    public function dashboard()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            // $value["notifications"]=$this->mnotifications->view_notifications();
            $value["notification_count"]=$this->mnotifications->notification_count_all();
            $dash["all_log"] = $this->musers->all_log();
            $dash["top_sales"] = $this->mdashboard->top_sales();
            $dash['top_rebate']=$this->mdashboard->all_rebate_amount();
            $dash['top_member']=$this->mdashboard->top_member();
            $this->load->view('header',$value);
            $this->load->view('dashboard',$dash);
        } else {
            redirect(base_url() . 'Authentication/index');
        }

    }
}
