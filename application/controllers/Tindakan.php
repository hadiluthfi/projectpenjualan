<?php

class Tindakan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
//        $this->load->library('session');
//        chek_session();
//        $this->load->model('model_dashboard');
        $this->load->model('Model_tindakan');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//            
        
        $data['record']= $this->Model_tindakan->lihat();
        $this->template->load('template','tindakan/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $tindakan  = $this->input->post('tindakan');
            $waktu  = $this->input->post('waktu');
            $id_kategori  = $this->input->post('id_kategori');
            $id_poli  = $this->input->post('id_poli');
            $data   = array('tindakan'=>$tindakan,
                            'waktu'=>$waktu,
                            'id_kategori'=>$id_kategori,
                            'id_poli'=>$id_poli);
            
            $this->Model_tindakan->tambah($data);
            redirect('tindakan');
        } else {
            
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//            
            $data['kategori']= $this->Model_tindakan->kategori()->result();
            $data['poli']= $this->Model_tindakan->poli()->result();
            $this->template->load('template','tindakan/tambah',$data);
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $tindakan  = $this->input->post('tindakan');
            $waktu  = $this->input->post('waktu');
            $id_kategori  = $this->input->post('id_kategori');
            $id_poli  = $this->input->post('id_poli');
            $data   = array('tindakan'=>$tindakan,
                            'waktu'=>$waktu,
                            'id_kategori'=>$id_kategori,
                            'id_poli'=>$id_poli);

            $this->Model_tindakan->edit($data,$id);
            redirect('tindakan');
        } else {
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
                        
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_tindakan->get_one($id)->row_array();
            $data['kategori']= $this->Model_tindakan->kategori()->result();
            $data['poli']= $this->Model_tindakan->poli()->result();
            $this->template->load('template','tindakan/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_tindakan->hapus($id);
        redirect(tindakan);
    }
    
 
    
}