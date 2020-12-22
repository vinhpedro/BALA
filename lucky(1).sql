-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 09:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lucky`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrance`
--

CREATE TABLE IF NOT EXISTS `entrance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL DEFAULT 'na',
  `lname` varchar(30) NOT NULL DEFAULT 'na',
  `gender` varchar(30) NOT NULL DEFAULT 'na',
  `year` varchar(30) NOT NULL DEFAULT 'na',
  `sch` varchar(30) NOT NULL DEFAULT 'na',
  `cnum` varchar(30) NOT NULL DEFAULT 'na',
  `enum` varchar(30) NOT NULL DEFAULT 'na',
  `sub1` varchar(10) NOT NULL DEFAULT 'na',
  `score1` varchar(10) NOT NULL DEFAULT 'na',
  `grade1` varchar(10) NOT NULL DEFAULT 'na',
  `sub2` varchar(10) NOT NULL DEFAULT 'na',
  `score2` varchar(10) NOT NULL DEFAULT 'na',
  `grade2` varchar(10) NOT NULL DEFAULT 'na',
  `sub3` varchar(10) NOT NULL DEFAULT 'na',
  `score3` varchar(10) NOT NULL DEFAULT 'na',
  `grade3` varchar(10) NOT NULL DEFAULT 'na',
  `sub4` varchar(10) NOT NULL DEFAULT 'na',
  `score4` varchar(10) NOT NULL DEFAULT '',
  `grade4` varchar(10) NOT NULL DEFAULT 'na',
  `score5` varchar(10) NOT NULL DEFAULT 'na',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `entrance`
--

INSERT INTO `entrance` (`id`, `fname`, `lname`, `gender`, `year`, `sch`, `cnum`, `enum`, `sub1`, `score1`, `grade1`, `sub2`, `score2`, `grade2`, `sub3`, `score3`, `grade3`, `sub4`, `score4`, `grade4`, `score5`) VALUES
(1, 'lucky', 'yaki', 'male', '2012', 'dss', '1907', '432', 'english', '70', 'A1', 'mathematic', '60', 'A3', 'general st', '90', 'A1', 'primary sc', '75', 'B2', '270'),
(2, 'salmanu', 'gaddafi', 'male', '2010', 'dss', '1906', '434', 'english', '70', 'A1', 'mathematic', '50', 'B2', 'general st', '80', 'A1', 'primary sc', '90', 'A1', '290'),
(3, 'nura', 'muhammad', 'male', '2015', 'DSS', '6068', '107dc', 'english', '80', 'A1', 'mathematic', '70', 'A1', 'general st', '65', 'B2', 'primary sc', '90', 'A1', '305'),
(4, 'lucky', 'yaki', 'male', '2015', 'nuhu bamalli', '1232', '1234', 'english', '57', 'c', 'mathematic', '67', 'B2', 'general st', '78', 'A1', 'primary sc', '78', 'A1', ''),
(5, '', '', '', '', '', '', '', 'english', '1', '', 'mathematic', '2', '', 'general st', '3', '', 'primary sc', '5', '', ''),
(6, '', '', '', '', '', '', '', 'english', '1', '', 'mathematic', '1', '', 'general st', '1', '', 'primary sc', '1', '', ''),
(7, 'lucky', 'yaki', 'male', '2015', 'nuhu bamalli', '1232', '1234', 'english', '75', 'A1', 'mathematic', '60', 'B2', 'general st', '70', 'B2', 'primary sc', '78', 'A1', '283');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT 'na',
  `password` varchar(30) NOT NULL DEFAULT 'na',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `username`, `password`) VALUES
(1, 'salman', '10521'),
(2, 'lucky', '1991');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` int(11) NOT NULL,
  `lname` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sch` int(11) NOT NULL,
  `cnum` int(11) NOT NULL,
  `enum` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `score1` int(11) NOT NULL,
  `grade1` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
