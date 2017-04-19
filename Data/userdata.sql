-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-19 16:00:38
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
-- 表的结构 `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `uid` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '昵称',
  `info` varchar(255) DEFAULT NULL COMMENT '签名',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `background` varchar(255) DEFAULT NULL COMMENT '背景',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `district` varchar(255) DEFAULT NULL COMMENT '地址',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10087 ;

--
-- 转存表中的数据 `userdata`
--

INSERT INTO `userdata` (`uid`, `name`, `info`, `avatar`, `background`, `birthday`, `district`) VALUES
(10086, 'Lamberts', '人生没有如果，只有结果，不辜负自己，好好努力', '/Static/Imgs/2c7d2b2d1b4e08abd46f8bd15834400f.jpeg', '/Static/Imgs/d7a64b0680aabbe716954f80afdd4cf1.jpeg', '1995-09-23', '山西 太原');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
