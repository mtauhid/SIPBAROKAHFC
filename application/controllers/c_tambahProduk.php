<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahProduk extends CI_Controller {

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
                'data_produk'=>$this->model_app->getUser(),
                'kode_produk'=>$this->model_app->getKodeProduk()
            );
        	$this->load->view('template/header');
            $this->load->view('template/sidebar');
        	$this->load->view('v_tambahProduk', $data);
        	$this->load->view('template/footer');
            
        }

        public function save()
    {
		$input['kd_produk'] = $this->input->post('kd_produk');
        $input['nm_produk'] = $this->input->post('nm_produk');
        $input['kd_kategori'] = $this->input->post('kategoriproduk');
        $input['harga'] = $this->input->post('harga');
		
        $updateKD = $this->input->post('updateKD');
        if (!empty($updateKD)) {
            $this->db->where('kd_produk', $updateKD);
            $this->db->update('tb_produk', $input);
        } else {
            $this->db->insert('tb_produk', $input);
        }
        redirect('c_Produk');
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

    function v_deleteProduk(){
        $id['kd_produk'] = $this->uri->segment(3);
        $this->model_app->deleteData('tb_produk',$id);
        redirect("c_produk");
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