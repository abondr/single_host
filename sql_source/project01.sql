-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2017 at 01:22 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zero_host`
--

-- --------------------------------------------------------

--
-- Table structure for table `p1_class`
--

CREATE TABLE IF NOT EXISTS `p1_class` (
  `cls_id` int(11) NOT NULL AUTO_INCREMENT,
  `cls_name` varchar(100) DEFAULT NULL,
  `cls_value` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`cls_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `p1_class`
--

INSERT INTO `p1_class` (`cls_id`, `cls_name`, `cls_value`) VALUES
(1, 'kg', 0),
(2, 'kg one', 1),
(3, 'kg two', 2),
(4, 'one', 11),
(5, 'two', 12),
(6, 'three', 13),
(7, 'four', 14),
(8, 'five', 15),
(9, 'six', 16),
(10, 'seven', 17),
(11, 'eight', 18),
(12, 'nine', 19),
(13, 'ten', 110),
(14, 'eleven', 111),
(15, 'twelve', 112);

-- --------------------------------------------------------

--
-- Table structure for table `p1_student`
--

CREATE TABLE IF NOT EXISTS `p1_student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `cls_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`std_id`),
  UNIQUE KEY `roll` (`roll`,`cls_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `p1_student`
--

INSERT INTO `p1_student` (`std_id`, `fname`, `lname`, `roll`, `cls_id`) VALUES
(1, 'dipika', 'duttaroy', 1, 12),
(2, 'abon', 'duttaroy', 2, 14),
(3, 'fname03', 'lname03', 3, 3),
(4, 'bapan', 'Duttaroy', 4, 14),
(5, 'abon', 'Duttaroy', 5, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
