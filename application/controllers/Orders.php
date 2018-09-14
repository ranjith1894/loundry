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
      $data['customer_details'] = $this->Orders_M->getallcustomers();
      
       $q1 = $this->db->get('types');
      $data['types'] = $q1->result();
      
      $q2 = $this->db->get('products');
      $data['products'] = $q2->result();
      
      $q1 = $this->db->get('gender');
      $data['gender'] = $q1->result();
      
       $q1 = $this->db->get('product_types');
      $data['product_types'] = $q1->result();
      $q1 = $this->db->get('store');
      $data['store'] = $q1->result();
       $q1 = $this->db->get('addons');
      $data['addons'] = $q1->result();
      
      $this->load->view('admin/orders/addorder',$data);
	}
   public function add()
	{
       
      $customer_id=$this->input->post('customer_id');
      $customer_type=$this->input->post('customer_type');
      $comments=$this->input->post('comments');
      $orderdate=$this->input->post('orderdate');
      $deliverydate=$this->input->post('deliverydate');
      $pickupbags=$this->input->post('pickupbags');
      $total=$this->input->post('total');
      $disount=$this->input->post('disount');
      $amount=$this->input->post('amount');
      $store_id=$this->input->post('store_id');
      $pickup_address=$this->input->post('pickup_address');
      
      
      $type_ids=$this->input->post('type_ids');
      $product_ids=$this->input->post('product_ids');
      $gender_ids=$this->input->post('gender_ids');
      $quantity=$this->input->post('quantity');
      $price = $this->input->post('price');
      $addonarr="";
      $length = count($gender_ids);
      print_r($length);
      $addonarr="";
      $lastorderid = $this->Orders_M->lastorderid();
      
      if($lastorderid){
          $order_number = 'ORD'.($lastorderid[0]->order_id+1);
       
      }
      else{
         $order_number = 'ORD1';
      }
      $orderdate_formated =date('Y-m-d H:i:s', strtotime($orderdate));
      $deliverydate_formated =date('Y-m-d H:i:s', strtotime($deliverydate));
      $order_id = $this->Orders_M->addorder($customer_id,$order_number,$store_id,$comments,$orderdate_formated,$deliverydate_formated,$amount,$pickup_address);
      
      
      for ($i=1;$i<=$length;$i++){
        $j =$i-1;
        $addonarr= $this->input->post('addon'.$i.'[]');
      
        if($addonarr){
          $commaList = implode(', ', $addonarr);
        }
        else{
          $commaList = "";
        }
        
        
        $producttype = $this->Orders_M->getmatchedprducttypeid($type_ids[$j],$product_ids[$j],$gender_ids[$j]);
       
        
        if($producttype){
          $this->Orders_M->addorderdetails($order_id,$type_ids[$j],$product_ids[$j],$quantity[$j],$price[$j],$producttype[0]->product_type_id,$commaList);
        }
        
      }
      
      
      
		$this->get();
	}
   public function getedit($id){
     $q = $this->db->get_where('orders', array('order_id' => $id));
     $data['orders'] = $q->result();
   
     $q = $this->db->get_where('order_details', array('order_id' => $id));
     $data['order_details'] = $q->result();
     
      $q = $this->db->get_where('customer_details', array('customer_id' => $data['orders'][0]->customer_id));
     $data['selected_customer_details'] = $q->result();
     
     
     $data['customer_details'] = $this->Orders_M->getallcustomers();
       $q1 = $this->db->get('types');
      $data['types'] = $q1->result();
      
      $q2 = $this->db->get('products');
      $data['products'] = $q2->result();
      
      $q1 = $this->db->get('gender');
      $data['gender'] = $q1->result();
      
       $q1 = $this->db->get('product_types');
      $data['product_types'] = $q1->result();
      $q1 = $this->db->get('store');
      $data['store'] = $q1->result();
       $q1 = $this->db->get('addons');
      $data['addons'] = $q1->result();
      
     
     $this->load->view('admin/orders/editorder',$data);
   }

   public function update()
	{
      $id =$this->input->post('id');
      
      $customer_id=$this->input->post('customer_id');
      $customer_type=$this->input->post('customer_type');
      $comments=$this->input->post('comments');
      $orderdate=$this->input->post('orderdate');
      $deliverydate=$this->input->post('deliverydate');
      $pickupbags=$this->input->post('pickupbags');
      $total=$this->input->post('total');
      $disount=$this->input->post('disount');
      $amount=$this->input->post('amount');
      $store_id=$this->input->post('store_id');
      $pickup_address=$this->input->post('pickup_address');
      
      
      $type_ids=$this->input->post('type_ids');
      $product_ids=$this->input->post('product_ids');
      $gender_ids=$this->input->post('gender_ids');
      $quantity=$this->input->post('quantity');
      $price = $this->input->post('price');
      $addonarr="";
      $length = count($gender_ids);
      print_r($length);
      $addonarr="";
      $lastorderid = $this->Orders_M->lastorderid();
      
      if($lastorderid){
          $order_number = 'ORD'.($lastorderid[0]->order_id+1);
       
      }
      else{
         $order_number = 'ORD1';
      }
      $orderdate_formated =date('Y-m-d H:i:s', strtotime($orderdate));
      $deliverydate_formated =date('Y-m-d H:i:s', strtotime($deliverydate));
      $order_id = $this->Orders_M->updateorder($customer_id,$order_number,$store_id,$comments,$orderdate_formated,$deliverydate_formated,$amount,$pickup_address,$id);
      
      $this->Orders_M->delete_order_details($order_id);
      for ($i=1;$i<=$length;$i++){
        $j =$i-1;
        $addonarr= $this->input->post('addon'.$i.'[]');
      
        if($addonarr){
          $commaList = implode(', ', $addonarr);
        }
        else{
          $commaList = "";
        }
        
        
        $producttype = $this->Orders_M->getmatchedprducttypeid($type_ids[$j],$product_ids[$j],$gender_ids[$j]);
       
        
        if($producttype){
          $this->Orders_M->addorderdetails($order_id,$type_ids[$j],$product_ids[$j],$quantity[$j],$price[$j],$producttype[0]->product_type_id,$commaList);
        }
        
      }
      
      
      
		$this->get();
	}
        public function ajaxselectcustomer()
	{
              $id =$this->input->post('id');
                 $result =  $this->Orders_M->getcustomerwithtype($id);
              echo '<div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer name</label></div>
                            <div class="col-12 col-md-9"><input disabled="" type="text" id="customer_name" name="customer_name" placeholder="Customer name" class="form-control"  value='.$result[0]->first_name.'>
                            </div>
                          </div>
                          <div class="row form-group col-md-6">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Phone</label></div>
                            <div class="col-12 col-md-9"><input disabled=" "type="text" id="customer_phone" name="customer_phone" placeholder="Customer Phone" class="form-control" value='.$result[0]->phone_number.'>
                            </div>
                          </div>
                          
                          <div class="row form-group col-md-6 col-md-6">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Customer Type</label></div>
                            <div class="col-12 col-md-9">
                              <select disabled=" "name="customer_type" id="customer_type" class="form-control">
                                <option value='.$result[0]->customer_type_id.'>'.$result[0]->customer_types.'</option>
                                
                              </select>
                            </div>
                          </div>';
            
              
        }
        
        
        
    public function delete()
	{
		$this->load->view('login');
	}
}
