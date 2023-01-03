<?php
class Minvoice extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function view_invoice($reference)
    {
        $sql = "SELECT
        submissions.reference_number,
        submissions.Invoice_ID,
        submissions.date_placed,
        submissions.financial_year,
        submissions.financial_month,
        submissions.deleted_date,
        users.Email,
        users.Company_name,
        submissions.is_child,
        submissions.amount 
    FROM
        submissions
        INNER JOIN users ON users.user_id = submissions.Supplier_ID 
    WHERE
        submissions.is_child = 0 
        AND submissions.reference_number = '" . $reference . "' AND ISNULL(submissions.deleted_date)";

        return $this->db->query($sql);
    }

    public function view_invoice_members($reference)
    {
        $sql = "SELECT
        submissions.reference_number,
        submissions.Invoice_ID,
        submissions.date_placed,
        submissions.financial_year,
        submissions.financial_month,
        submissions.deleted_date,
        users.Email,
        users.Company_name,
        submissions.is_child,
        submissions.amount 
    FROM
        submissions
        INNER JOIN users ON users.user_id = submissions.Member_ID 
    WHERE
        submissions.is_child = 1 
        AND submissions.reference_number = '" . $reference . "' AND ISNULL(submissions.deleted_date)";

        return $this->db->query($sql);
    }
}
