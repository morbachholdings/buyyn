<?php
class Musers extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function register($data)
	{
		$response = "You have registered successfully !";
		$this->db->where('Email', $data['Email']);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return json_encode(array("status" => "0", "ret_data" => "Email already in use"));
		} else {
			if ($this->db->insert('users', $data)) {

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
		$sql = "SELECT
		* 
	FROM
		users 
	WHERE
		Email = '" . $value["Email"] . "' 
		AND ISNULL(deleted_date)";

		return $this->db->query($sql);
	}

	public function update_profile($data)
	{
		$this->db->set('First_name', $data["First_name"]);
		$this->db->set('Last_name', $data["Last_name"]);
		$this->db->set('Company_name', $data["Company_name"]);
		$this->db->set('Address', $data["Address"]);
		$this->db->set('Register_date', $data["Register_date"]);
		$this->db->set('Contact_number', $data["Contact_number"]);
		$this->db->set('Profile_image', $data["Profile_image"]);
		$this->db->set('ABN', $data["ABN"]);
		$this->db->set('updated_date', $data["updated_date"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => "User details updated"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to update"));
		}
	}

	public function change_email($data)
	{

		$this->db->where('user_id', $data['user_id']);
		$this->db->where('Password', $data['Password']);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) {
			$this->db->set('Email', $data["Email"]);
			$this->db->set('updated_date', date("Y-m-d"));
			$this->db->where('user_id', $data["user_id"]);
			if ($this->db->update('users')) {
				return json_encode(array("status" => "1", "ret_data" => "Your Email has updated ! Please login again"));
			} else {
				return json_encode(array("status" => "0", "ret_data" => "Failed to update"));
			}
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Incorrect Password"));
		}
	}

	public function changepassword($data)
	{

		$this->db->where('user_id', $data['user_id']);
		$this->db->where('Password', $data['Password']);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) {
			$this->db->set('Password', $data["newpassword"]);
			$this->db->set('updated_date', date("Y-m-d"));
			$this->db->where('user_id', $data["user_id"]);
			if ($this->db->update('users')) {
				return json_encode(array("status" => "1", "ret_data" => "Your Password has updated !"));
			} else {
				return json_encode(array("status" => "0", "ret_data" => "Failed to update"));
			}
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Old Password does not matched"));
		}
	}
	

	public function process_log($val)
	{
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version = "";

		//First get the platform?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		} elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		} elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'Windows';
		}

		if (preg_match('/MSIE/i', $u_agent)) {
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		} else if (preg_match('/Firefox/i', $u_agent)) {
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		} else if (preg_match('/Chrome/i', $u_agent)) {
			$bname = 'Google Chrome';
			$ub = "Chrome";
		} else if (preg_match('/Safari/i', $u_agent)) {
			$bname = 'Apple Safari';
			$ub = "Safari";
		} else if (preg_match('/Opera/i', $u_agent)) {
			$bname = 'Opera';
			$ub = "Opera";
		} else if (preg_match('/Netscape/i', $u_agent)) {
			$bname = 'Netscape';
			$ub = "Netscape";
		}
		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
			')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}

		// see how many we have
		$i = count($matches['browser']);
		if ($i != 1) {
			if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
				$version = $matches['version'][0];
			} else {
				$version = $matches['version'][1];
			}
		} else {
			$version = $matches['version'][0];
		}

		// check if we have a number
		if ($version == null || $version == "") {
			$version = "?";
		}

		$data["device"] = $platform . ' / ' . $bname;
		$data["ip_address"] = $_SERVER['REMOTE_ADDR'];
		$data["title"] = $val["title"];
		$date = new DateTime("now", new DateTimeZone('Australia/Melbourne'));
		$data["process_time"] = $date->format('Y-m-d H:i:s');
		$data["process_type_id"] = $val["process_type_id"];

		if ($this->db->insert('process_log', $data)) {
			return "Success";
		}
	}



	public function login_session($val)
	{
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version = "";

		//First get the platform?
		if (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		} elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		} elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'Windows';
		}

		if (preg_match('/MSIE/i', $u_agent)) {
			$bname = 'Internet Explorer';
			$ub = "MSIE";
		} else if (preg_match('/Firefox/i', $u_agent)) {
			$bname = 'Mozilla Firefox';
			$ub = "Firefox";
		} else if (preg_match('/Chrome/i', $u_agent)) {
			$bname = 'Google Chrome';
			$ub = "Chrome";
		} else if (preg_match('/Safari/i', $u_agent)) {
			$bname = 'Apple Safari';
			$ub = "Safari";
		} else if (preg_match('/Opera/i', $u_agent)) {
			$bname = 'Opera';
			$ub = "Opera";
		} else if (preg_match('/Netscape/i', $u_agent)) {
			$bname = 'Netscape';
			$ub = "Netscape";
		}
		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
			')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}

		// see how many we have
		$i = count($matches['browser']);
		if ($i != 1) {
			if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
				$version = $matches['version'][0];
			} else {
				$version = $matches['version'][1];
			}
		} else {
			$version = $matches['version'][0];
		}

		// check if we have a number
		if ($version == null || $version == "") {
			$version = "?";
		}

		$data["Device"] = $platform . ' / ' . $bname;
		$data["IP_address"] = $_SERVER['REMOTE_ADDR'];
		$data["status"] = $val["Status"];
		$date = new DateTime("now", new DateTimeZone('Australia/Melbourne'));
		$data["logged_time"] = $date->format('Y-m-d H:i:s');
		$data["user_id"] = $val["user_id"];

		if ($this->db->insert('login_sessions', $data)) {
			return "Success";
		}
	}

	public function all_logins($data)
	{
		$sql = "SELECT
		login_sessions.status,
		login_sessions.user_id,
		login_sessions.IP_address,
		login_sessions.Device,
		login_sessions.logged_time,
		users.user_id,
		users.First_name 
	FROM
		login_sessions
		INNER JOIN users ON users.user_id = login_sessions.user_id 
	WHERE
		login_sessions.user_id = " . $data . " 
	ORDER BY
		session_id DESC 
		LIMIT 10";
		return $this->db->query($sql);
	}

	public function list_users()
	{
		$sql = "SELECT * FROM users ORDER BY status DESC";
		return $this->db->query($sql);
	}

	public function single_user($data)
	{
		$sql = "SELECT * FROM users WHERE user_id=" . $data . " AND ISNULL(deleted_date)";
		return $this->db->query($sql);
	}

	public function log_details($data)
	{
		$sql = "SELECT * FROM login_sessions WHERE user_id=" . $data . " ORDER BY session_id DESC LIMIT 5";
		return $this->db->query($sql);
	}

	public function rebates($data)
	{
		$sql = "SELECT * FROM rebates WHERE user_id=" . $data . "";
		$query = $this->db->query($sql);
		if ($query->num_rows($query) == 0) {
			return $query->num_rows($query);
		} else {
			return $query->result();
		}
	}

	public function update_rebate($data)
	{
		$this->db->set('supplier_rebate', $data["supplier_rebate"]);
		$this->db->set('member_rebate', $data["member_rebate"]);
		$this->db->set('rebate_period', $data["rebate_period"]);
		$this->db->where('rebate_id', $data["rebate_id"]);
		if ($this->db->update('rebates')) {
			return json_encode(array("status" => "1", "ret_data" => "Rebate details updated !"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to update"));
		}
	}

	public function update_email($data)
	{

		$this->db->set('Email', $data["Email"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => "Email updated !"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to update"));
		}
	}

	public function update_role($data)
	{

		$this->db->set('user_group_id', $data["user_group_id"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => "User Role Updated !"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to update"));
		}
	}

	public function add_rebate($data)
	{
		if ($this->db->insert('rebates', $data)) {

			return json_encode(array("status" => "1", "ret_data" => "Rebate Details Added"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Error"));
		}
	}

	public function add_supplier($data, $val)
	{
		if ($this->db->insert('users', $data)) {
			$sql = "SELECT user_id from users ORDER BY user_id DESC LIMIT 1";
			$query = $this->db->query($sql);
			$array = [];
			if ($query->num_rows() > 0) {
				foreach ($query->result_array() as $row) {
					$array = $row['user_id'];
				}
			} else {
				return json_encode(array("status" => "0", "ret_data" => "Error"));
			}
			$val["user_id"] = $array;
			if ($this->db->insert('rebates', $val)) {
				return json_encode(array("status" => "1", "ret_data" => "New Supplier Added !"));
			}
			else{
				return json_encode(array("status" => "0", "ret_data" => "Error"));
			}

			
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Error"));
		}
	}

	public function add_member($data)
	{
		if ($this->db->insert('users', $data)) {
			return json_encode(array("status" => "1", "ret_data" => "New Member Added !"));
		}
		else{
			return json_encode(array("status" => "0", "ret_data" => "Error"));
		}
	}
	public function add_admin($data)
	{
		if ($this->db->insert('users', $data)) {
			return json_encode(array("status" => "1", "ret_data" => "New Admin Added !"));
		}
		else{
			return json_encode(array("status" => "0", "ret_data" => "Error"));
		}
	}

	public function approve_user($data)
	{
		$this->db->set('status', $data["status"]);
		$this->db->set('updated_date', $data["updated_date"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => " Approved !"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to approve"));
		}
	}
	public function suspend_user($data)
	{
		$this->db->set('status', $data["status"]);
		$this->db->set('updated_date', $data["updated_date"]);
		$this->db->set('deleted_date', $data["deleted_date"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => " Suspended !"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to suspend"));
		}
	}

	public function resume_user($data)
	{
		$this->db->set('status', $data["status"]);
		$this->db->set('updated_date', $data["updated_date"]);
		$this->db->set('deleted_date', $data["deleted_date"]);
		$this->db->where('user_id', $data["user_id"]);
		if ($this->db->update('users')) {
			return json_encode(array("status" => "1", "ret_data" => " Resumed !"));
		} else {
			return json_encode(array("status" => "0", "ret_data" => "Failed to suspend"));
		}
	}

	public function all_log()
	{
		$sql="SELECT
		* 
	FROM
		process_log
		INNER JOIN users ON users.user_id = process_log.user_id 
	WHERE
		 process_log.user_id IS NOT NULL ORDER BY process_id DESC LIMIT 10";

		 return $this->db->query($sql);
	}

	public function member_id($value)
	{
		$sql = "SELECT * FROM users WHERE Company_name='" . $value . "'";

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

	public function all_members()
	{
		$sql="SELECT * FROM users WHERE user_group_id=3";
		return $this->db->query($sql);
	}
}
