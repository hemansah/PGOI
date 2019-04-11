-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 09:52 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgoidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `event_range` varchar(50) NOT NULL,
  `post_by` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `topic`, `details`, `event_range`, `post_by`, `date_time`) VALUES
(3, 'this dfjfd', 'sdfkbjdfsk sd f', '04/07/2019 - 04/16/2019', 'admin', '2019-03-31 18:32:35'),
(4, 'unit test', 'for semesdter 8', '04/01/2019 - 04/02/2019', 'admin', '2019-04-01 12:31:21'),
(5, 'Mega campus', 'There will be 40 compnies. There will be 40 compnies. There will be 40 compnies. There will be 40 compnies. ', '04/10/2019 - 04/10/2019', 'admin', '2019-04-11 13:18:43'),
(6, 'Infosys campus', ' campus drive for infosyscampus drive for infosyscampus drive for infosyscampus drive for infosyscampus drive for infosyscampus drive for infosys', '04/13/2019 - 04/13/2019', 'admin', '2019-04-11 13:19:12'),
(7, 'The new event', ' This ois the new event This ois the new event  This ois the new event This ois the new event  This ois the new event This ois the new event ', '04/13/2019 - 04/20/2019', 'admin', '2019-04-11 13:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` enum('active','disable') NOT NULL DEFAULT 'active',
  `post_by` varchar(50) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `topic`, `details`, `status`, `post_by`, `date_time`) VALUES
(1, 'Topic one', 'This is the content', 'disable', '', '2019-03-25 02:01:19'),
(2, 'Topic two abhi', ' dsgfds dsgfds dsgfds dsgfds dsgfds dsgfds dsgfds dsgfds dsgfds dsgfds', 'disable', 'admin', '2019-03-25 02:01:43'),
(10, 'New topic', 'New content for new topic and this is testing cinent whatever is it sbha lba blah blah', 'disable', 'admin', '2019-04-01 07:00:18'),
(15, 'dskfhbk', 'ghghghhg  gh gh gh ', 'active', 'admin', '2019-03-18 11:52:27'),
(16, 'dskfhbk', 'ghghghhg  gh gh gh ', 'active', 'admin', '2019-03-18 11:55:23'),
(17, 'fdh', 'dfh', 'active', 'admin', '2019-03-18 12:11:37'),
(18, 'dgh', 'dfghd', 'active', 'admin', '2019-03-18 12:12:14'),
(22, 'cccc', 'kdkf fdjdsklfc dfkdkmfg dkd,kjvf sk', 'disable', 'admin', '2019-03-21 13:45:33'),
(23, 'cccc', 'kdkf fdjdsklfc dfkdkmfg dkd,kjvf sk', 'active', 'admin', '2019-03-21 13:55:29'),
(24, 'cccc', 'askjfjk d gf  as  d s s s  s s s', 'disable', 'admin', '2019-03-21 14:25:57'),
(25, 'Topic one one', 'This is the content', 'disable', 'admin', '2019-03-21 16:13:12'),
(26, 'Holi vacations', 'Holi vacations startin gon 18 may to 22 may', 'active', 'admin', '2019-04-01 06:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin@\r\nadmin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
