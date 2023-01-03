<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('msubmissions');
        $this->load->model('mnotifications');
        $this->load->library('session');
        $this->load->model('minvoice');
    }

    public function invoice()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            // $value["notifications"]=$this->mnotifications->view_notifications();
            $value["notification_count"] = $this->mnotifications->notification_count_all();
            $reference_number = base64_decode($this->input->get("id"));
            $push["invoice_data"]=$this->minvoice->view_invoice($reference_number);
            $push["invoice_member_data"]=$this->minvoice->view_invoice_members($reference_number);
            $this->load->view('invoice',$push);
        } else {
        }
    }
}
