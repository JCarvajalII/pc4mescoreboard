-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 11:26 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoreboarddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticketsday`
--

CREATE TABLE `ticketsday` (
  `td_id` int(11) NOT NULL,
  `open_ticket_day` int(11) NOT NULL,
  `overdue_ticket_day` int(11) DEFAULT NULL,
  `pickup_ticket_day` int(11) DEFAULT NULL,
  `orderedpart_ticket_day` int(11) DEFAULT NULL,
  `rma_ticket_day` int(11) DEFAULT NULL,
  `score_day` double(16,2) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketsday`
--

INSERT INTO `ticketsday` (`td_id`, `open_ticket_day`, `overdue_ticket_day`, `pickup_ticket_day`, `orderedpart_ticket_day`, `rma_ticket_day`, `score_day`, `date`) VALUES
(1, 20, 5, 5, 7, 2, 90.00, '2018-06-22 00:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `ticketsmonth`
--

CREATE TABLE `ticketsmonth` (
  `tm_id` int(11) NOT NULL,
  `total_open_ticket` int(11) NOT NULL,
  `total_overdue_ticket` int(11) NOT NULL,
  `total_pickup_ticket` int(11) NOT NULL,
  `total_orderedpart_ticket` int(11) NOT NULL,
  `total_rma_ticket` int(11) NOT NULL,
  `score_month` double(16,2) NOT NULL,
  `date` datetime NOT NULL,
  `td_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticketsday`
--
ALTER TABLE `ticketsday`
  ADD PRIMARY KEY (`td_id`);

--
-- Indexes for table `ticketsmonth`
--
ALTER TABLE `ticketsmonth`
  ADD PRIMARY KEY (`tm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticketsday`
--
ALTER TABLE `ticketsday`
  MODIFY `td_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticketsmonth`
--
ALTER TABLE `ticketsmonth`
  MODIFY `tm_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
