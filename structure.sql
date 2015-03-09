-- Adminer 4.2.0 MySQL dump

SET NAMES utf8mb4;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `date` int(32) unsigned NOT NULL,
  `colors` varchar(256) NOT NULL COMMENT 'Comma separated colors',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2015-03-09 20:48:57