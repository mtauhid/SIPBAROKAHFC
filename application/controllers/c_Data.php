<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_Data extends CI_Controller {

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
            $tb_kategori = $this->db->get('tb_kategori');
            $data['produk'] = $tb_kategori->result_array();
            $data['num_rows'] = $tb_kategori->num_rows();
        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('v_Tampil', $data);
        	$this->load->view('template/footer');
            
        }
		
	public function save()
    {
        $input['kd_kategori'] = $this->input->post('kd_kategori');
        $input['nama_kategori'] = $this->input->post('nama_kategori');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('kd_kategori', $updateID);
            $this->db->update('tb_kategori', $input);
        } else {
            $this->db->insert('tb_kategori', $input);
        }
        redirect('/c_Data/index');
    }

    public function v_create()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_create');
        $this->load->view('template/footer');
    }
	
	public function v_delete($kd_kategori)
    {
        $this->db->where('kd_kategori', $id);
        $data['v_delete'] = $this->db->get('tb_kategori')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_delete', $data);
        $this->load->view('template/footer');
    }
	
	public function real_delete()
    {
        $id = $this->input->post('kd_kategori');
        $this->db->where('kd_kategori', $id);
        $this->db->delete('tb_kategori');
        redirect('/c_Data/');
    }
 
}
?>