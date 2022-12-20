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
		$data["validated"] = 0;
		$this->load->view('login', $data);
	}
	public function login()
	{
		$data["validated"] = 1;
		$this->load->view('login', $data);
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
		$data["status"] = 2;
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
			$param["title"] = 'New User Registration email sent to - <a href="mailto:' . $data["Email"] . '"' . $data["Email"] . '</a>';
			$param["process_type_id"] = 200;
			$this->musers->process_log($param);

			print_r($this->musers->register($data));
		} else {
			$param["title"] = 'Failed to send the email to  - <a href="mailto:' . $data["Email"] . '"' . $data["Email"] . '</a>';
			$param["process_type_id"] = 552;
			$this->musers->process_log($param);
			print_r($this->email->print_debugger());
		}
	}

	public function validated()
	{
		$data["Email"] = base64_decode($this->input->get("id"));
		$data["is_verified"] = 1;
		$data["updated_date"] = date("Y-m-d");

		$param["title"] = 'New User Verified  - <a href="mailto:' . $data["Email"] . '"' . $data["Email"] . '</a>';
		$param["process_type_id"] = 200;
		$this->musers->process_log($param);

		$this->musers->verified($data);
		$user_group = $this->musers->user_group_id($data);

		if ($user_group == 1) {
			redirect('Authentication/login');
		} else if ($user_group == 2) {
			echo "test";
		}
	}


	public function logged()
	{

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$user_id = $this->musers->user_id($email);
		if ($this->musers->user_login($email, $password)) {
			if ($this->musers->verified_status($email) == 1) {
				if ($this->musers->user_status($email) == 1) {
					$session_data = array(
						'full_name' => $email,
						'user_id' => $user_id,

					);
					$data["Status"] = 1;
					$data["user_id"] = $user_id;
					$this->musers->login_session($data);
					$this->session->set_userdata($session_data);
					print_r(json_encode(array("status" => "1", "user_group" => $this->musers->user_group_id($email))));
				} else {
					$data["Status"] = 2;
					$data["user_id"] = $user_id;
					$this->musers->login_session($data);
					print_r(json_encode(array("status" => "0", "user_group" => "Not an Approved User")));
				}
			} else {
				$data["Status"] = 2;
				$data["user_id"] = $user_id;
				$this->musers->login_session($data);
				print_r(json_encode(array("status" => "0", "user_group" => "Please Verify your email !")));
			}
		} else {
			$data["Status"] = 3;
			$data["user_id"] = $user_id;
			$this->musers->login_session($data);
			print_r(json_encode(array("status" => "0", "user_group" => "Invalid Credentials ")));
		}
	}

	public function reset()
	{
		$this->load->view('reset-pw');
	}

	public function reset_view()
	{
		$this->load->view('forgot_email_sent');
	}

	public function logout()
	{
		$data["validated"] = 0;
		$this->session->unset_userdata('full_name');
		$this->load->view('login', $data);
	}

	public function send_reset_link()
	{
		$email = $this->input->post('email');
		if ($this->musers->user_id($email)) {
			$data["user_id"] = $this->musers->user_id($email);
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

			$message = $this->load->view('forgot_email', $data, true);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('amiladeshan19967@gmail.com'); // change it to yours
			$this->email->to($email); // change it to yours
			$this->email->subject('Reset Password');
			$this->email->message($message);
			if ($this->email->send()) {

				$param["title"] = 'Reset password link sent to  - <a href="mailto:' . $email . '"' . $email . '</a>';
				$param["process_type_id"] = 200;
				$this->musers->process_log($param);

				print_r(json_encode(array("status" => "1", "user_group" => "Forgot Password Link Sent")));
			} else {
				$param["title"] = 'Failed to send the reset password link to  - <a href="mailto:' . $email . '"' . $email . '</a>';
				$param["process_type_id"] = 522;
				$this->musers->process_log($param);
				print_r(json_encode(array("status" => "0", "user_group" => "Forgot Password Link Sent failed")));
			}
		} else {
			$param["title"] = 'Email not found - <a href="mailto:' . $email . '"' . $email . '</a>';
			$param["process_type_id"] = 404;
			$this->musers->process_log($param);

			print_r(json_encode(array("status" => "0", "user_group" => "Email is not in the db ")));
		}
	}
	public function reset_pw()
	{
		$data["user_id"] = base64_decode($this->input->get("id"));
		$this->load->view('new_pw', $data);
	}

	public function change_password()
	{
		$data["user_id"] = $this->input->post('user_id');
		$data["Password"] = md5($this->input->post('password'));
		$data["updated_date"] = date("Y-m-d");
		
		$param["title"] = 'Password Changed - <a href="mailto:' . $data["user_id"] . '"' . $data["user_id"] . '</a>';
		$param["process_type_id"] = 200;
		$this->musers->process_log($param);


		print_r($this->musers->change_password($data));
	}
}
