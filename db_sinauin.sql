-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2019 pada 09.39
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sinauin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(101, 'X TJA 1'),
(102, 'X TJA 2'),
(103, 'X TJA 3'),
(104, 'X TKJ 1'),
(105, 'X TKJ 2'),
(106, 'X TKJ 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `keterangan`) VALUES
(1, 'Bahasa indonesia'),
(2, 'PKN'),
(3, 'Matematika'),
(4, 'Pendidikan Agama'),
(5, 'Bahasa Inggris'),
(6, 'Bahasa Jawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan_soal`
--

CREATE TABLE `pilihan_soal` (
  `id_pilihan_soal` int(11) NOT NULL,
  `id_mata_pelajaran` int(11) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `que` text NOT NULL,
  `pilihan_a` varchar(255) NOT NULL,
  `pilihan_b` varchar(255) NOT NULL,
  `pilihan_c` varchar(255) NOT NULL,
  `pilihan_d` varchar(255) NOT NULL,
  `pilihan_e` varchar(255) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pilihan_soal`
--

INSERT INTO `pilihan_soal` (`id_pilihan_soal`, `id_mata_pelajaran`, `materi`, `que`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `pilihan_e`, `ans`, `userans`) VALUES
(1, 0, '', '1+1 adalah =', '33', '12', '2', '22', '11', '2', '2'),
(2, 0, '', '2+22 adalah =', '1', '24', '13', '5', '44', '24', '24'),
(3, 0, '', 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', 'Hypertext Preprocessor'),
(9, 1, '', '10-3 adalah', '3', '7', '6', '5', '1', '7', ''),
(10, 1, '', '5+4 =', '11', '4', '9', '10', '5', '9', ''),
(11, 3, '', '10-3 adalah', '3', '7', '6', '5', '1', '7', ''),
(12, 3, '', '5+4 =', '11', '4', '9', '10', '5', '9', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `email`, `nis`, `tempat`, `tanggal_lahir`, `id_kelas`, `alamat`, `no_hp`, `password`) VALUES
(6, 'bobi', 'fff@gmail.com', '3103111', 'magelang', '2019-02-07', 102, 'Jl. Pepaya', '0813213', 'kakaka'),
(7, 'jajaajaja', 'bbb@gmail.com', '421131', 'pwt', '2019-02-07', 101, 'JL.', '09879789', 'dddd'),
(10, 'dina', 'azaa@gmail.com', '444', 'jkt', '2019-01-02', 106, 'jl. mangga', '08988877', 'hhh'),
(15, 'Didi', 'didii@gmail.com', '31031189', 'Bandung', '2009-02-10', 103, 'Bandung', '08132421424', 'dididi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, 'aaaa', '2019-02-14 00:00:00', '2019-02-15 00:00:00'),
(2, 'bbbb', '2019-02-15 00:00:00', '2019-02-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indeks untuk tabel `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  ADD PRIMARY KEY (`id_pilihan_soal`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pilihan_soal`
--
ALTER TABLE `pilihan_soal`
  MODIFY `id_pilihan_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
