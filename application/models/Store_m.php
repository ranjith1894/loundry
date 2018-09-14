<?php
class store_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

  public function addstore($store_name,$store_phone,$store_contact_person,$store_phone_number,$store_email,$store_billing_price,$store_price,$store_address) {
        $query = $this->db->query("INSERT INTO `store`(`store_name`, `store_contact_person`, `store_phone_number`, `store_email`, `store_billing_price`, `store_price`, `store_address`) VALUES ('$store_name','$store_contact_person',$store_phone_number,'$store_email',$store_billing_price,$store_price,'$store_address')");
        return 1;
    }
     
     public function updatestore($store_name,$store_phone,$store_contact_person,$store_phone_number,$store_email,$store_billing_price,$store_price,$store_address,$id){
        $query = $this->db->query("UPDATE `store` SET `store_name`='$store_name',`store_contact_person`='$store_contact_person',`store_phone_number`=$store_phone_number,`store_email`='$store_email',`store_billing_price`=$store_billing_price,`store_price`=$store_price,`store_address`=$store_address WHERE store_id =".$id);
        return 1;
    }
    
}

?>