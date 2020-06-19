<?php

class Model_penjualan extends CI_Model {

    function lihat(){
        $query="select p.id_penjualan,c.nama,r.produk, k.kategori
                from penjualan p            
             join customer c on c.id_customer=p.id_customer
             join produk r on r.id_produk=p.id_produk
              join kategori k on k.id_kategori=p.id_kategori
                ";
        return $this->db->query($query);
    }

    function customer(){
        $query="select * from customer";
        return $this->db->query($query);
    }

    function produk(){
        $query="select * from produk";
        return $this->db->query($query);
    }
    
 function tambah($data){
        $this->db->insert('penjualan',$data);
    }

     function edit($data,$id)
    {
        $this->db->where('id_penjualan',$id);
        $this->db->update('penjualan',$data);
    }
    
function get_one($id){
        $param = array('id_penjualan'=>$id);
        return $this->db->get_where('penjualan',$param);
    }

    function hapus($id){
        $this->db->where('id_penjualan',$id);
        $this->db->delete('penjualan');
        
    }
    
    function tindakan_pilih(){
       
        $query="select d.id_detail_penjualan,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_penjualan d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where d.status='0'
                ";
        return $this->db->query($query);
    }
    
    function selesai_penjualan($data)
    {
        $this->db->insert('penjualan',$data);
        $last_id=  $this->db->query("select id_penjualan from penjualan order by id_penjualan desc")->row_array();
        $this->db->query("update detail_penjualan set id_penjualan='".$last_id['id_penjualan']."' where status='0'");
        $this->db->query("update detail_penjualan set status='1' where status='0'");
    }
    
    
   
    
    function riwayat_penjualan($username){
        $query="select ps.*, p.* 
                from penjualan ps
                join customer p on ps.id_customer=p.id_customer
                where p.username='$username'
                order by ps.tgl_penjualan desc";
        return $this->db->query($query);
    }
    
    function tindakan_customer($username){
       
        $query="select t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from tindakan t
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where t.id_tindakan not in(select d.id_tindakan from detail_penjualan d
                join customer p on p.id_customer=d.id_customer where d.status='0' and p.username='$username')
                ";
        return $this->db->query($query);
    }
    
    function tindakan_pilih_customer($username){
       
        $query="select d.id_detail_penjualan,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_penjualan d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                join customer p on p.id_customer=d.id_customer
                where d.status='0' and p.username='$username'
                ";
        return $this->db->query($query);
    }
    
    function tindakan_detail_customer($id){
       
        $query="select d.id_detail_penjualan,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_penjualan d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where d.id_penjualan='$id'
                ";
        return $this->db->query($query);
    }
    

}