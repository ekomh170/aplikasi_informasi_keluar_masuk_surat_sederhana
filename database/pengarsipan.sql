-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2020 pada 16.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengarsipan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi`
--

CREATE TABLE `aksi` (
  `id` char(2) NOT NULL,
  `aksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aksi`
--

INSERT INTO `aksi` (`id`, `aksi`) VALUES
('BR', 'Buatkan Resume'),
('S', 'Simpan'),
('SJ', 'Siapkan Jawaban'),
('SM', 'Supaya Menghadap'),
('TS', 'Tanggapan/Saran'),
('UK', 'Untuk Diketahui'),
('US', 'Untuk Diselesaikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `derajat`
--

CREATE TABLE `derajat` (
  `id` char(1) NOT NULL,
  `derajat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `derajat`
--

INSERT INTO `derajat` (`id`, `derajat`) VALUES
('B', 'Biasa'),
('K', 'Kilat'),
('S', 'Segera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` char(2) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`) VALUES
('SK', 'Surat Keluar'),
('SM', 'Surat Masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` char(1) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
('B', 'Biasa'),
('N', 'Nota Dinas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` char(2) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `klasifikasi`) VALUES
('B', 'Biasa'),
('R', 'Rahasia'),
('SR', 'Sangat Rahasia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'reza', 'reza', 'admin'),
(4, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `no_disposisi` int(5) DEFAULT NULL,
  `dari` varchar(50) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `kepada` varchar(100) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `tanggal_terima` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `derajat` varchar(50) NOT NULL,
  `aksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `jenis`, `no_surat`, `no_disposisi`, `dari`, `perihal`, `kepada`, `tanggal_surat`, `tanggal_terima`, `isi`, `kategori`, `klasifikasi`, `derajat`, `aksi`) VALUES
(38, 'Surat Keluar', 'B/ND/145/I/2019/TEKINFOKOM', 145, 'UPT TEKINFOKOM', 'Undangan Rapat Evaluasi Pemutakhiran Data PDDIKTI Unhan TA. 2018', 'Seluruh Pejabat', '2019-01-03', '2019-01-10', 'Tanggal: 11 Januari 2019, Pukul: 09.00/Selesai, Tempat: Ruang Rapat, Pimpinan: Rektor', 'Nota Dinas', 'Biasa', 'Biasa', 'Buatkan Resume'),
(39, 'Surat Masuk', 'B/ND/374/XII/2018/RORENKU', 356, 'RORENKU', 'Peminjaman Jammer', 'KAPUSTEKINFOKOM', '2019-01-04', '2019-01-10', '', 'Nota Dinas', 'Biasa', 'Biasa', 'Simpan'),
(41, 'Surat Masuk', 'B/ND/374/XII/2018/LPPM', 142, 'LPPM', 'Rapat Mendadak', 'KAPUSTEKINFOKOM', '2019-01-03', '2019-01-10', 'Tanggal : 11 Januari 2019, Tempat : Ruang Rapat LPPM', 'Nota Dinas', 'Biasa', 'Kilat', 'Simpan'),
(43, 'Surat Masuk', '091283103812', 312312132, 'Aku', 'Kangen', 'wekqwkq', '2020-03-03', '2020-03-02', 'weqwqeq', '------------- Kategori Surat -------------', '---------------- Klasifikasi ----------------', '------------------ Derajat ------------------', '-------------------- Aksi --------------------'),
(44, 'Surat Masuk', '0123891231', 812301293, 'Reza', 'Masalah ', 'Kamu', '2020-03-11', '2020-03-18', 'Aku Sayang Mantan :v', 'Nota Dinas', 'Biasa', 'Biasa', 'Aksi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aksi`
--
ALTER TABLE `aksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `derajat`
--
ALTER TABLE `derajat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `jenis` (`jenis`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `derajat` (`derajat`) USING BTREE,
  ADD KEY `klasifikasi` (`klasifikasi`),
  ADD KEY `aksi` (`aksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
