<?php
class product_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

  public function getproducttypes() {
        $query = $this->db->query("SELECT  PT.product_type_id,PP.price_package_name, G.`gender_name`, PT.`product_price` ,P.product_name,T.types_name
FROM `product_types` PT,price_package PP,products P,types T,gender G
WHERE PP.price_package_id = PT.price_package_id
AND PT.`product_id` = P.`product_id` 
AND PT.types_id = T.types_id
AND PT.gender_id = G.gender_id
");
         return $query->result();
    }
  
  public function addproduct($product_name) {
        $query = $this->db->query("INSERT INTO `products` (`product_name`) VALUES ('$product_name')");
        return 1;
    }
      public function addproduct_types($product_id,$price_package_id,$types_id,$gender_id,$item_cost) {
        $query = $this->db->query("INSERT INTO `product_types`(`price_package_id`, `product_id`, `gender_id`, `types_id`, `product_price`) VALUES "
                . "($price_package_id,$product_id,$gender_id,$types_id,'$item_cost')");
        return 1;
    }
    
     public function updateproduct($product_name,$id){
        $query = $this->db->query("UPDATE `products` SET `product_name`='$product_name'  WHERE `product_id` =".$id);
        return 1;
    }
    public function updateproduct_types($product_id,$price_package_id,$types_id,$gender_id,$item_cost,$id){
        $query = $this->db->query("UPDATE `product_types` SET `price_package_id`='$price_package_id',`product_id`='$product_id',`gender_id`='$gender_id',`types_id`='$types_id',`product_price`='$item_cost'  WHERE `product_type_id` =".$id);
        return 1;
    }
    
}

?>