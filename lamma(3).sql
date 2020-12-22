-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 09:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lamma`
--

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(30) NOT NULL DEFAULT 'NA',
  `fname` varchar(30) NOT NULL DEFAULT 'na',
  `lname` varchar(30) NOT NULL DEFAULT 'na',
  `gender` varchar(30) NOT NULL DEFAULT 'NA',
  `adr` varchar(30) NOT NULL DEFAULT 'na',
  `state` varchar(30) NOT NULL DEFAULT 'NA',
  `ntn` varchar(30) NOT NULL DEFAULT 'na',
  `npri` varchar(30) NOT NULL DEFAULT 'na',
  `nscd` varchar(30) NOT NULL DEFAULT 'NA',
  `nint` varchar(30) NOT NULL DEFAULT 'NA',
  `pcert` varchar(30) NOT NULL DEFAULT 'NA',
  `scert` varchar(30) NOT NULL DEFAULT 'na',
  `tcert` varchar(30) NOT NULL DEFAULT 'na',
  `demp` varchar(30) NOT NULL DEFAULT 'NA',
  `memp` varchar(30) NOT NULL DEFAULT 'na',
  `yemp` varchar(30) NOT NULL DEFAULT 'na',
  `rank` varchar(30) NOT NULL DEFAULT 'na',
  `level` varchar(30) NOT NULL DEFAULT 'na',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `eid`, `fname`, `lname`, `gender`, `adr`, `state`, `ntn`, `npri`, `nscd`, `nint`, `pcert`, `scert`, `tcert`, `demp`, `memp`, `yemp`, `rank`, `level`) VALUES
(1, 'XXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX', 'XXXX'),
(2, '001a', 'musa', 'aliyu', 'male', 'magume', 'kaduna', 'nigerian', 'judy', 'basic', 'ABU', 'primary cert', 'secondary cert', 'BSC', '02', 'august', '2015', 'ASP', '8'),
(3, '22', 'lawal', 'mary', 'male', 'no 139 t/wada zaria', 'kaduna', 'NIGERIAN', 'audin ', 'high talent', 'hunu bamalli', 'lamma dowa', 'lamma dowa', 'lamma dowa', '19 ', 'JANUARY', '2015', 'copra', '2');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT 'na',
  `password` varchar(20) NOT NULL DEFAULT 'na',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`) VALUES
(1, 'lamma', 'dowa'),
(2, 'lamma', 'dowa'),
(3, 'lamma', 'dowa'),
(4, 'lamma', 'dowa'),
(5, 'emmanuel', 'anthony'),
(6, 'emmanuel', 'anthony'),
(7, 'emmanuel', 'anthony'),
(8, 'emmanuel', 'anthony'),
(9, 'emmanuel', 'anthony'),
(10, 'emmanuel', 'anthony');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
