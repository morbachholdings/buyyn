<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Processlog extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('mprocess');
        $this->load->library('session');
        $this->load->model('mnotifications');
        
    }

    public function processors()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $value["user_name"] = $this->musers->user_details($data);
            $log["all_processors"] = $this->mprocess->all_processors();
            $value["notification_count"]=$this->mnotifications->notification_count_all();
            $this->load->view('header',$value);
            $this->load->view('process_log',$log);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }

}
