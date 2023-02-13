-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 09:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_praukk_zaky`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id_bahan` int(15) NOT NULL,
  `nama_bahan` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bahan`
--

INSERT INTO `tb_bahan` (`id_bahan`, `nama_bahan`, `satuan`, `harga`) VALUES
(1, 'TELO', 'TLK', 15000),
(5, 'GULA', 'KILO', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id_toko` int(15) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_siup` int(15) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `id_bahan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id_toko`, `nama_toko`, `alamat`, `no_siup`, `nama_pemilik`, `id_bahan`) VALUES
(1, 'TOZUD', 'JAKARTA', 2, 'KINTUL', 1),
(5, 'TOZAD', 'BANDUNG', 1, 'JAP', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id_bahan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id_toko` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD CONSTRAINT `tb_toko_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `tb_bahan` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
