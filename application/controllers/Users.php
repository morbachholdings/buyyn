<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('musers');
        $this->load->model('mnotifications');
        $this->load->library('session');
    }

    public function administration()
    {
        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $email = $this->session->userdata('full_name');
            $user_id = $this->musers->user_id($email);
            $value["user_name"] = $this->musers->user_details($data);
            $data["users_list"] = $this->musers->list_users();
            $value["notification_count"]=$this->mnotifications->notification_count_all();
            $this->load->view('header', $value);
            $this->load->view('users', $data);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
    }

    public function edit_users()
    {

        if ($this->session->userdata('full_name') != '') {
            $data["Email"] = $this->session->userdata('full_name');
            $email = $this->session->userdata('full_name');
            // $er_id = $this->musers->user_id($email);
            $value["user_name"] = $this->musers->user_details($data);
            $user_id = base64_decode($this->input->get("id"));
            $user["user_details"] = $this->musers->single_user($user_id);
            $user["log_details"] = $this->musers->log_details($user_id);
            $user["rebates"] = $this->musers->rebates($user_id);
            $value["notification_count"]=$this->mnotifications->notification_count_all();
            $this->load->view('header', $value);
            $this->load->view('edit_users', $user);
        } else {
            redirect(base_url() . 'Authentication/index');
        }
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

    public function update_email()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["Email"] = $this->input->post('profile_email');

        $param["title"] = 'Email changed - ' . $data["Email"];
        $param["process_type_id"] = 200;
        $param["user_id"] = $data["user_id"];
        $this->musers->process_log($param);

        print_r($this->musers->update_email($data));
    }
    public function update_role()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["user_group_id"] = $this->input->post('role');

        $param["title"] = 'User role changed - ' . $data["user_id"];
        $param["process_type_id"] = 200;
        $param["user_id"] = $data["user_id"];
        $this->musers->process_log($param);

        print_r($this->musers->update_role($data));
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

    public function add_supplier()
    {
        $data["First_name"] = $this->input->post("first_name");
        $data["Last_name"] = $this->input->post("last_name");
        $data["Company_name"] = $this->input->post("company");
        $data["Contact_number"] = $this->input->post("phone");
        $data["Address"] = $this->input->post("address");
        $data["Register_date"] = $this->input->post("register_date");
        $data["ABN"] = $this->input->post("abn");
        $data["Profile_image"] = $this->input->post("image_name");
        $data["Email"] = $this->input->post("email");
        $data["status"] = 1;
        $data["is_verified"] = 1;
        $data["user_group_id"] = 2;
        $data["created_date"] = date("Y-m-d");
        $data["Password"] = md5("123456");
        $value["supplier_rebate"] = $this->input->post("supplierRebate");
        $value["member_rebate"] = $this->input->post("memberRebate");
        $value["rebate_period"] = $this->input->post("period");

        $param["title"] = 'New supplier added - ' . $data["Company_name"];
        $param["process_type_id"] = 200;
        $this->musers->process_log($param);

        print_r($this->musers->add_supplier($data, $value));
    }
    public function add_member()
    {
        $data["First_name"] = $this->input->post("first_name");
        $data["Last_name"] = $this->input->post("last_name");
        $data["Company_name"] = $this->input->post("company");
        $data["Contact_number"] = $this->input->post("phone");
        $data["Address"] = $this->input->post("address");
        $data["Register_date"] = $this->input->post("register_date");
        $data["ABN"] = $this->input->post("abn");
        $data["Profile_image"] = $this->input->post("image_name");
        $data["Email"] = $this->input->post("email");
        $data["status"] = 1;
        $data["is_verified"] = 1;
        $data["user_group_id"] = 3;
        $data["created_date"] = date("Y-m-d");

        $param["title"] = 'New member added - ' . $data["Company_name"];
        $param["process_type_id"] = 200;

        $this->musers->process_log($param);

        print_r($this->musers->add_member($data));
    }
    public function add_admin()
    {
        $data["First_name"] = $this->input->post("first_name");
        $data["Last_name"] = $this->input->post("last_name");
        $data["Company_name"] = $this->input->post("company");
        $data["Contact_number"] = $this->input->post("phone");
        $data["Address"] = $this->input->post("address");
        $data["Register_date"] = $this->input->post("register_date");
        $data["Profile_image"] = $this->input->post("image_name");
        $data["Email"] = $this->input->post("email");
        $data["status"] = 1;
        $data["is_verified"] = 1;
        $data["user_group_id"] = 1;
        $data["created_date"] = date("Y-m-d");
        $data["Password"] = md5("123456");

        $param["title"] = 'New admin added - ' . $data["Company_name"];
        $param["process_type_id"] = 200;
        $this->musers->process_log($param);

        print_r($this->musers->add_admin($data));
    }

    public function approve_user()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["status"] = 1;
        $data["updated_date"] = date("Y-m-d");

        $param["title"] = 'User Approved - ' . $data["user_id"];
        $param["process_type_id"] = 200;
        $param["user_id"] = $data["user_id"];
        $this->musers->process_log($param);


        print_r($this->musers->approve_user($data));
    }

    public function suspend_user()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["status"] = 3;
        $data["updated_date"] = date("Y-m-d");
        $data["deleted_date"] = date("Y-m-d");

        $param["title"] = 'User Suspended - ' . $data["user_id"];
        $param["process_type_id"] = 200;
        $param["user_id"] = $data["user_id"];
        $this->musers->process_log($param);

        print_r($this->musers->suspend_user($data));
    }
    public function resume_user()
    {
        $data["user_id"] = $this->input->post('user_id');
        $data["status"] = 1;
        $data["updated_date"] = date("Y-m-d");
        $data["deleted_date"] = null;

        $param["title"] = 'User Resumed - ' . $data["user_id"];
        $param["process_type_id"] = 200;
        $param["user_id"] = $data["user_id"];
        $this->musers->process_log($param);


        print_r($this->musers->resume_user($data));
    }

    public function exportAdmin()
    {
        $data = $this->musers->list_users();
        $delimiter = ",";
        $filename = "admin_data_" . date('Y-m-d') . ".csv";

        // Create a file pointer 
        $f = fopen('php://memory', 'w');
        // Set column headers 
        $fields = array('Admin Name', 'Contact Person', 'Email', 'Status', 'Joined Date');
        fputcsv($f, $fields, $delimiter);
        foreach ($data->result() as $row) {
            if ($row->user_group_id == 1) {


                $status = "";
                if ($row->status == 1) {
                    $status = "Approved";
                } else if ($row->status == 2) {
                    $status = "Pending";
                } else {
                    $status = "Suspended";
                }
                $line_data = array($row->Company_name, $row->First_name, $row->Email, $status, $row->Register_date);
                fputcsv($f, $line_data, $delimiter);
                fseek($f, 0);

                // Set headers to download file rather than displayed 
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="' . $filename . '";');

                fpassthru($f);
            }
        }
    }
    public function exportSupplier()
    {
        $data = $this->musers->list_users();
        $delimiter = ",";
        $filedata = "supplier_data_" . date('Y-m-d') . ".csv";

        // Create a file pointer 
        $f = fopen('php://memory', 'w');
        // Set column headers 
        $fields = array('Supplier Name', 'Contact Person', 'Email', 'Status', 'Joined Date');
        fputcsv($f, $fields, $delimiter);
        foreach ($data->result() as $row) {
            if ($row->user_group_id == 2) {


                $status = "";
                if ($row->status == 1) {
                    $status = "Approved";
                } else if ($row->status == 2) {
                    $status = "Pending";
                } else {
                    $status = "Suspended";
                }
                $line_data = array($row->Company_name, $row->First_name, $row->Email, $status, $row->Register_date);
                fputcsv($f, $line_data, $delimiter);
                fseek($f, 0);

                // Set headers to download file rather than displayed 
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="' . $filedata . '";');

                fpassthru($f);
            }
        }
    }
}
