-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 08:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `versatile`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, NULL, '1676956109.jpg', '2023-02-16 05:36:14', '2023-02-20 23:08:30'),
(3, NULL, '1676956415.jpg', '2023-02-16 05:47:56', '2023-02-20 23:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Accord Recognation Certificate - Dress World Ltd', 'Test Certification lhfdkash\r\n lkjlkasjdfas\r\n jhnasklfsd\r\nasfjdsoifsdhafuoihsdfhsodhfsdg\r\nsdfosdgfhsdohgoisdhjfosjfsd kahf ksafhsd ikshfksd \r\nswfhsodjfsd olhsfalknsd ;oihjsdfojsd opisuerfsdhfl fsfsdfg', '1676957960.jpg', '2023-02-20 00:24:14', '2023-02-20 23:42:09'),
(3, 'Membership Certificate', 'Membership Certificate of Bangladesh Garment Manufacturers and Exporters Association', '1676958429.png', '2023-02-20 23:47:09', '2023-02-20 23:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MohamedNur Abshir', 'admin@gmail.com', '+252617485970', 'sadfsafsdf', '2023-02-20 05:27:16', '2023-02-20 05:27:16'),
(2, 'MohamedNur Abshir', 'mnor32779@gmail.com', '+8801792636546', 'ZDXZCZX', '2023-02-20 05:28:27', '2023-02-20 05:28:27'),
(3, 'Mohamed Nour', 'info@versatile.com', '+8801730931984', 'dsadas', '2023-02-20 05:31:36', '2023-02-20 05:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `factory_infos`
--

CREATE TABLE `factory_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awrads` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_infos`
--

INSERT INTO `factory_infos` (`id`, `unit`, `awrads`, `employees`, `factories`, `created_at`, `updated_at`) VALUES
(1, '700K +', '200 +', '7K +', '15 +', '2023-02-21 06:44:44', '2023-02-21 00:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Founder', '1676886297.jpg', '2023-02-20 03:44:57', '2023-02-20 03:45:51'),
(6, 'Display Room', '1676959219.jpg', '2023-02-21 00:00:19', '2023-02-21 00:00:19'),
(7, 'Sewing Floor', '1676959271.jpg', '2023-02-21 00:01:11', '2023-02-21 00:01:11'),
(8, 'Ironing', '1676959321.jpg', '2023-02-21 00:02:01', '2023-02-21 00:02:01'),
(9, 'Finishing', '1676959369.jpg', '2023-02-21 00:02:49', '2023-02-21 00:02:49'),
(10, 'Finished Fabric Checking', '1676959550.jpg', '2023-02-21 00:05:50', '2023-02-21 00:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, '1676459509.jpg', '2023-02-15 00:22:19', '2023-02-15 05:18:50'),
(4, NULL, NULL, '1676459524.jpg', '2023-02-15 00:34:16', '2023-02-15 05:19:10'),
(5, NULL, NULL, '1676459542.jpg', '2023-02-15 01:28:02', '2023-02-15 05:19:16'),
(6, NULL, NULL, '1676446098.jpg', '2023-02-15 01:28:18', '2023-02-15 05:19:30'),
(7, NULL, NULL, '1676459564.jpg', '2023-02-15 01:28:35', '2023-02-15 05:20:41'),
(8, NULL, NULL, '1676459597.jpg', '2023-02-15 05:13:17', '2023-02-15 05:20:53');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_02_15_045239_create_home_sliders_table', 2),
(14, '2023_02_16_055122_create_products_table', 3),
(15, '2023_02_16_103453_create_brands_table', 4),
(16, '2023_02_20_045710_create_reviews_table', 5),
(17, '2023_02_20_054319_create_certificates_table', 6),
(19, '2023_02_20_065549_create_teams_table', 7),
(20, '2023_02_20_090304_create_galleries_table', 8),
(21, '2023_02_20_095246_create_news_table', 9),
(22, '2023_02_20_111049_create_contacts_table', 10),
(23, '2023_02_20_114500_create_settings_table', 11),
(24, '2023_02_21_062421_create_factory_infos_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'test v', 'sdffdsfgsdfg v', '1676888857.jpg', '2023-02-20 04:27:16', '2023-02-20 04:27:37');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabric` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` enum('mensItem','boysItem','girlsItem','kidsItem','ladiesItem') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `fabric`, `weight`, `product_type`, `image`, `created_at`, `updated_at`) VALUES
(2, '80% COTTON 20% Polyester S/J', 'MENS T Shirt', '160 GSM', 'mensItem', '1676534958.jpg', '2023-02-16 01:15:38', '2023-02-16 02:09:18'),
(3, 'MENS POLO', '100% Polyester Mesh', '180 GSM', 'mensItem', '1676540889.jpg', '2023-02-16 03:48:10', '2023-02-16 03:48:10'),
(4, 'MENS Henley', '100% COTTON S/J INKJECTED YARN', '160 GSM', 'mensItem', '1676541092.jpg', '2023-02-16 03:51:32', '2023-02-16 03:51:32'),
(5, 'MENS Hoodie Jacket (Acid washed)', '100% COTTON Terry', '260 GSM', 'mensItem', '1676541153.jpg', '2023-02-16 03:52:33', '2023-02-16 03:52:33'),
(6, 'Boys Sweat Pant', '100% COTTON Fleece', '260 GSM', 'boysItem', '1676541329.jpg', '2023-02-16 03:55:29', '2023-02-16 03:55:29'),
(7, 'Boys T-shirt', '100% COTTON S/J AOP', '160 GSM', 'boysItem', '1676541431.jpg', '2023-02-16 03:57:11', '2023-02-16 03:57:11'),
(8, 'Boys Fashion T-Shirt', '80% COTTON 20% Polyester S/J Burn Out Wash', '150 GSM', 'boysItem', '1676541530.jpg', '2023-02-16 03:58:50', '2023-02-16 03:58:50'),
(9, 'Boys Fashion Hooded Jacket', '80% COTTON 20% Polyester Fleece Burn Out Wash', '260 GSM', 'boysItem', '1676541628.jpg', '2023-02-16 04:00:28', '2023-02-16 04:00:28'),
(10, 'Girls Sweat Jacket', '100% COTTON Terry', '260 GSM', 'girlsItem', '1676551331.jpg', '2023-02-16 06:42:11', '2023-02-16 06:42:11'),
(11, 'Girls Jump Suit', '95% COTTON 5% Elastane S/J', '160 GSM', 'girlsItem', '1676551369.jpg', '2023-02-16 06:42:49', '2023-02-16 06:42:49'),
(12, 'Girls Sweat Shirt', '100% Polyester Micro Fleece', '260 GSM', 'girlsItem', '1676551444.jpg', '2023-02-16 06:44:04', '2023-02-16 06:44:04'),
(13, 'Girls Dress', '95% Viscose 5% Elastane S/J Tie Dyed', '160 GSM', 'girlsItem', '1676551533.jpg', '2023-02-16 06:45:33', '2023-02-16 06:45:33'),
(14, 'Girls AOP Pant', '100% COTTON S/J', '160 GSM', 'girlsItem', '1676551587.jpg', '2023-02-16 06:46:27', '2023-02-16 06:46:27'),
(15, 'Girls Jump Suit', '95% Viscose 5% Spandex AOP', '160 GSM', 'girlsItem', '1676551652.jpg', '2023-02-16 06:47:32', '2023-02-16 06:47:32'),
(16, 'Boys Terry Shorts', '80% COTTON 20% Polyester Terry', '200 GSM', 'boysItem', '1676551791.jpg', '2023-02-16 06:49:51', '2023-02-16 06:49:51'),
(17, 'Boys Fashion Hooded Jacket', '80% COTTON 20% Polyester Fleece', '260 GSM', 'boysItem', '1676551846.jpg', '2023-02-16 06:50:46', '2023-02-16 06:50:46'),
(18, 'Kids Sweat Jacket', '100% Polyester Coral Fleece', '260 GSM', 'kidsItem', '1676551999.jpg', '2023-02-16 06:53:19', '2023-02-16 06:53:19'),
(19, 'Kids Sweat Pant', '80% COTTON 20% Polyester Terry Acid Washed', '240 GSM', 'kidsItem', '1676552047.jpg', '2023-02-16 06:54:07', '2023-02-16 06:54:07'),
(20, 'Kids Sweat Shirt', '100% COTTON Fleece', '250 GSM', 'kidsItem', '1676552106.jpg', '2023-02-16 06:55:06', '2023-02-16 06:55:06'),
(21, 'Kids T-shirt', '100% COTTON S/J', '160 GSM', 'kidsItem', '1676552153.jpg', '2023-02-16 06:55:53', '2023-02-16 06:55:53'),
(22, 'Kids Romper', '80% COTTON 20% Polyester Velour', '220 GSM', 'kidsItem', '1676552195.jpg', '2023-02-16 06:56:35', '2023-02-16 06:56:35'),
(23, 'Kids Polo Shirt', '100% COTTON S/J Y/D', '180 GSM', 'kidsItem', '1676552228.jpg', '2023-02-16 06:57:08', '2023-02-16 06:57:08'),
(24, 'Ladies Top & Bottom Night Dress Set', '100% COTTON S/J', '160 GSM', 'ladiesItem', '1676712779.jpg', '2023-02-18 03:32:59', '2023-02-18 03:32:59'),
(25, 'Ladies Top & Bottom Night Dress Set', '100% COTTON S/J', '160 GSM', 'ladiesItem', '1676712811.jpg', '2023-02-18 03:33:31', '2023-02-18 03:33:31'),
(26, 'Ladies Y/D Polo Shirt', '95% Combed Cotton 5% Spandex Pique Y/D', '200 GSM', 'ladiesItem', '1676712867.jpg', '2023-02-18 03:34:27', '2023-02-18 03:34:27'),
(27, 'Descriptions : Ladies AOP T-Shirt', '100% Viscose S/J AOP', '160 GSM', 'ladiesItem', '1676712899.jpg', '2023-02-18 03:34:59', '2023-02-18 03:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Amazing Service', 'Amazing Service Test ,dnsadlkas;ldadask;d;lkasdkdf\r\nfdksdopkfdggkopsdfkmlm;\';apaiueiqwlhakjdhann\r\njfoisufousdofjopsdjfsdf\r\nsdopfiuwe0aur89uwelnlksfnkjsdkcjbnxzlk[pasoidfhyas\r\nspfuisopdahfouyvc,oifmcsjm,cfs.\r\nsjk fh bjpf,j,c hmc\r\n  oio,rfcw \r\nrwv wep  0uoweutpwer iuw[ wpoketg p p gj p p [ktwepo tkpwt', '1676871522.jpg', '2023-02-19 23:38:42', '2023-02-19 23:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Versital', 'info@versatile.com', '+8801762686627', '89/2 Chaydana, Degerchala, National University, Gazipur , Bangladesh., Dhaka, Bangladesh', NULL, '2023-02-20 06:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Abdul Kalam Azad', 'Founder', 'A visionary Textile Engineer and a successful Textile Professional. Established himself as a specialist business personal in the field of Textile and Garments business. His mission is to provide quality products to the customers and ensuring benefit to the employees and the society at large. Mr. Abul Kalam Azad views his business as a means of financial and moral gains by which can serve the society to achieve SDG for the sake of human civilization.', '1676881842.jpg', NULL, '2023-02-20 02:30:42'),
(2, 'Bezu Ahmed', 'Manager', 'sadsadfsacsdfdsfg \r\ndsfsdfsdgmsdlkfgsd\r\n sdfsdjkhjsd fsdkjbfkjsd kbsnfdkkj kjbnfksd\r\njksdfkljnsdjk oksjfo iuhyit iafsk', '1676962898.jpg', NULL, '2023-02-21 01:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Versatile', 'info@versatile.com', 1, NULL, '$2y$10$5UnpiCoV4Ly9vcCl65wJ7uu74RyNBHL0d/dy.fHkYmvB9aPqy/DIK', '01713044093', '89/2, Chaydana, Degerchala Road, National University, Gazipur', NULL, NULL, '2023-02-16 00:31:39'),
(6, 'Nour', 'mnor32779@gmail.com', 0, NULL, '$2y$10$R28VCkvI4qW5/5BHjw4Ew.rP/VjgSx03HWb5DVr7UKmFCV/QjpzN2', '01730931984', 'panthapath', NULL, '2023-02-14 06:07:41', '2023-02-15 00:33:53'),
(14, 'test', 'info@temobd.com', 0, NULL, '$2y$10$lyPptZqQiU.fLPIt2qr3BOagpe0wTByWSywDhinqVC4RrLPE3wFnO', '01730931984', 'panthapath', NULL, '2023-02-21 00:07:25', '2023-02-21 00:07:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_infos`
--
ALTER TABLE `factory_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `factory_infos`
--
ALTER TABLE `factory_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
