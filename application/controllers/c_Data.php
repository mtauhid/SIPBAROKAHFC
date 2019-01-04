<?php 
 
class c_Data extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['produk'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$kd_kategori = $this->input->post('kd_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		
 
		$data = array(
		'kd_kategori' => $kd_kategori,
		'nama_kategori' => $nama_kategori
			);
		$this->m_data->input_data($data,'tb_kategori');
		redirect('c_Data/index');
	}
	
	function edit($kd_kategori){
	$where = array('kd_kategori' => $kd_kategori);
	$data['produk'] = $this->m_data->edit_data($where,'tb_kategori')->result();
	$this->load->view('v_edit',$data);
}
 
	function hapus($kd_kategori){
		$where = array('kd_kategori' => $kd_kategori);
		$this->m_data->hapus_data($where,'tb_kategori');
		redirect('c_Data/index');
	}
	
	function update(){
	$kd_kategori = $this->input->post('kd_kategori');
	$nama_kategori = $this->input->post('nama_kategori');
 
	$data = array(
		'kd_kategori' => $kd_kategori,
		'nama_kategori' => $nama_kategori
	);
 
	$where = array(
		'kd_kategori' => $kd_kategori
	);
 
	$this->m_data->update_data($where,$data,'tb_kategori');
	redirect('c_Data/index');
}

}