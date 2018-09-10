-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2017 at 01:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emergency_service_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_emergency_service`
--

CREATE TABLE IF NOT EXISTS `admin_emergency_service` (
  `UserName` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mobileNo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_emergency_service`
--

INSERT INTO `admin_emergency_service` (`UserName`, `Password`, `mobileNo`) VALUES
('admin', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE IF NOT EXISTS `crime_type` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `action_title` varchar(50) CHARACTER SET ucs2 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `crime_type`
--

INSERT INTO `crime_type` (`id`, `action_title`) VALUES
(27, 'Missing'),
(28, 'Terrorist Attack'),
(29, 'Terrorist Information'),
(30, 'Social Media Watch'),
(31, 'Missing Persons Information'),
(32, 'Murder'),
(33, 'Robbery'),
(34, 'Drug'),
(35, 'Kidnap'),
(36, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `district_table`
--

CREATE TABLE IF NOT EXISTS `district_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `districtName` varchar(50) CHARACTER SET ucs2 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`id`, `divisionName`, `districtName`) VALUES
(26, 'Rangpur', 'Rangpur Sadar'),
(27, 'Rangpur', 'Kurigram'),
(28, 'Dhaka', 'Savar'),
(29, 'Dhaka', 'Dhaka sadar'),
(30, 'Rangpur', 'Nilphamari'),
(31, 'Rangpur', 'Kurigram'),
(32, 'Rangpur', 'Lalmonirhat'),
(33, 'Rangpur', 'Nilphamari'),
(34, 'Rangpur', 'Kurigram'),
(35, 'Rangpur', 'Dinajpur'),
(36, 'Rangpur', 'Gaibandha'),
(37, 'Rangpur', 'Lalmonirhat'),
(38, 'Rangpur', 'Panchagarh'),
(39, 'Rangpur', 'Rangpur'),
(40, 'Rangpur', 'Thakurgaon'),
(41, 'Khulna', 'Borguna'),
(42, 'Khulna', 'Pirojpur');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `divisionName`) VALUES
(40, 'Rangpur'),
(42, 'Rangpur'),
(43, 'Rangpur'),
(44, 'rajshahi'),
(45, 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `fire_service_info_report_table`
--

CREATE TABLE IF NOT EXISTS `fire_service_info_report_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `action_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `placeName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `reporterMobileNo` varchar(50) CHARACTER SET utf32 NOT NULL,
  `reportDescription` varchar(120) CHARACTER SET utf32 NOT NULL,
  `image` varchar(100) CHARACTER SET utf32 NOT NULL,
  `fire_service_info_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `fire_service_mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `date_time` varchar(50) CHARACTER SET utf32 NOT NULL,
  `status` varchar(5) NOT NULL,
  `UserInfo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fire_service_info_report_table`
--

INSERT INTO `fire_service_info_report_table` (`id`, `action_title`, `divisionName`, `districtName`, `upazillaName`, `placeName`, `reporterMobileNo`, `reportDescription`, `image`, `fire_service_info_title`, `fire_service_mobileNo`, `date_time`, `status`, `UserInfo`) VALUES
(1, 'Terrorist Attack', 'Rangpur', 'Thakurgaon', 'Baliadangi', 'Place', '+8801737909818', 'need help....', 'motorbike-accident-19327147.jpg', 'Baliadangi Fire Station', '+8801796004852', '28/04/2017 (09:59:22 am)', '', 'IP Address: 192.168.43.231, Operating System Name: Windows 7, Browser Name: Firefox, Country Name: Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `fire_service_info_table`
--

CREATE TABLE IF NOT EXISTS `fire_service_info_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `fire_station_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `fire_service_info_table`
--

INSERT INTO `fire_service_info_table` (`id`, `divisionName`, `districtName`, `upazillaName`, `fire_station_title`, `mobileNo`) VALUES
(2, 'Rangpur', 'Dinajpur', 'Fulbari', 'Fulbari Fire Station', '+8801796004852'),
(3, 'Rangpur', 'Gaibandha', 'Gaibandha', 'Gaibandha Fire Station', '+8801796004852'),
(4, 'Rangpur', 'Kurigram', 'Nageshwari', 'Nageshwari Fire Station', '+8801796004852'),
(5, 'Rangpur', 'Kurigram', 'Ulipur', 'Ulipur Fire Station', '+8801796004852'),
(6, 'Rangpur', 'Lalmonirhat', 'Lalmonihat', 'Lalmonihat Fire Station', '+8801796004852'),
(7, 'Rangpur', 'Lalmonirhat', 'Kaligonj', 'Kaligonj Fire Station', '+8801796004852'),
(8, 'Rangpur', 'Lalmonirhat', 'Patgram', 'Patgram Fire Station', '+8801796004852'),
(9, 'Rangpur', 'Nilphamari', 'Dimla', 'Dimla Fire Station', '+8801796004852'),
(10, 'Rangpur', 'Nilphamari', 'Domar', 'Domar Fire Station', '+8801796004852'),
(11, 'Rangpur', 'Nilphamari', 'Syedpur', 'Syedpur Fire Satation', '+8801796004852'),
(12, 'Rangpur', 'Panchagarh', 'Boda', 'Boda Fire Station', '+8801796004852'),
(13, 'Rangpur', 'Panchagarh', 'Panchagarh', 'Panchagarh Fire Station', '+8801796004852'),
(14, 'Rangpur', 'Panchagarh', 'Tetulia', 'Tetulia Fire Station', '+8801796004852'),
(15, 'Rangpur', 'Rangpur', 'Badorgonj', 'Badorgonj Fire Station', '+8801796004852'),
(16, 'Rangpur', 'Rangpur', 'Kownia', 'Kownia Fire Station', '+8801796004852'),
(17, 'Rangpur', 'Rangpur', 'Mithapukur', 'Mithapukur Fire Station', '+8801796004852'),
(18, 'Rangpur', 'Rangpur', 'Pirgacha', 'Pirgachha Fire Sation', '+8801796004852'),
(19, 'Rangpur', 'Thakurgaon', 'Baliadangi', 'Baliadangi Fire Station', '+8801796004852'),
(20, 'Rangpur', 'Thakurgaon', 'Pirganj', 'Pirganj Fire Station', '+8801796004852'),
(21, 'Rangpur', 'Thakurgaon', 'Thakugaon', 'Thakurgaon Fire Station', '+8801796004852');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_info_report_table`
--

CREATE TABLE IF NOT EXISTS `hospital_info_report_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `action_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `hospitalName` varchar(50) NOT NULL,
  `placeName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `reporterMobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `reportDescription` varchar(120) CHARACTER SET utf32 NOT NULL,
  `image` varchar(100) CHARACTER SET utf32 NOT NULL,
  `hospital_info_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `hospital_mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `date_time` varchar(50) CHARACTER SET utf32 NOT NULL,
  `status` varchar(5) NOT NULL,
  `UserInfo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hospital_info_report_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `hospital_info_table`
--

CREATE TABLE IF NOT EXISTS `hospital_info_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `hospital_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `hospital_info_table`
--

INSERT INTO `hospital_info_table` (`id`, `divisionName`, `districtName`, `upazillaName`, `hospital_title`, `mobileNo`) VALUES
(26, 'Rangpur', 'Kurigram', 'Ulipur', 'Ulipur Sadar hospital', '+8801796004852'),
(27, 'Rangpur', 'Panchagarh', 'Tetulia', 'Tetulia Hospital', '+8801796004852'),
(28, 'Rangpur', 'Panchagarh', 'Debiganj', 'Debiganj hospial', '+8801796004852');

-- --------------------------------------------------------

--
-- Table structure for table `police_info_report_table`
--

CREATE TABLE IF NOT EXISTS `police_info_report_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `action_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `placeName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `reporterMobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `reportDescription` varchar(120) CHARACTER SET utf32 NOT NULL,
  `image` varchar(100) CHARACTER SET utf32 NOT NULL,
  `police_info_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `police_mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `date_time` varchar(50) CHARACTER SET utf32 NOT NULL,
  `status` varchar(5) NOT NULL,
  `UserInfo` varchar(500) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `police_info_report_table`
--


-- --------------------------------------------------------

--
-- Table structure for table `police_info_table`
--

CREATE TABLE IF NOT EXISTS `police_info_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `police_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `police_info_table`
--

INSERT INTO `police_info_table` (`id`, `divisionName`, `districtName`, `upazillaName`, `police_title`, `mobileNo`) VALUES
(1, 'Rangpur', 'Dinajpur', 'Birampur', 'Birampur Thana', '+8801796004852'),
(2, 'Rangpur', 'Dinajpur', 'Birjonj', 'Birjonj Thana', '+8801796004852'),
(3, 'Rangpur', 'Dinajpur', 'Birol', 'Birol Thana', '+8801796004852'),
(4, 'Rangpur', 'Dinajpur', 'Bochagong', 'Bochagong Thana', '+8801796004852'),
(5, 'Rangpur', 'Dinajpur', 'Chiribandar', 'Chiribandar Thana', '+8801796004852'),
(6, 'Rangpur', 'Dinajpur', 'Fulbari', 'Fulbari Thana', '+8801796004852'),
(7, 'Rangpur', 'Dinajpur', 'Ghoraghat', 'Ghoraghat Thana', '+8801796004852'),
(8, 'Rangpur', 'Dinajpur', 'Hakimpur', 'Hakimpur Thana', '+8801796004852'),
(9, 'Rangpur', 'Dinajpur', 'Kaharul', 'Kaharul Thana', '+8801796004852'),
(10, 'Rangpur', 'Dinajpur', 'Khanhama', 'Khanhama Thana', '+8801796004852'),
(11, 'Rangpur', 'Dinajpur', 'Kotwali', 'Kotwali Thana', '+8801796004852'),
(12, 'Rangpur', 'Dinajpur', 'Nawabgonj', 'Nawabgonj Thana', '+8801796004852'),
(13, 'Rangpur', 'Dinajpur', 'Parbatipur', 'Parbatipur Thana', '+8801796004852'),
(14, 'Rangpur', 'Lalmonirhat', 'Lalmonihat', 'Lalmonihat Thana', '+8801796004852'),
(15, 'Rangpur', 'Lalmonirhat', 'Aditmari', 'Aditmari Thana', '+8801796004852'),
(16, 'Rangpur', 'Lalmonirhat', 'Kaligonj', 'Kaligonj Thana', '+8801796004852'),
(17, 'Rangpur', 'Lalmonirhat', 'Hatibanda', 'Hatibanda Thana', '+8801796004852'),
(18, 'Rangpur', 'Lalmonirhat', 'Patgram', 'Patgram Thana', '+8801796004852'),
(19, 'Rangpur', 'Nilphamari', 'Dimla', 'Dimla Thana', '+8801796004852'),
(20, 'Rangpur', 'Nilphamari', 'Domar', 'Domar Thana', '+8801796004852'),
(21, 'Rangpur', 'Nilphamari', 'Kishorganj', 'Kishorganj Thana', '+8801796004852'),
(22, 'Rangpur', 'Nilphamari', 'Jaldhaka', 'Jaldhaka Thana', '+8801796004852'),
(23, 'Rangpur', 'Nilphamari', 'Nilphamari', 'Nilphamari Thana', '+8801796004852'),
(24, 'Rangpur', 'Nilphamari', 'Syedpur', 'Syedpur Thana', '+8801796004852'),
(25, 'Rangpur', 'Kurigram', 'Ulipur', 'Ulipur Thana', '+8801796004852'),
(26, 'Rangpur', 'Kurigram', 'Nageshwari', 'Nageshwari Thana', '+8801796004852'),
(27, 'Rangpur', 'Kurigram', 'Bhurungimari', 'Bhurungamari Thana', '+8801796004852'),
(28, 'Rangpur', 'Kurigram', 'Fulbari', 'Fulbari Thana', '+8801796004852'),
(29, 'Rangpur', 'Kurigram', 'Rajahat', 'Rajahat Thana', '+8801796004852'),
(30, 'Rangpur', 'Kurigram', 'Chilmari', 'Chilmari Thana', '+8801796004852'),
(31, 'Rangpur', 'Kurigram', 'Dusmara', 'Dusmara Thana', '+8801796004852'),
(32, 'Rangpur', 'Gaibandha', 'Fulchhari', 'Fulchhari Thana', '+8801796004852'),
(33, 'Rangpur', 'Gaibandha', 'Palashari', 'Palashbari Thana', '+8801796004852'),
(34, 'Rangpur', 'Gaibandha', 'Gaibandha', 'Gaibandha Thana', '+8801796004852'),
(35, 'Rangpur', 'Gaibandha', 'Gobindagonj', 'Gobindagonj Thana', '+8801796004852'),
(36, 'Rangpur', 'Gaibandha', 'Saghata', 'Saghata Thana', '+8801796004852'),
(37, 'Rangpur', 'Gaibandha', 'Shadullhapur', 'Shadullhapur Thana', '+8801796004852'),
(38, 'Rangpur', 'Gaibandha', 'Sundargonj', 'Sundargonj Thana', '+8801796004852'),
(39, 'Rangpur', 'Panchagarh', 'Atwari', 'Atwari Thana', '+8801796004852'),
(40, 'Rangpur', 'Panchagarh', 'Boda', 'Boda Thana', '+8801796004852'),
(41, 'Rangpur', 'Panchagarh', 'Debiganj', 'Debiganj Thana', '+8801796004852'),
(42, 'Rangpur', 'Panchagarh', 'Panchagarh', 'Panchagarh Thana', '+8801796004852'),
(43, 'Rangpur', 'Panchagarh', 'Tetulia', 'Tetulia Thana', '+8801796004852'),
(44, 'Rangpur', 'Rangpur', 'Badorgonj', 'Badorgonj Thana', '+8801796004852'),
(45, 'Rangpur', 'Rangpur', 'Gongachara', 'Gongachara Thana', '+8801796004852'),
(46, 'Rangpur', 'Rangpur', 'Kotwali', 'Kotwali Thana', '+8801796004852'),
(47, 'Rangpur', 'Rangpur', 'Kownia', 'Kownia Thana', '+8801796004852'),
(48, 'Rangpur', 'Rangpur', 'Mithapukur', 'Mithapukur Thana', '+8801796004852'),
(49, 'Rangpur', 'Rangpur', 'Pirgacha', 'Pirgacha Thana', '+8801796004852'),
(50, 'Rangpur', 'Rangpur', 'Pirganj', 'Pirganj Thana', '+8801796004852'),
(51, 'Rangpur', 'Rangpur', 'Taragonj', 'Taragonj Thana', '+8801796004852'),
(52, 'Rangpur', 'Thakurgaon', 'Baliadangi', 'Baliadangi Thana', '+8801796004852'),
(53, 'Rangpur', 'Thakurgaon', 'Haripur', 'Haripur Thana', '+8801796004852'),
(54, 'Rangpur', 'Thakurgaon', 'Pirganj', 'Pirganj Thana', '+8801796004852'),
(55, 'Rangpur', 'Thakurgaon', 'Ranishonkail', 'Ranishonkail Thana', '+8801796004852'),
(56, 'Rangpur', 'Thakurgaon', 'Ruhia', 'Ruhia Thana', '+8801796004852'),
(57, 'Rangpur', 'Thakurgaon', 'Thakugaon', 'Thakur gaon Thana', '+8801796004852');

-- --------------------------------------------------------

--
-- Table structure for table `rab_info_report_table`
--

CREATE TABLE IF NOT EXISTS `rab_info_report_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `action_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `divisionName` varchar(500) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `placeName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `reporterMobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `reportDescription` varchar(120) CHARACTER SET utf32 NOT NULL,
  `image` varchar(50) CHARACTER SET utf32 NOT NULL,
  `rab_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `rab_mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  `date_time` varchar(50) CHARACTER SET utf32 NOT NULL,
  `status` int(5) NOT NULL,
  `UserInfo` varchar(500) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rab_info_report_table`
--

INSERT INTO `rab_info_report_table` (`id`, `action_title`, `divisionName`, `districtName`, `upazillaName`, `placeName`, `reporterMobileNo`, `reportDescription`, `image`, `rab_title`, `rab_mobileNo`, `date_time`, `status`, `UserInfo`) VALUES
(1, 'Terrorist Attack', 'Rangpur', 'Kurigram', 'Ulipur', 'Kamal Khamar', '+8801796004852', 'Hello Sir I need Help', 'NoPhoto', 'RAB-13', '+8801796004852', '28/04/2017 (08:51:41 am)', 2, 'IP Address: 127.0.0.1, Operating System Name: Windows 7, Browser Name: Firefox, Country Name: Bangladesh'),
(2, 'Missing', 'Rangpur', 'Nilphamari', 'Nilphamari', 'r k road', '+8801796004853', 'Hello Sir', 'NoPhoto', 'RAB-13', '+8801796004852', '28/04/2017 (09:24:32 am)', 1, 'IP Address: 127.0.0.1, Operating System Name: Windows 7, Browser Name: Firefox, Country Name: Bangladesh'),
(3, 'Missing Persons Information', 'Rangpur', 'Thakurgaon', 'Baliadangi', 'r k road', '+8801796004853', 'zxccvbb', 'NoPhoto', 'RAB-13', '+8801796004852', '28/04/2017 (10:49:41 am)', 1, 'IP Address: 192.168.43.231, Operating System Name: Windows 7, Browser Name: Firefox, Country Name: Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `rab_info_table`
--

CREATE TABLE IF NOT EXISTS `rab_info_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `rab_title` varchar(50) CHARACTER SET utf32 NOT NULL,
  `mobileNo` varchar(15) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `rab_info_table`
--

INSERT INTO `rab_info_table` (`id`, `divisionName`, `districtName`, `upazillaName`, `rab_title`, `mobileNo`) VALUES
(1, 'Rangpur', 'Kurigram', 'Nageshwari', 'RAB-13', '+8801796004852'),
(2, 'Rangpur', 'Kurigram', 'Ulipur', 'RAB-13', '+8801796004852'),
(3, 'Rangpur', 'Kurigram', 'Bhurungimari', 'RAB-13', '+8801796004852'),
(4, 'Rangpur', 'Kurigram', 'Fulbari', 'RAB-13', '+8801796004852'),
(5, 'Rangpur', 'Kurigram', 'Rajahat', 'RAB-13', '+8801796004852'),
(6, 'Rangpur', 'Kurigram', 'Chilmari', 'RAB-13', '+8801796004852'),
(7, 'Rangpur', 'Kurigram', 'Dusmara', 'RAB-13', '+8801796004852'),
(8, 'Rangpur', 'Rangpur', 'Badorgonj', 'RAB-13', '+8801796004852'),
(9, 'Rangpur', 'Rangpur', 'Gongachara', 'RAB-13', '+8801796004852'),
(10, 'Rangpur', 'Rangpur', 'Kotwali', 'RAB-13', '+8801796004852'),
(11, 'Rangpur', 'Rangpur', 'Mithapukur', 'RAB-13', '+8801796004852'),
(12, 'Rangpur', 'Rangpur', 'Pirgacha', 'RAB-13', '+8801796004852'),
(13, 'Rangpur', 'Rangpur', 'Pirganj', 'RAB-13', '+8801796004852'),
(14, 'Rangpur', 'Rangpur', 'Taragonj', 'RAB-13', '+8801796004852'),
(15, 'Rangpur', 'Thakurgaon', 'Baliadangi', 'RAB-13', '+8801796004852'),
(16, 'Rangpur', 'Thakurgaon', 'Haripur', 'RAB-13', '+8801796004852'),
(17, 'Rangpur', 'Thakurgaon', 'Pirganj', 'RAB-13', '+8801796004852'),
(18, 'Rangpur', 'Thakurgaon', 'Ranishonkail', 'RAB-13', '+8801796004852'),
(19, 'Rangpur', 'Thakurgaon', 'Ruhia', 'RAB-13', '+8801796004852'),
(20, 'Rangpur', 'Thakurgaon', 'Thakugaon', 'RAB-13', '+8801796004852'),
(21, 'Rangpur', 'Panchagarh', 'Atwari', 'RAB-13', '+8801796004852'),
(22, 'Rangpur', 'Panchagarh', 'Boda', 'RAB-13', '+8801796004852'),
(23, 'Rangpur', 'Panchagarh', 'Debiganj', 'RAB-13', '+8801796004852'),
(24, 'Rangpur', 'Panchagarh', 'Panchagarh', 'RAB-13', '+8801796004852'),
(26, 'Rangpur', 'Gaibandha', 'Fulchhari', 'RAB-13', '+8801796004852'),
(27, 'Rangpur', 'Gaibandha', 'Palashari', 'RAB-13', '+8801796004852'),
(28, 'Rangpur', 'Gaibandha', 'Gaibandha', 'RAB-13', '+8801796004852'),
(29, 'Rangpur', 'Gaibandha', 'Saghata', 'RAB-13', '+8801796004852'),
(30, 'Rangpur', 'Gaibandha', 'Shadullhapur', 'RAB-13', '+8801796004852'),
(31, 'Rangpur', 'Gaibandha', 'Sundargonj', 'RAB-13', '+8801796004852'),
(32, 'Rangpur', 'Dinajpur', 'Birampur', 'RAB-13', '+8801796004852'),
(33, 'Rangpur', 'Dinajpur', 'Birjonj', 'RAB-13', '+8801796004852'),
(34, 'Rangpur', 'Dinajpur', 'Birol', 'RAB-13', '+8801796004852'),
(35, 'Rangpur', 'Dinajpur', 'Bochagong', 'RAB-13', '+8801796004852'),
(36, 'Rangpur', 'Dinajpur', 'Chiribandar', 'RAB-13', '+8801796004852'),
(37, 'Rangpur', 'Dinajpur', 'Fulbari', 'RAB-13', '+8801796004852'),
(38, 'Rangpur', 'Dinajpur', 'Ghoraghat', 'RAB-13', '+8801796004852'),
(39, 'Rangpur', 'Dinajpur', 'Hakimpur', 'RAB-13', '+8801796004852'),
(40, 'Rangpur', 'Dinajpur', 'Kaharul', 'RAB-13', '+8801796004852'),
(41, 'Rangpur', 'Dinajpur', 'Khanhama', 'RAB-13', '+8801796004852'),
(42, 'Rangpur', 'Lalmonirhat', 'Lalmonihat', 'RAB-13', '+8801796004852'),
(43, 'Rangpur', 'Lalmonirhat', 'Aditmari', 'RAB-13', '+8801796004852'),
(44, 'Rangpur', 'Lalmonirhat', 'Kaligonj', 'RAB-13', '+8801796004852'),
(45, 'Rangpur', 'Nilphamari', 'Dimla', 'RAB-13', '+8801796004852'),
(46, 'Rangpur', 'Nilphamari', 'Domar', 'RAB-13', '+8801796004852'),
(47, 'Rangpur', 'Nilphamari', 'Kishorganj', 'RAB-13', '+8801796004852'),
(48, 'Rangpur', 'Nilphamari', 'Jaldhaka', 'RAB-13', '+8801796004852'),
(49, 'Rangpur', 'Nilphamari', 'Nilphamari', 'RAB-13', '+8801796004852'),
(50, 'Rangpur', 'Nilphamari', 'Syedpur', 'RAB-13', '+8801796004852'),
(51, 'Rangpur', 'Lalmonirhat', 'Hatibanda', 'RAB-13', '+8801796004852'),
(52, 'Rangpur', 'Lalmonirhat', 'Patgram', 'RAB-13', '+8801796004852');

-- --------------------------------------------------------

--
-- Table structure for table `upazilla_table`
--

CREATE TABLE IF NOT EXISTS `upazilla_table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `divisionName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `districtName` varchar(50) CHARACTER SET utf32 NOT NULL,
  `upazillaName` varchar(50) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `upazilla_table`
--

INSERT INTO `upazilla_table` (`id`, `divisionName`, `districtName`, `upazillaName`) VALUES
(16, 'Rangpur', 'Rangpur Sadar', 'Taragong'),
(17, 'Dhaka', 'Dhaka sadar', 'sadar'),
(18, 'Rangpur', 'Kurigram', 'Ulipur'),
(19, 'Rangpur', 'Kurigram', 'Nageshwari'),
(20, 'Rangpur', 'Kurigram', 'Bhurungimari'),
(21, 'Rangpur', 'Kurigram', 'Fulbari'),
(22, 'Rangpur', 'Kurigram', 'Rajahat'),
(23, 'Rangpur', 'Nilphamari', 'Dimla'),
(24, 'Rangpur', 'Nilphamari', 'Domar'),
(25, 'Rangpur', 'Nilphamari', 'Kishorganj'),
(26, 'Rangpur', 'Lalmonirhat', 'Lalmonihat'),
(27, 'Rangpur', 'Lalmonirhat', 'Aditmari'),
(28, 'Rangpur', 'Lalmonirhat', 'Kaligonj'),
(29, 'Rangpur', 'Dinajpur', 'Birampur'),
(30, 'Rangpur', 'Dinajpur', 'Birjonj'),
(31, 'Rangpur', 'Dinajpur', 'Birol'),
(32, 'Rangpur', 'Dinajpur', 'Bochagong'),
(33, 'Rangpur', 'Dinajpur', 'Chiribandar'),
(34, 'Rangpur', 'Dinajpur', 'Fulbari'),
(35, 'Rangpur', 'Dinajpur', 'Ghoraghat'),
(36, 'Rangpur', 'Dinajpur', 'Hakimpur'),
(37, 'Rangpur', 'Dinajpur', 'Kaharul'),
(38, 'Rangpur', 'Dinajpur', 'Khanhama'),
(39, 'Rangpur', 'Dinajpur', 'Kotwali'),
(40, 'Rangpur', 'Dinajpur', 'Nawabgonj'),
(41, 'Rangpur', 'Dinajpur', 'Parbatipur'),
(42, 'Rangpur', 'Gaibandha', 'Fulchhari'),
(43, 'Rangpur', 'Gaibandha', 'Palashari'),
(44, 'Rangpur', 'Gaibandha', 'Gaibandha'),
(45, 'Rangpur', 'Gaibandha', 'Gobindagonj'),
(46, 'Rangpur', 'Gaibandha', 'Saghata'),
(47, 'Rangpur', 'Gaibandha', 'Shadullhapur'),
(48, 'Rangpur', 'Gaibandha', 'Sundargonj'),
(49, 'Rangpur', 'Panchagarh', 'Atwari'),
(50, 'Rangpur', 'Panchagarh', 'Boda'),
(51, 'Rangpur', 'Panchagarh', 'Debiganj'),
(52, 'Rangpur', 'Panchagarh', 'Panchagarh'),
(53, 'Rangpur', 'Panchagarh', 'Tetulia'),
(54, 'Rangpur', 'Rangpur', 'Badorgonj'),
(55, 'Rangpur', 'Rangpur', 'Gongachara'),
(56, 'Rangpur', 'Rangpur', 'Kotwali'),
(57, 'Rangpur', 'Rangpur', 'Kownia'),
(58, 'Rangpur', 'Rangpur', 'Mithapukur'),
(59, 'Rangpur', 'Rangpur', 'Pirgacha'),
(60, 'Rangpur', 'Rangpur', 'Pirganj'),
(61, 'Rangpur', 'Rangpur', 'Taragonj'),
(62, 'Rangpur', 'Thakurgaon', 'Baliadangi'),
(63, 'Rangpur', 'Thakurgaon', 'Haripur'),
(64, 'Rangpur', 'Thakurgaon', 'Pirganj'),
(65, 'Rangpur', 'Thakurgaon', 'Ranishonkail'),
(66, 'Rangpur', 'Thakurgaon', 'Ruhia'),
(67, 'Rangpur', 'Thakurgaon', 'Thakugaon'),
(68, 'Rangpur', 'Kurigram', 'Chilmari'),
(69, 'Rangpur', 'Kurigram', 'Dusmara'),
(70, 'Rangpur', 'Kurigram', 'Nageshwari'),
(71, 'Rangpur', 'Lalmonirhat', 'Hatibanda'),
(72, 'Rangpur', 'Lalmonirhat', 'Patgram'),
(73, 'Rangpur', 'Nilphamari', 'Jaldhaka'),
(74, 'Rangpur', 'Nilphamari', 'Nilphamari'),
(75, 'Rangpur', 'Nilphamari', 'Syedpur'),
(76, 'Rangpur', 'Kurigram', 'Nageshwari'),
(77, 'Khulna', 'Borguna', '123');
