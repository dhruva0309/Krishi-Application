-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 07:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(100) NOT NULL,
  `spid` varchar(100) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `spid`, `stitle`, `message`, `fname`) VALUES
(1, '1', 'Fertilizer Shop', 'i want service', 'raj'),
(2, '1', '   Zig Zag fertilizer', 'it\'s Very Urgent Sir\r\n', 'raj');

-- --------------------------------------------------------

--
-- Table structure for table `cinfo`
--

CREATE TABLE `cinfo` (
  `cid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `hmonth` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinfo`
--

INSERT INTO `cinfo` (`cid`, `fname`, `cat`, `region`, `hmonth`, `quantity`) VALUES
(1, 'raj', 'Ragi', 'Mysore', 'April', '2 ton ');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `cid` int(100) NOT NULL,
  `bid` varchar(100) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `smess` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`cid`, `bid`, `stitle`, `smess`, `status`, `sname`) VALUES
(1, '1', 'Fertilizer Shop', 'ok sir', 'Accept', 'ramesh');

-- --------------------------------------------------------

--
-- Table structure for table `cprice`
--

CREATE TABLE `cprice` (
  `pid` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cprice`
--

INSERT INTO `cprice` (`pid`, `region`, `cat`, `price`) VALUES
(1, 'Mysore', 'Ragi', '60 rs/kg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `spid` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `mess` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `fname`, `spid`, `rating`, `mess`) VALUES
(1, 'raj', '1', '63', '        excellent service                                                                           ');

-- --------------------------------------------------------

--
-- Table structure for table `fusers`
--

CREATE TABLE `fusers` (
  `fid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fusers`
--

INSERT INTO `fusers` (`fid`, `username`, `fullname`, `email`, `phone`, `address`, `password`, `trn_date`) VALUES
(1, 'raj', 'rajkumar', 'rajkumar@gmail.com', '8473987348', 'Bangalore, Karnataka, India', '698d51a19d8a121ce581499d7b701668', '2022-12-11 17:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `sinfo`
--

CREATE TABLE `sinfo` (
  `spid` int(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinfo`
--

INSERT INTO `sinfo` (`spid`, `sname`, `stitle`, `cat`, `region`, `image`, `address`) VALUES
(1, 'ramesh', '   Zig Zag fertilizer', 'Fertilizer Shop', 'Hassan', 'img.jpg', 'Belur, Hassan, Karnataka, India');

-- --------------------------------------------------------

--
-- Table structure for table `susers`
--

CREATE TABLE `susers` (
  `sid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `susers`
--

INSERT INTO `susers` (`sid`, `username`, `fullname`, `email`, `phone`, `address`, `password`, `trn_date`) VALUES
(1, 'ramesh', 'ramesh s', 'ramesh@gmail.com', '8979878979', 'Mysore, Karnataka, India', '698d51a19d8a121ce581499d7b701668', '2022-12-11 17:53:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cinfo`
--
ALTER TABLE `cinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cprice`
--
ALTER TABLE `cprice`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `fusers`
--
ALTER TABLE `fusers`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `sinfo`
--
ALTER TABLE `sinfo`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `susers`
--
ALTER TABLE `susers`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cinfo`
--
ALTER TABLE `cinfo`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cprice`
--
ALTER TABLE `cprice`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fusers`
--
ALTER TABLE `fusers`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sinfo`
--
ALTER TABLE `sinfo`
  MODIFY `spid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `susers`
--
ALTER TABLE `susers`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
