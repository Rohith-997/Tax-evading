-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 08:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `phoneNo` varchar(11) NOT NULL,
  `passbookNo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `name`, `amount`, `phoneNo`, `passbookNo`) VALUES
(3, 'Sourav Anand', 22222, '09852400691', 2147483647),
(4, 'Sourav Anand', 22222, '09852400691', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `email`, `password`) VALUES
(6, 'sourabhanand600@gmail.com', 'md5(asdf)'),
(7, 'Sourav.upadhyay@yahoo.com', 'md5(asdf)'),
(8, 'rohit@gmail.com', 'md5(asdfg)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
