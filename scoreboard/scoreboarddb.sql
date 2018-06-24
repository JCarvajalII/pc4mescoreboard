CREATE DATABASE  IF NOT EXISTS `scoreboarddb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `scoreboarddb`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: scoreboarddb
-- ------------------------------------------------------
-- Server version	5.6.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ticketsday`
--

DROP TABLE IF EXISTS `ticketsday`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticketsday` (
  `td_id` int(11) NOT NULL AUTO_INCREMENT,
  `open_ticket_day` int(11) DEFAULT NULL,
  `overdue_ticket_day` int(11) DEFAULT NULL,
  `pickup_ticket_day` int(11) DEFAULT NULL,
  `orderedpart_ticket_day` int(11) DEFAULT NULL,
  `rma_ticket_day` int(11) DEFAULT NULL,
  `openticket_score` int(11) DEFAULT NULL,
  `overdueticket_score` int(11) DEFAULT NULL,
  `pickupticket_score` int(11) DEFAULT NULL,
  `orderedpartticket_score` int(11) DEFAULT NULL,
  `rmaticket_score` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`td_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticketsday`
--

LOCK TABLES `ticketsday` WRITE;
/*!40000 ALTER TABLE `ticketsday` DISABLE KEYS */;
INSERT INTO `ticketsday` VALUES (1,5,3,6,8,2,150,85,150,85,115,'2018-06-24 17:12:13'),(2,3,2,6,1,2,150,85,145,85,115,'2018-06-24 21:22:47');
/*!40000 ALTER TABLE `ticketsday` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticketsmonth`
--

DROP TABLE IF EXISTS `ticketsmonth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticketsmonth` (
  `tm_id` int(11) NOT NULL AUTO_INCREMENT,
  `total_open_ticket` int(11) NOT NULL,
  `total_overdue_ticket` int(11) NOT NULL,
  `total_pickup_ticket` int(11) NOT NULL,
  `total_orderedpart_ticket` int(11) NOT NULL,
  `total_rma_ticket` int(11) NOT NULL,
  `score_month` double(16,2) NOT NULL,
  `date` datetime NOT NULL,
  `td_id` int(11) NOT NULL,
  PRIMARY KEY (`tm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticketsmonth`
--

LOCK TABLES `ticketsmonth` WRITE;
/*!40000 ALTER TABLE `ticketsmonth` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticketsmonth` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-24 21:28:48
