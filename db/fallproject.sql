-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 04:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fallproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', '$2y$10$dX4cak1nhMZQHmc/MMkhku9gSe9JE.tuUrCX9aXrqscJGaiidz8l.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `announcement` varchar(50) NOT NULL,
  `bloodneed` varchar(3) NOT NULL,
  `dat` date NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announcement`, `bloodneed`, `dat`, `organizer`, `requirements`) VALUES
(4, 'Urgent Blood Requirement', 'O+', '2023-11-27', 'BDMS', 'Need an O+ve blood group for my friend for Surgery. Reason: Please provide a reason why blood is required, this helps donors to understand how critical it is for them to donate Blood.');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` varchar(20) NOT NULL,
  `zipCode` int(6) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `bloodqty` int(11) NOT NULL,
  `collection` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `zipCode`, `contact`, `bloodqty`, `collection`) VALUES
(25, 'Sample Name', 'M', '2006-10-10', 120, 'B-', 'Overland Park', 0, '8002910156', 2, '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `zipCode` int(6) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `dpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `zipCode`, `contact`, `username`, `dpassword`) VALUES
(43, 'Satyam Rai', 'Rambilash Rai', 'M', '2001-12-08', 120, 'B+', 'satyam@gmail.com', 'Overland park', 66221, '8002910156', 'satyam', '$2y$10$8phmuILOO1k8sRFTJYXs9O6X1FiT4ZLv/ahodJYPj.7SEvBKixAZS');

-- --------------------------------------------------------

--
-- Table structure for table `sessiondata`
--

CREATE TABLE `sessiondata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `access_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessiondata`
--

INSERT INTO `sessiondata` (`id`, `username`, `user_id`, `access_time`) VALUES
(1, 'admin', 2, '2023-11-28 01:55:20'),
(2, 'admin', 2, '2023-11-28 01:57:06'),
(3, 'admin', 2, '2023-11-28 02:16:52'),
(4, 'admin', 2, '2023-11-28 02:17:29'),
(5, 'admin', 2, '2023-11-28 02:48:46'),
(6, 'admin', 2, '2023-11-28 02:59:25'),
(7, 'admin', 2, '2023-11-28 03:03:50'),
(8, 'satyam', NULL, '2023-11-28 03:05:40'),
(9, 'satyam', 43, '2023-11-28 03:11:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessiondata`
--
ALTER TABLE `sessiondata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `sessiondata`
--
ALTER TABLE `sessiondata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
