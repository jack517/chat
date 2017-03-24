-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 08:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hacka`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `hospital_name`, `state_id`) VALUES
(1, 'Apolo hospital,chaubey colony', 1),
(2, 'ramkrishnan care ,smata colony', 1),
(3, 'mednata hospital,marine drive', 1),
(4, 'manuhospital,ghadi chowk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `aadhar` int(12) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`pid`, `username`, `hospital_name`, `aadhar`) VALUES
(1, 'manugupta', 'apolo hospital,chaubey colony', 9479265),
(2, 'aashray jain', 'ramkrishnan care ,smata colony', 877076),
(3, 'gaurav mahapatra', 'mednata hospital,marine drive', 45672345),
(4, 'nischal patel', 'manuhospital,ghadi chowk', 54678934);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(1, 'Chattishgarh'),
(2, 'Asam'),
(3, 'Bihar'),
(4, 'West Bengal'),
(5, 'Uttarpradesh');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE IF NOT EXISTS `graph` (
  `hname` varchar(128) NOT NULL,
  `doctor` varchar(128) NOT NULL,
  `management` varchar(128) NOT NULL,
  `facilities` varchar(128) NOT NULL,
  `clean` varchar(128) NOT NULL,
  `medicine` varchar(128) NOT NULL,
  `overall` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`hname`, `doctor`, `management`, `facilities`, `clean`, `medicine`, `overall`) VALUES
('Apolo', '34.090909090909', '31.25', '34.848484848485', '39.393939393939', '39.772727272727', '34.090909090909'),
('Apolo', '36.979166666667', '33.854166666667', '37.847222222222', '42.361111111111', '41.666666666667', '37.5'),
('Apolo', '38.942307692308', '37.019230769231', '40.384615384615', '42.948717948718', '42.307692307692', '40.384615384615'),
('Apolo', '36.160714285714', '34.375', '37.5', '39.880952380952', '39.285714285714', '37.5'),
('Apolo', '33.75', '32.083333333333', '35', '37.222222222222', '36.666666666667', '35'),
('Apolo', '37.890625', '36.328125', '39.0625', '41.145833333333', '40.625', '39.0625'),
('1', '75', '100', '87.5', '100', '100', '100'),
('1', '83.333333333333', '100', '91.666666666667', '100', '100', '100'),
('ramkrishnan care ,smata colony', '59.375', '53.125', '43.75', '54.166666666667', '56.25', '62.5'),
('Apolo hospital,chaubey colony', '89.583333333333', '87.5', '86.111111111111', '83.333333333333', '95.833333333333', '83.333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `hosclient`
--

CREATE TABLE IF NOT EXISTS `hosclient` (
  `hname` varchar(128) NOT NULL,
  `dname` varchar(128) NOT NULL,
  `time` varchar(128) NOT NULL,
  `asp` varchar(128) NOT NULL,
  `g1` varchar(128) NOT NULL,
  `g2` varchar(128) NOT NULL,
  `g3` varchar(128) NOT NULL,
  `g4` varchar(128) NOT NULL,
  `g5` varchar(128) NOT NULL,
  `g6` varchar(128) NOT NULL,
  `g7` varchar(128) NOT NULL,
  `g8` varchar(128) NOT NULL,
  `g9` varchar(128) NOT NULL,
  `g10` varchar(128) NOT NULL,
  `g11` varchar(128) NOT NULL,
  `g12` varchar(128) NOT NULL,
  `g13` varchar(128) NOT NULL,
  `g14` varchar(128) NOT NULL,
  `g15` varchar(128) NOT NULL,
  `g16` varchar(128) NOT NULL,
  `g17` varchar(128) NOT NULL,
  `g18` varchar(128) NOT NULL,
  `g19` varchar(128) NOT NULL,
  `g20` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosclient`
--

INSERT INTO `hosclient` (`hname`, `dname`, `time`, `asp`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `g10`, `g11`, `g12`, `g13`, `g14`, `g15`, `g16`, `g17`, `g18`, `g19`, `g20`) VALUES
('Apolo', 'Dr GM', 'Morning', 'patient', 'Excellent', 'Excellent', 'Excellent', 'Good', 'Satisfactory', 'Satisfactory', 'Good', 'Satisfactory', 'Satisfactory', 'Good', 'Satisfactory', 'Good', 'Satisfactory', 'Good', 'Satisfactory', 'Good', 'Good', 'Good', 'Good', 'Good'),
('Apolo', 'Dr GM', 'Morning', 'patient', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent'),
('Apolo', 'Dr GM', 'Morning', 'patient', 'Good', 'Poor', 'Satisfactory', 'Satisfactory', 'Good', 'Good', 'Satisfactory', 'Poor', 'Excellent', 'Satisfactory', 'Good', 'Poor', 'Excellent', 'Satisfactory', 'Good', 'Excellent', 'Satisfactory', 'Good', 'Poor', 'Excellent'),
('Apolo', 'Dr GM', 'Morning', 'patient', 'Excellent', 'Excellent', 'Excellent', 'Good', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Poor', 'Poor', 'Poor', 'Poor', 'Excellent', 'Poor', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent'),
('Apolo', 'Dr GM', 'Morning', 'patient', '75', '100', '50', '100', '100', '50', '50', '50', '50', '75', '50', '75', '50', '75', '50', '50', '100', '75', '25', '25'),
('Apolo', 'Dr GM', 'Morning', 'patient', '75', '100', '50', '100', '100', '50', '50', '50', '50', '75', '50', '75', '50', '75', '50', '50', '100', '75', '25', '25'),
('Apolo', 'Dr GM', 'Morning', 'patient', '75', '100', '50', '100', '100', '50', '50', '50', '50', '75', '50', '75', '50', '75', '50', '50', '100', '75', '25', '25'),
('Apolo', 'Dr GM', 'Morning', 'patient', '25', '25', '50', '50', '50', '25', '25', '50', '25', '50', '75', '50', '50', '75', '50', '50', '75', '50', '50', '75'),
('Apolo', 'Dr GM', 'Morning', 'patient', '25', '25', '50', '50', '50', '25', '25', '50', '25', '50', '75', '50', '50', '75', '50', '50', '75', '50', '50', '75'),
('Apolo', 'Dr GM', 'Morning', 'patient', '25', '25', '50', '50', '50', '25', '25', '50', '25', '50', '75', '50', '50', '75', '50', '50', '75', '50', '50', '75'),
('Apolo', 'Dr GM', 'Morning', 'patient', '25', '25', '50', '50', '50', '25', '25', '50', '25', '50', '75', '50', '50', '75', '50', '50', '75', '50', '50', '75'),
('Apolo', 'Dr GM', 'Morning', 'patient', '50', '75', '75', '50', '75', '75', '75', '75', '50', '75', '75', '75', '75', '50', '75', '75', '75', '50', '75', '75'),
('Apolo', 'Dr GM', 'Morning', 'patient', '100', '75', '50', '50', '50', '75', '75', '50', '75', '50', '50', '50', '50', '50', '75', '75', '75', '75', '75', '75'),
('Apolo', 'Dr GM', 'Morning', 'patient', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Apolo', 'Dr GM', 'Morning', 'patient', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Apolo', 'Dr GM', 'Morning', 'patient', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
('1', 'dmmke', 'Afternoon', 'Patient', '100', '100', '100', '100', '50', '75', '75', '75', '50', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
('1', 'dmmke', 'Afternoon', 'Patient', '100', '100', '100', '100', '50', '75', '75', '75', '50', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
('1', 'manu', 'Morning', 'Patient', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
('Apolo hospital,chaubey colony', 'manu', 'Afternoon', 'ByStander', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
('ramkrishnan care ,smata colony', 'manu', 'Afternoon', 'Patient', '100', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25', '25'),
('Apolo hospital,chaubey colony', 'manu', 'Afternoon', 'Patient', '100', '75', '50', '50', '100', '50', '75', '50', '50', '50', '75', '25', '75', '100', '75', '50', '50', '75', '25', '50'),
('Apolo hospital,chaubey colony', 'manu', 'Evening', 'Patient', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100'),
('ramkrishnan care ,smata colony', 'gg', 'Morning', 'Visitor', '25', '25', '100', '100', '100', '75', '100', '100', '100', '75', '100', '75', '75', '100', '75', '50', '25', '50', '75', '100');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Raipur', 1),
(2, 'Bilaspur', 1),
(3, 'Rajnandgaon', 1),
(4, 'Bhilai', 1),
(5, 'Ambikapur', 1),
(6, 'Bastar', 1),
(7, 'Jagdalpur', 1),
(8, 'gandai', 1),
(9, 'Deori', 1),
(10, 'Raipur', 1),
(11, 'Bilaspur', 1),
(12, 'Rajnandgaon', 1),
(13, 'Bhilai', 1),
(14, 'Ambikapur', 1),
(15, 'Bastar', 1),
(16, 'Jagdalpur', 1),
(17, 'gandai', 1),
(18, 'Deori', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
