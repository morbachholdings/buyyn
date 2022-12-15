<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditSupplierProfile extends CI_Controller
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
            $email= $this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
            $value["user_name"] = $this->musers->user_details($data);
            $pro["all_data"] = $this->musers->user_details($data);
            $pro["all_logins"] = $this->musers->all_logins($user_id);
            $this->load->view('supplier_header', $value);
            $this->load->view('supplier_profile', $pro);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }
}
