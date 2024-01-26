-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 02:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamai_pansalai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$12$UjwLYGWxhpOtxTzXM/KvuOX33NXkf5ql1CXXhA6tuz9ryr4lBbw6a', '2024-01-23 08:26:21', '2024-01-23 08:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `bana`
--

CREATE TABLE `bana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thero` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bana`
--

INSERT INTO `bana` (`id`, `thero`, `title`, `media`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dhammapala thero', 'Buddhists', 'buddhists.mkv', 'buddhists.jpg', '2024-01-22 08:40:03', '2024-01-25 02:31:55'),
(2, 'Dhammarama thero', 'Buddhists', 'buddhists.mkv', 'buddhists.jpg', '2024-01-22 08:40:03', '2024-01-25 03:00:58'),
(4, 'Seth Bana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'media.mkv', 'image.jpg', '2024-01-25 01:28:51', '2024-01-25 01:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `dharma_deshana_grantha`
--

CREATE TABLE `dharma_deshana_grantha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `book_pdf` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dharma_deshana_grantha`
--

INSERT INTO `dharma_deshana_grantha` (`id`, `name`, `details`, `author`, `book_pdf`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Thripitakaya', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'author', 'thripitakaya.pdf', 'thripitakaya.jpg', '2024-01-24 08:17:11', '2024-01-24 08:17:11'),
(2, 'Buddhists', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'author2', 'buddhists.pdf', 'buddhists.jpg', '2024-01-24 08:19:23', '2024-01-24 08:19:23'),
(3, 'Hela diwa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'author3', 'hela_diwa.pdf', 'hela_diwa.jpg', '2024-01-24 08:20:25', '2024-01-24 08:20:25'),
(4, 'Hela diwa part 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'author3', 'hela_diwa2.pdf', 'hela_diwa2.jpg', '2024-01-24 08:20:30', '2024-01-24 10:43:35'),
(5, 'Budu siritha', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'author4', 'budu_siritha.pdf', 'budu_siritha.jpg', '2024-01-24 08:22:40', '2024-01-24 08:22:40'),
(10, 'Sherlock Holmes', 'Adventure book', 'Chandana mendis', 'C:\\xampp\\tmp\\php7E70.tmp', 'C:\\xampp\\tmp\\php7E71.tmp', '2024-01-25 17:52:49', '2024-01-25 17:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idiriyata_ena_daham_wedasatahan`
--

CREATE TABLE `idiriyata_ena_daham_wedasatahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idiriyata_ena_daham_wedasatahan`
--

INSERT INTO `idiriyata_ena_daham_wedasatahan` (`id`, `name`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Budu Siritha', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'budu_siritha.jpg', '2024-01-24 19:48:49', '2024-01-24 19:48:49'),
(2, 'Budu Siritha 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'budu_siritha2.jpg', '2024-01-24 19:52:59', '2024-01-24 19:52:59'),
(3, 'Dharmaya', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'dharmaya.jpg', '2024-01-24 19:53:28', '2024-01-24 19:53:28'),
(4, 'Bana deshana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'banadeshana.jpg', '2024-01-24 19:54:42', '2024-01-24 20:02:05'),
(5, 'Pirith deshana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'pirithdeshana.jpg', '2024-01-24 19:57:09', '2024-01-24 20:02:43'),
(7, 'Shramadanaya', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'shramadana.jpg', '2024-01-24 19:59:44', '2024-01-24 19:59:44');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2024_01_21_113657_create_pansal_table', 2),
(22, '2024_01_22_004253_create_dharma_deshana_grantha', 3),
(23, '2024_01_22_020315_create_idiriyata_ena_daham_wedasatahan', 4),
(24, '2024_01_22_053042_create_wath_piliweth_table', 5),
(25, '2024_01_22_060418_create_pirith_table', 6),
(26, '2024_01_22_072434_create_bana_table', 7),
(27, '2024_01_22_100954_create_notification_table', 8),
(29, '2024_01_22_130550_create_admin_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `notification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `notification`, `created_at`, `updated_at`) VALUES
(1, 'Bana katha', 'lorem ipsum', '2024-01-22 12:05:16', '2024-01-25 03:03:21'),
(2, 'Bana katha 2', 'lorem ipsum', '2024-01-29 12:05:16', '2024-01-25 03:03:56'),
(4, 'Adden new bana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '2024-01-25 02:57:31', '2024-01-25 02:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `pansal`
--

CREATE TABLE `pansal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `thero` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `gallery` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `monk` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pansal`
--

INSERT INTO `pansal` (`id`, `name`, `review`, `thero`, `town`, `details`, `gallery`, `history`, `monk`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Sri Dalada Maligawa', '5 star', 'Dhammarama thero', 'Kandy', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 03:56:09', '2024-01-24 03:56:09'),
(2, 'Mihinthalaya', '5 star', 'Dhammarama thero', 'Anuradhapura', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 03:58:18', '2024-01-24 03:58:18'),
(3, 'Maligathenna', '5 star', 'Dhammarama thero', 'Gampaha', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:00:58', '2024-01-24 04:00:58'),
(4, 'Umandawa', '5 star', 'Samantha badra thero', 'Jaffna', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:06:48', '2024-01-24 04:06:48'),
(5, 'Ambuluwawa', '5 star', 'Dammarakkitha thero', 'Mawanella', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:07:17', '2024-01-24 06:06:45'),
(6, 'bbb', '5 star', 'Samantha badra thero', 'Jaffna', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:07:23', '2024-01-24 04:07:23'),
(7, 'ccc', '5 star', 'Samantha badra thero', 'Jaffna', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:07:28', '2024-01-24 04:07:28'),
(8, 'ddd', '5 star', 'Samantha badra thero', 'Jaffna', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:07:33', '2024-01-24 04:07:33'),
(9, 'eee', '5 star', 'Samantha badra thero', 'Jaffna', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam tempora fuga ducimus blanditiis reprehenderit necessitatibus, porro itaque.', 'image1, image2, image3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestiae nostrum sapiente ad maiores eius voluptatem assumenda. Consectetur odit sunt veritatis aliquam', 'Monk1, Monk2, Monk3', 'https://maps.app.goo.gl/KbD9cYwDPSqZtbK78', '2024-01-24 04:07:40', '2024-01-24 04:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Gamai_Pansalai', '35a4716dc47d60343ea9f6c2223d0db0ce7dc83c9f5c77392bcca72cb8099248', '[\"*\"]', NULL, NULL, '2024-01-21 03:57:12', '2024-01-21 03:57:12'),
(2, 'App\\Models\\User', 1, 'Gamai_Pansalai', '7643ee37eb3ffd13beb6d7ff619379443cf03b484e60f13b94a54dcea4389e16', '[\"*\"]', NULL, NULL, '2024-01-21 04:08:13', '2024-01-21 04:08:13'),
(3, 'App\\Models\\User', 1, 'Gamai_Pansalai', 'b8da6a3c2d6e8287c9785f80484cce4bca582dc8568a74678166e917427f797a', '[\"*\"]', NULL, NULL, '2024-01-23 08:41:04', '2024-01-23 08:41:04'),
(4, 'App\\Models\\User', 1, 'Gamai_Pansalai', 'f7a2a8e3e509341850032cd5e488b8839b1fe37d893611358433a23cfa461c8d', '[\"*\"]', NULL, NULL, '2024-01-25 17:15:07', '2024-01-25 17:15:07'),
(5, 'App\\Models\\User', 3, 'Gamai_Pansalai', '0db1f7a2a97d6ce3054ff1a14bd0d649363f83f6bf9c8b9236f1e2ced5513b43', '[\"*\"]', NULL, NULL, '2024-01-25 17:21:48', '2024-01-25 17:21:48'),
(6, 'App\\Models\\User', 1, 'Gamai_Pansalai', '8c4bc415d96e43301bf39d5725129e8e96d0470ac52bd16ebe5ce655bde949eb', '[\"*\"]', NULL, NULL, '2024-01-25 17:36:06', '2024-01-25 17:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `pirith`
--

CREATE TABLE `pirith` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `media` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pirith`
--

INSERT INTO `pirith` (`id`, `name`, `image`, `media`, `created_at`, `updated_at`) VALUES
(3, 'Dasa Mara Piritha', 'image.jpg', 'media.mkv', NULL, '2024-01-25 00:33:38'),
(4, 'Mara Piritha', 'image.jpg', 'media.mkv', NULL, '2024-01-25 00:33:09'),
(5, 'Seth Pirith', 'image.jpg', 'media.mkv', '2024-01-25 00:27:51', '2024-01-25 00:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `gender`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'malith', 'malith@gmail.com', '0757449334', '$2y$12$emDuchIAdvcu7RvXWSaxme5rsPpInsUjxALQX9NpQHTBS7qmh17sC', 'male', 'malith.jpg', NULL, '2024-01-21 03:57:12', '2024-01-25 17:39:26'),
(3, 'malith', 'malithds@gmail.com', '0757449334', '$2y$12$7zrIifKRp4CeiivRaOl3aOvmLVgMrHX/SQTPABjCCGEG2PgrwrvHK', 'male', 'malith.jpg', NULL, '2024-01-25 17:21:48', '2024-01-25 17:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `wath_piliweth`
--

CREATE TABLE `wath_piliweth` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wath_piliweth`
--

INSERT INTO `wath_piliweth` (`id`, `topic`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'dansal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'image.jpg', '2024-01-22 05:36:34', '2024-01-24 21:14:14'),
(2, 'mal puja', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'image.jpg', '2024-01-22 05:37:29', '2024-01-24 21:12:53'),
(3, 'Pirith', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'image.jpg', '2024-01-24 20:33:39', '2024-01-24 20:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bana`
--
ALTER TABLE `bana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dharma_deshana_grantha`
--
ALTER TABLE `dharma_deshana_grantha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `idiriyata_ena_daham_wedasatahan`
--
ALTER TABLE `idiriyata_ena_daham_wedasatahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pansal`
--
ALTER TABLE `pansal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pirith`
--
ALTER TABLE `pirith`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_password_unique` (`password`);

--
-- Indexes for table `wath_piliweth`
--
ALTER TABLE `wath_piliweth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bana`
--
ALTER TABLE `bana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dharma_deshana_grantha`
--
ALTER TABLE `dharma_deshana_grantha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idiriyata_ena_daham_wedasatahan`
--
ALTER TABLE `idiriyata_ena_daham_wedasatahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pansal`
--
ALTER TABLE `pansal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pirith`
--
ALTER TABLE `pirith`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wath_piliweth`
--
ALTER TABLE `wath_piliweth`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
