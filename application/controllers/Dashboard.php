<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
    public function __construct()
	{
        parent::__construct();
        $this->load->database();
            $this->load->helper(array('form', 'url'));
            $this->load->library(array('session', 'upload'));
		$this->load->model('Mudik_Model');     
    }

    public function index()
	{	
        if ($this->session->userdata('login')) //check session login 
		{
            if (($this->session->userdata('role') == "admin") ) //check session login 
            {
                
                $result["data"]= $this->Mudik_Model->get_rute_list();
                $this->template->load('template','dashboard', $result);               
                
            }
            else
            {
                echo "<div class='alert alert-danger'>You are not allowed to access this page!</div>";
                redirect('welcome','refresh');
                
            }
            
        }
        else
        {
            echo "<div class='alert alert-danger'>You should login first!</div>";
            redirect('welcome','refresh');
        }
        
    }

}