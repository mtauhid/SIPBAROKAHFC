<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_inputKategori extends CI_Controller {

    public function __construct() {
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
        	$this->load->view('v_inputKategori', $data);
        	$this->load->view('template/footer');
            
        }

        public function save()
    {
		$input['kd_kategori'] = $this->input->post('kode');
        $input['nama_kategori'] = $this->input->post('kategori');
        $updateKD = $this->input->post('updateKD');
        if (!empty($updateKD)) {
            $this->db->where('kd_kategori', $updateKD);
            $this->db->update('tb_kategori', $input);
        } else {
            $this->db->insert('tb_kategori', $input);
        }
        redirect('/c_Kategori');
    }

    public function v_inputKategori()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_inputKategori');
        $this->load->view('template/footer');
    }
    
    public function v_updateKategori($kd)
    {
        $this->db->where('kd_kategori', $kd);
        $data['update'] = $this->db->get('tb_kategori')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_inputKategori', $data);
        $this->load->view('template/footer');
    }
    /*
    public function v_deleteinputdosen($id)
    {
        $this->db->where('nip', $id);
        $data['v_deleteinputdosen'] = $this->db->get('tb_dosen')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_deleteinputdosen', $data);
        $this->load->view('template/footer');
    }

    public function real_delete()
    {
        $id = $this->input->post('nip');
        $this->db->where('nip', $id);
        $this->db->delete('tb_dosen');
        redirect('/c_inputdosen/');
    }
    */
    }
?>