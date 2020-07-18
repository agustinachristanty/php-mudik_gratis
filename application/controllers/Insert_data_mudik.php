<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_data_mudik extends CI_Controller {

	
    public function __construct()
	{
        parent::__construct();
		$this->load->model('Mudik_Model');
    }

    public function index()
	{	
        if ($this->session->userdata('login')) //check session login 
		{
            if (($this->session->userdata('role') == "admin") ) //check session login 
            {
                //print_r($_POST);
                $result=array();
                foreach($_POST as $key => $value)
                    {					
                        ${$key} = $this->input->post($key);	
                        //echo${$key};			
                    }

                if(isset($insert))  
                {    
                    $result['message'] = $this->Mudik_Model->insert( $rute, $jadwal, $jumlah_pnp);
                }                
                
                $this->template->load('template','insert_data_mudik', $result);
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