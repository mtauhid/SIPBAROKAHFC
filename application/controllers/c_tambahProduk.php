<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahProduk extends CI_Controller {

    public function __construct() {
        parent::__construct();
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
        	$this->load->view('v_tambahProduk', $data);
        	$this->load->view('template/footer');
            
        }

        public function save()
    {
		$input['kd_produk'] = $this->input->post('kode');
        $input['nm_produk'] = $this->input->post('nmproduk');
        $input['kd_kategori'] = $this->input->post('kategoriproduk');
        $input['harga'] = $this->input->post('harga');
        $input['keterangan'] = $this->input->post('keterangan');
		
        $updateKD = $this->input->post('updateKD');
        if (!empty($updateKD)) {
            $this->db->where('kd_produk', $updateKD);
            $this->db->update('tb_produk', $input);
        } else {
            $this->db->insert('tb_produk', $input);
        }
        redirect('/c_Produk');
    }

    public function v_tambahProduk()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tambahProduk');
        $this->load->view('template/footer');
    }
    
    public function v_updateProduk($kd)
    {
        $this->db->where('kd_produk', $kd);
        $data['update'] = $this->db->get('tb_produk')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_tambahProduk', $data);
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