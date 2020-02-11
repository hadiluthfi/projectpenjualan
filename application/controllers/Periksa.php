<?php

class Periksa extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        // $this->load->library('session');
        // chek_session();
        // $this->load->model('model_dashboard');
        $this->load->model('Model_periksa');
        $this->load->model('Model_pasien');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $data['record']= $this->Model_pasien->lihat();
        $this->template->load('template','periksa/lihat',$data);
    }
    
    function tindakan(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $id                 = $this->uri->segment(3);
        $data['pasien']     = $this->Model_pasien->get_one($id)->row_array();
        $data['record']     = $this->Model_periksa->tindakan();
        $data['record2']    = $this->Model_periksa->tindakan_pilih();
        $this->template->load('template','periksa/periksa',$data);
    }
    
    function pilih_tindakan()
    {
        $id_pasien      =  $this->uri->segment(4);
        $id_tindakan    =  $this->uri->segment(3);
        $data           = array('id_tindakan'=>$id_tindakan
                                ,'status'=>'0'
                                ,'id_pasien'=>$id_pasien);
        $this->db->insert('detail_periksa',$data);
        redirect('periksa/tindakan/'.$id_pasien);
    }
    
    
    function hapus_tindakan()
    {
        $id_pasien      =  $this->uri->segment(4);
        $id=  $this->uri->segment(3);
        $this->Model_periksa->hapus_tindakan($id);
        redirect('periksa/tindakan/'.$id_pasien);
    }
    
        
    function selesai_periksa()
    {
        $id_pasien  =   $this->uri->segment(3);   
        $tanggal    =   date('Y-m-d');
        $data       =   array('tgl_periksa'=>$tanggal,
                              'id_pasien'=>$id_pasien);
        $this->Model_periksa->selesai_periksa($data);
        redirect('periksa');
    }
    
    function daftar_periksa(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $data['record']= $this->Model_periksa->daftar_periksa();
        $this->template->load('template','periksa/daftar_periksa',$data);
    }
    
    function detail(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $id                 = $this->uri->segment(3);
        $data['pasien']     = $this->Model_pasien->get_one($id)->row_array();
        $data['tindakan']   = $this->Model_periksa->tindakan_detail($id);
        $this->template->load('template','periksa/detail',$data);
    }
    
    function riwayat_periksa(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $data['record']= $this->Model_periksa->riwayat_periksa($username);
        $this->template->load('template_pasien','halaman_pasien/daftar_periksa',$data);
    }
    
    function detail_periksa(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $id                 = $this->uri->segment(3);
        $data['pasien']     = $this->Model_pasien->get_one($id)->row_array();
        $data['tindakan']   = $this->Model_periksa->tindakan_detail_pasien($id);
        $this->template->load('template_pasien','periksa/detail',$data);
    }
    
    function tindakan_pasien(){
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $id                 = $this->uri->segment(3);
        $data['pasien']     = $this->Model_pasien->get_one_pasien($username)->row_array();
        $data['record']     = $this->Model_periksa->tindakan_pasien($username);
        $data['record2']    = $this->Model_periksa->tindakan_pilih_pasien($username);
        $this->template->load('template_pasien','halaman_pasien/periksa',$data);
    }
    
    function pilih_tindakan_pasien()
    {
        $username   = $this->session->userdata('username');
        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
                
        $id_pasien      =  $this->uri->segment(4);
        $id_tindakan    =  $this->uri->segment(3);
        $data           = array('id_tindakan'=>$id_tindakan
                                ,'status'=>'0'
                                ,'id_pasien'=>$id_pasien);
        $this->db->insert('detail_periksa',$data);
        redirect('periksa/tindakan_pasien');
    }
    
    
    function hapus_tindakan_pasien()
    {
        $id_pasien      =  $this->uri->segment(4);
        $id=  $this->uri->segment(3);
        $this->Model_periksa->hapus_tindakan($id);
        redirect('periksa/tindakan_pasien/'.$id_pasien);
    }
    
        
    function selesai_periksa_pasien()
    {
        $id_pasien  =   $this->uri->segment(3);   
        $tanggal    =   date('Y-m-d');
        $data       =   array('tgl_periksa'=>$tanggal,
                              'id_pasien'=>$id_pasien);
        $this->Model_periksa->selesai_periksa($data);
        redirect('periksa/riwayat_periksa');
    }
    
    
    
    
  
}
