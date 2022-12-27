<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->library('session');
        $this->load->model('mnotifications');
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
            $value["notification_count"]=$this->mnotifications->notification_count_all();
            $this->load->view('header', $value);
            $this->load->view('profile', $pro);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }

    public function upload_image()
    {
        if (isset($_FILES['files']) && !empty($_FILES['files'])) {
            $config["upload_path"] = './assets/images/';
            $config["allowed_types"] = 'jpg|png';
            $config["width"] = '550';
            $config["height"] = '500';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $no_files = count($_FILES["files"]['name']);
            for ($i = 0; $i < $no_files; $i++) {
                if ($_FILES["files"]["error"][$i] > 0) {
                    echo "Error: " . $_FILES["files"]["error"][$i] . "<br>";
                } else {
                    if (file_exists('assets/media/profile/' . $_FILES["files"]["name"][$i])) {
                        print_r(json_encode(array("status" => "0", "ret_data" => "File already exists :"  . $_FILES["files"]["name"][$i])));
                     
                    } else {
                        move_uploaded_file($_FILES["files"]["tmp_name"][$i], 'assets/media/profile/' . $_FILES["files"]["name"][$i]);
                        print_r(json_encode(array("status" => "1", "ret_data" => $value["image_name"] = $_FILES['files']['name'][$i])));
                      
                    }
                }
            }
        }
    }

    public function update_profile()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["First_name"] = $this->input->post('first_name');
        $data["Last_name"] = $this->input->post('last_name');
        $data["Company_name"] = $this->input->post('company');
        $data["Contact_number"] = $this->input->post('phone');
        $data["Address"] = $this->input->post('address');
        $data["Register_date"] = $this->input->post('register_date');
        $data["ABN"] = $this->input->post('abn');
        $data["Profile_image"] = $this->input->post('image_name');
        $data["updated_date"] = date("Y-m-d");

        $param["title"] = 'Profile Details updated - '.$data["Company_name"];
		$param["process_type_id"] = 200;
		$this->musers->process_log($param);


        print_r($this->musers->update_profile($data));
    }

    public function change_email()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["Email"] = $this->input->post('email');
        $data["Password"] =md5($this->input->post('password'));

        $param["title"] = 'Email changed - '.$data["Email"];
		$param["process_type_id"] = 200;
		$this->musers->process_log($param);

        print_r($this->musers->change_email($data));
    }

    public function change_password()
    {
        $data["user_id"] = $this->input->post('user_id');
        
        $data["Password"] =md5($this->input->post('currentpassword'));
        $data["newpassword"] =md5($this->input->post('newpassword'));

        $param["title"] = 'Password changed - '.$data["user_id"];
		$param["process_type_id"] = 200;
		$this->musers->process_log($param);

        print_r($this->musers->changepassword($data));
    }
}
