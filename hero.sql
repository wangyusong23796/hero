-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-25 12:52:46
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hero`
--

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_users`
--

CREATE TABLE IF NOT EXISTS `hero_admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `remamberme` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台管理员用户表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hero_admin_users`
--

INSERT INTO `hero_admin_users` (`id`, `user`, `password`, `username`, `remamberme`, `group`) VALUES
(1, 'admin', 'd29haW5pNTIx', '管理员', '', 1),
(2, 'wangyusong', 'd29haW5pNTIx', '王玉松', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_users_groups`
--

CREATE TABLE IF NOT EXISTS `hero_admin_users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf16_estonian_ci NOT NULL,
  `uid` varchar(255) COLLATE utf16_estonian_ci NOT NULL,
  `routeid` varchar(255) COLLATE utf16_estonian_ci NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_estonian_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hero_admin_users_groups`
--

INSERT INTO `hero_admin_users_groups` (`id`, `name`, `uid`, `routeid`, `status`) VALUES
(1, '超级管理员', '1', '4,5,6,9,11,7,8,10,12,13', 1);

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_users_routes`
--

CREATE TABLE IF NOT EXISTS `hero_admin_users_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `route` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `fid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `hero_admin_users_routes`
--

INSERT INTO `hero_admin_users_routes` (`id`, `name`, `route`, `status`, `fid`) VALUES
(4, 'top菜单', 'top', 1, 0),
(5, '工作台', 'gongzuotai', 1, 0),
(6, '基本配置', 'config', 1, 5),
(7, '网站基本信息配置', 'config/web', 1, 6),
(8, '用户注册控制', 'config/reg', 1, 6),
(9, '用户控制', 'users', 1, 5),
(10, '用户管理', 'user/show', 1, 9),
(11, '权限管理', 'routes', 1, 5),
(12, '用户组管理', 'routes/group', 1, 11),
(13, '编辑权限', 'routes\\/edit\\/?\\d*', 0, 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
