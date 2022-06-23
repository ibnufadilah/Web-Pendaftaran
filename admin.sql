-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 09:54 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'ibnu', '123'),
(3, 'restu', '123'),
(4, 'contoh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tambah`
--

CREATE TABLE `tambah` (
  `id` int(11) NOT NULL,
  `nama_seminar` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `biaya` varchar(10) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tambah`
--

INSERT INTO `tambah` (`id`, `nama_seminar`, `deskripsi`, `alamat`, `biaya`, `gambar`) VALUES
(26, 'Seminar Smart Digital Procurem', 'Purchasing adalah segala kegiatan pembelian / pengadaan barang maupun jasa yang dilakukan oleh individu maupun organisasi. Biasanya dalam perusahaan, istilah purchasing meliputi divisi tersendiri yang bertugas untuk melakukan segala pembelian atas kebutuhan operasional perusahaan. Perkembangan zaman memberikan tuntutan baru dalam kegiatan pengadaan suatu barang atau jasa. Dengan semakin banyaknya persaingan mulai dari ketersediaan barang, harga, serta pelayanan, alangkah baiknya dapat dijadikan lebih simple & cepat. Penerapan teknologi merupakan salah satu langkah yang dapat dilakukan tim Purchasing maupun purchasing staff suatu lembaga / perusahaan. Di era industri 4.0, dunia supply chain & procurement turut berkembang pesat seiring dengan perkembangan teknologi. Digital procurement / pengadaan digital menciptakan tren baru pada supply chain serta peningkatan efisiensi pengadaan barang maupun jasa. Apakah Anda siap menjadi bagian transformasi digital menuju industri 4.0?', 'Jakarta', '250000', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah`
--
ALTER TABLE `tambah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tambah`
--
ALTER TABLE `tambah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
