/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.17-MariaDB : Database - tokai_power
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tokai_power` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tokai_power`;

/*Table structure for table `about_founder` */

DROP TABLE IF EXISTS `about_founder`;

CREATE TABLE `about_founder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `education` varchar(500) DEFAULT NULL,
  `career` varchar(500) DEFAULT NULL,
  `speech` varchar(500) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `about_founder` */

/*Table structure for table `acheivements` */

DROP TABLE IF EXISTS `acheivements`;

CREATE TABLE `acheivements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `certification_name` varchar(255) DEFAULT NULL,
  `certification_detail` varchar(500) DEFAULT NULL,
  `learning` varchar(500) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `acheivements` */

/*Table structure for table `carosels` */

DROP TABLE IF EXISTS `carosels`;

CREATE TABLE `carosels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `carosels` */

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_company` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `quantity` tinyint(5) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `clients` */

/*Table structure for table `csr` */

DROP TABLE IF EXISTS `csr`;

CREATE TABLE `csr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `csr` */

/*Table structure for table `cv` */

DROP TABLE IF EXISTS `cv`;

CREATE TABLE `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` tinyint(5) DEFAULT NULL COMMENT '0 => using from, !0 => against a job circular',
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cv` */

/*Table structure for table `job_circular` */

DROP TABLE IF EXISTS `job_circular`;

CREATE TABLE `job_circular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(255) DEFAULT NULL,
  `contaxt` text DEFAULT NULL,
  `responsibility` text DEFAULT NULL,
  `nature` text DEFAULT NULL,
  `requirment_education` text DEFAULT NULL,
  `requirment_experience` text DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `benefits` text DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `job_circular` */

/*Table structure for table `key_persions` */

DROP TABLE IF EXISTS `key_persions`;

CREATE TABLE `key_persions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `speech` text DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `key_persions` */

/*Table structure for table `mission_vission` */

DROP TABLE IF EXISTS `mission_vission`;

CREATE TABLE `mission_vission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_type` tinyint(5) DEFAULT NULL COMMENT '1 = mission, 2 => vission',
  `message` varchar(500) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mission_vission` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL COMMENT 'Product Types',
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `products` */

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `services` */

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(5) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `test` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
