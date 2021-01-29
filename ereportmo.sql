/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.25a : Database - ereportmo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ereportmo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ereportmo`;

/*Table structure for table `tbl_citizens` */

DROP TABLE IF EXISTS `tbl_citizens`;

CREATE TABLE `tbl_citizens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `municipality` varchar(30) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_complain_categories` */

DROP TABLE IF EXISTS `tbl_complain_categories`;

CREATE TABLE `tbl_complain_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_complains` */

DROP TABLE IF EXISTS `tbl_complains`;

CREATE TABLE `tbl_complains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob,
  `category` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `status` char(1) DEFAULT 'R',
  `created_at` timestamp NULL DEFAULT NULL,
  `archived` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_concerns` */

DROP TABLE IF EXISTS `tbl_concerns`;

CREATE TABLE `tbl_concerns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `status` char(1) DEFAULT 'R',
  `created_at` timestamp NULL DEFAULT NULL,
  `archived` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_crimes` */

DROP TABLE IF EXISTS `tbl_crimes`;

CREATE TABLE `tbl_crimes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob,
  `location` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `status` char(1) DEFAULT 'R',
  `created_at` varchar(25) DEFAULT NULL,
  `archived` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_evidences` */

DROP TABLE IF EXISTS `tbl_evidences`;

CREATE TABLE `tbl_evidences` (
  `id` int(11) DEFAULT NULL,
  `reporttype` varchar(3) DEFAULT NULL,
  `reportid` int(11) DEFAULT NULL,
  `evidence` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_hotline` */

DROP TABLE IF EXISTS `tbl_hotline`;

CREATE TABLE `tbl_hotline` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `telno` varchar(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_report_verification` */

DROP TABLE IF EXISTS `tbl_report_verification`;

CREATE TABLE `tbl_report_verification` (
  `id` int(11) DEFAULT NULL,
  `reporttype` varchar(3) DEFAULT NULL,
  `reportid` int(11) DEFAULT NULL,
  `verificationcode` varchar(15) DEFAULT NULL,
  `status` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_suggestions` */

DROP TABLE IF EXISTS `tbl_suggestions`;

CREATE TABLE `tbl_suggestions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `status` char(1) DEFAULT 'R',
  `created_at` timestamp NULL DEFAULT NULL,
  `archived` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) DEFAULT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
