-- Adminer 4.2.0 MySQL dump

SET NAMES utf8mb4;
SET time_zone = '+00:00';

DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `answer` varchar(64) DEFAULT 'none',
  `date` int(32) unsigned NOT NULL,
  `colors` varchar(256) NOT NULL COMMENT 'Comma separated colors',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  `salt` varchar(512) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `user` int(10) unsigned NOT NULL,
  `question` int(16) unsigned NOT NULL,
  `answer` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `question` (`question`),
  CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`question`) REFERENCES `question` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 2015-03-13 13:15:40