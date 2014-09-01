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
-- Dumping data for table `bill_types`
--

LOCK TABLES `bill_types` WRITE;
/*!40000 ALTER TABLE `bill_types` DISABLE KEYS */;
INSERT INTO `bill_types` (`id`, `name`) VALUES (1,'TNB');
INSERT INTO `bill_types` (`id`, `name`) VALUES (2,'Syabas');
INSERT INTO `bill_types` (`id`, `name`) VALUES (3,'Astro');
INSERT INTO `bill_types` (`id`, `name`) VALUES (4,'Cukai Taksiran');
INSERT INTO `bill_types` (`id`, `name`) VALUES (5,'Indah Water');
INSERT INTO `bill_types` (`id`, `name`) VALUES (6,'House Maintenance');
/*!40000 ALTER TABLE `bill_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `bills`
--

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (6,15,3,'090188814-0','',0.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (7,15,1,'01810010175702','',300.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (8,15,2,'4000209866011','',100.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (9,15,5,'56131428','',0.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (10,15,6,'-','',0.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (11,16,6,'-','',0.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (12,16,4,'T00580010002200','',0.00,1,NULL,'sistem',NULL,'sistem');
INSERT INTO `bills` (`id`, `property_id`, `bill_type_id`, `account_no`, `old_account_no`, `collateral`, `is_active`, `created`, `created_by`, `modified`, `modified_by`) VALUES (13,16,5,'59024133','',0.00,1,NULL,'sistem',NULL,'sistem');
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `versions_data`, `name`, `description`) VALUES (1,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1);
INSERT INTO `gallery` (`id`, `versions_data`, `name`, `description`) VALUES (2,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1);
INSERT INTO `gallery` (`id`, `versions_data`, `name`, `description`) VALUES (3,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1);
INSERT INTO `gallery` (`id`, `versions_data`, `name`, `description`) VALUES (4,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1);
INSERT INTO `gallery` (`id`, `versions_data`, `name`, `description`) VALUES (5,'a:2:{s:5:\"small\";a:1:{s:6:\"resize\";a:2:{i:0;i:200;i:1;N;}}s:6:\"medium\";a:1:{s:6:\"resize\";a:2:{i:0;i:800;i:1;N;}}}',1,1);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `gallery_photo`
--

LOCK TABLES `gallery_photo` WRITE;
/*!40000 ALTER TABLE `gallery_photo` DISABLE KEYS */;
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (5,1,5,'profile','testljasdf','testtest.jpg',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (7,1,7,'asdfdsasdfsdf','safsdsdfdsdfdfsf','landscape-wallpaper-fengjingbizhi-allimg-upimg-green-23156.jpg',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (9,1,9,'asdfsdasfasf','fsadfasdfsdf','IMG_1413.JPG',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (10,1,10,'',NULL,'IMG_1415.JPG',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (11,1,11,'',NULL,'IMG_1414.JPG',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (19,2,19,'','','wallpaper.jpg',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (20,3,20,'','','00010996-whte.png',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (23,4,23,'','','fc47f33851303_1_V550.jpg',NULL,NULL);
INSERT INTO `gallery_photo` (`id`, `gallery_id`, `rank`, `name`, `description`, `file_name`, `link`, `preview`) VALUES (24,5,24,'','Dari Depan','97050727b2e347969eb1d85d154fe34c.jpg',NULL,NULL);
/*!40000 ALTER TABLE `gallery_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jqcalendar`
--

LOCK TABLES `jqcalendar` WRITE;
/*!40000 ALTER TABLE `jqcalendar` DISABLE KEYS */;
/*!40000 ALTER TABLE `jqcalendar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `months`
--

LOCK TABLES `months` WRITE;
/*!40000 ALTER TABLE `months` DISABLE KEYS */;
INSERT INTO `months` (`id`, `name`) VALUES (1,'January');
INSERT INTO `months` (`id`, `name`) VALUES (2,'February');
INSERT INTO `months` (`id`, `name`) VALUES (3,'March');
INSERT INTO `months` (`id`, `name`) VALUES (4,'April');
INSERT INTO `months` (`id`, `name`) VALUES (5,'May');
INSERT INTO `months` (`id`, `name`) VALUES (6,'June');
INSERT INTO `months` (`id`, `name`) VALUES (7,'July');
INSERT INTO `months` (`id`, `name`) VALUES (8,'August');
INSERT INTO `months` (`id`, `name`) VALUES (9,'September');
INSERT INTO `months` (`id`, `name`) VALUES (10,'October');
INSERT INTO `months` (`id`, `name`) VALUES (11,'November');
INSERT INTO `months` (`id`, `name`) VALUES (12,'December');
/*!40000 ALTER TABLE `months` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `montly_installment_files`
--

LOCK TABLES `montly_installment_files` WRITE;
/*!40000 ALTER TABLE `montly_installment_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `montly_installment_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `montly_installments`
--

LOCK TABLES `montly_installments` WRITE;
/*!40000 ALTER TABLE `montly_installments` DISABLE KEYS */;
/*!40000 ALTER TABLE `montly_installments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pay_bills`
--

LOCK TABLES `pay_bills` WRITE;
/*!40000 ALTER TABLE `pay_bills` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pay_lists`
--

LOCK TABLES `pay_lists` WRITE;
/*!40000 ALTER TABLE `pay_lists` DISABLE KEYS */;
INSERT INTO `pay_lists` (`id`, `name`) VALUES (1,'Maybank2u');
INSERT INTO `pay_lists` (`id`, `name`) VALUES (2,'Cimbclicks');
INSERT INTO `pay_lists` (`id`, `name`) VALUES (3,'Counter');
/*!40000 ALTER TABLE `pay_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`id`, `user_id`, `property_type_id`, `property_status_id`, `address`, `address_more`, `postcode`, `city`, `state_id`, `is_active`, `created_by`, `created`, `modified_by`, `modified`, `gallery_id`) VALUES (15,2,4,2,'No 6, Jln Bukit Emas 2b','Taman Bukit Emas','43300','Seri Kembangan',12,1,'sistem',NULL,'sistem',NULL,4);
INSERT INTO `properties` (`id`, `user_id`, `property_type_id`, `property_status_id`, `address`, `address_more`, `postcode`, `city`, `state_id`, `is_active`, `created_by`, `created`, `modified_by`, `modified`, `gallery_id`) VALUES (16,2,2,1,'Block D-10-12A, Apartment Taman Medan Jaya','No 2A, Jln PJS 2/1','43300','Petaling Jaya',12,1,'sistem',NULL,'sistem',NULL,5);
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `property_statuses`
--

LOCK TABLES `property_statuses` WRITE;
/*!40000 ALTER TABLE `property_statuses` DISABLE KEYS */;
INSERT INTO `property_statuses` (`id`, `name`) VALUES (1,'Rent');
INSERT INTO `property_statuses` (`id`, `name`) VALUES (2,'Live Here');
INSERT INTO `property_statuses` (`id`, `name`) VALUES (3,'Empty House');
INSERT INTO `property_statuses` (`id`, `name`) VALUES (4,'Sold');
/*!40000 ALTER TABLE `property_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `property_tenants`
--

LOCK TABLES `property_tenants` WRITE;
/*!40000 ALTER TABLE `property_tenants` DISABLE KEYS */;
INSERT INTO `property_tenants` (`id`, `property_id`, `first_name`, `last_name`, `address`, `address_more`, `postcode`, `city`, `state_id`, `phone_no`, `more_phone_no`, `tenancy_status_id`, `move_in_date`, `move_out_date`, `deposit`, `is_active`, `created_by`, `created`, `modified_by`, `modified`) VALUES (1,16,'Khairi','Mohd','','','','',NULL,'','',NULL,'2013-06-01',NULL,0.00,1,'sistem',NULL,'sistem',NULL);
INSERT INTO `property_tenants` (`id`, `property_id`, `first_name`, `last_name`, `address`, `address_more`, `postcode`, `city`, `state_id`, `phone_no`, `more_phone_no`, `tenancy_status_id`, `move_in_date`, `move_out_date`, `deposit`, `is_active`, `created_by`, `created`, `modified_by`, `modified`) VALUES (2,16,'Penyewa','Baru','','','','',NULL,'+60136343940','',NULL,'2014-01-01',NULL,850.00,1,'sistem',NULL,'sistem',NULL);
/*!40000 ALTER TABLE `property_tenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `property_types`
--

LOCK TABLES `property_types` WRITE;
/*!40000 ALTER TABLE `property_types` DISABLE KEYS */;
INSERT INTO `property_types` (`id`, `name`) VALUES (1,'Bungalow / Villa');
INSERT INTO `property_types` (`id`, `name`) VALUES (2,'Apartment / Condo / Service Residence');
INSERT INTO `property_types` (`id`, `name`) VALUES (3,'Semi-Detached House');
INSERT INTO `property_types` (`id`, `name`) VALUES (4,'Terrace / Link House');
INSERT INTO `property_types` (`id`, `name`) VALUES (5,'Resindential Land');
/*!40000 ALTER TABLE `property_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (1,'Johor',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (2,'Negeri Sembilan',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (3,'Melaka',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (4,'Kuala Lumpur',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (5,'Perak',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (6,'Kedah',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (7,'Pulau Pinang',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (8,'Perlis',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (9,'Kelantan',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (10,'Terengganu',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (11,'Pahang',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (12,'Selangor',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (13,'Sabah',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (14,'Sarawak',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (15,'Wilayah Persekutuan Kuala Lumpur',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (16,'Wilayah Persekutuan Putrajaya',1,NULL,NULL);
INSERT INTO `states` (`id`, `name`, `is_active`, `created`, `modified`) VALUES (17,'Wilayah Persekutuan Labuan',1,NULL,NULL);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_migration`
--

LOCK TABLES `tbl_migration` WRITE;
/*!40000 ALTER TABLE `tbl_migration` DISABLE KEYS */;
INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES ('m000000_000000_base',1407606657);
INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES ('m110805_153437_installYiiUser',1407606682);
INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES ('m110810_162301_userTimestampFix',1407606687);
/*!40000 ALTER TABLE `tbl_migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_profiles`
--

LOCK TABLES `tbl_profiles` WRITE;
/*!40000 ALTER TABLE `tbl_profiles` DISABLE KEYS */;
INSERT INTO `tbl_profiles` (`user_id`, `first_name`, `last_name`) VALUES (1,'Administrator','Admin');
INSERT INTO `tbl_profiles` (`user_id`, `first_name`, `last_name`) VALUES (2,'Haezal','Musa');
/*!40000 ALTER TABLE `tbl_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_profiles_fields`
--

LOCK TABLES `tbl_profiles_fields` WRITE;
/*!40000 ALTER TABLE `tbl_profiles_fields` DISABLE KEYS */;
INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES (1,'first_name','First Name','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3);
INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES (2,'last_name','Last Name','VARCHAR',255,3,2,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',2,3);
/*!40000 ALTER TABLE `tbl_profiles_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`, `create_at`, `lastvisit_at`) VALUES (1,'admin','5f4dcc3b5aa765d61d8327deb882cf99','admin@myproperty.com','27921dfba42c627fb39e858cdb31c1ff',1,1,'2014-08-09 17:51:22','2014-08-14 20:56:58');
INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `superuser`, `status`, `create_at`, `lastvisit_at`) VALUES (2,'haezal','5716f55419a25cef848511791a483b21','ezalepy@gmail.com','98751617ce1f2877a182a18ea19ad276',0,1,'2014-08-12 09:36:04','2014-09-01 08:07:58');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tenancy_statuses`
--

LOCK TABLES `tenancy_statuses` WRITE;
/*!40000 ALTER TABLE `tenancy_statuses` DISABLE KEYS */;
INSERT INTO `tenancy_statuses` (`id`, `name`) VALUES (1,'Active');
INSERT INTO `tenancy_statuses` (`id`, `name`) VALUES (2,'Move');
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

-- Dump completed
