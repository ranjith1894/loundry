<?php

class Login extends CI_Controller {

  function __construct () {

        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('login_m', 'Login_M', TRUE);
        $this->load->database();
        $this->load->helper(array('form', 'url'));
            
    }
    
    
	public function index()
	{
		$this->load->view('login');
	}
   public function verify()
	{
     if (isset($_REQUEST)) {

           

            $user = trim($this->input->post("email"));
            $pass = $this->input->post("password");
            $result = $this->Login_M->verify($user, $pass);

            if ($result == '') {
                
                $this->session->set_flashdata('msg','Incorrect Username Or Password'); 
                	$this->load->view('login');
                
            } else {
                
                $this->session->set_userdata('id', $result->admin_id);
                
                if ($this->session->userdata('id')){
                    $this->session->set_userdata('user_name', $result->username);
                   $this->load->view('admin/home');
                }
            }
        } else {

            $this->load->view('login');
        }
	
	}
}
