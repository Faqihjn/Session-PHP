-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 12:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `stock`, `category_id`, `expired_at`, `created_at`, `updated_at`, `deleted_at`, `user_id`) VALUES
(1, 'Odol', 98, NULL, '2022-12-12 13:28:14', '2021-11-12 06:29:16', '2021-11-12 06:29:16', NULL, 1),
(2, 'Sabun Batang', 100, NULL, '2031-03-16 23:59:59', '2021-11-12 06:51:53', '2021-11-12 06:51:53', NULL, 1),
(3, 'Ciki', 998, NULL, '2022-12-12 23:59:59', '2021-11-25 16:47:51', '2021-11-25 17:02:40', '2021-11-26 00:04:59', 1),
(4, 'Permen Kaki', 1, NULL, '2023-11-12 13:28:14', '2021-11-25 17:30:21', '2021-11-26 06:00:58', NULL, 1),
(5, 'Susu Kotak', 998, NULL, '2025-11-11 23:59:59', '2021-11-25 17:24:22', '2021-11-25 17:27:16', NULL, 1),
(10, 'Sabun Cair', 30, NULL, '2025-12-12 13:28:14', '2021-12-03 05:36:03', '2021-12-03 05:36:03', NULL, 1),
(12, 'Es Krim', 25, NULL, '2031-03-16 23:59:59', '2021-12-03 06:14:45', '2021-12-03 06:14:45', NULL, 1),
(13, 'Aqua', 50, NULL, '2025-12-12 13:28:14', '2021-12-03 06:17:46', '2021-12-03 06:17:46', NULL, 1),
(15, 'Roti Keju', 20, NULL, '2021-12-12 23:59:59', '2021-12-03 06:29:14', '2021-12-03 06:29:14', NULL, 1),
(18, 'Roti Tawar', 20, NULL, '2021-12-12 23:59:59', '2021-12-03 06:47:22', '2021-12-03 06:47:22', NULL, 1),
(19, 'Kerupuk', 15, NULL, '2021-12-12 23:59:59', '2021-12-03 07:16:18', '2021-12-03 07:16:18', NULL, 1),
(23, 'Promag', 20, NULL, '2025-11-11 23:59:59', '2021-12-03 08:56:50', '2021-12-03 08:56:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Faqih', 'faqih@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-11-26 06:34:59', '2021-11-26 06:34:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `user_constraint` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
