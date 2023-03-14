-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 06:23 PM
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
-- Database: `stefan_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Apple iPhone 14 Plus', '6 GB/ 128 GB/ Single SIM/ Yellow', 'Capacitatea acumulatorului	4323 mAh Memorie internă	128 GB RAM	6 GB Dimensiune ecran	6.7 Tip display	Super Retina XDR OLED Numărul de SIM	Single SIM', '2023-03-14 11:59:35', '2023-03-14 11:59:35'),
(2, 'Xiaomi Redmi Note 10 Pro', '6 GB/ 128 GB/ Dual SIM/ Green', 'Capacitatea acumulatorului	5020 mAh Memorie internă	128 GB RAM	6 GB Dimensiune ecran	6.67 Tip display	AMOLED Numărul de SIM	Dual SIM', '2023-03-14 12:00:02', '2023-03-14 12:00:02'),
(3, 'Apple iPhone 11 (updated)', '4 GB/ 128 GB/ Single SIM/ Black', 'Capacitatea acumulatorului	3110 mAh Memorie internă	128 GB RAM	4 GB Dimensiune ecran	6.1 Tip display	Retina IPS LCD Numărul de SIM	Single SIM', '2023-03-14 12:00:12', '2023-03-14 12:08:34'),
(4, 'Xiaomi Redmi 10C', '4 GB/ 64 GB/ Dual SIM/ Green', 'Capacitatea acumulatorului	5000 mAh Memorie internă	64 GB RAM	4 GB Dimensiune ecran	6.71 Tip display	IPS Numărul de SIM	Dual SIM', '2023-03-14 12:00:23', '2023-03-14 12:00:23'),
(5, 'Realme 8i', '4 GB/ 128 GB/ Dual SIM/ Purple', 'Capacitatea acumulatorului	5000 mAh Memorie internă	128 GB RAM	4 GB Dimensiune ecran	6.6 Tip display	IPS Numărul de SIM	Dual SIM', '2023-03-14 12:00:33', '2023-03-14 12:00:33'),
(6, 'Samsung Galaxy S23 S911', '8 GB/ 256 GB/ Dual SIM/ Beige', 'Capacitatea acumulatorului	3900 mAh Memorie internă	256 GB RAM	8 GB Dimensiune ecran	6.1 Tip display	Dynamic AMOLED 2X Numărul de SIM	Dual SIM', '2023-03-14 12:00:44', '2023-03-14 12:00:44'),
(8, 'Apple iPhone SE 2020', '3 GB/ 64 GB/ Single SIM/ Black', 'Capacitatea acumulatorului	1820 mAh Memorie internă	64 GB RAM	3 GB Dimensiune ecran	4.7 Tip display	Retina IPS LCD Numărul de SIM	Single SIM', '2023-03-14 12:09:12', '2023-03-14 12:09:12');

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `file_path` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file_path`, `created_at`, `updated_at`) VALUES
(1, '1678805096_Laravel 8-CRUD.pdf', '/storage/uploads/1678805096_Laravel 8-CRUD.pdf', '2023-03-14 12:44:56', '2023-03-14 12:44:56'),
(2, '1678805358_LoginRegistration_Laravel_8.pdf', '/storage/uploads/1678805358_LoginRegistration_Laravel_8.pdf', '2023-03-14 12:49:18', '2023-03-14 12:49:18');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_14_132241_create_articles_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2023_03_14_143104_create_files_table', 2),
(8, '2023_03_14_164023_create_votes_table', 3),
(9, '2023_03_14_170940_create_votes_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('stefanspinu3@gmail.com', '$2y$10$vrb2bUNCCX7C9QyxrXa9J.NW8d/zNLZ9pzv2Lr6A/NSs0HZ3oJyIa', '2023-03-14 12:23:32');

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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'stefan', 'stefanspinu3@gmail.com', NULL, '$2y$10$a2VGKEtzcf8NUmLIj4iAc.1E7bMIYcK3fQGYlqcIbiSrqI94a8qM6', NULL, '2023-03-14 12:21:19', '2023-03-14 12:21:19'),
(2, 'Dima', 'dima@gmail.com', NULL, '$2y$10$xurxUzBjB8Efgocq0lNMW.LXr.C/iOpyeiBvPWLtEOf9zsNA.DVcy', NULL, '2023-03-14 15:19:26', '2023-03-14 15:19:26'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$pg1vQlka5RIVTReGzCKVXOVnQQsLDeHhO6g6fEP.OuqtNtuoqiXy6', NULL, '2023-03-14 15:20:12', '2023-03-14 15:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choice` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `choice`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'php', 1, '2023-03-14 15:13:33', '2023-03-14 15:13:33'),
(2, 'java', 2, '2023-03-14 15:19:36', '2023-03-14 15:19:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
