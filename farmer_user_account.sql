-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 10:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_user_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_owner`
--

CREATE TABLE `business_owner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `business_details` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_owner`
--

INSERT INTO `business_owner` (`id`, `name`, `business_details`, `profile_picture`, `username`, `password`, `email`, `phone_number`) VALUES
(2, 'miftee', 'miftee firm', '{}', 'miftee@gmail.com', '12345678', 'miftee@gmail.com', '12123423425'),
(3, 'miftee Alam', 'miftee Alam firm', '', 'miftee2@gmail.com', '12345678', 'miftee2@gmail.com', '12123423425'),
(4, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `details`, `picture`) VALUES
(7, 'Miftee11', 'my firm dfgdfgdfgd', ''),
(9, 'ghjghj', 'ghjhgj', ''),
(10, '78678', '678678658', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_owner`
--
ALTER TABLE `business_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_owner`
--
ALTER TABLE `business_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
