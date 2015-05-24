/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : hero

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-05-22 18:01:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hero_admin_users`
-- ----------------------------
DROP TABLE IF EXISTS `hero_admin_users`;
CREATE TABLE `hero_admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `remamberme` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理员用户表';

-- ----------------------------
-- Records of hero_admin_users
-- ----------------------------
INSERT INTO `hero_admin_users` VALUES ('1', 'admin', 'd29haW5pNTIxd2FuZ3l1c29uZ2RzYWRhc2RzYWRhc2Q=', '管理员', '', '1');
INSERT INTO `hero_admin_users` VALUES ('2', 'wangyusong', 'd29haW5pNTIxd2FuZ3l1c29uZ2RzYWRhc2RzYWRhc2Q=', '王玉松', '', '3');

-- ----------------------------
-- Table structure for `hero_admin_users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `hero_admin_users_groups`;
CREATE TABLE `hero_admin_users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf16_estonian_ci NOT NULL,
  `routeid` varchar(255) COLLATE utf16_estonian_ci NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_estonian_ci;

-- ----------------------------
-- Records of hero_admin_users_groups
-- ----------------------------
INSERT INTO `hero_admin_users_groups` VALUES ('1', '超级管理员', '4,5,6,9,11,19,25,7,10,12,13,14,15,16,17,18,20,21,22,23,24,26', '1');
INSERT INTO `hero_admin_users_groups` VALUES ('3', '测试用户组', '4,5,6,9,11,19,25,7,10,12,13,14,15,16,17,18,20,21,22,23,24,26', '1');

-- ----------------------------
-- Table structure for `hero_admin_users_routes`
-- ----------------------------
DROP TABLE IF EXISTS `hero_admin_users_routes`;
CREATE TABLE `hero_admin_users_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `route` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `fid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hero_admin_users_routes
-- ----------------------------
INSERT INTO `hero_admin_users_routes` VALUES ('4', 'top菜单', 'top', '1', '0');
INSERT INTO `hero_admin_users_routes` VALUES ('5', '工作台', 'gongzuotai', '1', '0');
INSERT INTO `hero_admin_users_routes` VALUES ('6', '基本配置', 'config', '1', '5');
INSERT INTO `hero_admin_users_routes` VALUES ('7', '网站基本信息配置', 'config/web', '1', '6');
INSERT INTO `hero_admin_users_routes` VALUES ('9', '用户控制', 'users', '1', '5');
INSERT INTO `hero_admin_users_routes` VALUES ('10', '用户管理', 'user/show', '1', '9');
INSERT INTO `hero_admin_users_routes` VALUES ('11', '权限管理', 'routes', '1', '5');
INSERT INTO `hero_admin_users_routes` VALUES ('12', '用户组管理', 'routes/group', '1', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('13', '编辑权限', 'routes\\/edit\\/?\\d*', '0', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('14', '添加用户组', 'routes/addgroup', '0', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('15', '后台用户管理', 'routes/adminuser', '1', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('16', '删除用户组', 'routes\\/delete\\/?\\d*', '0', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('17', '添加用户', 'routes/createadminuser', '0', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('18', '删除用户', 'routes\\/deleteadminuser\\/?\\d*', '0', '11');
INSERT INTO `hero_admin_users_routes` VALUES ('19', '栏目管理', 'lanmu', '1', '5');
INSERT INTO `hero_admin_users_routes` VALUES ('20', '管理栏目', 'lanmu/index', '1', '19');
INSERT INTO `hero_admin_users_routes` VALUES ('21', '编辑栏目', 'lanmu\\/edit\\/?\\d*', '0', '19');
INSERT INTO `hero_admin_users_routes` VALUES ('22', '删除栏目', 'lanmu\\/delete\\/?\\d*', '0', '19');
INSERT INTO `hero_admin_users_routes` VALUES ('23', '添加栏目', 'lanmu/add', '0', '19');
INSERT INTO `hero_admin_users_routes` VALUES ('24', '更新栏目', 'lanmu/update', '0', '19');
INSERT INTO `hero_admin_users_routes` VALUES ('25', '文章管理', 'article', '1', '5');
INSERT INTO `hero_admin_users_routes` VALUES ('26', '文章列表', 'article/index', '1', '25');
INSERT INTO `hero_admin_users_routes` VALUES ('27', '', '', null, '0');

-- ----------------------------
-- Table structure for `hero_users`
-- ----------------------------
DROP TABLE IF EXISTS `hero_users`;
CREATE TABLE `hero_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nikename` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_users
-- ----------------------------

-- ----------------------------
-- Table structure for `hero_users_moneys`
-- ----------------------------
DROP TABLE IF EXISTS `hero_users_moneys`;
CREATE TABLE `hero_users_moneys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_users_moneys
-- ----------------------------

-- ----------------------------
-- Table structure for `hero_web_articles`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_articles`;
CREATE TABLE `hero_web_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL COMMENT '继承的id',
  `text` text COMMENT '文章内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_web_articles
-- ----------------------------
INSERT INTO `hero_web_articles` VALUES ('1', '1', 'sadfasdfasdfasdf');

-- ----------------------------
-- Table structure for `hero_web_article_types`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_article_types`;
CREATE TABLE `hero_web_article_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) DEFAULT NULL COMMENT '类型名称',
  `type` int(11) DEFAULT NULL COMMENT '类型id',
  `submit` int(1) DEFAULT NULL,
  `modelname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_web_article_types
-- ----------------------------

-- ----------------------------
-- Table structure for `hero_web_buys`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_buys`;
CREATE TABLE `hero_web_buys` (
  `id` int(11) NOT NULL COMMENT '主键',
  `ducument_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  `article_types` varchar(255) DEFAULT NULL COMMENT '购买的类型',
  `types` int(11) DEFAULT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='此张表是用户的购买记录';

-- ----------------------------
-- Records of hero_web_buys
-- ----------------------------

-- ----------------------------
-- Table structure for `hero_web_configs`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_configs`;
CREATE TABLE `hero_web_configs` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COMMENT='网站基本配置表';

-- ----------------------------
-- Records of hero_web_configs
-- ----------------------------
INSERT INTO `hero_web_configs` VALUES ('1', 'Cg教学网', 'Cg教学网', 'Cg教学网 dsadasd   f ', 'Cg教学网', 'Cg教学网', '1', '250', '350', '1');

-- ----------------------------
-- Table structure for `hero_web_daohangs`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_daohangs`;
CREATE TABLE `hero_web_daohangs` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_web_daohangs
-- ----------------------------
INSERT INTO `hero_web_daohangs` VALUES ('2', '图文资讯', '0', '1', null, null, null, '1', 'pic');
INSERT INTO `hero_web_daohangs` VALUES ('3', 'Cg行业新闻', '2', '1', null, null, null, '1', 'news/cg');
INSERT INTO `hero_web_daohangs` VALUES ('4', '视频教学', '0', '2', null, null, null, '1', '');
INSERT INTO `hero_web_daohangs` VALUES ('5', '3dmax视频', '4', '2', null, null, null, '1', 'void/3d');
INSERT INTO `hero_web_daohangs` VALUES ('6', '素材下载', '0', '3', null, null, null, '1', '');
INSERT INTO `hero_web_daohangs` VALUES ('7', '图片素材', '6', '3', null, null, null, '1', 'sucai/pic');

-- ----------------------------
-- Table structure for `hero_web_documents`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_documents`;
CREATE TABLE `hero_web_documents` (
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_web_documents
-- ----------------------------
INSERT INTO `hero_web_documents` VALUES ('1', 'cg', '1', '测试数据试试吧', '测试数据试试吧', '测试数据试试吧', '111', '王玉松', '测试数据试试吧', '0');

-- ----------------------------
-- Table structure for `hero_web_pics`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_pics`;
CREATE TABLE `hero_web_pics` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- ----------------------------
-- Records of hero_web_pics
-- ----------------------------

-- ----------------------------
-- Table structure for `hero_web_videos`
-- ----------------------------
DROP TABLE IF EXISTS `hero_web_videos`;
CREATE TABLE `hero_web_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `document_id` int(11) DEFAULT NULL,
  `videospath` varchar(255) DEFAULT NULL,
  `money` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='此张表是视频表.';

-- ----------------------------
-- Records of hero_web_videos
-- ----------------------------
