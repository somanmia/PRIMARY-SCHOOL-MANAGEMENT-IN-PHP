-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 04:06 AM
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
-- Table structure for table `class_1`
--

CREATE TABLE `class_1` (
  `id` int(11) NOT NULL,
  `Exm_year` int(11) DEFAULT NULL,
  `Roll` int(11) DEFAULT NULL,
  `Bangla` int(11) DEFAULT NULL,
  `English` int(11) DEFAULT NULL,
  `Math` int(11) DEFAULT NULL,
  `Ck` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_1`
--

INSERT INTO `class_1` (`id`, `Exm_year`, `Roll`, `Bangla`, `English`, `Math`, `Ck`) VALUES
(5, 2020, 1, 80, 60, 88, 1),
(7, 2019, 2, 77, 88, 88, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_1`
--
ALTER TABLE `class_1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Roll` (`Roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_1`
--
ALTER TABLE `class_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
