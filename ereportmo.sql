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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_citizens` */

insert  into `tbl_citizens`(`id`,`firstname`,`middlename`,`lastname`,`email`,`contactno`,`street`,`barangay`,`municipality`,`province`) values (1,NULL,NULL,NULL,NULL,'09553121861',NULL,NULL,NULL,NULL);

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

/*Data for the table `tbl_complains` */

insert  into `tbl_complains`(`id`,`description`,`category`,`name`,`address`,`phone`,`status`,`created_at`,`archived`) values (19,'Madaming mabaho sa lugar namin','Killings of Animals','Juan Ponce',NULL,'09232323232','R',NULL,0),(20,'Another complaint','Terrorism','Sample name',NULL,'12312312312','R',NULL,0),(21,'Another complaint','Terrorism','Sample name',NULL,'12312312312','R',NULL,0);

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

/*Data for the table `tbl_concerns` */

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

/*Data for the table `tbl_crimes` */

insert  into `tbl_crimes`(`id`,`description`,`location`,`name`,`address`,`phone`,`email`,`status`,`created_at`,`archived`) values (3,'Drug Abuse','aplaya, pila laguna','bill alagad',NULL,NULL,'billalagad@gmail.com','R','0000-00-00 00:00:00',0),(4,'Police Corruption','Location','My Name','Address','09553121860','email@yahoo.com','R','2020-12-02 18:33:25',0),(5,'Killings of Animals','Sta Cruz','Cardo DAlisay','Sta Cruz Laguna','09553121861','cardodalisay@yahoo.com','R','2020-12-02 18:34:19',0),(9,'Police Corruption','Sta Cruz Laguna','Mark','Sta Cruz Lagun','09553121861','mark@gmail.com','R','2020-12-08 11:21:04',0),(10,'Cybercrime','Montserrat','Bran Stark','Montserrat Sta Cruz Laguna','09553121861','branstark@gmail.com','R','2020-12-08 11:37:23',0),(11,'Illegal Loging','Montserrat','ares Argon','Montserrat Sta Cruz Laguna','09553121861','aresargon@gmail.com','R','2020-12-08 11:40:15',0);

/*Table structure for table `tbl_evidences` */

DROP TABLE IF EXISTS `tbl_evidences`;

CREATE TABLE `tbl_evidences` (
  `id` int(11) DEFAULT NULL,
  `reporttype` varchar(3) DEFAULT NULL,
  `reportid` int(11) DEFAULT NULL,
  `evidence` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_evidences` */

insert  into `tbl_evidences`(`id`,`reporttype`,`reportid`,`evidence`) values (NULL,'1',11,'spccbg.1607398815.png'),(NULL,'1',11,'spccbg0.1607398815.png');

/*Table structure for table `tbl_hotline` */

DROP TABLE IF EXISTS `tbl_hotline`;

CREATE TABLE `tbl_hotline` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `telno` varchar(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hotline` */

insert  into `tbl_hotline`(`id`,`telno`,`active`) values (1,'09516719840',1);

/*Table structure for table `tbl_report_verification` */

DROP TABLE IF EXISTS `tbl_report_verification`;

CREATE TABLE `tbl_report_verification` (
  `id` int(11) DEFAULT NULL,
  `reporttype` varchar(3) DEFAULT NULL,
  `reportid` int(11) DEFAULT NULL,
  `verificationcode` varchar(15) DEFAULT NULL,
  `status` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_report_verification` */

insert  into `tbl_report_verification`(`id`,`reporttype`,`reportid`,`verificationcode`,`status`) values (NULL,'1',9,'SMOQDCA','0'),(NULL,'1',10,'CPH2S5K','0'),(NULL,'1',11,'8H3RZGU','0');

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

/*Data for the table `tbl_suggestions` */

insert  into `tbl_suggestions`(`id`,`description`,`name`,`phone`,`status`,`created_at`,`archived`) values (3,'Fast action from car accident','bill alagad','09676796260','0',NULL,0);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` bigint(20) DEFAULT NULL,
  `fullname` varchar(191) DEFAULT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`usertype`,`fullname`,`username`,`password`,`status`) values (1,NULL,'admin','admin','$2y$10$4EVHCApdcGLEYZ9Z0XEXiep1ZhN.ycXddaxWZ3HPCaJSJwBC8Pngu',1),(2,NULL,'Sample','sample','$2y$10$M9P7DEwNZ9cgWrcwgnmkluoSbaZgdv2Q5A1De7ePIpDUSlFKvKpgK',1),(3,NULL,'Sample','sample','$2y$10$i0qMV6b/.xU9Bx.EMEqQZOiGvYOm9vYOt0bAXjWhX.h8mKOHIu1VG',1),(5,NULL,'Bill Homer','bill','$2y$10$D534.26noSJCbzA26K1bLe7NAyatOTveO5WVujzi8gF8wM8L66hQm',1);

/*Table structure for table `tbl_usertype` */

DROP TABLE IF EXISTS `tbl_usertype`;

CREATE TABLE `tbl_usertype` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_usertype` */

insert  into `tbl_usertype`(`id`,`usertype`) values (1,'Chief'),(2,'Intelligence'),(3,'Investigation'),(4,'Admin');

/*Table structure for table `tbl_videoroom` */

DROP TABLE IF EXISTS `tbl_videoroom`;

CREATE TABLE `tbl_videoroom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `roomid` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_videoroom` */

insert  into `tbl_videoroom`(`id`,`cid`,`roomid`) values (1,1,'tO2J3ealm4EQ5gODjkCL');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
