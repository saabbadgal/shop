-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 07:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` bigint(20) DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `address`, `city`, `state`, `pin`, `country`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-28 07:26:22', '2020-07-28 07:26:45'),
(2, 3, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 03:03:01', '2020-07-29 03:03:01'),
(3, 2, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 03:21:07', '2020-07-29 03:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saab', 'admin@gmail.com', '2020-07-24 01:43:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '8LfHmbXQvqVToTTZ4kwF3yV516c7RS52fmXtoRL2LOIpgFvtY7bNZtaXJTPA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `alt`, `created_at`, `updated_at`) VALUES
(195, 'images/1597062107.jpeg', 'images1597062107jpeg', '2020-08-10 06:51:47', '2020-08-10 06:51:47'),
(196, 'images/uQAhBBM2ACCF12D-54C7-47C6-AA1B-FBB314D6A364.jpeg', 'imagesuqahbbm2accf12d-54c7-47c6-aa1b-fbb314d6a364jpeg', '2020-08-10 06:51:54', '2020-08-10 06:51:54'),
(203, 'images/bDlxVic0B273281-99DD-486E-A53F-B4B914EBAC35.jpeg', 'imagesbdlxvic0b273281-99dd-486e-a53f-b4b914ebac35jpeg', '2020-08-10 06:58:36', '2020-08-10 06:58:36'),
(204, 'images/dsh0D3BDC65-CDC7-47D1-8534-CD88C43A0E2E.jpeg', 'imagesdsh0d3bdc65-cdc7-47d1-8534-cd88c43a0e2ejpeg', '2020-08-10 07:00:20', '2020-08-10 07:00:20'),
(207, 'images/E5nD4D7F2DD-56E5-4512-AE3D-E24F27CBF68D.jpeg', 'imagese5nd4d7f2dd-56e5-4512-ae3d-e24f27cbf68djpeg', '2020-08-10 07:08:20', '2020-08-10 07:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `image_product`
--

CREATE TABLE `image_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_product`
--

INSERT INTO `image_product` (`id`, `product_id`, `image_id`, `created_at`, `updated_at`) VALUES
(162, 4, 191, NULL, NULL),
(163, 4, 192, NULL, NULL),
(164, 4, 193, NULL, NULL),
(165, 2, 194, NULL, NULL),
(166, 2, 195, NULL, NULL),
(167, 2, 196, NULL, NULL),
(169, 3, 198, NULL, NULL),
(171, 3, 200, NULL, NULL),
(172, 3, 201, NULL, NULL),
(173, 3, 202, NULL, NULL),
(174, 3, 203, NULL, NULL),
(175, 3, 204, NULL, NULL),
(178, 4, 207, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2014_10_12_110000__create_users_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_14_065128_create_products_table', 1),
(5, '2020_07_15_074623_create_product_size_table', 1),
(6, '2020_07_16_083919_create_images_table', 1),
(7, '2020_07_16_084017_create_image_product', 1),
(8, '2020_07_19_091242_create_sizes_table', 1),
(9, '2020_07_20_061110_create_addresses_table', 1),
(10, '2020_07_21_111210_create_sliders_table', 1),
(11, '2020_07_23_223200_create_admins_table', 1),
(12, '2020_07_26_060252_create_adresses_table', 2),
(13, '2020_07_26_060253__create_users_table', 3),
(14, '2020_07_27_075815_create_orders_table', 4),
(15, '2020_07_27_080840_create_order_status_table', 4),
(16, '2020_07_28_030556_create_order_products_table', 4),
(17, '2020_07_28_061306_create_order_product_table', 5),
(18, '2020_07_28_061307_create_order_status_table', 6),
(19, '2020_07_28_061308_create_adresses_table', 7),
(20, '2020_07_28_061309_create_adresses_table', 8),
(21, '2020_07_28_130343_create_order_address_table', 9),
(22, '2020_08_11_104214_create_profiles_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `total_qty` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `address_id`, `total_qty`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(9, 'USUPYPUFAQAWAPUJYWE8YLY8EFUDACAJYQE', 2, 1, 6, 2400, 'Shipped', '2020-07-28 07:43:20', '2020-08-11 04:53:22'),
(10, 'Y0YWEHU7YRUBE2UZASUCU9YBYWY8YNYWEQE', 2, 2, 2, 800, 'Shipped', '2020-07-29 02:43:18', '2020-08-08 04:10:14'),
(11, '9A1ELEHYLEZYMEZACEZA3E4AKUZAGAJYQEN', 3, 3, 4, 1600, 'Shipped', '2020-07-29 03:07:19', '2020-07-29 03:19:44'),
(12, 'YNEVU1ESEMENA7ARUQETEJYJEPA8YVU5U9U', 3, 4, 3, 963, 'Ordered', '2020-07-29 03:16:34', '2020-07-29 03:16:34'),
(13, 'U8YWADUSUREPUPEHYXACEWUMADAFUNUZAXE', 2, 5, 1, 321, 'Ordered', '2020-07-29 03:21:22', '2020-07-29 03:21:22'),
(14, 'YTAJY4UFAWABUQASAMYXU6AVEZUSY8YXEVU', 2, 6, 1, 400, 'Delivered', '2020-07-29 03:21:48', '2020-07-29 03:22:01'),
(15, 'E7Y6Y2U2U6Y0A6Y2U1Y4A4U1A5Y7Y2A1A6E', 2, 7, 3, 1050, 'Ordered', '2020-07-29 05:58:00', '2020-07-29 05:58:00'),
(16, '7Y1E5E3E9Y2E2A4A2E1U6A2Y6U2U3A6U1A7', 2, 8, 1, 350, 'Ordered', '2020-07-29 05:58:35', '2020-07-29 05:58:35'),
(17, 'Y0Y6A1Y7Y2Y4U3U2Y9U3U3U5Y7U9E6A7U4Y', 2, 10, 1, 350, 'Ordered', '2020-07-29 05:59:40', '2020-07-29 05:59:40'),
(18, '88807057', 2, 11, 1, 350, 'Ordered', '2020-07-29 06:00:48', '2020-07-29 06:00:48'),
(19, '72917187', 3, 12, 1, 350, 'Ordered', '2020-07-29 06:08:18', '2020-07-29 06:08:18'),
(20, '57897888', 3, 13, 3, 1050, 'Ordered', '2020-07-29 06:10:07', '2020-07-29 06:10:07'),
(21, '98935589', 3, 14, 1, 350, 'Ordered', '2020-07-29 06:11:24', '2020-07-29 06:11:24'),
(22, '85927476', 2, 15, 3, 1050, 'Ordered', '2020-07-29 06:15:38', '2020-07-29 06:15:38'),
(23, '78391929', 2, 16, 1, 321, 'Ordered', '2020-07-30 21:41:07', '2020-07-30 21:41:07'),
(24, '57995970', 2, 17, 1, 321, 'Ordered', '2020-07-30 21:47:54', '2020-07-30 21:47:54'),
(25, '95853798', 2, 18, 3, 1050, 'Ordered', '2020-08-08 04:07:49', '2020-08-08 04:07:49'),
(26, '82985792', 2, 19, 7, 2750, 'Ordered', '2020-08-11 02:00:08', '2020-08-11 02:00:08'),
(27, '96798670', 2, 20, 1, 400, 'Ordered', '2020-08-11 02:59:16', '2020-08-11 02:59:16'),
(28, '45792907', 2, 21, 1, 400, 'Ordered', '2020-08-11 03:06:43', '2020-08-11 03:06:43'),
(29, '88738673', 2, 22, 1, 350, 'Ordered', '2020-08-11 04:29:58', '2020-08-11 04:29:58'),
(30, '18355509', 2, 23, 1, 350, 'Ordered', '2020-08-11 04:33:55', '2020-08-11 04:33:55'),
(31, '53927191', 2, 24, 2, 800, 'Ordered', '2020-08-11 04:44:50', '2020-08-11 04:44:50'),
(32, '71515158', 2, 25, 2, 800, 'Ordered', '2020-08-11 04:47:40', '2020-08-11 04:47:40'),
(33, '87729592', 2, 26, 1, 222, 'Ordered', '2020-08-11 05:55:06', '2020-08-11 05:55:06'),
(34, '54847358', 2, 27, 1, 400, 'Ordered', '2020-08-13 03:25:18', '2020-08-13 03:25:18'),
(35, '88489757', 2, 28, 1, 400, 'Ordered', '2020-08-13 06:29:13', '2020-08-13 06:29:13'),
(36, '48975968', 2, 29, 2, 700, 'Packed', '2020-08-13 06:29:43', '2020-08-13 06:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_address`
--

CREATE TABLE `order_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` bigint(20) DEFAULT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_address`
--

INSERT INTO `order_address` (`id`, `name`, `address`, `city`, `state`, `pin`, `country`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-28 07:43:20', '2020-07-28 07:43:20'),
(2, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 02:43:18', '2020-07-29 02:43:18'),
(3, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 03:07:19', '2020-07-29 03:07:19'),
(4, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 03:16:34', '2020-07-29 03:16:34'),
(5, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 03:21:22', '2020-07-29 03:21:22'),
(6, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 03:21:48', '2020-07-29 03:21:48'),
(7, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 05:58:00', '2020-07-29 05:58:00'),
(8, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 05:58:35', '2020-07-29 05:58:35'),
(9, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 05:58:43', '2020-07-29 05:58:43'),
(10, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 05:59:39', '2020-07-29 05:59:39'),
(11, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 06:00:48', '2020-07-29 06:00:48'),
(12, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 06:08:18', '2020-07-29 06:08:18'),
(13, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 06:10:07', '2020-07-29 06:10:07'),
(14, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 06:11:24', '2020-07-29 06:11:24'),
(15, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-29 06:15:38', '2020-07-29 06:15:38'),
(16, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-30 21:41:07', '2020-07-30 21:41:07'),
(17, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-07-30 21:47:54', '2020-07-30 21:47:54'),
(18, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-08-08 04:07:49', '2020-08-08 04:07:49'),
(19, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 02:00:08', '2020-08-11 02:00:08'),
(20, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 02:59:16', '2020-08-11 02:59:16'),
(21, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 03:06:43', '2020-08-11 03:06:43'),
(22, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 04:29:58', '2020-08-11 04:29:58'),
(23, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 04:33:55', '2020-08-11 04:33:55'),
(24, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 04:44:50', '2020-08-11 04:44:50'),
(25, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 04:47:40', '2020-08-11 04:47:40'),
(26, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-11 05:55:06', '2020-08-11 05:55:06'),
(27, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-08-13 03:25:17', '2020-08-13 03:25:17'),
(28, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-13 06:29:13', '2020-08-13 06:29:13'),
(29, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-13 06:29:43', '2020-08-13 06:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size` tinyint(4) NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` tinyint(4) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `size`, `color`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(12, 9, 3, 7, 'Red', 6, 2400, '2020-07-28 07:43:20', '2020-07-28 07:43:20'),
(13, 10, 3, 4, 'Red', 2, 800, '2020-07-29 02:43:18', '2020-07-29 02:43:18'),
(14, 11, 3, 8, 'Red', 4, 1600, '2020-07-29 03:07:19', '2020-07-29 03:07:19'),
(15, 12, 2, 5, 'Blue', 3, 963, '2020-07-29 03:16:34', '2020-07-29 03:16:34'),
(16, 13, 2, 5, 'Blue', 1, 321, '2020-07-29 03:21:22', '2020-07-29 03:21:22'),
(17, 14, 3, 5, 'Red', 1, 400, '2020-07-29 03:21:48', '2020-07-29 03:21:48'),
(18, 15, 4, 7, 'White', 3, 1050, '2020-07-29 05:58:00', '2020-07-29 05:58:00'),
(19, 16, 4, 9, 'White', 1, 350, '2020-07-29 05:58:35', '2020-07-29 05:58:35'),
(20, 17, 4, 9, 'White', 1, 350, '2020-07-29 05:59:40', '2020-07-29 05:59:40'),
(21, 18, 4, 8, 'White', 1, 350, '2020-07-29 06:00:48', '2020-07-29 06:00:48'),
(22, 19, 4, 9, 'White', 1, 350, '2020-07-29 06:08:19', '2020-07-29 06:08:19'),
(23, 20, 4, 9, 'White', 3, 1050, '2020-07-29 06:10:07', '2020-07-29 06:10:07'),
(24, 21, 4, 9, 'White', 1, 350, '2020-07-29 06:11:24', '2020-07-29 06:11:24'),
(25, 22, 4, 8, 'White', 3, 1050, '2020-07-29 06:15:38', '2020-07-29 06:15:38'),
(26, 23, 2, 5, 'Blue', 1, 321, '2020-07-30 21:41:07', '2020-07-30 21:41:07'),
(27, 24, 2, 5, 'Blue', 1, 321, '2020-07-30 21:47:54', '2020-07-30 21:47:54'),
(28, 25, 4, 8, 'White', 3, 1050, '2020-08-08 04:07:49', '2020-08-08 04:07:49'),
(29, 26, 3, 7, 'Red', 3, 1200, '2020-08-11 02:00:08', '2020-08-11 02:00:08'),
(30, 26, 3, 3, 'Red', 3, 1200, '2020-08-11 02:00:08', '2020-08-11 02:00:08'),
(31, 26, 4, 8, 'White', 1, 350, '2020-08-11 02:00:08', '2020-08-11 02:00:08'),
(32, 27, 3, 3, 'Red', 1, 400, '2020-08-11 02:59:16', '2020-08-11 02:59:16'),
(33, 28, 3, 3, 'Red', 1, 400, '2020-08-11 03:06:43', '2020-08-11 03:06:43'),
(34, 29, 4, 9, 'White', 1, 350, '2020-08-11 04:29:58', '2020-08-11 04:29:58'),
(35, 30, 4, 9, 'White', 1, 350, '2020-08-11 04:33:56', '2020-08-11 04:33:56'),
(36, 31, 3, 4, 'Red', 2, 800, '2020-08-11 04:44:50', '2020-08-11 04:44:50'),
(37, 32, 3, 4, 'Red', 2, 800, '2020-08-11 04:47:40', '2020-08-11 04:47:40'),
(38, 33, 2, 7, 'Blue', 1, 222, '2020-08-11 05:55:06', '2020-08-11 05:55:06'),
(39, 34, 3, 3, 'Red', 1, 400, '2020-08-13 03:25:18', '2020-08-13 03:25:18'),
(40, 35, 3, 6, 'Red', 1, 400, '2020-08-13 06:29:13', '2020-08-13 06:29:13'),
(41, 36, 4, 5, 'White', 1, 350, '2020-08-13 06:29:43', '2020-08-13 06:29:43'),
(42, 36, 4, 8, 'White', 1, 350, '2020-08-13 06:29:43', '2020-08-13 06:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(12, 9, 'Packed', '2020-07-29 02:32:53', '2020-07-29 02:33:51'),
(13, 10, 'Ordered', '2020-07-29 02:43:18', '2020-07-29 02:43:18'),
(14, 11, 'Ordered', '2020-07-29 03:07:19', '2020-07-29 03:07:19'),
(15, 12, 'Ordered', '2020-07-29 03:16:34', '2020-07-29 03:16:34'),
(16, 10, 'Packed', '2020-07-29 03:19:01', '2020-07-29 03:19:01'),
(17, 11, 'Packed', '2020-07-29 03:19:24', '2020-07-29 03:19:24'),
(18, 11, 'Shipped', '2020-07-29 03:19:44', '2020-07-29 03:19:44'),
(19, 13, 'Ordered', '2020-07-29 03:21:22', '2020-07-29 03:21:22'),
(20, 14, 'Ordered', '2020-07-29 03:21:48', '2020-07-29 03:21:48'),
(21, 14, 'Delivered', '2020-07-29 03:22:01', '2020-07-29 03:22:01'),
(22, 9, 'Shipped', '2020-07-29 05:51:33', '2020-07-29 05:51:33'),
(23, 15, 'Ordered', '2020-07-29 05:58:00', '2020-07-29 05:58:00'),
(24, 16, 'Ordered', '2020-07-29 05:58:35', '2020-07-29 05:58:35'),
(25, 17, 'Ordered', '2020-07-29 05:59:40', '2020-07-29 05:59:40'),
(26, 18, 'Ordered', '2020-07-29 06:00:48', '2020-07-29 06:00:48'),
(27, 19, 'Ordered', '2020-07-29 06:08:19', '2020-07-29 06:08:19'),
(28, 20, 'Ordered', '2020-07-29 06:10:07', '2020-07-29 06:10:07'),
(29, 21, 'Ordered', '2020-07-29 06:11:24', '2020-07-29 06:11:24'),
(30, 22, 'Ordered', '2020-07-29 06:15:38', '2020-07-29 06:15:38'),
(31, 23, 'Ordered', '2020-07-30 21:41:07', '2020-07-30 21:41:07'),
(32, 24, 'Ordered', '2020-07-30 21:47:54', '2020-07-30 21:47:54'),
(33, 25, 'Ordered', '2020-08-08 04:07:49', '2020-08-08 04:07:49'),
(34, 9, 'Delivered', '2020-08-08 04:09:12', '2020-08-08 04:09:12'),
(35, 9, 'Packed', '2020-08-08 04:10:01', '2020-08-08 04:10:01'),
(36, 9, 'Shipped', '2020-08-08 04:10:07', '2020-08-08 04:10:07'),
(37, 10, 'Shipped', '2020-08-08 04:10:15', '2020-08-08 04:10:15'),
(38, 9, 'Packed', '2020-08-11 01:22:39', '2020-08-11 01:22:39'),
(39, 26, 'Ordered', '2020-08-11 02:00:08', '2020-08-11 02:00:08'),
(40, 27, 'Ordered', '2020-08-11 02:59:16', '2020-08-11 02:59:16'),
(41, 28, 'Ordered', '2020-08-11 03:06:43', '2020-08-11 03:06:43'),
(42, 29, 'Ordered', '2020-08-11 04:29:58', '2020-08-11 04:29:58'),
(43, 30, 'Ordered', '2020-08-11 04:33:55', '2020-08-11 04:33:55'),
(44, 31, 'Ordered', '2020-08-11 04:44:50', '2020-08-11 04:44:50'),
(45, 32, 'Ordered', '2020-08-11 04:47:40', '2020-08-11 04:47:40'),
(46, 9, 'Shipped', '2020-08-11 04:53:22', '2020-08-11 04:53:22'),
(47, 33, 'Ordered', '2020-08-11 05:55:06', '2020-08-11 05:55:06'),
(48, 34, 'Ordered', '2020-08-13 03:25:18', '2020-08-13 03:25:18'),
(49, 35, 'Ordered', '2020-08-13 06:29:13', '2020-08-13 06:29:13'),
(50, 36, 'Ordered', '2020-08-13 06:29:43', '2020-08-13 06:29:43'),
(51, 36, 'Packed', '2020-08-13 06:30:39', '2020-08-13 06:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primary_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `discountPrice` bigint(20) DEFAULT NULL,
  `idealFor` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` bigint(20) NOT NULL,
  `outerMaterial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soleMaterial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upperPattern` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `primary_image`, `name`, `model`, `slug`, `color`, `price`, `discountPrice`, `idealFor`, `stock`, `outerMaterial`, `soleMaterial`, `upperPattern`, `description`, `created_at`, `updated_at`) VALUES
(2, 'images/1597062107.jpeg', 'New Product', 'New Product', 'new-product', 'Blue', 321, 222, 'men', 22, 'Outer Material', 'Sole Material', 'Something', '<span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span><span style=\"letter-spacing: 0.3px;\">Description</span>', '2020-07-24 02:42:57', '2020-08-11 01:30:32'),
(3, 'images/bDlxVic0B273281-99DD-486E-A53F-B4B914EBAC35.jpeg', 'New Product 2', 'New Product 2', 'new-product-2', 'Red', 500, 400, 'men', 50, 'Outer Material', 'Sole Material', 'Something', 'Wlecome come to the shoes world.&nbsp;<span style=\"letter-spacing: 0.3px;\">Wlecome come to the shoes world</span><span style=\"letter-spacing: 0.3px;\">Wlecome come to the shoes world</span><span style=\"letter-spacing: 0.3px;\">Wlecome come to the shoes world</span><span style=\"letter-spacing: 0.3px;\">Wlecome come to the shoes world</span>', '2020-07-24 07:37:28', '2020-08-10 06:58:36'),
(4, 'images/E5nD4D7F2DD-56E5-4512-AE3D-E24F27CBF68D.jpeg', 'New Product 3', 'New Product 3', 'new-product-3', 'White', 357, 350, 'women', 50, 'Outer Material', 'Sole Material', 'Something Other', 'Description&nbsp;<span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description</span>', '2020-07-29 05:56:04', '2020-08-10 07:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(4, 2, 3, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 7, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 3, 4, NULL, NULL),
(9, 3, 6, NULL, NULL),
(10, 3, 7, NULL, NULL),
(12, 3, 1, NULL, NULL),
(13, 3, 3, NULL, NULL),
(14, 3, 5, NULL, NULL),
(15, 3, 8, NULL, NULL),
(16, 4, 3, NULL, NULL),
(17, 4, 5, NULL, NULL),
(18, 4, 6, NULL, NULL),
(19, 4, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `logo`, `facebook`, `instagram`, `gmail`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'saab', 'Saab23', 'saab', 'Saab', 'saab', 'address', NULL, '2020-08-12 01:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL),
(2, 4, NULL, NULL),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL),
(5, 7, NULL, NULL),
(6, 8, NULL, NULL),
(7, 9, NULL, NULL),
(8, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `heading_one`, `heading_two`, `heading_three`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'images/1595574987.jpeg', 'The New Collection', 'The New Collection', 'The New Collection', 'The New Collection', '2020-07-24 01:45:55', '2020-07-24 01:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Saab', '+919914263105', 'user@gmail.com', '2020-07-27 00:32:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fQQ8qk1AWwmmXOjmrbJcLofAl4qeWALlstgOc56KqBAyf4srMz1y7UtF9O77', NULL, '2020-07-29 03:21:07'),
(3, 'Jatinder Badgal', '+919914263105', 'Saabbadgalj5@gmail.com', NULL, '$2y$10$iZwWIhJp5b3p6851ZdXE0uYH55WDmsEjbQQCYGvPcOvWXL1lij65O', NULL, '2020-07-29 03:02:48', '2020-07-29 03:02:48'),
(4, 'user2', '7888319638', 'user2@gmail.com', NULL, '$2y$10$/tYDpPN3VXSeBz6c4t2PGuIf2OcLKe47oZsHDf8fGNF2jXQ9ok9YK', NULL, '2020-08-10 07:17:22', '2020-08-10 07:17:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_address`
--
ALTER TABLE `order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order_address`
--
ALTER TABLE `order_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
