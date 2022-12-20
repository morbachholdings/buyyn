<?php
class Mprocess extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    public function all_processors()
    {
        $sql="SELECT * FROM process_log INNER JOIN users ON users.user_id=process_log.user_id";
        return $this->db->query($sql);
    }
}