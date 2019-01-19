-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2017 at 07:07 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student report`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `Rollno` int(3) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `father_name` varchar(25) DEFAULT NULL,
  `Admission_Number` int(4) DEFAULT NULL,
  `English` int(3) DEFAULT NULL,
  `Physics` int(3) DEFAULT NULL,
  `Chemistry` int(3) DEFAULT NULL,
  `Maths` int(3) DEFAULT NULL,
  `IP` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Rollno`, `Name`, `father_name`, `Admission_Number`, `English`, `Physics`, `Chemistry`, `Maths`, `IP`) VALUES
(55, 'binki', 'Mr. Bijay sankar', 36, 99, 99, 99, 99, 99),
(1, 'Akansha Agrawal', 'Ramkant Agrawal', 1145, 90, 92, 93, 90, 89),
(2, 'Jyoti Verma', 'Akhil Verma', 1245, 85, 82, 93, 90, 89),
(3, 'Akansha Sharma', 'Ramkant Sharma', 1345, 90, 92, 95, 90, 92),
(4, 'Radhika Mittal', 'Rupesh Mittal', 1445, 80, 92, 93, 80, 89),
(5, 'Anamika Deshmukh ', 'Anil Deshmukh', 1545, 90, 92, 93, 90, 89),
(6, 'Shreya Agrawal', 'Prashant Agrawal', 1645, 70, 92, 85, 90, 89),
(7, 'Swaril Singhal', 'Ramakant Singhal', 1745, 90, 92, 93, 90, 89),
(8, 'Rahul Jain', 'Hemant Jain', 1845, 90, 92, 93, 85, 94),
(9, 'Afreen Jahan', 'Md Ahmed Jahan', 1945, 80, 92, 85, 90, 89),
(10, 'Devyanshi Chandrakar', 'Rajkumar Chandrakar', 2045, 90, 92, 93, 90, 89),
(11, 'Rahul Agrawal', 'Ankit Agrawal', 2145, 90, 82, 93, 80, 89),
(12, 'Alok Tiwari', 'Rajesh Tiwari', 2245, 80, 92, 73, 90, 89),
(13, 'Mohit suri', 'Aniket Suri', 2345, 90, 72, 93, 90, 90),
(14, 'Zaheer Khan', 'Md. Aftab Khan', 2445, 90, 92, 93, 90, 89),
(15, 'Nikhil Agrawal', 'Shashikant Agrawal', 2545, 90, 82, 76, 90, 89),
(16, 'Chirag Singh', 'Anil Singh', 2645, 80, 92, 93, 90, 89),
(17, 'Ravi Dubey', 'Raman Dubey', 2745, 90, 92, 83, 80, 89),
(18, 'Raj Singhaniya', 'Hemant Singhaniya', 2845, 90, 92, 93, 90, 89),
(19, 'Aniket Rathod', 'Lakshay Rathod', 2945, 90, 72, 93, 70, 79),
(20, 'Anurag Singh', 'Aman Singh', 3045, 90, 72, 93, 95, 76);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
