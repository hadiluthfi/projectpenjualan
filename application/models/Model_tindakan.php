<?php

class Model_tindakan extends CI_Model {

    function lihat(){
        $query="select t.id_tindakan,t.tindakan, t.waktu, p.nama, k.kategori 
                from tindakan t
                join poli p on p.id_poli=t.id_poli
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
        $this->db->insert('tindakan',$data);
    }
    
    function get_one($id){
        $param = array('id_tindakan'=>$id);
        return $this->db->get_where('tindakan',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_tindakan',$id);
        $this->db->update('tindakan',$data);
    }
    
    function hapus($id){
        $this->db->where('id_tindakan',$id);
        $this->db->delete('tindakan');
        
    }
    

}