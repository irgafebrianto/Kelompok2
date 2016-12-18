/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : kepegawaian

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-12-18 14:36:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_anaks
-- ----------------------------
DROP TABLE IF EXISTS `data_anaks`;
CREATE TABLE `data_anaks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttl_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenkel_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_anaks_pegawai_id_foreign` (`pegawai_id`),
  CONSTRAINT `data_anaks_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of data_anaks
-- ----------------------------
INSERT INTO `data_anaks` VALUES ('1', 'Hadi', 'Samarinda', 'Laki-laki', '2', '1', null, '2016-12-18 05:03:00', '2016-12-18 05:03:00');

-- ----------------------------
-- Table structure for data_kepegawaians
-- ----------------------------
DROP TABLE IF EXISTS `data_kepegawaians`;
CREATE TABLE `data_kepegawaians` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masa_kerja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_kepegawaians_pegawai_id_foreign` (`pegawai_id`),
  CONSTRAINT `data_kepegawaians_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of data_kepegawaians
-- ----------------------------

-- ----------------------------
-- Table structure for kenaikan_pangkats
-- ----------------------------
DROP TABLE IF EXISTS `kenaikan_pangkats`;
CREATE TABLE `kenaikan_pangkats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kenaikan_pangkats_pegawai_id_foreign` (`pegawai_id`),
  CONSTRAINT `kenaikan_pangkats_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of kenaikan_pangkats
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_11_28_015208_pegawais', '1');
INSERT INTO `migrations` VALUES ('4', '2016_11_28_015334_riwayat_pendidikans', '1');
INSERT INTO `migrations` VALUES ('5', '2016_11_28_015352_kenaikan_pangkats', '1');
INSERT INTO `migrations` VALUES ('6', '2016_11_28_015408_data_kepegawaians', '1');
INSERT INTO `migrations` VALUES ('7', '2016_11_28_015432_data_anaks', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pegawais
-- ----------------------------
DROP TABLE IF EXISTS `pegawais`;
CREATE TABLE `pegawais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pegawais
-- ----------------------------
INSERT INTO `pegawais` VALUES ('1', 'Hadi Saputra', '000010', 'Jl. Kemuning Rt 19 No 08 Loa bakung Samarinda', 'Samarinda 24 September 1995', 'Laki-Laki', 'Islam', 'WNI', '081351111464', 'A', 'Selena Gomes', 'Singer', null, '2016-12-17 12:53:00', '2016-12-18 05:49:59');
INSERT INTO `pegawais` VALUES ('2', 'Immanuel Valleri JRA', '00020', 'Samarinda', 'Samarinda 24 September 1995', 'Laki-Laki', 'Islam', 'WNA', '081351111464', 'A', 'Cita Citata', 'Penyanyi Dangdut', null, '2016-12-17 12:54:32', '2016-12-17 12:54:32');

-- ----------------------------
-- Table structure for riwayat_pendidikans
-- ----------------------------
DROP TABLE IF EXISTS `riwayat_pendidikans`;
CREATE TABLE `riwayat_pendidikans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pegawai_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riwayat_pendidikans_pegawai_id_foreign` (`pegawai_id`),
  CONSTRAINT `riwayat_pendidikans_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of riwayat_pendidikans
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Hadi Saputra', '$2y$10$BZfygK4tyADfnvE7kQDtwOusWapneKTJc3DJGVr8CkXNc9cR7XNJG', 'hadisaputrami@gmail.com', null, '2016-12-17 08:34:08', '2016-12-17 08:34:08', null);
SET FOREIGN_KEY_CHECKS=1;
