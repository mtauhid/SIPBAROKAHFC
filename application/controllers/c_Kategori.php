<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_Kategori extends CI_Controller {

    public function __construct() {
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('authentication/login');
            };
        parent::__construct();
        $this->load->database();
    }

    	public function index(){
            // apakah ada pencarian data spesifik dengan kata kunci tertentu
         $search = $this->input->get('search');
        if (!empty($search)) {

            $this->db->like('kd_kategori', $search, 'both'); 
            $this->db->like('nama_kategori', $search, 'both');
        }
            $tb_kategori = $this->db->get('tb_kategori');
            $data['kategori'] = $tb_kategori->result_array();
            $data['num_rows'] = $tb_kategori->num_rows();
        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('v_Kategori', $data);
        	$this->load->view('template/footer');
            
        }
    }
?>