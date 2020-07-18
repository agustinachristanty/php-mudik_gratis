<?php
class Mudik_Model extends CI_Model 
{
    
    public function get_rute_list()
    {
        
        $query=$this->db->get(table_pilih_rute);
        
        if ($query->num_rows() > 0)
        { 
            return $query->result_array();
        }else
        {
            return NULL;
        }
    }

    function get_data_id($no)
        {
            $query=$this->db->get_where(table_pilih_rute, array('no' => $no));    
            if ($query->num_rows() > 0)
            { 
                return $query->result_array() ;
            }
            else
            {
                return NULL;
            }
        }

        function update($no, $rute, $jadwal, $jumlah_pnp)
        {
            $array = array(
                'no' => $no, 
                'rute' => $rute,
                'jumlah_pnp' => $jumlah_pnp
            );       
            $this->db->trans_start();
            $this->db->where('no', $no);
            $this->db->update(table_pilih_rute, $array);
            $this->db->trans_complete();       
            if($this->db->trans_status() === FALSE)
        {
            $result = "ERROR: Could not able to execute delete_rute";		
        }
		else
		{
            $result = " Rute was deleted successfully. <br>";		
        }   
    
            return $result;
    
        }
    
        function insert($no, $rute, $jadwal, $jumlah_pnp)
        {
            $array = array(
                
                'no' => $no, 
                'rute' => $rute,
                'jumlah_pnp' => $jumlah_pnp
            );    
            $this->db->trans_start();
            $this->db->set($array);
            $this->db->insert(table_pilih_rute);
            $this->db->trans_complete();       
            if($this->db->trans_status() === FALSE)
        {
            $result = "ERROR: Could not able to execute delete_rute";		
        }
		else
		{
            $result = " Rute was deleted successfully. <br>";		
        }     
            return $result;
    
        }
    
        function delete($no)
        {
            $this->db->trans_start();
            $this->db->delete(table_pilih_rute, array('no' => $no));        
            $this->db->trans_complete();       
            if($this->db->trans_status() === FALSE)
        {
            $result = "ERROR: Could not able to execute delete_rute";		
        }
		else
		{
            $result = " Rute was deleted successfully. <br>";		
        }    
            return $result;
        }

}

