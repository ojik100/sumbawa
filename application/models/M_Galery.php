<?php 
 
class M_Galery extends CI_Model{
	
   
        function input_data($data,$table){
            $this->db->insert($table,$data);
        }
        function update_data($where,$data){
          
          $this->db->update('galery',$data,$where);
      }
      public function update($data,$kondisi)
      {
          $this->db->update('galery',$data,$kondisi);
          return TRUE;
      }
    
   

    
}