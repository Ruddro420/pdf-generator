-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 12:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_25_223318_create_uploads_table', 1),
(6, '2014_10_12_000000_create_users_table', 2);

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
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` int(11) NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_id`, `course_tittle`, `course_code`, `report_item`, `topic_name`, `std_name`, `id_no`, `session`, `std_dept`, `teacher_name`, `designation`, `teacher_dept`, `sub_time`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'Data Structure', 'CSE 3201', 'Lab Report On', 'Discuss about the basic C', 'Ali Fiad Ruddor', 1705036, '2017-18', 'Computer Science & Engineering', 'Marjiaa Sultana', 'Assistant Teacher', 'Computer Science & Engineering', '2022-08-27', 0, NULL, '2022-08-25 16:49:52', '2022-08-25 16:49:52'),
(9, 0, 'sfdgsdf', 'sdfgsdg', 'Project Report On', 'gsgsdgsd', 'sdgds', 3432, '235325', 'sdgdsgds', 'sdgds', 'sdgdsgd', 'sgsdg', '2022-08-25', 1, NULL, '2022-08-26 15:04:38', '2022-08-26 15:04:38'),
(10, 6, 'Database Management', 'CSE 3200', 'Assingment On', 'Medical Science in Graphics', 'Ali Fiad Ruddor', 12345, '2017-18', 'Computer Science & Engineering', 'Marjiaa Sultana', 'Lectural', 'Computer Science & Engineering', '2022-08-25', 1, NULL, '2022-08-26 15:08:01', '2022-08-26 15:08:01'),
(11, 7, 'Database Management', 'CSE 3200', 'Assingment On', 'Medical Science in Graphics', 'Ali Fiad Ruddor', 1705036, '2017-18', 'Computer Science & Engineering', 'Marjiaa Sultana', 'Assistant Teacher', 'Dept. Of Bangla', '2022-09-01', 1, NULL, '2022-08-26 15:12:04', '2022-08-26 15:12:04'),
(12, 4, 'sdgsd', 'sdgsdg', 'Lab Report On', 'sdgds', 'sdgdsg', 332532, 'sdgdsgdsg', 'sdgsdg', 'sdgds', 'gsdfgss', 'dgdsg', '2022-08-23', 1, NULL, '2022-08-26 15:20:51', '2022-08-26 15:20:51'),
(13, 9, 'Compute Graphics', 'CSE 3201', 'Project Report On', 'Medical Science in Graphics', 'Ali Fiad Ruddor', 1705036, '2021-22', 'Computer Science & Engineering', 'Marjiaa Sultana', 'Assistant Teacher', 'Dept. Of Bangla', '2022-08-25', 1, NULL, '2022-08-26 15:29:22', '2022-08-26 15:29:22'),
(14, 10, 'Database Management', 'CSE 3200', 'Project Report On', 'How to enable the datbase', 'Jasim MIa', 144, '2021-22', 'Dept. Of Mangment', 'Marjiaa Sultana', 'Lectural', 'Dept. Of Bangla', '2022-08-10', 1, '202208280622brur.png', '2022-08-28 11:44:25', '2022-08-28 12:22:33'),
(15, 10, 'sdgsd', 'sdgdsg', 'Project Report On', 'sdgds', 'sdgsd', 23523, 'dsgsd', 'sdgsd', 'sdgsd', 'sdgsd', 'sdgds', '2022-08-18', 1, NULL, '2022-08-28 12:25:11', '2022-08-28 12:25:11'),
(21, 11, 'sdgds', 'sdgdsg', 'Project Report On', 'sfgs', 'sgsd', 2523, 'sdgsd', 'sgsdg', 'sdgds', 'sgsd', 'sdgds', '2022-08-23', 1, NULL, '2022-08-28 13:37:23', '2022-08-28 13:37:23'),
(22, 11, 'sdhsf', 'sfdhs', 'Project Report On', 'sdgdss', 'sdgsdg', 235, 'sdgds', 'dsgds', 'sgdsd', 'sgsd', 'sdgsd', '2022-08-30', 1, '202208280744resize.jpg', '2022-08-28 13:44:26', '2022-08-28 13:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'demo@gmail.com', NULL, '$2y$10$JVq/8w2xfSqzM7T1lXwzzOlw2hjUXXhu2t.x14eibFOomq1dLkmIu', NULL, '2022-08-26 14:54:27', '2022-08-26 14:54:27'),
(4, 'aa@gmail.com', NULL, '$2y$10$dgfZcVFaM9V3hEFAyWXR/ub.8WXmpRVTvS4FLwoKetoyhGVQTsXCG', NULL, '2022-08-26 14:56:49', '2022-08-26 14:56:49'),
(5, 'ha@gmail.com', NULL, '$2y$10$Vat9cIbvJUYV/kD4HpeVO.aWfuOrjHQGMnHOKhILX5ovVVcvbWIHe', NULL, '2022-08-26 15:04:09', '2022-08-26 15:04:09'),
(6, 'alomj892@gmail.com', NULL, '$2y$10$f6dQ3ZAHhjYwEasRLlH79eiciNt9Y6aGlib4fAvEb8UFOYSMJ.ZoS', NULL, '2022-08-26 15:07:34', '2022-08-26 15:07:34'),
(7, 'ali@gmail.com', NULL, '$2y$10$HdtFhwjPGCrCKPwWhkWsU.atC1r1dlZE8i2dmg27v1CG8lI3H4UUm', NULL, '2022-08-26 15:11:32', '2022-08-26 15:11:32'),
(8, 'alodsfgdsmj892@gmail.com', NULL, '$2y$10$L6DkQZfVhcAShid8IyXxpuOijrOMp6EuBdGPEafHW4vdFu/tzW.cq', NULL, '2022-08-26 15:19:33', '2022-08-26 15:19:33'),
(9, 'asa@gmail.com', NULL, '$2y$10$S1Pxzl8tyo/Tp1jWnss55eHvfhf6uKAe8khRd8ZsmdfX4PHf7E5s6', NULL, '2022-08-26 15:28:43', '2022-08-26 15:28:43'),
(10, 'ww@gmail.com', NULL, '$2y$10$7WynfIOwQHLjjK7j1uoNNeTJ4MP74x.O5Ipy8Crc/FvnW1sT4LWWe', NULL, '2022-08-28 11:43:53', '2022-08-28 11:43:53'),
(11, 'aaaaaaaaaaaaaa@gmail.com', NULL, '$2y$10$H9UybVzdGiq1IVuCFIDeUO7nzc2HKt0Wrda8TJBYdfi16B/W/Yo6u', NULL, '2022-08-28 12:31:54', '2022-08-28 12:31:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
