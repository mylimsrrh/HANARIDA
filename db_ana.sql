-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 10.45
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ana`
--

CREATE TABLE `tb_ana` (
  `KET` varchar(11) COLLATE dec8_bin NOT NULL,
  `NO` int(10) NOT NULL,
  `PH` int(10) NOT NULL,
  `TURB` int(10) NOT NULL,
  `CL` int(10) NOT NULL,
  `FL` int(10) NOT NULL,
  `TOT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

--
-- Dumping data untuk tabel `tb_ana`
--

INSERT INTO `tb_ana` (`KET`, `NO`, `PH`, `TURB`, `CL`, `FL`, `TOT`) VALUES
('ANA1', 1, 1, 2, 3, 4, 5),
('ANA2', 2, 1, 2, 6, 4, 8),
('ANA3', 3, 7, 5, 2, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ana`
--
ALTER TABLE `tb_ana`
  ADD PRIMARY KEY (`NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
