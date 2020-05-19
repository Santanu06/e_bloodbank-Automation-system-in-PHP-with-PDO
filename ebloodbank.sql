-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 08:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`adminid`, `adminname`, `emailid`, `password`) VALUES
(1, 'santanu', 'santanu06.1994@gmail.com', 'santanu06');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbankdetails`
--

CREATE TABLE `bloodbankdetails` (
  `bloodbankid` int(11) NOT NULL,
  `bloodbankname` varchar(50) NOT NULL,
  `stateid` int(11) NOT NULL,
  `districtid` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `activestatus` varchar(50) NOT NULL DEFAULT 'Inactive',
  `registrationdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbankdetails`
--

INSERT INTO `bloodbankdetails` (`bloodbankid`, `bloodbankname`, `stateid`, `districtid`, `address`, `contactno`, `emailid`, `password`, `activestatus`, `registrationdate`) VALUES
(4, 'Samal Care', 22, 7, 'Banarpal,Angul', '9869989696', 'samalcare@gmail.com', 'samalcare123', 'Active', '2020-01-03'),
(7, 'Pradhan Care', 22, 7, 'gandhimarg', '9869989696', 'pradhan@gmail.com', 'pradhan123', 'Active', '2020-01-03'),
(8, 'Delhi govt. Hospital', 27, 12, 'New Delhi', '9869655692', 'delhigovt@gmail.com', 'delhi123', 'Active', '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroupdetails`
--

CREATE TABLE `bloodgroupdetails` (
  `bloodgroupid` int(11) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodgroupdetails`
--

INSERT INTO `bloodgroupdetails` (`bloodgroupid`, `bloodgroup`) VALUES
(1, 'O+'),
(2, 'O-'),
(3, 'A+'),
(4, 'A-'),
(5, 'B+'),
(6, 'B-'),
(7, 'AB-'),
(8, 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstockdeatails`
--

CREATE TABLE `bloodstockdeatails` (
  `bloodstockid` int(11) NOT NULL,
  `bloodbankid` int(11) NOT NULL DEFAULT 0,
  `bloodgroupid` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodstockdeatails`
--

INSERT INTO `bloodstockdeatails` (`bloodstockid`, `bloodbankid`, `bloodgroupid`, `stock`) VALUES
(1, 7, 1, 10),
(2, 7, 7, 5),
(3, 4, 1, 5),
(5, 7, 4, 12),
(6, 8, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `districtdetails`
--

CREATE TABLE `districtdetails` (
  `districtid` int(11) NOT NULL,
  `districtname` varchar(50) NOT NULL,
  `districtstatus` varchar(50) NOT NULL DEFAULT 'Inactive',
  `stateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districtdetails`
--

INSERT INTO `districtdetails` (`districtid`, `districtname`, `districtstatus`, `stateid`) VALUES
(7, 'Angul', 'Active', 22),
(11, 'Dhenkanal', 'Active', 22),
(12, 'New Delhi', 'Active', 27),
(13, 'Howrah', 'Active', 26),
(20, 'Baleswar', 'Active', 22);

-- --------------------------------------------------------

--
-- Table structure for table `donoredetails`
--

CREATE TABLE `donoredetails` (
  `donorid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `districtid` int(11) NOT NULL,
  `donorname` varchar(50) NOT NULL,
  `donorphoto` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `activestatus` varchar(50) NOT NULL DEFAULT 'Inactive',
  `registration_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donoredetails`
--

INSERT INTO `donoredetails` (`donorid`, `stateid`, `districtid`, `donorname`, `donorphoto`, `address`, `gender`, `age`, `contactno`, `emailid`, `password`, `bloodgroup`, `activestatus`, `registration_date`) VALUES
(1, 27, 12, 'Tapas Kumar Mohanty', 'IMG_9935.JPG.jpg', 'Nalco', 'Male', 26, '1236547893', 'tapas@gmail.com', 'tapas123', 'B+', 'Active', '2020-01-10'),
(2, 22, 7, 'Smith Sangram Sahu', 'IMG_9935.JPG.jpg', 'Nalco', 'Male', 30, '9865698569', 'smith@gmail.com', 'smith123', 'A+', 'Active', '2020-01-10'),
(3, 22, 7, 'Santanu Kumar sahu', 'IMG_9937.JPG', 'Nalco Nagar', 'Male', 25, '8763013999', 'santanu06.1994@gmail.com', 'santanu06', 'O+', 'Active', ''),
(4, 27, 12, 'abcd', 'computer-data.jpg', 'abcd', 'Male', 26, '9861498614', 'abcd@gmail.com', 'abcd123', 'O+', 'Active', ''),
(5, 22, 20, 'Jyoti Ranjan Behera', 'images3.jpg', 'Sora,Baleswar', 'Male', 25, '9876321254', 'jyoti@gmail.com', 'jyoti123', 'O+', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `statedetails`
--

CREATE TABLE `statedetails` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statedetails`
--

INSERT INTO `statedetails` (`stateid`, `statename`, `status`) VALUES
(22, 'Odisha', 'Active'),
(26, 'West Bengal', 'Active'),
(27, 'Delhi', 'Active'),
(28, 'Maharstra', 'Active'),
(32, 'Gujrat', 'Active'),
(42, 'Rajstahn', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `bloodbankdetails`
--
ALTER TABLE `bloodbankdetails`
  ADD PRIMARY KEY (`bloodbankid`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD KEY `stateid` (`stateid`),
  ADD KEY `districtid` (`districtid`);

--
-- Indexes for table `bloodgroupdetails`
--
ALTER TABLE `bloodgroupdetails`
  ADD PRIMARY KEY (`bloodgroupid`);

--
-- Indexes for table `bloodstockdeatails`
--
ALTER TABLE `bloodstockdeatails`
  ADD PRIMARY KEY (`bloodstockid`),
  ADD KEY `bloodbankid` (`bloodbankid`),
  ADD KEY `bloodgroupid` (`bloodgroupid`);

--
-- Indexes for table `districtdetails`
--
ALTER TABLE `districtdetails`
  ADD PRIMARY KEY (`districtid`),
  ADD UNIQUE KEY `districtname` (`districtname`),
  ADD KEY `stateid` (`stateid`);

--
-- Indexes for table `donoredetails`
--
ALTER TABLE `donoredetails`
  ADD PRIMARY KEY (`donorid`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD KEY `stateid` (`stateid`),
  ADD KEY `districtid` (`districtid`);

--
-- Indexes for table `statedetails`
--
ALTER TABLE `statedetails`
  ADD PRIMARY KEY (`stateid`),
  ADD UNIQUE KEY `statename` (`statename`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodbankdetails`
--
ALTER TABLE `bloodbankdetails`
  MODIFY `bloodbankid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bloodgroupdetails`
--
ALTER TABLE `bloodgroupdetails`
  MODIFY `bloodgroupid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bloodstockdeatails`
--
ALTER TABLE `bloodstockdeatails`
  MODIFY `bloodstockid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `districtdetails`
--
ALTER TABLE `districtdetails`
  MODIFY `districtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donoredetails`
--
ALTER TABLE `donoredetails`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statedetails`
--
ALTER TABLE `statedetails`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodbankdetails`
--
ALTER TABLE `bloodbankdetails`
  ADD CONSTRAINT `bloodbankdetails_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `statedetails` (`stateid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bloodbankdetails_ibfk_2` FOREIGN KEY (`districtid`) REFERENCES `districtdetails` (`districtid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bloodstockdeatails`
--
ALTER TABLE `bloodstockdeatails`
  ADD CONSTRAINT `bloodstockdeatails_ibfk_1` FOREIGN KEY (`bloodgroupid`) REFERENCES `bloodgroupdetails` (`bloodgroupid`),
  ADD CONSTRAINT `bloodstockdeatails_ibfk_2` FOREIGN KEY (`bloodbankid`) REFERENCES `bloodbankdetails` (`bloodbankid`);

--
-- Constraints for table `districtdetails`
--
ALTER TABLE `districtdetails`
  ADD CONSTRAINT `districtdetails_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `statedetails` (`stateid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donoredetails`
--
ALTER TABLE `donoredetails`
  ADD CONSTRAINT `donoredetails_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `statedetails` (`stateid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donoredetails_ibfk_2` FOREIGN KEY (`districtid`) REFERENCES `districtdetails` (`districtid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
