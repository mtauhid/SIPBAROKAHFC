<?php
    class c_Transaksi extends CI_Controller{
        public function __construct(){
            parent:: __construct();
            if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('authentication/login');
            };
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
            'total_harga'=>$this->model_app->getTotalHarga(),
            'data_produk'=>$this->model_app->getProduk(),
        );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('v_tambah_transaksi', $data);
            $this->load->view('template/footer');
        }

        function detail_transaksi(){
        $kd= $this->uri->segment(3);
        $data=array(
            'detail_transaksi'=>$this->model_app->getAllDetailTransaksi($kd),
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_detailTransaksi', $data);
        $this->load->view('template/footer');
    }


        public function tambah_ke_cart(){
            $input['kd_produk'] = $this->input->post('kd_produk');
            $input['kd_trans'] = $this->input->post('kd_trans');
            $input['qty'] = $this->input->post('qty');
            $this->db->insert('tb_produkdibeli', $input);
            redirect('c_transaksi/tambah_transaksi');
        }

        public function selesai_pesan(){
            $input['kd_trans'] = $this->input->post('kd_trans');
            $input['nm_pelanggan'] = $this->input->post('nm_pelanggan');
            $input['keterangan'] = $this->input->post('keterangan');
            $input['bayar'] = $this->input->post('bayar_dulu');
            $input['tgl_trans'] = date("Y-m-d",strtotime($this->input->post('tanggal_penjualan')));
        
            $this->db->insert('tb_transaksi', $input);

            $update['fix'] = $this->input->post('fix');
            $input['kd_trans'] = $this->input->post('kd_trans');
            $this->model_app->updateData("tb_produkdibeli",$update,$key);

            if($input['bayar']!=""){
                redirect('c_detailTransaksi');
            }else{
                redirect('c_transaksi');
            }
            
        }

        function hapus_produkdibeli(){
        $id['id_produkdibeli'] = $this->uri->segment(3);
        $this->model_app->deleteData('tb_produkdibeli',$id);
        redirect("c_transaksi/tambah_transaksi");
    }
    }
?>