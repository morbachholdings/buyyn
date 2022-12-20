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
            $pro["user_details"] = $this->musers->single_user($user_id);
            $pro["all_logins"] = $this->musers->all_logins($user_id);
            $pro["rebates"] = $this->musers->rebates($user_id);
            $this->load->view('supplier_header', $value);
            $this->load->view('supplier_profile', $pro);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }

    public function add_rebate()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["supplier_rebate"] = $this->input->post('supplierRebate');
        $data["member_rebate"] = $this->input->post('memberRebate');
        $data["rebate_period"] = $this->input->post('period');

        $param["title"] = 'Rebate Added - ' . $data["user_id"];
        $param["process_type_id"] = 200;
        $param["user_id"] = $data["user_id"];
        $this->musers->process_log($param);


        print_r($this->musers->add_rebate($data));
    }

    public function update_rebate()
    {
        $data["rebate_id"] = $this->input->post('rebate_id');
        $data["supplier_rebate"] = $this->input->post('supplierRebate');
        $data["member_rebate"] = $this->input->post('memberRebate');
        $data["rebate_period"] = $this->input->post('period');

        $param["title"] = 'Rebate details changed';
        $param["process_type_id"] = 200;
        $this->musers->process_log($param);

        print_r($this->musers->update_rebate($data));
    }
}
