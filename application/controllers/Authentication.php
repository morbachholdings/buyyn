<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('musers');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}

	public function add_user()
	{
		$data["First_name"] = $this->input->post('firstname');
		$data["Last_name"] = $this->input->post('lastname');
		$data["Email"] = $this->input->post('email');
		$data["Password"] = md5($this->input->post('password'));
		$data["user_group_id"] = 1;
		$data["status"] = 0;
		$data["is_verified"] = 0;
		$data["created_date"] = date("Y-m-d");

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'amiladeshan19967@gmail.com', // change it to yours
			'smtp_pass' => 'qakwujqqnpnhsnao', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$message = $this->load->view('verify_email', $data, true);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('amiladeshan19967@gmail.com'); // change it to yours
		$this->email->to($data["Email"]); // change it to yours
		$this->email->subject('Signup Verification Email');
		$this->email->message($message);
		if ($this->email->send()) {
			print_r($this->musers->register($data));
		} else {
			print_r($this->email->print_debugger());
		}

	}
	
}
