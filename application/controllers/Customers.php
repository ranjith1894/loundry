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
      $data['customers'] =$this->db->get('customer');
     
		$this->load->view('admin/customers/customers', $data);
	}
   public function add()
	{
		$this->load->view('login');
	}
    public function update()
	{
		$this->load->view('login');
	}
    public function delete()
	{
		$this->load->view('login');
	}
}
