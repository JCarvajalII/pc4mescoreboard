-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 08:21 AM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demohelpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

REPLACE INTO `category` (`categoryid`, `categoryvalue`) VALUES
(22, 'Electric Cross Over'),
(23, 'Crossovers'),
(24, 'Limited Editions'),
(25, 'Cars'),
(26, 'Certified Pre-owned');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cemail` varchar(300) NOT NULL DEFAULT 'NONE',
  `clname` varchar(300) DEFAULT NULL,
  `cfname` varchar(300) NOT NULL,
  `cmname` varchar(300) DEFAULT NULL,
  `caddress` text,
  `cmobileno` varchar(300) DEFAULT NULL,
  `cotherno` varchar(100) DEFAULT NULL,
  `cpassword` varchar(300) DEFAULT NULL,
  `deviceid` varchar(500) DEFAULT NULL,
  `customer_time_stamp` varchar(500) DEFAULT NULL,
  `ccompany` varchar(500) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

REPLACE INTO `customer` (`customerid`, `cemail`, `clname`, `cfname`, `cmname`, `caddress`, `cmobileno`, `cotherno`, `cpassword`, `deviceid`, `customer_time_stamp`, `ccompany`) VALUES
(1, 'nivlec@gmail.com', 'Doe', 'John', '', '', '09468147457', '', '', NULL, NULL, 'Evenly Ten'),
(2, 'kim@pc4me.com.ph', 'Galvez', 'Kimberly', '', 'San Fernando City, La Union', '09218720246', '', '09218720246', NULL, NULL, ''),
(3, 'none', 'Tan', 'David', '', 'San Fernando City, La Union', '09225158355', '', '09225158355', NULL, NULL, 'Mitsubishi'),
(4, 'webdev@pc4me.com.ph', 'Bautista', 'Mclen', '', 'San Fernando City, La Union', '09129077114', '', '', NULL, NULL, ''),
(5, 'edgee@pc4me.com.ph', 'Zarsadias', 'Edgee', '', '', '09205771000', '', '09205771000', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `departmentid` bigint(20) NOT NULL AUTO_INCREMENT,
  `departmentvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`departmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

REPLACE INTO `department` (`departmentid`, `departmentvalue`) VALUES
(4, 'Car servicing'),
(5, 'Tyres'),
(6, 'Brakes'),
(7, 'Car Repairs'),
(8, 'Batteries'),
(9, 'Car Care');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `priority`;
CREATE TABLE IF NOT EXISTS `priority` (
  `priorityid` bigint(20) NOT NULL AUTO_INCREMENT,
  `priorityvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`priorityid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

REPLACE INTO `priority` (`priorityid`, `priorityvalue`) VALUES
(2, 'Under Warranty - c/o'),
(5, 'VIP customer'),
(6, 'Under Warranty Cars'),
(7, 'Under Warranty Cars c/o'),
(8, 'Out of Warranty Cars'),
(9, 'Out of warranty Cars c/o');

-- --------------------------------------------------------

--
-- Table structure for table `remarks_agent`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `remarks_agent`;
CREATE TABLE IF NOT EXISTS `remarks_agent` (
  `aremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aticketid` bigint(20) DEFAULT NULL,
  `aremarks_info` text,
  `atime_stamp` varchar(500) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `replytype` varchar(500) DEFAULT 'TEXT',
  `n_email` int(11) NOT NULL DEFAULT '0',
  `n_sms` int(11) NOT NULL DEFAULT '0',
  `n_mobile` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aremarksid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks_agent`
--

REPLACE INTO `remarks_agent` (`aremarksid`, `aticketid`, `aremarks_info`, `atime_stamp`, `uid`, `replytype`, `n_email`, `n_sms`, `n_mobile`) VALUES
(1, 1, 'thank you!!', '2018-04-23 22:09:00', 1, 'TEXT', 0, 1, 0),
(2, 1, 'thank you!! salamat!', '2018-04-23 22:09:25', 1, 'TEXT', 1, 0, 0),
(3, 2, 'Welcome! This is PC4Me. Your ticket #', '2018-04-24 09:08:49', 1, 'TEXT', 0, 1, 0),
(6, 2, 'welcome', '2018-04-24 09:17:30', 1, 'TEXT', 1, 0, 0),
(7, 2, 'welcome', '2018-04-24 09:20:28', 1, 'TEXT', 1, 0, 0),
(8, 5, '5_1524554920.jpg', '2018-04-24 15:28:40', 1, 'image/jpeg', 0, 0, 0),
(9, 5, 'Hi your car is ready for pickup. please prepare your payment.', '2018-05-15 13:35:47', 1, 'TEXT', 1, 1, 1),
(10, 5, 'test api', '2018-05-16 10:32:11', 28, 'TEXT', 0, 1, 0),
(11, 6, 'test', '2018-05-16 13:56:52', 28, 'TEXT', 0, 1, 0),
(12, 5, 'test email', '2018-05-17 10:29:53', 28, 'TEXT', 0, 0, 0),
(13, 5, 'test email', '2018-05-17 10:33:48', 28, 'TEXT', 0, 0, 0),
(14, 5, 'test emailtest', '2018-05-17 10:35:01', 28, 'TEXT', 0, 0, 0),
(15, 5, 'test emailtestfsaf', '2018-05-17 10:44:50', 28, 'TEXT', 1, 0, 0),
(16, 5, 'sfafas', '2018-05-17 10:48:54', 28, 'TEXT', 1, 0, 0),
(17, 5, 'sgsdgsadgdasgd', '2018-05-17 10:52:49', 28, 'TEXT', 1, 0, 0),
(18, 5, 'sgsdgsadgdasgd', '2018-05-17 10:55:31', 28, 'TEXT', 1, 0, 0),
(19, 5, 'gsg', '2018-05-17 10:56:52', 28, 'TEXT', 1, 0, 0),
(20, 5, 'gdff', '2018-05-17 10:58:00', 28, 'TEXT', 1, 0, 0),
(21, 5, 'fsd', '2018-05-17 10:59:13', 28, 'TEXT', 1, 0, 0),
(22, 5, 'fsdafsfas', '2018-05-17 10:59:35', 28, 'TEXT', 1, 0, 0),
(23, 5, 'fsdafsfasdsfgds', '2018-05-17 11:00:49', 28, 'TEXT', 1, 0, 0),
(24, 5, 'fsdafsfasdsfgdsgaga', '2018-05-17 11:02:37', 28, 'TEXT', 1, 0, 0),
(25, 5, 'TEeeeeest', '2018-05-17 11:27:15', 28, 'TEXT', 0, 0, 0),
(26, 5, 'TEeeeeest 2', '2018-05-17 11:27:25', 28, 'TEXT', 0, 0, 0),
(27, 5, 'email pc4me', '2018-05-17 11:27:38', 28, 'TEXT', 1, 0, 0),
(28, 5, 'Welcome to PC4Me Tech Support. This is your Ticket# and you will be receiving updates from now on. Thank you and Have a good day!', '2018-05-17 11:36:40', 28, 'TEXT', 1, 0, 0),
(29, 5, 'PC4Me Helpdesk. Your unit has been diagnosed, for more info please call our contact numbers; 0919992205 09175005430 607-2249 and look for Jhemuel. Thank You', '2018-05-17 11:40:24', 28, 'TEXT', 1, 0, 0),
(30, 6, 'Welcome to PC4Me Tech Support. This is your Ticket# 6 and you will be receiving updates from now on. Thank you and Have a good day!', '2018-05-17 13:05:10', 28, 'TEXT', 1, 0, 0),
(31, 6, 'PC4Me Helpdesk. Your unit has been diagnosed, for more info please call our contact numbers; 0919992205 09175005430 607-2249 and look for Jhemuel. Thank You', '2018-05-17 13:45:40', 28, 'TEXT', 1, 0, 0),
(32, 5, 'Test', '2018-05-17 14:05:19', 28, 'TEXT', 1, 0, 0),
(33, 5, '\n2018-05-17 11:40:24 John\n\nPC4Me Helpdesk. Your unit has been diagnosed, for more info please call our contact numbers; 0919992205 09175005430 607-2249 and look for Jhemuel. Thank You', '2018-05-17 18:01:17', 28, 'TEXT', 1, 0, 0),
(34, 5, 'asfsad', '2018-05-18 09:52:56', 28, 'TEXT', 1, 0, 0),
(35, 5, 'asfsadagasd', '2018-05-18 09:53:36', 28, 'TEXT', 1, 0, 0),
(36, 5, 'asgagad', '2018-05-18 09:54:19', 28, 'TEXT', 1, 0, 0),
(37, 5, 'sgdsa', '2018-05-18 09:54:58', 28, 'TEXT', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `remarks_customer`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `remarks_customer`;
CREATE TABLE IF NOT EXISTS `remarks_customer` (
  `cremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cticketid` bigint(20) DEFAULT NULL,
  `cremarks_info` text,
  `ctime_stamp` varchar(500) NOT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `creplytype` varchar(500) DEFAULT 'TEXT',
  PRIMARY KEY (`cremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks_file`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `remarks_file`;
CREATE TABLE IF NOT EXISTS `remarks_file` (
  `fremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `fticketid` bigint(20) DEFAULT NULL,
  `fremarks_info` varchar(500) DEFAULT NULL,
  `ftime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fuid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`fremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `templateid` bigint(20) NOT NULL AUTO_INCREMENT,
  `templatedescription` text,
  `templatefield` varchar(500) NOT NULL,
  PRIMARY KEY (`templateid`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

REPLACE INTO `template` (`templateid`, `templatedescription`, `templatefield`) VALUES
(37, 'Wheel Alignment', 'Problem'),
(38, 'For Tire Check', 'Problem'),
(39, 'Puncture Repair', 'Problem');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--
-- Creation: May 16, 2018 at 09:13 AM
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `ticketid` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryid` varchar(500) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `priority` varchar(300) DEFAULT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `assignedto_uid` bigint(20) DEFAULT NULL,
  `problem` text,
  `description` text,
  `history` text,
  `special_instruction` text,
  `serialno` varchar(500) DEFAULT NULL,
  `departmentid` varchar(500) DEFAULT NULL,
  `addedbyuid` bigint(20) DEFAULT NULL,
  `time_stamp` varchar(500) NOT NULL,
  `due_date` date DEFAULT NULL,
  `ticket_status` varchar(500) NOT NULL DEFAULT 'ACTIVE',
  `internal_notes` text,
  PRIMARY KEY (`ticketid`),
  KEY `categoryid` (`categoryid`),
  KEY `customerid` (`customerid`),
  KEY `assignedto_uid` (`assignedto_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

REPLACE INTO `tickets` (`ticketid`, `categoryid`, `status`, `priority`, `customerid`, `assignedto_uid`, `problem`, `description`, `history`, `special_instruction`, `serialno`, `departmentid`, `addedbyuid`, `time_stamp`, `due_date`, `ticket_status`, `internal_notes`) VALUES
(1, 'Others', 'Open', 'Under Warranty - PC4Me', 1, 1, 'No Display', 'Laptop Model:  Unit Password:  Operating System: Accessories:', '', '', '3414bdf345', 'Technical', 1, '2018-04-23 22:08:50', '2018-04-23', 'ACTIVE', NULL),
(2, 'Laptop', 'Pickup', 'Under Warranty - PC4Me', 2, 9, 'Slow boot up', 'color black', 'naghang', '', '0989798', 'Technical', 1, '2018-04-24 09:08:02', '2018-04-26', 'ACTIVE', NULL),
(3, 'Laptop', 'Open', 'Under Warranty - PC4Me', 3, 11, 'No OS found, for diagnosis', 'Laptop\nModel: Lenovo Thinkpad\nAccessories: Charger and Bag\n', 'Biglang nag off', 'don\'t erase files', '1212243214', 'Technical', 1, '2018-04-24 09:12:55', '2018-04-27', 'ACTIVE', ''),
(4, 'Cars', 'Open', 'Under Warranty - c/o', 4, 1, 'Wheel Alignment', 'Model: 2018 Mirage G4\nColor: Black\nAccessories: Dash Cam\n', 'running flat', 'Huwag gasgasan', 'VT 0989', 'Car servicing', 1, '2018-04-24 09:56:49', '2018-04-24', 'ACTIVE', NULL),
(5, 'Cars', 'Open', 'Under Warranty - c/o', 4, 11, 'Wheel Alignment', 'Mirage g4\nred\nPlate Number qwe123', '', '', '', 'Car servicing', 1, '2018-04-24 15:27:48', '2018-04-25', 'ACTIVE', NULL),
(6, 'Electric Cross Over', 'Open', 'Under Warranty - c/o', 5, 1, 'Change oil', 'descripti', '', '', '', 'Car servicing', 28, '2018-05-16 13:56:46', '2018-05-16', 'ACTIVE', NULL),
(7, 'Electric Cross Over', 'Open', 'Under Warranty - c/o', 5, 1, 'Walang problema', 'description', '', '', '', 'Car servicing', 28, '2018-05-17 13:03:37', '2018-05-17', 'ACTIVE', NULL),
(8, 'Electric Cross Over', 'Open', 'Under Warranty - c/o', 5, 1, 'Walang problema', 'description', '', '', '', 'Car servicing', 28, '2018-05-17 13:03:51', '2018-05-17', 'ACTIVE', NULL),
(9, 'Electric Cross Over', 'Open', 'VIP customer', 1, 1, 'For Tire Check', 'Honda', '', '', '1231231', 'Brakes', 28, '2018-05-18 09:58:08', '2018-05-18', 'ACTIVE', NULL),
(10, 'Limited Editions', 'Open', 'Under Warranty - c/o', 2, 1, 'For Tire Check', 'Civic', 'One Direction', '', '', 'Car servicing', 28, '2018-05-18 09:59:23', '2018-05-18', 'ACTIVE', NULL),
(11, 'Cars', 'Open', 'VIP customer', 4, 6, 'Vrooom Vrooom!', 'Supraaa', '', '', '121231', 'Car servicing', 28, '2018-05-18 10:12:02', '2018-05-18', 'ACTIVE', NULL),
(12, 'Electric Cross Over', 'Open', 'Under Warranty - c/o', 4, 1, 'MOMO brakes', 'Red Colored', '', '', '', 'Brakes', 28, '2018-05-18 10:13:07', '2018-05-18', 'ACTIVE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets_log`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `tickets_log`;
CREATE TABLE IF NOT EXISTS `tickets_log` (
  `tlogid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `remarks` text,
  `updatedby` bigint(20) DEFAULT NULL,
  `time_stamp` varchar(500) NOT NULL,
  PRIMARY KEY (`tlogid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets_log`
--

REPLACE INTO `tickets_log` (`tlogid`, `ticketid`, `status`, `remarks`, `updatedby`, `time_stamp`) VALUES
(4, 2, 'Pickup', 'Changed Status from Open to Pickup', 1, '2018-04-24 09:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_timeline`
--
-- Creation: May 16, 2018 at 09:10 AM
--

DROP TABLE IF EXISTS `tickets_timeline`;
CREATE TABLE IF NOT EXISTS `tickets_timeline` (
  `ttimeid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `action` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ttimeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: May 16, 2018 at 09:13 AM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'staff',
  `ustatus` varchar(1) NOT NULL,
  `mobileno` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `otherno` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

REPLACE INTO `users` (`uid`, `username`, `password`, `name`, `usertype`, `ustatus`, `mobileno`, `email`, `otherno`) VALUES
(1, 'admin', '61152c80d1514e22fba66002597d0104', 'Admin', 'admin', '1', NULL, NULL, NULL),
(6, 'juan', '3ebc20ab7ce67593f9a682299af68290', 'Juan Doe', 'staff', '', NULL, NULL, NULL),
(7, 'technician', 'c6ba9aae41e89d85ebb01b6614c2fc18', 'Technician One', 'staff', '', NULL, NULL, NULL),
(8, 'edgee', '7cc6cf1029cba3e09f1a4e74cb6da04f', 'Edgee', 'admin', '', NULL, NULL, NULL),
(9, 'Bryan', '7d4ef62de50874a4db33e6da3ff79f75', 'Bryan Haban', 'admin', '', NULL, NULL, NULL),
(11, 'leomar', 'b4ab98904f1ef66ddc9578bf712fac50', 'Leomar Patungan', 'staff', '', NULL, NULL, NULL),
(12, 'gemo', '97558594c7d508b14b8442eb856ae5db', 'Gemo Gacayan', 'admin', '', NULL, NULL, NULL),
(13, 'alex', 'be484458f8f0553947356cdff72c2ef6', 'Alex B. Menor', 'staff', '', NULL, NULL, NULL),
(16, 'Seadjae', '30b7573377d0ef727c77900ac6374911', 'Sea Djae Hidalgo', 'staff', '', NULL, NULL, NULL),
(17, 'Mark', '8c93ba1d5124424ce03b7dd0dedc95d7', 'Mark Jhun Cabiladas', 'staff', '', NULL, NULL, NULL),
(18, 'marianne', '427b76dc7e87da1fb89798268f304f8a', 'Marianne Bactad', 'staff', '', NULL, NULL, NULL),
(19, 'Tam', 'c12bf2d6d64c1d2178bdc4c806fe1d48', 'Tam', 'admin', '', NULL, NULL, NULL),
(21, 'Rey-ann', '7e38b09da18bd474296d6ffc55a8f4fb', 'rey-ann c olegario', 'staff', '', NULL, NULL, NULL),
(22, 'mech', 'f7ff8b3b2c106010635c9252ab4c4a66', 'Mechelle Abubo', 'staff', '', NULL, NULL, NULL),
(23, 'demoaccount', '535a7a02256c3d4722da99e9caecf397', 'PC4Me Demo', 'staff', '', NULL, NULL, NULL),
(24, 'Jhemuel', '09981d31823479d455fa1db8cb5d1f09', 'Jhemuel Llagas', 'staff', '', NULL, NULL, NULL),
(25, 'joven', 'c0b28bfd723302d2bbfc91195b6ac788', 'Joven Legaspi', 'staff', '', NULL, NULL, NULL),
(26, 'diana', '3a23bb515e06d0e944ff916e79a7775c', 'Diana Bermudez', 'staff', '', NULL, NULL, NULL),
(27, 'kim', '1aa60940328c6b4d436ca21e43eeec6e', 'Kimberly Galvez', 'staff', '', NULL, NULL, NULL),
(28, 'john', '527bd5b5d689e2c32ae974c6229ff785', 'John', 'staff', '', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
