<?php
class orders_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getallorders() {
        $query = $this->db->query("SELECT O.orders_id,O.order_number, O.order_date,  O.amount,  O.status,C.customer_name FROM orders O , customer C WHERE O.customer_id  = C.customer_id");
        return $query->result();
    }
       public function getcustomerwithtype($id) {
        $query = $this->db->query("SELECT C.`customer_id` , C.`customer_name` , C.`customer_phone` , C.`secondary_phone` , C.`customer_type_id` , CP.type
FROM  `customer` C, customer_type CP
WHERE C.customer_type_id = CP.customer_type_id AND C.`customer_id` =".$id);
        return $query->result();
    }

    
}

?>