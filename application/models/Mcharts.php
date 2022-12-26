<?php
class Mcharts extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function view_all_member($data)
    {
        $sql = "SELECT t1.month_name, CASE WHEN SUM(t2.amount) > 0 THEN SUM(t2.amount) ELSE 0 END AS Total FROM
(
	SELECT months.month_name, month_id
	FROM months
) t1
LEFT JOIN ( 
	SELECT submissions.financial_month, submissions.amount
	FROM submissions
	WHERE submissions.financial_year BETWEEN '".$data["start_year"]."' AND '".$data["end_year"]."' AND submissions.is_child = 1 
) t2 ON t1.month_name = t2.financial_month
GROUP BY month_name
ORDER BY month_id";
        return $this->db->query($sql);
    }

    function view_all_supplier($data)
    {
        $sql = "SELECT t1.month_name, CASE WHEN SUM(t2.amount) > 0 THEN SUM(t2.amount) ELSE 0 END AS Total FROM
(
	SELECT months.month_name, month_id
	FROM months
) t1
LEFT JOIN ( 
	SELECT submissions.financial_month,submissions.financial_year, submissions.amount
	FROM submissions
	WHERE submissions.financial_year BETWEEN '".$data["start_year"]."' AND '".$data["end_year"]."' AND submissions.is_child = 0
) t2 ON t1.month_name = t2.financial_month
GROUP BY month_name
ORDER BY month_id";
        return $this->db->query($sql);
    }
}
