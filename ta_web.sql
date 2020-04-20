-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:31 AM
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
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
(1, 'desa', 'desa', 'ddesa', 'das', 3412);

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
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_kategori`, `id_promo`, `nama_barang`, `gambar`, `deskripsi`, `stok`, `harga`) VALUES
(3, 1, 0, 'Rockwool/meter', 'rockwool.jpg', 'sebagai  media tanam pada sistem penanaman hidroponik yang dapat menyerap air', 50, 10000),
(4, 1, 0, 'Netpot Putih', 'netpot.jpg', 'sebagai tempat atau wadah tanaman disistem penanaman hidroponik', 500, 500);

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
(22, 'Naufal Aziz', 'delnaufal11@gmail.com', '', '0000-00-00', '', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(10) NOT NULL,
  `id_detail_user` int(10) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `pengiriman` varchar(50) NOT NULL,
  `status_pembayaran` enum('Belum dibayar','Sudah dibayar') NOT NULL,
  `status_pengiriman` enum('Belum dikonfirmasi','Sedang diproses','Sedang dikirim','Sudah diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'pestisida', 'icons8-insecticide-50.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_invoice` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_user` int(11) NOT NULL,
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

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `image`, `level_id`, `is_active`, `date_created`) VALUES
(3, 'teguh', 'teguh@gmail.com', '$2y$10$ONtVzOZKXgajahWwt1.pg.rPf5D6EhHT9KYbIsxT5VhHo1NlXlW7q', 'default.png', '1', 1, 1582084167),
(7, 'Hengky', 'hengky@gmail.com', '$2y$10$kNSmLtALshUfC9.znNDuvuGNaxcvKQAEDbRkNu6ziTWIjI1UhEmTe', 'default.png', '3', 1, 1586929067),
(16, 'Bambang', 'bambang@gmail.com', '$2y$10$Eb2g6WoAPTuDYVMTdANMKeSc2y8im7wbjxcRGiBqCzDoAG/ph95uu', 'if_3_avatar_2754579.png', '2', 1, 1587111317),
(30, 'Naufal Aziz', 'delnaufal11@gmail.com', '$2y$10$UBG2bMgOZdraH9tmmeqbuup8hpEZP0T8g2tKDgQupbsOu.Bliw3Zu', 'default.png', '2', 1, 1587370441);

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
(1, 1, 'Invoice', 'admin/invoice', '', 1),
(2, 2, 'Halaman User', 'user', '', 1),
(3, 3, 'User', 'admin/user', '', 1),
(5, 3, 'Laporan', 'admin/laporan', '', 1);

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
(19, 'delnaufal11@gmail.com', 'WRhgWYJIS/AJ6sBwSmHFd2wgXO9tBFWSr/mDqUbcimk=', 1587370500),
(20, 'delnaufal11@gmail.com', '7rrSwww7D7DU2XbrMf7wzcGQJAEMsFSe3iAIBPfKkNY=', 1587371628);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `xid_kategori` (`id_kategori`) USING BTREE;

--
-- Indexes for table `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  ADD PRIMARY KEY (`id_detail_user`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_promo`
--
ALTER TABLE `tb_promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  MODIFY `id_alamat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  MODIFY `id_katalog` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_promo`
--
ALTER TABLE `tb_promo`
  MODIFY `id_promo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
