-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2018 pada 12.10
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdasar7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` text NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jk` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `motto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `jk`, `prodi`, `fakultas`, `asal`, `motto`) VALUES
('Fatrinrl', '1306173104', 'Perempuan', 'D3 Teknik Telekomunikasi', 'Fakultas Rekayasa Industri', 'Makassar', 'Hmmm'),
('Budi', '1701161034', 'Laki-Laki', 'D4 Sistem Multimedia', 'Fakultas Industri Kreatif', 'Denpasar, Bali', 'Apa adanya'),
('Berliana Putri', '6701174026', 'Perempuan', 'D3 Sistem Informasi', 'Fakultas Ilmu Terapan', 'Cilacap, Jateng', 'Dipikir sambil jongkok'),
('Putri', '6705160013', 'Perempuan', 'D3 Teknik Telekomunikasi', 'Fakultas Teknik Elektro', 'Sukabumi, Jabar', 'Bersyukur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
