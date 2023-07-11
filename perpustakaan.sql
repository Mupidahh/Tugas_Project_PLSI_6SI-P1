-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 07:28 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_anggota` varchar(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_anggota`, `password`) VALUES
('1911050134', 'mufidah');

-- --------------------------------------------------------

--
-- Table structure for table `detail_akun`
--

CREATE TABLE `detail_akun` (
  `id_anggota` varchar(10) NOT NULL,
  `kd_prodi` varchar(10) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_mahasiswa` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_akun`
--

INSERT INTO `detail_akun` (`id_anggota`, `kd_prodi`, `nama`, `tempat_lahir`, `tanggal_lahir`, `status_mahasiswa`, `alamat`, `no_telp`, `photo`) VALUES
('1911050134', '050', 'Mufidah Tralala', 'Teluk Betung', '1945-09-01', 'Mahasiswa', 'Jl Dokter Cipto Mangunkusumo Gang Melati No. 10 Kel. Sumur Batu, Kec. Teluk Betung Utara Bandar Lampung, Lampung, Indonesia', '89634356845', 'photo/WhatsApp Image 2023-06-10 at 20.dsd36.56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_anggota` varchar(10) NOT NULL,
  `waktu_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_anggota`, `waktu_pendaftaran`) VALUES
('1911050134', '2023-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
('030', 'Teknik Informatika'),
('040', 'Sistem Komputer'),
('050', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `detail_akun`
--
ALTER TABLE `detail_akun`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `kd_prodi` (`kd_prodi`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_akun`
--
ALTER TABLE `detail_akun`
  ADD CONSTRAINT `detail_akun_ibfk_1` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi` (`kd_prodi`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
