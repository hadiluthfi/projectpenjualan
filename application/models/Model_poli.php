<?php

class Model_poli extends CI_Model {

    function lihat(){
        $query="select * from poli";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('poli',$data);
    }
    
    function get_one($id){
        $param = array('id_poli'=>$id);
        return $this->db->get_where('poli',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_poli',$id);
        $this->db->update('poli',$data);
    }
    
    function hapus($id){
        $this->db->where('id_poli',$id);
        $this->db->delete('poli');
        
    }
    

}