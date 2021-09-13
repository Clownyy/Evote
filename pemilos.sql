-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2021 pada 20.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Developer', 'admin', '1907da582f547195f26c39271a719eac');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nis` int(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `status_vote` varchar(13) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`nis`, `nama_lengkap`, `kelas`, `jurusan`, `status_vote`) VALUES
(2, 'Yiek alfian', '12', 'RPL', '0'),
(3, 'Fahrizal Syaripdin', '12', 'RPL', '0'),
(4, 'Muhammad Aqsyal', '12', 'RPL', '0'),
(5, 'Aldin abb', '12', 'RPL', '0'),
(6, 'Fadlawalad dimas Zo Charli siregar', '12', 'RPL', '0'),
(7, 'Kevin Hendra Wijaya', '12', 'RPL', '0'),
(1231, 'Muhammad Bafaqih', '12', 'RPL', '0'),
(1234, 'Muhammad Fahrul', '12', 'RPL', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quick_count`
--

CREATE TABLE `quick_count` (
  `id` int(11) NOT NULL,
  `id_pilih` varchar(255) NOT NULL,
  `calon_pilihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `id_pilih` varchar(33) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `nama_wakil` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto_calon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`id_pilih`, `nama_calon`, `nama_wakil`, `visi`, `misi`, `foto_calon`) VALUES
('PASLON_01', 'Ficka', 'Rahmanda', 'Foya', 'Foya', '11.jpg'),
('PASLON_03', 'Joesnadya', 'Josephine', 'SMKN 10 Jakarta', 'Jaya', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `quick_count`
--
ALTER TABLE `quick_count`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_pilih`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `quick_count`
--
ALTER TABLE `quick_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
