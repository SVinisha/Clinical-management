-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 12:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pmobile` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `demail` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `day` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pname`, `pemail`, `pmobile`, `paddress`, `demail`, `pdescription`, `notes`, `medical`, `status`, `day`) VALUES
(5, 'sawertyuil', 'siva@gamil.com', '098765', 'ewtrytjyku t4t45t45t45y45ey45ey  ', 'sivaraman.fabhost@gmail.com', 'lkjyhgfd weafgshdj wdgth wdrgthy wytry adtryjy szdxfcgvhbjn exrcgvhbjkn rtcgvhbjnk .', 'aesrtyujk', 'werty', 'Prescription Received', '01-03-2023 02:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `doctor_image` text NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_name`, `description`, `doctor_image`, `education`, `experience`, `address`, `mobile`, `email`, `password`) VALUES
(16, 'Sivaraman', 'Sivaraman, a former member of the Planning Commission, Government of India. Reserve Bank of India (RBI) constituted a Committee to Review', '../files/WIN_20230224_10_18_01_Pro.jpg', 'B.Tech', 6, 'T Nagar, Chennai', 9345041227, 'sivaraman.fabhost@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `doctor`, `notes`) VALUES
(1, 'sivaraman', 'siva@gamil.com', '1234567890', '1234567890', 'T nagar, Chennai', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
