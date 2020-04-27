-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 09:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

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
-- Table structure for table `file_pkwt`
--

CREATE TABLE `file_pkwt` (
  `idFile` int(11) NOT NULL,
  `tokenPKWT` varchar(20) NOT NULL,
  `originalFileName` varchar(100) NOT NULL,
  `onServerFileName` varchar(100) NOT NULL,
  `jenisDoc` int(11) NOT NULL,
  `verifikasi` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_pkwt`
--

INSERT INTO `file_pkwt` (`idFile`, `tokenPKWT`, `originalFileName`, `onServerFileName`, `jenisDoc`, `verifikasi`, `keterangan`, `updated_at`, `created_at`) VALUES
(21, '0ZUvnH', 'biodata.txt', '1568607956.txt', 1, 1, NULL, '2019-09-19 02:08:49', '2019-09-16 04:25:56'),
(22, 'ux43xi', 'biodata.txt', '1569384329.txt', 1, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-16 06:06:24'),
(23, 'ux43xi', 'comt.txt', '1569384335.txt', 2, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-16 06:07:12'),
(24, 'ux43xi', 'biodata.txt', '1569395664.txt', 3, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-16 06:07:51'),
(25, 'ux43xi', 'biodata.txt', '1569394903.txt', 4, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-25 07:01:38'),
(26, 'ux43xi', 'biodata.txt', '1569394906.txt', 7, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-25 07:01:46'),
(27, 'ux43xi', 'comt.txt', '1569394912.txt', 6, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-25 07:01:52'),
(28, 'ux43xi', 'comt.txt', '1569395227.txt', 5, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-25 07:07:04'),
(29, 'ux43xi', 'comt.txt', '1569395232.txt', 8, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-25 07:07:12'),
(30, 'ux43xi', 'biodata.txt', '1569396246.txt', 9, 3, 'pkwt sudah dapata', '2019-10-02 02:14:23', '2019-09-25 07:07:16'),
(31, 'dGPTpb', 'biodata.txt', '1569463645.txt', 1, 1, '', '2019-09-26 02:07:25', '2019-09-26 02:07:25'),
(32, 'dGPTpb', 'comt.txt', '1569463648.txt', 2, 1, '', '2019-09-26 02:07:28', '2019-09-26 02:07:28'),
(33, 'dGPTpb', 'tempat wisata.txt', '1569463650.txt', 3, 1, '', '2019-09-26 02:07:30', '2019-09-26 02:07:30'),
(34, 'xCsaGw', 'biodata.txt', '1569999744.txt', 28, 1, 'ftyjfjf', '2019-10-02 07:02:24', '2019-10-02 03:29:23'),
(35, 'WOc9mR', 'comt.txt', '1569997684.txt', 47, 1, '', '2019-10-02 06:28:04', '2019-10-02 06:28:04'),
(36, 'mE77It', 'biodata.txt', '1569998764.txt', 1, 1, '', '2019-10-02 06:46:04', '2019-10-02 06:46:04'),
(37, 'Qc63Ib', 'comt.txt', '1570001383.txt', 28, 1, 'dokument gjg kurang', '2019-10-02 07:29:43', '2019-10-02 06:46:56'),
(38, 'xCsaGw', 'joomla.txt', '1569999746.txt', 29, 1, 'ftyjfjf', '2019-10-02 07:02:26', '2019-10-02 07:01:25'),
(39, 'xCsaGw', 'comt.txt', '1569999748.txt', 30, 1, '', '2019-10-02 07:02:28', '2019-10-02 07:02:28'),
(40, 'PDLq1b', 'JOYA COVER.docx', '1571015460.docx', 1, 1, 'dokoumen xxx kurang.. tolong uipload kembali', '2019-10-14 01:13:24', '2019-10-14 01:10:58'),
(41, 'uQwPPT', 'Get Data Hargafix.docx', '1587971133.docx', 1, 3, '1. tolong uplad berkas lainnya\r\n2. file perjanjian kinerja salah', '2020-04-27 07:09:46', '2020-04-27 07:05:34'),
(42, 'uQwPPT', 'Get Data Hargafix.docx', '1587971142.docx', 2, 1, '1. tolong uplad berkas lainnya\r\n2. file perjanjian kinerja salah', '2020-04-27 07:09:46', '2020-04-27 07:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `kode_status`
--

CREATE TABLE `kode_status` (
  `kodeStatus` int(11) NOT NULL,
  `namaStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_status`
--

INSERT INTO `kode_status` (`kodeStatus`, `namaStatus`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Perbaikan'),
(3, 'Sudah Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `list_perusahaan`
--

CREATE TABLE `list_perusahaan` (
  `idPerusahaan` int(11) NOT NULL,
  `namaPerusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_perusahaan`
--

INSERT INTO `list_perusahaan` (`idPerusahaan`, `namaPerusahaan`) VALUES
(1, 'Perusahaan A'),
(2, 'Perusahaan B');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_01_073718_create_pelamar_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
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
-- Table structure for table `pkwt`
--

CREATE TABLE `pkwt` (
  `idPKWT` int(11) NOT NULL,
  `idPerusahaan` int(11) NOT NULL,
  `aliasPKWT` varchar(100) NOT NULL,
  `tokenPKWT` varchar(20) NOT NULL,
  `kodeStatus` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `isKontrak` int(11) NOT NULL,
  `isPKWT` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkwt`
--

INSERT INTO `pkwt` (`idPKWT`, `idPerusahaan`, `aliasPKWT`, `tokenPKWT`, `kodeStatus`, `keterangan`, `isKontrak`, `isPKWT`, `created_at`, `updated_at`) VALUES
(2, 1, 'Pendaftaran Pemborongan Proyek ABCD ', '0ZUvnH', 1, '', 0, 1, '2019-09-16 03:55:14', '2019-09-16 03:55:14'),
(3, 1, 'mendaftarPKWT Pemborongan', 'ux43xi', 3, 'pkwt sudah dapata', 0, 1, '2019-09-16 06:06:24', '2019-10-02 02:14:23'),
(4, 1, 'mendaftarPKWT Pemborongan', 'dGPTpb', 1, '', 0, 1, '2019-09-26 02:07:25', '2019-09-26 02:07:30'),
(5, 1, 'ga', 'xCsaGw', 1, 'ftyjfjf', 0, 1, '2019-10-02 03:29:23', '2019-10-02 07:02:28'),
(6, 1, 'Ts', 'WOc9mR', 1, '', 1, 0, '2019-10-02 06:28:04', '2019-10-02 06:28:04'),
(7, 1, 'pkwt', 'mE77It', 1, '', 1, 0, '2019-10-02 06:46:04', '2019-10-02 06:46:04'),
(8, 1, 'pkwt2', 'Qc63Ib', 1, 'dokument gjg kurang', 0, 1, '2019-10-02 06:46:56', '2019-10-02 07:29:43'),
(9, 1, 'test', 'PDLq1b', 2, 'dokoumen xxx kurang.. tolong uipload kembali', 1, 0, '2019-10-14 01:10:58', '2019-10-14 01:13:24'),
(10, 1, 'Pendaftaran Penimbunan SD 1 Malili', 'uQwPPT', 2, '1. tolong uplad berkas lainnya\r\n2. file perjanjian kinerja salah', 1, 0, '2020-04-27 07:05:34', '2020-04-27 07:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `pkwt_file_jenis`
--

CREATE TABLE `pkwt_file_jenis` (
  `jenisDoc` int(11) NOT NULL,
  `namaJenis` varchar(100) NOT NULL,
  `isPKWTJasa` int(11) NOT NULL,
  `isPKWTBorong` int(11) NOT NULL,
  `isKontrakJasa` int(11) NOT NULL,
  `isKontrakBorong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkwt_file_jenis`
--

INSERT INTO `pkwt_file_jenis` (`jenisDoc`, `namaJenis`, `isPKWTJasa`, `isPKWTBorong`, `isKontrakJasa`, `isKontrakBorong`) VALUES
(1, 'Surat Permohonan', 0, 0, 0, 1),
(2, 'Foto copy perjanjian kerja (kontrak)', 0, 0, 0, 1),
(3, 'Rekap nama dan jabatan pekerja/ buruh yang di sahkan oleh bpjs ketenagakerjaan/ bpjs kesehatan ', 0, 0, 0, 1),
(4, 'Draf perjanjian kerja yang di lampirkan dalam permohonan pendaftaran perjanjian kerja penyedia jasa', 0, 0, 0, 1),
(5, 'Foto copy bukti pendaftaran pernjanjian penyedia jasa pekerja/buruh', 0, 0, 0, 1),
(6, 'Foto copy ktp', 0, 0, 0, 1),
(7, 'Foto copy wlk', 0, 0, 0, 1),
(8, 'Foto copy rekomendasi bpjs ketenagakerjaan dan bpjs kesehatan', 0, 0, 0, 1),
(9, 'Foto copy tanda terima kontrak dari perusahaan kepada pekerja/buruh', 0, 0, 0, 1),
(28, 'Surat Permohonan', 1, 0, 0, 0),
(29, 'Perjanjian Kerja', 1, 0, 0, 0),
(30, 'Rekap Nama dan Jabatan Pekerja / Buruh yang di Sahkan oleh BPJD Ketenagakerjaan / BPJS Kesehatan', 1, 0, 0, 0),
(31, 'Draf Perjanjian Kerja yang di Lampirkan dalam Permohonan Pendaftaran Perjanjian Kerja Penyedia Jasa', 1, 0, 0, 0),
(32, 'Bukti Pendaftaran Perjanjian Penyedia Jasa Pekerja/Buruh', 1, 0, 0, 0),
(33, 'KTP', 1, 0, 0, 0),
(34, 'WLK', 1, 0, 0, 0),
(35, 'Rekomendasi BPJS Ketenagakerjaan dan BPJS Kesehatan', 1, 0, 0, 0),
(36, 'Tanda Terima Kontrak dari Perusahaan kepada pekerja/buruh', 1, 0, 0, 0),
(37, 'Surat Permohonan di Tujukan ke Dinas Penanaman Modal dan PTSP', 0, 1, 0, 0),
(38, 'Bukti Pendaftaran Perjanjian Pemborongan Pekerjaan', 0, 1, 0, 0),
(39, 'Rekap Nama dan Jabatan Pekerja/Buruh yang di sahkan oleh BPJS Ketenagakerjaan / BPJS Kesehatan', 0, 1, 0, 0),
(40, 'Rekomendasi BPJS Ketenagakerjaan dan BPJS Kesehatan', 0, 1, 0, 0),
(41, 'Perjanjian Kerja antara Perusahaan dengan pekerja /buruh', 0, 1, 0, 0),
(42, 'SK Pengangkatan sebagai Karyawan Tetap (PKWTT)', 0, 1, 0, 0),
(43, 'Wajib Lapor Ketenagakerjaan (WLK)', 0, 1, 0, 0),
(44, 'Kartu Tanda Penduduk (KTP)', 0, 1, 0, 0),
(45, 'Tanda Terima Kontrak dari Perusahaan kepada pekerja/buruh', 0, 1, 0, 0),
(47, 'Surat Permohonan', 0, 0, 1, 0),
(48, 'Perjanjian Penyedia Jasa Pekerja/ Buruh ', 0, 0, 1, 0),
(49, 'Surat Izin Usaha', 0, 0, 1, 0),
(50, 'Draf Perjanjian Kerja antara perusahaan dengan pekerja / buruh', 0, 0, 1, 0),
(51, 'Akta Pendirian dan Anggaran Dasar Persahaan ', 0, 0, 1, 0),
(52, 'Bukti Pengesahan sebagai badan hukum (PT)', 0, 0, 1, 0),
(53, 'Tanda Daftar Perusahaan', 0, 0, 1, 0),
(54, 'Bukti Wajib Lapor Ketenagakerjaan', 0, 0, 1, 0),
(55, 'Surat Izin Operasional Perusaaan penyedia jasa pekerja/buruh', 0, 0, 1, 0),
(56, 'Keterangan Domisili Perusahaan ', 0, 0, 1, 0),
(57, 'NPWP Perusahaan ', 0, 0, 1, 0),
(58, 'File Tambahan', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jenis`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PT Heri Aditya', 'adityaheri@yahoo.com', NULL, '$2y$10$V9YLuGvk2SNxG5V2lxr/XO5tZjTyc2DU7P.SmsY3V5fb.XD2A.PPm', '1', NULL, '2019-09-09 18:21:36', '2019-09-09 18:21:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_pkwt`
--
ALTER TABLE `file_pkwt`
  ADD PRIMARY KEY (`idFile`),
  ADD KEY `tokenPKWT` (`tokenPKWT`),
  ADD KEY `jenisDoc` (`jenisDoc`),
  ADD KEY `verifikasi` (`verifikasi`);

--
-- Indexes for table `kode_status`
--
ALTER TABLE `kode_status`
  ADD PRIMARY KEY (`kodeStatus`);

--
-- Indexes for table `list_perusahaan`
--
ALTER TABLE `list_perusahaan`
  ADD PRIMARY KEY (`idPerusahaan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkwt`
--
ALTER TABLE `pkwt`
  ADD PRIMARY KEY (`idPKWT`),
  ADD UNIQUE KEY `tokenPKWT` (`tokenPKWT`),
  ADD KEY `kodeStatus` (`kodeStatus`),
  ADD KEY `idPerusahaan` (`idPerusahaan`);

--
-- Indexes for table `pkwt_file_jenis`
--
ALTER TABLE `pkwt_file_jenis`
  ADD PRIMARY KEY (`jenisDoc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_pkwt`
--
ALTER TABLE `file_pkwt`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kode_status`
--
ALTER TABLE `kode_status`
  MODIFY `kodeStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_perusahaan`
--
ALTER TABLE `list_perusahaan`
  MODIFY `idPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pkwt`
--
ALTER TABLE `pkwt`
  MODIFY `idPKWT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pkwt_file_jenis`
--
ALTER TABLE `pkwt_file_jenis`
  MODIFY `jenisDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_pkwt`
--
ALTER TABLE `file_pkwt`
  ADD CONSTRAINT `file_pkwt_ibfk_1` FOREIGN KEY (`tokenPKWT`) REFERENCES `pkwt` (`tokenPKWT`),
  ADD CONSTRAINT `file_pkwt_ibfk_2` FOREIGN KEY (`jenisDoc`) REFERENCES `pkwt_file_jenis` (`jenisDoc`),
  ADD CONSTRAINT `file_pkwt_ibfk_3` FOREIGN KEY (`verifikasi`) REFERENCES `kode_status` (`kodeStatus`);

--
-- Constraints for table `pkwt`
--
ALTER TABLE `pkwt`
  ADD CONSTRAINT `pkwt_ibfk_1` FOREIGN KEY (`kodeStatus`) REFERENCES `kode_status` (`kodeStatus`),
  ADD CONSTRAINT `pkwt_ibfk_2` FOREIGN KEY (`idPerusahaan`) REFERENCES `list_perusahaan` (`idPerusahaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
