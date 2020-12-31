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
-- Table structure for table `jsc`
--

CREATE TABLE `jsc` (
  `id` int(11) NOT NULL,
  `Exam_Year` int(11) DEFAULT NULL,
  `Total_Student` int(11) DEFAULT NULL,
  `Passed` int(11) NOT NULL,
  `Fail` int(11) NOT NULL,
  `Gpa_5` int(11) NOT NULL,
  `Gpa_4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jsc`
--

INSERT INTO `jsc` (`id`, `Exam_Year`, `Total_Student`, `Passed`, `Fail`, `Gpa_5`, `Gpa_4`) VALUES
(6, 2020, 30, 30, 0, 25, 5),
(7, 2019, 45, 44, 1, 35, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jsc`
--
ALTER TABLE `jsc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Exam_Year` (`Exam_Year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jsc`
--
ALTER TABLE `jsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
