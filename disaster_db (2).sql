-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 01:21 PM
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
-- Table structure for table `add_sp`
--

CREATE TABLE IF NOT EXISTS `add_sp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `con` varchar(150) NOT NULL,
  `em` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `pass` varchar(150) NOT NULL,
  `did` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_sp`
--

INSERT INTO `add_sp` (`id`, `nme`, `con`, `em`, `addr`, `pass`, `did`, `st`) VALUES
(1, 'Mathew M', '9876543210', 'ma@gmail.com', 'uhcjbhbcjhbchjdbhjbfhjb', '123', 'carolinmathewsarackal@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ad_msg`
--

CREATE TABLE IF NOT EXISTS `ad_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` varchar(150) NOT NULL,
  `dat` date NOT NULL,
  `msg` text NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ad_msg`
--

INSERT INTO `ad_msg` (`id`, `did`, `dat`, `msg`, `st`) VALUES
(4, '2', '2018-10-31', 'Good work everyone', 0),
(5, '2', '2018-10-29', 'Thanks for all your Support', 0),
(6, '2', '2018-10-31', 'Thank you  for all your support', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subj` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `des` text NOT NULL,
  `t_st` varchar(150) NOT NULL,
  `did` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `typ` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `subj`, `la`, `lo`, `des`, `t_st`, `did`, `dt`, `typ`, `st`) VALUES
(2, 'Heavy Rain In Trivandrum', 8.49012, 76.9469, 'With Southwest Monsoon officially coming to an end On September 30, the conditions have now become favorable for setting in of Northeast Monsoon.\n\nThe winds are soon likely to change their direction and start blowing from the east which would lead to rains over Kerala. However, due to these easterly winds, little depletion of moisture takes places when the winds move inland. Therefore, the state does record good rains during the season but lesser than the Southwest Monsoon.\n\nIn wake of this, Kerala has already started recording rains of varying intensity. Since the last couple of days, the state of Kerala has been receiving good rainfall activity on account of the cyclonic circulation over Sri Lanka and adjoining Southwest Bay of Bengal.\n\nAlong with this, at present, ITCZ (Inter Tropical Convergence Zone) is also lying close to the equator, with series of embedded cyclonic circulations, moving from east to west direction.\n\n- See more at: https://www.skymetweather.com/content/weather-news-and-analysis/rain-in-kerala-to-continue-heavy-rains-likely-october-4-onwards/#sthash.3po7CjRo.dpuf', 'Low Alert', 'carolinmathewsarackal@gmail.com', '2018-10-26', 'alert', 0);

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
(3, 0, 'Ernakulam', '0', '0', '0', '0', '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE IF NOT EXISTS `don` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` date NOT NULL,
  `amt` varchar(150) NOT NULL,
  `did` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `don`
--

INSERT INTO `don` (`id`, `dt`, `amt`, `did`, `st`) VALUES
(1, '2018-11-05', '25000', '2', 0),
(2, '2018-11-07', '25000', '2', 0),
(3, '2018-11-05', '50000', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emg`
--

CREATE TABLE IF NOT EXISTS `emg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subj` varchar(150) NOT NULL,
  `la` varchar(150) NOT NULL,
  `lo` varchar(150) NOT NULL,
  `des` varchar(150) NOT NULL,
  `t_st` varchar(150) NOT NULL,
  `did` varchar(150) NOT NULL,
  `dt` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(12, 'mail2avvineeth@gmail.com', 'vineeth', 'volunteer', 1),
(15, 'ma@gmail.com', '123', 'sp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `msg` text NOT NULL,
  `did` varchar(150) NOT NULL,
  `dst_id` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `uid`, `msg`, `did`, `dst_id`, `dt`, `st`) VALUES
(1, 'mathews2arackal@gmail.com', 'Just cleared the south side of the district everyone is ok', '2', 'carolinmathewsarackal@gmail.com', '2018-10-29', 0),
(2, 'mathews2arackal@gmail.com', 'And Every One is ok', '2', 'carolinmathewsarackal@gmail.com', '2018-10-29', 0),
(3, 'patel.vishnu16@gmail.com', 'There is some chance rain will effect the north side of district', '2', 'carolinmathewsarackal@gmail.com', '2018-10-30', 0),
(4, 'patel.vishnu16@gmail.com', 'Good job everyone', '2', 'carolinmathewsarackal@gmail.com', '2018-10-31', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registersp_tbl`
--

INSERT INTO `registersp_tbl` (`sp_id`, `sp_type`, `sp_name`, `sp_email`, `sp_state`, `sp_district`, `sp_password`, `sp_address`, `sp_phone`, `sp_latitude`, `sp_longitude`) VALUES
(2, '2', 'Gowri Transport', 'patel.vishnu16@gmail.com', '1', '1', '123', ' jdsnkvnskjvnskvnkdsnvkjdsnvkjdvnjdn                               \r\n                                ', '9037542464', 8.4986, 76.9461);

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
-- Table structure for table `rev`
--

CREATE TABLE IF NOT EXISTS `rev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(150) NOT NULL,
  `des` text NOT NULL,
  `did` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rev`
--

INSERT INTO `rev` (`id`, `tit`, `des`, `did`, `st`) VALUES
(1, 'Big loss to Kerala', 'Heavy loss and death count to this disaster..Thank you for all who volunteer to help to overcome this', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ser`
--

CREATE TABLE IF NOT EXISTS `ser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(150) NOT NULL,
  `nme` varchar(150) NOT NULL,
  `qnt` varchar(150) NOT NULL,
  `dt` date NOT NULL,
  `sid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ser`
--

INSERT INTO `ser` (`id`, `cate`, `nme`, `qnt`, `dt`, `sid`, `st`) VALUES
(2, 'Clothes', 'Shirt', '120', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(3, 'Medicine', 'Dolo360', '211', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(4, 'Food', 'Rice 1kg', '45', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(5, 'Food', 'bread', '5', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(6, 'Electronics', 'Battery', '12', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(7, 'Medicine', 'Omiz', '199', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(8, 'Clothes', 'Shoes', '10', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0),
(9, 'Food', 'No Sugar Biscuts', '15', '2018-11-26', 'carolinmathewsarackal@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ser_req`
--

CREATE TABLE IF NOT EXISTS `ser_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(150) NOT NULL,
  `pro_nme` varchar(150) NOT NULL,
  `qnt` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `spid` varchar(150) NOT NULL,
  `mid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ser_req`
--

INSERT INTO `ser_req` (`id`, `pro_id`, `pro_nme`, `qnt`, `sid`, `spid`, `mid`, `st`) VALUES
(3, 'Medicine', 'Dolo360', '1', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '3', 0),
(4, 'Clothes', 'Shirt', '20', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '3', 0),
(5, 'Clothes', 'Shoes', '5', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '3', 0),
(6, 'Electronics', 'Battery', '5', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '3', 0),
(7, 'Clothes', 'Shoes', '4', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '2', 0),
(8, 'Medicine', 'Omiz', '1', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '2', 0),
(9, 'Electronics', 'Battery', '3', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '2', 0),
(10, 'Food', 'No Sugar Biscuts', '5', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '2', 0),
(11, 'Food', 'Rice 1kg', '5', 'carolinmathewsarackal@gmail.com', 'ma@gmail.com', '2', 0);

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
-- Table structure for table `s_req`
--

CREATE TABLE IF NOT EXISTS `s_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(150) NOT NULL,
  `des` text NOT NULL,
  `ph` varchar(150) NOT NULL,
  `dt` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `did` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `s_req`
--

INSERT INTO `s_req` (`id`, `tit`, `des`, `ph`, `dt`, `uid`, `did`, `st`) VALUES
(2, 'Very Important', 'things in the list is needed', 'a.png', '2018-11-26', 'ma@gmail.com', 'carolinmathewsarackal@gmail.com', 0),
(3, 'Urgent Request', 'Very important  list is given below', '1.jpg', '2018-11-26', 'ma@gmail.com', 'carolinmathewsarackal@gmail.com', 0);

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
