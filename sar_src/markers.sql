
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2012 at 02:00 PM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u366735259_sar`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kejadian` varchar(60) NOT NULL,
  `keterangan` text NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `tipe` enum('meninggal','lukaberat','lukaringan','selamat','pos','puskesmas','pmi') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `kejadian`, `keterangan`, `lat`, `lng`, `tipe`) VALUES
(32, 'Pos 1', '', -7.924254, 112.597847, 'pos'),
(33, 'Korban Tenggelam', 'Laporan awal korban, \r\nFebrianto Budi Mulyono, \r\numur 13 tahun, \r\nAsal Desa Kedungrejo-Waru-Sidoarjo, \r\nLaki-laki\r\nHilang di desa Sukonolo-Blobo, Jam 13.30', -8.109929, 112.606720, 'pos'),
(31, 'Puskesmas', '', -7.943296, 112.587723, 'puskesmas'),
(15, 'Sekretariat SAR Trenggana', 'Jl. Kolonel Sugiono/Gadang, Malang', -8.008109, 112.629868, 'pos'),
(30, 'selamat', '', -7.944146, 112.597160, 'selamat'),
(29, 'luka ringan', '', -7.944316, 112.604195, 'lukaringan'),
(28, 'luka berat', '', -7.938366, 112.603516, 'lukaberat'),
(27, 'meninggal', '', -7.938196, 112.594582, 'meninggal'),
(26, 'Puskesmas', '', -7.979168, 112.672348, 'puskesmas'),
(25, 'Palang Merah Indonesia', 'Jl. Buring', -7.969138, 112.628571, 'pmi'),
(34, 'rawan genangan air', 'jalan raya rawan banjir, genangan bisa mencapai 70cm.\r\nalternatif dari arah utara lewat jalan surabaya, dari selatan bisa lewat jl. wilis atau jl. ijen', -7.966248, 112.613724, 'pos'),
(35, 'MAKO Pemadam Kebakaran', 'Markas komando pemadam kebakaran wilayah malang kota', -7.989538, 112.629776, 'pos');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
