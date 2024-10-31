-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2024 pada 05.45
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id`, `user`, `barang`, `jumlah`, `harga`, `total`, `tanggal`) VALUES
(66, 'nazi', 'nganu', 20, '100000.00', '2000000.00', '2024-10-31'),
(67, 'lina', 'beras', 30, '25000.00', '750000.00', '2024-10-31'),
(68, 'mira', 'gula', 25, '15000.00', '375000.00', '2024-10-31'),
(69, 'nina', 'garam', 15, '12000.00', '180000.00', '2024-10-31'),
(70, 'otto', 'minyak', 10, '30000.00', '300000.00', '2024-10-31'),
(71, 'pita', 'teh', 50, '40000.00', '2000000.00', '2024-10-31'),
(72, 'qori', 'kopi', 20, '60000.00', '1200000.00', '2024-10-31'),
(73, 'riko', 'susu', 15, '35000.00', '525000.00', '2024-10-31'),
(74, 'sari', 'cokelat', 10, '50000.00', '500000.00', '2024-10-31'),
(75, 'tina', 'kerupuk', 40, '10000.00', '400000.00', '2024-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `barang` varchar(255) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id`, `user`, `barang`, `kode_barang`, `jumlah`, `harga`, `total`, `tanggal`) VALUES
(69, 'ais', 'boneka', '92318', 20, '120000.00', '2400000.00', '2024-10-31'),
(70, 'budi', 'sepatu', '12345', 15, '150000.00', '2250000.00', '2024-10-31'),
(71, 'cici', 'tas', '67890', 10, '200000.00', '2000000.00', '2024-10-31'),
(72, 'dani', 'buku', '54321', 30, '70000.00', '2100000.00', '2024-10-31'),
(73, 'elsa', 'meja', '11223', 5, '400000.00', '2000000.00', '2024-10-31'),
(74, 'fahmi', 'kursi', '44556', 7, '250000.00', '1750000.00', '2024-10-31'),
(75, 'gita', 'lemari', '77889', 4, '600000.00', '2400000.00', '2024-10-31'),
(76, 'hans', 'piring', '99100', 25, '30000.00', '750000.00', '2024-10-31'),
(77, 'ika', 'sendok', '22334', 40, '20000.00', '800000.00', '2024-10-31'),
(78, 'joko', 'gelas', '55678', 12, '40000.00', '480000.00', '2024-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `display_name`, `password`) VALUES
(1, '1245', 'agus', '$2y$10$k1L6yZIlJ.E5EqFvd6TZ/.youAAM0ZfoyDtExBydp08DKdFESk4OW'),
(2, '03921839', 'riski', '$2y$10$3BFJpqUruIr6K6zyvaWArOHW5DJLrwFOM1BUPBiRvVu5oe6mHjlf2'),
(4, '81281', 'nurman', '$2y$10$DOmf3aHfJqyIPDYCy4TTnO2mlXPXrNGEyZM.RbFYAF9MyxLiWPOMe'),
(17, '1246', 'bagus', '$2y$10$sNdiiCPnGFTQcMUqtWsiPOvVLb5USBjPyWf3/MpBvYM8xcjhvpaR2'),
(22, '50421260', 'nazi', '$2y$10$biNaH6zlfpzR479bNmbHD.nYLukH9CY9xp./EnRFxReX6IenBQa2.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
