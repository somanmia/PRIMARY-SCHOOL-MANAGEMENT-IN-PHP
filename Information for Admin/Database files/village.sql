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
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `id` int(11) NOT NULL,
  `village` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`id`, `village`) VALUES
(25, 'à¦¬à§œà¦¤à¦²à¦¾'),
(14, 'Carshapmari'),
(19, 'Corguyadanga'),
(21, 'Dakatbari'),
(22, 'Haura Gor'),
(20, 'Imambari'),
(17, 'Khunuya'),
(18, 'Khunuya Char Para'),
(23, 'Mucharcor'),
(16, 'Rogunathpur'),
(15, 'Shapmari'),
(24, 'Surjoddi'),
(13, 'Vatpara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `village` (`village`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
