-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 09:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id_alamat` int(10) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` char(15) NOT NULL,
  `jenis_alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_alamat`, `nama_penerima`, `email`, `no_telepon`, `jenis_alamat`, `kota`, `provinsi`, `alamat_lengkap`) VALUES
(22, 'Naufal aziz', 'delnaufal11@gmail.com', '085869277826', 'Rumah', '49', '10', 'Ds.Kalisari, kec.Blado, kab.Batang, RT 04 RW 01 '),
(23, 'Bambang', 'bambang@gmail.com', '085325033161', 'Rumah', '49', '10', 'Ds.Mboh kec.Tulis Kab Batang , RT01 RW01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_promo` int(10) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(30) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_kategori`, `id_promo`, `nama_barang`, `gambar`, `deskripsi`, `stok`, `harga`, `berat`) VALUES
(3, 1, 0, 'Rockwool', 'rockwool.jpg', 'sebagai  media tanam pada sistem penanaman hidroponik yang dapat menyerap air', 49, 40000, 1),
(4, 1, 0, 'Netpot Putih', 'netpot.jpg', 'sebagai tempat atau wadah tanaman disistem penanaman hidroponik', 480, 500, 1),
(5, 2, 0, 'nutrisi', 'abmix.jpg', 'nutris', 48, 10000, 2),
(11, 3, 0, 'bibit cabai merah', '1355984523_466213326_1-Gambar--Pestisida-insektisida-providor-30-wp.jpg', 'bibit cabai merah keriting dengan isi 100biji', 8, 25000, 1),
(17, 2, 0, 'abmix', 'ab_mix2.jpg', 'abmix adalah nutrisi tanaman', 9, 25000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukti`
--

CREATE TABLE `tb_bukti` (
  `id_bukti` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `bukti_foto` varchar(128) NOT NULL,
  `bukti_kode` varchar(50) NOT NULL,
  `bukti_pengirim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bukti`
--

INSERT INTO `tb_bukti` (`id_bukti`, `id_invoice`, `bukti_foto`, `bukti_kode`, `bukti_pengirim`) VALUES
(22, 205, 'polban2.png', '13212312', 'Naufal'),
(23, 206, 'akn4.png', '13212312', 'Naufal'),
(24, 208, 'akn5.png', '54234123', 'Naufal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_user`
--

CREATE TABLE `tb_detail_user` (
  `id_detail_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal` date NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_user`
--

INSERT INTO `tb_detail_user` (`id_detail_user`, `nama`, `email`, `jenis_kelamin`, `tanggal`, `no_telepon`, `image`) VALUES
(8, 'Bambang', 'bambang@gmail.com', 'Laki-laki', '1999-04-01', '085869277826', 'if_3_avatar_2754579.png'),
(9, 'Bba Bhs', 'Airioneri@gmail.com', '', '0000-00-00', '', 'default.jpg'),
(23, 'Naufal Aziz', 'delnaufal11@gmail.com', 'Laki-laki', '2000-01-13', '085869277826', 'if_3_avatar_2754579.png'),
(43, 'Pengelola', 'kehak260@gmail.com', '', '0000-00-00', '', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(10) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kurir` varchar(10) NOT NULL,
  `berat` int(11) NOT NULL,
  `biaya_kirim` int(11) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `status_pembayaran` enum('Belum dibayar','Sudah dibayar') NOT NULL,
  `status_pengiriman` enum('Belum dikonfirmasi','Sedang diproses','Sedang dikirim','Sudah diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `id_alamat`, `email`, `kurir`, `berat`, `biaya_kirim`, `pembayaran`, `tgl_pesan`, `batas_bayar`, `status_pembayaran`, `status_pengiriman`) VALUES
(205, 22, 'delnaufal11@gmail.com', 'pos', 1, 9000, 'bri', '2020-05-28 08:18:26', '2020-05-29 08:18:26', 'Sudah dibayar', 'Belum dikonfirmasi'),
(206, 22, 'delnaufal11@gmail.com', 'pos', 1, 12000, 'bri', '2020-05-28 08:32:05', '2020-05-29 08:32:05', 'Sudah dibayar', 'Belum dikonfirmasi'),
(207, 22, 'delnaufal11@gmail.com', 'pos', 1, 12000, 'bri', '2020-05-28 13:35:25', '2020-05-29 13:35:25', 'Sudah dibayar', 'Belum dikonfirmasi'),
(208, 22, 'delnaufal11@gmail.com', 'pos', 1, 12000, 'bri', '2020-05-28 13:45:30', '2020-05-29 13:45:30', 'Sudah dibayar', 'Belum dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_katalog`
--

CREATE TABLE `tb_katalog` (
  `id_katalog` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `penggunaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `image`) VALUES
(1, 'perlengkapan', 'icons8-watering-can-50.png'),
(2, 'nutrisi', 'icons8-sugar-sack-50.png'),
(3, 'bibit', 'icons8-seed-50.png'),
(4, 'pestisida', 'icons8-insecticide-50.png'),
(5, 'lain-lain', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ongkir`
--

CREATE TABLE `tb_ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `kurir` varchar(25) NOT NULL,
  `berat` varchar(25) NOT NULL,
  `biaya` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `biaya_kirim` int(10) NOT NULL,
  `sub_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `biaya_kirim`, `sub_total`) VALUES
(53, 205, 3, 'Rockwool', 1, 40000, 9000, 49000),
(54, 206, 17, 'abmix', 1, 25000, 12000, 37000),
(55, 207, 4, 'Netpot Putih', 20, 500, 12000, 22000),
(56, 208, 5, 'nutrisi', 2, 10000, 12000, 82000),
(57, 208, 11, 'bibit cabai merah', 2, 25000, 12000, 82000);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_promo`
--

CREATE TABLE `tb_promo` (
  `id_promo` int(10) NOT NULL,
  `diskon` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `level_id` enum('1','2','3') NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama`, `email`, `password`, `image`, `level_id`, `is_active`, `date_created`) VALUES
('Aziz naufal', 'aziznaufal876@gmail.com', '$2y$10$G/3d/X8s2m9cCBobHOXaWuuR6dRsf.IR/pQa7wlrYhGL5gDz.eKfu', 'default.png', '1', 1, 1590575445),
('Bambang', 'bambang@gmail.com', '$2y$10$Eb2g6WoAPTuDYVMTdANMKeSc2y8im7wbjxcRGiBqCzDoAG/ph95uu', 'if_3_avatar_2754579.png', '2', 1, 1587111317),
('Naufal Aziz', 'delnaufal11@gmail.com', '$2y$10$nYiDEGogXklgjYbPxXh1ROwcKbkyJOH0kwq70R5UydWmKw8h2VIBS', 'if_3_avatar_2754579.png', '2', 1, 1587382968),
('Jo', 'jooxkr@gmail.com', '$2y$10$dFtlTIJCEfAamOAAFIXhs.QVL.amB0h/nkX3UqqCgDNHppAoakggi', 'default.png', '1', 1, 1590642151),
('Pengelola', 'kehak260@gmail.com', '$2y$10$d5fA6AC5BnZdccsc2WfolOL4ZPaH9uWclTrqm6PadOQMN5/6K/yH2', 'default.png', '3', 1, 1590575315);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `level_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Pengelola');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `tittle` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `tittle`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Home', 'admin', 'fas fa-fw fa-home', 1),
(2, 1, 'Produk', 'admin/data_produk', 'fas fa-fw fa-clipboard', 1),
(3, 1, 'Invoice', 'admin/invoice', 'fas fa-fw fa-shopping-basket', 1),
(5, 3, 'Home', 'pengelola', 'fas fa-fw fa-home', 1),
(6, 3, 'Produk', 'pengelola/data_produk', 'fas fa-fw fa-clipboard', 1),
(7, 3, 'User', 'pengelola/data_user', 'fas fa-fw fa-user', 1),
(8, 3, 'Laporan', 'Pengelola/laporan', 'far fa-fw fa-file-alt', 1),
(9, 2, 'Halaman User', 'user', '', 1),
(10, 2, 'halaman Pembelian', 'produk/keranjang', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(22, 'delnaufal11@gmail.com', '2a2gFZR92QJULoV0p4a0nVcl63Cy4BimtZB+Hv+fWwA=', 1587383024),
(23, 'hakke280@gmail.com', '1WuW5BXSuathG5W50kV8/mf2bF2BwdDzG9WvZ3/qL8s=', 1587538959),
(41, 'aidazharifa5@gmail.com', 'oDcJwNh3mJnlk9eKUURYfvYmtmOK8jaQMfgc1HEJKwM=', 1590574822),
(45, 'jooxke99@gmail.com', 'wBTedxAa6RhfOg8qV4Nq1Ps8mqp09RgOcfaeFuwV2lU=', 1590642027);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD UNIQUE KEY `xuser` (`email`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `xid_kategori` (`id_kategori`) USING BTREE,
  ADD KEY `xpromo` (`id_promo`);

--
-- Indexes for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  ADD PRIMARY KEY (`id_bukti`),
  ADD KEY `xinv` (`id_invoice`);

--
-- Indexes for table `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  ADD PRIMARY KEY (`id_detail_user`),
  ADD UNIQUE KEY `xuser` (`email`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `xalamat` (`id_alamat`),
  ADD KEY `xuser` (`email`);

--
-- Indexes for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  ADD PRIMARY KEY (`id_katalog`),
  ADD UNIQUE KEY `xbarang` (`id_barang`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  ADD PRIMARY KEY (`id_ongkir`),
  ADD KEY `xalamat` (`id_alamat`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `xbrg` (`id_barang`),
  ADD KEY `xinv` (`id_invoice`);

--
-- Indexes for table `tb_promo`
--
ALTER TABLE `tb_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xmenu` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xmenu` (`menu_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xuser` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  MODIFY `id_alamat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_bukti`
--
ALTER TABLE `tb_bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  MODIFY `id_katalog` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tb_promo`
--
ALTER TABLE `tb_promo`
  MODIFY `id_promo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
