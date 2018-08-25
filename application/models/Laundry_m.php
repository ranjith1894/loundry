<?php
class laundry_m extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getallaundry() {
        $query = $this->db->query("SELECT L.laundry_id, LT.type, L.laundry_name,item_cost FROM laundry L,laundry_type LT WHERE L.laundry_type_id=LT.laundry_type_id");
        return $query->result();
    }
  public function addlaundry($laundry_name,$laundry_type_id,$item_cost) {
        $query = $this->db->query("INSERT INTO `laundry`(`laundry_type_id`, `laundry_name`, `item_cost`) VALUES ($laundry_type_id,'$laundry_name',$item_cost)");
        return 1;
    }
     public function updatelaundry($laundry_type_id,$laundry_name,$item_cost,$id){
        $query = $this->db->query("UPDATE `laundry` SET `laundry_type_id`=$laundry_type_id,`laundry_name`='$laundry_name',`item_cost`=$item_cost WHERE `laundry_id` =".$id);
        return 1;
    }
}

?>