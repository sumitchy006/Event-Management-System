-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 01:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumit`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `mobile_no`, `message`) VALUES
('Sumit', 'Chy', 'sumitchy006@gmail.com', 1717543216, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `date_time` date NOT NULL,
  `no_of_person` int(20) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `decoration` varchar(5) NOT NULL,
  `food` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `email`, `mobile_no`, `date_time`, `no_of_person`, `event_type`, `decoration`, `food`) VALUES
('Muyabbaj', 'Hussain', 'muyabbaz@gmail.com', 1716892498, '2020-10-01', 52, 'Office party', 'yes', 'lunch');

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE `signup_table` (
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`username`, `email`, `password`) VALUES
('muyabbaj', 'mofajjal', 12345),
('muyabbaj', 'mofajjal@dgffd.com', 12345),
('mofajjal', 'muyabbaz22@gmail.com', 1234),
('', 'muyabbaz@gmail.com', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `signup_table`
--
ALTER TABLE `signup_table`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
