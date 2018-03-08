-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 02:36 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `sname` varchar(50) NOT NULL,
  `saddress` varchar(50) NOT NULL,
  `stype` varchar(50) NOT NULL,
  `snumber` int(50) NOT NULL,
  `sproblem` varchar(50) NOT NULL,
  `samount` int(50) NOT NULL,
`id` int(11) NOT NULL,
  `sbranch` varchar(50) NOT NULL,
  `sacc` int(50) NOT NULL,
  `sifsc` int(50) NOT NULL,
  `notifications` int(11) NOT NULL,
  `phone` int(100) NOT NULL,
  `phone2` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`sname`, `saddress`, `stype`, `snumber`, `sproblem`, `samount`, `id`, `sbranch`, `sacc`, `sifsc`, `notifications`, `phone`, `phone2`) VALUES
('asd', 'asd', 'Farmer', 12345679, 'asd', 20000, 15, 'asd', 2147483647, 0, 0, 2147483647, '8087759227'),
('xyz', '401,4th floor,dk apartment,khemani chowk,ulhasnaga', 'Patient', 12345679, 'Please donate for my cancer treatment', 20000, 16, 'Ulhasnagar', 2147483647, 12345, 0, 2147483647, '8087759227'),
('shubham', '401,4th floor,dk apartment,khemani chowk,ulhasnaga', 'Patient', 12345679, 'i want doantion for my cancer treatment', 20000, 17, 'ulhasnagar', 2147483647, 2147483647, 0, 2147483647, '8087759227'),
('Trena', '401,4th floor,dk apartment,khemani chowk,ulhasnaga', 'Patient', 12345679, 'asd', 20000, 18, 'ulhasnagar', 2147483647, 123323, 0, 2147483647, '9773867877');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE IF NOT EXISTS `useraccounts` (
`user_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userAccountname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`user_id`, `name`, `email`, `password`, `userAccountname`) VALUES
(1, 'Ashish', 'ashishchandwani21@gmail.com', 'wchamp2011', 'ashish'),
(2, 'Ashish', 'ashishchandwani21@gmail.com', 'wchamp2011', 'ashish21'),
(3, 'Ashish', 'ashishchandwani21@gmail.com', 'wchamp2011', 'ashish91'),
(4, 'Ashish', 'ashishchandwani21@gmail.com', 'wchamp2011', 'wchamp'),
(5, 'ashish', '2015ashish.chandwani@ves.ac.in', 'wchamp2011', 'wchampp'),
(6, 'Shubham Gaikwad', 'shubhamgaikwad500@gmail.com', 'Shubh9768', 'shubham9768'),
(7, 'Tushar Chotlani', 'ashishchandwani21@gmail.com', 'wchamp2011', 'tushar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
