<?php
class Mdashboard extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function view_total_sales($data)
    {
        $sql = "SELECT SUM(amount) AS total_sales FROM submissions WHERE supplier_id=" . $data . " AND is_child=0 AND status=1";
        return $this->db->query($sql);
    }
    public function view_top_sales($data)
    {
        $sql = "SELECT
        MAX( amount ) AS top_sales,
        users.Company_name AS name 
    FROM
        submissions
        INNER JOIN users ON users.user_id = submissions.Member_ID 
    WHERE
        Supplier_ID = " . $data . " 
        AND is_child = 1 AND submissions.status=1";
        return $this->db->query($sql);
    }

    public function top_sales()
    {
        $sql = "SELECT
        SUM( amount ) AS total_sales 
    FROM
        submissions 
    WHERE
        is_child = 0 
        AND STATUS =1";
        return $this->db->query($sql);
    }

    public function all_rebate_amount()
	{
		$sql = "SELECT
		SUM(submissions.amount) AS TOTAL, 
		rebates.supplier_rebate, 
		rebates.member_rebate, 
		rebates.rebate_period, 
		submissions.Supplier_ID,
		rebates.rebate_id
	FROM
    submissions
		INNER JOIN
		users
		ON 
        submissions.Supplier_ID = users.user_id
		INNER JOIN
		rebates
		ON 
			users.user_id = rebates.user_id WHERE is_child=0
			
			GROUP BY submissions.Supplier_ID";
			return $this->db->query($sql);
	}

    public function top_member()
    {
        $sql="SELECT
        MAX( amount ) AS top_sales,
        users.Company_name AS comp_name  
    FROM
        submissions
        INNER JOIN users ON users.user_id = submissions.Member_ID 
    WHERE
        is_child = 1 
        AND submissions.STATUS =1";
        return $this->db->query($sql);
    }
}
