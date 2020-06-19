<?php

class Model_produk extends CI_Model {

    function lihat(){
        $query="select t.id_produk,t.produk, t.waktu,  k.kategori 
                from produk t             
             join kategori k on k.id_kategori=t.id_kategori
                ";
        return $this->db->query($query);
    }
    
    function kategori(){
        $query="select * from kategori";
        return $this->db->query($query);
    }
    
    function poli(){
        $query="select * from poli";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('produk',$data);
    }
    
    function get_one($id){
        $param = array('id_produk'=>$id);
        return $this->db->get_where('produk',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_produk',$id);
        $this->db->update('produk',$data);
    }
    
    function hapus($id){
        $this->db->where('id_produk',$id);
        $this->db->delete('produk');
        
    }
    

}