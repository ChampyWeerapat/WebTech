-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 01:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade` float NOT NULL,
  `username` varchar(10) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `qrcode_id` int(15) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `exp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`qrcode_id`, `sec_id`, `sub_id`, `exp`) VALUES
(111, 11, 0, ''),
(123, 1244, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `credit` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `takesclass`
--

CREATE TABLE `takesclass` (
  `date` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `qrcode_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `takescourse`
--

CREATE TABLE `takescourse` (
  `username` varchar(10) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takescourse`
--

INSERT INTO `takescourse` (`username`, `sec_id`, `sub_id`, `year`, `semester`) VALUES
('John Mathe', 1, 0, 0, 'First'),
('John Mathe', 1, 123, 442, 'First'),
('Nick Jason', 1, 0, 0, 'First'),
('Nick Jason', 1, 123, 442, 'First'),
('Shane Thom', 1, 0, 0, 'First'),
('Shane Thom', 1, 123, 442, 'First');

-- --------------------------------------------------------

--
-- Table structure for table `teachcourse`
--

CREATE TABLE `teachcourse` (
  `role` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `path_pic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fname`, `lname`, `role`, `path_pic`, `email`) VALUES
('11144', '5557', '', '', 'student', '', ''),
('1214', '6584', '', '', 'student', '', ''),
('123', '123', 'aa', 'bb', 'teacher', '', 'test'),
('1234242', '5232', '', '', 'student', '', ''),
('123455', '', '', '', '', '', ''),
('2134', '', '', '', 'student', '', ''),
('241', '$random', '', '', 'student', '', ''),
('5555', '', '', '', '', '', ''),
('5710404322', '1234', 'chaiwat', 'prapanwong', 'admin', '', 'final.season7@windowslive.com'),
('888', '4911', '', '', 'student', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`username`,`sec_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`username`,`sub_id`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`qrcode_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`,`sub_id`,`year`,`semester`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `takesclass`
--
ALTER TABLE `takesclass`
  ADD PRIMARY KEY (`username`,`qrcode_id`);

--
-- Indexes for table `takescourse`
--
ALTER TABLE `takescourse`
  ADD PRIMARY KEY (`username`,`sec_id`,`sub_id`,`year`,`semester`);

--
-- Indexes for table `teachcourse`
--
ALTER TABLE `teachcourse`
  ADD PRIMARY KEY (`username`,`sec_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
