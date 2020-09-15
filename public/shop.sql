-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 01:56 PM
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
(3, 2, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-07-29 03:21:07', '2020-07-29 03:21:07'),
(4, 2, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-03 08:17:22', '2020-09-03 08:17:22'),
(7, 2, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-14 23:38:33', '2020-09-14 23:38:33'),
(12, 4, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-14 23:58:35', '2020-09-14 23:58:35'),
(13, 20, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-15 01:21:15', '2020-09-15 01:21:15');

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
(1, 'Saab', 'admin@gmail.com', '2020-07-24 01:43:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'zOLtWSMC19kkkWbd9YmgK1zp9WEFNq9ejIyvjc0lUf00YCRXBevXDH1oIsNu', NULL, NULL);

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
(207, 'images/E5nD4D7F2DD-56E5-4512-AE3D-E24F27CBF68D.jpeg', 'imagese5nd4d7f2dd-56e5-4512-ae3d-e24f27cbf68djpeg', '2020-08-10 07:08:20', '2020-08-10 07:08:20'),
(208, 'images/jPi0B273281-99DD-486E-A53F-B4B914EBAC35.jpeg', 'imagesjpi0b273281-99dd-486e-a53f-b4b914ebac35jpeg', '2020-09-02 17:18:19', '2020-09-02 17:18:19'),
(209, 'images/R5P0B273281-99DD-486E-A53F-B4B914EBAC35.jpeg', 'imagesr5p0b273281-99dd-486e-a53f-b4b914ebac35jpeg', '2020-09-02 17:20:18', '2020-09-02 17:20:18'),
(210, 'images/XbH0B273281-99DD-486E-A53F-B4B914EBAC35.jpeg', 'imagesxbh0b273281-99dd-486e-a53f-b4b914ebac35jpeg', '2020-09-02 17:24:38', '2020-09-02 17:24:38'),
(212, 'images/QVyA09AD219-9E71-412C-9F5E-DAB19F2528CB.jpeg', 'imagesqvya09ad219-9e71-412c-9f5e-dab19f2528cbjpeg', '2020-09-15 01:37:31', '2020-09-15 01:37:31'),
(214, 'images/0Zv567F9F63-3D73-4D31-94AB-3E39165DBB08.jpeg', 'images0zv567f9f63-3d73-4d31-94ab-3e39165dbb08jpeg', '2020-09-15 01:46:12', '2020-09-15 01:46:12'),
(215, 'images/Nbr30546AAD-8C7D-4AC8-99F1-01D9006044E0.jpeg', 'imagesnbr30546aad-8c7d-4ac8-99f1-01d9006044e0jpeg', '2020-09-15 01:55:58', '2020-09-15 01:55:58'),
(219, 'images/yA4845D95E8-762A-4E1B-A1F9-04B924F91D12.jpeg', 'imagesya4845d95e8-762a-4e1b-a1f9-04b924f91d12jpeg', '2020-09-15 02:06:07', '2020-09-15 02:06:07');

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
(165, 2, 194, NULL, NULL),
(169, 3, 198, NULL, NULL),
(171, 3, 200, NULL, NULL),
(172, 3, 201, NULL, NULL),
(173, 3, 202, NULL, NULL),
(180, 2, 210, NULL, NULL),
(184, 6, 214, NULL, NULL),
(185, 5, 215, NULL, NULL),
(187, 3, 217, NULL, NULL),
(189, 3, 219, NULL, NULL);

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
(22, '2020_08_11_104214_create_profiles_table', 10),
(24, '2020_09_14_065128_create_products_table', 11),
(25, '2020_09_12_111518_add_column_order_product_table', 12);

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
(32, '71515158', 2, 25, 2, 800, 'Packed', '2020-08-11 04:47:40', '2020-09-15 03:09:19'),
(33, '87729592', 2, 26, 1, 222, 'Ordered', '2020-08-11 05:55:06', '2020-08-11 05:55:06'),
(34, '54847358', 2, 27, 1, 400, 'Ordered', '2020-08-13 03:25:18', '2020-08-13 03:25:18'),
(35, '88489757', 2, 28, 1, 400, 'Ordered', '2020-08-13 06:29:13', '2020-08-13 06:29:13'),
(36, '48975968', 2, 29, 2, 700, 'Packed', '2020-08-13 06:29:43', '2020-08-13 06:30:38'),
(37, '50875758', 2, 30, 3, 1050, 'Ordered', '2020-08-18 06:19:12', '2020-08-18 06:19:12'),
(38, '97581888', 2, 31, 6, 2400, 'Delivered', '2020-08-20 01:23:11', '2020-08-20 01:24:30'),
(39, '87299997', 2, 32, 1, 400, 'Ordered', '2020-08-20 04:48:57', '2020-08-20 04:48:57'),
(40, '99788718', 2, 33, 1, 500, 'Ordered', '2020-09-02 19:58:03', '2020-09-02 19:58:03'),
(41, '19590967', 2, 34, 4, 2000, 'Ordered', '2020-09-03 00:45:09', '2020-09-03 00:45:09'),
(42, '84515358', 2, 35, 4, 2000, 'Ordered', '2020-09-03 00:50:54', '2020-09-03 00:50:54'),
(43, '75509356', 2, 36, 2, 1000, 'Ordered', '2020-09-03 08:15:38', '2020-09-03 08:15:38'),
(44, '45073825', 2, 37, 1, 500, 'Ordered', '2020-09-05 06:24:25', '2020-09-05 06:24:25'),
(45, '15298809', 4, 38, 1, 500, 'Ordered', '2020-09-05 06:31:21', '2020-09-05 06:31:21'),
(46, '90987283', 4, 39, 2, 1000, 'Ordered', '2020-09-05 06:59:06', '2020-09-05 06:59:06'),
(47, '88072845', 2, 40, 8, 4000, 'Ordered', '2020-09-09 05:08:41', '2020-09-09 05:08:41'),
(48, '88565254', 2, 41, 2, 1000, 'Ordered', '2020-09-09 07:26:10', '2020-09-09 07:26:10'),
(49, '92525980', 2, 42, 3, 1500, 'Ordered', '2020-09-10 01:24:12', '2020-09-10 01:24:12'),
(50, '83587880', 2, 43, 13, 6500, 'Ordered', '2020-09-10 06:48:28', '2020-09-10 06:48:28'),
(51, '50515990', 2, 44, 1, 500, 'Ordered', '2020-09-12 05:42:50', '2020-09-12 05:42:50'),
(52, '88585278', 2, 45, 2, 1000, 'Ordered', '2020-09-12 05:50:24', '2020-09-12 05:50:24'),
(53, '45771729', 2, 46, 2, 1000, 'Ordered', '2020-09-12 05:51:15', '2020-09-12 05:51:15'),
(54, '89194889', 2, 47, 2, 1000, 'Ordered', '2020-09-12 05:51:49', '2020-09-12 05:51:49'),
(55, '78788587', 2, 48, 2, 1000, 'Ordered', '2020-09-12 05:53:33', '2020-09-12 05:53:33'),
(56, '52568897', 2, 49, 2, 1000, 'Ordered', '2020-09-12 05:53:40', '2020-09-12 05:53:40'),
(57, '79705676', 2, 50, 2, 1000, 'Ordered', '2020-09-12 05:54:48', '2020-09-12 05:54:48'),
(58, '65258788', 2, 51, 1, 500, 'Ordered', '2020-09-12 05:59:51', '2020-09-12 05:59:51'),
(59, '55385829', 2, 52, 1, 500, 'Ordered', '2020-09-12 06:03:29', '2020-09-12 06:03:29'),
(60, '82917894', 2, 53, 2, 1000, 'Ordered', '2020-09-12 06:04:22', '2020-09-12 06:04:22'),
(61, '39559809', 2, 54, 2, 1000, 'Ordered', '2020-09-12 06:05:17', '2020-09-12 06:05:17'),
(62, '55455887', 2, 55, 2, 1000, 'Ordered', '2020-09-12 06:05:39', '2020-09-12 06:05:39'),
(63, '53547551', 2, 56, 2, 1000, 'Ordered', '2020-09-12 06:05:50', '2020-09-12 06:05:50'),
(64, '95745580', 2, 57, 2, 1000, 'Ordered', '2020-09-12 06:07:14', '2020-09-12 06:07:14'),
(65, '89838155', 2, 58, 2, 1000, 'Ordered', '2020-09-12 06:07:22', '2020-09-12 06:07:22'),
(66, '91928772', 2, 59, 2, 1000, 'Ordered', '2020-09-12 06:07:38', '2020-09-12 06:07:38'),
(67, '92937390', 2, 60, 2, 1000, 'Ordered', '2020-09-12 06:08:12', '2020-09-12 06:08:12'),
(68, '53759753', 2, 61, 1, 500, 'Ordered', '2020-09-12 06:11:10', '2020-09-12 06:11:10'),
(69, '96757583', 2, 63, 1, 500, 'Ordered', '2020-09-12 06:12:06', '2020-09-12 06:12:06'),
(70, '71745090', 2, 64, 1, 500, 'Ordered', '2020-09-12 06:14:16', '2020-09-12 06:14:16'),
(71, '73947086', 2, 65, 1, 500, 'Ordered', '2020-09-12 06:14:54', '2020-09-12 06:14:54'),
(72, '65987579', 2, 66, 1, 500, 'Ordered', '2020-09-12 23:20:03', '2020-09-12 23:20:03'),
(73, '48295855', 2, 67, 3, 1500, 'Ordered', '2020-09-14 07:25:25', '2020-09-14 07:25:25'),
(74, '52709072', 2, 68, 1, 500, 'Ordered', '2020-09-14 23:24:38', '2020-09-14 23:24:38'),
(75, '97888685', 4, 69, 1, 500, 'Ordered', '2020-09-14 23:57:02', '2020-09-14 23:57:02'),
(76, '93749170', 4, 70, 1, 500, 'Ordered', '2020-09-14 23:58:38', '2020-09-14 23:58:38'),
(77, '76768386', 4, 71, 3, 1500, 'Ordered', '2020-09-15 00:07:12', '2020-09-15 00:07:12'),
(78, '97496838', 4, 72, 2, 1000, 'Ordered', '2020-09-15 00:07:37', '2020-09-15 00:07:37'),
(79, '55386887', 20, 73, 2, 1000, 'Ordered', '2020-09-15 01:21:17', '2020-09-15 01:21:17'),
(80, '88395847', 2, 74, 2, 1000, 'Ordered', '2020-09-15 01:52:45', '2020-09-15 01:52:45'),
(81, '76599393', 2, 75, 1, 500, 'Ordered', '2020-09-15 01:56:38', '2020-09-15 01:56:38');

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
(29, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-13 06:29:43', '2020-08-13 06:29:43'),
(30, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-18 06:19:12', '2020-08-18 06:19:12'),
(31, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-08-20 01:23:11', '2020-08-20 01:23:11'),
(32, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-08-20 04:48:57', '2020-08-20 04:48:57'),
(33, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-02 19:58:02', '2020-09-02 19:58:02'),
(34, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-03 00:45:09', '2020-09-03 00:45:09'),
(35, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-03 00:50:54', '2020-09-03 00:50:54'),
(36, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-03 08:15:38', '2020-09-03 08:15:38'),
(37, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-05 06:24:25', '2020-09-05 06:24:25'),
(38, 'Saab', 'Kanwan', 'Pathankot', 'Punjab', 143534, 'India', '7888319638', '2020-09-05 06:31:21', '2020-09-05 06:31:21'),
(39, 'Saab', 'Kanwan', 'Pathankot', 'Punjab', 143534, 'India', '7888319638', '2020-09-05 06:59:06', '2020-09-05 06:59:06'),
(40, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-09 05:08:41', '2020-09-09 05:08:41'),
(41, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-09 07:26:09', '2020-09-09 07:26:09'),
(42, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-10 01:24:12', '2020-09-10 01:24:12'),
(43, 'Jatinder Badgal', '44', 'Dinanagar', 'Punjab', 143534, 'India', '+917888319638', '2020-09-10 06:48:28', '2020-09-10 06:48:28'),
(44, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 05:42:50', '2020-09-12 05:42:50'),
(45, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 05:50:24', '2020-09-12 05:50:24'),
(46, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-12 05:51:15', '2020-09-12 05:51:15'),
(47, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-12 05:51:49', '2020-09-12 05:51:49'),
(48, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-12 05:53:33', '2020-09-12 05:53:33'),
(49, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-12 05:53:40', '2020-09-12 05:53:40'),
(50, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-12 05:54:47', '2020-09-12 05:54:47'),
(51, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 05:59:51', '2020-09-12 05:59:51'),
(52, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:03:29', '2020-09-12 06:03:29'),
(53, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:04:22', '2020-09-12 06:04:22'),
(54, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:05:17', '2020-09-12 06:05:17'),
(55, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:05:39', '2020-09-12 06:05:39'),
(56, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:05:49', '2020-09-12 06:05:49'),
(57, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:07:14', '2020-09-12 06:07:14'),
(58, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:07:22', '2020-09-12 06:07:22'),
(59, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:07:38', '2020-09-12 06:07:38'),
(60, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:08:12', '2020-09-12 06:08:12'),
(61, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:11:10', '2020-09-12 06:11:10'),
(62, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:11:11', '2020-09-12 06:11:11'),
(63, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:12:06', '2020-09-12 06:12:06'),
(64, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:14:16', '2020-09-12 06:14:16'),
(65, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 06:14:54', '2020-09-12 06:14:54'),
(66, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-12 23:20:03', '2020-09-12 23:20:03'),
(67, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-14 07:25:25', '2020-09-14 07:25:25'),
(68, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-14 23:24:38', '2020-09-14 23:24:38'),
(69, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-14 23:57:02', '2020-09-14 23:57:02'),
(70, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-14 23:58:38', '2020-09-14 23:58:38'),
(71, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-15 00:07:12', '2020-09-15 00:07:12'),
(72, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-15 00:07:37', '2020-09-15 00:07:37'),
(73, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-15 01:21:17', '2020-09-15 01:21:17'),
(74, 'Saab Badgal', 'Village. Kanwan Post. Parmanand Babbu Telecom', 'Gurdaspur', 'PB', 143534, 'India', '07888319638', '2020-09-15 01:52:45', '2020-09-15 01:52:45'),
(75, 'Jatinder Badgal', '44', 'Dinanagar', 'Kanwan', 143534, 'India', '+919914263105', '2020-09-15 01:56:38', '2020-09-15 01:56:38');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `design_id` bigint(20) UNSIGNED DEFAULT NULL,
  `design_price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `size`, `color`, `qty`, `price`, `created_at`, `updated_at`, `design_id`, `design_price`) VALUES
(12, 9, 3, 7, 'Red', 6, 2400, '2020-07-28 07:43:20', '2020-07-28 07:43:20', NULL, NULL),
(13, 10, 3, 4, 'Red', 2, 800, '2020-07-29 02:43:18', '2020-07-29 02:43:18', NULL, NULL),
(14, 11, 3, 8, 'Red', 4, 1600, '2020-07-29 03:07:19', '2020-07-29 03:07:19', NULL, NULL),
(15, 12, 2, 5, 'Blue', 3, 963, '2020-07-29 03:16:34', '2020-07-29 03:16:34', NULL, NULL),
(16, 13, 2, 5, 'Blue', 1, 321, '2020-07-29 03:21:22', '2020-07-29 03:21:22', NULL, NULL),
(17, 14, 3, 5, 'Red', 1, 400, '2020-07-29 03:21:48', '2020-07-29 03:21:48', NULL, NULL),
(18, 15, 4, 7, 'White', 3, 1050, '2020-07-29 05:58:00', '2020-07-29 05:58:00', NULL, NULL),
(19, 16, 4, 9, 'White', 1, 350, '2020-07-29 05:58:35', '2020-07-29 05:58:35', NULL, NULL),
(20, 17, 4, 9, 'White', 1, 350, '2020-07-29 05:59:40', '2020-07-29 05:59:40', NULL, NULL),
(21, 18, 4, 8, 'White', 1, 350, '2020-07-29 06:00:48', '2020-07-29 06:00:48', NULL, NULL),
(22, 19, 4, 9, 'White', 1, 350, '2020-07-29 06:08:19', '2020-07-29 06:08:19', NULL, NULL),
(23, 20, 4, 9, 'White', 3, 1050, '2020-07-29 06:10:07', '2020-07-29 06:10:07', NULL, NULL),
(24, 21, 4, 9, 'White', 1, 350, '2020-07-29 06:11:24', '2020-07-29 06:11:24', NULL, NULL),
(25, 22, 4, 8, 'White', 3, 1050, '2020-07-29 06:15:38', '2020-07-29 06:15:38', NULL, NULL),
(26, 23, 2, 5, 'Blue', 1, 321, '2020-07-30 21:41:07', '2020-07-30 21:41:07', NULL, NULL),
(27, 24, 2, 5, 'Blue', 1, 321, '2020-07-30 21:47:54', '2020-07-30 21:47:54', NULL, NULL),
(28, 25, 4, 8, 'White', 3, 1050, '2020-08-08 04:07:49', '2020-08-08 04:07:49', NULL, NULL),
(29, 26, 3, 7, 'Red', 3, 1200, '2020-08-11 02:00:08', '2020-08-11 02:00:08', NULL, NULL),
(30, 26, 3, 3, 'Red', 3, 1200, '2020-08-11 02:00:08', '2020-08-11 02:00:08', NULL, NULL),
(31, 26, 4, 8, 'White', 1, 350, '2020-08-11 02:00:08', '2020-08-11 02:00:08', NULL, NULL),
(32, 27, 3, 3, 'Red', 1, 400, '2020-08-11 02:59:16', '2020-08-11 02:59:16', NULL, NULL),
(33, 28, 3, 3, 'Red', 1, 400, '2020-08-11 03:06:43', '2020-08-11 03:06:43', NULL, NULL),
(34, 29, 4, 9, 'White', 1, 350, '2020-08-11 04:29:58', '2020-08-11 04:29:58', NULL, NULL),
(35, 30, 4, 9, 'White', 1, 350, '2020-08-11 04:33:56', '2020-08-11 04:33:56', NULL, NULL),
(36, 31, 3, 4, 'Red', 2, 800, '2020-08-11 04:44:50', '2020-08-11 04:44:50', NULL, NULL),
(37, 32, 3, 4, 'Red', 2, 800, '2020-08-11 04:47:40', '2020-08-11 04:47:40', NULL, NULL),
(38, 33, 2, 7, 'Blue', 1, 222, '2020-08-11 05:55:06', '2020-08-11 05:55:06', NULL, NULL),
(39, 34, 3, 3, 'Red', 1, 400, '2020-08-13 03:25:18', '2020-08-13 03:25:18', NULL, NULL),
(40, 35, 3, 6, 'Red', 1, 400, '2020-08-13 06:29:13', '2020-08-13 06:29:13', NULL, NULL),
(41, 36, 4, 5, 'White', 1, 350, '2020-08-13 06:29:43', '2020-08-13 06:29:43', NULL, NULL),
(42, 36, 4, 8, 'White', 1, 350, '2020-08-13 06:29:43', '2020-08-13 06:29:43', NULL, NULL),
(43, 37, 4, 9, 'White', 3, 1050, '2020-08-18 06:19:12', '2020-08-18 06:19:12', NULL, NULL),
(44, 38, 3, 9, 'Red', 4, 1600, '2020-08-20 01:23:11', '2020-08-20 01:23:11', NULL, NULL),
(45, 38, 3, 7, 'Red', 2, 800, '2020-08-20 01:23:11', '2020-08-20 01:23:11', NULL, NULL),
(46, 39, 3, 4, 'Red', 1, 400, '2020-08-20 04:48:57', '2020-08-20 04:48:57', NULL, NULL),
(47, 40, 3, 7, 'White', 1, 500, '2020-09-02 19:58:03', '2020-09-02 19:58:03', NULL, NULL),
(48, 41, 2, 8, 'Red', 4, 2000, '2020-09-03 00:45:09', '2020-09-03 00:45:09', NULL, NULL),
(49, 42, 3, 7, 'White', 1, 500, '2020-09-03 00:50:55', '2020-09-03 00:50:55', NULL, NULL),
(50, 42, 2, 9, 'Red', 3, 1500, '2020-09-03 00:50:55', '2020-09-03 00:50:55', NULL, NULL),
(51, 43, 3, 7, 'White', 2, 1000, '2020-09-03 08:15:38', '2020-09-03 08:15:38', NULL, NULL),
(52, 44, 3, 7, 'White', 1, 500, '2020-09-05 06:24:25', '2020-09-05 06:24:25', NULL, NULL),
(53, 45, 2, 9, 'Red', 1, 500, '2020-09-05 06:31:21', '2020-09-05 06:31:21', NULL, NULL),
(54, 46, 2, 6, 'Red', 2, 1000, '2020-09-05 06:59:06', '2020-09-05 06:59:06', NULL, NULL),
(55, 47, 2, 6, 'Red', 5, 2500, '2020-09-09 05:08:41', '2020-09-09 05:08:41', NULL, NULL),
(56, 47, 3, 7, 'White', 3, 1500, '2020-09-09 05:08:41', '2020-09-09 05:08:41', NULL, NULL),
(57, 48, 2, 9, 'Red', 2, 1000, '2020-09-09 07:26:10', '2020-09-09 07:26:10', NULL, NULL),
(58, 49, 2, 6, 'Red', 3, 1500, '2020-09-10 01:24:12', '2020-09-10 01:24:12', NULL, NULL),
(59, 50, 3, 8, 'White', 4, 2000, '2020-09-10 06:48:28', '2020-09-10 06:48:28', NULL, NULL),
(60, 50, 3, 6, 'White', 6, 3000, '2020-09-10 06:48:28', '2020-09-10 06:48:28', NULL, NULL),
(61, 50, 2, 6, 'Red', 3, 1500, '2020-09-10 06:48:28', '2020-09-10 06:48:28', NULL, NULL),
(62, 53, 3, 6, 'White', 1, 500, '2020-09-12 05:51:15', '2020-09-12 05:51:15', 2, 200),
(63, 56, 3, 6, 'White', 1, 500, '2020-09-12 05:53:40', '2020-09-12 05:53:40', 2, 200),
(64, 57, 3, 6, 'White', 1, 500, '2020-09-12 05:54:48', '2020-09-12 05:54:48', 2, 200),
(65, 57, 2, 9, 'Red', 1, 500, '2020-09-12 05:54:48', '2020-09-12 05:54:48', NULL, NULL),
(66, 58, 3, 8, 'White', 1, 500, '2020-09-12 05:59:51', '2020-09-12 05:59:51', 2, 200),
(67, 59, 3, 8, 'White', 1, 500, '2020-09-12 06:03:30', '2020-09-12 06:03:30', 2, 200),
(68, 67, 3, 9, 'White', 2, 1000, '2020-09-12 06:08:12', '2020-09-12 06:08:12', 2, 200),
(69, 68, 3, 8, 'White', 1, 500, '2020-09-12 06:11:10', '2020-09-12 06:11:10', 2, 200),
(70, 69, 3, 6, 'White', 1, 500, '2020-09-12 06:12:06', '2020-09-12 06:12:06', 2, 200),
(71, 71, 3, 8, 'White', 1, 500, '2020-09-12 06:14:54', '2020-09-12 06:14:54', 2, 200),
(72, 72, 2, 7, 'Red', 1, 500, '2020-09-12 23:20:03', '2020-09-12 23:20:03', NULL, NULL),
(73, 73, 3, 7, 'White', 3, 1500, '2020-09-14 07:25:25', '2020-09-14 07:25:25', 2, 200),
(74, 74, 2, 9, 'Red', 1, 500, '2020-09-14 23:24:38', '2020-09-14 23:24:38', NULL, NULL),
(75, 75, 2, 7, 'Red', 1, 500, '2020-09-14 23:57:02', '2020-09-14 23:57:02', NULL, NULL),
(76, 76, 3, 8, 'White', 1, 500, '2020-09-14 23:58:38', '2020-09-14 23:58:38', 2, 200),
(77, 77, 3, 6, 'White', 3, 1500, '2020-09-15 00:07:12', '2020-09-15 00:07:12', 2, 200),
(78, 78, 3, 6, 'White', 1, 500, '2020-09-15 00:07:37', '2020-09-15 00:07:37', 2, 200),
(79, 78, 2, 9, 'Red', 1, 500, '2020-09-15 00:07:37', '2020-09-15 00:07:37', NULL, NULL),
(80, 79, 2, 7, 'Red', 1, 500, '2020-09-15 01:21:17', '2020-09-15 01:21:17', NULL, NULL),
(81, 79, 2, 6, 'Red', 1, 500, '2020-09-15 01:21:17', '2020-09-15 01:21:17', NULL, NULL),
(82, 80, 5, 7, 'Blue', 1, 500, '2020-09-15 01:52:45', '2020-09-15 01:52:45', NULL, NULL),
(83, 80, 3, 9, 'White', 1, 500, '2020-09-15 01:52:45', '2020-09-15 01:52:45', 2, 200),
(84, 81, 2, 7, 'Red', 1, 500, '2020-09-15 01:56:38', '2020-09-15 01:56:38', NULL, NULL);

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
(51, 36, 'Packed', '2020-08-13 06:30:39', '2020-08-13 06:30:39'),
(52, 37, 'Ordered', '2020-08-18 06:19:12', '2020-08-18 06:19:12'),
(53, 38, 'Ordered', '2020-08-20 01:23:11', '2020-08-20 01:23:11'),
(54, 38, 'Packed', '2020-08-20 01:24:07', '2020-08-20 01:24:07'),
(55, 38, 'Shipped', '2020-08-20 01:24:22', '2020-08-20 01:24:22'),
(56, 38, 'Delivered', '2020-08-20 01:24:30', '2020-08-20 01:24:30'),
(57, 39, 'Ordered', '2020-08-20 04:48:57', '2020-08-20 04:48:57'),
(58, 40, 'Ordered', '2020-09-02 19:58:03', '2020-09-02 19:58:03'),
(59, 41, 'Ordered', '2020-09-03 00:45:09', '2020-09-03 00:45:09'),
(60, 42, 'Ordered', '2020-09-03 00:50:54', '2020-09-03 00:50:54'),
(61, 43, 'Ordered', '2020-09-03 08:15:38', '2020-09-03 08:15:38'),
(62, 44, 'Ordered', '2020-09-05 06:24:25', '2020-09-05 06:24:25'),
(63, 45, 'Ordered', '2020-09-05 06:31:21', '2020-09-05 06:31:21'),
(64, 46, 'Ordered', '2020-09-05 06:59:06', '2020-09-05 06:59:06'),
(65, 47, 'Ordered', '2020-09-09 05:08:41', '2020-09-09 05:08:41'),
(66, 48, 'Ordered', '2020-09-09 07:26:10', '2020-09-09 07:26:10'),
(67, 49, 'Ordered', '2020-09-10 01:24:12', '2020-09-10 01:24:12'),
(68, 50, 'Ordered', '2020-09-10 06:48:28', '2020-09-10 06:48:28'),
(69, 51, 'Ordered', '2020-09-12 05:42:50', '2020-09-12 05:42:50'),
(70, 52, 'Ordered', '2020-09-12 05:50:24', '2020-09-12 05:50:24'),
(71, 53, 'Ordered', '2020-09-12 05:51:15', '2020-09-12 05:51:15'),
(72, 54, 'Ordered', '2020-09-12 05:51:49', '2020-09-12 05:51:49'),
(73, 55, 'Ordered', '2020-09-12 05:53:33', '2020-09-12 05:53:33'),
(74, 56, 'Ordered', '2020-09-12 05:53:40', '2020-09-12 05:53:40'),
(75, 57, 'Ordered', '2020-09-12 05:54:48', '2020-09-12 05:54:48'),
(76, 58, 'Ordered', '2020-09-12 05:59:51', '2020-09-12 05:59:51'),
(77, 59, 'Ordered', '2020-09-12 06:03:30', '2020-09-12 06:03:30'),
(78, 60, 'Ordered', '2020-09-12 06:04:22', '2020-09-12 06:04:22'),
(79, 61, 'Ordered', '2020-09-12 06:05:17', '2020-09-12 06:05:17'),
(80, 62, 'Ordered', '2020-09-12 06:05:39', '2020-09-12 06:05:39'),
(81, 63, 'Ordered', '2020-09-12 06:05:50', '2020-09-12 06:05:50'),
(82, 64, 'Ordered', '2020-09-12 06:07:14', '2020-09-12 06:07:14'),
(83, 65, 'Ordered', '2020-09-12 06:07:22', '2020-09-12 06:07:22'),
(84, 66, 'Ordered', '2020-09-12 06:07:38', '2020-09-12 06:07:38'),
(85, 67, 'Ordered', '2020-09-12 06:08:12', '2020-09-12 06:08:12'),
(86, 68, 'Ordered', '2020-09-12 06:11:10', '2020-09-12 06:11:10'),
(87, 69, 'Ordered', '2020-09-12 06:12:06', '2020-09-12 06:12:06'),
(88, 70, 'Ordered', '2020-09-12 06:14:16', '2020-09-12 06:14:16'),
(89, 71, 'Ordered', '2020-09-12 06:14:54', '2020-09-12 06:14:54'),
(90, 72, 'Ordered', '2020-09-12 23:20:03', '2020-09-12 23:20:03'),
(91, 73, 'Ordered', '2020-09-14 07:25:25', '2020-09-14 07:25:25'),
(92, 74, 'Ordered', '2020-09-14 23:24:38', '2020-09-14 23:24:38'),
(93, 75, 'Ordered', '2020-09-14 23:57:02', '2020-09-14 23:57:02'),
(94, 76, 'Ordered', '2020-09-14 23:58:38', '2020-09-14 23:58:38'),
(95, 77, 'Ordered', '2020-09-15 00:07:12', '2020-09-15 00:07:12'),
(96, 78, 'Ordered', '2020-09-15 00:07:37', '2020-09-15 00:07:37'),
(97, 79, 'Ordered', '2020-09-15 01:21:17', '2020-09-15 01:21:17'),
(98, 80, 'Ordered', '2020-09-15 01:52:45', '2020-09-15 01:52:45'),
(99, 81, 'Ordered', '2020-09-15 01:56:38', '2020-09-15 01:56:38'),
(100, 32, 'Packed', '2020-09-15 03:09:19', '2020-09-15 03:09:19');

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
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designPrice` bigint(20) DEFAULT NULL,
  `totalPrice` bigint(20) DEFAULT NULL,
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

INSERT INTO `products` (`id`, `primary_image`, `name`, `model`, `slug`, `color`, `price`, `type`, `designPrice`, `totalPrice`, `idealFor`, `stock`, `outerMaterial`, `soleMaterial`, `upperPattern`, `description`, `created_at`, `updated_at`) VALUES
(2, 'images/XbH0B273281-99DD-486E-A53F-B4B914EBAC35.jpeg', 'New Product 1', 'New Model', 'new-product-1', 'Red', 500, 'with_design', 200, 700, 'men', 50, 'Outer Material', 'Sole Material', 'Upper Pattern', '<span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description</span>', '2020-09-02 17:24:38', '2020-09-15 01:53:48'),
(3, 'images/yA4845D95E8-762A-4E1B-A1F9-04B924F91D12.jpeg', 'New  Product 2 `', 'Without Design', 'new-product-2', 'White', 300, 'without_design', NULL, 300, 'men', 50, 'Outer Material', 'Sole Material', 'Upper Pattern', '<span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description&nbsp;</span><span style=\"letter-spacing: 0.3px;\">Description</span>', '2020-09-02 17:34:56', '2020-09-15 02:06:08'),
(5, 'images/Nbr30546AAD-8C7D-4AC8-99F1-01D9006044E0.jpeg', 'New Product 4', 'MW-453853245435', 'new-product-4', 'Blue', 500, 'with_design', 100, 600, 'men', 22, 'Outer Material', 'Sole Material', 'Something', 'whbvihaw uphfuewhafueh uofhIEHFOI IFHEWofihw kksocn', '2020-09-15 01:38:50', '2020-09-15 01:55:58'),
(6, 'images/0Zv567F9F63-3D73-4D31-94AB-3E39165DBB08.jpeg', 'New Product 4', 'MW-453853245435', 'new-product-4', 'Blue', 500, 'without_design', NULL, 500, 'men', 22, 'Outer Material', 'Sole Material', 'Something', 'whbvihaw uphfuewhafueh uofhIEHFOI IFHEWofihw', '2020-09-15 01:46:12', '2020-09-15 01:46:12');

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
(32, 2, 4, NULL, NULL),
(33, 2, 5, NULL, NULL),
(34, 2, 6, NULL, NULL),
(35, 2, 7, NULL, NULL),
(37, 3, 5, NULL, NULL),
(40, 3, 4, NULL, NULL),
(41, 3, 6, NULL, NULL),
(42, 3, 7, NULL, NULL),
(46, 5, 3, NULL, NULL),
(47, 5, 4, NULL, NULL),
(48, 5, 5, NULL, NULL),
(49, 5, 6, NULL, NULL),
(50, 5, 7, NULL, NULL),
(51, 6, 3, NULL, NULL),
(52, 6, 4, NULL, NULL),
(53, 6, 5, NULL, NULL),
(54, 6, 6, NULL, NULL),
(55, 6, 7, NULL, NULL);

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
(2, 'Saab', '07888319638', 'user@gmail.com', '2020-07-27 00:32:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2W37XIRB3lydWFXV4bNTk1JzvBT6RK6ndtp4OOWBtrSKEZTE8IbYxMsqg7PB', NULL, '2020-09-03 08:17:22'),
(3, 'Jatinder Badgal', '+919914263105', 'Saabbadgalj5@gmail.com', NULL, '$2y$10$iZwWIhJp5b3p6851ZdXE0uYH55WDmsEjbQQCYGvPcOvWXL1lij65O', NULL, '2020-07-29 03:02:48', '2020-07-29 03:02:48'),
(4, 'user2', '07888319638', 'user2@gmail.com', NULL, '$2y$10$/tYDpPN3VXSeBz6c4t2PGuIf2OcLKe47oZsHDf8fGNF2jXQ9ok9YK', NULL, '2020-08-10 07:17:22', '2020-09-12 04:11:18'),
(5, 'Saab Badgal', '07888319638', 'Saabbadgal@gmail.com', NULL, '$2y$10$EtbBhorZ6IXOlfRWmZfe0.288PIzqC3zfVyQW1D9ybiDKI5ueL98q', NULL, '2020-09-15 00:36:27', '2020-09-15 00:36:27'),
(6, 'Saab Badgal', '07888319638', 'Saabbad@gmail.com', NULL, '$2y$10$3jEgQUIjA96MpVPBmLTMVOSah42hEOg3HL4TAwRCrM9UB0C1dZS7C', NULL, '2020-09-15 00:41:34', '2020-09-15 00:41:34'),
(7, 'Saab Badgal', '07888319638', 'hspa@gmail.com', NULL, '$2y$10$BmakzKX3yND9aw9eBjtn9u.OA.mGV7VJ.Y4eEZNA0RsGhG0VDQuim', NULL, '2020-09-15 00:43:01', '2020-09-15 00:43:01'),
(8, 'Saab Badgal', '07888319638', 'hs@gmail.com', NULL, '$2y$10$OaLDutEaeWRYsyLJ30IInef0p0CFE0j1u12wWlGZ3dv72s2o8Rv02', NULL, '2020-09-15 00:46:02', '2020-09-15 00:46:02'),
(9, 'Saab Badgal', '07888319638', 'fwiejb@gmail.com', NULL, '$2y$10$RpcDyHB96knVGB1KsvVhJ.vA/U/VuzND2Qh6ZTSr18OGVWAECKLES', NULL, '2020-09-15 01:01:13', '2020-09-15 01:01:13'),
(10, 'Saab Badgal', '07888319638', 'ihdbucub@gmail.com', NULL, '$2y$10$lvzI56LfMKIuVRBkC0W6NOpkz6tlxrP0qmHHVMVlC7kQ7mQX68prS', NULL, '2020-09-15 01:02:26', '2020-09-15 01:02:26'),
(11, 'Saab Badgal', '07888319638', 'vevarev@gmail.com', NULL, '$2y$10$8Rq1V0Ko8SQV76jUbmQShOskHIN3/gXH2L592TJM7gz9qiAcvZRei', NULL, '2020-09-15 01:03:36', '2020-09-15 01:03:36'),
(12, 'Saab Badgal', '07888319638', 'wewfwe@gmail.com', NULL, '$2y$10$3P09WP2Zhq3XdOlzDGPIg.LKlMAkDQBM1NUIMOfIDKgLJX8bdpJ.G', NULL, '2020-09-15 01:09:39', '2020-09-15 01:09:39'),
(13, 'Saab Badgal', '07888319638', 'fefcewefacaew@gmail.com', NULL, '$2y$10$0D267pPwmGc6dFJWbHeWC.dGSE6BoIbABFW/SFcG6LC.y3Ur3kvsK', NULL, '2020-09-15 01:10:27', '2020-09-15 01:10:27'),
(14, 'Saab Badgal', '07888319638', 'cwefcecwe5@gmail.com', NULL, '$2y$10$F.z2RvtIIZg1aXzjJ0coJOmnFB5kFMYVT4XFEDQWFRubdcZDkMLkm', NULL, '2020-09-15 01:11:22', '2020-09-15 01:11:22'),
(15, 'Saab Badgal', '07888319638', 'uavrhduo@gmail.com', NULL, '$2y$10$U.HmHl9LeBCdS2HSJ3Ruau2kSJncZbZFPkPWxwPDUEtpM1B3ruoK.', NULL, '2020-09-15 01:12:24', '2020-09-15 01:12:24'),
(16, 'Saab Badgal', '07888319638', 'ewvcadvwv@gmail.com', NULL, '$2y$10$I2UDKpa7ckpft0n5XoyeyuCuKjh0hS9HwTZJG8bzWfxda.qWc27kS', NULL, '2020-09-15 01:14:41', '2020-09-15 01:14:41'),
(17, 'Saab Badgal', '07888319638', 'awfewcewfcaewd@gmail.com', NULL, '$2y$10$d7e/X2Hy0je5S6G3hKTRuu1WFQGwq/tVLqJLokZ.Bz1irJMLgRW4a', NULL, '2020-09-15 01:14:57', '2020-09-15 01:14:57'),
(18, 'Saab Badgal', '07888319638', 'wcacwdc@gmail.com', NULL, '$2y$10$pgGS6lIUf9SL/uYTe8pD7O2kFKZ7HV/lQEHEUB511Gk0TpqHHn5YO', NULL, '2020-09-15 01:16:03', '2020-09-15 01:16:03'),
(19, 'Saab Badgal', '07888319638', 'dsvvesf@gmail.com', NULL, '$2y$10$Ll7IdOyeatZX8ZG0eN05dOK4k0Jhkw3hcHXeG1sQVHTKzhUR1MAFy', NULL, '2020-09-15 01:16:44', '2020-09-15 01:16:44'),
(20, 'Saab Badgal', '07888319638', 'eafewfcwe@gmail.com', NULL, '$2y$10$vE17CZPCK335.jbqcZL8e.HvJ3k572ZlzNlVTcH.YjL04FClhqwEW', NULL, '2020-09-15 01:17:11', '2020-09-15 01:17:11');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `order_address`
--
ALTER TABLE `order_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
