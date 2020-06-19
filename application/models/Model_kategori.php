<?php

class Model_kategori extends CI_Model {

    function lihat(){
        $query="select * from kategori";
        return $this->db->query($query);
    }
    function tambah($data){
        $this->db->insert('kategori',$data);
    }
    
    function get_one($id){
        $param = array('id_kategori'=>$id);
        return $this->db->get_where('kategori',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kategori',$id);
        $this->db->update('kategori',$data);
    }
    
    function hapus($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
        
    }
    

}