-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 12:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admingym`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(30) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mnumber` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `desc` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `payment` varchar(10) NOT NULL DEFAULT 'Not Paid',
  `roll` int(1) NOT NULL DEFAULT 0,
  `dt` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `mnumber`, `age`, `weight`, `height`, `address`, `desc`, `username`, `password`, `plan`, `payment`, `roll`, `dt`) VALUES
(1, 'Admin', '', '-', '-', '-', '-', '-', '-', '-', 'admin', '$2y$10$McKSu9BiVszR8cMO6c3MLOCNnIkyhATnmYo0QtxpGu4Gj6Ytz8nHu', '-', '-', 1, 'current_timestamp()'),
(35, 'Sanket', 'Patil', 'sp@gmail.com', '9876543212', '20', '64', '173', 'Ozar (Mig)', 'healthy', 'sanket', '$2y$10$RiEzzk9bN2C8bfIvtx1ab.JT6Ag3tdvdBKs7iIe6YtQrmNtPp2am2', '3000rs', 'Not Paid', 0, 'current_timestamp()'),
(36, 'Anish ', 'Shinde', 'as@gmail.com', '9123455678', '20', '60', '175', 'Niphad', 'healthy', 'anish', '$2y$10$c6rspKh/gumabvpX8CPZcO.KPyRmqsXinxTSwoxG0VIiQvjhDFAru', '600rs', 'Paid', 0, 'current_timestamp()'),
(37, 'Rohit', 'Patil', 'rp@gmail.com', '943215670', '20', '50', '170', 'Jatra Hotel', 'healthy', 'rohit', '$2y$10$FYtanxx7/VP.mhpw2y/4QeqP8kVcfUAvcUurmf7ytB/8NdGpEUV/a', '3000rs', 'Not Paid', 0, 'current_timestamp()'),
(38, 'Abhishek', 'Pardeshi', 'ap@gmail.com', '971234560', '20', '50', '172', 'Satpur', 'healthy', 'abhi', '$2y$10$TDpJmEu7msN97xVXvFkXqOShkRUfZ6WJgqyR9aS14jNuxL2JZ3kYO', '300rs', 'Not Paid', 0, 'current_timestamp()');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
