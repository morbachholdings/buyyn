<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->library('session');
    }

    public function edit()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $pro["all_data"] = $this->musers->user_details($data);
            $this->load->view('header', $value);
            $this->load->view('profile',$pro);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }
}
