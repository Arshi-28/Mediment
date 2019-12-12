-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 08:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentid` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0',
  `verified` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `diseaseid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorid` int(255) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `education` varchar(200) NOT NULL,
  `hospitalid` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorid`, `firstname`, `lastname`, `specialization`, `education`, `hospitalid`, `created_at`, `updated_at`, `isdelete`) VALUES
(1, '', '', '0', 'dhaka med', 1, '2019-12-12 06:32:10', '2019-12-12 06:32:10', '0'),
(2, 'jkhjk', 'khbhj', '1', 'hghj', 4, '2019-12-12 06:33:27', '2019-12-12 06:33:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospitalid` int(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospitalid`, `name`, `contact`, `address`, `created_at`, `updated`, `isdelete`) VALUES
(1, '', '2147483647', 'Bashundhara RA', '2019-12-12 07:04:58', '2019-12-12 07:04:58', '0'),
(2, 'United Hospital', '01712345678', 'Gulshan', '2019-12-12 07:13:52', '2019-12-12 07:13:52', '0');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptomid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `weight` int(200) NOT NULL,
  `gender` char(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` char(1) NOT NULL DEFAULT '0',
  `verfied` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentid`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`diseaseid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospitalid`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptomid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointmentid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `diseaseid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospitalid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptomid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
