<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_account'); //call model
		 $this->load->model('M_Config');
        
     }
 
     public function index() {
			// Validasi Form
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
		 $this->form_validation->set_rules('prodi', 'PRODI','required');
		 $this->form_validation->set_rules('golongan', 'GOLONGAN','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
        
		 //jika validasi form salah
		if($this->form_validation->run() == FALSE) {
             $this->load->view('authentication/V_register');
         }else{
			//input ke database user
			$data['id_user'] =   		  $this->input->post('username');
            $data['nama']    =   		  $this->input->post('name');
            $data['prodi']   =    	 	  $this->input->post('prodi');
			$data['golongan']  =    	  $this->input->post('golongan');
			$data['semester']   =  $this->input->post('semester');
            $data['password']  =     md5($this->input->post('password'));
			$data['level']  =    	  	  "Mahasiswa";
			$data['active']  =    	  	  "1";

			$data2['nim'] =  $this->input->post('username');
            $data2['nama_mahasiswa']    =  $this->input->post('name');
            $data2['prodi_mahasiswa']   =  $this->input->post('prodi');
            $data2['gol_mahasiswa']   =  $this->input->post('golongan');
            $data2['semester']   =  $this->input->post('semester');
 
             $this->M_account->daftar($data,$data2);
			 
	
			 
             $pesan['message'] =    "Pendaftaran berhasil";
             redirect('authentication/auth/login');
         }
     }
	 //link tok 
	  public function newuser () {
	
	//Option
	/*
	$data['golongan'] = $this->M_Config->tampilgolongan();
	$data['prodi'] = $this->M_Config->tampilProdi();
	*/           
    $this->load->view('authentication/V_Register');
  }
 
	 
 }