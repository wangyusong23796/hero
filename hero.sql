-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-06-01 11:44:29
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台管理员用户表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hero_admin_users`
--

INSERT INTO `hero_admin_users` (`id`, `user`, `password`, `username`, `remamberme`, `group`) VALUES
(1, 'admin', 'd29haW5pNTIxd2FuZ3l1c29uZ2RzYWRhc2RzYWRhc2Q=', '管理员', '', 1),
(2, 'wangyusong', 'd29haW5pNTIxd2FuZ3l1c29uZ2RzYWRhc2RzYWRhc2Q=', '王玉松', '', 3);

-- --------------------------------------------------------

--
-- 表的结构 `hero_admin_users_groups`
--

CREATE TABLE IF NOT EXISTS `hero_admin_users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf16_estonian_ci NOT NULL,
  `routeid` varchar(255) COLLATE utf16_estonian_ci NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_estonian_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `hero_admin_users_groups`
--

INSERT INTO `hero_admin_users_groups` (`id`, `name`, `routeid`, `status`) VALUES
(1, '超级管理员', '4,5,6,9,11,19,25,7,10,12,13,14,15,16,17,18,20,21,22,23,24,26,28', 1),
(3, '测试用户组', '4,5,6,9,11,19,25,7,10,12,13,14,15,16,17,18,20,21,22,23,24,26', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `hero_admin_users_routes`
--

INSERT INTO `hero_admin_users_routes` (`id`, `name`, `route`, `status`, `fid`) VALUES
(4, 'top菜单', 'top', 1, 0),
(5, '工作台', 'gongzuotai', 1, 0),
(6, '基本配置', 'config', 1, 5),
(7, '网站基本信息配置', 'config/web', 1, 6),
(9, '用户控制', 'users', 1, 5),
(10, '用户管理', 'user/show', 1, 9),
(11, '权限管理', 'routes', 1, 5),
(12, '用户组管理', 'routes/group', 1, 11),
(13, '编辑权限', 'routes\\/edit\\/?\\d*', 0, 11),
(14, '添加用户组', 'routes/addgroup', 0, 11),
(15, '后台用户管理', 'routes/adminuser', 1, 11),
(16, '删除用户组', 'routes\\/delete\\/?\\d*', 0, 11),
(17, '添加用户', 'routes/createadminuser', 0, 11),
(18, '删除用户', 'routes\\/deleteadminuser\\/?\\d*', 0, 11),
(19, '栏目管理', 'lanmu', 1, 5),
(20, '管理栏目', 'lanmu/index', 1, 19),
(21, '编辑栏目', 'lanmu\\/edit\\/?\\d*', 0, 19),
(22, '删除栏目', 'lanmu\\/delete\\/?\\d*', 0, 19),
(23, '添加栏目', 'lanmu/add', 0, 19),
(24, '更新栏目', 'lanmu/update', 0, 19),
(25, '文章管理', 'article', 1, 5),
(26, '文章列表', 'article/index/1', 1, 25);

-- --------------------------------------------------------

--
-- 表的结构 `hero_users`
--

CREATE TABLE IF NOT EXISTS `hero_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nikename` varchar(32) NOT NULL,
  `via` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `logintime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hero_users`
--

INSERT INTO `hero_users` (`id`, `username`, `password`, `nikename`, `via`, `uid`, `image`, `logintime`) VALUES
(1, 'hawkboy', '', '王玉松', 'tweibo', '21E388B73BDF89F969508BE0A9138305', 'http://app.qlogo.cn/mbloghead/62c07d626e7f76770930/100', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `hero_users_configs`
--

CREATE TABLE IF NOT EXISTS `hero_users_configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `safe_int` int(6) DEFAULT NULL,
  `tswt` int(1) DEFAULT NULL,
  `daan` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hero_users_configs`
--

INSERT INTO `hero_users_configs` (`id`, `uid`, `password`, `safe_int`, `tswt`, `daan`) VALUES
(1, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL),
(3, NULL, '', 0, 0, ''),
(5, NULL, NULL, NULL, NULL, NULL),
(6, 'dasd', 'asdas', 0, 0, 'asdsad'),
(7, NULL, NULL, NULL, NULL, NULL),
(8, '21E388B73BDF89F969508BE0A9138305', 'woaini521', 0, 1, '你好');

-- --------------------------------------------------------

--
-- 表的结构 `hero_users_havearticles`
--

CREATE TABLE IF NOT EXISTS `hero_users_havearticles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `ducoment_id` int(111) DEFAULT NULL,
  `gold_number` int(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hero_users_moneys`
--

CREATE TABLE IF NOT EXISTS `hero_users_moneys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `gold` int(255) DEFAULT NULL,
  `jifen` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hero_users_nodes`
--

CREATE TABLE IF NOT EXISTS `hero_users_nodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `nodeid` varchar(255) DEFAULT NULL,
  `gold_int` int(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_articles`
--

CREATE TABLE IF NOT EXISTS `hero_web_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL COMMENT '继承的id',
  `text` text COMMENT '文章内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hero_web_articles`
--

INSERT INTO `hero_web_articles` (`id`, `document_id`, `text`) VALUES
(1, 1, 'sadfasdfasdfasdf'),
(2, 5, 'fdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsafdsafsadfsadfsadfdsa'),
(4, 0, '测试1'),
(5, 11, 'sdfsdfds'),
(6, 12, 'DADASDaqd');

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_article_types`
--

CREATE TABLE IF NOT EXISTS `hero_web_article_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) DEFAULT NULL COMMENT '类型名称',
  `type` int(11) DEFAULT NULL COMMENT '类型id',
  `submit` int(1) DEFAULT NULL,
  `modelname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_buys`
--

CREATE TABLE IF NOT EXISTS `hero_web_buys` (
  `id` int(11) NOT NULL COMMENT '主键',
  `ducument_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  `article_types` varchar(255) DEFAULT NULL COMMENT '购买的类型',
  `types` int(11) DEFAULT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='此张表是用户的购买记录';

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_configs`
--

CREATE TABLE IF NOT EXISTS `hero_web_configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站配置表铸剑',
  `titile` varchar(255) DEFAULT NULL COMMENT '网站标题',
  `key` varchar(255) DEFAULT NULL COMMENT '网站关键字',
  `desc` varchar(255) DEFAULT NULL COMMENT '网站描述说明',
  `beian` varchar(255) DEFAULT NULL COMMENT '网站备案信息',
  `banquan` varchar(255) DEFAULT NULL COMMENT '网站版权',
  `auth` int(1) DEFAULT NULL COMMENT '网站是否开放注册',
  `pic_x` int(255) DEFAULT NULL,
  `pic_y` int(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '网站是否开放',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COMMENT='网站基本配置表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hero_web_configs`
--

INSERT INTO `hero_web_configs` (`id`, `titile`, `key`, `desc`, `beian`, `banquan`, `auth`, `pic_x`, `pic_y`, `status`) VALUES
(1, 'Cg教学网', 'Cg教学网', 'Cg教学网 dsadasd   f ', 'Cg教学网', 'Cg教学网', 1, 250, 350, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_daohangs`
--

CREATE TABLE IF NOT EXISTS `hero_web_daohangs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) DEFAULT NULL COMMENT '栏目名称',
  `fid` varchar(11) DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL COMMENT '栏目类型',
  `listviewpath` varchar(255) DEFAULT NULL COMMENT '文章列表路径',
  `articleviewpath` varchar(255) DEFAULT NULL COMMENT '文章详细内容路径',
  `viewpath` varchar(255) DEFAULT NULL COMMENT '封面模板',
  `display` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `hero_web_daohangs`
--

INSERT INTO `hero_web_daohangs` (`id`, `name`, `fid`, `type`, `listviewpath`, `articleviewpath`, `viewpath`, `display`, `url`) VALUES
(2, '图文资讯', '0', '1', NULL, NULL, NULL, 1, ''),
(3, 'Cg行业新闻', '2', '1', NULL, NULL, NULL, 1, 'cg'),
(4, '视频教学', '0', '2', NULL, NULL, NULL, 1, ''),
(5, '3dmax视频', '4', '2', NULL, NULL, NULL, 1, '3d'),
(6, '素材下载', '0', '3', NULL, NULL, NULL, 1, ''),
(7, '图片素材', '6', '3', NULL, NULL, NULL, 1, 'pic');

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_documents`
--

CREATE TABLE IF NOT EXISTS `hero_web_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lanmumingcheng` varchar(155) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL COMMENT '栏目id',
  `key` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `auther` varchar(255) DEFAULT NULL,
  `click` varchar(255) DEFAULT NULL,
  `typeid` int(11) NOT NULL COMMENT '栏目id',
  `daohang_id` int(11) NOT NULL DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `pinglun` int(255) DEFAULT NULL,
  `pic_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `hero_web_documents`
--

INSERT INTO `hero_web_documents` (`id`, `lanmumingcheng`, `article_id`, `title`, `key`, `desc`, `picurl`, `auther`, `click`, `typeid`, `daohang_id`, `create_time`, `pinglun`, `pic_url`) VALUES
(1, '', 1, '测试数据试试吧', '测试数据试试吧', '测试数据试试吧', '111', '王玉松', '1', 1, 3, NULL, NULL, NULL),
(2, '', 1, 'dfsgsdfg', 'dfgsdfgsdf', 'gsdfgsdf', 'gsdfgsdf', 'gsdfgsd', '1', 1, 3, NULL, NULL, NULL),
(3, '', 1, 'dasdadasdasd', 'dasdasd', 'as', 'asd', 'asdasd', '1', 1, 3, NULL, NULL, NULL),
(4, '', 1, 'fsadfasdfa', 'fsdafafdas', 'dsafasd', 'fasd', 'dfsafasd', '1', 1, 3, NULL, NULL, NULL),
(5, 'about', 1, '关于我们', '111', '1111', '221', '212', '1', 4, 0, NULL, NULL, NULL),
(7, '', NULL, '测试1', '测试1', '测试1', '测试1', '测试1', NULL, 0, 3, NULL, NULL, NULL),
(8, '', NULL, '1111', '1111', '1111', '1111', '1111', NULL, 0, 2, NULL, NULL, NULL),
(9, '', NULL, 'asdasd', '123', '213123', '4321421', '而威尔逊', NULL, 0, 2, NULL, NULL, NULL),
(10, '', NULL, '1111', 'asdasd', 'sdfgsaf', 'sdfsaddf', 'sadfasdf', NULL, 0, 2, NULL, NULL, NULL),
(11, 'sdfsdfsdf', NULL, '1111', 'asfdsafdds', 'sdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdf', NULL, 0, 2, NULL, NULL, NULL),
(12, '', NULL, 'dsfsadfvWADFC', 'SDfFd', 'asdfaDFd', 'sdSFD', 'SADASDASD', NULL, 0, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_pics`
--

CREATE TABLE IF NOT EXISTS `hero_web_pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `document_id` int(11) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL COMMENT '图片上传的预览图片',
  `picurl2` varchar(255) DEFAULT NULL,
  `picurl3` varchar(255) DEFAULT NULL,
  `picurl4` varchar(255) DEFAULT NULL,
  `picurl5` varchar(255) DEFAULT NULL,
  `money` int(255) DEFAULT NULL COMMENT '出售的金钱',
  `picdumploadpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_types`
--

CREATE TABLE IF NOT EXISTS `hero_web_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hero_web_types`
--

INSERT INTO `hero_web_types` (`id`, `type_name`, `type_id`) VALUES
(1, '文章类型', 1),
(2, '视频类型', 2),
(3, '图片素材', 3),
(4, '单页类型', 4);

-- --------------------------------------------------------

--
-- 表的结构 `hero_web_videos`
--

CREATE TABLE IF NOT EXISTS `hero_web_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `document_id` int(11) DEFAULT NULL,
  `videospath` varchar(255) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='此张表是视频表.' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
