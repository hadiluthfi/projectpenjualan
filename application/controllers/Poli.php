<?php

class Poli extends CI_Controller {
    
    function __construct() {
        parent::__construct();
//        $this->load->library('session');
//        chek_session();
//        $this->load->model('model_dashboard');
        $this->load->model('Model_poli');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $data['record']= $this->Model_poli->lihat();
        $this->template->load('template','poli/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $nama  = $this->input->post('nama');
            $waktu  = $this->input->post('waktu');
            $data   = array('nama'=>$nama,
                            'waktu'=>$waktu);
            
            $this->Model_poli->tambah($data);
            redirect('poli');
        } else {
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            $this->template->load('template','poli/tambah');
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $nama  = $this->input->post('nama');
            $waktu  = $this->input->post('waktu');
            $data   = array('nama'=>$nama,
                            'waktu'=>$waktu);

            $this->Model_poli->edit($data,$id);
            redirect('poli');
        } else {
            $id = $this->uri->segment(3);
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
            $data['record']     =  $this->Model_poli->get_one($id)->row_array();
            $this->template->load('template','poli/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_poli->hapus($id);
        redirect(poli);
    }
    
 
    
}