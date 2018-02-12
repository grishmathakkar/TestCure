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
-- Table structure for table `testd`
--

CREATE TABLE `testd` (
  `id` int(10) UNSIGNED NOT NULL,
  `tname` varchar(80) NOT NULL,
  `selMin` int(3) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `op11` varchar(30) NOT NULL,
  `op12` varchar(30) NOT NULL,
  `op13` varchar(30) NOT NULL,
  `op14` varchar(30) NOT NULL,
  `op1` varchar(30) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `op21` varchar(30) NOT NULL,
  `op22` varchar(30) NOT NULL,
  `op23` varchar(30) NOT NULL,
  `op24` varchar(30) NOT NULL,
  `op2` varchar(30) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `op31` varchar(30) NOT NULL,
  `op32` varchar(30) NOT NULL,
  `op33` varchar(30) NOT NULL,
  `op34` varchar(30) NOT NULL,
  `op3` varchar(30) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `op41` varchar(30) NOT NULL,
  `op42` varchar(30) NOT NULL,
  `op43` varchar(30) NOT NULL,
  `op44` varchar(30) NOT NULL,
  `op4` varchar(30) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `op51` varchar(30) NOT NULL,
  `op52` varchar(30) NOT NULL,
  `op53` varchar(30) NOT NULL,
  `op54` varchar(30) NOT NULL,
  `op5` varchar(30) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `op61` varchar(30) NOT NULL,
  `op62` varchar(30) NOT NULL,
  `op63` varchar(30) NOT NULL,
  `op64` varchar(30) NOT NULL,
  `q7` varchar(100) NOT NULL,
  `op71` varchar(30) NOT NULL,
  `op72` varchar(30) NOT NULL,
  `op73` varchar(30) NOT NULL,
  `op74` varchar(30) NOT NULL,
  `op7` varchar(30) NOT NULL,
  `q8` varchar(100) NOT NULL,
  `op81` varchar(30) NOT NULL,
  `op82` varchar(30) NOT NULL,
  `op83` varchar(30) NOT NULL,
  `op84` varchar(30) NOT NULL,
  `op8` varchar(30) NOT NULL,
  `q9` varchar(100) NOT NULL,
  `op91` varchar(30) NOT NULL,
  `op92` varchar(30) NOT NULL,
  `op93` varchar(30) NOT NULL,
  `op94` varchar(30) NOT NULL,
  `op9` varchar(30) NOT NULL,
  `q10` varchar(100) NOT NULL,
  `op101` varchar(30) NOT NULL,
  `op102` varchar(30) NOT NULL,
  `op103` varchar(30) NOT NULL,
  `op104` varchar(30) NOT NULL,
  `op10` varchar(30) NOT NULL,
  `fscore` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testd`
--
ALTER TABLE `testd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testd`
--
ALTER TABLE `testd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
