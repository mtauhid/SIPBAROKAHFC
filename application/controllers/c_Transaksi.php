<?php
    class c_Transaksi extends CI_Controller{
        public function __construct(){
            parent:: __construct();
            $this->load->model('model_app');
            $this->load->helper('url');

        }

        public function index(){
            $data=array(
            'data_penjualan'=>$this->model_app->getAllDataPenjualan(),

        );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('v_transaksi', $data);
            $this->load->view('template/footer');
            
        }

        function tambah_transaksi(){
        $data=array(
            'kd_trans'=>$this->model_app->getKodeTransaksi(),
            'data_cart'=>$this->model_app->getDataCart(),
            'data_produk'=>$this->model_app->getProduk()
        );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('v_tambah_transaksi', $data);
            $this->load->view('template/footer');
        }


        public function tambah_ke_cart()
    {
        $input['kd_produk'] = $this->input->post('kd_produk');
        $input['kd_trans'] = $this->input->post('kd_trans');
        $input['qty'] = $this->input->post('qty');
        
        $this->db->insert('tb_produkdibeli', $input);
        redirect('penjualan/tambah_transaksi');
    }
    }
?>