-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 01 月 21 日 10:09
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `5945forum`
--

-- --------------------------------------------------------

--
-- 表的结构 `5945post`
--

CREATE TABLE IF NOT EXISTS `5945post` (
  `PostID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Content` text,
  `Category` bigint(20) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyDate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`PostID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `5945post`
--

INSERT INTO `5945post` (`PostID`, `UserName`, `UserEmail`, `Content`, `Category`, `CreateDate`, `ModifyDate`) VALUES
(1, 'TonyQ', 'tonylovejava@gmail.com', '?????', NULL, '2013-01-21 08:38:48', '2013-01-21 08:38:48'),
(2, 'asd', '', 'asdasdasd', NULL, '2013-01-21 09:30:12', '2013-01-21 01:30:12'),
(3, 'asd', '', 'asdasdasd', NULL, '2013-01-21 09:30:25', '2013-01-21 01:30:25'),
(4, 'asdasd', '', 'asdasdasd', NULL, '2013-01-21 09:32:55', '2013-01-21 01:32:55'),
(5, '開發者', '', '測試用', NULL, '2013-01-21 09:33:13', '2013-01-21 01:33:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
