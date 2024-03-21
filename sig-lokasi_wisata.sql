-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 04:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig-lokasi_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `updated_at`, `created_at`) VALUES
(1, 'lopo', '2023-10-12 08:16:37', '2023-10-12 08:16:37'),
(2, 'tempat parkir', '2023-10-12 08:17:10', '2023-10-12 08:17:10'),
(3, 'kamar mandi', '2023-10-12 08:17:25', '2023-10-12 08:17:25'),
(4, 'tempat duduk', '2023-10-12 08:17:41', '2023-10-12 08:17:41'),
(5, 'kafe', '2023-10-12 08:17:55', '2023-10-12 08:17:55'),
(6, 'tempat sampah', '2023-10-12 08:30:50', '2023-10-12 08:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `warna_fill` varchar(128) NOT NULL,
  `geojson` varchar(128) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `warna_fill`, `geojson`, `updated_at`, `created_at`) VALUES
(2, 'Landu Leko', '#ff05a3', 'Landu Leko_geojson_1697353732.geojson', '2023-10-14 23:08:52', '2023-10-07 18:12:31'),
(3, 'Rote Barat Daya', '#302dc8', 'Rote Barat Daya_geojson_1697354595.geojson', '2023-10-19 20:30:11', '2023-10-07 18:12:37'),
(9, 'Rote Timur', '#963684', 'Rote Timur_geojson_1697356687.geojson', '2023-10-14 23:58:07', '2023-10-10 08:42:03'),
(10, 'Ndao Nuse', '#a6118b', 'Ndao Nuse_geojson_1697353833.geojson', '2023-10-14 23:10:33', '2023-10-10 08:42:36'),
(11, 'Lobalain', '#0761e9', 'Lobalain_geojson_1697353863.geojson', '2023-10-14 23:11:03', '2023-10-10 08:42:50'),
(12, 'Rote Barat', '#09c6ec', 'Rote Barat_geojson_1697356408.geojson', '2023-10-14 23:53:29', '2023-10-10 08:43:37'),
(13, 'Rote Barat Laut', '#f0bd05', 'Rote Barat Laut_geojson_1697359483.geojson', '2023-10-19 20:30:03', '2023-10-10 08:44:09'),
(14, 'Rote Tegah', '#f50505', 'Rote Tegah_geojson_1697355936.geojson', '2023-10-14 23:45:36', '2023-10-10 08:44:46'),
(15, 'Rote Selatan', '#46eb00', 'Rote Selatan_geojson_1697356650.geojson', '2023-10-14 23:57:30', '2023-10-10 08:47:32'),
(17, 'Pantai Baru', '#000000', 'Pantai Baru_geojson_1697356549.geojson', '2023-10-14 23:55:49', '2023-10-10 11:03:33'),
(18, 'Loaholu', '#5f6d6c', 'Loaholu_geojson_1697358983.geojson', '2023-10-15 00:36:23', '2023-10-15 00:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `marker` varchar(128) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `gambar`, `marker`, `deskripsi`, `updated_at`, `created_at`) VALUES
(4, 'Wisata Alam', 'Wisata Alam_kGambar_1697352758.jpg', 'Wisata Alam_kMarker_1697771765.png', 'Adapun pengertian wisata alam sendiri adalah kegiatan perjalanan atau sebagian dari kegiatan tersebut yang dilakukan secara sukarela serta bersifat sementara untuk menikmati gejala keunikan dan keindahan alam di kawasan suaka margasatwa, taman nasional, taman hutan raya, dan taman wisata alam.', '2023-10-19 20:16:05', '2023-06-26 07:07:20'),
(8, 'Wisata Budaya', 'Wisata Budaya_kGambar_1697352897.jpg', 'Wisata Budaya_kMarker_1697771980.png', 'Deskripsi wisata budaya adalah deskripsi tentang tempat-tempat wisata yang terkait dengan budaya, sejarah, dan tradisi suatu daerah atau negara. Deskripsi ini mencakup informasi tentang tempat-tempat seperti museum, situs bersejarah, festival budaya, dan kegiatan budaya lainnya.', '2023-10-19 20:19:40', '2023-10-10 08:50:12'),
(9, 'Wisata Bahari', 'Wisata Bahari_kGambar_1697353038.jpg', 'Wisata Bahari_kMarker_1697772242.png', 'Wisata Bahari adalah seluruh kegiatan yang bersifat rekreasi yang aktifitasnya dilakukan pada media kelautan atau bahari dan meliputi daemh pantai, pulau-pulau sekitamya, serta kawasan lautan dalam pengertian pada permukaannya; dalamnya, ataupun pada dasarnya termasuk didalamnya taman laut.', '2023-10-19 20:24:02', '2023-10-10 08:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_wisata`
--

CREATE TABLE `lokasi_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `alamat` varchar(128) NOT NULL,
  `gambar` varchar(128) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lokasi_wisata`
--

INSERT INTO `lokasi_wisata` (`id`, `nama`, `kriteria_id`, `kecamatan_id`, `alamat`, `gambar`, `deskripsi`, `lat`, `lng`, `updated_at`, `created_at`) VALUES
(479, 'Telaga Nirwana', 4, 3, 'Rote Barat laut', '1_gambar_1696959701.jpg', NULL, '-10.91474', '122.91090', '2023-10-19 20:34:55', '2023-10-10 08:57:57'),
(480, 'Batu Termanu', 4, 14, 'Rote Tengah', '1_gambar_1696959893.jpg', 'lopo', '-10.67334', '123.11220', '2023-10-10 09:44:53', '2023-10-10 09:44:53'),
(481, 'Pantai Tiang Bendera', 4, 11, 'Lobalain', '1_gambar_1696960143.jpg', 'Tempat duduk', '-10.72541', '123.02868', '2023-10-10 09:49:03', '2023-10-10 09:49:03'),
(482, 'Pantai Lutubabatu', 4, 13, 'Rote Barat Laut', '1_gambar_1696960552.jpg', 'Tempat duduk', '-10.75672', '122.878', '2023-10-15 02:31:11', '2023-10-10 09:55:52'),
(483, 'Pantai batu pintu', 4, 12, 'Rote Barat', '1_gambar_1696961397.jpg', 'lopo, kamar mandi, tempat duduk', '-10.91516', '122.88212', '2023-10-10 10:09:57', '2023-10-10 10:09:57'),
(484, 'Pantai loedik', 4, 12, 'Rote Barat', '1_gambar_1696961743.jpg', 'lopo, tempat parkir', '-10.922671', '122.85911', '2023-10-10 10:15:43', '2023-10-10 10:15:43'),
(485, 'Pantai Bo,a', 4, 12, 'Rote Barat', '1_gambar_1696962195.jpg', NULL, '-10.93632', '122.84062', '2023-10-16 19:17:20', '2023-10-10 10:23:15'),
(486, 'pantai livulada', 4, 12, 'Rote Barat', '1_gambar_1696962426.jpg', 'lopo, kamar mandi, tempat parkir', '-10.92796', '122.83412', '2023-10-10 10:27:06', '2023-10-10 10:27:06'),
(487, 'Pantai Nemberala', 4, 12, 'Rote Barat', '1_gambar_1696962762.jpg', 'lopo, tempat duduk, kamar mandi', '-10.88995', '122.8226', '2023-10-10 10:32:43', '2023-10-10 10:32:43'),
(488, 'Pantai mulut seribu', 4, 2, 'landu leko', '1_gambar_1696998231.jpg', 'tempat duduk, kamar mandi, tempat parkir', '-10.56169', '123.372565', '2023-10-10 20:23:51', '2023-10-10 20:23:51'),
(489, 'Pantai oeseli', 4, 3, 'Rote Barat laut', '1_gambar_1696998486.jpg', 'lopo', '-10.91358', '122.90305', '2023-10-19 20:34:23', '2023-10-10 20:28:07'),
(490, 'Pantai Laviti', 9, 9, 'Rote Barat Daya', '1_gambar_1696998695.jpg', 'kamar mandi', '-10.52988', '123.41104', '2023-10-19 20:32:20', '2023-10-10 20:31:35'),
(491, 'pantai oesosole', 9, 9, 'Rote Timur', '1_gambar_1696999217.JPG', 'tempat duduk, lopo, tempat parkir, kafe', '-10.65921', '123.41589', '2023-10-10 20:40:17', '2023-10-10 20:40:17'),
(492, 'Pantai tongga', 4, 12, 'Rote Barat', '1_gambar_1696999428.jpg', 'tempat duduk', '-10.78227', '122.81086', '2023-10-10 20:43:49', '2023-10-10 20:43:49'),
(493, 'puncak asean', 4, 3, 'Rote Barat Daya', '1_gambar_1696999624.jpg', 'lopo', '-10.91863', '122.94443', '2023-10-10 20:47:05', '2023-10-10 20:47:05'),
(494, 'Telaga leleen landu', 4, 3, 'Rote Barat Daya', '1_gambar_1697000023.jpg', 'lopo', '-10.91783', '122.95325', '2023-10-10 20:53:43', '2023-10-10 20:53:43'),
(495, 'pantai leli', 8, 14, 'Rote tengah', '1_gambar_1697000491.jpg', 'lopo, tempat duduk, kamar mandi', '-10.69018', '123.07965', '2023-10-10 21:01:31', '2023-10-10 21:01:31'),
(496, 'bukit tangga 300', 8, 11, 'Lobalain', '1_gambar_1697000778.jpg', 'lopo, tempat duduk', '-10.84961', '123.07467', '2023-10-10 21:06:18', '2023-10-10 21:06:18'),
(497, 'pantai dombo', 4, 11, 'Lobalain', '1_gambar_1697001028.jpg', 'lopo', '-10.84631', '123.09404', '2023-10-10 21:10:28', '2023-10-10 21:10:28'),
(498, 'pantai tolanamon', 4, 11, 'Lobalain', '1_gambar_1697001219.jpg', 'lopo', '-10.83222', '123.19230', '2023-10-10 21:13:39', '2023-10-10 21:13:39'),
(499, 'mata air oemau', 8, 11, 'Lobalain', '1_gambar_1697001460.jpg', 'tempat duduk, kolam renang', '-10.74593', '123.05622', '2023-10-10 21:17:40', '2023-10-10 21:17:40'),
(500, 'pantai oebi,ik', 9, 15, 'rote selatan', '1_gambar_1697091360.jpg', 'lopo', '-10.82629', '123.22065', '2023-10-11 22:16:01', '2023-10-11 22:16:01'),
(501, 'pantai laladin', 9, 15, 'Rote Selatan', '1_gambar_1697091541.jpg', 'kamar mandi', '-10.82371', '123.21843', '2023-10-11 22:19:01', '2023-10-11 22:19:01'),
(502, 'hutan mangrove litianak', 8, 13, 'Rote Barat Laut', '1_gambar_1697091758.jpg', 'tempat duduk, kamara mandi', '-10.75325', '122.90135', '2023-10-11 22:22:38', '2023-10-11 22:22:38'),
(503, 'air terjun fakakain', 8, 11, 'Lobalain', '1_gambar_1697091953.jpg', 'lopo', '-10.79876', '123.14741', '2023-10-11 22:25:53', '2023-10-11 22:25:53'),
(504, 'kolam sulimatan', 8, 17, 'pantai baru', '1_gambar_1697092214.jpg', 'lopo', '-10.63465', '123.26491', '2023-10-11 22:30:14', '2023-10-11 22:30:14'),
(505, 'air terjun oeko,de', 9, 15, 'Rote Selatan', '1_gambar_1697092588.jpg', 'lopo', '-10.78756', '123.15852', '2023-10-11 22:36:28', '2023-10-11 22:36:28'),
(506, 'pantai oenggaut', 4, 12, 'Rote Barat', '1_gambar_1697093456.jpg', 'tempat duduk', '-10.89943', '122.82094', '2023-10-11 22:50:56', '2023-10-11 22:50:56'),
(507, 'pentai tunggaoen', 9, 12, 'Rote Barat', '1_gambar_1697093739.jpg', 'lopo', '-10.91554', '122.82433', '2023-10-11 22:55:39', '2023-10-11 22:55:39'),
(508, 'pantai oelolot', 4, 12, 'Rote Barat', '1_gambar_1697094031.jpg', 'tempat duduk', '-10.83240', '122.82647', '2023-10-11 23:00:31', '2023-10-11 23:00:31'),
(509, 'pantai nol kilometer', 9, 15, 'Rote Selatan', '1_gambar_1697367589.jpg', NULL, '-10.82854', '123.22278', '2023-10-15 02:59:49', '2023-10-15 02:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_wisata_fasilitas`
--

CREATE TABLE `lokasi_wisata_fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_wisata_id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lokasi_wisata_fasilitas`
--

INSERT INTO `lokasi_wisata_fasilitas` (`id`, `lokasi_wisata_id`, `fasilitas_id`, `updated_at`, `created_at`) VALUES
(1, 479, 1, '2023-10-12 08:19:49', '2023-10-12 08:19:49'),
(2, 480, 1, '2023-10-12 08:20:19', '2023-10-12 08:20:19'),
(3, 480, 2, '2023-10-12 08:20:19', '2023-10-12 08:20:19'),
(4, 480, 3, '2023-10-12 08:20:19', '2023-10-12 08:20:19'),
(5, 480, 4, '2023-10-12 08:20:19', '2023-10-12 08:20:19'),
(6, 480, 6, '2023-10-12 08:20:19', '2023-10-12 08:20:19'),
(7, 481, 1, '2023-10-12 08:20:46', '2023-10-12 08:20:46'),
(8, 481, 2, '2023-10-12 08:20:46', '2023-10-12 08:20:46'),
(9, 481, 3, '2023-10-12 08:20:47', '2023-10-12 08:20:47'),
(10, 481, 4, '2023-10-12 08:20:47', '2023-10-12 08:20:47'),
(11, 481, 5, '2023-10-12 08:20:47', '2023-10-12 08:20:47'),
(12, 481, 6, '2023-10-12 08:20:47', '2023-10-12 08:20:47'),
(13, 482, 1, '2023-10-12 08:23:43', '2023-10-12 08:23:43'),
(14, 482, 2, '2023-10-12 08:23:44', '2023-10-12 08:23:44'),
(15, 482, 4, '2023-10-12 08:23:44', '2023-10-12 08:23:44'),
(16, 483, 1, '2023-10-12 08:24:18', '2023-10-12 08:24:18'),
(17, 483, 2, '2023-10-12 08:24:18', '2023-10-12 08:24:18'),
(18, 483, 3, '2023-10-12 08:24:18', '2023-10-12 08:24:18'),
(19, 483, 4, '2023-10-12 08:24:18', '2023-10-12 08:24:18'),
(20, 483, 5, '2023-10-12 08:24:18', '2023-10-12 08:24:18'),
(21, 483, 6, '2023-10-12 08:24:18', '2023-10-12 08:24:18'),
(22, 484, 1, '2023-10-12 08:24:52', '2023-10-12 08:24:52'),
(23, 484, 2, '2023-10-12 08:24:52', '2023-10-12 08:24:52'),
(24, 484, 4, '2023-10-12 08:24:52', '2023-10-12 08:24:52'),
(25, 484, 6, '2023-10-12 08:24:52', '2023-10-12 08:24:52'),
(26, 485, 1, '2023-10-12 08:25:23', '2023-10-12 08:25:23'),
(27, 485, 2, '2023-10-12 08:25:23', '2023-10-12 08:25:23'),
(28, 485, 3, '2023-10-12 08:25:23', '2023-10-12 08:25:23'),
(29, 485, 4, '2023-10-12 08:25:23', '2023-10-12 08:25:23'),
(30, 485, 5, '2023-10-12 08:25:23', '2023-10-12 08:25:23'),
(31, 485, 6, '2023-10-12 08:25:23', '2023-10-12 08:25:23'),
(32, 486, 1, '2023-10-12 08:25:51', '2023-10-12 08:25:51'),
(33, 486, 2, '2023-10-12 08:25:51', '2023-10-12 08:25:51'),
(34, 486, 3, '2023-10-12 08:25:51', '2023-10-12 08:25:51'),
(35, 486, 4, '2023-10-12 08:25:52', '2023-10-12 08:25:52'),
(36, 486, 5, '2023-10-12 08:25:52', '2023-10-12 08:25:52'),
(37, 486, 6, '2023-10-12 08:25:52', '2023-10-12 08:25:52'),
(38, 487, 1, '2023-10-12 08:26:19', '2023-10-12 08:26:19'),
(39, 487, 2, '2023-10-12 08:26:20', '2023-10-12 08:26:20'),
(40, 487, 3, '2023-10-12 08:26:20', '2023-10-12 08:26:20'),
(41, 487, 4, '2023-10-12 08:26:20', '2023-10-12 08:26:20'),
(42, 487, 5, '2023-10-12 08:26:20', '2023-10-12 08:26:20'),
(43, 487, 6, '2023-10-12 08:26:20', '2023-10-12 08:26:20'),
(44, 488, 1, '2023-10-12 08:27:29', '2023-10-12 08:27:29'),
(45, 488, 2, '2023-10-12 08:27:29', '2023-10-12 08:27:29'),
(46, 488, 3, '2023-10-12 08:27:29', '2023-10-12 08:27:29'),
(47, 488, 4, '2023-10-12 08:27:29', '2023-10-12 08:27:29'),
(48, 488, 5, '2023-10-12 08:27:29', '2023-10-12 08:27:29'),
(49, 488, 6, '2023-10-12 08:27:29', '2023-10-12 08:27:29'),
(50, 489, 1, '2023-10-12 08:27:50', '2023-10-12 08:27:50'),
(51, 489, 4, '2023-10-12 08:27:50', '2023-10-12 08:27:50'),
(52, 490, 1, '2023-10-12 08:29:22', '2023-10-12 08:29:22'),
(53, 490, 2, '2023-10-12 08:29:22', '2023-10-12 08:29:22'),
(54, 490, 4, '2023-10-12 08:29:22', '2023-10-12 08:29:22'),
(55, 490, 6, '2023-10-12 08:29:22', '2023-10-12 08:29:22'),
(56, 491, 1, '2023-10-12 08:29:49', '2023-10-12 08:29:49'),
(57, 491, 2, '2023-10-12 08:29:49', '2023-10-12 08:29:49'),
(58, 491, 3, '2023-10-12 08:29:49', '2023-10-12 08:29:49'),
(59, 491, 4, '2023-10-12 08:29:49', '2023-10-12 08:29:49'),
(60, 491, 5, '2023-10-12 08:29:49', '2023-10-12 08:29:49'),
(61, 491, 6, '2023-10-12 08:29:49', '2023-10-12 08:29:49'),
(62, 492, 1, '2023-10-12 08:31:23', '2023-10-12 08:31:23'),
(63, 492, 2, '2023-10-12 08:31:23', '2023-10-12 08:31:23'),
(64, 492, 3, '2023-10-12 08:31:23', '2023-10-12 08:31:23'),
(65, 492, 4, '2023-10-12 08:31:23', '2023-10-12 08:31:23'),
(66, 492, 6, '2023-10-12 08:31:23', '2023-10-12 08:31:23'),
(67, 493, 1, '2023-10-12 08:31:55', '2023-10-12 08:31:55'),
(68, 493, 2, '2023-10-12 08:31:55', '2023-10-12 08:31:55'),
(69, 493, 3, '2023-10-12 08:31:55', '2023-10-12 08:31:55'),
(70, 493, 4, '2023-10-12 08:31:55', '2023-10-12 08:31:55'),
(71, 493, 6, '2023-10-12 08:31:55', '2023-10-12 08:31:55'),
(72, 494, 1, '2023-10-12 08:32:17', '2023-10-12 08:32:17'),
(73, 494, 4, '2023-10-12 08:32:17', '2023-10-12 08:32:17'),
(74, 494, 6, '2023-10-12 08:32:17', '2023-10-12 08:32:17'),
(75, 495, 1, '2023-10-12 08:32:44', '2023-10-12 08:32:44'),
(76, 495, 2, '2023-10-12 08:32:44', '2023-10-12 08:32:44'),
(77, 495, 3, '2023-10-12 08:32:44', '2023-10-12 08:32:44'),
(78, 495, 4, '2023-10-12 08:32:44', '2023-10-12 08:32:44'),
(79, 495, 5, '2023-10-12 08:32:44', '2023-10-12 08:32:44'),
(80, 495, 6, '2023-10-12 08:32:44', '2023-10-12 08:32:44'),
(81, 496, 1, '2023-10-12 08:33:24', '2023-10-12 08:33:24'),
(82, 496, 2, '2023-10-12 08:33:25', '2023-10-12 08:33:25'),
(83, 496, 3, '2023-10-12 08:33:25', '2023-10-12 08:33:25'),
(84, 496, 4, '2023-10-12 08:33:25', '2023-10-12 08:33:25'),
(85, 496, 5, '2023-10-12 08:33:25', '2023-10-12 08:33:25'),
(86, 496, 6, '2023-10-12 08:33:25', '2023-10-12 08:33:25'),
(87, 497, 1, '2023-10-12 08:33:49', '2023-10-12 08:33:49'),
(88, 497, 2, '2023-10-12 08:33:49', '2023-10-12 08:33:49'),
(89, 497, 3, '2023-10-12 08:33:49', '2023-10-12 08:33:49'),
(90, 497, 4, '2023-10-12 08:33:49', '2023-10-12 08:33:49'),
(91, 497, 6, '2023-10-12 08:33:49', '2023-10-12 08:33:49'),
(92, 498, 1, '2023-10-12 08:34:07', '2023-10-12 08:34:07'),
(93, 498, 3, '2023-10-12 08:34:07', '2023-10-12 08:34:07'),
(94, 498, 4, '2023-10-12 08:34:07', '2023-10-12 08:34:07'),
(95, 499, 2, '2023-10-12 08:34:36', '2023-10-12 08:34:36'),
(96, 499, 3, '2023-10-12 08:34:36', '2023-10-12 08:34:36'),
(97, 499, 4, '2023-10-12 08:34:36', '2023-10-12 08:34:36'),
(98, 499, 6, '2023-10-12 08:34:37', '2023-10-12 08:34:37'),
(99, 500, 1, '2023-10-12 08:35:04', '2023-10-12 08:35:04'),
(100, 500, 2, '2023-10-12 08:35:05', '2023-10-12 08:35:05'),
(101, 500, 3, '2023-10-12 08:35:05', '2023-10-12 08:35:05'),
(102, 500, 4, '2023-10-12 08:35:05', '2023-10-12 08:35:05'),
(103, 500, 6, '2023-10-12 08:35:05', '2023-10-12 08:35:05'),
(104, 501, 1, '2023-10-12 08:35:30', '2023-10-12 08:35:30'),
(105, 501, 2, '2023-10-12 08:35:30', '2023-10-12 08:35:30'),
(106, 501, 3, '2023-10-12 08:35:30', '2023-10-12 08:35:30'),
(107, 501, 4, '2023-10-12 08:35:30', '2023-10-12 08:35:30'),
(108, 502, 1, '2023-10-12 08:35:55', '2023-10-12 08:35:55'),
(109, 502, 2, '2023-10-12 08:35:55', '2023-10-12 08:35:55'),
(110, 502, 3, '2023-10-12 08:35:55', '2023-10-12 08:35:55'),
(111, 502, 4, '2023-10-12 08:35:55', '2023-10-12 08:35:55'),
(112, 502, 5, '2023-10-12 08:35:55', '2023-10-12 08:35:55'),
(113, 502, 6, '2023-10-12 08:35:55', '2023-10-12 08:35:55'),
(114, 503, 1, '2023-10-12 08:36:22', '2023-10-12 08:36:22'),
(115, 503, 2, '2023-10-12 08:36:22', '2023-10-12 08:36:22'),
(116, 503, 3, '2023-10-12 08:36:22', '2023-10-12 08:36:22'),
(117, 503, 4, '2023-10-12 08:36:22', '2023-10-12 08:36:22'),
(118, 503, 5, '2023-10-12 08:36:22', '2023-10-12 08:36:22'),
(119, 503, 6, '2023-10-12 08:36:22', '2023-10-12 08:36:22'),
(120, 504, 1, '2023-10-12 08:36:47', '2023-10-12 08:36:47'),
(121, 504, 2, '2023-10-12 08:36:47', '2023-10-12 08:36:47'),
(122, 504, 3, '2023-10-12 08:36:47', '2023-10-12 08:36:47'),
(123, 504, 4, '2023-10-12 08:36:48', '2023-10-12 08:36:48'),
(124, 504, 5, '2023-10-12 08:36:48', '2023-10-12 08:36:48'),
(125, 504, 6, '2023-10-12 08:36:48', '2023-10-12 08:36:48'),
(126, 505, 1, '2023-10-12 08:37:16', '2023-10-12 08:37:16'),
(127, 505, 2, '2023-10-12 08:37:16', '2023-10-12 08:37:16'),
(128, 505, 3, '2023-10-12 08:37:16', '2023-10-12 08:37:16'),
(129, 505, 4, '2023-10-12 08:37:16', '2023-10-12 08:37:16'),
(130, 505, 6, '2023-10-12 08:37:16', '2023-10-12 08:37:16'),
(131, 506, 1, '2023-10-12 08:37:39', '2023-10-12 08:37:39'),
(132, 506, 2, '2023-10-12 08:37:39', '2023-10-12 08:37:39'),
(133, 506, 3, '2023-10-12 08:37:39', '2023-10-12 08:37:39'),
(134, 506, 4, '2023-10-12 08:37:39', '2023-10-12 08:37:39'),
(135, 506, 6, '2023-10-12 08:37:39', '2023-10-12 08:37:39'),
(136, 507, 1, '2023-10-12 08:38:07', '2023-10-12 08:38:07'),
(137, 507, 2, '2023-10-12 08:38:07', '2023-10-12 08:38:07'),
(138, 507, 3, '2023-10-12 08:38:07', '2023-10-12 08:38:07'),
(139, 507, 4, '2023-10-12 08:38:07', '2023-10-12 08:38:07'),
(140, 508, 1, '2023-10-12 08:38:36', '2023-10-12 08:38:36'),
(141, 508, 2, '2023-10-12 08:38:36', '2023-10-12 08:38:36'),
(142, 508, 3, '2023-10-12 08:38:36', '2023-10-12 08:38:36'),
(143, 508, 4, '2023-10-12 08:38:36', '2023-10-12 08:38:36'),
(144, 508, 6, '2023-10-12 08:38:36', '2023-10-12 08:38:36'),
(145, 509, 1, '2023-10-15 02:59:49', '2023-10-15 02:59:49'),
(146, 509, 4, '2023-10-15 02:59:49', '2023-10-15 02:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_19_134504_make_kasus_table', 1),
(3, '2022_09_19_145703_create_puskesmas_table', 2),
(4, '2022_09_19_150923_create_kecamatan_table', 3),
(6, '2022_09_19_151045_create_kelurahan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$sjWmdMvt.0bQg77O/iIaA.faFUEyusZ.GiBpRJTwc8WLUOFIVwVCC', 1, NULL, '2023-01-03 22:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_wisata`
--
ALTER TABLE `lokasi_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_id` (`kriteria_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `lokasi_wisata_fasilitas`
--
ALTER TABLE `lokasi_wisata_fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lokasi_wisata_id` (`lokasi_wisata_id`,`fasilitas_id`),
  ADD KEY `fasilitas_id` (`fasilitas_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lokasi_wisata`
--
ALTER TABLE `lokasi_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT for table `lokasi_wisata_fasilitas`
--
ALTER TABLE `lokasi_wisata_fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokasi_wisata`
--
ALTER TABLE `lokasi_wisata`
  ADD CONSTRAINT `lokasi_wisata_ibfk_1` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `lokasi_wisata_ibfk_2` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `lokasi_wisata_fasilitas`
--
ALTER TABLE `lokasi_wisata_fasilitas`
  ADD CONSTRAINT `lokasi_wisata_fasilitas_ibfk_1` FOREIGN KEY (`lokasi_wisata_id`) REFERENCES `lokasi_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lokasi_wisata_fasilitas_ibfk_2` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
