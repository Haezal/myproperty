/*
SQLyog Community v12.0 (64 bit)
MySQL - 5.6.16 : Database - myproperty
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`myproperty` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `myproperty`;

/*Table structure for table `bill_types` */

DROP TABLE IF EXISTS `bill_types`;

CREATE TABLE `bill_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `bill_types` */

insert  into `bill_types`(`id`,`name`) values (1,'TNB'),(2,'Syabas'),(3,'Astro'),(4,'Cukai Taksiran'),(5,'Indah Water');

/*Table structure for table `bills` */

DROP TABLE IF EXISTS `bills`;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `bills` */

insert  into `bills`(`id`,`property_id`,`bill_type_id`,`account_no`,`old_account_no`,`collateral`,`is_active`,`created`,`created_by`,`modified`,`modified_by`) values (1,4,1,'01810010175702',NULL,'300.00',1,NULL,'sistem',NULL,'sistem'),(2,4,2,'4000209866011',NULL,'100.00',1,NULL,'sistem',NULL,'sistem'),(3,4,5,'56131428',NULL,'0.00',1,NULL,'sistem',NULL,'sistem'),(4,4,3,'0901888140',NULL,'0.00',1,NULL,'sistem',NULL,'sistem'),(5,4,4,'197884','41T0300A035-0197884','0.00',1,NULL,'sistem',NULL,'sistem');

/*Table structure for table `months` */

DROP TABLE IF EXISTS `months`;

CREATE TABLE `months` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `months` */

/*Table structure for table `montly_installment_files` */

DROP TABLE IF EXISTS `montly_installment_files`;

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

/*Data for the table `montly_installment_files` */

/*Table structure for table `montly_installments` */

DROP TABLE IF EXISTS `montly_installments`;

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
  CONSTRAINT `fk_monthly_rental_property_tenant_id` FOREIGN KEY (`property_tenant_id`) REFERENCES `property_tenants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_monthly_rental_pay_list_id` FOREIGN KEY (`pay_list_id`) REFERENCES `pay_lists` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `montly_installments` */

/*Table structure for table `pay_lists` */

DROP TABLE IF EXISTS `pay_lists`;

CREATE TABLE `pay_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `pay_lists` */

insert  into `pay_lists`(`id`,`name`) values (1,'Maybank2u'),(2,'Cimbclicks'),(3,'Counter');

/*Table structure for table `properties` */

DROP TABLE IF EXISTS `properties`;

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
  PRIMARY KEY (`id`),
  KEY `fk_properties_user_id` (`user_id`),
  KEY `fk_properties_property_type_id` (`property_type_id`),
  KEY `fk_properties_property_status_id` (`property_status_id`),
  KEY `fk_properties_state_id` (`state_id`),
  CONSTRAINT `fk_properties_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_properties_property_type_id` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`id`),
  CONSTRAINT `fk_properties_property_status_id` FOREIGN KEY (`property_status_id`) REFERENCES `property_statuses` (`id`),
  CONSTRAINT `fk_properties_state_id` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `properties` */

insert  into `properties`(`id`,`user_id`,`property_type_id`,`property_status_id`,`address`,`address_more`,`postcode`,`city`,`state_id`,`is_active`,`created_by`,`created`,`modified_by`,`modified`) values (4,1,2,1,'Block D-10-12A, Apartment Taman Medan Jaya','No 2A, Jalan PJS 2/1','46000','Petaling Jaya',12,1,'sistem',NULL,'sistem',NULL),(5,1,4,2,'No 6, Jalan Bukit Emas 2b','Taman Bukit Emas','43300','Seri Kembangan',12,1,'sistem',NULL,'sistem',NULL);

/*Table structure for table `property_statuses` */

DROP TABLE IF EXISTS `property_statuses`;

CREATE TABLE `property_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `property_statuses` */

insert  into `property_statuses`(`id`,`name`) values (1,'Rent'),(2,'Live Here'),(3,'Empty House'),(4,'Sold');

/*Table structure for table `property_tenants` */

DROP TABLE IF EXISTS `property_tenants`;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `property_tenants` */

insert  into `property_tenants`(`id`,`property_id`,`first_name`,`last_name`,`address`,`address_more`,`postcode`,`city`,`state_id`,`phone_no`,`more_phone_no`,`tenancy_status_id`,`move_in_date`,`move_out_date`,`deposit`,`is_active`,`created_by`,`created`,`modified_by`,`modified`) values (1,4,'Khairi','Mohd','','','','',NULL,'0187904723','0173603537',1,'2014-06-01',NULL,'0.00',1,'sistem',NULL,'sistem',NULL);

/*Table structure for table `property_types` */

DROP TABLE IF EXISTS `property_types`;

CREATE TABLE `property_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `property_types` */

insert  into `property_types`(`id`,`name`) values (1,'Bungalow / Villa'),(2,'Apartment / Condo / Service Residence'),(3,'Semi-Detached House'),(4,'Terrace / Link House'),(5,'Resindential Land');

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `states` */

insert  into `states`(`id`,`name`,`is_active`,`created`,`modified`) values (1,'Johor',1,NULL,NULL),(2,'Negeri Sembilan',1,NULL,NULL),(3,'Melaka',1,NULL,NULL),(4,'Kuala Lumpur',1,NULL,NULL),(5,'Perak',1,NULL,NULL),(6,'Kedah',1,NULL,NULL),(7,'Pulau Pinang',1,NULL,NULL),(8,'Perlis',1,NULL,NULL),(9,'Kelantan',1,NULL,NULL),(10,'Terengganu',1,NULL,NULL),(11,'Pahang',1,NULL,NULL),(12,'Selangor',1,NULL,NULL),(13,'Sabah',1,NULL,NULL),(14,'Sarawak',1,NULL,NULL),(15,'Wilayah Persekutuan Kuala Lumpur',1,NULL,NULL),(16,'Wilayah Persekutuan Putrajaya',1,NULL,NULL),(17,'Wilayah Persekutuan Labuan',1,NULL,NULL);

/*Table structure for table `tbl_migration` */

DROP TABLE IF EXISTS `tbl_migration`;

CREATE TABLE `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_migration` */

insert  into `tbl_migration`(`version`,`apply_time`) values ('m000000_000000_base',1407606657),('m110805_153437_installYiiUser',1407606682),('m110810_162301_userTimestampFix',1407606687);

/*Table structure for table `tbl_profiles` */

DROP TABLE IF EXISTS `tbl_profiles`;

CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_profiles` */

insert  into `tbl_profiles`(`user_id`,`first_name`,`last_name`) values (1,'Administrator','Admin');

/*Table structure for table `tbl_profiles_fields` */

DROP TABLE IF EXISTS `tbl_profiles_fields`;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_profiles_fields` */

insert  into `tbl_profiles_fields`(`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) values (1,'first_name','First Name','VARCHAR',255,3,2,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',1,3),(2,'last_name','Last Name','VARCHAR',255,3,2,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',2,3);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`username`,`password`,`email`,`activkey`,`superuser`,`status`,`create_at`,`lastvisit_at`) values (1,'admin','5f4dcc3b5aa765d61d8327deb882cf99','ezalepy@gmail.com','eba93fa9930302c3d2b6b732cc31bfef',1,1,'2014-08-10 01:51:22','2014-08-09 21:04:40');

/*Table structure for table `tenancy_statuses` */

DROP TABLE IF EXISTS `tenancy_statuses`;

CREATE TABLE `tenancy_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tenancy_statuses` */

insert  into `tenancy_statuses`(`id`,`name`) values (1,'Active'),(2,'Move');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
