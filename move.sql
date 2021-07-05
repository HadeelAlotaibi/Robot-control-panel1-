-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 يوليو 2021 الساعة 08:20
-- إصدار الخادم: 8.0.17
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `move`
--

CREATE TABLE `move` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forward` varchar(30) NOT NULL,
  `backward` varchar(30) NOT NULL,
  `stop` varchar(30) NOT NULL,
  `leftbtn` varchar(30) NOT NULL,
  `rightbtn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- إرجاع أو استيراد بيانات الجدول `move`
--

INSERT INTO `move` (`id`, `forward`, `backward`, `stop`, `leftbtn`, `rightbtn`) VALUES
(1, 'Forward', '0', '0', '0', '0'),
(2, '0', '0', 'Stop', '0', '0'),
(3, '0', 'Backward', '0', '0', '0'),
(4, '0', '0', '0', '0', 'Right'),
(5, '0', '0', 'Stop', '0', '0'),
(6, '1', '0', '0', '0', '0'),
(7, '0', '0', '1', '0', '0'),
(8, '1', '0', '0', '0', '0'),
(9, '0', '0', '1', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `move`
--
ALTER TABLE `move`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `move`
--
ALTER TABLE `move`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
