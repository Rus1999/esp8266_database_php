-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 12:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_arduino_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id_device` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name_device` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id_device`, `name_device`) VALUES
('D1 ', 'เครื่องจุดที่ 1'),
('D2 ', 'กลางทาง1'),
('D3', 'ปลายทาง'),
('D4', 'เครื่องจุดที่ 4'),
('D5', 'เครื่องจุดที่ 5'),
('D6 ', 'เครื่องจุดที่ 6'),
('D7', 'เครื่องจุดที่ 7');

-- --------------------------------------------------------

--
-- Table structure for table `device_data`
--

CREATE TABLE `device_data` (
  `id_data` int(5) NOT NULL,
  `id_device` varchar(10) NOT NULL,
  `temp` float NOT NULL,
  `humidity` float NOT NULL,
  `day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_data`
--

INSERT INTO `device_data` (`id_data`, `id_device`, `temp`, `humidity`, `day`) VALUES
(1, 'D1', 23.54, 75.5, '2021-07-27 10:34:49'),
(2, 'D', 23, 0, '2021-07-27 10:34:49'),
(3, 'D3', 23.84, 45.25, '2021-07-27 10:34:49'),
(4, 'D5', 23.74, 45.21, '2021-07-27 10:34:49'),
(5, 'D2', 35.41, 55.14, '2021-07-27 10:34:49'),
(6, 'D2', 24.14, 49.12, '2021-07-27 10:34:49'),
(7, 'D6', 25.21, 45.12, '2021-07-27 10:34:49'),
(8, 'D3', 23, 35.04, '2021-07-27 10:34:49'),
(9, 'D4', 20.45, 54.1, '2021-07-27 10:34:49'),
(10, 'D4', 23.76, 65.25, '2021-07-27 10:34:49'),
(11, 'D2', 20.54, 52.02, '2021-07-27 10:34:49'),
(12, 'D2', 25.45, 56.21, '2021-07-27 10:34:49'),
(13, 'D4', 35.21, 35.12, '2021-07-27 10:34:49'),
(14, 'D4', 23, 51.12, '2021-07-27 10:34:49'),
(15, 'D2', 23, 25.15, '2021-07-27 10:34:49'),
(16, 'D2', 35.21, 54.2, '2021-07-27 10:34:49'),
(17, 'D1', 23, 0, '2021-07-17 15:29:06'),
(18, 'D1', 23, 0, '2021-07-17 15:29:11'),
(19, 'D1', 23, 0, '2021-07-17 15:29:16'),
(20, 'D1', 23, 0, '2021-07-17 15:29:21'),
(21, 'D1', 23, 0, '2021-07-17 15:29:26'),
(22, 'D1', 23, 0, '2021-07-17 15:29:31'),
(23, 'D1', 23, 0, '2021-07-17 15:29:36'),
(24, 'D1', 23, 0, '2021-07-17 15:29:41'),
(25, 'D1', 23, 0, '2021-07-17 15:29:46'),
(26, 'D1', 23, 0, '2021-07-17 15:29:51'),
(27, 'D1', 23, 0, '2021-07-17 15:29:56'),
(28, 'D1', 23, 0, '2021-07-17 15:30:01'),
(29, 'D1', 23, 0, '2021-07-17 15:30:07'),
(30, 'D1', 23, 0, '2021-07-17 15:30:12'),
(31, 'D1', 23, 0, '2021-07-17 15:30:17'),
(32, 'D1', 23, 0, '2021-07-17 15:30:22'),
(33, 'D1', 23, 0, '2021-07-17 15:30:27'),
(34, 'D1', 23, 0, '2021-07-17 15:30:32'),
(35, 'D1', 23, 0, '2021-07-17 15:30:37'),
(36, 'D1', 23, 0, '2021-07-17 15:30:42'),
(37, 'D1', 23, 0, '2021-07-17 15:30:47'),
(38, 'D1', 23, 0, '2021-07-17 15:30:52'),
(39, 'D1', 23, 0, '2021-07-17 15:30:57'),
(40, 'D1', 23, 0, '2021-07-17 15:31:02'),
(41, 'D1', 23, 0, '2021-07-17 15:31:07'),
(42, 'D1', 23, 0, '2021-07-17 15:31:12'),
(43, 'D1', 23, 0, '2021-07-17 15:31:17'),
(44, 'D1', 23, 0, '2021-07-17 15:31:23'),
(45, '111', 25, 0, '2021-07-18 08:06:58'),
(46, '111', 25, 0, '2021-07-18 08:07:03'),
(47, '111', 25, 0, '2021-07-18 08:07:08'),
(48, '111', 25, 0, '2021-07-18 08:07:13'),
(49, '111', 24, 0, '2021-07-18 08:07:18'),
(50, '111', 25, 0, '2021-07-18 08:07:23'),
(51, '111', 25, 0, '2021-07-18 08:07:28'),
(52, '111', 25, 0, '2021-07-18 08:07:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id_device`);

--
-- Indexes for table `device_data`
--
ALTER TABLE `device_data`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device_data`
--
ALTER TABLE `device_data`
  MODIFY `id_data` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
