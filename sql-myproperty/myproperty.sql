-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: myproperty
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `bill_types`
--

DROP TABLE IF EXISTS `bill_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill_types`
--

LOCK TABLES `bill_types` WRITE;
/*!40000 ALTER TABLE `bill_types` DISABLE KEYS */;
INSERT INTO `bill_types` VALUES (1,'TNB'),(2,'Syabas'),(3,'Astro'),(4,'Cukai Taksiran'),(5,'Indah Water');
/*!40000 ALTER TABLE `bill_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `bill_type_id` int(11) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `old_account_no` varchar(50) DEFAULT NULL,
  `collateral` decimal(11,2) DEFAULT NULL COMMENT 'Cagaran',
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT 'sistem',
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT 'sistem',
  PRIMARY KEY (`id`),
  KEY `fk_bill_property_type_id` (`property_id`),
  KEY `fk_bill_type_id` (`bill_type_id`),
  CONSTRAINT `fk_bill_property_type_id` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bill_type_id` FOREIGN KEY (`bill_type_id`) REFERENCES `bill_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bills`
--

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `versions_data` text NOT NULL,
  `name` tinyint(1) NOT NULL DEFAULT '1',
  `description` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1),(2,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1),(3,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_photo`
--

DROP TABLE IF EXISTS `gallery_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `name` varchar(512) NOT NULL DEFAULT '',
  `description` text,
  `file_name` varchar(128) NOT NULL DEFAULT '',
  `link` varchar(200) DEFAULT NULL,
  `preview` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gallery_photo_gallery1` (`gallery_id`),
  CONSTRAINT `fk_gallery_photo_gallery1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_photo`
--

LOCK TABLES `gallery_photo` WRITE;
/*!40000 ALTER TABLE `gallery_photo` DISABLE KEYS */;
INSERT INTO `gallery_photo` VALUES (5,1,5,'profile','testljasdf','testtest.jpg',NULL,NULL),(7,1,7,'asdfdsasdfsdf','safsdsdfdsdfdfsf','landscape-wallpaper-fengjingbizhi-allimg-upimg-green-23156.jpg',NULL,NULL),(9,1,9,'asdfsdasfasf','fsadfasdfsdf','IMG_1413.JPG',NULL,NULL),(10,1,10,'',NULL,'IMG_1415.JPG',NULL,NULL),(11,1,11,'',NULL,'IMG_1414.JPG',NULL,NULL),(19,2,19,'','','wallpaper.jpg',NULL,NULL),(20,3,20,'','','00010996-whte.png',NULL,NULL);
/*!40000 ALTER TABLE `gallery_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `months`
--

DROP TABLE IF EXISTS `months`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `months` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `months`
--

LOCK TABLES `months` WRITE;
/*!40000 ALTER TABLE `months` DISABLE KEYS */;
INSERT INTO `months` VALUES (1,'January'),(2,'February'),(3,'March'),(4,'April'),(5,'May'),(6,'June'),(7,'July'),(8,'August'),(9,'September'),(10,'October'),(11,'November'),(12,'December');
/*!40000 ALTER TABLE `months` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `montly_installment_files`
--

DROP TABLE IF EXISTS `montly_installment_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `montly_installment_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montly_installment_id` int(11) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `filepath` varchar(100) DEFAULT NULL,
  `filesize` varchar(100) DEFAULT NULL,
  `filetype` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_by` varchar(20) DEFAULT 'sistem',
  `created` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT 'sistem',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `montly_installment_files`
--

LOCK TABLES `montly_installment_files` WRITE;
/*!40000 ALTER TABLE `montly_installment_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `montly_installment_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `montly_installments`
--

DROP TABLE IF EXISTS `montly_installments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `montly_installments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_tenant_id` int(11) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `month_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `pay_list_id` int(11) DEFAULT NULL,
  `is_accepted` tinyint(1) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_by` varchar(20) DEFAULT 'sistem',
  `created` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT 'sistem',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_monthly_rental_property_tenant_id` (`property_tenant_id`),
  KEY `fk_monthly_rental_pay_list_id` (`pay_list_id`),
  CONSTRAINT `fk_monthly_rental_pay_list_id` FOREIGN KEY (`pay_list_id`) REFERENCES `pay_lists` (`id`),
  CONSTRAINT `fk_monthly_rental_property_tenant_id` FOREIGN KEY (`property_tenant_id`) REFERENCES `property_tenants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `montly_installments`
--

LOCK TABLES `montly_installments` WRITE;
/*!40000 ALTER TABLE `montly_installments` DISABLE KEYS */;
/*!40000 ALTER TABLE `montly_installments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_bills`
--

DROP TABLE IF EXISTS `pay_bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) DEFAULT NULL,
  `month_id` int(11) DEFAULT NULL,
  `year` int(4) DEFAULT '2000',
  `bill_date` date DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `amount_due` decimal(11,2) DEFAULT NULL,
  `is_pay` tinyint(1) DEFAULT '0',
  `pay_list_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT 'sistem',
  `modified_by` varchar(20) DEFAULT 'sistem',
  PRIMARY KEY (`id`),
  KEY `fk_pay_bill_id` (`bill_id`),
  KEY `fk_pay_bill_month_id` (`month_id`),
  KEY `fk_pay_bill_pay_list_id` (`pay_list_id`),
  CONSTRAINT `fk_pay_bill_id` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_pay_bill_month_id` FOREIGN KEY (`month_id`) REFERENCES `months` (`id`),
  CONSTRAINT `fk_pay_bill_pay_list_id` FOREIGN KEY (`pay_list_id`) REFERENCES `pay_lists` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_bills`
--

LOCK TABLES `pay_bills` WRITE;
/*!40000 ALTER TABLE `pay_bills` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pay_lists`
--

DROP TABLE IF EXISTS `pay_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_lists`
--

LOCK TABLES `pay_lists` WRITE;
/*!40000 ALTER TABLE `pay_lists` DISABLE KEYS */;
INSERT INTO `pay_lists` VALUES (1,'Maybank2u'),(2,'Cimbclicks'),(3,'Counter');
/*!40000 ALTER TABLE `pay_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `property_status_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_more` varchar(200) DEFAULT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_by` varchar(20) DEFAULT 'sistem',
  `created` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT 'sistem',
  `modified` datetime DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_properties_user_id` (`user_id`),
  KEY `fk_properties_property_type_id` (`property_type_id`),
  KEY `fk_properties_property_status_id` (`property_status_id`),
  KEY `fk_properties_state_id` (`state_id`),
  KEY `fk_properties_gallery_id` (`gallery_id`),
  CONSTRAINT `fk_properties_gallery_id` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`),
  CONSTRAINT `fk_properties_property_status_id` FOREIGN KEY (`property_status_id`) REFERENCES `property_statuses` (`id`),
  CONSTRAINT `fk_properties_property_type_id` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`id`),
  CONSTRAINT `fk_properties_state_id` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  CONSTRAINT `fk_properties_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_statuses`
--

DROP TABLE IF EXISTS `property_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_statuses`
--

LOCK TABLES `property_statuses` WRITE;
/*!40000 ALTER TABLE `property_statuses` DISABLE KEYS */;
INSERT INTO `property_statuses` VALUES (1,'Rent'),(2,'Live Here'),(3,'Empty House'),(4,'Sold');
/*!40000 ALTER TABLE `property_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_tenants`
--

DROP TABLE IF EXISTS `property_tenants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_tenants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `address_more` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `more_phone_no` varchar(20) DEFAULT NULL,
  `tenancy_status_id` int(11) DEFAULT NULL,
  `move_in_date` date DEFAULT NULL,
  `move_out_date` date DEFAULT NULL,
  `deposit` decimal(11,2) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_by` varchar(20) DEFAULT 'sistem',
  `created` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT 'sistem',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_property_tenants_property_id` (`property_id`),
  KEY `fk_property_state_id` (`state_id`),
  KEY `fk_property_tenancy_status_id` (`tenancy_status_id`),
  CONSTRAINT `fk_property_state_id` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  CONSTRAINT `fk_property_tenancy_status_id` FOREIGN KEY (`tenancy_status_id`) REFERENCES `tenancy_statuses` (`id`),
  CONSTRAINT `fk_property_tenants_property_id` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_tenants`
--

LOCK TABLES `property_tenants` WRITE;
/*!40000 ALTER TABLE `property_tenants` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_tenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_types`
--

DROP TABLE IF EXISTS `property_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_types`
--

LOCK TABLES `property_types` WRITE;
/*!40000 ALTER TABLE `property_types` DISABLE KEYS */;
INSERT INTO `property_types` VALUES (1,'Bungalow / Villa'),(2,'Apartment / Condo / Service Residence'),(3,'Semi-Detached House'),(4,'Terrace / Link House'),(5,'Resindential Land');
/*!40000 ALTER TABLE `property_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Johor',1,NULL,NULL),(2,'Negeri Sembilan',1,NULL,NULL),(3,'Melaka',1,NULL,NULL),(4,'Kuala Lumpur',1,NULL,NULL),(5,'Perak',1,NULL,NULL),(6,'Kedah',1,NULL,NULL),(7,'Pulau Pinang',1,NULL,NULL),(8,'Perlis',1,NULL,NULL),(9,'Kelantan',1,NULL,NULL),(10,'Terengganu',1,NULL,NULL),(11,'Pahang',1,NULL,NULL),(12,'Selangor',1,NULL,NULL),(13,'Sabah',1,NULL,NULL),(14,'Sarawak',1,NULL,NULL),(15,'Wilayah Persekutuan Kuala Lumpur',1,NULL,NULL),(16,'Wilayah Persekutuan Putrajaya',1,NULL,NULL),(17,'Wilayah Persekutuan Labuan',1,NULL,NULL);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_migration`
--

LOCK TABLES `tbl_migration` WRITE;
/*!40000 ALTER TABLE `tbl_migration` DISABLE KEYS */;
INSERT INTO `tbl_migration` VALUES ('m000000_000000_base',1407606657),('m110805_153437_installYiiUser',1407606682),('m110810_162301_userTimestampFix',1407606687);
/*!40000 ALTER TABLE `tbl_migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_profiles`
--

DROP TABLE IF EXISTS `tbl_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_profiles`
--

LOCK TABLES `tbl_profiles` WRITE;
/*!40000 ALTER TABLE `tbl_profiles` DISABLE KEYS */;
INSERT INTO `tbl_profiles` VALUES (1,'Administrator','Admin'),(2,'Haezal','Musa');
/*!40000 ALTER TABLE `tbl_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_profiles_fields`
--

DROP TABLE IF EXISTS `tbl_profiles_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_profiles_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `field_type` varchar(50) NOT NULL DEFAULT '',
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` text,
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` text,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_profiles_fields`
--

LOCK TABLES `tbl_profiles_fields` WRITE;
/*!40000 ALTER TABLE `tbl_profiles_fields` DISABLE KEYS */;
INSERT INTO `tbl_profiles_fields` VALUES (1,'first_name','First Name','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3),(2,'last_name','Last Name','VARCHAR',255,3,2,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',2,3);
/*!40000 ALTER TABLE `tbl_profiles_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(128) NOT NULL DEFAULT '',
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'admin','5f4dcc3b5aa765d61d8327deb882cf99','admin@myproperty.com','27921dfba42c627fb39e858cdb31c1ff',1,1,'2014-08-09 17:51:22','2014-08-14 20:56:58'),(2,'haezal','5716f55419a25cef848511791a483b21','ezalepy@gmail.com','98751617ce1f2877a182a18ea19ad276',0,1,'2014-08-12 09:36:04','2014-08-19 13:10:31');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenancy_statuses`
--

DROP TABLE IF EXISTS `tenancy_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tenancy_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenancy_statuses`
--

LOCK TABLES `tenancy_statuses` WRITE;
/*!40000 ALTER TABLE `tenancy_statuses` DISABLE KEYS */;
INSERT INTO `tenancy_statuses` VALUES (1,'Active'),(2,'Move');
/*!40000 ALTER TABLE `tenancy_statuses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-19 21:36:38
