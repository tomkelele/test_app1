-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 04:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_10_033723_create_products_table', 2),
(4, '2017_04_10_061154_add_column_user', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(12, 'new dress', 'new fucking dress homie', 20, '1491982615.jpg', '2017-04-12 00:36:55', '2017-04-12 00:36:55'),
(13, 'Yellow dress', 'A yellow dress which you can buy from anywhere', 30, '1491983386.jpg', '2017-04-12 00:49:46', '2017-04-13 02:01:34'),
(14, 'Cotton Blouse', 'A cotton blouse, just it', 17, '1491984068.jpg', '2017-04-12 01:01:08', '2017-04-12 01:01:08'),
(15, 'Cotton Blouse', 'Jersey dress from H&M', 10, '1491984118.jpg', '2017-04-12 01:01:58', '2017-04-19 01:10:03'),
(16, 'Denim Skirt', 'A Denim Skirt form H&M', 40, '1491984245.jpg', '2017-04-12 01:04:05', '2017-04-12 01:04:05'),
(17, 'Tulle Skirt', 'A tulle skirt from H&M', 20, '1491984315.jpg', '2017-04-12 01:05:15', '2017-04-12 01:05:15'),
(19, 'Seersucker dress', 'A Seersucker dress from H&M US Shop', 23, '1492052501.jpg', '2017-04-12 20:01:41', '2017-04-12 20:14:24'),
(23, 'Blouse shirt', 'A blouse shirt which you can buy it from anywhere', 20, '1492153094.jpg', '2017-04-13 23:57:57', '2017-04-19 20:26:59'),
(24, 'Man shirt', 'Just a white man shirt', 23, '1492659461.jpg', '2017-04-19 20:37:32', '2017-04-19 20:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL COMMENT '0: admin, 1: user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(2, 'Tung Nguyen', 'tungxn1594@gmail.com', '$2y$10$kNHe5SVQIiwA.y2gxclYU.IOZ/zyql5iU9uNWb2UYllwgl7AhB1LG', 0, 'AnlDJROsRUlweP45WVHTf2CVzR4pxR8ZSVi0KEW3TQYddLIipbNMUdNylYuR', NULL, '2017-04-17 03:34:05', '1492425245.jpg'),
(3, 'user1', 'user1@gmail.com', '$2y$10$/RjST3pOucLYpZPKVA3CYu0v0KMyILk5LKauz0PLrfwSjGEaHJyzm', 1, 'MlcYdA4b87T2SXqyPTD5KJ2EX4TKvoeFQMdMPr4daxmsYstRSaGWPJ3ysjDC', NULL, '2017-04-13 23:50:10', '1492152610.jpg'),
(7, 'user1', 'user11@gmail.com', '$2y$10$UAIhtcPrt.YbF1/WA2P8ueG/3TYRTu9q7KYGB1.WxBd42abQC6ktC', 1, 'iExHdbwYUz5dfA6zwM2J91TkFXPJVVp8Fyr4f7AFFBprtNl30KsuMuGjCurZ', NULL, '2017-04-18 20:54:58', '1492152416.jpg'),
(8, 'user12', 'user12@gmail.com', '$2y$10$qzdChRqVisbpWLX564szVOKPe951RJj/4ewxg0Eic3xuJqz9DumRW', 1, 'My95XnUnY98h5ncMInatyFBxSUbCroHp5W6HUig27lMsneeXIfJ3YwHBvmUq', NULL, '2017-04-13 23:47:26', '1492152446.png'),
(9, 'Tun Nguyen', 'tunnguyen1594@gmail.com', '$2y$10$ZUmdUXO5MyrxPWdW.3WwC.VB/ocwJ7IXx.21TfRYbxPpXDEVmz2NK', 1, 'HKT2JE2CaAssG9zhUzzyH2qtlMVk3CRMwtGgyZE2KmtXmGGgEsFLZHOs0mMx', '2017-04-13 19:36:04', '2017-04-13 23:48:42', '1492152522.jpg'),
(18, 'user100', 'user100@gmail.com', '$2y$10$aQ0Sm7xkSfKQk/.cxClVi..5ScqYa8Yg8NhvoRHvSltL8HLJats8e', 1, 'T8DfKzLQd8Mj6JWHaYhgNNngKyxnoT3Pbq5xZi1t07xR7SCib1UonogIlOfR', '2017-04-20 02:03:18', '2017-04-20 02:03:18', 'default.png');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
