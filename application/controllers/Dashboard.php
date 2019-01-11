<?php
	class Dashboard extends CI_Controller{
		public function __construct(){
			parent:: __construct();
            if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('authentication/login');
        };
			$this->load->helper('url');

		}

    	public function index(){

        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('template/Dashboard');
        	$this->load->view('template/footer');
            
        }
    }
?>