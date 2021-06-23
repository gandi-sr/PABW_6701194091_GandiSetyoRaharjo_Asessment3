-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2021 pada 15.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emasjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_solat`
--

CREATE TABLE `jadwal_solat` (
  `id_jadwalsolat` int(100) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `subuh` varchar(10) NOT NULL,
  `terbit` varchar(10) NOT NULL,
  `duha` varchar(10) NOT NULL,
  `dzuhur` varchar(10) NOT NULL,
  `asar` varchar(10) NOT NULL,
  `magrib` varchar(10) NOT NULL,
  `isya` varchar(10) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_solat`
--

INSERT INTO `jadwal_solat` (`id_jadwalsolat`, `bulan`, `tanggal`, `subuh`, `terbit`, `duha`, `dzuhur`, `asar`, `magrib`, `isya`, `userid`) VALUES
(1, 'Jun', '01', '10:10', '11:10', '12:10', '13:10', '14:10', '15:10', '16:10', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_solat`
--
ALTER TABLE `jadwal_solat`
  ADD PRIMARY KEY (`id_jadwalsolat`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal_solat`
--
ALTER TABLE `jadwal_solat`
  MODIFY `id_jadwalsolat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_solat`
--
ALTER TABLE `jadwal_solat`
  ADD CONSTRAINT `jadwal_solat_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
