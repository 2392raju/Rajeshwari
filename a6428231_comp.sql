-- MySQL dump 10.13  Distrib 5.1.57, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: a6428231_comp
-- ------------------------------------------------------
-- Server version	5.1.57
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_info` (
  `admin_uname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `admin_pwd` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_info`
--

LOCK TABLES `admin_info` WRITE;
/*!40000 ALTER TABLE `admin_info` DISABLE KEYS */;
INSERT INTO `admin_info` VALUES ('admin','123abc');
/*!40000 ALTER TABLE `admin_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_data`
--

DROP TABLE IF EXISTS `category_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_data` (
  `category_name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `category_desc` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `category_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `category_passwd` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `category_email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `category_contact` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_data`
--

LOCK TABLES `category_data` WRITE;
/*!40000 ALTER TABLE `category_data` DISABLE KEYS */;
INSERT INTO `category_data` VALUES ('KEB','kllug','keb','keb','hlksd','918147260914'),('HDMC','Corporation','hdmc','hdmc','hdmc@gmail.com','9999999999'),('HESCOM','hescom','hescom','abc','adc@gmail.com','917795343350');
/*!40000 ALTER TABLE `category_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint_images`
--

DROP TABLE IF EXISTS `complaint_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint_images` (
  `complaint_no` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `sim_no` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `imagesrc` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `comment` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `cid` varchar(2) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint_images`
--

LOCK TABLES `complaint_images` WRITE;
/*!40000 ALTER TABLE `complaint_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaint_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint_images_updated`
--

DROP TABLE IF EXISTS `complaint_images_updated`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint_images_updated` (
  `complaint_no` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `imagesrc` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `comment` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `timestamp` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `location` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `cid` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `status_code` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`complaint_no`)
) ENGINE=MyISAM AUTO_INCREMENT=10077 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint_images_updated`
--

LOCK TABLES `complaint_images_updated` WRITE;
/*!40000 ALTER TABLE `complaint_images_updated` DISABLE KEYS */;
INSERT INTO `complaint_images_updated` VALUES (10047,'89914500050187077389','complaintimages/89914500050187077389_snapshot_7.png','vhh ','11-Apr-2014 5:18:57 pm','Khalur Layout\nHubli, Karnataka\n Hubli, Karnataka 580021\n Hubli, Karnataka\n','Resolved','0','1'),(10033,'89914500050082823788','complaintimages/89914500050082823788_snapshot_20.png','Yo','Apr 6, 2014 12:21:06 PM','no location detected','Not yet serviced','0','Res'),(10034,'89914500050187077389','complaintimages/89914500050187077389_snapshot_2.png','cribbing by ','06-Apr-2014 12:25:54 pm','Khalur Layout\nHubli, Karnataka\n Hubli, Karnataka 580021\n Hubli, Karnataka\n','Not yet serviced','0',''),(10026,'89910341610275099925','complaintimages/89910341610275099925_snapshot_1.png','kl','01-Mar-2014 9:38:43 AM','no location detected','Not yet serviced','0',''),(10027,'89910341210309307442','complaintimages/89910341210309307442_snapshot_1.png','','Mar 1, 2014 10:55:33 AM','no location detected','Resolved','0','1'),(10028,'89910341210309307442','complaintimages/89910341210309307442_snapshot_3.png','','Mar 1, 2014 12:28:59 PM','no location detected','Resolved','1','1'),(10030,'89914500050082823788','complaintimages/89914500050082823788_snapshot_18.png','zindagi ki lakir','Mar 22, 2014 12:41:20 PM','no location detected','Not yet serviced','1',''),(10031,'89914500050082823788','complaintimages/89914500050082823788_snapshot_19.png','sample','Apr 4, 2014 9:08:55 AM','no location detected','Not yet serviced','1',''),(10032,'89914500050187077389','complaintimages/89914500050187077389_snapshot_1.png','sample ','06-Apr-2014 12:03:32 pm','Khalur Layout\nHubli, Karnataka\n Hubli, Karnataka 580021\n Hubli, Karnataka\n','Not yet serviced','0',''),(10035,'89910341610275099925','complaintimages/89910341610275099925_snapshot_1.png','pgjni','07-Apr-2014 9:44:53 AM','no location detected','Not yet serviced','0',''),(10036,'89910341610275099925','complaintimages/89910341610275099925_snapshot_4.png','','07-Apr-2014 10:19:51 AM','no location detected','Not yet serviced','1',''),(10037,'89910341610275099925','complaintimages/89910341610275099925_snapshot_5.png','','07-Apr-2014 10:20:33 AM','no location detected','Not yet serviced','1',''),(10038,'89914500050187077389','complaintimages/89914500050187077389_snapshot_5.png','ft n ','07-Apr-2014 10:20:31 am','no location detected','Not yet serviced','1',''),(10039,'89914500050187077389','complaintimages/89914500050187077389_snapshot_6.png','du b ','07-Apr-2014 10:22:59 am','no location detected','Not yet serviced','0',''),(10040,'89914500050082823788','complaintimages/89914500050082823788_snapshot_21.png','Pendrive','Apr 7, 2014 10:40:38 AM','no location detected','Not yet serviced','0',''),(10041,'89914500050082823788','complaintimages/89914500050082823788_snapshot_22.png','Sample1','Apr 7, 2014 10:48:18 AM','no location detected','Not yet serviced','0',''),(10042,'89914500050082823788','complaintimages/89914500050082823788_snapshot_23.png','refyj','Apr 7, 2014 10:54:44 AM','no location detected','Not yet serviced','0',''),(10043,'89910341610275099925','complaintimages/89910341610275099925_snapshot_5.png','','07-Apr-2014 1:20:57 PM','no location detected','Not yet serviced','0',''),(10044,'89910341610275099925','complaintimages/89910341610275099925_snapshot_6.png','ise dpt','07-Apr-2014 1:22:57 PM','no location detected','Not yet serviced','1',''),(10045,'89910341610275099925','complaintimages/89910341610275099925_snapshot_8.png','','07-Apr-2014 2:51:12 PM','no location detected','Not yet serviced','0',''),(10046,'89910341610275099925','complaintimages/89910341610275099925_snapshot_10.png','bus','07-Apr-2014 6:58:42 PM','no location detected','Resolved','1','1'),(10048,'89910341210309307442','complaintimages/89910341210309307442_snapshot_1.png','bafna layout','Apr 11, 2014 8:21:50 PM','no location detected','Resolved','0','1'),(10049,'89910341210309307442','complaintimages/89910341210309307442_snapshot_2.png','kleit ','Apr 12, 2014 9:32:58 AM','no location detected','Resolved','0','1'),(10050,'89910341210309307442','complaintimages/89910341210309307442_snapshot_3.png','fhjk','Apr 12, 2014 10:11:33 AM','no location detected','Resolved','0','1'),(10051,'89910341210309307442','complaintimages/89910341210309307442_snapshot_4.png','','Apr 12, 2014 10:54:04 AM','no location detected','Resolved','0','1'),(10052,'89914500050187077389','complaintimages/89914500050187077389_snapshot_8.png','','20-Apr-2014 12:05:47 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Resolved','0','1'),(10053,'89914500050187077389','complaintimages/89914500050187077389_snapshot_9.png','khallur','20-Apr-2014 12:08:49 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','On Hold','0','2'),(10054,'89914500050187077389','complaintimages/89914500050187077389_snapshot_10.png','','20-Apr-2014 1:18:56 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Resolved','0','1'),(10055,'89910341210309307442','complaintimages/89910341210309307442_snapshot_5.png','','Apr 20, 2014 3:24:58 PM','no location detected','Invalid','2','3'),(10056,'89910341210309307442','complaintimages/89910341210309307442_snapshot_6.png','','Apr 20, 2014 4:52:23 PM','no location detected','Invalid','1','3'),(10057,'89914500050082823788','complaintimages/89914500050082823788_snapshot_1.png','fthc','Apr 27, 2014 9:12:53 AM','My loc','Invalid','1','3'),(10058,'89914500050082823788','complaintimages/89914500050082823788_snapshot_2.png','fgif','Apr 27, 2014 9:15:14 AM','fk','Invalid','0','3'),(10059,'89914500050187077389','complaintimages/89914500050187077389_snapshot_12.png','complaint','27-Apr-2014 11:36:23 am','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Invalid','0','3'),(10060,'89914500050187077389','complaintimages/89914500050187077389_snapshot_13.png','hello ','27-Apr-2014 12:30:39 pm','kleit','Invalid','1','3'),(10061,'89914500050187077389','complaintimages/89914500050187077389_snapshot_14.png','','27-Apr-2014 12:34:05 pm','kleit ','Invalid','0','3'),(10062,'89914500050187077389','complaintimages/89914500050187077389_snapshot_15.png','kleit','27-Apr-2014 12:38:16 pm','KLE ','Invalid','1','3'),(10063,'89914500050187077389','complaintimages/89914500050187077389_snapshot_16.png','','27-Apr-2014 12:39:44 pm','gdufjf','Invalid','0','3'),(10064,'89914500050187077389','complaintimages/89914500050187077389_snapshot_17.png','','27-Apr-2014 12:43:46 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Invalid','1','3'),(10065,'89914500050187077389','complaintimages/89914500050187077389_snapshot_18.png','','27-Apr-2014 12:51:26 pm','kleit','Invalid','1','3'),(10066,'89914500050187077389','complaintimages/89914500050187077389_snapshot_19.png','hello ','27-Apr-2014 12:56:28 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Invalid','1','3'),(10067,'89914500050187077389','complaintimages/89914500050187077389_snapshot_20.png','','27-Apr-2014 1:25:34 pm','KLE ','Invalid','0','3'),(10068,'89914500050187077389','complaintimages/89914500050187077389_snapshot_21.png','complaints ','27-Apr-2014 1:38:59 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','0','0'),(10069,'89914500050187077389','complaintimages/89914500050187077389_snapshot_22.png','problem ','27-Apr-2014 1:41:13 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','1','0'),(10070,'89914500050187077389','complaintimages/89914500050187077389_snapshot_23.png','hello','27-Apr-2014 1:48:13 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','1','0'),(10071,'89914500050187077389','complaintimages/89914500050187077389_snapshot_24.png','problem ','27-Apr-2014 1:55:36 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','0','0'),(10072,'89914500050187077389','complaintimages/89914500050187077389_snapshot_25.png','hello','27-Apr-2014 2:10:09 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','1','0'),(10073,'89914500050187077389','complaintimages/89914500050187077389_snapshot_26.png','prob','27-Apr-2014 2:45:37 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','1','0'),(10074,'89914500050187077389','complaintimages/89914500050187077389_snapshot_27.png','di bp ','27-Apr-2014 3:47:32 pm','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','0','0'),(10075,'89914500050187077389','complaintimages/89914500050187077389_snapshot_28.png','water problem ','28-Apr-2014 1:09:12 pm','vidyanagar ','Not yet serviced','0','0'),(10076,'8991860044114791691','complaintimages/8991860044114791691_snapshot_1.png','bvb lhc prob','29-Apr-2014 4:49:08 PM','Munneshwar Nagar\nHubli, Karnataka\n Karnataka 580031\n Hubli, Karnataka\n','Not yet serviced','0','0');
/*!40000 ALTER TABLE `complaint_images_updated` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-04  7:58:48
