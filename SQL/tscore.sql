-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 11:05 AM
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
-- Table structure for table `tscore`
--

CREATE TABLE `tscore` (
  `studid` int(10) NOT NULL,
  `testid` int(10) NOT NULL,
  `so1` varchar(50) NOT NULL,
  `so2` varchar(50) NOT NULL,
  `so3` varchar(50) NOT NULL,
  `so4` varchar(50) NOT NULL,
  `so5` varchar(50) NOT NULL,
  `so6` varchar(50) NOT NULL,
  `so7` varchar(50) NOT NULL,
  `so8` varchar(50) NOT NULL,
  `so9` varchar(50) NOT NULL,
  `s10` varchar(50) NOT NULL,
  `finalscore` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
