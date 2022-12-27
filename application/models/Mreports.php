<?php
class Mreports extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    public function view_member_report($data)
    {
        $sql = "SELECT
            t1.name,
            IFNULL(t1.July,0) AS July ,
            IFNULL(t1.August,0) AS August ,
            IFNULL(t1.September,0) AS September,
            IFNULL(t1.October,0) AS October,
            IFNULL(t1.November,0) AS November,
            IFNULL(t1.December,0) AS December,
            IFNULL(t1.January,0) AS January,
            IFNULL(t1.February,0) AS February,
            IFNULL(t1.March,0) AS March,
            IFNULL(t1.April,0) AS April,
            IFNULL(t1.May,0) AS May,
            IFNULL(t1.June,0) AS June,
            IFNULL(t1.July,0)+IFNULL(t1.August,0)+IFNULL(t1.September,0)+IFNULL(t1.October,0)+IFNULL(t1.November,0)+IFNULL(t1.December,0)+IFNULL(t1.January,0)+IFNULL(t1.February,0)+IFNULL(t1.March,0)+IFNULL(t1.April,0)+IFNULL(t1.May,0)+IFNULL(t1.June,0) AS row_total
    FROM
        (
        SELECT
        users.Company_name AS name,SUM(submissions.amount) AS total,
            SUM( CASE WHEN submissions.financial_month = 'July' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'July',
            SUM( CASE WHEN submissions.financial_month = 'August' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'August',
            SUM( CASE WHEN submissions.financial_month = 'September' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'September',
            SUM( CASE WHEN submissions.financial_month = 'October' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'October',
            SUM( CASE WHEN submissions.financial_month = 'November' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'November',
            SUM( CASE WHEN submissions.financial_month = 'December' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'December',
            SUM( CASE WHEN submissions.financial_month = 'January' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'January',
            SUM( CASE WHEN submissions.financial_month = 'February' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'February',
            SUM( CASE WHEN submissions.financial_month = 'March' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'March',
            SUM( CASE WHEN submissions.financial_month = 'April' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'April',
            SUM( CASE WHEN submissions.financial_month = 'May' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'May',
            SUM( CASE WHEN submissions.financial_month = 'June' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'June'
            
        FROM
            submissions INNER JOIN users ON users.user_id=submissions.Member_ID WHERE is_child=1
        GROUP BY
            submissions.Member_ID 
        ORDER BY
            submissions.Member_ID ASC 
        ) t1";
            $get_data = $this->db->query($sql)->result();

            if ($get_data) {
                return json_encode(array("status" => "1", "ret_data" => $get_data));
            } else {
                return json_encode(array("status" => "0", "ret_data" => "Report Details Cannot find !"));
            }
    }

    public function view_supplier_report($data)
    {
        $sql="SELECT
        t2.Company_name AS name,
        t1.Supplier_ID,
        IFNULL( t1.July, 0 ) AS July,
        IFNULL( t1.August, 0 ) AS August,
        IFNULL( t1.September, 0 ) AS September,
        IFNULL( t1.October, 0 ) AS October,
        IFNULL( t1.November, 0 ) AS November,
        IFNULL( t1.December, 0 ) AS December,
        IFNULL( t1.January, 0 ) AS January,
        IFNULL( t1.February, 0 ) AS February,
        IFNULL( t1.March, 0 ) AS March,
        IFNULL( t1.April, 0 ) AS April,
        IFNULL( t1.May, 0 ) AS May,
        IFNULL( t1.June, 0 ) AS June,
        IFNULL( t1.total, 0 ) AS total
    FROM
        (
        SELECT
            submissions.Supplier_ID,
            SUM( CASE WHEN submissions.financial_month = 'July' AND submissions.financial_year='".$data["date_from"]."'THEN amount END ) 'July',
            SUM( CASE WHEN submissions.financial_month = 'August' AND submissions.financial_year='".$data["date_from"]."'  THEN amount END ) 'August',
            SUM( CASE WHEN submissions.financial_month = 'September' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'September',
            SUM( CASE WHEN submissions.financial_month = 'October' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'October',
            SUM( CASE WHEN submissions.financial_month = 'November' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'November',
            SUM( CASE WHEN submissions.financial_month = 'December' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'December',
            SUM( CASE WHEN submissions.financial_month = 'January' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'January',
            SUM( CASE WHEN submissions.financial_month = 'February' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'February',
            SUM( CASE WHEN submissions.financial_month = 'March' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'March',
            SUM( CASE WHEN submissions.financial_month = 'April' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'April',
            SUM( CASE WHEN submissions.financial_month = 'May' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'May',
            SUM( CASE WHEN submissions.financial_month = 'June' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'June',
            SUM( amount ) AS total 
        FROM
            submissions 
        WHERE is_child = 0 
        GROUP BY
            submissions.Supplier_ID 
        ORDER BY
            submissions.Supplier_ID ASC 
        ) t1
        RIGHT JOIN ( SELECT * FROM users WHERE user_group_id = 2 ORDER BY Company_name ASC ) t2 ON t1.Supplier_ID = t2.user_id 
    ORDER BY
        t2.Company_name ASC";

        $get_data = $this->db->query($sql)->result();

        if ($get_data) {
            return json_encode(array("status" => "1", "ret_data" => $get_data));
        } else {
            return json_encode(array("status" => "0", "ret_data" => "Report Details Cannot find !"));
        }
    }

    public function view_member_report_supplier($data)
    {
        $sql="SELECT
        t1.name,
        IFNULL(t1.July,0) AS July ,
        IFNULL(t1.August,0) AS August ,
        IFNULL(t1.September,0) AS September,
        IFNULL(t1.October,0) AS October,
        IFNULL(t1.November,0) AS November,
        IFNULL(t1.December,0) AS December,
        IFNULL(t1.January,0) AS January,
        IFNULL(t1.February,0) AS February,
        IFNULL(t1.March,0) AS March,
        IFNULL(t1.April,0) AS April,
        IFNULL(t1.May,0) AS May,
        IFNULL(t1.June,0) AS June,
        IFNULL(t1.July,0)+IFNULL(t1.August,0)+IFNULL(t1.September,0)+IFNULL(t1.October,0)+IFNULL(t1.November,0)+IFNULL(t1.December,0)+IFNULL(t1.January,0)+IFNULL(t1.February,0)+IFNULL(t1.March,0)+IFNULL(t1.April,0)+IFNULL(t1.May,0)+IFNULL(t1.June,0) AS row_total
FROM
    (
    SELECT
    users.Company_name AS name,SUM(submissions.amount) AS total,
        SUM( CASE WHEN submissions.financial_month = 'July' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'July',
        SUM( CASE WHEN submissions.financial_month = 'August' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'August',
        SUM( CASE WHEN submissions.financial_month = 'September' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'September',
        SUM( CASE WHEN submissions.financial_month = 'October' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'October',
        SUM( CASE WHEN submissions.financial_month = 'November' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'November',
        SUM( CASE WHEN submissions.financial_month = 'December' AND submissions.financial_year='".$data["date_from"]."' THEN amount END ) 'December',
        SUM( CASE WHEN submissions.financial_month = 'January' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'January',
        SUM( CASE WHEN submissions.financial_month = 'February' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'February',
        SUM( CASE WHEN submissions.financial_month = 'March' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'March',
        SUM( CASE WHEN submissions.financial_month = 'April' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'April',
        SUM( CASE WHEN submissions.financial_month = 'May' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'May',
        SUM( CASE WHEN submissions.financial_month = 'June' AND submissions.financial_year='".$data["date_to"]."' THEN amount END ) 'June'
        
    FROM
        submissions INNER JOIN users ON users.user_id=submissions.Member_ID WHERE is_child=1 AND submissions.Supplier_ID=".$data["Supplier_ID"]."
    GROUP BY
        submissions.Member_ID 
    ORDER BY
        submissions.Member_ID ASC 
    ) t1";
    $get_data = $this->db->query($sql)->result();

    if ($get_data) {
        return json_encode(array("status" => "1", "ret_data" => $get_data));
    } else {
        return json_encode(array("status" => "0", "ret_data" => "Report Details Cannot find !"));
    }
    }
}