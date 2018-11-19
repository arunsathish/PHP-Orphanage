-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 01:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphan`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_member`
--

CREATE TABLE `active_member` (
  `m_id` int(3) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_address` int(50) NOT NULL,
  `m_dob` date NOT NULL,
  `m_nationality` varchar(20) NOT NULL,
  `m_qualification` varchar(20) NOT NULL,
  `m_institution` varchar(50) NOT NULL,
  `m_profession` varchar(20) NOT NULL,
  `m_areaofinterest` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `cid` int(50) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cdob` date NOT NULL,
  `cyoe` year(4) NOT NULL,
  `cclass` int(3) NOT NULL,
  `cstory` text NOT NULL,
  `cphoto` text NOT NULL,
  `spn_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`cid`, `cname`, `cdob`, `cyoe`, `cclass`, `cstory`, `cphoto`, `spn_id`) VALUES
(7, 'Ganesh', '2006-12-20', 2009, 1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', '', NULL),
(8, 'Suraj', '2005-06-15', 2007, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '', NULL),
(9, 'Sagar', '2006-06-14', 2008, 2, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(10, 'Arthi', '2005-05-16', 2008, 4, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '', NULL),
(11, 'Nagesh', '2005-04-08', 2009, 3, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `gift_id` int(11) NOT NULL,
  `cid` int(50) NOT NULL,
  `sending_date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `join_date` datetime DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `picture` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `password`, `join_date`, `first_name`, `last_name`, `gender`, `birthdate`, `city`, `state`, `picture`) VALUES
(1, 'testname', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-11-17 06:01:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorer`
--

CREATE TABLE `sponsorer` (
  `spn_id` int(3) NOT NULL,
  `spn_firstname` varchar(30) NOT NULL,
  `spn_lastname` varchar(30) DEFAULT NULL,
  `spn_noofyears` int(2) NOT NULL,
  `spn_email` varchar(30) NOT NULL,
  `spn_phone` int(20) NOT NULL,
  `spn_bill_address` text NOT NULL,
  `spn_amount` int(5) NOT NULL,
  `spn_checkno` varchar(20) NOT NULL,
  `cid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsorer`
--

INSERT INTO `sponsorer` (`spn_id`, `spn_firstname`, `spn_lastname`, `spn_noofyears`, `spn_email`, `spn_phone`, `spn_bill_address`, `spn_amount`, `spn_checkno`, `cid`) VALUES
(12, 'KNVL ', 'Narayana', 2, 'karthikareddy@gmail.com', 2147483647, 'fghjk', 2500, '3rerew2', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_member`
--
ALTER TABLE `active_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`gift_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sponsorer`
--
ALTER TABLE `sponsorer`
  ADD PRIMARY KEY (`spn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_member`
--
ALTER TABLE `active_member`
  MODIFY `m_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsorer`
--
ALTER TABLE `sponsorer`
  MODIFY `spn_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
