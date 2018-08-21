<?php
class customers_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function verify($user, $pass) {
        $query = $this->db->query("select username,admin_id  from admin where username='$user'  and password ='$pass'");
        return $query->row();
    }
    public function addcustomer($customer_name,$customer_phone,$secondary_phone,$email,$address,$customer_type_id) {
        $query = $this->db->query("INSERT INTO `customer`( `customer_name`, `customer_phone`, `secondary_phone`, `email_id`, `address`, `customer_type_id`) VALUES ('$customer_name','$customer_phone','$secondary_phone','$email','$address','$customer_type_id')");
        return 1;
    }
    public function updatecustomer($customer_name,$customer_phone,$secondary_phone,$email,$address,$customer_type_id,$id) {
        $query = $this->db->query("UPDATE `customer` SET `customer_name`='".$customer_name."',`customer_phone`='".$customer_phone."',`secondary_phone`='".$secondary_phone."',`email_id`='".$email."',`address`='".$address."',`customer_type_id`='".$customer_type_id."' WHERE customer_id=".$id);
        return 1;
    }
}

?>