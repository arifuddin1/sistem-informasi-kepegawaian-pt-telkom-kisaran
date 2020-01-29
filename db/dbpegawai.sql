-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 04:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `nip` int(25) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `nama`, `alamat`, `tanggallahir`, `jeniskelamin`) VALUES
(1234, 'Lucky Oktaviansah', 'Medan', '1997-04-25', 'laki-laki'),
(3456, 'Tri Purnomo Aji', 'Air Joman', '1998-03-06', 'laki-laki'),
(12432, 'Rizki Ramadhan', 'Tanjung Balai', '1999-05-24', 'laki-laki'),
(23455, 'Jamaluddin', 'Kisaran Timur', '1998-03-04', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `level`, `keterangan`) VALUES
('admin', '25d55ad283aa400af464c76d713c07ad', 'telkom', 'telkom@gmail.com', 1, 'staf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
