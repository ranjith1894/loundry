<?php

class Orders extends CI_Controller {

  function __construct () {

        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('orders_m', 'Orders_M', TRUE);
        $this->load->database();
        $this->load->helper(array('form', 'url'));
            
    }
    
    
	public function get()
	{
      $data['orders'] = $this->Orders_M->getallorders();
      
      
		$this->load->view('admin/orders/orders', $data);
	}
   public function getadd()
	{
            $q = $this->db->get('customer');
      $data['customers'] = $q->result();
      
       $q1 = $this->db->get('laundry_type');
      $data['laundry_type'] = $q1->result();
      
      $q2 = $this->db->get('laundry');
      $data['laundry'] = $q2->result();
      $this->load->view('admin/orders/addorder',$data);
	}
   public function add()
	{
       
      $customer_name=$this->input->post('customer_name');
      $customer_phone=$this->input->post('customer_phone');
      $secondary_phone=$this->input->post('secondary_phone');
      $email=$this->input->post('email');
      $address=$this->input->post('address');
      $customer_type_id=$this->input->post('customer_type_id');
      
      $result = $this->Orders_M->addcustomer($customer_name,$customer_phone,$secondary_phone,$email,$address,$customer_type_id);
		$this->get();
	}
   public function getedit($id){
     $q = $this->db->get_where('customer', array('customer_id' => $id));
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
      
      $result = $this->Orders_M->updatecustomer($customer_name,$customer_phone,$secondary_phone,$email,$address,$customer_type_id,$id);
		$this->get();
	}
        public function ajaxselectcustomer()
	{
              $id =$this->input->post('id');
                 $result =  $this->Orders_M->getcustomerwithtype($id);
              echo '<div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer name</label></div>
                            <div class="col-12 col-md-9"><input disabled="" type="text" id="customer_name" name="customer_name" placeholder="Customer name" class="form-control"  value='.$result[0]->customer_name.'>
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Phone</label></div>
                            <div class="col-12 col-md-9"><input disabled=" "type="text" id="customer_phone" name="customer_phone" placeholder="Customer Phone" class="form-control" value='.$result[0]->customer_phone.'>
                            </div>
                          </div>
                          
                          <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Customer Type</label></div>
                            <div class="col-12 col-md-9">
                              <select disabled=" "name="customer_type" id="customer_type" class="form-control">
                                <option value='.$result[0]->customer_type_id.'>'.$result[0]->type.'</option>
                                
                              </select>
                            </div>
                          </div>';
            
              
        }
        
        
        
    public function delete()
	{
		$this->load->view('login');
	}
}
