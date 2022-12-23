<?php
class Mdashboard extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    public function view_total_sales($data){
        $sql="SELECT SUM(amount) AS total_sales FROM submissions WHERE supplier_id=".$data." AND is_child=0 AND status=1";
        return $this->db->query($sql);
    }
    public function view_top_sales($data){
        $sql="SELECT MAX(amount) AS top_sales ,users.Company_name AS name FROM submissions INNER JOIN users ON users.user_id=submissions.supplier_id WHERE supplier_id=".$data." AND is_child=1 AND submissions.status=1";
        return $this->db->query($sql);
    }
}
