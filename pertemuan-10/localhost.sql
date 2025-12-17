-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2025 pada 08.02
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

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
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cmail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cmail`, `cpesan`, `created_at`) VALUES
(1, 'irsya eva safitri', 'newirsya@gmail.com', 'ayo irsya lebih semangat belajarnya,semoga bisa lulus dengan nilai baik aminn.', '2025-12-17 14:01:25'),
(2, 'rara lady', 'raralady@gmail.com', 'apakabar kamu cantik sekali imoutttt seperti bubur ayam', '2025-12-17 14:01:25'),
(3, 'amarzoni', 'amarzoni@gmail.com', 'hallo gaissss kami mauuuu jalan jalan ke namang guyssss', '2025-12-17 14:01:25'),
(4, 'willian', 'wiliyan@gmail.com', 'gggggggggggggggggggeeeeeeeeeeeeeeeee', '2025-12-17 14:01:25'),
(5, 'wiliyan', 'wiliyan@gmail.com', 'Bsahsgggggggggggggggggweydgwd', '2025-12-17 14:01:25'),
(6, 'kakak', 'kakak@gmail.com', 'aaaaaddaaaaaaaaaaaaaaaaaaaa', '2025-12-17 14:01:25'),
(7, 'sya', 'newirsya@gmail.com', 'aaaaaaaaaaaaaaadddddddd', '2025-12-17 14:40:33'),
(8, 'i', 'newirsya@gmail.com', 'i', '2025-12-17 14:41:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
