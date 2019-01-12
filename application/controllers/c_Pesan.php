<?php
    class c_Pesan extends CI_Controller{
        public function __construct(){
            if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('authentication/login');
            };
            parent:: __construct();
            $this->load->helper('url');

        }

        public function index(){

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('v_pesan');
            $this->load->view('template/footer');
            
        }
    }
?>