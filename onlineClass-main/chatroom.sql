-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 06:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `srn` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`srn`, `msg`, `room`, `ip`, `stime`) VALUES
(1, 'msg', '234', '4rwd', '2020-11-17 01:28:40'),
(2, 'my self aryan', 'ARYAN', '::1', '2020-12-01 15:47:59'),
(13, 'i am here to explain something\n', 'ARYAN', '::1', '2020-12-01 17:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `srn` int(11) NOT NULL,
  `roomname` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`srn`, `roomname`, `stime`) VALUES
(1, 'check_it_up', '2020-08-31 21:28:24'),
(2, 'harry1234', '2020-08-31 21:39:47'),
(3, 'himanshi34', '2020-08-31 21:44:24'),
(4, 'aryan', '2020-08-31 21:59:36'),
(5, 'himanshi', '2020-08-31 22:04:11'),
(6, 'rahul234', '2020-08-31 22:05:16'),
(7, 'ravi34', '2020-08-31 22:22:15'),
(8, 'adarsh234', '2020-09-29 17:10:03'),
(9, 'chirag', '2020-11-16 22:53:55'),
(10, 'jhsgvuisg', '2020-11-16 23:50:21'),
(11, 'uyufuy', '2020-11-16 23:50:41'),
(12, 'vgf2345', '2020-11-16 23:59:07'),
(13, '58758758', '2020-11-16 23:59:19'),
(14, 'Dam345', '2020-11-17 00:49:32'),
(15, 'adarsh1234', '2020-11-17 10:10:59'),
(16, 'chirag456', '2020-11-17 10:20:31'),
(17, 'chirag457', '2020-11-17 10:28:15'),
(18, 'harshit45', '2020-11-18 23:28:33'),
(19, 'gdthdjh', '2020-12-01 11:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`srn`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`srn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `srn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `srn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
