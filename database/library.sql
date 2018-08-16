-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-25 11:39:13
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- 表的结构 `3d_technology`
--

CREATE TABLE IF NOT EXISTS `3d_technology` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `3d_technology`
--

INSERT INTO `3d_technology` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/3d_technology/Maya.jpg', 'Maya', 165),
(2, '../image/3d_technology/3dMax.jpg', '3dMax', 65),
(3, '../image/3d_technology/犀牛.jpg', '犀牛', 63),
(4, '../image/3d_technology/Maya基础.jpg', 'Maya基础', 59),
(5, '../image/3d_technology/zbrush.jpg', 'zbrush', 123);

-- --------------------------------------------------------

--
-- 表的结构 `backstage_development`
--

CREATE TABLE IF NOT EXISTS `backstage_development` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `backstage_development`
--

INSERT INTO `backstage_development` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/backstage_development/DB2数据库.jpg', 'DB2数据库', 59.8),
(2, '../image/backstage_development/Hadoop.jpg', 'Hadoop', 122),
(3, '../image/backstage_development/MapReduce.jpg', 'MapReduce', 109),
(4, '../image/backstage_development/MySQL.jpg', 'MySQL', 57.6),
(5, '../image/backstage_development/PHP.jpg', 'PHP', 58.8),
(6, '../image/backstage_development/数据库原理.jpg', '数据库原理', 32),
(7, '../image/backstage_development/云计算.jpg', '云计算', 49);

-- --------------------------------------------------------

--
-- 表的结构 `electronic_technology`
--

CREATE TABLE IF NOT EXISTS `electronic_technology` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `electronic_technology`
--

INSERT INTO `electronic_technology` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/electronic_technology/传感器原理与应用.jpg', '传感器原理与应用', 38),
(2, '../image/electronic_technology/单片机原理.jpg', '单片机原理', 45),
(3, '../image/electronic_technology/模拟电子技术.jpg', '模拟电子技术', 36),
(4, '../image/electronic_technology/嵌入式系统.jpg', '嵌入式系统', 144),
(5, '../image/electronic_technology/射频电路.jpg', '射频电路', 44),
(6, '../image/electronic_technology/数字电子技术.jpg', '数字电子技术', 28),
(7, '../image/electronic_technology/信号与系统.jpg', '信号与系统', 44);

-- --------------------------------------------------------

--
-- 表的结构 `front_end`
--

CREATE TABLE IF NOT EXISTS `front_end` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `front_end`
--

INSERT INTO `front_end` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/front_end/Bootstrap.jpg', 'Bootstrap', 61),
(2, '../image/front_end/HTML5.jpg', 'HTML5', 59.8),
(3, '../image/front_end/JavaScript.jpg', 'JavaScript', 59.8),
(4, '../image/front_end/jQuery.jpg', 'jQuery', 62.5),
(5, '../image/front_end/JSP.jpg', 'JSP', 31.5),
(6, '../image/front_end/web前端开发.jpg', 'web前端开发', 59.5),
(7, '../image/front_end/XML.jpg', 'XML', 34),
(8, '../image/front_end/移动开发.jpg', '移动开发', 72);

-- --------------------------------------------------------

--
-- 表的结构 `multimedia`
--

CREATE TABLE IF NOT EXISTS `multimedia` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `multimedia`
--

INSERT INTO `multimedia` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/multimedia/AI绘图.jpg', 'AI绘图', 133),
(2, '../image/multimedia/Pemiere.jpg', 'Pemiere', 57),
(3, '../image/multimedia/photoshop.jpg', 'photoshop', 66);

-- --------------------------------------------------------

--
-- 表的结构 `network_technology`
--

CREATE TABLE IF NOT EXISTS `network_technology` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `network_technology`
--

INSERT INTO `network_technology` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/network_technology/防火墙.jpg', '防火墙', 48),
(2, '../image/network_technology/黑客攻防.jpg', '黑客攻防', 128),
(3, '../image/network_technology/计算机网络.jpg', '计算机网络', 37),
(4, '../image/network_technology/入侵检测技术.jpg', '入侵检测技术', 62),
(5, '../image/network_technology/组网技术.jpg', '组网技术', 42);

-- --------------------------------------------------------

--
-- 表的结构 `operating_system`
--

CREATE TABLE IF NOT EXISTS `operating_system` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `operating_system`
--

INSERT INTO `operating_system` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/operating_system/Linux.jpg', 'Linux', 113),
(2, '../image/operating_system/Ubuntu.jpg', 'Ubuntu', 68),
(3, '../image/operating_system/UNIX网络编程.jpg', 'UNIX网络编程', 52),
(4, '../image/operating_system/VMware.jpg', 'VMware', 48),
(5, '../image/operating_system/Windows编程.jpg', 'Windows编程', 132);

-- --------------------------------------------------------

--
-- 表的结构 `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `others`
--

INSERT INTO `others` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/others/Android开发.jpg', 'Android开发', 70),
(2, '../image/others/IOS.jpg', 'IOS', 92),
(3, '../image/others/办公软件.jpg', '办公软件', 29),
(4, '../image/others/离散数学.jpg', '离散数学', 27.2),
(5, '../image/others/人工智能.jpg', '人工智能', 86),
(6, '../image/others/软件工程.jpg', '软件工程', 37),
(7, '../image/others/数据结构与算法.jpg', '数据结构与算法', 49.7),
(8, '../image/others/统计学.jpg', '统计学', 28.5),
(9, '../image/others/信息技术应用.jpg', '信息技术应用', 27);

-- --------------------------------------------------------

--
-- 表的结构 `programming_language`
--

CREATE TABLE IF NOT EXISTS `programming_language` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `programming_language`
--

INSERT INTO `programming_language` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/programming_language/ACM程序设计大赛.jpg', 'ACM程序设计大赛', 43),
(2, '../image/programming_language/C.jpg', 'C#', 47),
(3, '../image/programming_language/C++程序设计教程.jpg', 'C++程序设计教程', 49.5),
(4, '../image/programming_language/C程序设计.jpg', 'C程序设计', 33),
(5, '../image/programming_language/JavaEE.jpg', 'Java EE', 52),
(6, '../image/programming_language/JavaME程序设计.jpg', 'Java ME程序设计', 37),
(7, '../image/programming_language/Java从入门到精通.jpg', 'Java从入门到精通', 59.8),
(8, '../image/programming_language/Python.jpg', 'Python', 38),
(9, '../image/programming_language/VisualBasic.jpg', 'Visual Basic', 41.65);

-- --------------------------------------------------------

--
-- 表的结构 `recommendation`
--

CREATE TABLE IF NOT EXISTS `recommendation` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `recommendation`
--

INSERT INTO `recommendation` (`id`, `path`, `name`, `price`) VALUES
(1, 'image/recommendation/3dMax.jpg', '3dMax', 65),
(2, 'image/recommendation/Android开发.jpg', 'Android开发', 59.8),
(3, 'image/recommendation/Bootstrap.jpg', 'Bootstrap', 47.62),
(4, 'image/recommendation/DB2数据库.jpg', 'DB2数据库', 58.9),
(5, 'image/recommendation/Hadoop.jpg', 'Hadoop', 83.5),
(6, 'image/recommendation/IOS.jpg', 'IOS', 62),
(7, 'image/recommendation/jQuery.jpg', 'jQuery', 52.5),
(8, 'image/recommendation/Linux.jpg', 'Linux', 65.6),
(9, 'image/recommendation/MapReduce.jpg', 'MapReduce', 71),
(10, 'image/recommendation/Maya.jpg', 'Maya', 165),
(11, 'image/recommendation/MySQL.jpg', 'MySQL', 58.5),
(12, 'image/recommendation/photoshop.jpg', 'photoshop', 49.1),
(13, 'image/recommendation/Python.jpg', 'Python', 38),
(14, 'image/recommendation/Ubuntu.jpg', 'Ubuntu', 64.2),
(15, 'image/recommendation/Unix网络编程.jpg', 'Unix网络编程', 48),
(16, 'image/recommendation/VMware.jpg', 'VMware', 39.6),
(17, 'image/recommendation/Windows编程.jpg', 'Windows编程', 65),
(18, 'image/recommendation/zbrush.jpg', 'zbrush', 123),
(19, 'image/recommendation/单片机原理.jpg', '单片机原理', 45.3),
(20, 'image/recommendation/防火墙.jpg', '防火墙', 72),
(21, 'image/recommendation/黑客攻防.jpg', '黑客攻防', 108),
(22, 'image/recommendation/计算机网络.jpg', '计算机网络', 42.4),
(23, 'image/recommendation/人工智能.jpg', '人工智能', 79.8),
(24, 'image/recommendation/入侵检测技术.jpg', '入侵检测技术', 86.5),
(25, 'image/recommendation/犀牛.jpg', '犀牛', 77.5),
(26, 'image/recommendation/移动开发.jpg', '移动开发', 66.5),
(27, 'image/recommendation/云计算.jpg', '云计算', 39.8),
(28, 'image/recommendation/组网技术.jpg', '组网技术', 48.8),
(29, 'image/recommendation/psb2.jpg', 'abcd', 23),
(30, 'image/recommendation/psb2.jpg', 'abcd', 232);

-- --------------------------------------------------------

--
-- 表的结构 `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `path` (`path`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `path`, `name`, `price`) VALUES
(1, '../image/多媒体/Pemiere.jpg', 'Pemiere', 57),
(2, '../image/backstage_development/DB2数据库.jpg', 'DB2数据库', 59.8);

-- --------------------------------------------------------

--
-- 表的结构 `user_information`
--

CREATE TABLE IF NOT EXISTS `user_information` (
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `telephone` varchar(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_information`
--

INSERT INTO `user_information` (`username`, `password`, `telephone`, `email`, `address`) VALUES
('1640706235', '302203123', '', '', ''),
('admin', '502717', '15521045823', '865096492@qq.com', ''),
('hxl', '502717', '15521045823', '435114712@qq.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
