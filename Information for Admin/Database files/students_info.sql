-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 04:07 AM
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
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL,
  `Roll` int(11) DEFAULT NULL,
  `Student_name` varchar(100) DEFAULT NULL,
  `Fathers_name` varchar(100) DEFAULT NULL,
  `Mothers_name` varchar(100) DEFAULT NULL,
  `Village` varchar(50) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Phone_family` varchar(50) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Religion` varchar(100) DEFAULT NULL,
  `Terms_Condition` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
