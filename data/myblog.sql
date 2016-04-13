/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : myblog

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-04-14 01:55:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `xzg_articles`
-- ----------------------------
DROP TABLE IF EXISTS `xzg_articles`;
CREATE TABLE `xzg_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '1',
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_articles
-- ----------------------------
INSERT INTO `xzg_articles` VALUES ('1', '我的第一篇博客', '我的第一篇博客', '', '1', '0', '0', '0', '1', '1');
INSERT INTO `xzg_articles` VALUES ('2', 'php', '<p>php是一门web开发语言</p>', 'php', '1', '0', '1460308397', '1460375146', '1', '1');

-- ----------------------------
-- Table structure for `xzg_category`
-- ----------------------------
DROP TABLE IF EXISTS `xzg_category`;
CREATE TABLE `xzg_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_category
-- ----------------------------

-- ----------------------------
-- Table structure for `xzg_comment`
-- ----------------------------
DROP TABLE IF EXISTS `xzg_comment`;
CREATE TABLE `xzg_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `articles_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `xzg_lookup`
-- ----------------------------
DROP TABLE IF EXISTS `xzg_lookup`;
CREATE TABLE `xzg_lookup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_lookup
-- ----------------------------

-- ----------------------------
-- Table structure for `xzg_tags`
-- ----------------------------
DROP TABLE IF EXISTS `xzg_tags`;
CREATE TABLE `xzg_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_tags
-- ----------------------------

-- ----------------------------
-- Table structure for `xzg_user`
-- ----------------------------
DROP TABLE IF EXISTS `xzg_user`;
CREATE TABLE `xzg_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `reg_time` int(11) NOT NULL,
  `last_login_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_user
-- ----------------------------
INSERT INTO `xzg_user` VALUES ('1', '2', 'admin', 'f788c2869f78e971bd2be9a3f6652ca1', '小诸葛', '172099135@qq.com', '1460225216', '1460225216');
