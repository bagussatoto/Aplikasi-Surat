-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 06.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kodesurat`
--

CREATE TABLE `tb_kodesurat` (
  `kode` varchar(2) NOT NULL,
  `n1` varchar(7) NOT NULL,
  `n2` varchar(7) NOT NULL,
  `n3` varchar(7) NOT NULL,
  `n4` varchar(7) NOT NULL,
  `n5` varchar(7) NOT NULL,
  `n6` varchar(7) NOT NULL,
  `n7` varchar(7) NOT NULL,
  `n8` varchar(7) NOT NULL,
  `n9` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kodesurat`
--

INSERT INTO `tb_kodesurat` (`kode`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`) VALUES
('1', '518.32', '474.4', '331.1', '182', '671', '522', '541', '330', '431');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id_pejabat`, `nama`, `jabatan`) VALUES
(1, 'YONGKI, S.Kom., M.Kom', 'Kepala Desa'),
(2, 'Dimas Ridho, SH.', 'Sekretaris Desa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Sekretaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Yongki Rudianto', 'admin', '1', 'Administrator'),
(2, 'Dimas', 'user', '1', 'Sekretaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_desa`, `alamat`, `kecamatan`, `kabupaten`) VALUES
(1, 'YR Mediatama', 'RT 03 RW 01 Kode Pos 59162', 'Gembong', 'Pati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` varchar(11) NOT NULL,
  `namapetugas` varchar(50) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `keperluan` text NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `ttd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warga`
--

CREATE TABLE `tb_warga` (
  `NIK` varchar(30) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JK` varchar(30) NOT NULL,
  `TMPT_LHR` varchar(30) NOT NULL,
  `TGL_LHR` varchar(20) NOT NULL,
  `AGAMA` varchar(30) NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `PEKERJAAN` varchar(30) NOT NULL,
  `NO_KK` varchar(30) NOT NULL,
  `ALAMAT` varchar(30) NOT NULL,
  `NO_RT` int(11) NOT NULL,
  `NO_RW` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kodesurat`
--
ALTER TABLE `tb_kodesurat`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
