<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function __construct()
    {
        parent::__construct();

        $this->load->model('Login_Model');  
    }

    public function index()
    {       
       // print_r($_POST);
        if($this->input->post('username'))
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $row = $this->Login_Model->check_username($username);
            if(!empty($row))
              {
                $password = $row["password"]	;
				$role = $row["role"];
                $name = $row["name"];
                
                if( $password === $row['password'] )
                {
                    $this->session->set_userdata('username',$user_name);
					$this->session->set_userdata('login',true);
					$this->session->set_userdata('role',$role);
                    $this->session->set_userdata('name',$name);
                    
                    
					redirect('dashboard','refresh');
                    
                }
                else{
                    echo "<div class='alert alert-danger'>Login failed, password wrong.</div>";
                    redirect('welcome','refresh');
                }
              }
              else
              {
                  echo "<div class='alert alert-danger'>Login failed, username not found.</div>";
                  redirect('welcome','refresh');
              }
        }
        else
        {
            echo "<div class='alert alert-danger'>Please enter login correctly.</div>";
            redirect('welcome','refresh');
        }
    }
}

