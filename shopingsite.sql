-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 07:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopingsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(4) NOT NULL,
  `ltext1` varchar(255) NOT NULL,
  `ltext2` varchar(255) NOT NULL,
  `ltext1Appear` varchar(255) NOT NULL,
  `ltext2Appear` varchar(255) NOT NULL,
  `btnAppear` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ltext1`, `ltext2`, `ltext1Appear`, `ltext2Appear`, `btnAppear`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Women Collection 2020', 'NEW SEASON', 'fadeInDown', 'fadeInUp', 'zoomIn', '845.jpg', '#', 1, '2020-08-29 06:57:32', '2020-08-30 06:32:55'),
(2, 'Kids New-Season', 'Jackets & Coats', 'rollIn', 'lightSpeedIn', 'slideInUp', '181.jpg', '#', 1, '2020-08-29 06:58:40', '2020-08-29 10:50:00'),
(3, 'Men Collection 2020', 'New arrivals', 'rotateInDownLeft', 'rotateInUpRight', 'rotateIn', '706.jpg', '#', 1, '2020-08-29 06:59:18', '2020-08-29 11:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `parent_id` smallint(11) DEFAULT NULL,
  `catName` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `catDesc` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `catName`, `url`, `catDesc`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Men Cloths', 'Men Shirts', 'Men Shirts', 1, '2020-08-30', '2020-08-30'),
(3, 0, 'Women Cloths', 'Women', 'Women', 1, '2020-08-30', '2020-08-30'),
(16, 0, 'Kds Ware', 'Kds Ware', 'Kds Ware', 1, '2020-08-31', '2020-08-31'),
(20, 1, 'Men-Shirts', 'Men-Shirts', 'Men-Shirts', 1, '2020-09-03', '2020-09-03'),
(21, 20, 'Men t-Shirts', 'Men t-Shirts', 'Men t-Shirts', 1, '2020-09-03', '2020-09-03'),
(22, 21, 'Men t-Shirts red', 'Men t-Shirts red', 'Men t-Shirts red', 1, '2020-09-03', '2020-09-03'),
(23, 22, 'latest men t-shirts red', 'latest men t-shirts red', 'latest men t-shirts red', 1, '2020-09-03', '2020-09-03'),
(24, 1, 'Men Shorts', 'Men Shorts', 'Men Shorts', 1, '2020-09-03', '2020-09-03'),
(25, 3, 'Women T-shirts', 'Women T-shirts', 'Women T-shirts', 1, '2020-09-03', '2020-09-03'),
(26, 25, 'Women T-shirts black', 'Women T-shirts black', 'Women T-shirts black', 1, '2020-09-03', '2020-09-03'),
(27, 25, 'Women T-shirts red', 'Women T-shirts red', 'Women T-shirts red', 1, '2020-09-03', '2020-09-03'),
(28, 16, 'kids shirts', 'kids shirts', 'kids shirts', 1, '2020-09-03', '2020-09-03'),
(29, 16, 'kids Shorts', 'kids shorts', 'kids shorts', 1, '2020-09-03', '2020-09-03'),
(30, 16, 'kids jackets', 'kids jackets', 'kids jackets', 1, '2020-09-03', '2020-09-03'),
(31, 30, 'kids jackets black', 'kids jackets black', 'kids jackets black', 1, '2020-09-03', '2020-09-03'),
(32, 30, 'kids jackets red', 'kids jackets red', 'kids jackets red', 1, '2020-09-03', '2020-09-03'),
(33, 29, 'kids shorts black', 'kids shorts black', 'kids shorts black', 1, '2020-09-03', '2020-09-03');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
  `id` int(5) NOT NULL,
  `catId` int(11) NOT NULL,
  `prdName` varchar(50) NOT NULL,
  `prdCode` varchar(6) NOT NULL,
  `prdColor` varchar(10) NOT NULL,
  `prdDescript` varchar(255) NOT NULL,
  `prdPrice` decimal(9,3) NOT NULL,
  `prdPic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catId`, `prdName`, `prdCode`, `prdColor`, `prdDescript`, `prdPrice`, `prdPic`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'WoMen T-shirt', 'wnts01', 'black', 'WoMen T-shirt', '500.000', '752.jpg', 1, '2020-09-02 07:25:12', '2020-09-02 07:28:44'),
(2, 3, 'WoMen T-shirt', 'wnts02', 'blue', 'WoMen T-shirt', '450.000', '716.jpg', 1, '2020-09-02 07:25:46', '2020-09-02 07:25:46'),
(3, 3, 'WoMen T-shirt', 'wnts03', 'red', 'WoMen T-shirt', '399.000', '163.jpg', 1, '2020-09-02 07:26:15', '2020-09-02 07:26:15'),
(4, 3, 'WoMen T-shirt', 'wnts04', 'pink', 'WoMen T-shirt', '899.000', '931.jpg', 1, '2020-09-02 07:26:50', '2020-09-02 07:26:50'),
(5, 3, 'WoMen T-shirt', 'wnts05', 'black', 'WoMen T-shirt', '700.000', '516.jpg', 1, '2020-09-02 07:27:22', '2020-09-02 07:27:22'),
(6, 1, 'Men T-shirt', 'mn01', 'black', 'Men T-shirt', '399.000', '863.jpg', 1, '2020-09-02 07:29:39', '2020-09-02 07:29:39'),
(7, 1, 'Men T-shirt', 'mn02', 'black', 'Men T-shirt', '899.000', '533.jpg', 1, '2020-09-02 07:30:10', '2020-09-02 07:30:10'),
(8, 1, 'Men T-shirt', 'mn03', 'black', 'Men T-shirt', '788.000', '727.jpg', 1, '2020-09-02 07:35:10', '2020-09-02 07:35:10'),
(9, 1, 'Men T-shirt', 'mn04', 'orange', 'Men T-shirt', '599.000', '388.jpg', 1, '2020-09-02 07:35:55', '2020-09-02 07:35:55'),
(10, 1, 'Men T-shirt', 'mn05', 'blue', 'Men T-shirt', '778.000', '112.jpg', 1, '2020-09-02 07:36:21', '2020-09-02 07:36:21'),
(11, 16, 'kids shirts', 'kd01', 'blue', 'kids shirts', '299.000', '128.jpg', 1, '2020-09-02 07:40:05', '2020-09-02 07:40:05'),
(12, 16, 'kids shirts', 'kd02', 'red', 'kids shirts', '399.000', '158.jpg', 1, '2020-09-02 07:40:31', '2020-09-02 07:47:06'),
(13, 16, 'kids shirts', 'kd03', 'pink', 'kids shirts', '700.000', '247.jpg', 1, '2020-09-02 07:41:02', '2020-09-02 07:41:02'),
(14, 16, 'kids shirts', 'kd04', 'black', 'kids shirts', '699.000', '646.jpg', 1, '2020-09-02 07:41:27', '2020-09-02 07:41:27'),
(15, 16, 'kids shirts', 'kd05', 'green', 'kids shirts', '399.000', '440.jpg', 1, '2020-09-02 07:41:59', '2020-09-02 07:41:59'),
(16, 20, 'Men T-shirt', 'mn06', 'black', 'Men T-shirt', '800.000', '358.png', 1, '2020-09-03 07:39:21', '2020-09-03 08:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userType`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Subbu2', 'Subbu2@gmail.com', 'Customer', NULL, '$2y$10$0Lj6UgS6CCwlDRJL0gKfSO1g/eX9xrV.FT6rm3prMezh5TH2rA3x2', NULL, '2020-08-24 02:23:31', '2020-08-29 10:20:01'),
(3, 'Subbu', 'Subbu@gmail.com', 'Admin', NULL, '$2y$10$p4n9A2Tu0soDkBBu3yT7vucW6EDUCfkVRyjhIpSYDOcj4I6p1toim', 'fKf5XcOqr3bPSWPDgznbuuahDPuafREpLFOZJ8ZPkCluMCl5FdYZRzTCDPm4', '2020-08-23 02:47:43', '2020-08-28 13:10:04'),
(5, 'Siddu', 's@gmail.com', 'Customer', NULL, '$2y$10$.8bAcMI9I9TqJFmCBQ4PcelpscCDRfgN8qOSgFn9eQiNfnSUoGtGm', NULL, '2021-08-13 06:09:10', '2021-08-13 06:09:10'),
(6, 'Prasad', 'prasad@gmail.com', 'Customer', NULL, '$2y$10$ZKEB7cH4aDp9Xfa2kDORpuI9o4rUJcajTGh17gdIAAXmbcETWM37.', NULL, '2021-08-15 09:11:48', '2021-08-15 09:11:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
