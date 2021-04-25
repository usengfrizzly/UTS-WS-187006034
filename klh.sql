-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 00.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biomhs`
--

CREATE TABLE `biomhs` (
  `id` int(11) NOT NULL,
  `npm` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `release_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biomhs`
--

INSERT INTO `biomhs` (`id`, `npm`, `nama`, `asal`, `notelp`, `release_at`) VALUES
(1, 187006034, 'Yusup Mochamad Ramdani', 'Kawali, Ciamis', '085795254570', '2021-04-25 22:15:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biomhs`
--
ALTER TABLE `biomhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biomhs`
--
ALTER TABLE `biomhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
