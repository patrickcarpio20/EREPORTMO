/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.5-10.3.16-MariaDB : Database - kiosk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`kiosk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kiosk`;

/*Table structure for table `tbl_complain_categories` */

DROP TABLE IF EXISTS `tbl_complain_categories`;

CREATE TABLE `tbl_complain_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_complain_categories` */

insert  into `tbl_complain_categories`(`id`,`complaint`) values (1,'Police Corruption'),(2,'Police Brutality'),(3,'False Imprisonment'),(4,'Corruption Change'),(5,'Drug Abuse'),(6,'Drug courier'),(7,'Illegal Loging'),(8,'Dynamite Fishing'),(9,'Sexual Misconduct'),(10,'Drunk Driving'),(11,'Vehicle Accident'),(12,'Bribing'),(13,'Misbehavior of Staff'),(14,'Killings of Animals'),(15,'Illegal Recruitment'),(16,'Terrorism'),(17,'Cybercrime'),(18,'Sexual Harrasment');

/*Table structure for table `tbl_complains` */

DROP TABLE IF EXISTS `tbl_complains`;

CREATE TABLE `tbl_complains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_complains` */

/*Table structure for table `tbl_concerns` */

DROP TABLE IF EXISTS `tbl_concerns`;

CREATE TABLE `tbl_concerns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_concerns` */

/*Table structure for table `tbl_crimes` */

DROP TABLE IF EXISTS `tbl_crimes`;

CREATE TABLE `tbl_crimes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_crimes` */

/*Table structure for table `tbl_suggestions` */

DROP TABLE IF EXISTS `tbl_suggestions`;

CREATE TABLE `tbl_suggestions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longblob DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_suggestions` */

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) DEFAULT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`fullname`,`username`,`password`,`type`,`status`) values (1,'admin','admin','$2y$10$7b3NYPTS7oKe/XC1g5ZPROQhwTql3oFaAEfkAVvAEGokPtTeTDtLO','admin',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
