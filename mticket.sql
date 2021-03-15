-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2021 at 01:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_14_174846_create_tickets_table', 1),
(5, '2021_03_14_194432_change_is_open', 2),
(6, '2021_03_14_230454_update_tbl_tickkets', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tickets_ticket_id_unique` (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_id`, `name`, `email`, `message`, `response`, `status`, `is_view`, `created_at`, `updated_at`, `agent_id`) VALUES
(1, '1615752410HI8LGKO2VP', 'KW', 'kithminirkw@gmail.com', 'Test Complain', 'feedback', 'Closed', 'Yes', '2021-03-14 14:36:51', '2021-03-14 14:36:51', 0),
(2, '1615753470LSHQUBTJOH', 'KW', 'kithminirkw@gmail.com', 'Test Complain', '', 'Open', 'Yes', '2021-03-14 14:54:30', '2021-03-14 14:54:30', 0),
(3, '1615753586GPMBMUTYTY', 'KW', 'kithminirkw@gmail.com', 'Test Complain', 'feedback2', 'Closed', 'Yes', '2021-03-14 14:56:26', '2021-03-14 14:56:26', 0),
(4, '1615753620Z5LBFJODNM', 'KW', 'kithminirkw@gmail.com', 'Test Complain', '', 'Open', 'No', '2021-03-14 14:57:00', '2021-03-14 14:57:00', 0),
(5, '16157538562O6SFM5UDJ', 'KW', 'kithminirkw@gmail.com', 'Test Complain', 'feedback', 'Closed', 'Yes', '2021-03-14 15:00:56', '2021-03-14 15:00:56', 0),
(6, '1615754313YTHWCJXBSZ', 'KW', 'kithminirkw@gmail.com', 'Test Complain', '', 'Open', 'Yes', '2021-03-14 15:08:33', '2021-03-14 15:08:33', 1),
(7, '1615754370PYLODHJILQ', 'KW', 'kithminirkw@gmail.com', 'Test Complain', 'feedback', 'Closed', 'Yes', '2021-03-14 15:09:30', '2021-03-14 15:09:30', 0),
(8, '1615754644KQASSKOVQY', 'KW', 'kithminirkw@gmail.com', 'Test Test', '', 'Open', 'Yes', '2021-03-14 15:14:04', '2021-03-14 15:14:04', 0),
(9, '16157546714WY76RU4GT', 'KW', 'kithminirkw@gmail.com', 'Test Test', 'done', 'Closed', 'Yes', '2021-03-14 15:14:31', '2021-03-14 15:14:31', 1),
(10, '1615754895I3ZNFBHZGY', 'KW', 'kithminirkw@gmail.com', 'eedhdjdj', '', 'Open', 'No', '2021-03-14 15:18:15', '2021-03-14 15:18:15', 0),
(11, '1615756015SUTLVMPPV8', 'RRR', 'fffh', 'reaslasjlas', '', 'Open', 'No', '2021-03-14 15:36:55', '2021-03-14 15:36:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_agent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_agent`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agent', 'agent@support.com', '$2y$10$X2QMeRtiM5iyzySm8ra4Ee60ybr2mkjWdkv0uvnH94D3LCMaMD7ra', 0, NULL, '2021-03-14 17:08:06', '2021-03-14 17:08:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
