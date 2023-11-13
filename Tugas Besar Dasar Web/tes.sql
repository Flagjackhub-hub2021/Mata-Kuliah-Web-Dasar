-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 10.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `kd_skema` varchar(15) DEFAULT NULL,
  `nm_peserta` varchar(100) DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `kd_skema`, `nm_peserta`, `jk`, `alamat`, `no_hp`) VALUES
(1, 'SKM-001', 'Ade Yuni', 'Perempuan', 'BTN Lasoani', '08123456789'),
(3, 'SKM-001', 'Fitrawati', 'Perempuan', 'BTN Lasoani bawah blok H4 No 6, Lasoani, Kec. Mantikulore, Kota Palu, Sulawesi Tengah 94111, Indonesia', '082123456789'),
(4, 'SKM-002', 'Fitrawati', 'Perempuan', 'BTN Lasoani bawah blok H4 No 6, Lasoani, Kec. Mantikulore, Kota Palu, Sulawesi Tengah 94111, Indonesia', '082123456789'),
(5, 'SKM-002', 'Ade Yuni Safitri', 'Perempuan', 'BTN Lasoani bawah blok H4 No 6, Lasoani, Kec. Mantikulore, Kota Palu, Sulawesi Tengah 94111, Indonesia', '082189476668'),
(6, 'SKM-001', 'Ikhsan', 'Laki-Laki', 'BTN Lasoani', '08123456789'),
(7, 'SKM-001', 'Muhammad Fajrin', 'L', 'Ampana', '081234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skema`
--

CREATE TABLE `skema` (
  `kd_skema` varchar(10) NOT NULL,
  `nm_skema` varchar(100) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `jml_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skema`
--

INSERT INTO `skema` (`kd_skema`, `nm_skema`, `jenis`, `jml_unit`) VALUES
('SKM-001', 'Junior Web Developer', 'Kluster', 6),
('SKM-002', 'Digital Marketing', 'Kluster', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`kd_skema`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
