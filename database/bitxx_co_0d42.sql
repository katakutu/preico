-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2018 at 11:56 AM
-- Server version: 10.2.14-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitxx_co_0d42`
--

-- --------------------------------------------------------

--
-- Table structure for table `ico`
--

CREATE TABLE `ico` (
  `id` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `str_start` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `str_end` varchar(255) NOT NULL,
  `bonus` int(3) NOT NULL,
  `qty` decimal(65,8) NOT NULL,
  `sold` decimal(65,8) DEFAULT NULL,
  `price` decimal(20,2) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ico`
--

INSERT INTO `ico` (`id`, `start_date`, `str_start`, `end_date`, `str_end`, `bonus`, `qty`, `sold`, `price`, `status`, `created_at`, `updated_at`) VALUES
(13, '2018-05-01', '1525132800', '2018-05-03', '1522713600', 15, '500000.00000000', NULL, '0.50', '0', '2018-04-29 14:12:57', '2018-04-29 14:11:46'),
(14, '2018-05-04', '1525392000', '2018-05-06', '1525564800', 15, '500000.00000000', NULL, '0.52', '0', '2018-04-29 13:20:36', '2018-04-29 13:20:36'),
(15, '2018-05-07', '1525651200', '2018-05-09', '1525824000', 15, '500000.00000000', NULL, '0.54', '0', '2018-04-29 13:20:41', '2018-04-29 13:20:41'),
(16, '2018-05-10', '1525910400', '2018-05-12', '1526083200', 10, '500000.00000000', NULL, '0.56', '0', '2018-04-29 13:21:35', '2018-04-29 13:21:35'),
(17, '2018-05-13', '1526169600', '2018-05-15', '1526342400', 10, '500000.00000000', NULL, '0.58', '0', '2018-04-29 13:21:40', '2018-04-29 13:21:40'),
(18, '2018-05-16', '1526428800', '2018-05-18', '1526601600', 10, '500000.00000000', NULL, '0.60', '0', '2018-04-29 13:21:46', '2018-04-29 13:21:46'),
(19, '2018-05-19', '1526688000', '2018-05-21', '1526860800', 5, '500000.00000000', NULL, '0.62', '0', '2018-04-29 13:21:54', '2018-04-29 13:21:54'),
(20, '2018-05-22', '1526947200', '2018-05-24', '1527120000', 5, '500000.00000000', NULL, '0.64', '0', '2018-04-29 13:21:58', '2018-04-29 13:21:58'),
(21, '2018-04-25', '1524614400', '2018-05-27', '1524787200', 20, '500000.00000000', NULL, '0.66', '0', '2018-04-29 13:22:03', '2018-04-29 13:22:03'),
(22, '2018-05-28', '1527465600', '2018-05-30', '1527638400', 20, '500000.00000000', NULL, '0.68', '0', '2018-04-29 13:22:08', '2018-04-29 13:22:08');

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
(3, '2018_04_12_170439_pengaturan', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2018_04_14_190646_entrust_setup_tables', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administration', 'Only one and only admin', '2018-04-14 19:20:12', '2018-04-14 19:20:12'),
(2, 'user', 'Registed User', 'Access for registed user', '2018-04-14 19:20:12', '2018-04-14 19:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(5, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_koin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `nama_koin`, `koin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BITXX', 'BTX', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_block`
--

CREATE TABLE `transaksi_block` (
  `id` int(11) NOT NULL,
  `txid` varchar(255) NOT NULL,
  `time` bigint(50) NOT NULL,
  `confirmations` int(30) NOT NULL,
  `amount` decimal(20,8) NOT NULL,
  `received_by` varchar(255) NOT NULL,
  `send_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_btc`
--

CREATE TABLE `transaksi_btc` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `jumlah` decimal(20,8) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_btx`
--

CREATE TABLE `transaksi_btx` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `transaksi` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `status` enum('1','2') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_btx`
--

INSERT INTO `transaksi_btx` (`id`, `user`, `transaksi`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
(7, 'testbug', 'Transfer from harjulianto', 10, '1', '2018-04-29 17:48:38', '2018-04-29 17:48:38'),
(6, 'harjulianto', 'Transfer to testbug', 10, '2', '2018-04-29 17:48:38', '2018-04-29 17:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `country`, `reff`, `confirmation_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', '$2y$10$2572dA3sCaWA5eCLxWplHuUwBI5XymhXLvyuB5n1106rAaC2Tn.Je', 'AykzvDlXKIumG85Vs69HQCslpPpQKkDoLpkz7nHH4De4ghBVhest8zvO8zLk', NULL, NULL, NULL, '1', '2018-04-14 19:20:12', '2018-04-14 19:20:12'),
(2, 'bitxx', 'bitxx@gmail.com', '$2y$10$a6RdmFRxcfqGdqitLyv17eXiyShq3R.TUXuwyMoyb0DzO5g2JUZvS', NULL, NULL, NULL, NULL, '1', '2018-04-14 19:20:12', '2018-04-14 19:20:12'),
(3, 'harjulianto', 'feriharjulianto@gmail.com', '$2y$10$4MAc.GJc1pu7fvuuZyBq9.Lo/RfD0/iCbMBLLZ/TFcPoE3AZ2zlRO', 'n8gs9yFLjEicOu55AgMkyYEpps19wMcLXsBd17BbsbQ13lvI17XCTap49Mqr', 'Indonesia', 'bitxx', 'FXrpNZjUNOpsulr86umWSH1yNWJkJC', '0', '2018-04-15 06:30:38', '2018-04-15 06:30:38'),
(5, 'bukankutu', 'feriharjulianto@student.untan.ac.id', '$2y$10$jxC.tD4dE2yIVQ0aUqVK2OLp1j5fpcldmhPjxnZA943RBJZsaI21G', NULL, 'Indonesia', 'harjulianto', 'pms2LmhGonDcDF1zkiRXptOzXIxwHV', '0', '2018-04-15 06:42:54', '2018-04-15 06:42:54'),
(7, 'bonano', 'bonanoanonym@gmail.com', '$2y$10$h/uXWRdPMSVJZ3PBEQ0fhe5UjML7SUweYecK5GyJ6XTbrJhu6C3HW', NULL, 'Afghanistan', 'bitxx', '8uCwQbMZZVJlusn0YnyOFyiBQsGuFR', '0', '2018-04-16 07:22:50', '2018-04-16 07:22:50'),
(8, 'testbug', 'katakutu92@gmail.com', '$2y$10$xbkWWlnHCUDaoeM/GudYHuRuYn.mK.DhDggFiSNIwoe4CO3rbjhk.', NULL, 'Indonesia', 'harjulianto', NULL, '0', '2018-04-29 12:51:17', '2018-04-29 17:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_btc`
--

CREATE TABLE `wallet_btc` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `saldo` decimal(16,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wallet_btc`
--

INSERT INTO `wallet_btc` (`id`, `username`, `wallet`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 'bitxx', '3Nx1Bw8FCUPbA25sHWidUxEdJaNEXnoQaf', '0.00000000', '2018-04-15 00:00:00', '0000-00-00 00:00:00'),
(2, 'harjulianto', '3EZCme8pkk76V5LrML1iA4UFn7peLV71dR', '0.00000000', '2018-04-29 17:18:18', '2018-04-29 17:17:48'),
(3, 'katakutu', '33LhUvvBCreAxCJXyzp8KdoTRvy1zmVB5C', '0.00000000', '2018-04-15 06:36:39', '2018-04-15 06:36:39'),
(4, 'bukankutu', '3L9Gm1JLJGdDuFKDDhZLTFYHjVrypZ6mQL', '0.00000000', '2018-04-15 06:42:54', '2018-04-15 06:42:54'),
(6, 'bonano', '3NsSNEVSCJ9yPEfBcUTaGbnHWGpy4DGvrn', '0.00000000', '2018-04-16 07:22:50', '2018-04-16 07:22:50'),
(7, 'admin', 'admin', '10000.00000000', '2018-04-29 14:12:09', '2018-04-29 14:11:46'),
(8, 'testbug', '3Eu6mBDoFUMM6D8a2pG4jAtZrngoWTeXgL', '0.00000000', '2018-04-29 12:51:17', '2018-04-29 12:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_coin`
--

CREATE TABLE `wallet_coin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `saldo` decimal(16,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wallet_coin`
--

INSERT INTO `wallet_coin` (`id`, `username`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 'bitxx', '0.00000000', '2018-04-15 00:00:00', '0000-00-00 00:00:00'),
(2, 'harjulianto', '0.00000000', '2018-04-29 17:48:38', '2018-04-29 17:48:38'),
(3, 'katakutu', '0.00000000', '2018-04-15 06:36:39', '2018-04-15 06:36:39'),
(4, 'bukankutu', '0.00000000', '2018-04-15 06:42:54', '2018-04-15 06:42:54'),
(6, 'bonano', '0.00000000', '2018-04-16 07:22:50', '2018-04-16 07:22:50'),
(7, 'admin', '10000000.00000000', '2018-04-29 14:12:19', '2018-04-29 14:11:46'),
(8, 'testbug', '10.00000000', '2018-04-29 17:48:38', '2018-04-29 17:48:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ico`
--
ALTER TABLE `ico`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_block`
--
ALTER TABLE `transaksi_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_btc`
--
ALTER TABLE `transaksi_btc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_btx`
--
ALTER TABLE `transaksi_btx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallet_btc`
--
ALTER TABLE `wallet_btc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wallet_coin`
--
ALTER TABLE `wallet_coin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ico`
--
ALTER TABLE `ico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_block`
--
ALTER TABLE `transaksi_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_btc`
--
ALTER TABLE `transaksi_btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_btx`
--
ALTER TABLE `transaksi_btx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wallet_btc`
--
ALTER TABLE `wallet_btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wallet_coin`
--
ALTER TABLE `wallet_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
