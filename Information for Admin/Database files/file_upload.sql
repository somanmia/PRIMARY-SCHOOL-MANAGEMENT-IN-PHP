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
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `File_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`Id`, `Title`, `Date`, `File_name`) VALUES
(1, 'SSC Result', '0012-12-12', 'Problem 17 - [৫২ সমস্যা বই] স্বরবর্ণ গণনা - Dimik OJ.pdf'),
(2, 'SSC Result', '2020-05-05', '1.pdf'),
(3, 'SSC Result', '2020-05-05', '1.pdf'),
(4, 'SSC Result', '2020-05-05', '1.pdf'),
(5, 'SSC Result', '2020-05-05', '1.pdf'),
(6, 'SSC Result', '2020-05-05', '1.pdf'),
(7, 'SSC Result', '2020-05-05', '1.pdf'),
(8, 'SSC Result', '2020-05-05', '1.pdf'),
(9, 'SSC Result', '2020-05-05', '1.pdf'),
(10, 'SSC Result', '2020-05-05', '1.pdf'),
(11, 'SSC Result', '2020-05-05', '1.pdf'),
(12, 'SSC Result', '2020-05-05', '1.pdf'),
(13, 'SSC Result', '2020-05-05', '1.pdf'),
(14, 'SSC Result', '2020-05-05', '1.pdf'),
(15, 'SSC Result', '2020-05-05', '1.pdf'),
(16, 'SSC Result', '2020-05-05', '1.pdf'),
(17, 'SSC Result', '2020-05-05', '1.pdf'),
(18, 'jsc Result', '2020-05-18', '1.pdf'),
(19, 'jsc Result', '2020-05-18', '1.pdf'),
(20, 'Examination-2', '2020-12-02', 'hh.pdf'),
(21, 'Examination-3', '2020-12-03', 'hh.pdf'),
(22, 'Examination-4', '2020-12-04', 'hh.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
