-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 01 Okt 2021 pada 08.03
-- Versi server: 8.0.26
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_informasi_kema_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aksi`
--

DROP TABLE IF EXISTS `tb_aksi`;
CREATE TABLE IF NOT EXISTS `tb_aksi` (
  `id` char(2) NOT NULL,
  `aksi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_aksi`
--

INSERT INTO `tb_aksi` (`id`, `aksi`) VALUES
('BR', 'Buatkan Resume'),
('S', 'Simpan'),
('SJ', 'Siapkan Jawaban'),
('SM', 'Supaya Menghadap'),
('TS', 'Tanggapan/Saran'),
('UK', 'Untuk Diketahui'),
('US', 'Untuk Diselesaikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

DROP TABLE IF EXISTS `tb_jenis`;
CREATE TABLE IF NOT EXISTS `tb_jenis` (
  `id` char(2) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`id`, `jenis`) VALUES
('SK', 'Surat Keluar'),
('SM', 'Surat Masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('Admin','User','Pegawai') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `email`, `password`, `role`) VALUES
(1, 'ekomh13@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(2, 'akbar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'User'),
(3, 'pendysaputra12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pegawai'),
(4, 'pendysaputra20@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

DROP TABLE IF EXISTS `tb_surat`;
CREATE TABLE IF NOT EXISTS `tb_surat` (
  `id_surat` int NOT NULL AUTO_INCREMENT,
  `no_surat` varchar(50) DEFAULT NULL,
  `no_disposisi` int DEFAULT NULL,
  `dari` varchar(50) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `kepada` varchar(100) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `tanggal_terima` date DEFAULT NULL,
  `isi` text,
  `kategori` enum('Biasa','Nota Dinas') NOT NULL,
  `klasifikasi` enum('Biasa','Rahasia','Sangat Rahasia') NOT NULL,
  `derajat` enum('Biasa','Kilat','Segera') NOT NULL,
  `aksi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`),
  KEY `aksi` (`aksi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `no_surat`, `no_disposisi`, `dari`, `perihal`, `kepada`, `tanggal_surat`, `tanggal_terima`, `isi`, `kategori`, `klasifikasi`, `derajat`, `aksi`) VALUES
(1, 'B/ND/145/I/2019/TEKINFOKOM', 145, 'UPT TEKINFOKOM', 'Undangan Rapat Evaluasi Pemutakhiran Data PDDIKTI Unhan TA. 2018', 'Seluruh Pejabat', '2019-01-03', '2019-01-10', 'Tanggal: 11 Januari 2019, Pukul: 09.00/Selesai, Tempat: Ruang Rapat, Pimpinan: Rektor', 'Nota Dinas', 'Biasa', 'Biasa', 'Buatkan Resume'),
(2, 'B/ND/374/XII/2018/RORENKU', 356, 'RORENKU', 'Peminjaman Jammer', 'KAPUSTEKINFOKOM', '2019-01-04', '2019-01-10', '', 'Nota Dinas', 'Biasa', 'Biasa', 'Simpan'),
(3, 'B/ND/374/XII/2018/LPPM', 142, 'LPPM', 'Rapat Mendadak', 'KAPUSTEKINFOKOM', '2019-01-03', '2019-01-10', 'Tanggal : 11 Januari 2019, Tempat : Ruang Rapat LPPM', 'Nota Dinas', 'Biasa', 'Kilat', 'Simpan'),
(4, 'TEKNOLOGIINFORMASI', 233, 'Eko', 'Evaluasi NIlai Mahasiswa', 'REKTOR PEMIMPIN', '2020-08-16', '2020-08-26', 'Tanggal: 16 Agustus 2020, Pukul: 09.00/Selesai, Tempat: Ruang Rapat, Pimpinan: Rektor', 'Biasa', 'Rahasia', 'Biasa', 'Simpan'),
(5, '2313123123131', 2, 'Eko', 'qweqq', 'qweqweqeqw', '2020-08-16', '2020-08-26', 'kjkjdjajdada', 'Biasa', 'Biasa', 'Biasa', 'Buatkan Resume'),
(6, 'ASAPASPAS', 2, 'Eko', 'qweqq', 'qweqweqeqw', '2020-08-16', '2020-08-26', 'ewqeqwew', 'Biasa', 'Biasa', 'Biasa', 'Buatkan Resume'),
(7, 'COASDA', 10, 'REKTORSDA', 'WOEKQE', 'QWEKQEKQ', '2020-08-20', '2020-08-20', 'DSADASDAS', '', 'Rahasia', 'Kilat', 'Buatkan Resume');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

DROP TABLE IF EXISTS `tb_surat_keluar`;
CREATE TABLE IF NOT EXISTS `tb_surat_keluar` (
  `id_surat_keluar` varchar(50) NOT NULL,
  `id_surat` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`id_surat_keluar`, `id_surat`, `jenis`) VALUES
('SRT-KLR-0', '1', 'SURAT KELUAR'),
('SRT-KLR-1', '4', 'SURAT KELUAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk`
--

DROP TABLE IF EXISTS `tb_surat_masuk`;
CREATE TABLE IF NOT EXISTS `tb_surat_masuk` (
  `id_surat_masuk` varchar(50) NOT NULL,
  `id_surat` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat_masuk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`id_surat_masuk`, `id_surat`, `jenis`) VALUES
('SRT-MSK-0', '2', 'SURAT MASUK'),
('SRT-MSK-1', '1', 'SURAT MASUK'),
('SRT-MSK-2', '7', 'SURAT MASUK'),
('SRT-MSK-3', '3', 'SURAT MASUK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
