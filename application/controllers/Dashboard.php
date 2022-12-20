<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->library('session');
    }

    public function dashboard()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $dash["all_log"] = $this->musers->all_log();
            $this->load->view('header',$value);
            $this->load->view('dashboard',$dash);
        } else {
            redirect(base_url() . 'Authentication/index');
        }

    }
}
