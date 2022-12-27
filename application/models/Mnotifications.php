<?php
class Mnotifications extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function add_notification($params)
    {
        if ($this->db->insert('notifications', $params)) {
            return json_encode(array("status" => "1", "ret_data" => "added"));
        } else {
            return json_encode(array("status" => "0", "ret_data" => "Notifications Cannot add !"));
        }
    }

    public function load_notification($data)
    {
        $sql = "SELECT * FROM notifications WHERE is_read=0 AND user_id=" . $data . " ORDER BY notification_id DESC";
        $get_data = $this->db->query($sql)->result();

        if ($get_data) {
            return json_encode(array("status" => "1", "ret_data" => $get_data));
        } else {
            return json_encode(array("status" => "0", "ret_data" => "Notifications Cannot find !"));
        }
    }

    public function load_notification_all()
    {
        $sql = "SELECT * FROM notifications WHERE is_read=0 ORDER BY notification_id DESC";
        $get_data = $this->db->query($sql)->result();

        if ($get_data) {
            return json_encode(array("status" => "1", "ret_data" => $get_data));
        } else {
            return json_encode(array("status" => "0", "ret_data" => "Notifications Cannot find !"));
        }
    }

    public function view_supplier_notifications($data)
    {
        $sql = "SELECT * FROM notifications WHERE is_read=0 AND user_id=" . $data . "";
        return $this->db->query($sql);
    }

    public function notification_count($data)
    {
        $sql = "SELECT
        COUNT( notification_id ) AS note_count 
    FROM
        notifications 
    WHERE
        user_id =" . $data . " 
        AND is_read = 0";
        return $this->db->query($sql);
    }

    public function read_all()
    {
        $sql = "UPDATE notifications
        SET is_read = 1";

        if ($this->db->query($sql)) {
            return json_encode(array("status" => "1", "ret_data" => "Read"));
        } else {
            return json_encode(array("status" => "0", "ret_data" => "Nothing happens"));
        }
    }

    public function notification_count_all()
    {
        $sql = "SELECT
        COUNT( notification_id ) AS note_count 
    FROM
        notifications 
    WHERE
     is_read = 0";
        return $this->db->query($sql);
    }
}
