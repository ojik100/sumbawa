<?php 
 
class M_Vidio extends CI_Model{
	
   
        function input_data($data,$table){
            $this->db->insert($table,$data);
        }
        function update_data($where,$data){
          
          $this->db->update('vidio',$data,$where);
      }
   

    
}