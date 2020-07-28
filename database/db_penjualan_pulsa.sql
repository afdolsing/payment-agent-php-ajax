-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 03:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan_pulsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama`, `no_hp`) VALUES
(1, 'Danang', '081377783334'),
(2, 'Indra', '082186869898'),
(3, 'Dina', '085780892906'),
(4, 'Hana', '085669919769'),
(5, 'Teguh', '081365657894'),
(6, 'Darma', '082385864123'),
(7, 'Agung', '081299784522'),
(8, 'Dedi', '085786875533'),
(9, 'Wuri', '088896887712'),
(10, 'Fajar', '089599751234'),
(11, 'Feri', '083165894532');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pelanggan` int(11) NOT NULL,
  `pulsa` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id_penjualan`, `tanggal`, `pelanggan`, `pulsa`, `jumlah_bayar`) VALUES
(1, '2018-12-01', 5, 1, 27000),
(2, '2018-12-01', 4, 7, 22000),
(3, '2018-12-02', 2, 3, 52000),
(4, '2018-12-02', 3, 8, 27000),
(5, '2018-12-03', 7, 4, 102000),
(6, '2018-12-03', 6, 1, 27000),
(7, '2018-12-03', 10, 15, 22000),
(8, '2018-12-04', 9, 39, 62000),
(9, '2018-12-04', 8, 8, 27000),
(10, '2018-12-04', 11, 24, 32000),
(11, '2018-12-05', 1, 2, 42000),
(12, '2018-12-05', 2, 1, 27000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pulsa`
--

CREATE TABLE `tbl_pulsa` (
  `id_pulsa` int(11) NOT NULL,
  `provider` varchar(15) NOT NULL,
  `nominal` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pulsa`
--

INSERT INTO `tbl_pulsa` (`id_pulsa`, `provider`, `nominal`, `harga`) VALUES
(1, 'Telkomsel', 25000, 27000),
(2, 'Telkomsel', 40000, 42000),
(3, 'Telkomsel', 50000, 52000),
(4, 'Telkomsel', 100000, 102000),
(5, 'Indosat Ooredoo', 5000, 7000),
(6, 'Indosat Ooredoo', 10000, 12000),
(7, 'Indosat Ooredoo', 20000, 22000),
(8, 'Indosat Ooredoo', 25000, 27000),
(9, 'Indosat Ooredoo', 30000, 32000),
(10, 'Indosat Ooredoo', 50000, 52000),
(11, 'Indosat Ooredoo', 100000, 102000),
(12, 'Tri Indonesia', 5000, 7000),
(13, 'Tri Indonesia', 10000, 12000),
(14, 'Tri Indonesia', 15000, 17000),
(15, 'Tri Indonesia', 20000, 22000),
(16, 'Tri Indonesia', 25000, 27000),
(17, 'Tri Indonesia', 30000, 32000),
(18, 'Tri Indonesia', 50000, 52000),
(19, 'Tri Indonesia', 100000, 102000),
(20, 'AXIS', 5000, 7000),
(21, 'AXIS', 10000, 12000),
(22, 'AXIS', 15000, 17000),
(23, 'AXIS', 25000, 27000),
(24, 'AXIS', 30000, 32000),
(25, 'AXIS', 50000, 52000),
(26, 'AXIS', 100000, 102000),
(27, 'XL Axiata', 5000, 7000),
(28, 'XL Axiata', 10000, 12000),
(29, 'XL Axiata', 15000, 17000),
(30, 'XL Axiata', 25000, 27000),
(31, 'XL Axiata', 30000, 32000),
(32, 'XL Axiata', 50000, 52000),
(33, 'XL Axiata', 100000, 102000),
(34, 'Smartfren', 5000, 7000),
(35, 'Smartfren', 10000, 12000),
(36, 'Smartfren', 20000, 22000),
(37, 'Smartfren', 25000, 27000),
(38, 'Smartfren', 50000, 52000),
(39, 'Smartfren', 60000, 62000),
(40, 'Smartfren', 100000, 102000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tbl_pulsa`
--
ALTER TABLE `tbl_pulsa`
  ADD PRIMARY KEY (`id_pulsa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_pulsa`
--
ALTER TABLE `tbl_pulsa`
  MODIFY `id_pulsa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
