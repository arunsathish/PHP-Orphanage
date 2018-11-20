-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 04:01 PM
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
  `sponsored` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`cid`, `cname`, `cdob`, `cyoe`, `cclass`, `cstory`, `cphoto`, `sponsored`) VALUES
(7, 'Ganesh', '2006-12-20', 2009, 1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', '', 0),
(8, 'Suraj', '2005-06-15', 2007, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '', 1),
(9, 'Sagar', '2006-06-14', 2008, 2, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 1),
(11, 'Nagesh', '2005-04-08', 2009, 3, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 1),
(13, 'umesh', '2007-06-14', 2010, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `d_id` int(3) NOT NULL,
  `program` varchar(20) NOT NULL,
  `amount` int(30) NOT NULL,
  `checkno` varchar(30) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `d_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`d_id`, `program`, `amount`, `checkno`, `bank_name`, `place`, `d_name`, `email`, `phone`, `d_address`) VALUES
(1, 'Lakshya', 10, '42f213', 'sbi', 'bengaluru', '', 'mukesh@gmail.com', 55555444, 'fghjk'),
(2, 'Parivartan', 787, '98da93', 'canara', 'hydrabad', 'hitesh', 'dinesh@test.com', 55555444, 'rerererer'),
(3, 'Parivartan', 4000, '98da93', 'fedaral', 'chennai', 'iran', 'iran@gmail.com', 22222222, 'wwqwqq');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(3) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `full_address` text NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `full_name`, `full_address`, `phone`, `email`, `comment`) VALUES
(1, '0', 'trtrtrtrtr', 55555444, 'tilak@gmail.com', 'fsdasdfafdads'),
(2, 'edwin', 'trtrtrtrtr', 55555444, 'test@test.com', 'szdsadasda');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `gift_id` int(11) NOT NULL,
  `cid` int(50) NOT NULL,
  `gift_type` varchar(20) NOT NULL,
  `sending_date` date NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `sender_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`gift_id`, `cid`, `gift_type`, `sending_date`, `sender_name`, `email`, `phone`, `sender_address`) VALUES
(1, 8, 'dress', '2018-11-30', 'test', 'mukesh@gmail.com', 55555444, 'rsqrk'),
(2, 9, 'helicopter', '2018-11-30', 'fazal', 'karthikareddy@gmail.com', 2147483647, 'rrrrrr');

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
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `n_id` int(3) NOT NULL,
  `n_issue` varchar(40) NOT NULL,
  `n_story` text NOT NULL,
  `n_month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`n_id`, `n_issue`, `n_story`, `n_month`) VALUES
(1, 'News for Poonam', ' Poonam, 7 years old child living with her parents who are involved in working as feiwale, having no fixed income source and spending whole day moving from one corner to another to earn their livelihood. Poonam also used to work with her parents to sell different items which was in actuallu spoting her education career and childhood. With the step ahead and support of OFD, now Poonam is a part of students who are getting education in the learning centres aparted by OFD. She is now also taking part in co-curricular activities. A major change, this girl poonam and her friend had given a presentation aar Le-Meridian on December 20, 2007 in a conference arranged by Govt India with the support of Mr.Ajay Bakaya (Executive Director, Sarover Group of Hotels.', 'June'),
(2, 'Random topic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'August');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(3) NOT NULL,
  `program_title` varchar(30) NOT NULL,
  `program_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_title`, `program_desc`) VALUES
(1, 'AAKAR - the first step', 'This is program is meant to familiarize street children and their families with the importance of education through counselling by our staff and later they are enrolled in our organization where, with the help of our non-formal way of teaching through workshops by trained teachers, they are developed a love for learning. They are later admitted in MCD or public schools for formal education. A regular monitoring is done through frequent home visits by staff members. They are also helped in their studies at our learning centers opened at different locations for the convenience of chidren in order to help them in their smooth journey in school and prevent them from dropping out.'),
(2, 'AHAR APURTI', 'To distribute food to the underprivileged, downtradden and marginalized people esp, children from the weaker sections of the society.'),
(3, 'AVSAR - a chance', 'This program has been designed to assist the meritorious children of the underprivileged class in getting admission in reputed public schools for quality education under EWS quota.'),
(4, 'Lakshya', 'To provide coaching classes for 6-12 class students of the economically weaker sections by dedicated and qualified staff. It has been designed keeping in mind the requirement of talented students who failed to afford expensive coaching being given at private coaching centers and therefore tag behind and remain unable to fullfil their dream of higher education in prestigious institutions.');

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
(15, 'dinesh', 'sharma', 3, 'dinesh@test.com', 2147483647, 'abcd', 4, '183', 9),
(16, 'kalidas', 'venkat', 2, 'kalidas@gmail.com', 2147483647, 'xyz', 300, '898ssss', 11),
(17, 'tilak', 'm', 5, 'tilak@gmail.com', 45005405, 'asdfsdf', 1100, '3232d', 8),
(18, 'KNVL ', 'jagan', 5, 'mukesh@gmail.com', 99999999, 'rtyui', 2000, '3rert', 13);

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
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

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
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

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
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `d_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `n_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsorer`
--
ALTER TABLE `sponsorer`
  MODIFY `spn_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
