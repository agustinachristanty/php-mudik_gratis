<?php
class Login_Model extends CI_Model 
{
    
    function check_username($username)
    {
        $query=$this->db->get_where('userdata',array('username'=>$username));
        
        if ($query->num_rows() > 0)
        { return $query->row_array();
        }
        else {return NULL;}
    }    
}