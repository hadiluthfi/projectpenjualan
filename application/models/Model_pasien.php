<?php

class Model_pasien extends CI_Model {

    function lihat(){
        $query="select * from pasien";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('pasien',$data);
    }
    
    function get_one($id){
        $param = array('id_pasien'=>$id);
        return $this->db->get_where('pasien',$param);
    }
    
    function get_one_pasien($username){
        $param = array('username'=>$username);
        return $this->db->get_where('pasien',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_pasien',$id);
        $this->db->update('pasien',$data);
    }
    
    function hapus($id){
        $this->db->where('id_pasien',$id);
        $this->db->delete('pasien');
        
    }
    

}