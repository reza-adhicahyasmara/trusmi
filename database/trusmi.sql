/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.18-MariaDB : Database - trusmi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`trusmi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `trusmi`;

/*Table structure for table `bobot_kpi` */

DROP TABLE IF EXISTS `bobot_kpi`;

CREATE TABLE `bobot_kpi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kpi` varchar(50) DEFAULT NULL,
  `target` float DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bobot_kpi` */

insert  into `bobot_kpi`(`id`,`kpi`,`target`,`bobot`) values 
(1,'Sales',2,50),
(2,'Report',2,50);

/*Table structure for table `kpi_marketing` */

DROP TABLE IF EXISTS `kpi_marketing`;

CREATE TABLE `kpi_marketing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tasklist` varchar(50) DEFAULT NULL,
  `kpi` varchar(50) DEFAULT NULL,
  `karyawan` varchar(50) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `aktual` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kpi_marketing` */

insert  into `kpi_marketing`(`id`,`tasklist`,`kpi`,`karyawan`,`deadline`,`aktual`) values 
(1,'Tasklist 1','Sales','Budi','2022-01-10','2022-01-09'),
(2,'Tasklist 2','Sales','Budi','2022-01-10','2022-01-08'),
(3,'Tasklist 3','Report','Budi','2022-01-10','2022-01-07'),
(4,'Tasklist 4','Report','Budi','2022-01-10','2022-01-12'),
(5,'Tasklist 5','Sales','Adi','2022-01-10','2022-01-09'),
(6,'Tasklist 6','Sales','Adi','2022-01-10','2022-01-12'),
(7,'Tasklist 7','Report','Adi','2022-01-10','2022-01-07'),
(8,'Tasklist 8','Report','Adi','2022-01-10','2022-01-07'),
(9,'Tasklist 9','Sales','Rara','2022-01-10','2022-01-12'),
(10,'Tasklist 10','Sales','Rara','2022-01-10','2022-01-09'),
(11,'Tasklist 11','Report','Rara','2022-01-10','2022-01-12'),
(12,'Tasklist 12','Report','Doni','2022-01-10','2022-01-09'),
(13,'Tasklist 13','Sales','Doni','2022-01-10','2022-01-12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
