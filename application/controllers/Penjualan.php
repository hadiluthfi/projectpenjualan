<?php

class penjualan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        // $this->load->library('session');
        // chek_session();
        // $this->load->model('model_dashboard');
        $this->load->model('Model_penjualan');
        $this->load->model('Model_customer');
         $this->load->model('Model_produk');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//            
        
        $data['record']= $this->Model_penjualan->lihat();
        $this->template->load('template','penjualan/lihat',$data);
    }


  function tambah(){
        
        if(isset($_POST['submit'])){
            $id_produk  = $this->input->post('id_produk');
             $id_kategori  = $this->input->post('id_kategori');
            $id_penjualan  = $this->input->post('id_penjualan');
            $id_customer  = $this->input->post('id_customer');
            
            $data   = array('id_produk'=>$id_produk,
                             'id_kategori'=>$id_kategori,
                            'id_customer'=>$id_customer,
                            'id_penjualan'=>$id_penjualan);
            
            $this->Model_penjualan->tambah($data);
            redirect('penjualan');
        } else {
            
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//            
            $data['kategori']= $this->Model_produk->kategori()->result();
             $data['customer']= $this->Model_penjualan->customer()->result();
             $data['produk']= $this->Model_penjualan->produk()->result();
            $data['poli']= $this->Model_produk->poli()->result();
            $this->template->load('template','penjualan/tambah',$data);
        }
      
    }




    
    function produk(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $id                 = $this->uri->segment(3);
        $data['customer']     = $this->Model_customer->get_one($id)->row_array();
        $data['record']     = $this->Model_penjualan->produk();
        $data['record2']    = $this->Model_penjualan->produk_pilih();
        $this->template->load('template','penjualan/penjualan',$data);
    }
    
    function pilih_produk()
    {
        $id_customer      =  $this->uri->segment(4);
        $id_produk    =  $this->uri->segment(3);
        $data           = array('id_produk'=>$id_produk
                                ,'status'=>'0'
                                ,'id_customer'=>$id_customer);
        $this->db->insert('detail_penjualan',$data);
        redirect('penjualan/produk/'.$id_customer);
    }
    
    
    function hapus_produk()
    {
        $id_customer      =  $this->uri->segment(4);
        $id=  $this->uri->segment(3);
        $this->Model_penjualan->hapus_produk($id);
        redirect('penjualan/produk/'.$id_customer);
    }
    
        
   
    
    
    function detail(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $id                 = $this->uri->segment(3);
        $data['customer']     = $this->Model_customer->get_one($id)->row_array();
        $data['produk']   = $this->Model_penjualan->produk_detail($id);
        $this->template->load('template','penjualan/detail',$data);
    }
    


    
     function edit(){
        
            if(isset($_POST['submit'])){
            $id             = $this->input->post('id');
            $id_produk      = $this->input->post('id_produk');
            $id_kategori    = $this->input->post('id_kategori');
            $id_penjualan   = $this->input->post('id_penjualan');
            $id_customer    = $this->input->post('id_customer');
            
            $data   = array('id_produk'=>$id_produk,
                            'id_kategori'=>$id_kategori,
                            'id_customer'=>$id_customer,
                            'id_penjualan'=>$id_penjualan);
            
            $this->Model_penjualan->edit($data,$id);
            redirect('penjualan');
        } else {
            
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
            $id = $this->uri->segment(3);  
            $data['kategori']= $this->Model_produk->kategori()->result();
            $data['customer']= $this->Model_penjualan->customer()->result();
            $data['produk']= $this->Model_penjualan->produk()->result();
            $data['poli']= $this->Model_produk->poli()->result();
            $data['record']     =  $this->Model_penjualan->get_one($id)->row_array();
            $this->template->load('template','penjualan/edit',$data);
        }
      
 
      
    }
}
    
    
    
  

