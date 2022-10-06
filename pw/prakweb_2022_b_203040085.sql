-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2022 pada 20.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2022_b_203040085`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_penerbit` varchar(4) NOT NULL,
  `gambar_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penerbit_buku`, `tahun_penerbit`, `gambar_buku`) VALUES
(1, 'Novel Bedebah Di Ujung Tanduk', 'Penerbit Sabak Grip', '2021', 'Buku01.png'),
(2, 'Novel Dear, Hyun Nam', 'Bhuana Ilmu Populer', '2022', 'Buku02.png'),
(3, 'Novel Mengapa Luka Tidak Memaafkan Pisau', 'Gramedia Pustaka Utama', '2020', 'Buku03.png'),
(4, 'Novel The Battle For Perfect', 'Bhuana Ilmu Populer', '2022', 'Buku04.png'),
(5, 'FS HUT BIP Novel The Bloody Rose', 'Bhuana Ilmu Populer', '2022', 'Buku05.png'),
(6, 'Novel Hafalan Shalat Delisa', 'Penerbit Sabak Grip', '2021', 'Buku06.png'),
(7, 'Novel Dia Adalah Kakakku', 'Penerbit Sabak Grip', '2021', 'Buku07.png'),
(8, 'Novel Ancika: Dia Yang Bersamaku Tahun 1995', 'Pastel Books', '2021', 'Buku08.png'),
(9, 'Novel Seri A Cogheart Adventure #4: Shadowsea', 'Bhuana Ilmu Populer', '2022', 'Buku09.png'),
(10, 'Novel Kencan Kilat', 'Bhuana Ilmu populer', '2022', 'Buku10.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
