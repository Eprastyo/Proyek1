-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 03:08 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `supplier` varchar(15) NOT NULL,
  `harga` int(15) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`kode_barang`, `nama_barang`, `supplier`, `harga`, `satuan`, `stok`, `keterangan`, `tanggal`) VALUES
('asd003', 'ban', 'PT.AHM', 3000, 'ltr', 75, 'tersedia', '2017-12-14 00:00:00'),
('asd004', 'gear', 'PT.Suzuki', 40000, 'pcs', 1, 'tersedia', '2017-12-14 00:00:00'),
('asd009', 'shock', 'PT.AHM', 40000, 'pcs', 40, 'tersedia', '2017-12-14 00:00:00'),
('asd01', 'oli', 'PT.ASPIRA', 40000, 'pcs', 0, 'tersedia', '2017-12-14 00:00:00'),
('asdjas', 'asd', 'PT.ASPIRA', 88, 'jasgd', 8287, 'sjgs', '2017-12-14 23:27:40'),
('asgdja', 'ajsgdj', 'PT.ASPIRA', 723467, 'hsg', 27846, 'kjashkd', '2017-12-14 23:29:13'),
('baru', 'Battery', 'PT.ASPIRA', 140000, 'pcs', 20, 'tersedia', '2017-12-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_barang_keluar`
--

CREATE TABLE `data_barang_keluar` (
  `no` int(11) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `total_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang_keluar`
--

INSERT INTO `data_barang_keluar` (`no`, `tgl_keluar`, `nama_barang`, `jumlah`, `harga`, `total_harga`) VALUES
(107, '2017-12-14', 'oli', 60, 40000, 2400000),
(108, '2017-12-14', 'ban', 37, 3000, 111000),
(118, '2017-12-14', 'gear', 14, 40000, 560000);

-- --------------------------------------------------------

--
-- Table structure for table `data_supplier`
--

CREATE TABLE `data_supplier` (
  `kode_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `kontak` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_supplier`
--

INSERT INTO `data_supplier` (`kode_supplier`, `nama_supplier`, `kontak`) VALUES
('AD002', 'PT.ASPIRA', '112'),
('as001', 'PT.AHM', '0001233'),
('SP-00', 'PT.Suzuki', '003515560987');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(11, 'eko', 'prastyo', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `data_barang_keluar`
--
ALTER TABLE `data_barang_keluar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang_keluar`
--
ALTER TABLE `data_barang_keluar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
