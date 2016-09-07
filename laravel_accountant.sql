-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 04:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_accountant`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_30_071354_create_questions_table', 2),
('2016_09_01_065914_create_user__accounts_table', 3),
('2016_09_01_075819_questions_table', 4),
('2016_09_01_075850_user_account_table', 4),
('2016_09_01_081413_user_accounts_table', 5),
('2016_09_01_084553_create_questions_table', 6),
('2016_09_01_085337_create_user__accounts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer_No` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer_Yes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hint` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `task`, `options`, `answer_No`, `answer_Yes`, `hint`, `order`, `type`) VALUES
(1, '3', 'eer', 'ade', 'ader', 'hek', '1', '0'),
(2, '4', 'feer', 'ade', 'ader', 'hek', '1', '0'),
(3, '5', 'eder', 'ade', 'ader', 'hek', '1', '0'),
(4, '6', 'efer', 'ade', 'ader', 'hek', '1', '0'),
(5, '7', 'eeer', 'ade', 'ader', 'hek', '1', '0'),
(6, '8', 'eeer', 'ade', 'ader', 'hek', '1', '0'),
(7, '9', 'erer', 'ade', 'ader', 'hek', '1', '0'),
(8, '10', 'eger', 'ade', 'ader', 'hek', '1', '0'),
(9, '11', 'eher', 'ade', 'ader', 'hek', '1', '0'),
(10, '12', 'eejr', 'ade', 'ader', 'hek', '1', '0'),
(11, '13', 'eekr', 'ade', 'ader', 'hek', '1', '0'),
(12, '14', 'eser', 'ade', 'ader', 'hek', '1', '0'),
(13, '15', 'eeer', 'ade', 'ader', 'hek', '1', '0'),
(14, '16', 'eeerr', 'ade', 'ader', 'hek', '1', '0'),
(15, 'ge', 'er', 'e', 're', 's', '1', '0'),
(16, 'cdf', 'dfe', 'er', 'er', 's', '1', '0'),
(17, 'u', 'h', 'h', 'h', 'h', '1', '0'),
(18, 'ad', 'h', 'h', 'h', 'h', '1', '0'),
(19, 'j', 'h', 'h', 'h', 'h', '1', '0'),
(20, 'l', 'h', 'h', 'h', 'h', '1', '0'),
(21, 'fd', 'h', 'h', 'h', 'h', '1', '0'),
(22, 'fdf', 'h', 'h', 'h', 'h', '1', '0'),
(23, 'er', 'h', 'h', 'h', 'h', '1', '0'),
(24, 'dfd', 'h', 'h', 'h', 'h', '1', '0'),
(25, 'ddde', 'h', 'h', 'h', 'h', '1', '0'),
(26, '12', 'h', 'h', 'h', 'h', '1', '0'),
(27, '13', 'h', 'h', 'h', 'h', '1', '0'),
(28, '14', 'h', 'h', 'h', 'h', '1', '0'),
(29, '15', 'h', 'h', 'h', 'h', '1', '0'),
(30, '16', 'h', 'h', 'h', 'h', '1', '0'),
(31, '17', 'h', 'h', 'h', 'h', '1', '0'),
(32, '18', 'h', 'h', 'h', 'h', '1', '0'),
(33, '19', 'h', 'h', 'h', 'h', '1', '0'),
(36, '22', 'h', 'h', 'h', 'h', '1', '0'),
(37, '2345hgh', 'hkk', 'h', 'h', 'h', '1', '0'),
(39, '3453888', 'eerer', '4yyyyyy', 'rer3434', 'ere', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Van A', 'abc@gmail.com', '$2y$10$WB7spmmHtON/lHI8mRX.C.Qy90kc7HrzdLIL5VyoRMYOga9kqszZC', 'agraOpg4ElgsE1IWNxQfxG75oIU8B6gVLGJmsk4rFNhJvbLyNA7ybAa9DpLJ', '2016-08-29 21:04:54', '2016-09-06 02:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `user__accounts`
--

CREATE TABLE `user__accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user__accounts`
--

INSERT INTO `user__accounts` (`id`, `username`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen A', 'anh121@gmail.com', '0988888888', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(2, 'Nguyen B', 'anh122@gmail.com', '0988777777', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(3, 'Nguyen C', 'anh123@gmail.com', '0988666666', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(4, 'Nguyen D', 'anh124@gmail.com', '0988555555', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(5, 'Nguyen E', 'anh125@gmail.com', '0988444444', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(6, 'Nguyen F', 'anh126@gmail.com', '0988333333', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(7, 'Nguyen G', 'anh127@gmail.com', '0988222222', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(8, 'Nguyen H', 'anh128@gmail.com', '0988111111', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(9, 'Nguyen I', 'anh129@gmail.com', '0988000000', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00'),
(10, 'Nguyen K', 'anh1210@gmail.com', '0988999999', '123456', '2016-08-31 17:00:00', '2016-08-31 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user__accounts`
--
ALTER TABLE `user__accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user__accounts_email_unique` (`email`),
  ADD UNIQUE KEY `user__accounts_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user__accounts`
--
ALTER TABLE `user__accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
