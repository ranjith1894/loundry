<?php
class orders_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getallorders() {
        $query = $this->db->query("SELECT O.orders_id,O.order_number, O.order_date,  O.amount,  O.status,C.customer_name FROM orders O , customer C WHERE O.customer_id  = C.customer_id");
        return $query->row();
    }

    
}

?>