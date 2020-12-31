-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 04:05 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_cost`
--

CREATE TABLE `academic_cost` (
  `id` int(11) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `admission_fee` int(11) DEFAULT NULL,
  `session_fee` int(11) DEFAULT NULL,
  `monthly_fee` int(11) DEFAULT NULL,
  `coaching_fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_cost`
--

INSERT INTO `academic_cost` (`id`, `class`, `admission_fee`, `session_fee`, `monthly_fee`, `coaching_fee`) VALUES
(4, '1', 500, 300, 400, 300),
(5, '2', 200, 400, 400, 300),
(6, '3', 200, 400, 400, 350),
(7, '4', 300, 400, 450, 350),
(8, '5', 1000, 2000, 5000, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_cost`
--
ALTER TABLE `academic_cost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_cost`
--
ALTER TABLE `academic_cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
