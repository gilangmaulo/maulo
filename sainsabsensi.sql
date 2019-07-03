-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 05:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sainsabsensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` datetime(6) NOT NULL,
  `jam_keluar` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_karyawan`, `tanggal`, `jam_masuk`, `jam_keluar`) VALUES
(4, 2, '2019-06-22', '2019-06-22 19:34:24.000000', '2019-06-22 19:43:26.000000'),
(5, 3, '2019-06-22', '2019-06-22 19:46:13.000000', '2019-06-22 19:47:05.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe_izin` varchar(50) NOT NULL,
  `lama_izin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id`, `id_karyawan`, `tanggal`, `tipe_izin`, `lama_izin`) VALUES
(1, 3, '2019-05-31', 'Sakit', '14 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `no_telpon`, `jabatan`) VALUES
(1, 'Amir Mahmud,M.Si', 'Dramaga, Bogor', '081208907789', 'Direktur Eksekutif'),
(2, 'Maksum Syam,M.Si', 'Bogor, Bogor', '081990909876', 'Manager Program'),
(3, 'Gilang Maulana,S.Kom', 'Pondok Labu, Jakarta Selatan', '087885256033', 'Manager Keuangan '),
(4, 'Nur Rosyid Murtadho, SI', 'Dramaga, Bogor', '087789890987', 'Manager Pengelolaan Pengetahuan'),
(5, 'Ahmad Hamdani', 'Dramaga, Bogor', '081278789098', 'Manager Pengelolaan Pengetahuan'),
(6, 'Rini Anggraeni', 'Cipaku, Bogor', '089878657890', 'Staff Keuangan dan Aset'),
(7, 'Iksan Maulana', 'Ciampea, Bogor', '081256787654', 'Staff Pengelolaan Pengetahuan'),
(8, 'Ahmad Jaetuloh', 'Malabar, Bogor', '098978675645', 'Staff Riset'),
(9, 'Dera Esa Kartini', 'Bogor Baru, Bogor', '089721736898', 'Staff Kesekertariatan'),
(10, 'Kusnadi ', 'Empang, Bogor', '089909876543', 'Staff Kebersihan');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', '0'),
(3, 'Rini Anggraeni', '2222', '1'),
(4, 'Gilang Maulana', '3333', '1'),
(5, 'Amir Mahmud', '1111', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
