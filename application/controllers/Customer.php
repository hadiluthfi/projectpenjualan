<?php

class customer extends CI_Controller {
    
    function __construct() {
        parent::__construct();
//        $this->load->library('session');
//        chek_session();
//        $this->load->model('model_dashboard');
        $this->load->model('Model_customer');
    }
    
    function index(){
//        $username   = $this->session->userdata('username');
//        $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
        $data['record']= $this->Model_customer->lihat();
        $this->template->load('template','customer/lihat',$data);
    }
    
    function tambah(){
        
        if(isset($_POST['submit'])){
            $nama  = $this->input->post('nama');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $alamat  = $this->input->post('alamat');
            $username  = $this->input->post('username');
            $password  = $this->input->post('password');
            $no_telp  = $this->input->post('no_telp');
            $data   = array('nama'=>$nama,
                            'jenis_kelamin'=>$jenis_kelamin,
                            'no_telp'=>$no_telp,
                            'alamat'=>$alamat,
                            'username'=>$username,
                            'password'=>md5($password));
            
            $this->Model_customer->tambah($data);
            redirect('customer');
        } else {
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
        
            $this->template->load('template','customer/tambah');
        }
      
    }
    
    
    function edit(){
        
        if(isset($_POST['submit'])){
            $id     =   $this->input->post('id');
            $nama  = $this->input->post('nama');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $alamat  = $this->input->post('alamat');
            $username  = $this->input->post('username');
            $password  = $this->input->post('password');
            $no_telp  = $this->input->post('no_telp');
            $data   = array('nama'=>$nama,
                            'jenis_kelamin'=>$jenis_kelamin,
                            'no_telp'=>$no_telp,
                            'alamat'=>$alamat,
                            'username'=>$username,
                            'password'=>md5($password));

            $this->Model_customer->edit($data,$id);
            redirect('customer');
        } else {
            $id = $this->uri->segment(3);
//            $username   = $this->session->userdata('username');
//            $data['user']= $this->model_dashboard->get_profile($username)->row_array();
//        
            $data['record']     =  $this->Model_customer->get_one($id)->row_array();
            $this->template->load('template','customer/edit',$data);
        }
      
    }
    
    function hapus(){
       $id= $this->uri->segment(3);
        $this->Model_customer->hapus($id);
        redirect(customer);
    }
    
 
    
}