-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 10:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `ac_id` int(11) NOT NULL,
  `ac_name` varchar(10) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(7, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `ticketId` int(11) DEFAULT NULL,
  `clientId` varchar(20) DEFAULT NULL,
  `booked_time` varchar(100) DEFAULT NULL,
  `bookStatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `ticketId`, `clientId`, `booked_time`, `bookStatus`) VALUES
(1, 1, '1', 'noon', 'pending'),
(2, 1, '1', 'noon', 'pending'),
(3, 3, '2', 'night', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(11) NOT NULL,
  `clientName` varchar(100) NOT NULL,
  `clientAddress` varchar(100) NOT NULL,
  `clientPhone` varchar(100) NOT NULL,
  `clientStatus` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientID`, `clientName`, `clientAddress`, `clientPhone`, `clientStatus`, `username`, `password`) VALUES
(2, 'Sabah Ali Mzee', 'Magomeni', '077300230', 'Act', 'sabby@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Sabah Ali Mzee', 'Magomeni', '077300230', 'Act', 'sabby@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'weewe', 'rere', '4444', 'Active', 'admin4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Nasssor Abadallah Mbarak', 'Magogoni', '0713247599', 'Active', 'nasssssssr@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Suleiman Hamiar', 'Chukwani', '6898899898', 'Active', 'hamiar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(20) DEFAULT NULL,
  `address` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticketId` int(11) NOT NULL,
  `ticketName` varchar(100) NOT NULL,
  `ticketDate` date NOT NULL,
  `ticketStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticketId`, `ticketName`, `ticketDate`, `ticketStatus`) VALUES
(2, 'Kilimanjaro 6', '2020-08-14', 'Active'),
(3, 'Kilimanjaro 1', '2020-08-16', 'Active'),
(4, 'Sea Gull', '2020-08-17', 'deactive'),
(5, 'Kilimanjaro 5', '2020-08-26', 'Active'),
(6, 'Kilimanjaro 2', '2020-08-15', 'Active'),
(7, 'Kilimanjaro 3', '2020-08-17', 'Active'),
(9, 'Kilimanjaro 4', '2020-08-10', 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`ac_id`),
  ADD KEY `p` (`c_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticketId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
