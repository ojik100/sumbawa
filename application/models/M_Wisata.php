<?php 
 
class M_wisata extends CI_Model{
	
   
        function input_data($data,$table){
            $this->db->insert($table,$data);
        }
        function update_data($where,$data){
          
          $this->db->update('wisata',$data,$where);
      }
     
    }

