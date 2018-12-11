<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_inputdosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {

        
        // apakah ada pencarian data spesifik dengan kata kunci tertentu?
        $search = $this->input->get('197104082001121003');
        if (!empty($nip)) {

            $this->db->like('nip', $nip, 'both'); 
            $this->db->like('id_user', $id_user, 'both');
            $this->db->or_like('nama_dosen', $nip, 'both'); 
            $this->db->or_like('prodi_dosen', $nip, 'both'); 
            $this->db->or_like('level_dosen', $nip, 'both'); 
        }
        $tb_dosen = $this->db->get('tb_dosen');
        $data['result'] = $tb_dosen->result_array();
        $data['num_rows'] = $tb_dosen->num_rows();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_readinputdosen', $data);
        $this->load->view('template/footer');
        
    }

    public function save()
    {
        $input['nip'] = $this->input->post('nip');
        $input['id_user'] = $this->input->post('id_user');
        $input['nama_dosen'] = $this->input->post('nama_dosen');
        $input['prodi_dosen'] = $this->input->post('prodi_dosen');
        $input['level_dosen'] = $this->input->post('level_dosen');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('nip', $updateID);
            $this->db->update('tb_dosen', $input);
        } else {
            $this->db->insert('tb_dosen', $input);
        }
        redirect('/c_inputdosen/index');
    }

    public function v_createinputdosen()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_createinputdosen');
        $this->load->view('template/footer');
    }

    public function v_updateinputdosen($id)
    {
        $this->db->where('nip', $id);
        $data['update'] = $this->db->get('tb_dosen')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_createinputdosen', $data);
        $this->load->view('template/footer');
    }

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
}