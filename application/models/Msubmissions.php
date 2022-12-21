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
        $sql = "SELECT
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

    function insert_parent($data)
    {
        $sql = "SELECT
        * 
    FROM
        submissions 
    WHERE
        Supplier_ID = " . $data['Supplier_ID'] . " 
        AND financial_month = '" . $data['financial_month'] . "' 
        AND financial_year = '" . $data['financial_year'] . "' 
        AND STATUS = 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $array = [];

            foreach ($query->result_array() as $row) {
                $array = $row['reference_number'];
            }

            return json_encode(array("status" => "0", "ret_data" => $array));
        } else {
            if ($this->db->insert('submissions', $data)) {
                return json_encode(array("status" => "1", "ret_data" => "Added"));
            } else {
                return json_encode(array("status" => "0", "ret_data" => "Not"));
            }
        }
    }

    public function add_child_invoice($data)
    {
        if ($this->db->insert('submissions', $data)) {

            $sql = "SELECT * FROM submissions WHERE Supplier_ID='" . $data['Supplier_ID'] . "' AND is_child=0 AND date_placed='" . $data['date_placed'] . "'";
            $query = $this->db->query($sql);
            $array = [];

            foreach ($query->result_array() as $row) {
                $array = $row['Invoice_ID'];
            }
            $id = (int)$array;
            $sql2 = "SELECT SUM(amount) AS total FROM submissions WHERE is_child=1 AND date_placed='" . $data['date_placed'] . "' AND Supplier_ID='" . $data['Supplier_ID'] . "' AND reference_number='" . $data['reference_number'] . "'";
            $query2 = $this->db->query($sql2);
            $array2 = [];
            foreach ($query2->result_array() as $val) {
                $array2 = $val['total'];
            }
            $amount = floatval($array2);

            $update = "UPDATE submissions SET amount=" . $amount . " WHERE Invoice_ID=" . $id . "";
            if ($this->db->query($update)) {
                $sql3 = "DELETE FROM submissions WHERE amount=0 AND is_child=1";
                if ($this->db->query($sql3)) {
                    $sql4 = "DELETE FROM submissions WHERE status=0 AND Supplier_ID='" . $data["Supplier_ID"] . "' AND financial_month='" . $data["financial_month"] . "' AND financial_year='" . $data["financial_year"] . "'";
                    if ($this->db->query($sql4)) {
                        echo "added";
                    } else {
                        echo "failed";
                    }
                } else {
                    echo "failed";
                }
            }
        } else {
            echo "failed";
        }
    }

    public function cancel_submission($data)
    {
        $sql = "SELECT
        * 
    FROM
        submissions 
    WHERE
        reference_number = '" . $data["reference_number"] . "' 
        AND is_child =1";
        $query = $this->db->query($sql);

        if ($query->num_rows() == 0) {
            $delete = "DELETE 
            FROM
                submissions 
            WHERE
                reference_number = '" . $data["reference_number"] . "'";
            $query = $this->db->query($delete);
            echo "del";
        } else {
        }
    }

    public function view_single_submission_supplier($reference)
    {
        $sql = "SELECT
        financial_year,
        financial_month,
        amount,
        users.Company_name 
    FROM
        submissions
        INNER JOIN users ON users.user_id = submissions.Supplier_ID 
    WHERE
        submissions.`status` = 1 
        AND reference_number = '" . $reference . "' 
        AND is_child =0";

        return $this->db->query($sql);
    }

    public function view_submission_member($reference)
    {
        $sql = "SELECT
        users.Company_name AS member_name,
        submissions.amount,
        submissions.date_placed 
    FROM
        submissions
        INNER JOIN users ON submissions.Member_ID = users.user_id 
    WHERE
        is_child = 1 
        AND submissions.`status` = 1 
        AND reference_number = '" . $reference . "'";
        return $this->db->query($sql);
    }

    public function get_user($reference)
    {
        $sql = "SELECT
        users.First_name AS firstName,
        submissions.amount,
        submissions.date_placed 
    FROM
        submissions
        INNER JOIN users ON submissions.added_by = users.user_id 
    WHERE
        is_child = 0 
        AND submissions.`status` = 1 
        AND reference_number ='" . $reference . "'";
        return $this->db->query($sql);
    }
}

