-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2020 at 07:52 PM
-- Server version: 10.3.23-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1
BEGIN;   

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martincic_dev`
--

-- --------------------------------------------------------



CREATE TABLE `addresses` (
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `region_name` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `zip` text DEFAULT NULL,
  `lat` text DEFAULT NULL,
  `lon` text DEFAULT NULL,
  `timezone` text DEFAULT NULL,
  `isp` text DEFAULT NULL,
  `asp` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `addresses`
  ADD PRIMARY KEY (`ip`);
--
-- Table structure for table `visits`
--
CREATE TABLE `visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `lang` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `visits`
  ADD CONSTRAINT `visit_user_ip_foreign` FOREIGN KEY (`ip`) REFERENCES `addresses` (`ip`) ON DELETE CASCADE;

COMMIT;   