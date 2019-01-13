<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('authentication/login');
            };
        $this->load->database();
        $this->load->model('model_app');
    }

    	public function index(){
            $data=array(
                'data_produk'=>$this->model_app->getProduk(),
                'kode_produk'=>$this->model_app->getKodeProduk()
            );
        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('v_Produk', $data);
        	$this->load->view('template/footer');
            
        }
    }
?>