-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 06:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `disaster_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmzone_tbl`
--

CREATE TABLE IF NOT EXISTS `confirmzone_tbl` (
  `confirm_id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteerzone_id` varchar(200) NOT NULL,
  `volunteeremail_id` varchar(400) NOT NULL,
  `volunteer_duty` varchar(100) NOT NULL,
  PRIMARY KEY (`confirm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `confirmzone_tbl`
--

INSERT INTO `confirmzone_tbl` (`confirm_id`, `volunteerzone_id`, `volunteeremail_id`, `volunteer_duty`) VALUES
(1, '1', 'mathews2arackal@gmail.com', 'user'),
(2, '1', 'homemedicare000@gmail.com', 'leader'),
(3, '1', 'keerthikrishnakumarkk@gmail.com', 'user'),
(4, '2', 'keerthikrishnakumarkk@gmail.com', 'user'),
(5, '2', 'patel.vishnu16@gmail.com', 'leader'),
(6, '2', 'mathews2arackal@gmail.com', 'user'),
(7, '3', 'keerthikrishnakumarkk@gmail.com', 'user'),
(8, '3', 'mathews2arackal@gmail.com', 'leader'),
(9, '5', 'keerthikrishnakumarkk@gmail.com', 'leader');

-- --------------------------------------------------------

--
-- Table structure for table `district_tbl`
--

CREATE TABLE IF NOT EXISTS `district_tbl` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `dist_name` varchar(100) NOT NULL,
  `dadmin_name` varchar(200) NOT NULL,
  `dadmin_emailid` varchar(300) NOT NULL,
  `dadmin_password` varchar(100) NOT NULL,
  `dadmin_contact` varchar(100) NOT NULL,
  `dadmin_photo` varchar(300) NOT NULL,
  `dadmin_status` int(10) NOT NULL,
  `dist_latitude` float NOT NULL,
  `dist_longitude` float NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `district_tbl`
--

INSERT INTO `district_tbl` (`district_id`, `state_id`, `dist_name`, `dadmin_name`, `dadmin_emailid`, `dadmin_password`, `dadmin_contact`, `dadmin_photo`, `dadmin_status`, `dist_latitude`, `dist_longitude`) VALUES
(1, 1, 'Trivandrum', 'Carolin Mathews', 'carolinmathewsarackal@gmail.com', 'carolin123', '9526459498', 'carolinmathewsarackal@gmail.com.jpg', 0, 8.48697, 76.9528),
(2, 1, 'Kottayam', 'Keerthi Krishnan', 'keerthikrishnan999@gmail.com', 'keerthi123', '8976543210', 'keerthikrishnan999@gmail.com.jpg', 0, 9.55989, 76.5427),
(3, 1, 'Kollam', '0', '0', '0', '0', '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE IF NOT EXISTS `login_tbl` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_email` varchar(300) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_type` varchar(30) NOT NULL,
  `login_status` int(11) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`login_id`, `login_email`, `login_password`, `login_type`, `login_status`) VALUES
(1, 'admin@gmail.com', 'admin123', 'admin', 1),
(2, 'maria15arackal@gmail.com', 'maria123', 'sadmin', 1),
(6, 'homemedicare000@gmail.com', 'chikku123', 'volunteer', 1),
(7, 'carolinmathewsarackal@gmail.com', 'carolin123', 'dadmin', 1),
(8, 'keerthikrishnan999@gmail.com', 'keerthi123', 'dadmin', 1),
(9, 'keerthikrishnakumarkk@gmail.com', 'kk', 'volunteer', 1),
(10, 'patel.vishnu16@gmail.com', 'vishnu', 'volunteer', 1),
(11, 'mathews2arackal@gmail.com', 'manju123', 'volunteer', 1),
(12, 'mail2avvineeth@gmail.com', 'vineeth', 'volunteer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registersp_tbl`
--

CREATE TABLE IF NOT EXISTS `registersp_tbl` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_type` varchar(100) NOT NULL,
  `sp_name` varchar(100) NOT NULL,
  `sp_email` varchar(300) NOT NULL,
  `sp_state` varchar(100) NOT NULL,
  `sp_district` varchar(100) NOT NULL,
  `sp_password` varchar(100) NOT NULL,
  `sp_address` varchar(300) NOT NULL,
  `sp_phone` varchar(100) NOT NULL,
  `sp_latitude` float NOT NULL,
  `sp_longitude` float NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registeruser_tbl`
--

CREATE TABLE IF NOT EXISTS `registeruser_tbl` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_district` varchar(100) NOT NULL,
  `user_response` varchar(25) NOT NULL,
  `user_photo` varchar(300) NOT NULL,
  `user_lat` float NOT NULL,
  `user_long` float NOT NULL,
  `user_status` int(11) NOT NULL,
  `volteam_lead` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registeruser_tbl`
--

INSERT INTO `registeruser_tbl` (`reg_id`, `user_name`, `user_address`, `user_email`, `user_contact`, `user_password`, `user_state`, `user_district`, `user_response`, `user_photo`, `user_lat`, `user_long`, `user_status`, `volteam_lead`) VALUES
(2, 'chikku Joseph', 'Aarackal\r\nTrivandrum', 'homemedicare000@gmail.com', '9087654321', 'chikku123', '1', '1', 'volunteer', 'homemedicare000@gmail.com.jpg', 8.49406, 76.941, 0, 'yes'),
(3, 'keerthi KK', 'trivandrum', 'keerthikrishnakumarkk@gmail.com', '81233567898', 'kk', '1', '1', 'volunteer', 'keerthikrishnakumarkk@gmail.com.jpg', 8.54015, 76.9635, 0, 'no'),
(4, 'Vishnu Patel', 'Trivandrum', 'patel.vishnu16@gmail.com', '765432190', 'vishnu', '1', '1', 'volunteer', 'patel.vishnu16@gmail.com.jpg', 8.6828, 76.9096, 0, 'yes'),
(5, 'Manju Nath', 'Kanjirathinkal', 'mathews2arackal@gmail.com', '9947249169', 'manju123', '1', '1', 'volunteer', 'mathews2arackal@gmail.com.jpg', 8.49012, 76.9469, 0, 'no'),
(6, 'Vineeth A V', 'Kilimanoor', 'mail2avvineeth@gmail.com', '9087654321', 'vineeth', '1', '1', 'volunteer', 'mail2avvineeth@gmail.com.jpg', 8.76629, 76.886, 0, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `sptype_tbl`
--

CREATE TABLE IF NOT EXISTS `sptype_tbl` (
  `sptype_id` int(11) NOT NULL AUTO_INCREMENT,
  `sptype_name` varchar(300) NOT NULL,
  PRIMARY KEY (`sptype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sptype_tbl`
--

INSERT INTO `sptype_tbl` (`sptype_id`, `sptype_name`) VALUES
(1, 'Medical'),
(2, 'Transportation'),
(3, 'Food'),
(4, 'Water'),
(6, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE IF NOT EXISTS `state_tbl` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  `sadmin_name` varchar(200) NOT NULL,
  `sadmin_emailid` varchar(300) NOT NULL,
  `sadmin_password` varchar(100) NOT NULL,
  `sadmin_contact` varchar(100) NOT NULL,
  `sadmin_photo` varchar(300) NOT NULL,
  `sadmin_status` int(10) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`state_id`, `state_name`, `sadmin_name`, `sadmin_emailid`, `sadmin_password`, `sadmin_contact`, `sadmin_photo`, `sadmin_status`) VALUES
(1, 'Kerala', 'Maria Mathews', 'maria15arackal@gmail.com', 'maria123', '9656864875', 'maria15arackal@gmail.com.jpg', 0),
(2, 'Karnataka', '0', '0', '0', '0', '0', 0),
(3, 'Tamilnadu', '0', '0', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userzone_tbl`
--

CREATE TABLE IF NOT EXISTS `userzone_tbl` (
  `userzone_id` int(11) NOT NULL AUTO_INCREMENT,
  `userzone_email` varchar(500) NOT NULL,
  `zone_id` varchar(200) NOT NULL,
  PRIMARY KEY (`userzone_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `userzone_tbl`
--

INSERT INTO `userzone_tbl` (`userzone_id`, `userzone_email`, `zone_id`) VALUES
(1, 'mathews2arackal@gmail.com', '1'),
(2, 'homemedicare000@gmail.com', '1'),
(3, 'keerthikrishnakumarkk@gmail.com', '1'),
(4, 'keerthikrishnakumarkk@gmail.com', '2'),
(5, 'homemedicare000@gmail.com', '2'),
(6, 'mathews2arackal@gmail.com', '2'),
(7, 'patel.vishnu16@gmail.com', '2'),
(8, 'keerthikrishnakumarkk@gmail.com', '3'),
(9, 'patel.vishnu16@gmail.com', '3'),
(10, 'homemedicare000@gmail.com', '3'),
(11, 'mathews2arackal@gmail.com', '3'),
(12, 'keerthikrishnakumarkk@gmail.com', '5'),
(13, 'homemedicare000@gmail.com', '5'),
(14, 'mathews2arackal@gmail.com', '5');

-- --------------------------------------------------------

--
-- Table structure for table `zonecreate_tbl`
--

CREATE TABLE IF NOT EXISTS `zonecreate_tbl` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(100) NOT NULL,
  `zone_lat` float NOT NULL,
  `zone_long` float NOT NULL,
  `zone_district` varchar(300) NOT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `zonecreate_tbl`
--

INSERT INTO `zonecreate_tbl` (`zone_id`, `zone_name`, `zone_lat`, `zone_long`, `zone_district`) VALUES
(1, 'Trivandrum Central Zone', 8.4869, 76.9528, 'carolinmathewsarackal@gmail.com'),
(2, 'Karyavattom Zone', 8.5678, 76.8908, 'carolinmathewsarackal@gmail.com'),
(3, 'vattapara Zone', 8.5927, 76.9499, 'carolinmathewsarackal@gmail.com'),
(4, 'Ponmudi Zone', 8.7599, 77.1169, 'carolinmathewsarackal@gmail.com'),
(5, 'peroorkada Zone', 8.5428, 76.966, 'carolinmathewsarackal@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
