<?php

class Store extends CI_Controller {

  function __construct () {

        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('store_m', 'Store_M', TRUE);
        $this->load->database();
        $this->load->helper(array('form', 'url'));
            
    }
    
    
	public function get()
	{
                               $q = $this->db->get('store');
                               $data['store'] = $q->result();
		$this->load->view('admin/store/store', $data);
	}
    
   public function getadd()
	{
      $this->load->view('admin/store/addstore');
	}
    
        
   public function add()
	{
      $store_name=$this->input->post('store_name');
      $store_phone=$this->input->post('store_phone');
      $store_contact_person=$this->input->post('store_contact_person');
      $store_phone_number=$this->input->post('store_phone_number');
      $store_address = $this->input->post('store_address');
      $store_email=$this->input->post('store_email');
      $store_billing_price=$this->input->post('store_billing_price');
      $store_price=$this->input->post('store_price');
      
      $result = $this->Store_M->addstore($store_name,$store_phone,$store_contact_person,$store_phone_number,$store_email,$store_billing_price,$store_price,$store_address);
      $this->get();
	}
   
   public function getedit($id){
     $q = $this->db->get_where('store', array('store_id' => $id));
     $data['store_details'] = $q->result();
     $this->load->view('admin/store/editstore',$data);
   }
   
   public function update()
	{
      $id =$this->input->post('id');
      $store_name=$this->input->post('store_name');
      $store_phone=$this->input->post('store_phone');
      $store_contact_person=$this->input->post('store_contact_person');
      $store_phone_number=$this->input->post('store_phone_number');
      $store_address = $this->input->post('store_address');
      $store_email=$this->input->post('store_email');
      $store_billing_price=$this->input->post('store_billing_price');
      $store_price=$this->input->post('store_price');
      
      $result = $this->Store_M->updatestore($store_name,$store_phone,$store_contact_person,$store_phone_number,$store_email,$store_billing_price,$store_price,$store_address,$id);
		$this->get();
	}
   
    public function delete()
	{
		$this->load->view('login');
	}
}
