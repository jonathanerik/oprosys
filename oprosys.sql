-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 07:41 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oprosys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `approvers`
--

CREATE TABLE IF NOT EXISTS `approvers` (
  `approver_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvers`
--

INSERT INTO `approvers` (`approver_id`, `username`, `pass`, `position`) VALUES
(1, 'director1', '12345', 'ICTC Director'),
(2, 'superior1', '12345', 'Immediate Superior'),
(4, 'purchasing1', '12345', 'Purchasing Department'),
(5, 'section1', '12345', 'ICTC Section');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `formid` int(11) NOT NULL,
  `requestor_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date_requested` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_needed` date NOT NULL,
  `itemcode` int(11) NOT NULL,
  `time` time NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `recipient` varchar(50) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`formid`, `requestor_id`, `username`, `date_requested`, `date_needed`, `itemcode`, `time`, `item_name`, `quantity`, `recipient`, `remarks`) VALUES
(27, 1, 'jonathan', '2018-05-04 01:04:12', '1998-02-12', 14105, '04:20:00', 'Speaker', 9, 'Immediate Superior', 'Pending'),
(28, 1, 'jonathan', '2018-05-04 01:04:20', '0000-00-00', 0, '00:00:00', '', 0, 'Immediate Superior', 'Pending'),
(29, 1, 'jonathan', '2018-05-04 01:05:28', '1998-02-12', 17817, '05:56:00', 'Mouse', 12, 'Immediate Superior', 'Pending'),
(30, 1, 'jonathan', '2018-05-04 01:05:39', '1998-02-12', 17817, '05:56:00', 'Mouse', 12, 'Immediate Superior', 'Pending'),
(31, 1, 'jonathan', '2018-05-04 01:05:50', '1998-02-12', 17817, '05:56:00', 'Mouse', 12, 'Immediate Superior', 'Pending'),
(32, 1, 'jonathan', '2018-05-04 01:06:16', '1998-02-12', 17817, '05:56:00', 'Mouse', 12, 'Immediate Superior', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemno` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` decimal(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemno`, `item_name`, `price`) VALUES
(1, 'Mouse', '200.00'),
(2, 'Keyboard', '500.00'),
(3, 'Monitor', '4000.00'),
(4, 'Mouse Pad', '100.00'),
(5, 'Processor', '11000.00'),
(6, 'Printer', '3000.00'),
(7, 'Speaker', '2000.00'),
(8, 'Router', '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `requestors`
--

CREATE TABLE IF NOT EXISTS `requestors` (
  `requestor_id` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestors`
--

INSERT INTO `requestors` (`requestor_id`, `FirstName`, `LastName`, `birthday`, `Email`, `contact_number`, `position`, `username`, `pass`) VALUES
(1, 'Jonathan', 'Padua', '1998-12-23', 'jonathanerikpadua@gmail.com', '09202950988', 'Requestor', 'jonathan', 'kate'),
(2, 'Kate', 'Villegas', '0000-00-00', 'kateannvillegas@gmail.com', '09957235966', 'Requestor', 'kate', '1234'),
(3, '', NULL, NULL, NULL, NULL, 'ICTC Director', 'director', '12345'),
(4, 'Jessie James', 'Llanes', '1996-10-05', 'jessie_james_llanes@dlsl.edu.ph', '09212624842', 'Immediate Superior', 'superior', '12345'),
(5, NULL, NULL, NULL, NULL, NULL, 'ICTC Section', 'section', '12345\r\n'),
(6, NULL, NULL, NULL, NULL, NULL, 'Purchasing Department', 'purchasing ', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `superior`
--

CREATE TABLE IF NOT EXISTS `superior` (
  `superior_id` int(11) NOT NULL,
  `requestor_id` int(11) NOT NULL,
  `formid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `date_requested` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superior`
--

INSERT INTO `superior` (`superior_id`, `requestor_id`, `formid`, `username`, `date_requested`) VALUES
(18, 1, 27, 'jonathan', '2018-05-04'),
(19, 1, 28, 'jonathan', '2018-05-04'),
(20, 1, 29, 'jonathan', '2018-05-04'),
(21, 1, 30, 'jonathan', '2018-05-04'),
(22, 1, 31, 'jonathan', '2018-05-04'),
(23, 1, 32, 'jonathan', '2018-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `approvers`
--
ALTER TABLE `approvers`
  ADD PRIMARY KEY (`approver_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`formid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemno`);

--
-- Indexes for table `requestors`
--
ALTER TABLE `requestors`
  ADD PRIMARY KEY (`requestor_id`);

--
-- Indexes for table `superior`
--
ALTER TABLE `superior`
  ADD PRIMARY KEY (`superior_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `approvers`
--
ALTER TABLE `approvers`
  MODIFY `approver_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `formid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `requestors`
--
ALTER TABLE `requestors`
  MODIFY `requestor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `superior`
--
ALTER TABLE `superior`
  MODIFY `superior_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
