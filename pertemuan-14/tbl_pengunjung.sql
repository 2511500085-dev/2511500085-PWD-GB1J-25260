-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2026 at 02:23 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `cid` int(11) NOT NULL,
  `kodepengunjung` varchar(100) DEFAULT NULL,
  `namapengunjung` varchar(100) DEFAULT NULL,
  `alamatrumah` varchar(100) DEFAULT NULL,
  `tanggalkunjungan` varchar(100) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `asalSLTA` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `namaorangtua` varchar(100) DEFAULT NULL,
  `namapacar` varchar(100) DEFAULT NULL,
  `namamantan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`cid`, `kodepengunjung`, `namapengunjung`, `alamatrumah`, `tanggalkunjungan`, `hobi`, `asalSLTA`, `pekerjaan`, `namaorangtua`, `namapacar`, `namamantan`) VALUES
(1, '001', 'IRSYA', 'KUNDI', '13-AGUSTUS-2007', 'JOGING', 'SMKN1MUNTOK', 'PENGACARA (PENGANGGURAN BANYAK ACARA)', NULL, 'WILLIAN INDI PRATAMA', 'SAMPAH'),
(3, '009', 'amsamsbaj', 'ambajsga', 's nxvdyaudfewiy', 'neffbgeiurti3', 'emfbeiutru3', 'dfngeiw73t94o27rt', 'enfry4tyr4r', 'nfvdhfjsfwyefhj', 'negeurt73tru3wgr'),
(4, '009', 'airin', 'babal', 'ayam', 'anshw', 'snwsu3t', 'ednbejdy3y', '3negu3teu', 'd4hgu4y', '3mhru4yru'),
(5, '002', 'ndjssdmhd', 'sndbhdgshdg', 'dbjfgeg', 'd ndgjeugdue', 'dmnbejfgeujgd', 'dmbbejfgeuyfue', 'edbjegdufe', 'dmbejfgeufte', 'ebdueytuetutde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
