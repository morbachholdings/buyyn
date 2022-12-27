<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifications extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
        
        $this->load->model('mnotifications');
		$this->load->library('session');
	}

    public function load_notifications()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $email=$this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
            print_r($this->mnotifications->load_notification($user_id));
        }
        else{

        }
    }
    public function load_notifications_all()
    {
        if ($this->session->userdata('full_name') != '') 
        {
            $data["Email"] = $this->session->userdata('full_name');
            $email=$this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
            print_r($this->mnotifications->load_notifications_all());
        }
        else{

        }
    }

    public function mark_all_read()
    {
        print_r($this->mnotifications->read_all());
    }


}