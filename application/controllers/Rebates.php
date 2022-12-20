<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rebates extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('mprocess');
        $this->load->library('session');
    }

    public function rebates()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $this->load->view('header',$value);
            $this->load->view('rebates');

        }
    }

}

?>