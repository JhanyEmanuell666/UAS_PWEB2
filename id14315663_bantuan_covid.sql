-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Jul 2020 pada 09.46
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14315663_bantuan_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(15) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
('1', 'Dian', 'opung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_kelompok`
--

CREATE TABLE `anggota_kelompok` (
  `NIM` varchar(15) NOT NULL,
  `Nama_Lengkap` varchar(45) NOT NULL,
  `Jenis_Kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_kelompok`
--

INSERT INTO `anggota_kelompok` (`NIM`, `Nama_Lengkap`, `Jenis_Kelamin`) VALUES
('171011400827', 'EKY RACHMAN', 'Laki-Laki'),
('171011400840', 'DIAN NUGRAHA MALIK', 'Laki-Laki'),
('171011400938', 'EMANUELL H JANI', 'Laki-Laki'),
('2016140542', 'DENY SETIAWAN', 'Laki-Laki'),
('2016141366', 'DZAKY YAHYA ABDULLAH', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penerima`
--

CREATE TABLE `data_penerima` (
  `Nomor` varchar(15) NOT NULL,
  `Nama_Lengkap` varchar(45) NOT NULL,
  `Alokasi` varchar(45) NOT NULL,
  `Jumlah_Transaksi` varchar(45) NOT NULL,
  `Jumlah_Dana` bigint(45) NOT NULL,
  `No_Telp` varchar(15) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penerima`
--

INSERT INTO `data_penerima` (`Nomor`, `Nama_Lengkap`, `Alokasi`, `Jumlah_Transaksi`, `Jumlah_Dana`, `No_Telp`, `Email`) VALUES
('1', 'Dzaky Yahya Abdullah', 'Alat Pelindung Diri', '132', 2000000, '081111222333', 'dzaky@gmail.com'),
('2', 'Deny Setiawan', 'Logistik Mahasiswa', '143', 5000000, '081111222444', 'deny@gmail.com'),
('3', 'Emanuell H Jani', 'Bantuan Kuota Mahasiswa', '100', 1000000, '081111222555', 'emanuell@gmail.com'),
('4', 'Dian Nugraha Malik', 'Sembako Masyarakat', '400', 6000000, '081111222666', 'dian@gmail.com'),
('5', 'Eky Rachman', 'Hand Sanitizer', '500', 8000000, '081111222888', 'eky@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `anggota_kelompok`
--
ALTER TABLE `anggota_kelompok`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `data_penerima`
--
ALTER TABLE `data_penerima`
  ADD PRIMARY KEY (`Nomor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
