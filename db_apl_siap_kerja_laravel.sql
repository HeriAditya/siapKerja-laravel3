-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2019 pada 04.30
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apl_siap_kerja_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_pkwt`
--

CREATE TABLE `file_pkwt` (
  `idFile` int(11) NOT NULL,
  `tokenPKWT` varchar(20) NOT NULL,
  `originalFileName` varchar(100) NOT NULL,
  `onServerFileName` varchar(100) NOT NULL,
  `jenisDoc` int(11) NOT NULL,
  `verifikasi` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file_pkwt`
--

INSERT INTO `file_pkwt` (`idFile`, `tokenPKWT`, `originalFileName`, `onServerFileName`, `jenisDoc`, `verifikasi`, `keterangan`, `updated_at`, `created_at`) VALUES
(21, '0ZUvnH', 'biodata.txt', '1568607956.txt', 1, 1, NULL, '2019-09-19 02:08:49', '2019-09-16 04:25:56'),
(22, 'ux43xi', 'comt.txt', '1568614113.txt', 1, 1, 'file yang pertama kurang lengkapdfg', '2019-09-19 02:33:31', '2019-09-16 06:06:24'),
(23, 'ux43xi', 'comt.txt', '1568614032.txt', 2, 3, 'file yang pertama kurang lengkapdfg', '2019-09-19 02:33:31', '2019-09-16 06:07:12'),
(24, 'ux43xi', 'biodata.txt', '1568614071.txt', 3, 3, 'file yang pertama kurang lengkapdfg', '2019-09-19 02:33:31', '2019-09-16 06:07:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_status`
--

CREATE TABLE `kode_status` (
  `kodeStatus` int(11) NOT NULL,
  `namaStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_status`
--

INSERT INTO `kode_status` (`kodeStatus`, `namaStatus`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Perbaikan'),
(3, 'Sudah Terverifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_perusahaan`
--

CREATE TABLE `list_perusahaan` (
  `idPerusahaan` int(11) NOT NULL,
  `namaPerusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_perusahaan`
--

INSERT INTO `list_perusahaan` (`idPerusahaan`, `namaPerusahaan`) VALUES
(1, 'Perusahaan A'),
(2, 'Perusahaan B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_01_073718_create_pelamar_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkwt`
--

CREATE TABLE `pkwt` (
  `idPKWT` int(11) NOT NULL,
  `idPerusahaan` int(11) NOT NULL,
  `aliasPKWT` varchar(100) NOT NULL,
  `tokenPKWT` varchar(20) NOT NULL,
  `kodeStatus` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pkwt`
--

INSERT INTO `pkwt` (`idPKWT`, `idPerusahaan`, `aliasPKWT`, `tokenPKWT`, `kodeStatus`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 1, 'Pendaftaran Pemborongan Proyek ABCD ', '0ZUvnH', 1, '', '2019-09-16 03:55:14', '2019-09-16 03:55:14'),
(3, 1, 'mendaftarPKWT Pemborongan', 'ux43xi', 1, 'file yang pertama kurang lengkapdfg', '2019-09-16 06:06:24', '2019-09-19 02:33:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkwt_file_jenis`
--

CREATE TABLE `pkwt_file_jenis` (
  `jenisDoc` int(11) NOT NULL,
  `namaJenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pkwt_file_jenis`
--

INSERT INTO `pkwt_file_jenis` (`jenisDoc`, `namaJenis`) VALUES
(1, 'Surat Permohonan'),
(2, 'Perjanjian Pemborongan Pekerjaan yang Telah Ditandatangani Para Pihak Diatas Materai'),
(3, 'Foto copy bukti pelaporan jenis pekerjaan penunjang'),
(4, 'Foto copy surat izin usaha '),
(5, 'Foto copy akta pendirian dan anggaran dasar perusahaan'),
(6, 'Foto copy bukti pengesahaan sebagai badan hukum perseroan terbatas'),
(7, 'Foto copy tanda daftar perusahaan '),
(8, 'Foto copy bukti wajib lapor ketenagakerjaan (wlk)'),
(9, 'Foto copy NPWP perusahaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jenis`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PT Heri Aditya', 'adityaheri@yahoo.com', NULL, '$2y$10$V9YLuGvk2SNxG5V2lxr/XO5tZjTyc2DU7P.SmsY3V5fb.XD2A.PPm', '2', NULL, '2019-09-09 18:21:36', '2019-09-09 18:21:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file_pkwt`
--
ALTER TABLE `file_pkwt`
  ADD PRIMARY KEY (`idFile`),
  ADD KEY `tokenPKWT` (`tokenPKWT`),
  ADD KEY `jenisDoc` (`jenisDoc`),
  ADD KEY `verifikasi` (`verifikasi`);

--
-- Indeks untuk tabel `kode_status`
--
ALTER TABLE `kode_status`
  ADD PRIMARY KEY (`kodeStatus`);

--
-- Indeks untuk tabel `list_perusahaan`
--
ALTER TABLE `list_perusahaan`
  ADD PRIMARY KEY (`idPerusahaan`);

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
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pkwt`
--
ALTER TABLE `pkwt`
  ADD PRIMARY KEY (`idPKWT`),
  ADD UNIQUE KEY `tokenPKWT` (`tokenPKWT`),
  ADD KEY `kodeStatus` (`kodeStatus`),
  ADD KEY `idPerusahaan` (`idPerusahaan`);

--
-- Indeks untuk tabel `pkwt_file_jenis`
--
ALTER TABLE `pkwt_file_jenis`
  ADD PRIMARY KEY (`jenisDoc`);

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
-- AUTO_INCREMENT untuk tabel `file_pkwt`
--
ALTER TABLE `file_pkwt`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `kode_status`
--
ALTER TABLE `kode_status`
  MODIFY `kodeStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `list_perusahaan`
--
ALTER TABLE `list_perusahaan`
  MODIFY `idPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pkwt`
--
ALTER TABLE `pkwt`
  MODIFY `idPKWT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pkwt_file_jenis`
--
ALTER TABLE `pkwt_file_jenis`
  MODIFY `jenisDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `file_pkwt`
--
ALTER TABLE `file_pkwt`
  ADD CONSTRAINT `file_pkwt_ibfk_1` FOREIGN KEY (`tokenPKWT`) REFERENCES `pkwt` (`tokenPKWT`),
  ADD CONSTRAINT `file_pkwt_ibfk_2` FOREIGN KEY (`jenisDoc`) REFERENCES `pkwt_file_jenis` (`jenisDoc`),
  ADD CONSTRAINT `file_pkwt_ibfk_3` FOREIGN KEY (`verifikasi`) REFERENCES `kode_status` (`kodeStatus`);

--
-- Ketidakleluasaan untuk tabel `pkwt`
--
ALTER TABLE `pkwt`
  ADD CONSTRAINT `pkwt_ibfk_1` FOREIGN KEY (`kodeStatus`) REFERENCES `kode_status` (`kodeStatus`),
  ADD CONSTRAINT `pkwt_ibfk_2` FOREIGN KEY (`idPerusahaan`) REFERENCES `list_perusahaan` (`idPerusahaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
