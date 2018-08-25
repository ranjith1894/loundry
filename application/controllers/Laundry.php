<?php

class Laundry extends CI_Controller {

  function __construct () {

        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('laundry_m', 'Laundry_M', TRUE);
        $this->load->database();
        $this->load->helper(array('form', 'url'));
            
    }
    
    
	public function get()
	{
                                    $data['laundry'] = $this->Laundry_M->getallaundry();
      
		$this->load->view('admin/laundry/laundry', $data);
	}
   public function getadd()
	{
      $q = $this->db->get('laundry_type');
      $data['laundry_type'] = $q->result();
      $this->load->view('admin/laundry/addlaundry', $data);
	}
   public function add()
	{
      $laundry_type_id=$this->input->post('laundry_type_id');
      $laundry_name=$this->input->post('laundry_name');
      $item_cost=$this->input->post('item_cost');
      
      $result = $this->Laundry_M->addlaundry($laundry_name,$laundry_type_id,$item_cost);
      $this->get();
	}
   public function getedit($id){
     $q = $this->db->get_where('laundry', array('laundry_id' => $id));
     $data['laundry_details'] = $q->result();
     
      $q1 = $this->db->get('laundry_type');
      $data['laundry_type'] = $q1->result();
      $this->load->view('admin/laundry/editlaundry',$data);
   }

   public function update()
	{
      $id =$this->input->post('id');
       $laundry_type_id=$this->input->post('laundry_type_id');
      $laundry_name=$this->input->post('laundry_name');
      $item_cost=$this->input->post('item_cost');
      
      $result = $this->Laundry_M->updatelaundry($laundry_type_id,$laundry_name,$item_cost,$id);
		$this->get();
	}
    public function delete()
	{
		$this->load->view('login');
	}
}
