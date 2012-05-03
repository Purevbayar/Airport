-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2012 at 03:27 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE IF NOT EXISTS `airplane` (
  `airplane_id` int(11) NOT NULL AUTO_INCREMENT,
  `airplane_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `airplane_volume` int(11) NOT NULL,
  `airplane_direct` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `airplane_position` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `airplane_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `airplane_ticket_price` int(11) NOT NULL,
  PRIMARY KEY (`airplane_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`airplane_id`, `airplane_name`, `airplane_volume`, `airplane_direct`, `airplane_position`, `airplane_status`, `airplane_ticket_price`) VALUES
(1, 'TU477', 11, 'SVO - Moscow', 'ULN - ULaanbaatar', 'airborne', 120),
(2, 'Boi747', 12, 'ICN - Seoul', 'ULN - ULaanbaatar', 'Land on', 130),
(3, 'AT234', 30, 'NRT - Tokyo', 'ULN - ULaanbaatar', 'Land on', 300),
(4, 'Boi747', 30, 'BER - Berlin', 'ULN - ULaanbaatar', 'Land on', 400),
(5, 'TUZ23', 30, 'KIX - Osaka', 'ULN - ULaanbaatar', 'Land on', 300);

-- --------------------------------------------------------

--
-- Table structure for table `directions`
--

CREATE TABLE IF NOT EXISTS `directions` (
  `direct_id` int(11) NOT NULL AUTO_INCREMENT,
  `direct_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direct_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`direct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `directions`
--

INSERT INTO `directions` (`direct_id`, `direct_name`, `direct_type`) VALUES
(1, 'ULN - Ulaanbaatar', 1),
(2, 'PEK - Beijing', 2),
(9, 'ICN - Seoul', 3),
(10, 'SVO - Moscow', 3);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_date_determination` datetime NOT NULL,
  `flight_date_landon` datetime NOT NULL,
  `flight_to_direction` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flight_from_direction` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flight_airplane_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `flight_date_determination`, `flight_date_landon`, `flight_to_direction`, `flight_from_direction`, `flight_airplane_name`) VALUES
(1, '2012-04-30 11:29:32', '2012-04-30 14:30:00', 'PEK - Beijing', 'ULN - Ulaanbaatar', 'TU477'),
(2, '2012-04-30 11:34:46', '2012-04-30 23:34:00', 'SVO - Moscow', 'ULN - Ulaanbaatar', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_firstname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staff_lastname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staff_loginname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staff_type` tinyint(1) NOT NULL,
  `staff_password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_firstname`, `staff_lastname`, `staff_loginname`, `staff_type`, `staff_password`) VALUES
(1, 'B', 'Uka', 'Uka', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ticket_userregister` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ticket_feedback` tinyint(1) NOT NULL,
  `ticket_godate` date NOT NULL,
  `ticket_returndate` date NOT NULL,
  `ticket_airplane_id` int(11) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ticket`
--


-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_lastname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_loginname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_registernumber` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_homeaddress` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_mobilenumber` int(11) DEFAULT NULL,
  `user_phonenumber` int(11) DEFAULT NULL,
  `user_bankacc` bigint(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `user_firstname`, `user_lastname`, `user_loginname`, `user_password`, `user_registernumber`, `user_email`, `user_homeaddress`, `user_mobilenumber`, `user_phonenumber`, `user_bankacc`) VALUES
(1, 'D', 'Ochirbat', 'ojgoo', '1', 'ОЮ90120513', 'ojgoooogjo@yahoo.com', 'Uws', 88148440, 3800, 5076061209);
