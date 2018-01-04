-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jan 2018 pada 13.18
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `gambar_barang` varchar(30) NOT NULL,
  `supplier` varchar(15) NOT NULL,
  `harga` int(15) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`kode_barang`, `nama_barang`, `gambar_barang`, `supplier`, `harga`, `satuan`, `stok`, `keterangan`, `tanggal`) VALUES
('01-B21-317', 'LEGSHIELD DALAM SUPRA', 'leg supra.jpg', 'PT.AHM', 142000, 'ST', 15, '<p>-</p>', '2018-01-01'),
('01-B42-327', 'COVER BODY VARIO 110', 'cover vario.jpg', 'PT.AHM', 146000, 'ST', 50, '<p>-</p>', '2018-01-01'),
('01-D23-317', 'LEGSHIELD DALAM JUPITER', 'leg jupi.jpg', 'PT.AHM', 131700, 'ST', 100, '<p>-</p>', '2018-01-01'),
('BN-CRS-01', 'BAN CORSA 70/90-17', 'corsa.jpg', 'CORSA', 182000, 'PCS', 10, '<p>TUBELESS</p>', '2018-01-01'),
('BN-FDR-01', 'BAN FDR 70/90-17', 'FDR.jpg', 'FDR', 183000, 'PCS', 15, '<p>TUBELESS</p>', '2018-01-01'),
('kd-001', 'Ban', 'ban.jpg', 'PT.AHM', 145000, '-', 5, 'tersedia', '2017-12-14'),
('kd-005', 'Oli', 'oli.jpg', 'PT.AHM', 40000, '-', 5, 'tersedia', '2017-12-14'),
('kd-006', 'Shock', 'shock.jpg', 'PT.AHM', 40000, 'pcs', 25, 'tersedia', '2017-12-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_keluar`
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
-- Dumping data untuk tabel `data_barang_keluar`
--

INSERT INTO `data_barang_keluar` (`no`, `tgl_keluar`, `nama_barang`, `jumlah`, `harga`, `total_harga`) VALUES
(138, '2018-01-03', 'COVER BODY VARI', 1000, 146000, 146000000),
(139, '2018-01-03', 'Ban', 75, 145000, 10875000),
(143, '2018-01-03', 'Gear', 20, 100000, 2000000),
(144, '2018-01-04', 'Shock', 3, 40000, 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_supplier`
--

CREATE TABLE `data_supplier` (
  `kode_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `kontak` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_supplier`
--

INSERT INTO `data_supplier` (`kode_supplier`, `nama_supplier`, `kontak`) VALUES
('1', 'PT.AHM', '-'),
('10', 'PT.AHAY', '-'),
('2', 'PT.SUZUKI', '-'),
('3', 'PT.ASPIRA', '-'),
('4', 'CORSA', '-'),
('5', 'FDR', '-'),
('7', 'IRC', '-'),
('8', 'WIN', '-'),
('9', 'PT.YAMAHA', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(11, 'eko', 'prastyo', '123'),
(12, 'Kelompok', 'kelompok4', '123'),
(13, 'Firmansyah', 'firman', '123'),
(14, 'samsul', 'nugie', '12345678'),
(15, 'asdasd', 'anjay', '123');

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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
