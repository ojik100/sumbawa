<?php 
 
class M_Testimoni extends CI_Model{
	
   
        function input_data($data,$table){
            $this->db->insert($table,$data);
        }
        function update_data($where,$data){
          
          $this->db->update('testimoni',$data,$where);
      }
      function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
     

    }

