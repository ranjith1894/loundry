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
		$this->load->view('login');
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
