-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 01:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `S_id` int(255) NOT NULL,
  `S_name` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Roll` int(3) NOT NULL,
  `S_email` varchar(100) NOT NULL,
  `S_faculty` varchar(25) NOT NULL,
  `Semester` varchar(3) NOT NULL,
  `S_phone` int(15) NOT NULL,
  `C_address` varchar(30) NOT NULL,
  `P_address` varchar(30) NOT NULL,
  `G_name` varchar(100) NOT NULL,
  `G_phone` int(20) NOT NULL,
  `Scholarship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`S_id`, `S_name`, `Gender`, `Roll`, `S_email`, `S_faculty`, `Semester`, `S_phone`, `C_address`, `P_address`, `G_name`, `G_phone`, `Scholarship`) VALUES
(1, 'Pabin  dhami', 'Male', 17, 'pabindhami@gmail.com', 'DCOM', '3', 12345, 'Jorpati', '', 'Govinda', 3434234, 0),
(2, 'Rohan tamang', 'Male', 21, '', 'DCOM', '3', 12345, 'Jorpati', 'Ktm', '', 0, 0),
(3, 'Amrit kumar tamang', 'Male', 14, '', 'Electrical', '3', 0, 'Jorpati', 'Ktm', '', 0, 0),
(4, 'Sibisha nepal', 'Female', 14, '', 'Architecture', '3', 0, 'Jorpati', 'Ktm', '', 0, 0),
(5, 'Subash ghale', 'Male', 23, '', 'Civil', '3', 0, 'Jorpati', '', '', 0, 0),
(6, 'James tamang', 'Male', 14, '', 'E&E', '3', 12345, 'Jorpati', 'Ktm', '', 0, 0),
(7, 'Samir tamang', 'Male', 43, 'pabindhami@gmail.com', 'Electrical', '5', 3, 'Jorpati', 'Ktm', 'Gopal Rajak', 3434234, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `unique_id` bigint(15) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(1000) NOT NULL,
  `Admin_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `profile`, `Admin_status`) VALUES
(2, 519240230, 'root', 'root', 'root@root.com', '$2y$10$5uU6fuUCh1ZmDNRx.InsvehyfHADURMwVQ7ezU3U/WrhWBOjd8H.a', '1659643383love.png', 1),
(3, 656869024, 'Gopal', 'Buda', 'gopalbuda123@gmail.com', '$2y$10$YtIROh5UL.ybf8Ar4kFbf.D5zAwGS8Ab5q/l8yOephSAl61FHQIOu', '1659649155love-message.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `S_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
