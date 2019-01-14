<?php


class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    //  ================= AUTOMATIC CODE ==================

    //    KODE PENJUALAN
    public function getKodeTransaksi()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_trans,3)) as kd_max from tb_transaksi");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "O-".$kd;
    }

    //    KODE BARANG
    function getKodeProduk(){
        $q = $this->db->query("select MAX(RIGHT(kd_produk,3)) as kd_max from tb_produk");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "P-".$kd;
    }

    //    KODE PELANGGAN
    public function getKodePelanggan(){
        $q = $this->db->query("select MAX(RIGHT(kd_pelanggan,3)) as kd_max from tbl_pelanggan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "P-".$kd;
    }

    //    KODE PEGAWAI
    public function getKodePegawai(){
        $q = $this->db->query("select MAX(RIGHT(kd_pegawai,3)) as kd_max from tbl_pegawai");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "K-".$kd;
    }

    public function getTambahStok($kd_barang,$tambah)
    {
        $q = $this->db->query("select stok from tbl_barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok + $tambah;
        }
        return $stok;
    }
    public function getKurangStok($kd_barang,$kurangi)
    {
        $q = $this->db->query("select stok from tbl_barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok - $kurangi;
        }
        return $stok;
    }
    public function getKembalikanStok($kd_barang)
    {
        $q = $this->db->query("select stok from tbl_barang where kd_barang='".$kd_barang."'");
        $stok = "";
        foreach($q->result() as $d)
        {
            $stok = $d->stok;
        }
        return $stok;
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }


    function getProduk(){
        return $this->db->query ("SELECT * from tb_produk")->result();
    }

    function getUser(){
        return $this->db->query ("SELECT * from tb_user")->result();
    }

    function getAllDataPenjualan(){
        return $this->db->query("SELECT
            a.kd_trans,
            a.tgl_trans,
            a.total_bayar,
            a.nm_pelanggan,
            (select count(kd_trans) as jum from tb_produkdibeli where kd_trans=a.kd_trans) as jumlah
        FROM tb_transaksi a
        ORDER BY a.kd_trans DESC
        ")->result();
    }

    function getAllDetailTransaksi($kd){
        return $this->db->query("SELECT * FROM tb_transaksi a, tb_produk b, tb_produkdibeli c WHERE a.kd_trans=c.kd_trans AND b.kd_produk=c.kd_produk AND a.kd_trans='$kd'")->result();
    }

    function getDataCart(){
        return $this->db->query("SELECT * , a.qty*b.harga as total_harga_peritem FROM tb_produkdibeli a, tb_produk b WHERE a.kd_produk=b.kd_produk AND a.fix='0'")->result();
    }

    function getTotalHarga1(){
        return $this->db->query("SELECT * , a.qty*b.harga as total_harga_peritem FROM tb_produkdibeli a, tb_produk b WHERE a.kd_produk=b.kd_produk AND a.fix='0'")->result();
    }

    function getTotalHarga(){
        return $this->db->query ("SELECT sum(b.harga) as total_harga FROM tb_produkdibeli a, tb_produk b WHERE a.kd_produk=b.kd_produk AND a.fix='0'")->result();
    }

    function getDataPenjualan($id){
        return $this->db->query("SELECT * from tbl_penjualan_header a
                left join tbl_pelanggan b on a.kd_pelanggan=b.kd_pelanggan
                left join tbl_pegawai c on a.kd_pegawai=c.kd_pegawai
                where a.kd_penjualan = '$id'")->result();
    }

    function getBarangPenjualan($id){
        return $this->db->query("
                select a.kd_barang,a.qty,b.nm_barang,b.harga
                from tbl_penjualan_detail a
                left join tbl_barang b on a.kd_barang=b.kd_barang
                where a.kd_penjualan = '$id'")->result();
    }

    function getLapPenjualan($tgl_awal,$tgl_akhir){
        return $this->db->query("SELECT *,sum(a.total_harga) as total_all from tbl_penjualan_header a
                left join tbl_pelanggan b on a.kd_pelanggan=b.kd_pelanggan
                left join tbl_pegawai c on a.kd_pegawai=c.kd_pegawai
                where a.tanggal_penjualan between '$tgl_awal' and '$tgl_akhir'
                ")->result();
    }

    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}