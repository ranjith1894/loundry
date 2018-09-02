<?php

class Product extends CI_Controller {

  function __construct () {

        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('product_m', 'Product_M', TRUE);
        $this->load->database();
        $this->load->helper(array('form', 'url'));
            
    }
    
    
	public function get()
	{
                               $q = $this->db->get('products');
                               $data['product'] = $q->result();
		$this->load->view('admin/product/product', $data);
	}
        public function getproduct_types()
	{
                             $data['product_types'] = $this->Product_M->getproducttypes();
                             
		$this->load->view('admin/product/product_types', $data);
	}
   public function getadd()
	{
      $this->load->view('admin/product/addproduct');
	}
        public function getadd_product_types()
	{
            $q = $this->db->get('products');
             $data['product'] = $q->result();
             $q = $this->db->get('price_package');
             $data['price_package'] = $q->result();
             $q = $this->db->get('types');
             $data['types'] = $q->result();
      $this->load->view('admin/product/addproduct_types',$data);
	}
        
   public function add()
	{
      $product_name=$this->input->post('product_name');
      
      $result = $this->Product_M->addproduct($product_name);
      $this->get();
	}
         public function add_product_types()
	{
      $product_id=$this->input->post('product_id');
      $price_package_id=$this->input->post('price_package_id');
      $types_id=$this->input->post('types_id');
      $gender_id=$this->input->post('gender_id');
      $item_cost=$this->input->post('item_cost');
      $result = $this->Product_M->addproduct_types($product_id,$price_package_id,$types_id,$gender_id,$item_cost);
      $this->getadd_product_types();
	}
   public function getedit($id){
     $q = $this->db->get_where('products', array('product_id' => $id));
     $data['product_details'] = $q->result();
     $this->load->view('admin/product/editproduct',$data);
   }
     public function getedit_product_types($id){
     $q = $this->db->get_where('product_types', array('product_id' => $id));
     $data['product_types'] = $q->result();
     
      $q = $this->db->get('products');
             $data['product'] = $q->result();
             $q = $this->db->get('price_package');
             $data['price_package'] = $q->result();
             $q = $this->db->get('types');
             $data['types'] = $q->result();
     $this->load->view('admin/product/editproduct_types',$data);
   }
   public function update()
	{
      $id =$this->input->post('id');
      $product_name=$this->input->post('product_name');
      
      $result = $this->Product_M->updateproduct($product_name,$id);
		$this->get();
	}
    public function delete()
	{
		$this->load->view('login');
	}
}
