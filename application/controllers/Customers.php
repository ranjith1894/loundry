<?php

class Customers extends CI_Controller {

  function __construct () {

        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('customers_m', 'Customers_M', TRUE);
        $this->load->database();
        $this->load->helper(array('form', 'url'));
            
    }
    
    
	public function get()
	{
      $q = $this->db->get('customer_details');
      $data['customers'] = $q->result();
      
      
		$this->load->view('admin/customers/customers', $data);
	}
   public function getadd()
	{
      $q1 = $this->db->get('customer_type');
      $data['customer_type'] = $q1->result();
      $this->load->view('admin/customers/addcustomer',$data);
	}
   public function add()
	{
      $customer_name=$this->input->post('customer_name');
      $customer_phone=$this->input->post('customer_phone');
      $secondary_phone=$this->input->post('secondary_phone');
      $email=$this->input->post('email');
      $address=$this->input->post('address');
      $customer_type_id=$this->input->post('customer_type_id');
      
      $result = $this->Customers_M->addcustomer($customer_name,$customer_phone,$secondary_phone,$email,$address,$customer_type_id);
		$this->get();
	}
   public function getedit($id){
     $q = $this->db->get_where('customer_details', array('customer_id' => $id));
     $data['customer_details'] = $q->result();
     
      $q1 = $this->db->get('customer_type');
      $data['customer_type'] = $q1->result();
      $this->load->view('admin/customers/editcustomer',$data);
   }

   public function update()
	{
      $id =$this->input->post('id');
      $customer_name=$this->input->post('customer_name');
      $customer_phone=$this->input->post('customer_phone');
      $secondary_phone=$this->input->post('secondary_phone');
      $email=$this->input->post('email');
      $address=$this->input->post('address');
      $customer_type_id=$this->input->post('customer_type_id');
      
      $result = $this->Customers_M->updatecustomer($customer_name,$customer_phone,$secondary_phone,$email,$address,$customer_type_id,$id);
		$this->get();
	}
    public function delete()
	{
		$this->load->view('login');
	}
}
