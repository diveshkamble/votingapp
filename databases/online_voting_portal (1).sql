-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 04:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_voting_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_first` varchar(256) NOT NULL,
  `admin_last` varchar(256) NOT NULL,
  `admin_email` varchar(256) NOT NULL,
  `admin_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_first`, `admin_last`, `admin_email`, `admin_pwd`) VALUES
(1, 'Divesh', 'Kamble', 'diveshkamble@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(2, 'test', 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `candidate_first` varchar(256) NOT NULL,
  `candidate_middle` varchar(256) NOT NULL,
  `candidate_last` varchar(256) NOT NULL,
  `candidate_email` varchar(256) NOT NULL,
  `candidate_branch` varchar(256) NOT NULL,
  `candidate_uin` varchar(256) NOT NULL,
  `candidate_pwd` varchar(256) NOT NULL,
  `candidate_mobile` varchar(256) NOT NULL,
  `candidate_about` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_first`, `candidate_middle`, `candidate_last`, `candidate_email`, `candidate_branch`, `candidate_uin`, `candidate_pwd`, `candidate_mobile`, `candidate_about`) VALUES
(1, 'Divesh', 'hello', 'my', 'diveshkamble@gmail.com', 'electronics', '789457', '$2y$10$YjQJg0WGd1GicE5Z1ZbBVerJwoL3gintH9miZ.XExUWI/NRY11o6e', '9004620924', 'ello');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `feedback` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `feedback`) VALUES
(1, 'divesh', 'test@gmail.com', 'test'),
(2, 'wtf', 'diveshkamble@gmail.com', 'wtf');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rc_id` int(4) NOT NULL,
  `rc_name` varchar(256) NOT NULL,
  `rc_vote` int(11) DEFAULT NULL,
  `rc_branch` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rc_id`, `rc_name`, `rc_vote`, `rc_branch`) VALUES
(1, 'Shreyas Nair', 1, 'comps'),
(2, 'Zeeshan Shaikh', 1, 'civil'),
(3, 'Mudassir Moolji', NULL, 'mech'),
(4, 'Hamza Ghajoria', NULL, 'extc'),
(5, 'Taher Rajkotwala', 1, 'etrx'),
(6, 'Somansh Kumar	', NULL, 'bio');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voter_id` int(11) NOT NULL,
  `voter_first` varchar(256) NOT NULL,
  `voter_middle` varchar(256) NOT NULL,
  `voter_last` varchar(256) NOT NULL,
  `voter_email` varchar(256) NOT NULL,
  `voter_branch` varchar(256) NOT NULL,
  `voter_pwd` varchar(256) NOT NULL,
  `voter_mobile` varchar(256) NOT NULL,
  `voter_uin` varchar(256) NOT NULL,
  `voter_voted` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voter_id`, `voter_first`, `voter_middle`, `voter_last`, `voter_email`, `voter_branch`, `voter_pwd`, `voter_mobile`, `voter_uin`, `voter_voted`) VALUES
(5, 'test', 'test', 'test', 'test@test.com', 'computer', '$2y$10$Bn6IHdlOvRikvjzLEbgfz.ZwiiD9xC89VPb4yWoFF8Xbw4rMNMcZ6', '1231231211', '657389', 'voted'),
(6, 'teqwqe', 'wetw', 'wetsdf', 'test@123.com', 'computer', '$2y$10$pY6wFrPkKCJ2thE9gbeQROH22DPO7I9TuLfNaaCtsFvOvRuG3fcgK', '1244124', '114411', 'voted'),
(7, 'asgsagasgf', 'sdgsdgsdgsgd', 'sdgsdgasfags', 'sfsagsdgsd@q24.com', 'computer', '$2y$10$zAPeA2ystUlzEbv.eE/CBuiH3Ma6RAh.81w6chnTyP3YJEK9S.iAu', '1231231231', '121111', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rc_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
