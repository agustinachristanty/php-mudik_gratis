-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2020 at 02:00 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mudik_gratis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pilih_rute`
--

DROP TABLE IF EXISTS `pilih_rute`;
CREATE TABLE IF NOT EXISTS `pilih_rute` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `rute` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `jadwal` date NOT NULL,
  `jumlah_pnp` int(10) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `pilih_rute`
--

INSERT INTO `pilih_rute` (`no`, `rute`, `jadwal`, `jumlah_pnp`) VALUES
(1, 'Jakarta-Surabaya', '2020-07-31', 10),
(2, 'Jakarta-Jogja', '2020-07-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

DROP TABLE IF EXISTS `registrasi`;
CREATE TABLE IF NOT EXISTS `registrasi` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ktp` int(10) DEFAULT NULL,
  `kode_verif` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`no`, `nama`, `ktp`, `kode_verif`) VALUES
(1, 'Andi', 1111, 'JS112'),
(2, 'Budi', 2222, 'JS112'),
(3, 'Dewi', 3333, 'JJ112');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `failed_attempt` int(10) DEFAULT NULL,
  `password_expiry` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `role`, `username`, `password`, `failed_attempt`, `password_expiry`) VALUES
(1, 'user1', 'user1@gmail.com', 'admin', 'admin', 'Password123', NULL, NULL),
(2, 'user2', 'user2@gmail.com', 'pengunjung', 'pengunjung', 'Password111', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
