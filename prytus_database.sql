-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 02:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prytus_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sno` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sno`, `full_name`, `email`, `phone_no`, `message`, `username`) VALUES
(1, 'preeti', 'kushwahapreeti999@gmail.com', 8394028035, 'hello', ''),
(2, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, 'sfedfe', ''),
(3, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, 'nice', ''),
(4, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, 'nice', ''),
(5, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, 'nice', ''),
(6, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, 'nice', ''),
(7, 'ankit', 'kushwahapreeti999@gmail.com', 8394028035, 'nice', '');

-- --------------------------------------------------------

--
-- Table structure for table `request_quote`
--

CREATE TABLE `request_quote` (
  `s_no` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone_no` bigint(50) NOT NULL,
  `services` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_quote`
--

INSERT INTO `request_quote` (`s_no`, `fname`, `email`, `phone_no`, `services`, `description`, `date`, `username`, `status`) VALUES
(1, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, '1', 'jj', '0000-00-00', '', 0),
(2, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(3, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(4, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(5, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(6, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(7, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(8, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(9, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(10, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(11, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(12, '', '', 0, 'Open this select menu', '', '2020-08-20', '', 0),
(13, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, '1', 'sds', '2020-08-20', '', 0),
(14, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, '1', 'sds', '2020-08-20', '', 0),
(15, 'Kiran Kumari', 'kushwahapreeti999@gmail.com', 8394028035, '3', 'good', '2020-08-20', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `request_quote`
--
ALTER TABLE `request_quote`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_quote`
--
ALTER TABLE `request_quote`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
