/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : testdb

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 05/09/2022 10:29:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (15, 'Arka', 'L', '2022-08-29', '0812222222', 'Jalan raya', 'kasir', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `karyawan` VALUES (17, 'Daffa', 'L', '2022-08-29', '0812222222', 'Jalan raya', 'kasir', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `karyawan` VALUES (18, 'Adit', 'L', '2022-08-29', '0812222222', 'Jalan raya', 'kasir', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `karyawan` VALUES (19, 'Rafli', 'L', '2022-08-29', '0812222222', 'Jalan raya', 'kasir', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `karyawan` VALUES (20, 'Klose', 'L', '2022-08-29', '0812222222', 'Jalan raya', 'kasir', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES (1, 'Park ji sung', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (2, 'Bambang Pamungkas', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (3, 'Ronaldo Wait', 'P', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (4, 'Samsudin', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (5, 'Zaenal Arif', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (6, 'RIcard', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (7, 'Udin', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (8, 'Asep', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (9, 'Saepuloh', 'L', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (10, 'Tuti', 'P', '0812344553', NULL, NULL);
INSERT INTO `pelanggan` VALUES (10, 'Brownie', 'P', '0812344553', NOW(), NOW());

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_produk` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_produk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kode_produk`(`kode_produk` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (1, 'B0001', 'Keyboard', 200, 1000, NULL, NULL);
INSERT INTO `produk` VALUES (2, 'B0002', 'Mouse', 300, 2000, NULL, NULL);
INSERT INTO `produk` VALUES (3, 'B0003', 'Monitor', 20, 3000, NULL, NULL);
INSERT INTO `produk` VALUES (4, 'B0004', 'Laptop', 80, 4000, NULL, NULL);
INSERT INTO `produk` VALUES (5, 'B0005', 'Termos', 90, 5000, NULL, NULL);
INSERT INTO `produk` VALUES (6, 'B0006', 'TV', 55, 6000, NULL, NULL);
INSERT INTO `produk` VALUES (7, 'B0007', 'Speaker', 88, 7000, NULL, NULL);
INSERT INTO `produk` VALUES (8, 'B0008', 'Kompor', 54, 8000, NULL, NULL);
INSERT INTO `produk` VALUES (9, 'B0009', 'HP', 20, 9000, NULL, NULL);
INSERT INTO `produk` VALUES (10, 'B0010', 'Mesin Cuci', 77, 10000, NULL, NULL);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_produk` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `id_karyawan` int NOT NULL,
  `jumlah_produk` int NOT NULL,
  `harga_total` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `update_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_produk`(`id_produk` ASC) USING BTREE,
  INDEX `id_pelanggan`(`id_pelanggan` ASC) USING BTREE,
  INDEX `id_karyawan`(`id_karyawan` ASC) USING BTREE,
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;