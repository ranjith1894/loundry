<?php
class orders_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getallorders() {
        $query = $this->db->query("SELECT O.order_id,O.order_no, O.order_date,  O.total_amount,  O.order_status,C.first_name FROM orders O , customer_details C WHERE O.customer_id  = C.customer_id");
        return $query->result();
    }
       public function getcustomerwithtype($id) {
        $query = $this->db->query("SELECT C.`customer_id` , C.`first_name` , C.`phone_number` , C.`secondary_phone` , C.`customer_type_id` , CP.customer_types
FROM  `customer_details` C, customer_type CP
WHERE C.customer_type_id = CP.customer_type_id AND C.`customer_id` =".$id);
        return $query->result();
    }
    public function getallproductdata($id) {
        $query = $this->db->query("SELECT C.`customer_id` , C.`first_name` , C.`phone_number` , C.`secondary_phone` , C.`customer_type_id` , CP.customer_types
FROM  `customer_details` C, customer_type CP
WHERE C.customer_type_id = CP.customer_type_id AND C.`customer_id` =".$id);
        return $query->result();
    }
     public function getallcustomers() {
        $query = $this->db->query("SELECT C.*,CT.* FROM `customer_details` C ,customer_type CT WHERE 
C.customer_type_id = CT.customer_type_id");
        return $query->result();
    }
      public function addorder($customer_id,$order_number,$store_id,$comments,$orderdate,$deliverydate,$amount,$pickup_address) {
         $sql ="INSERT INTO `orders`( `order_no`, `customer_id`, `store_id`, `order_date`, `scheduled_date`, `notes`, `pickup_address`, `total_amount`,driver_id,delivery_address_id,pickup_id,latitude,`longitude`, `payment_status`, `order_status`, `created_date`, `modified_date`) VALUES ('$order_number',$customer_id,$store_id,'$orderdate','$deliverydate','$comments','$pickup_address',$amount,1,1,1,1,1,1,1,'$orderdate','$deliverydate')";
            $results= $this->db->query($sql);
            return $this->db->insert_id();
    }
       public function addorderdetails($order_id,$type_id,$product_id,$quantity,$total,$product_type_id,$addons) {
         $sql ="INSERT INTO `order_details`(`order_id`, `type_id`, `product_id`, `quantity`, `total`, `product_type_id`, `addons_id`,status) VALUES ($order_id,$type_id,$product_id,$quantity,$total,$product_type_id,'$addons',1)";
            $results= $this->db->query($sql);
            return $this->db->insert_id();
    }
    
    public function lastorderid(){
         $query = $this->db->query("SELECT `order_id`,`order_no` FROM `orders` ORDER BY order_id DESC LIMIT 1");
        return $query->result();
    }
    public function getmatchedprducttypeid($type_id,$product_id,$gender_id){
         $query = $this->db->query("SELECT `product_type_id`, `price_package_id`, `product_id`, `gender_id`, `types_id`, `product_price` FROM `product_types` WHERE product_id = $product_id AND gender_id = $gender_id AND types_id = $type_id ");
        return $query->result();
    }
    
    public function updateorder($customer_id,$order_number,$store_id,$comments,$orderdate,$deliverydate,$amount,$pickup_address,$id) {
         $sql ="UPDATE
  `orders`
SET
  `order_no` = '$order_number',
  `customer_id` = $customer_id,
  `store_id` = $store_id,
  `order_date` = '$orderdate',
  `scheduled_date` = '$deliverydate',
  `notes` = '$comments',
  `pickup_address` = '$pickup_address',
  `total_amount` = $amount
WHERE order_id =".$id;
            $results= $this->db->query($sql);
            return $results;
    }
    public function delete_order_details($order_id){
         $query = $this->db->query("DELETE FROM `order_details` WHERE order_id =".$order_id);
        
          return 1;
    }
}

?>