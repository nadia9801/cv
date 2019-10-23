-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 05:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `biodata_id` varchar(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `moto` varchar(255) NOT NULL,
  `moto2` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`biodata_id`, `nama_lengkap`, `nama_panggilan`, `ttl`, `alamat`, `jenis_kelamin`, `agama`, `no_telp`, `email`, `moto`, `moto2`, `resume`, `foto`, `perubahan`) VALUES
('5d49a3ea21', 'Nadia Eka Sabila', 'Nadia', 'Malang, 09 Agustus 20001', 'Jl. Kendalsari GG V No. 37D, Malang', 'Perempuan', 'Islam', '085731872409', 'nd86132@gmail.com', 'Siswi SMKN 5 Malang', 'Saya Seorang Pelajar', '<p>Nama lengkap saya Nadia Eka Sabila dan saya sekarang berumur 18 tahun. Saat ini saya sedang menempuh pendidikan di SMKN 5 Malang kelas XII RPL(Rekayasa Perangkat Lunak). Saya memiliki kondisi kesehatan yang sangat baik.Selama sekolah sama pernah menjadi anggota PMR.</p>', 'eka.jpeg', '2019-10-12 02:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `nama`, `tahun`, `perubahan`) VALUES
('E-01', 'SDN Tulus Rejo 02 Malang', '2008-2014', '2019-10-12 01:42:18'),
('E-02', 'SMPN 18 Malang', '2014-2017', '2019-10-12 01:42:50'),
('E-03', 'SMKN 5 Malang', '2017-Sekarang', '2019-10-12 01:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experiencce_id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info_id` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `judul`, `value`, `icon`, `perubahan`) VALUES
('', 'email', 'nd86132@gmail.com', 'email\r\n', '0000-00-00 00:00:00'),
('1-02', 'wa', 'https://wa.me/628990905004', 'whatsapp', '0000-00-00 00:00:00'),
('I-01', 'alamat', 'Jl. Kendalsari Gg. V No.37D, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'maps', '2019-10-23 00:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `register_id` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `member_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`register_id`, `email`, `password`, `member_update`) VALUES
('', 'nadiaeka10@yahoo.com', 'f7482686012a222721af704d3ce7b504', '2019-10-16 07:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `portofolio_id` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `katagori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`portofolio_id`, `nama`, `foto`, `tgl`, `perubahan`, `katagori`) VALUES
('', 'Piagam Penghargaan LATGABPALJA VI KSR PMI Unit Universitas Negeri Malang', 'wa.jpeg', '02 Oktober 2017', '2019-10-16 01:39:19', ''),
('01', 'Sertifikat telah melaksanakan prakerin di Fakultas Hukum Universitas Brawijaya', 'w.jpeg', '03 Januari 2019', '2019-10-16 01:41:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nama`, `keterangan`, `perubahan`) VALUES
(5, 'Power Point\r\n', '70%', '0000-00-00 00:00:00'),
(6, 'Lightroom', '50%', '0000-00-00 00:00:00'),
(7, 'HTML', '35%', '0000-00-00 00:00:00'),
(8, 'Microsoft Office', '60%', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `nama`, `link`, `icon`, `perubahan`) VALUES
(1, 'Facebook', 'https://www.facebook.com/23AP.Salsabila.55924', 'facebook', '2019-10-16 01:36:30'),
(2, 'Twitter', 'https://twitter.com/Nadia_Eka981', 'twitter', '2019-10-16 01:36:52'),
(3, 'Instagram', 'https://www.instagram.com/n_adia981/?hl=en', 'instagram', '2019-10-16 01:37:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`biodata_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experiencce_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`portofolio_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
