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

    
}

?>