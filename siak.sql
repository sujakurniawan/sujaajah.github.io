-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:10 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya`
--

CREATE TABLE `tbl_biaya` (
  `id_biaya` char(6) NOT NULL,
  `id_kk` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `id_jabatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya`
--

INSERT INTO `tbl_biaya` (`id_biaya`, `id_kk`, `angkatan`, `nominal`, `jadwal`, `id_jabatan`) VALUES
('1', 'SPP', '2015', 150000, 'Perbulan', '4'),
('2', 'komputer', '2015', 300000, 'Perbulan', '4'),
('3', 'Gedung', '2015', 900000, 'Pertahun', '4'),
('4', 'Listrik', '2015', 500000, 'Perbulan', '4'),
('5', 'LDKS', '2015', 340000, 'Pertahun', '4'),
('6', 'Eskul', '2015', 100000, 'Perminggu', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtil_transk`
--

CREATE TABLE `tbl_dtil_transk` (
  `id_detil` int(11) NOT NULL,
  `id_transk` int(11) NOT NULL,
  `id_kk` varchar(50) NOT NULL,
  `no_byr` varchar(50) NOT NULL,
  `nominal_byr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dtil_transk`
--

INSERT INTO `tbl_dtil_transk` (`id_detil`, `id_transk`, `id_kk`, `no_byr`, `nominal_byr`) VALUES
(1, 1, '1', '1', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` varchar(5) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `jabatan`, `status`) VALUES
('1', 'Kepala Sekolah', 'Aktif'),
('2', 'Wakil Kepala Sekolah', 'Aktif'),
('3', 'Bendahara', 'Aktif'),
('4', 'Tata Usaha', 'Aktif'),
('5', 'Wali Kelas', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_keu`
--

CREATE TABLE `tbl_kategori_keu` (
  `id_kk` varchar(50) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `jenis_kk` varchar(100) NOT NULL,
  `status_kk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_keu`
--

INSERT INTO `tbl_kategori_keu` (`id_kk`, `nama_kk`, `jenis_kk`, `status_kk`) VALUES
('1', 'SPP', 'Pemasukan', 'Aktif'),
('2', 'Lab Komputer', 'Pemasukan', 'Aktif'),
('3', 'Uang Gedung', 'Pemasukan', 'Aktif'),
('4', 'Listrik', 'Pemasukan', 'Aktif'),
('5', 'Praktekk', 'Pemasukan', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` char(10) NOT NULL,
  `tingkat_kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `tingkat_kelas`, `jurusan`, `status`, `wali_kelas`) VALUES
('1', 'X', 'IPA1', 'Aktif', 'Ahmad Solihin'),
('10', 'X', 'Olahraga', 'Aktif', 'Tuti'),
('2', 'XI', 'TKJ', 'Aktif', 'Fikry'),
('3', 'X', 'IPS', 'Aktif', 'Saiful'),
('4', 'X', 'MULTI MEDIA', 'Aktif', 'Joni P'),
('5', 'X', 'RPL', 'Aktif', 'Riki'),
('6', 'X', 'ADM', 'Aktif', 'Puspa'),
('7', 'XI', 'Multi Media', 'Aktif', 'Joni P'),
('8', 'X', 'FISIKA', 'Aktif', 'Tuti'),
('9', 'XI', 'Mesin', 'Aktif', 'Sofian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keuangan`
--

CREATE TABLE `tbl_keuangan` (
  `id_keu` char(9) NOT NULL,
  `id_nik` int(11) NOT NULL,
  `id_kk` varchar(50) NOT NULL,
  `nominal_keu` int(11) NOT NULL,
  `tgl_keu` date NOT NULL,
  `keterangan_pemsuk` varchar(100) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_keuangan`
--

INSERT INTO `tbl_keuangan` (`id_keu`, `id_nik`, `id_kk`, `nominal_keu`, `tgl_keu`, `keterangan_pemsuk`, `sumber_dana`) VALUES
('1', 1, '1', 150000, '2020-12-23', 'SPP', 'Lain-Lain'),
('3', 3, '3', 900000, '2020-12-13', 'Uang gedung', 'lain lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_notif`
--

CREATE TABLE `tbl_log_notif` (
  `id_log_notif` int(11) NOT NULL,
  `id_notif` char(6) NOT NULL,
  `status_log_notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_siswa`
--

CREATE TABLE `tbl_log_siswa` (
  `id_log_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `tingkat_kls` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifikasi`
--

CREATE TABLE `tbl_notifikasi` (
  `id_notif` char(5) NOT NULL,
  `id_kk` int(50) NOT NULL,
  `waktu_notif` int(11) NOT NULL,
  `keterangan_notif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notifikasi`
--

INSERT INTO `tbl_notifikasi` (`id_notif`, `id_kk`, `waktu_notif`, `keterangan_notif`) VALUES
('1', 1, 20, 'Jatuh Tempo'),
('2', 2, 10, 'Jatuh Tempo'),
('3', 3, 30, 'Jatuh Tempo'),
('4', 4, 70, 'Jatuh Tempo'),
('5', 5, 40, 'Jatuh Tempo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_jabatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_nik`, `nama`, `tgl_lahir`, `no_tlp`, `alamat`, `email`, `password`, `status`, `id_jabatan`) VALUES
(1, 'Bukhari', '2020-12-09', '085883739944', 'jln Delima jaya rempoa', 'bukhari@gmail.com', '1234', 'Aktif', '1'),
(2, 'Irwan', '2020-12-22', '090988777', 'hgubgu', 'gugigiihi', 'duufufugu', 'Aktif', '2'),
(3, 'Lisa', '2020-12-24', '0909878765', 'kojjljll', 'knknknkkn', 'hihihhi', 'Aktif', '3'),
(4, 'Disa', '2020-12-13', '07645677', 'hjssjsd', 'nncjxsy', 'shxisxiscs', 'Aktif', '4'),
(5, 'Susan', '2020-12-16', '09876587', 'cemana', 'kknsks', 'sscdkscndks', 'Aktif', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rkas`
--

CREATE TABLE `tbl_rkas` (
  `id_rkas` char(15) NOT NULL,
  `id_kk` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `id_kelas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama`, `tgl_lahir`, `alamat`, `no_tlp`, `agama`, `jk`, `status`, `angkatan`, `id_kelas`) VALUES
(1, '20151111', 'Dika', '2020-12-02', 'jln. cemara', '0987656789', 'Islam', 'Laki-Laki', 'Aktif', '2015', '1'),
(2, '20151112', 'Doni', '2020-12-08', 'jakarta', '0987898765', 'Islam', 'Laki-Laki', 'Aktif', '2015', '2'),
(3, '20151113', 'Riska', '2020-12-08', 'Ciputat', '09876546789', 'Islam', 'Laki-Laki', 'Aktif', '2015', '3'),
(4, '20151114', 'April', '2021-01-05', 'Kedaung', '09876556789', 'Islam', 'Perempuan', 'Aktif', '2015', '4'),
(5, '20151115', 'Gilang', '2020-12-23', 'ycvsbxsugxy', '987667890', 'Islam', 'Laki-Laki', 'Aktif', '2015', '5'),
(6, '20151116', 'Septi', '2020-12-30', 'jihihu', '8765678', 'Islam', 'Laki-Laki', 'Aktif', '2015', '6'),
(7, '20151117', 'Dery', '2020-12-22', 'jlkkk098765678', '098765467', 'Islam', 'Laki-Laki', 'Aktif', '2015', '7'),
(8, '20151118', 'Fikry', '2020-12-23', 'kdhsfjlaa', '098765487', 'Islam', 'Laki-Laki', 'Aktif', '2015', '8'),
(9, '20151119', 'Haris', '2020-12-21', 'jkxocos', '987654357', 'Islam', 'Laki-Laki', 'Aktif', '2015', '9'),
(10, '20151110', 'Gofur', '2020-12-24', 'gufydgchvguydtgchvuh', '0987654326543', 'Islam', 'Laki-Laki', 'Aktif', '2015', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transk` int(11) NOT NULL,
  `id_nik` int(11) NOT NULL,
  `tgl_transk` date NOT NULL,
  `status_transk` varchar(50) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transk`, `id_nik`, `tgl_transk`, `status_transk`, `id_siswa`) VALUES
(1, 1, '2020-12-08', 'Proses', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biaya`
--
ALTER TABLE `tbl_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tbl_dtil_transk`
--
ALTER TABLE `tbl_dtil_transk`
  ADD PRIMARY KEY (`id_detil`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_kategori_keu`
--
ALTER TABLE `tbl_kategori_keu`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  ADD PRIMARY KEY (`id_keu`);

--
-- Indexes for table `tbl_log_notif`
--
ALTER TABLE `tbl_log_notif`
  ADD PRIMARY KEY (`id_log_notif`);

--
-- Indexes for table `tbl_log_siswa`
--
ALTER TABLE `tbl_log_siswa`
  ADD PRIMARY KEY (`id_log_siswa`);

--
-- Indexes for table `tbl_notifikasi`
--
ALTER TABLE `tbl_notifikasi`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_nik`);

--
-- Indexes for table `tbl_rkas`
--
ALTER TABLE `tbl_rkas`
  ADD PRIMARY KEY (`id_rkas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dtil_transk`
--
ALTER TABLE `tbl_dtil_transk`
  MODIFY `id_detil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_log_siswa`
--
ALTER TABLE `tbl_log_siswa`
  MODIFY `id_log_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id_nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
