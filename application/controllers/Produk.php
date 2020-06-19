<?php

class produk extends CI_Controller {
    
    function __construct() {
        parent::__construct();
//        $this->load->library('session');
//        chek_session();
//        $this->load->model('model_dashboard');
        $this->load->model('Model_produk');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//            
        
        $data['record']= $this->Model_produk->lihat();
        $this->template->load('template','produk/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $produk  = $this->input->post('produk');
            $waktu  = $this->input->post('waktu');
            $id_kategori  = $this->input->post('id_kategori');
            
            $data   = array('produk'=>$produk,
                            'waktu'=>$waktu,
                            'id_kategori'=>$id_kategori);
            
            $this->Model_produk->tambah($data);
            redirect('produk');
        } else {
            
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//            
            $data['kategori']= $this->Model_produk->kategori()->result();
            $data['poli']= $this->Model_produk->poli()->result();
            $this->template->load('template','produk/tambah',$data);
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $produk  = $this->input->post('produk');
            $waktu  = $this->input->post('waktu');
            $id_kategori  = $this->input->post('id_kategori');
            
            $data   = array('produk'=>$produk,
                            'waktu'=>$waktu,
                            'id_kategori'=>$id_kategori
                           );

            $this->Model_produk->edit($data,$id);
            redirect('produk');
        } else {
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
                        
            $id = $this->uri->segment(3);
            $data['record']     =  $this->Model_produk->get_one($id)->row_array();
            $data['kategori']= $this->Model_produk->kategori()->result();
           
            $this->template->load('template','produk/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_produk->hapus($id);
        redirect(produk);
    }
    
 
    
}