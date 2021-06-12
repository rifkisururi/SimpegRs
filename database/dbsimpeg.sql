-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 17.40
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
-- Database: `dbsimpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `nik` varchar(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `jenis_pengajuan` char(20) NOT NULL,
  `total_cuti` int(5) NOT NULL,
  `cuti_diajukan` int(5) NOT NULL,
  `sisa_cuti` int(5) NOT NULL,
  `kd_cuti` varchar(10) NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`nik`, `tgl_pengajuan`, `jenis_pengajuan`, `total_cuti`, `cuti_diajukan`, `sisa_cuti`, `kd_cuti`, `tgl_akhir`) VALUES
('12344', '2021-05-03', 'Cuti Tahunan', 12, 3, 9, 'C00021', '2021-05-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(20) NOT NULL,
  `nm_pegawai` char(50) NOT NULL,
  `j_kelamin` char(15) NOT NULL,
  `jenis_tenaga` varchar(20) NOT NULL,
  `unit_kerja` varchar(20) NOT NULL,
  `jbtn_skrng` varchar(30) NOT NULL,
  `st_pegawai` char(15) NOT NULL,
  `jbtn_baru` varchar(50) DEFAULT NULL,
  `tgl_kenaikan` date DEFAULT NULL,
  `alsn_jbtn` text DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `tempat_lhr` varchar(25) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pend_terakhir` varchar(50) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nm_pegawai`, `j_kelamin`, `jenis_tenaga`, `unit_kerja`, `jbtn_skrng`, `st_pegawai`, `jbtn_baru`, `tgl_kenaikan`, `alsn_jbtn`, `alamat`, `no_telp`, `tempat_lhr`, `tgl_lhr`, `pend_terakhir`, `tahun_lulus`) VALUES
('12344', 'oncom', 'Perempuan', 'Dokter', 'IGD', 'hggdk', 'Kontrak', NULL, NULL, NULL, 'hgjhghghffgd', '23456', 'jakarta', '2001-12-07', 'smp', 2007),
('123456', 'Tatang', 'Laki-Laki', 'Dokter', 'IGD', 'Kepala Ruangan IGD', 'Kontrak', NULL, NULL, NULL, 'Cikampek', '087654322346', 'Karawang', '2000-11-06', 'S1 Kedokteran', 2016),
('15 156 2 2020', 'ZAMRALITA SOVIE MAZZEIN', 'Perempuan', 'Dokter', 'IGD', 'Kepala Instalasi IGD', 'Kontrak', NULL, NULL, NULL, 'Jatisari', '088845678910', 'Karawang', '2001-10-05', 'S1 Kedokteran', 2020),
('2001100', 'tes', 'Laki-Laki', 'Dokter', 'IGD', 'gfgh', 'Kontrak', NULL, NULL, NULL, 'asffghh', '9802032', 'Karawang', '2000-11-08', 'SMA', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `nik` varchar(20) NOT NULL,
  `rumpun_diklat` varchar(50) NOT NULL,
  `nm_diklat` varchar(50) NOT NULL,
  `tempat_pelaksanaan` varchar(50) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jumlah_jam` varchar(15) NOT NULL,
  `kd_pelatihan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjadin`
--

CREATE TABLE `perjadin` (
  `nik` varchar(20) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `tempat_dinas` varchar(50) NOT NULL,
  `alsn_perjadin` text NOT NULL,
  `kd_perjadin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perjadin`
--

INSERT INTO `perjadin` (`nik`, `tgl_berangkat`, `tgl_pulang`, `tempat_dinas`, `alsn_perjadin`, `kd_perjadin`) VALUES
('12344', '2021-02-13', '2021-02-14', 'Bappeda Karawang', 'Input Rencana Kerja Tahun 2021', 'P001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana_peng`
--

CREATE TABLE `rencana_peng` (
  `program` varchar(50) NOT NULL,
  `volume` int(10) NOT NULL,
  `satuan` char(15) NOT NULL,
  `harga_satuan` int(15) NOT NULL,
  `jmlh` int(15) NOT NULL,
  `total` int(15) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `kd_program` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rencana_peng`
--

INSERT INTO `rencana_peng` (`program`, `volume`, `satuan`, `harga_satuan`, `jmlh`, `total`, `nik`, `kd_program`) VALUES
('Umroh', 1, 'Orang', 26000000, 26000000, NULL, '12344', 'PR001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rotasi`
--

CREATE TABLE `rotasi` (
  `nik` varchar(20) NOT NULL,
  `uk_sblm` varchar(30) NOT NULL,
  `uk_sesudah` varchar(30) NOT NULL,
  `kd_rotasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rotasi`
--

INSERT INTO `rotasi` (`nik`, `uk_sblm`, `uk_sesudah`, `kd_rotasi`) VALUES
('12344', 'IPSRS', 'Manajemen', 'R001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sovie', 'sovie.mazzein@gmail.com', NULL, '$2y$10$4NhkMaHALGrKzEOLUp5FP.yCAiUOkwJfR6adHvLaDxZsRi.RfqsMq', NULL, '2021-04-02 22:19:06', '2021-04-02 22:19:06'),
(2, 'Yessi Mawarini', 'admin2@gmail.com', NULL, '$2y$10$VURcDU1NKFrwpbSQvmnaXOEHy7ZMu/ra8p8Xxgwn5vIM8r94NvCcq', NULL, '2021-04-11 21:51:15', '2021-04-11 21:51:15'),
(3, 'Falilah', 'admin3@gmail.com', NULL, '$2y$10$4uRxAuI2/r4gFeW4RHPqTeG.mBNrIdG3DavFiF4ZVgEodJnfOAMSa', NULL, '2021-04-11 21:52:30', '2021-04-11 21:52:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`kd_cuti`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`kd_pelatihan`);

--
-- Indeks untuk tabel `perjadin`
--
ALTER TABLE `perjadin`
  ADD PRIMARY KEY (`kd_perjadin`);

--
-- Indeks untuk tabel `rencana_peng`
--
ALTER TABLE `rencana_peng`
  ADD PRIMARY KEY (`kd_program`);

--
-- Indeks untuk tabel `rotasi`
--
ALTER TABLE `rotasi`
  ADD PRIMARY KEY (`kd_rotasi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
