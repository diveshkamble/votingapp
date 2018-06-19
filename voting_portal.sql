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
-- Database: `voting_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(256) NOT NULL,
  `a_email` varchar(256) NOT NULL,
  `a_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_pass`) VALUES
(1, 'Divesh', 'diveshkamble@gmail.com', 'awqfjc4nnlfe234nrf2ksk12nfslknfvslnf'),
(2, 'Taufeeq Samnani', 'tafeeq247@gmail.com', 'sarklnr21j4nksaf23j5rn2k1nrkwnt234kn24'),
(3, 'Prasanna Bakshi', 'pkbakshi7@gmail.com', 'skgnk2j3rnkjwgn2k3nr31kj2tnqknt1j2bt1t'),
(4, 'Sagar Borhade', 'sagarborhade26@gmail.com', 'kjnt2kj3nrwkjengtj2tnj23rnwo23hrtnfwje1');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `c_uin` int(6) NOT NULL,
  `c_password` varchar(512) NOT NULL,
  `c_email` varchar(512) NOT NULL,
  `c_phno` int(13) NOT NULL,
  `c_branch` varchar(256) NOT NULL,
  `c_aboutme` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`c_id`, `c_name`, `c_uin`, `c_password`, `c_email`, `c_phno`, `c_branch`, `c_aboutme`) VALUES
(1, 'Bill Gates', 123111, 'asfjnasgnskdghnakwlent32kjr432k423k234', 'billgates@microsoft.com', 78554558, 'Computer Engineering', 'My name is bill gates'),
(2, 'Elon Musk', 123112, 'kgajngksdhlk3wlkrj2kj412lkjrjk1fnklw21', 'elonmusk@spacex.com', 85457854, 'Mechanical Engineering', 'Hello i am Elon Musk'),
(3, 'Steve Jobs', 123113, 'sajkgnkjd2ds3khgndsklsgxkljsad3tr55kqwnfk', 'steve@apple.com', 788545554, 'Extc Engineering', 'Hello I am Steve Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_email` varchar(256) NOT NULL,
  `f_feedback` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_email`, `f_feedback`) VALUES
(1, 'example1@feedback.com', 'test 123'),
(2, 'example2@feedback.com', 'feedback 123123'),
(3, 'example3@feedback.com', 'feedback 54321'),
(4, 'example4@feedback.com', 'feedback test 123');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rc_id` int(4) NOT NULL,
  `rc_name` varchar(256) NOT NULL,
  `rc_votePercentage` int(5) NOT NULL,
  `rc_branch` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rc_id`, `rc_name`, `rc_votePercentage`, `rc_branch`) VALUES
(1, 'Elon Musk', 56, 'Mechanical Engineering'),
(2, 'Steve Jobs', 24, 'Extc Engineering'),
(3, 'Bill Gates', 20, 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(256) NOT NULL,
  `s_uin` int(6) NOT NULL,
  `s_email` varchar(512) NOT NULL,
  `s_password` varchar(512) NOT NULL,
  `s_phno` int(13) NOT NULL,
  `s_branch` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_uin`, `s_email`, `s_password`, `s_phno`, `s_branch`) VALUES
(1, 'John', 111123, 'john@gmail.com', 'ashgk2rjfwnjskdtn23ojhtjwhegh32jhtkj3ewh', 75458546, 'Computer Engineering'),
(2, 'Rick', 111124, 'rick@gmail.com', 'ashgk2rjfwnjskdtn23o23tjwhegh32jhtkj3ewh', 78948546, 'Mechanical  Engineering'),
(3, 'Morty', 111164, 'morty@gmail.com', 'ashg21rjfwnjskdtn23ojhtjwhegh32jhtkj3ewh', 75451246, 'Computer  Engineering'),
(4, 'Arya', 111125, 'aryastark@gmail.com', 'w1hgk2rjfwnjskdtn23ojhtjwhegh32jhtkj3ewh', 75458574, 'Civil  Engineering'),
(5, 'Bran', 111178, 'bran@gmail.com', 'ashgk2ppfwnjskdtn23ojhtjwhegh32jhtkj3ewh', 25458546, 'Biotech  Engineering'),
(6, 'Jamie', 111143, 'jamie@gmail.com', '123hgk2rjfwnjskdtn23ojhtjwhegh32jhtkj3ewh', 85458546, 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(512) NOT NULL,
  `v_uin` int(6) NOT NULL,
  `v_password` varchar(512) NOT NULL,
  `v_email` varchar(512) NOT NULL,
  `v_phno` varchar(13) NOT NULL,
  `v_branch` varchar(256) NOT NULL,
  `v_feedback` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`v_id`, `v_name`, `v_uin`, `v_password`, `v_email`, `v_phno`, `v_branch`, `v_feedback`) VALUES
(1, 'Rick', 111124, 'ashgk2rjfwnjskdtn23o23tjwhegh32jhtkj3ewh\r\n', 'rick@gmail.com\r\n', '78948546', 'Mechanical  Engineering\r\n', ''),
(2, 'Jamie', 111143, '123hgk2rjfwnjskdtn23ojhtjwhegh32jhtkj3ewh\r\n', 'jamie@gmail.com\r\n', '85458546', 'Computer Engineering\r\n', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD UNIQUE KEY `c_uin` (`c_uin`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD UNIQUE KEY `v_uin` (`v_uin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
