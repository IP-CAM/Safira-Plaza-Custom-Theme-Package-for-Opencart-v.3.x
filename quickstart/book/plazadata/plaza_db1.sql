-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 05:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Table structure for table `oc_layout_route`
--

DROP TABLE IF EXISTS `oc_layout_route`;
CREATE TABLE IF NOT EXISTS `oc_layout_route` (
  `layout_route_id` int(11) NOT NULL AUTO_INCREMENT,
  `layout_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `route` varchar(64) NOT NULL,
  PRIMARY KEY (`layout_route_id`)
) ENGINE=MyISAM AUTO_INCREMENT=951 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oc_layout_route`
--

INSERT INTO `oc_layout_route` (`layout_route_id`, `layout_id`, `store_id`, `route`) VALUES
(908, 6,  0, 'account/%'),
(910, 3,  0, 'product/category'),
(914, 2,  0, 'product/product'),
(913, 15, 0, 'plaza/responsive/mobile'),
(911, 4,  0, ''),
(909, 14, 0, 'plaza/blog/post'),
(912, 1,  0, 'common/home'),

(938, 18, 1, 'common/home'),
(940, 17, 1, 'plaza/blog/post'),
(941, 16, 1, 'account/%'),
(937, 22, 1, ''),
(942, 21, 1, 'product/category'),
(939, 20, 1, 'product/product'),
(920, 19, 1, 'plaza/responsive/mobile'),

(949, 27, 2, 'common/home'),
(927, 28, 2, 'plaza/responsive/mobile'),
(950, 29, 2, 'product/product'),
(947, 25, 2, 'product/category'),
(948, 26, 2, ''),
(945, 23, 2, 'account/%'),
(946, 24, 2, 'plaza/blog/post'),

(934, 35, 3, 'plaza/responsive/mobile'),
(929, 30, 3, 'account/%'),
(930, 31, 3, 'plaza/blog/post'),
(932, 33, 3, ''),
(933, 34, 3, 'common/home'),
(944, 32, 3, 'product/category'),
(935, 36, 3, 'product/product');

-- --------------------------------------------------------
DELETE FROM `oc_setting` WHERE `oc_setting`.`key` = 'module_ptcontrolpanel_header_layout';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_header_layout', '[\"1\",\"2\",\"3\",\"4\"]', 1);
UPDATE `oc_setting` SET `value` = '4' WHERE `oc_setting`.`key` = 'config_layout_id' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'tt_safira_book1' WHERE `oc_setting`.`key` = 'theme_default_directory' AND store_id = 0;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;