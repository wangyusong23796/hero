/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : hero

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-04-19 18:09:00
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
  PRIMARY KEY (`id`,`user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理员用户表';

-- ----------------------------
-- Records of hero_admin_users
-- ----------------------------
INSERT INTO `hero_admin_users` VALUES ('1', 'admin', 'd29haW5pNTIx', '管理员', '', '1');
INSERT INTO `hero_admin_users` VALUES ('2', 'wangyusong', 'd29haW5pNTIx', '王玉松', '', '1');

-- ----------------------------
-- Table structure for `hero_admin_users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `hero_admin_users_groups`;
CREATE TABLE `hero_admin_users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf16_estonian_ci NOT NULL,
  `uid` varchar(255) COLLATE utf16_estonian_ci NOT NULL,
  `routeid` varchar(255) COLLATE utf16_estonian_ci NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_estonian_ci;

-- ----------------------------
-- Records of hero_admin_users_groups
-- ----------------------------
INSERT INTO `hero_admin_users_groups` VALUES ('1', '超级管理员', '1', '1,2,3,4,5,6,7,8,9,10', '1');

-- ----------------------------
-- Table structure for `hero_admin_users_routes`
-- ----------------------------
DROP TABLE IF EXISTS `hero_admin_users_routes`;
CREATE TABLE `hero_admin_users_routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `route` varchar(255) NOT NULL,
  `fid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hero_admin_users_routes
-- ----------------------------
INSERT INTO `hero_admin_users_routes` VALUES ('1', '网站基本配置', 'config', '0');
INSERT INTO `hero_admin_users_routes` VALUES ('2', '查看基本配置', 'config/show', '1');
INSERT INTO `hero_admin_users_routes` VALUES ('3', '测试', 'test', '0');
INSERT INTO `hero_admin_users_routes` VALUES ('4', 'top菜单', 'top', '0');
INSERT INTO `hero_admin_users_routes` VALUES ('5', 'left菜单栏', 'left', '1');
