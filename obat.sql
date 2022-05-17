-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Des 2017 pada 11.45
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
`kode_obat` int(11) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `harga_obat` int(10) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `harga_obat`, `stok`) VALUES
(2, 'Micin', 'Puyer', 10000, 11),
(11, 'Happy Five', 'Pil', 10000, 10),
(12, 'KB', 'Pil', 20000, 3),
(13, 'Buyung Upik', 'Jamu', 5000, 15),
(14, 'Oskadon Pancen Oye', 'Tablet', 25000, 5),
(15, 'Sakatonik ABC', 'Tablet', 100000, 6),
(16, 'Contrexyn Bila Si Kecil Panas', 'Tablet', 30000, 10),
(17, 'FG Troches ', 'Tablet', 50000, 20),
(18, 'Paramex Flu dan Batuk', 'Tablet', 30000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`kode_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
