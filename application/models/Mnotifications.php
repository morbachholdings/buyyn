<?php
class Mnotifications extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    public function add_notification($params){
    if ($this->db->insert('notifications', $params)) {
        echo "New Notification Added";
    }
    else{
        echo "error";
    }
}
public function view_notifications(){
$sql="SELECT * FROM notifications WHERE is_read=0";
return $this->db->query($sql);
}
}