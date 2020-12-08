-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 04:05 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oyo_townhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `jabatan`, `nik`, `nama`, `ttl`, `alamat`, `jk`, `agama`, `email`, `hp`, `uname`, `pass`, `foto`) VALUES
(1, 'Manager', '3173062005990004', 'Ade Maulana', 'Cirebon, 20 Mei 1999', 'Jl. Kapuk Kamal Rawa Melati Rt/Rw 009/01 Kel. Tegal Alur Kec. Kalideres', 'Laki-laki', 'Islam', 'ademaul.ccd@gmail.com', '087787309246', 'ADMaulana', '200599', 'adm.jpg'),
(4, 'Admin', '3173061112000011', 'Azis Nur Rahmat', 'Bandung/11-12-1999', 'jalan anggrek', 'Laki-laki', 'Islam', 'azisnrrhmat@gmail.com', '087787309248', 'Azisnr', 'azisssss', 'azs.jpg'),
(5, 'Admin', '3173061112000012', 'Solahudin Al ayubi', 'tangerang 21 mei 1999', 'jalan raya perancis', 'Laki-laki', 'Islam', 'yubiwow1@gmail.com', '089601326339', 'Yubi123', 'yubi123', 'ybi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `id_kmr` int(11) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`id_kmr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kmr`, `tipe`, `desk`, `harga`) VALUES
(1, 'Suite Deluxe Room', '2 Ranjang Tidur Kecil / TV / AC / Wifi', 250000),
(2, 'Super Deluxe Room', '1 Ranjang Tidur Besar / TV / AC / Wifi', 270000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_psn` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `lama` int(11) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id_psn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_psn`, `nik`, `nama`, `ttl`, `alamat`, `jk`, `tipe`, `desk`, `lama`, `cin`, `cout`, `harga`, `total`) VALUES
(1, '3173061112000011', 'Ahmad', 'Jakarta/21-06-1995', 'jalan anggrek', 'Laki-laki', 'Super Deluxe Room', '1 Ranjang Tidur Besar / TV / AC / Wifi', 3, '2020-06-25', '2020-06-28', 270000, 810000),
(2, '3173061112000012', 'Mawar', 'Bandung/11-12-2001', 'Jakarta Selatan', 'Perempuan', 'Suite Deluxe Room', '2 Ranjang Tidur Kecil / TV / AC / Wifi', 2, '2020-06-27', '2020-06-29', 270000, 540000),
(3, '3173062005990004', 'Alan', 'Cirebon/ 20-05-1999', 'jalan mawar', 'Laki-laki', 'Suite Deluxe Room', '2 Ranjang Tidur Kecil / TV / AC / Wifi', 23, '2020-06-28', '2020-06-05', 250000, 5750000),
(4, '3173061112000011', 'Mawar', 'Bandung/11-12-2000', 'Jakarta Pusat', 'Perempuan', 'Super Deluxe Room', '1 Ranjang Tidur Besar / TV / AC / Wifi', 3, '2020-06-30', '2020-07-03', 270000, 810000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
