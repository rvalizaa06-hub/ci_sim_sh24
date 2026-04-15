-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2026 pada 05.31
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `lokasi_rak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `id_kategori`, `stok`, `lokasi_rak`) VALUES
(2, 'BK001', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka ', 2025, 8, 12, 'Rak A1'),
(3, 'BK002', 'Filosofi Teras', 'Henry Manampiring', 'Kompas', 2018, 15, 9, 'Rak A2'),
(5, 'BK003', 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', 'Grasindo', 2016, 27, 15, 'Rak A3'),
(6, 'BK004', 'Rumah untuk Alie', 'Lenn Liu', 'Kawah Media', 2024, 8, 6, 'Rak A4'),
(7, 'BK005', 'Atomic Habits', 'James Clear', 'PT Gramedia Pustaka Utama', 2018, 27, 5, 'Rak A5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
