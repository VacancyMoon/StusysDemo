-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 13 日 21:52
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `stusys`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `stu_num` int(11) NOT NULL,
  `stu_name` varchar(20) NOT NULL,
  PRIMARY KEY (`stu_num`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`, `stu_num`, `stu_name`) VALUES
('admin', 'admin', 1, '管理员'),
('dhr', 'dhr', 1517030205, '邓瀚荣'),
('A4', '123456', 1517030204, '小D'),
('A3', '1234', 1517030203, '小C'),
('A2', '123456', 1517030202, '小B'),
('A1', '1234', 1517030201, '小A'),
('xxx', 'xxx', 1517030210, 'xxx');

-- --------------------------------------------------------

--
-- 表的结构 `liuyanbiao`
--

CREATE TABLE IF NOT EXISTS `liuyanbiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `liuyan` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `liuyanbiao`
--

INSERT INTO `liuyanbiao` (`id`, `username`, `liuyan`, `time`) VALUES
(48, 'admin', '欢迎大家，来到学生信息系统。。', '1525397130'),
(49, 'A1', '签个到。。。', '1525419014'),
(51, 'A2', '签到。。。。', '1525419048'),
(52, 'dhr', '冒个泡', '1525419064'),
(53, 'dhr', '哈哈', '1525419083'),
(54, 'dhr', '嘿嘿', '1525419088');

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `stu_num` int(11) NOT NULL COMMENT '学号',
  `stu_name` varchar(50) NOT NULL COMMENT '姓名',
  `stu_course` varchar(50) NOT NULL COMMENT '课程',
  `stu_type` varchar(50) NOT NULL COMMENT '类型',
  `stu_score` int(11) NOT NULL COMMENT '成绩',
  PRIMARY KEY (`id`),
  KEY `stu_num` (`stu_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`id`, `username`, `stu_num`, `stu_name`, `stu_course`, `stu_type`, `stu_score`) VALUES
(35, 'A1', 1517030201, '小A', '计算机网络基础', '必修课', 88),
(36, 'A1', 1517030201, '小A', '网络互联设备配置', '必修课', 88),
(37, 'A1	', 1517030201, '小A', '动态网站开发与设计', '必修课', 77),
(38, 'A1', 1517030201, '小A', 'C语言程序设计', '必修课', 98),
(39, 'A1', 1517030201, '小A', '国学导引', '选修课', 99),
(40, 'A1', 1517030201, '小A', '网络管理员', '必修课', 85),
(41, 'dhr', 1517030205, '邓瀚荣', '计算机网络基础', '必修课', 99),
(42, 'dhr', 1517030205, '邓瀚荣', '网络互联设备配置', '必修课', 99),
(43, 'dhr', 1517030205, '邓瀚荣', '动态网站开发与设计', '必修课', 89),
(44, 'dhr', 1517030205, '邓瀚荣', 'C语言程序设计', '必修课', 95),
(45, 'dhr', 1517030205, '邓瀚荣', '唐诗宋词鉴赏', '选修课', 85);

-- --------------------------------------------------------

--
-- 表的结构 `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
  `stu_num` varchar(20) NOT NULL COMMENT '学号',
  `username` varchar(50) NOT NULL,
  `stu_name` varchar(20) DEFAULT NULL COMMENT '姓名',
  `stu_xy` varchar(20) DEFAULT NULL COMMENT '学院',
  `stu_zy` varchar(20) DEFAULT NULL COMMENT '专业',
  `stu_class` varchar(20) DEFAULT NULL COMMENT '班级',
  `stu_gender` varchar(20) DEFAULT NULL COMMENT '性别',
  `stu_jg` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `stu_zz` varchar(10) DEFAULT NULL COMMENT '政治面貌',
  `stu_home` varchar(100) DEFAULT NULL COMMENT '家庭住址',
  `stu_iphone` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `stu_hobby` varchar(20) DEFAULT NULL COMMENT '兴趣爱好',
  `stu_study` varchar(100) DEFAULT NULL COMMENT '学校经历',
  PRIMARY KEY (`stu_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stuinfo`
--

INSERT INTO `stuinfo` (`stu_num`, `username`, `stu_name`, `stu_xy`, `stu_zy`, `stu_class`, `stu_gender`, `stu_jg`, `stu_zz`, `stu_home`, `stu_iphone`, `stu_hobby`, `stu_study`) VALUES
('1517030205', 'dhr', '邓瀚荣', '信息工程学院', '计算机网络技术', '15网络二班', '男', '广东河源', '团员', '广东河源', '13035725379', '上网,网页设计', '惠州经济职业技术学院'),
('1517030201', 'A1', '小A', '信息工程学院', '计算机网络技术', '15网络一班', '男', '广东河源', '团员', '广东河源', '13035725379', '上网,网页设计', '惠州经济职业技术学院'),
('1517030202', 'A2', '小B', '信息工程学院', '计算机网络技术', '15网络一班', '男', '广东河源', '团员', '广东河源', '13035725379', '上网,网页设计', '惠州经济职业技术学院'),
('1517030203', 'A3', '小C', '信息工程学院', '软件开发', '15网络二班', '男', '广东河源', '团员', '广东河源', '13035725379', '网页设计', '惠州经济职业技术学院'),
('1517030204', 'A4', '小D', '财经学院', '工商管理', '15网络二班', '女', '广东河源', '团员', '广东河源', '13035725379', '上网', '惠州经济职业技术学院'),
('1517030206', 'A5', '小E', '信息工程学院', '计算机网络技术', '15网络四班', '男', '广东河源', '团员', '广东河源', '13035725379', '打球,上网,网页设计', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
