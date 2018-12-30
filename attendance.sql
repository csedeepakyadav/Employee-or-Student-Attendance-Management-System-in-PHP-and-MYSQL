-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 30, 2018 at 10:55 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'deepak', 'deepak');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_taken`
--

DROP TABLE IF EXISTS `attendance_taken`;
CREATE TABLE IF NOT EXISTS `attendance_taken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_taken`
--

INSERT INTO `attendance_taken` (`id`, `eid`, `name`, `date`, `attendance`) VALUES
(22, '8', 'devesh', '30-12-2018', 'Present'),
(3, 'Array', 'Array', 'Array', ''),
(4, 'Array', 'Array', 'Array', ''),
(21, '7', 'devesh', '30-12-2018', 'Abscent'),
(20, '6', 'Imteya', '30-12-2018', 'Present'),
(19, '5', 'punit', '30-12-2018', 'Abscent'),
(18, '4', 'deepak khanna', '30-12-2018', 'Present'),
(17, '3', 'devesh', '30-12-2018', 'Abscent'),
(16, '2', 'Deepak yadav', '30-12-2018', 'Present'),
(15, '1', 'Desh Deepak', '30-12-2018', 'Abscent'),
(23, '9', 'punit', '30-12-2018', 'Abscent'),
(24, '10', 'punit', '30-12-2018', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `DOB`, `contact_no`) VALUES
(1, 'deepak', 'deepak@gmail.com', '29-06-1997', '7053997738'),
(2, 'Ahsan', 'A@g.com', '29-06-1997', '7053997739'),
(3, 'Ahsan', 'A@g.com', '29-06-1997', '7053997739'),
(4, 'deepak', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

DROP TABLE IF EXISTS `employee_details`;
CREATE TABLE IF NOT EXISTS `employee_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `contact_no` varchar(25) NOT NULL,
  `department` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `name`, `gender`, `email`, `DOB`, `contact_no`, `department`) VALUES
(1, 'Desh Deepak', 'male', 'Deepak.r625@gmail.com', '29-06-1997', '45545', 'CSE'),
(2, 'Deepak yadav', 'male', 'Deepak.r625@gmail.com', '29-06-1998', '45545', 'CSE'),
(4, 'deepak khanna', 'male', 'deepak@gmail.com', '29-09-1996', '9918374678', 'IT'),
(6, 'Imteya', 'male', 'imteya@gmail.com', '29-09-1996', '9918374678', 'CSE'),
(11, 'Prashant', 'male', 'deepak@gmail.com', '29-09-1990', '9918374625', 'CSE'),
(12, 'Prashant', 'male', 'deepak@gmail.com', '29-09-1990', '9918374625', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `gender`) VALUES
(1, 'deepak khanna', 'male'),
(2, 'deepak khanna', 'male'),
(3, 'deepak khanna', 'male'),
(4, 'Array', 'Array'),
(5, 'Array', 'Array'),
(6, '', 'Array'),
(7, 'male', 'Array'),
(8, 'm', 'male'),
(9, 'p', 'm'),
(10, 'p', 'm'),
(11, 'dee', 'm'),
(12, 'd', 'd'),
(13, 'p', 'p'),
(14, 'dee', 'male'),
(15, 'pak', 'male'),
(16, 'deepak', 'Male'),
(17, 'pak', 'Male'),
(18, 'dee', 'Male'),
(19, 'dee', 'Female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
