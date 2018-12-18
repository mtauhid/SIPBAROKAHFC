-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2018 pada 16.57
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barokahfriedchicken`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kd_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `kd_pesanan` int(15) NOT NULL,
  `kd_trans` int(15) NOT NULL,
  `kd_produk` int(15) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `kd_produk` int(15) NOT NULL,
  `nm_produk` varchar(40) NOT NULL,
  `kd_kategori` varchar(20) NOT NULL,
  `harga` int(25) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`kd_produk`, `nm_produk`, `kd_kategori`, `harga`, `keterangan`) VALUES
(2, 'cx', '2', 2323, 'fz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kd_trans` int(15) NOT NULL,
  `waktu` time NOT NULL,
  `kd_user` int(15) NOT NULL,
  `kd_pelanggan` int(15) NOT NULL,
  `tgl_trans` date NOT NULL,
  `keterangan` text NOT NULL,
  `total_bayar` int(25) NOT NULL,
  `bayar` int(25) NOT NULL,
  `kembalian` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `kd_user` int(15) NOT NULL,
  `nm_user` varchar(40) NOT NULL,
  `notelp` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` enum('Admin','Kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `nm_user`, `notelp`, `username`, `password`, `level`) VALUES
(1, 'Muhammad taufik', 43, 'taufik', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', 'Admin'),
(2, 'Admin', 23, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`kd_pesanan`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kd_trans`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kd_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
