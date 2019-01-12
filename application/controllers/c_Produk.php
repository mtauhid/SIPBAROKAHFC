<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_Produk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('authentication/login');
            };
        $this->load->database();
    }

    	public function index(){
            // apakah ada pencarian data spesifik dengan kata kunci tertentu
         $search = $this->input->get('search');
        if (!empty($search)) {

            $this->db->like('kd_produk', $search, 'both'); 
            $this->db->like('nm_produk', $search, 'both');
            $this->db->or_like('kd_kategori', $search, 'both'); 
            $this->db->or_like('harga', $search, 'both'); 
            $this->db->or_like('keterangan', $search, 'both'); 
        }
            $tb_produk = $this->db->get('tb_produk');
            $data['produk'] = $tb_produk->result_array();
            $data['num_rows'] = $tb_produk->num_rows();
        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('v_Produk', $data);
        	$this->load->view('template/footer');
            
        }
    }
?>