<?php

class Model_periksa extends CI_Model {

    function lihat(){
        $query="select * from pasien";
        return $this->db->query($query);
    }
    
    function tindakan(){
       
        $query="select t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from tindakan t
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where t.id_tindakan not in(select id_tindakan from detail_periksa where status='0')
                ";
        return $this->db->query($query);
    }
    
    function tindakan_pilih(){
       
        $query="select d.id_detail_periksa,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_periksa d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where d.status='0'
                ";
        return $this->db->query($query);
    }
    
    function selesai_periksa($data)
    {
        $this->db->insert('periksa',$data);
        $last_id=  $this->db->query("select id_periksa from periksa order by id_periksa desc")->row_array();
        $this->db->query("update detail_periksa set id_periksa='".$last_id['id_periksa']."' where status='0'");
        $this->db->query("update detail_periksa set status='1' where status='0'");
    }
    
    
    function hapus_tindakan($id){
        $this->db->where('id_detail_periksa',$id);
        $this->db->delete('detail_periksa');
        
    }
    
    function daftar_periksa(){
        $query="select ps.*, p.* 
                from periksa ps
                join pasien p on ps.id_pasien=p.id_pasien
                order by ps.tgl_periksa desc";
        return $this->db->query($query);
    }
    
    function tindakan_detail($id){
       
        $query="select d.id_detail_periksa,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_periksa d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where d.id_periksa='$id'
                ";
        return $this->db->query($query);
    }
    
    function riwayat_periksa($username){
        $query="select ps.*, p.* 
                from periksa ps
                join pasien p on ps.id_pasien=p.id_pasien
                where p.username='$username'
                order by ps.tgl_periksa desc";
        return $this->db->query($query);
    }
    
    function tindakan_pasien($username){
       
        $query="select t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from tindakan t
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where t.id_tindakan not in(select d.id_tindakan from detail_periksa d
                join pasien p on p.id_pasien=d.id_pasien where d.status='0' and p.username='$username')
                ";
        return $this->db->query($query);
    }
    
    function tindakan_pilih_pasien($username){
       
        $query="select d.id_detail_periksa,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_periksa d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                join pasien p on p.id_pasien=d.id_pasien
                where d.status='0' and p.username='$username'
                ";
        return $this->db->query($query);
    }
    
    function tindakan_detail_pasien($id){
       
        $query="select d.id_detail_periksa,t.id_tindakan,t.tindakan, t.waktu, r.nama, k.kategori 
                from detail_periksa d 
                join tindakan t on t.id_tindakan=d.id_tindakan
                join poli r on r.id_poli=t.id_poli
                join kategori k on k.id_kategori=t.id_kategori
                where d.id_periksa='$id'
                ";
        return $this->db->query($query);
    }
    

}