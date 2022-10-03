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
				
			}else {
                return json_encode(array("status" => "0", "ret_data" => "Error"));
            }
		}
	}
}
