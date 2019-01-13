<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahKategori extends CI_Controller {

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

            $this->db->like('kd_kategori', $search, 'both'); 
            $this->db->like('nama_kategori', $search, 'both'); 
        }
            $tb_kategori = $this->db->get('tb_kategori');
            $data['kategori'] = $tb_kategori->result_array();
            $data['num_rows'] = $tb_kategori->num_rows();
        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('v_tambahKategori', $data);
        	$this->load->view('template/footer');
            
        }

        public function save()
    {
		$input['kd_kategori'] = $this->input->post('kd_kategori');
        $input['nama_kategori'] = $this->input->post('nama_kategori');
		
        $updateKD = $this->input->post('updateKD');
        if (!empty($updateKD)) {
            $this->db->where('kd_kategori', $updateKD);
            $this->db->update('tb_kategori', $input);
        } else {
            $this->db->insert('tb_kategori', $input);
        }
        redirect('c_Kategori');
    }

    public function v_tambahKategori()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tambahKategori');
        $this->load->view('template/footer');
    }
    
    public function v_updateKategori($kd)
    {
        $this->db->where('kd_kategori', $kd);
        $data['update'] = $this->db->get('tb_kategori')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tambahKategori', $data);
        $this->load->view('template/footer');
    }
    
    public function v_deletekategori($kd)
    {
        $this->db->where('kd_kategori', $kd);
        $data['delete'] = $this->db->get('tb_kategori')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_deletekategori', $data);
        $this->load->view('template/footer');
    }

    public function real_delete()
    {
        $kd = $this->input->post('kd_kategori');
        $this->db->where('kd_kategori', $kd);
        $this->db->delete('tb_kategori');
        redirect('/c_Kategori/');
    }
    
    }
?>