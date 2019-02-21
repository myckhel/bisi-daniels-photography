-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 06:33 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `attendance` tinyint(1) NOT NULL DEFAULT '3',
  `event_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `attendance`, `event_id`, `user_id`, `created_at`, `updated_at`) VALUES
(17, 1, 13, 1, '2018-10-29 11:22:10', '2018-10-29 11:28:08'),
(18, 3, 13, 2, '2018-10-29 11:22:10', '2018-10-29 11:22:10'),
(19, 0, 14, 1, '2018-10-29 14:05:30', '2018-10-29 14:14:48'),
(20, 3, 14, 2, '2018-10-29 14:05:30', '2018-10-29 14:05:30'),
(21, 1, 15, 1, '2018-10-29 14:17:45', '2018-10-29 14:43:53'),
(22, 3, 15, 2, '2018-10-29 14:17:45', '2018-10-29 14:17:45'),
(25, 1, 15, 3, '2018-10-29 14:30:59', '2018-10-29 14:30:59'),
(26, 1, 16, 3, '2018-10-31 15:45:58', '2018-11-01 10:30:20'),
(27, 1, 16, 1, '2018-10-31 15:45:58', '2018-11-01 15:33:24'),
(28, 3, 16, 2, '2018-10-31 15:45:58', '2018-10-31 15:45:58'),
(32, 0, 13, 5, '2018-10-29 16:46:48', '2018-10-29 16:47:19'),
(36, 1, 15, 5, '2018-10-29 16:49:24', '2018-10-29 16:59:48'),
(37, 3, 16, 5, '2018-10-31 15:45:58', '2018-10-31 15:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_sdate` datetime NOT NULL,
  `event_edate` datetime NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_sdate`, `event_edate`, `service_id`, `active`, `created_at`, `updated_at`) VALUES
(13, '2018-11-03 00:00:00', '2018-11-03 00:00:00', 1, 0, '2018-10-29 11:22:09', '2018-10-29 14:05:30'),
(14, '2018-10-30 00:00:00', '2018-10-30 00:00:00', 1, 0, '2018-10-29 14:05:30', '2018-10-29 14:17:45'),
(15, '2018-10-31 00:00:00', '2018-10-31 00:00:00', 1, 0, '2018-10-29 14:17:45', '2018-10-31 15:45:58'),
(16, '2018-11-01 14:11:00', '2018-11-03 17:11:00', 1, 1, '2018-10-31 15:45:58', '2018-10-31 15:45:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_19_132252_create_attendance_table', 2),
(4, '2018_10_24_150412_create_event_table', 3),
(5, '2018_11_01_153949_create_services_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdays` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edays` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `sdays`, `edays`, `created_at`, `updated_at`) VALUES
(1, 'manual', '2018-11-14', '2018-11-14', '2018-10-31 23:00:00', '2018-10-31 23:00:00'),
(2, 'Greate People Service', 'Monndays', 'Tuesdays', '2018-11-01 16:21:21', '2018-11-01 16:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('ushering','choir','protocol','children teacher') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `admin` double NOT NULL DEFAULT '0',
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `firstname`, `phone`, `role`, `email`, `gender`, `admin`, `lastlogin`, `address1`, `address2`, `city`, `state`, `postalcode`, `country`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'myckhel', 'Ishola', 'Michael', '08110000606', 'protocol', 'myckhel1@hotmail.com', 1, 1, '2018-10-18 17:09:44', 'lekki epe road', 'new2', 'lagos', 'lagos', '101225', 'nigeria', NULL, '$2y$10$U9v.5FCaxoPGKe49TxxY9.4PUYWnbRXZC81YBssOhwGzG9PXorDUm', 'OCmWKGl1Fvo00gGpf4887tvAi9pn0yuomwJ2IjbkG0wfZ9RSjpjXGYMMamq3', '2018-10-18 15:02:36', '2018-10-30 16:45:53'),
(2, 'myckhel1', 'ishola', 'michael', '08110000606', 'protocol', 'myckhel123@gmail.com', 1, 0, '2018-10-19 10:30:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$bgp8q3ru1ixZ.HD/le7hg.qK9AhYE5lOm5ncfhcxn7aGn0BjiNsKq', 'c1273sdhddgmgTSwKZOYuFUGFePrhIX2gQi1WoD4LPHgnzXRXoI2KgMgHma6', '2018-10-19 09:30:42', '2018-10-19 09:30:42'),
(3, 'cena', 'Cena', 'John', '08443125456', 'choir', 'cena1@hotmail.com', 0, 0, '2018-10-29 15:19:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$psLDkA4qt1OUyuxmrQP/wepNuf/2C1eXFZnLbuuTdWDz7kzFgYF32', 'OR16sFqI8PjqTq5ZeH08KyMXkHzZ7VYhakAZXp75yQuvumqGu4cznODr5apL', '2018-10-29 14:19:08', '2018-10-29 14:19:08'),
(5, 'leo', 'Oshiyemi', 'Leonard', '08115789252', 'protocol', 'leonard.oshyemi@gmail.com', 1, 1, '2018-10-25 15:44:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$a5PHdjc4yj0iEqOC3RTc/ekQMguz2/VAU87IlW02VYf3NXuTlIgXG', 'oTzfzVJMb6Kp0nQJ9fRrn1noXqDsOAb4DTZGWZcw4G9H7ETG5h57DnEKsw2e', '2018-10-25 14:44:59', '2018-10-25 14:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendances_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
