<?php
class Musers extends CI_Model
{

<<<<<<< Updated upstream
    function __construct()
    {
        parent::__construct();
    }
    public function register($data)
=======
	function __construct()
	{
		parent::__construct();
	}
	public function register($data)
>>>>>>> Stashed changes
	{
		$response = "You have registered successfully !";
		$this->db->where('Email', $data['Email']);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return json_encode(array("status" => "0", "ret_data" => "Email already in use"));
		} else {
			if ($this->db->insert('users', $data)) {
<<<<<<< Updated upstream
				
					return json_encode(array("status" => "1", "ret_data" => $response));
				
			}else {
                return json_encode(array("status" => "0", "ret_data" => "Error"));
            }
		}
=======

				return json_encode(array("status" => "1", "ret_data" => $response));
			} else {
				return json_encode(array("status" => "0", "ret_data" => "Error"));
			}
		}
	}
	public function user_group_id($data)
	{
		$sql = "SELECT * FROM users WHERE Email='" . $data . "'";

		$query = $this->db->query($sql);
		$array = [];

		foreach ($query->result_array() as $row) {
			$array = $row['user_group_id'];
		}
		return $array;
	}
	public function verified($data)
	{
		$this->db->where('Email', $data["Email"]);
		return $this->db->update('users', $data);
	}

	public function user_login($user_name, $password)
	{
		$this->db->where('Email', $user_name);
		$this->db->where('Password', $password);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data;
		} else {
			return false;
		}
	}
	public function user_id($value)
	{
		$sql = "SELECT * FROM users WHERE Email='" . $value . "'";

		$query = $this->db->query($sql);
		$array = [];
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$array = $row['user_id'];
			}
		} else {
			$array = 0;
		}

		return $array;
	}

	public function user_status($value)
	{
		$sql = "SELECT * FROM users WHERE Email='" . $value . "'";

		$query = $this->db->query($sql);
		$array = [];

		foreach ($query->result_array() as $row) {
			$array = $row['status'];
		}
		return $array;
	}
	public function verified_status($value)
	{
		$sql = "SELECT * FROM users WHERE Email='" . $value . "'";

		$query = $this->db->query($sql);
		$array = [];
		if ($query->num_rows() > 0) {


			foreach ($query->result_array() as $row) {
				$array = $row['is_verified'];
			}
		} else {
			$array = 0;
		}

		return $array;
	}

	public function change_password($data)
	{
		$this->db->set('Password', $data["Password"]);
		$this->db->set('updated_date', $data["updated_date"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => "Password has reset"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to reset the password"));
		}
	}
	public function user_name($value)
	{
		$sql = "SELECT * FROM users WHERE Email='" . $value . "'";

		$query = $this->db->query($sql);
		$array = [];

		foreach ($query->result_array() as $row) {
			$array = $row['First_name'];
		}
		return $array;
	}
	public function user_details($value)
	{
		$sql="SELECT
		* 
	FROM
		users 
	WHERE
		Email = '". $value["Email"]."' 
		AND ISNULL(deleted_date)";

		return $this->db->query($sql);
>>>>>>> Stashed changes
	}
}
