-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2014 at 06:22 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--
CREATE DATABASE IF NOT EXISTS `survey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `survey`;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`) VALUES
('amar.abn', 'amar@123');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `qualification` text NOT NULL,
  `choice` text NOT NULL,
  `color` text NOT NULL,
  `pay` int(11) NOT NULL,
  `pref` text NOT NULL,
  `combo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`age`, `gender`, `qualification`, `choice`, `color`, `pay`, `pref`, `combo`) VALUES
(30, 'female', 'graduate', 'salwar', 'pink', 5000, 'shop', 'shoe'),
(10, 'female', 'graduate', 'potion', 'red', 0, 'shop', 'jewellary'),
(20, 'female', 'undergraduate', 'jeans', 'blue', 2500, 'online', 'crutch'),
(50, 'female', 'graduate', 'salwar', 'blue', 5000, 'online', 'shoe'),
(40, 'female', 'postgraduate', 'skirts', 'pink', 2500, 'both', 'bondi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
