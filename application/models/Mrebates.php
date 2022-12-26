<?php
class Mrebates extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function all_rebate_amount()
    {
        $sql = "SELECT
		SUM(submissions.amount) AS TOTAL, 
		rebates.supplier_rebate, 
		rebates.member_rebate, 
		rebates.rebate_period, 
		submissions.Supplier_ID,
		rebates.rebate_id,
        users.Company_name
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
}
