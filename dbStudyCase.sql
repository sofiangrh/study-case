-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2015 at 09:40 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.2-1ubuntu4.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbStudyCase`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_brg` varchar(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `stok_brg` int(3) NOT NULL,
  `harga_brg` int(10) NOT NULL,
  PRIMARY KEY (`id_brg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `satuan`, `stok_brg`, `harga_brg`) VALUES
('A002', 'Indomie', 'Dus', 20, 1500),
('A003', 'Clear', 'Sachet', 150, 2500),
('A001', 'Ciptadent', 'Pack', 20, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(6) NOT NULL,
  ` nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, ` nama_user`, `username`, `password`) VALUES
('ID1001', 'Admin', 'Sofian Nugraha', 'admin');
