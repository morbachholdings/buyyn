<?php
class Msubmissions extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    public function get_suppliers()
    {
        $sql = "SELECT * FROM users WHERE user_group_id=2 ORDER BY Company_name ASC";
        return $this->db->query($sql);
    }

    public function member_submissions()
    {
        $sql="SELECT
        MAX( submissions.invoice_ID ),
        submissions.financial_month,
        users.Company_name,
        submissions.financial_year,
        submissions.amount 
    FROM
        users
        LEFT JOIN submissions ON users.Company_name = submissions.member_ID 
    WHERE
        user_group_id = 3 
    GROUP BY
        users.Company_name";

        return $this->db->query($sql);
    }
    

    
}