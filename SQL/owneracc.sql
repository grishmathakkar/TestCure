-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 11:04 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testcure`
--

-- --------------------------------------------------------

--
-- Table structure for table `owneracc`
--

CREATE TABLE `owneracc` (
  `oid` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owneracc`
--

INSERT INTO `owneracc` (`oid`, `firstname`, `email`, `pass`) VALUES
(4, 'pt1@gmail.com', 'pt1@gmail.com', '123'),
(5, 'pt2@gmail.com', 'pt2@gmail.com', '2222'),
(6, 'grishma', 'grishma', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owneracc`
--
ALTER TABLE `owneracc`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owneracc`
--
ALTER TABLE `owneracc`
  MODIFY `oid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
