-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2024 pada 08.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `monthly_umh_target`
--

CREATE TABLE `monthly_umh_target` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL DEFAULT 0,
  `month` int(11) NOT NULL DEFAULT 0,
  `plant` varchar(50) NOT NULL,
  `target` double NOT NULL DEFAULT 0,
  `creation_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `monthly_umh_target`
--

INSERT INTO `monthly_umh_target` (`id`, `year`, `month`, `plant`, `target`, `creation_date`, `create_by`) VALUES
(18, 2024, 1, 'inko', 8.01, '2024-10-28 11:50:55', 'admin'),
(19, 2024, 2, 'inko', 7.86, '2024-10-28 11:50:55', 'admin'),
(20, 2024, 3, 'inko', 7.98, '2024-10-28 11:50:55', 'admin'),
(21, 2024, 4, 'inko', 7.56, '2024-10-28 11:50:55', 'admin'),
(22, 2024, 5, 'inko', 8.01, '2024-10-28 11:50:55', 'admin'),
(23, 2024, 6, 'inko', 7.96, '2024-10-28 11:50:55', 'admin'),
(24, 2024, 7, 'inko', 8.01, '2024-10-28 11:50:55', 'admin'),
(25, 2024, 8, 'inko', 8.016, '2024-10-28 11:50:55', 'admin'),
(26, 2024, 9, 'inko', 8.011, '2024-10-28 11:50:55', 'admin'),
(27, 2024, 10, 'inko', 8.09, '2024-10-28 11:50:55', 'admin'),
(28, 2024, 11, 'inko', 8.09, '2024-10-28 11:50:55', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `monthly_umh_target`
--
ALTER TABLE `monthly_umh_target`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `monthly_umh_target`
--
ALTER TABLE `monthly_umh_target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
