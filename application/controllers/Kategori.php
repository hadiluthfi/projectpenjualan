<?php

class Kategori extends CI_Controller {
    
    function __construct() {
        parent::__construct();
//        $this->load->library('session');
//        chek_session();
//        $this->load->model('model_dashboard');
        $this->load->model('Model_kategori');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $data['record']= $this->Model_kategori->lihat();
        $this->template->load('template','kategori/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $kategori  = $this->input->post('kategori');
            $data   = array('kategori'=>$kategori);
            
            $this->Model_kategori->tambah($data,$id);
            redirect('kategori');
        } else {
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            $this->template->load('template','kategori/tambah');
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $kategori  = $this->input->post('kategori');
            $data   = array('kategori'=>$kategori);

            $this->Model_kategori->edit($data,$id);
            redirect('kategori');
        } else {
            $id = $this->uri->segment(3);
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
            $data['record']     =  $this->Model_kategori->get_one($id)->row_array();
            $this->template->load('template','kategori/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_kategori->hapus($id);
        redirect(kategori);
    }
    
 
    
}