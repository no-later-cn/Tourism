-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-19 16:00:30
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- 表的结构 `signin`
--

CREATE TABLE IF NOT EXISTS `signin` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(12) DEFAULT NULL,
  `day` int(12) DEFAULT NULL,
  `ctime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `signin`
--

INSERT INTO `signin` (`id`, `uid`, `day`, `ctime`) VALUES
(1, 10086, 1, ''),
(2, 10086, 2, ''),
(24, 10086, 14, '2017-04-14'),
(29, 10086, 15, '2017-04-15'),
(30, 10086, 16, '2017-04-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
