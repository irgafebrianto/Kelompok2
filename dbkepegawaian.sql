-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 07:27 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anaks`
--

CREATE TABLE IF NOT EXISTS `data_anaks` (
  `id` int(10) unsigned NOT NULL,
  `nama_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenkel_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_anaks`
--

INSERT INTO `data_anaks` (`id`, `nama_anak`, `ttl_anak`, `jenkel_anak`, `anak_ke`, `pegawai_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'justin bieber', 'samarinda', 'laki', '1', 1, NULL, '2016-12-12 05:42:26', '2016-12-12 05:42:26'),
(2, 'chelsea islan', 'samarinda', 'perempuan', '3', 2, NULL, '2016-12-12 05:44:10', '2016-12-12 05:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `data_kepegawaians`
--

CREATE TABLE IF NOT EXISTS `data_kepegawaians` (
  `id` int(10) unsigned NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masa_kerja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_kepegawaians`
--

INSERT INTO `data_kepegawaians` (`id`, `jabatan`, `golongan`, `status`, `pangkat`, `masa_kerja`, `pegawai_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'aktif', 'a', 'aktif', '1', '1', 1, NULL, '2016-12-12 11:36:16', '2016-12-12 11:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `kenaikan_pangkats`
--

CREATE TABLE IF NOT EXISTS `kenaikan_pangkats` (
  `id` int(10) unsigned NOT NULL,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` date NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tahun_naik` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kenaikan_pangkats`
--

INSERT INTO `kenaikan_pangkats` (`id`, `nip`, `golongan`, `tahun`, `pegawai_id`, `deleted_at`, `created_at`, `updated_at`, `tahun_naik`) VALUES
(1, '123123123', 'J', '2016-12-18', 1, NULL, '2016-12-17 15:19:20', '2016-12-17 15:19:20', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_28_015208_pegawais', 1),
('2016_11_28_015334_riwayat_pendidikans', 1),
('2016_11_28_015352_kenaikan_pangkats', 1),
('2016_11_28_015408_data_kepegawaians', 1),
('2016_11_28_015432_data_anaks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE IF NOT EXISTS `pegawais` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenkel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kebangsaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telpon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_istri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan_istri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama`, `nip`, `alamat`, `ttl`, `jenkel`, `agama`, `kebangsaan`, `telpon`, `golongan`, `nama_istri`, `pekerjaan_istri`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Immanuel Valerie Josephine Rombe Allo', '123123123', 'indonesia', 'as', 'j', 'Islam', 'INA', 'j', 'j', 'j', 'j', 1, NULL, '2016-12-12 05:41:34', '2016-12-17 11:40:25'),
(2, 'pak', 'l', 'l', 'l', 'l', 'l', 'l', 'll', 'l', 'l', 'l', 1, NULL, '2016-12-12 05:43:17', '2016-12-12 05:43:17'),
(3, 'hadi', '99999', 'samarinda', 'samarinda,01 desember 2011', 'laki-laki', 'Islam', 'Indonesia', '67467', 'a', 'selena gomez', 'artis', 1, NULL, '2016-12-12 11:33:47', '2016-12-12 11:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikans`
--

CREATE TABLE IF NOT EXISTS `riwayat_pendidikans` (
  `id` int(10) unsigned NOT NULL,
  `tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `riwayat_pendidikans`
--

INSERT INTO `riwayat_pendidikans` (`id`, `tahun`, `pendidikan`, `pegawai_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1996', 'SMA', 3, NULL, '2016-12-17 15:00:55', '2016-12-17 15:00:55'),
(2, '1998', 'S3', 1, NULL, '2016-12-17 15:21:21', '2016-12-17 15:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin1', '$2y$10$Xc1qnoCkzIevyG10Wp9qXeTqNr4iv/WlTxDDDvKVtZQVDqEYS6uua', 'admin1@gmail.com', NULL, '2016-11-30 08:03:54', '2016-11-30 08:03:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anaks`
--
ALTER TABLE `data_anaks`
  ADD PRIMARY KEY (`id`), ADD KEY `data_anaks_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `data_kepegawaians`
--
ALTER TABLE `data_kepegawaians`
  ADD PRIMARY KEY (`id`), ADD KEY `data_kepegawaians_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `kenaikan_pangkats`
--
ALTER TABLE `kenaikan_pangkats`
  ADD PRIMARY KEY (`id`), ADD KEY `kenaikan_pangkats_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`), ADD KEY `pegawais_user_id_foreign` (`user_id`);

--
-- Indexes for table `riwayat_pendidikans`
--
ALTER TABLE `riwayat_pendidikans`
  ADD PRIMARY KEY (`id`), ADD KEY `riwayat_pendidikans_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anaks`
--
ALTER TABLE `data_anaks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_kepegawaians`
--
ALTER TABLE `data_kepegawaians`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kenaikan_pangkats`
--
ALTER TABLE `kenaikan_pangkats`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `riwayat_pendidikans`
--
ALTER TABLE `riwayat_pendidikans`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anaks`
--
ALTER TABLE `data_anaks`
ADD CONSTRAINT `data_anaks_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_kepegawaians`
--
ALTER TABLE `data_kepegawaians`
ADD CONSTRAINT `data_kepegawaians_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kenaikan_pangkats`
--
ALTER TABLE `kenaikan_pangkats`
ADD CONSTRAINT `kenaikan_pangkats_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
ADD CONSTRAINT `pegawais_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_pendidikans`
--
ALTER TABLE `riwayat_pendidikans`
ADD CONSTRAINT `riwayat_pendidikans_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
