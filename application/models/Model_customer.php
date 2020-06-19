<?php

class Model_customer extends CI_Model {

    function lihat(){
        $query="select * from customer";
        return $this->db->query($query);
    }

    function customer(){
        $query="select * from customer";
        return $this->db->query($query);
    }
    
    function tambah($data){
        $this->db->insert('customer',$data);
    }
    
    function get_one($id){
        $param = array('id_customer'=>$id);
        return $this->db->get_where('customer',$param);
    }
    
    function get_one_customer($username){
        $param = array('username'=>$username);
        return $this->db->get_where('customer',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_customer',$id);
        $this->db->update('customer',$data);
    }
    
    function hapus($id){
        $this->db->where('id_customer',$id);
        $this->db->delete('customer');
        
    }
    

}