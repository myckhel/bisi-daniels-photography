-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 02:55 PM
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
(32, 0, 13, 5, '2018-10-29 16:46:48', '2018-10-29 16:47:19'),
(36, 1, 15, 5, '2018-10-29 16:49:24', '2018-10-29 16:59:48'),
(162, 3, 48, 3, '2018-11-06 14:02:52', '2018-11-06 14:02:52'),
(163, 3, 48, 5, '2018-11-06 14:02:52', '2018-11-06 14:02:52'),
(164, 3, 48, 1, '2018-11-06 14:02:52', '2018-11-06 14:02:52'),
(165, 3, 48, 2, '2018-11-06 14:02:52', '2018-11-06 14:02:52'),
(178, 3, 52, 3, '2018-11-06 14:48:20', '2018-11-06 14:48:20'),
(179, 3, 52, 5, '2018-11-06 14:48:20', '2018-11-06 14:48:20'),
(180, 1, 52, 1, '2018-11-06 14:48:20', '2018-11-07 09:02:43'),
(181, 0, 52, 2, '2018-11-06 14:48:20', '2018-11-06 15:22:24'),
(190, 3, 55, 3, '2018-11-08 08:31:40', '2018-11-08 08:31:40'),
(191, 3, 55, 5, '2018-11-08 08:31:40', '2018-11-08 08:31:40'),
(192, 3, 55, 1, '2018-11-08 08:31:40', '2018-11-08 08:33:02'),
(193, 3, 55, 2, '2018-11-08 08:31:40', '2018-11-08 08:31:40'),
(194, 3, 56, 3, '2018-11-09 08:42:17', '2018-11-09 08:42:17'),
(195, 3, 56, 5, '2018-11-09 08:42:17', '2018-11-09 08:42:17'),
(196, 3, 56, 1, '2018-11-09 08:42:17', '2018-11-09 08:42:17'),
(197, 3, 56, 2, '2018-11-09 08:42:17', '2018-11-09 08:42:17'),
(198, 3, 57, 3, '2018-11-09 12:45:22', '2018-11-09 12:45:22'),
(199, 3, 57, 5, '2018-11-09 12:45:22', '2018-11-09 12:45:22'),
(200, 3, 57, 1, '2018-11-09 12:45:22', '2018-11-09 12:45:22'),
(201, 3, 57, 2, '2018-11-09 12:45:22', '2018-11-09 12:45:22'),
(202, 3, 58, 3, '2018-11-14 09:08:35', '2018-11-14 09:08:35'),
(203, 3, 58, 5, '2018-11-14 09:08:35', '2018-11-14 09:08:35'),
(204, 1, 58, 1, '2018-11-14 09:08:35', '2018-11-14 16:25:34'),
(205, 3, 58, 2, '2018-11-14 09:08:35', '2018-11-14 09:08:35'),
(206, 3, 60, 3, '2018-11-14 16:23:13', '2018-11-14 16:23:13'),
(207, 3, 60, 5, '2018-11-14 16:23:13', '2018-11-14 16:23:13'),
(208, 1, 60, 1, '2018-11-14 16:23:13', '2018-11-15 08:08:59'),
(209, 3, 60, 2, '2018-11-14 16:23:13', '2018-11-14 16:23:13'),
(210, 3, 61, 3, '2018-11-15 15:35:50', '2018-11-15 15:35:50'),
(211, 3, 61, 5, '2018-11-15 15:35:50', '2018-11-15 15:35:50'),
(212, 1, 61, 1, '2018-11-15 15:35:50', '2018-11-15 15:36:12'),
(213, 3, 61, 2, '2018-11-15 15:35:50', '2018-11-15 15:35:50'),
(214, 3, 62, 3, '2018-11-16 08:00:13', '2018-11-16 08:00:13'),
(215, 3, 62, 5, '2018-11-16 08:00:13', '2018-11-16 08:00:13'),
(216, 1, 62, 1, '2018-11-16 08:00:13', '2018-11-16 09:40:51'),
(217, 3, 62, 2, '2018-11-16 08:00:13', '2018-11-16 08:00:13'),
(218, 3, 63, 3, '2018-11-16 08:16:58', '2018-11-16 08:16:58'),
(219, 3, 63, 5, '2018-11-16 08:16:58', '2018-11-16 08:16:58'),
(220, 1, 63, 1, '2018-11-16 08:16:58', '2018-11-16 09:41:52'),
(221, 3, 63, 2, '2018-11-16 08:16:58', '2018-11-16 08:16:58');

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
(13, '2018-11-03 00:00:00', '2018-11-03 00:00:00', 1, 0, '2018-10-29 11:22:09', '2018-11-09 12:36:07'),
(14, '2018-10-30 00:00:00', '2018-10-30 00:00:00', 1, 0, '2018-10-29 14:05:30', '2018-11-09 12:30:29'),
(15, '2018-10-31 00:00:00', '2018-10-31 00:00:00', 1, 0, '2018-10-29 14:17:45', '2018-10-31 15:45:58'),
(48, '2018-11-06 16:11:00', '2018-11-07 09:11:00', 1, 0, '2018-11-06 14:02:52', '2018-11-09 12:35:51'),
(52, '2018-11-07 16:11:00', '2018-11-07 17:11:00', 1, 0, '2018-11-06 14:48:19', '2018-11-07 09:03:43'),
(55, '2018-11-08 10:00:00', '2018-11-08 13:00:00', 1, 0, '2018-11-08 08:31:40', '2018-11-09 08:42:17'),
(56, '2018-11-09 10:00:00', '2018-11-10 01:00:00', 2, 1, '2018-11-09 08:42:17', '2018-11-09 12:38:19'),
(57, '2018-11-09 14:00:00', '2018-11-10 15:00:00', 1, 1, '2018-11-09 12:45:22', '2018-11-09 12:45:22'),
(58, '2018-11-14 11:00:00', '2018-11-15 14:00:00', 1, 1, '2018-11-14 09:08:34', '2018-11-14 09:08:34'),
(60, '2018-11-14 18:00:00', '2018-11-15 19:00:00', 1, 0, '2018-11-14 16:23:13', '2018-11-15 15:40:14'),
(61, '2018-11-15 17:00:00', '2018-11-16 17:00:00', 1, 0, '2018-11-15 15:35:50', '2018-11-15 15:47:19'),
(62, '2018-11-16 09:00:00', '2018-11-17 09:00:00', 1, 1, '2018-11-16 08:00:12', '2018-11-16 08:00:12'),
(63, '2018-11-16 10:00:00', '2018-11-17 14:00:00', 1, 1, '2018-11-16 08:16:58', '2018-11-16 08:16:58');

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
(5, '2018_11_01_153949_create_services_table', 4),
(6, '2018_11_02_103301_create_push_subscriptions_table', 5),
(7, '2018_11_02_104313_create_push_subscriptions_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(11) NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `push_subscriptions`
--

CREATE TABLE `push_subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `endpoint` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `push_subscriptions`
--

INSERT INTO `push_subscriptions` (`id`, `user_id`, `endpoint`, `public_key`, `auth_token`, `created_at`, `updated_at`) VALUES
(82, 1, 'https://fcm.googleapis.com/fcm/send/eZkhqerVnNQ:APA91bEx2dlfe_wk5n0KBFfvLZdv2afkhyn5W8SXWifC8NFm8MBPsN-4b4Vwkod8YyfPxd_o7lN1Q43jeglQmxl3IpZdZOJT23WVN7DngnSj4oyEzLZZplFyOqly9Veynea1dB0ndJ8P', 'BPAZ0HktuF1iYEhAaxs/nzyojFme9euW2VhzivxntT0+1HNDcxYMZaJFa8C5RSQQIhvqbglkx3mEBy9uCtcCHuA=', 'YvfsI+WHSo493/e++ONAew==', '2018-11-15 10:59:31', '2018-11-15 10:59:31'),
(83, 2, 'https://updates.push.services.mozilla.com/wpush/v2/gAAAAABb7X_XP-SgV8UkoQhYOblqUcybXlrkOhZYcznSo_dbisy1Evw0RfYBnMEQkJm9x9vgDnA8t-iw_NovxJy2uzSqgpUFpgMDY9rMYN_spB-lwXYAqSN6jCZUikzaW0Bkfx95Fw5hutQTLZRziQOwvJMPxALKAgKOF10Nx3xMxxRl3saZX5c', 'BEQO3k9nQV1T7i/4HiFHbA40sc8ecw4gxm45u2UewhNz4pTvHvHqLlTNfB3EE88RBeExOXGrbnrrBdGasREP/KI=', 'pNEBQwY8avdYvD8o/i8mXA==', '2018-11-15 13:16:52', '2018-11-15 13:16:52');

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
(1, 'Popup Service', 'Mondays', 'Sundays', '2018-10-31 23:00:00', '2018-10-31 23:00:00'),
(2, 'Sunday Service', 'Mondays', 'Saturdays', '2018-11-09 12:00:43', '2018-11-09 12:00:43'),
(3, 'Great People Service 2', 'Tuesdays', 'Fridays', '2018-11-01 16:21:21', '2018-11-08 16:24:56'),
(4, 'Great People Service', 'Mondays', 'Tuesdays', '2018-11-01 16:21:21', '2018-11-01 16:21:21'),
(6, 'd csdji', 'Mondays', 'Wednesdays', '2018-11-08 16:27:20', '2018-11-08 16:27:20'),
(7, 'ddwqdqwd', 'Tuesdays', 'Tuesdays', '2018-11-08 16:31:00', '2018-11-08 16:31:00');

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
(1, 'myckhel', 'Ishola', 'Michael', '08110000606', 'protocol', 'myckhel1@hotmail.com', 1, 1, '2018-10-18 17:09:44', 'lekki epe road', 'new2', 'lagos', 'lagos', '101225', 'nigeria', NULL, '$2y$10$U9v.5FCaxoPGKe49TxxY9.4PUYWnbRXZC81YBssOhwGzG9PXorDUm', 'WHwyfLpwhyik4xfWRakgqWsvbOsxtAgNC2MwV7hiZDdp9n1HuBo5Ri79KS5k', '2018-10-18 15:02:36', '2018-10-30 16:45:53'),
(2, 'myckhel1', 'ishola', 'michael', '08110000606', 'protocol', 'myckhel123@gmail.com', 1, 0, '2018-10-19 10:30:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$bgp8q3ru1ixZ.HD/le7hg.qK9AhYE5lOm5ncfhcxn7aGn0BjiNsKq', '8goZ2fF6tvNoVkQkZFZaVLyWRz0qwHSnkXvzF4Gvb2Q5X7X8ByL02PTXSfSd', '2018-10-19 09:30:42', '2018-10-19 09:30:42'),
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `push_subscriptions`
--
ALTER TABLE `push_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `push_subscriptions_user_id_index` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `push_subscriptions`
--
ALTER TABLE `push_subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

--
-- Constraints for table `push_subscriptions`
--
ALTER TABLE `push_subscriptions`
  ADD CONSTRAINT `push_subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
