-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 01:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` varchar(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `pengarang`, `penerbit`) VALUES
('2', 'Menguasai Pemrograman Berorientasi Objek', 'Ade Rahmat Iskandar', 'Informatika'),
('1', 'pemrograman web edisi 3', 'Dr. Priyanto Hidayatullah, S.T', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` varchar(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `toko` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `nama_buku`, `toko`, `tgl`, `harga`) VALUES
('1', 'pemrograman web edisi 3', 'shopee', '2022-05-05', '180.000'),
('2', 'Menguasai Pemrograman Berorientasi Objek', 'Gramedia', '2022-05-11', '125.000');

-- --------------------------------------------------------

--
-- Table structure for table `rangkuman`
--

CREATE TABLE `rangkuman` (
  `id` varchar(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `ringkas` text NOT NULL,
  `rating` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangkuman`
--

INSERT INTO `rangkuman` (`id`, `nama_buku`, `ringkas`, `rating`) VALUES
('1', 'pemrograman web edisi 3', 'bahasa yang dibahas dalam buku ini adalah html, css, js, php, bootstrap, dll, dan juga buku ini terdapat cd yang berisi source code, node js, dll', '9.5/10'),
('2', 'Menguasai Pemrograman Berorientasi Objek', 'Mengintegrasikan OOP, permodelan rancangan dengan diagram UML, dan pengimplementasian dalam database dengan java dan mysql', '10/10');

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id` varchar(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `target` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id`, `nama_buku`, `target`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
('1', 'pemrograman web edisi 3', '35 hari', '2022-06-27', '2022-08-03', 'belum'),
('2', 'Menguasai Pemrograman Berorientasi Objek', '21 hari', '2022-06-01', '2022-06-21', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`nama_buku`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_buku` (`nama_buku`);

--
-- Indexes for table `rangkuman`
--
ALTER TABLE `rangkuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_buku` (`nama_buku`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_buku` (`nama_buku`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`nama_buku`) REFERENCES `buku` (`nama_buku`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `rangkuman`
--
ALTER TABLE `rangkuman`
  ADD CONSTRAINT `rangkuman_ibfk_1` FOREIGN KEY (`nama_buku`) REFERENCES `buku` (`nama_buku`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `target_ibfk_1` FOREIGN KEY (`nama_buku`) REFERENCES `buku` (`nama_buku`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
