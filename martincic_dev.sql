-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2020 at 07:52 PM
-- Server version: 10.3.23-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

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

--
-- Table structure for table `blocked`
--

CREATE TABLE `blocked` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `lang` text DEFAULT NULL,
  `fail_count` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blocked`
--

INSERT INTO `blocked` (`id`, `ip`, `user_agent`, `port`, `lang`, `fail_count`, `created_at`) VALUES
(100, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 43910, 'en-US,en;q=0.9', 0, '2020-10-15 09:56:43'),
(101, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 43910, 'en-US,en;q=0.9', 1, '2020-10-15 09:56:45'),
(102, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 43914, 'en-US,en;q=0.9', 2, '2020-10-15 09:57:15'),
(103, '78.3.212.89', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 8T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36', 2500, 'en-US,en;q=0.9', 0, '2020-10-15 10:02:39'),
(104, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 61593, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 3, '2020-10-15 10:31:06'),
(105, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 61594, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 4, '2020-10-15 10:32:05'),
(106, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 61597, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 5, '2020-10-15 10:33:17'),
(107, '193.27.228.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 57250, NULL, 0, '2020-10-15 10:35:13'),
(108, '193.27.228.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 52538, NULL, 1, '2020-10-15 10:44:27'),
(109, '193.27.228.27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 53528, NULL, 2, '2020-10-15 10:48:45'),
(110, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 44070, 'en-US,en;q=0.9', 6, '2020-10-15 11:01:45'),
(111, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 44070, 'en-US,en;q=0.9', 7, '2020-10-15 11:01:50'),
(112, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 44070, 'en-US,en;q=0.9', 8, '2020-10-15 11:01:52'),
(113, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 44070, 'en-US,en;q=0.9', 9, '2020-10-15 11:01:53'),
(114, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 44070, 'en-US,en;q=0.9', 10, '2020-10-15 11:01:56'),
(115, '171.247.55.88', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 42215, NULL, 0, '2020-10-15 11:27:03'),
(116, '54.36.148.99', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 15076, NULL, 0, '2020-10-15 11:51:04'),
(117, '77.38.77.54', NULL, 43753, NULL, 0, '2020-10-15 13:06:27'),
(118, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52214, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 11, '2020-10-15 13:11:18'),
(119, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52286, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 12, '2020-10-15 13:30:55'),
(120, '186.219.240.6', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7', 56031, NULL, 0, '2020-10-15 13:36:46'),
(121, '88.245.93.22', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 53314, NULL, 0, '2020-10-15 13:39:18'),
(122, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52402, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 13, '2020-10-15 13:51:03'),
(123, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52402, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 14, '2020-10-15 13:51:07'),
(124, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52405, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 15, '2020-10-15 13:51:40'),
(125, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52409, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 16, '2020-10-15 13:52:24'),
(126, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52409, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 17, '2020-10-15 13:52:27'),
(127, '188.252.190.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 52409, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 18, '2020-10-15 13:52:31'),
(128, '51.178.155.183', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0', 51970, NULL, 0, '2020-10-15 14:09:19'),
(129, '167.248.133.52', NULL, 49928, NULL, 0, '2020-10-15 14:11:00'),
(130, '167.248.133.52', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 52818, NULL, 1, '2020-10-15 14:11:01'),
(131, '73.158.77.95', NULL, 60561, NULL, 0, '2020-10-15 15:08:23'),
(132, '162.142.125.52', NULL, 48160, NULL, 0, '2020-10-15 15:16:08'),
(133, '162.142.125.52', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 56716, NULL, 1, '2020-10-15 15:16:09'),
(134, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 47374, 'en-US,en;q=0.9', 19, '2020-10-15 16:18:32'),
(135, '188.252.190.38', 'Mozilla/5.0 (X11; Linux armv7l) AppleWebKit/537.36 (KHTML, like Gecko) Raspbian Chromium/78.0.3904.108 Chrome/78.0.3904.108 Safari/537.36', 47378, 'en-US,en;q=0.9', 20, '2020-10-15 16:18:34'),
(136, '188.252.190.38', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 8T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Mobile Safari/537.36', 47704, 'en-US,en;q=0.9,hr-HR;q=0.8,hr;q=0.7', 21, '2020-10-15 17:10:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocked`
--
ALTER TABLE `blocked`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocked`
--
ALTER TABLE `blocked`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
