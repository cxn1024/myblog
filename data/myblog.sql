/*
Navicat MySQL Data Transfer

Source Server         : chen
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : myblog

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-04-20 15:02:32
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
  `description` text,
  `tags` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '1',
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_articles
-- ----------------------------
INSERT INTO `xzg_articles` VALUES ('1', '我的第一篇博客', '<p>我的第一篇博客</p>', null, '博客', '1', '3', '0', '1461035205', '1', '1');
INSERT INTO `xzg_articles` VALUES ('2', 'php', '<p>php是一门web开发语言</p>', null, 'php', '1', '10', '1460308397', '1460375146', '1', '1');
INSERT INTO `xzg_articles` VALUES ('6', 'nginx配置yii2 URL重写规则', '<ol start=\"1\" style=\"margin-bottom: 1em; margin-left: 40px; padding: 0px; border: none; color: rgb(92, 92, 92); font-family: Consolas, &#39;Courier New&#39;, Courier, mono, serif; font-size: 12px; line-height: 21.6px; white-space: normal; background-color: rgb(255, 255, 255);\" class=\" list-paddingleft-2\"><li><p>server&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;listen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;server_name&nbsp;&nbsp;localhost;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#charset&nbsp;koi8-r;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#access_log&nbsp;&nbsp;/var/log/nginx/log/host.access.log&nbsp;&nbsp;main;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;=&nbsp;/favicon.ico&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;log_not_found&nbsp;off;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;access_log&nbsp;off;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;=&nbsp;/robots.txt&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allow&nbsp;all;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;log_not_found&nbsp;off;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;access_log&nbsp;off;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;/&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try_files&nbsp;$uri&nbsp;$uri/&nbsp;/index.php?$args;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!-e&nbsp;$request_filename){&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rewrite&nbsp;^/(.*)&nbsp;/index.php&nbsp;last;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root&nbsp;&nbsp;&nbsp;/usr/share/nginx/html;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;index&nbsp;&nbsp;index.php&nbsp;&nbsp;index.html&nbsp;&nbsp;index.htm;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;~&nbsp;/(protected|framework|nbproject|themes/w+/views|index-test.php)&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deny&nbsp;all;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;for&nbsp;production&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;internal;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;log_not_found&nbsp;off;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;access_log&nbsp;off;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#error_page&nbsp;&nbsp;404&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/404.html;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;redirect&nbsp;server&nbsp;error&nbsp;pages&nbsp;to&nbsp;the&nbsp;static&nbsp;page&nbsp;/50x.html&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;error_page&nbsp;&nbsp;&nbsp;500&nbsp;502&nbsp;503&nbsp;504&nbsp;&nbsp;/50x.html;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;=&nbsp;/50x.html&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root&nbsp;&nbsp;&nbsp;/usr/share/nginx/html;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;proxy&nbsp;the&nbsp;PHP&nbsp;scripts&nbsp;to&nbsp;Apache&nbsp;listening&nbsp;on&nbsp;127.0.0.1:80&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#location&nbsp;~&nbsp;.php$&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;&nbsp;proxy_pass&nbsp;&nbsp;&nbsp;http://127.0.0.1;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;pass&nbsp;the&nbsp;PHP&nbsp;scripts&nbsp;to&nbsp;FastCGI&nbsp;server&nbsp;listening&nbsp;on&nbsp;127.0.0.1:9000&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;~&nbsp;.php$&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/share/nginx/html;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include&nbsp;&nbsp;fastcgi_params;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_pass&nbsp;&nbsp;&nbsp;127.0.0.1:9000;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_index&nbsp;&nbsp;index.php;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_param&nbsp;&nbsp;SCRIPT_FILENAME&nbsp;&nbsp;/usr/share/nginx/html$fastcgi_script_name;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;include&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fastcgi_params;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;deny&nbsp;access&nbsp;to&nbsp;.htaccess&nbsp;files,&nbsp;if&nbsp;Apache&#39;s&nbsp;document&nbsp;root&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;concurs&nbsp;with&nbsp;nginx&#39;s&nbsp;one&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#location&nbsp;~&nbsp;/.ht&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;&nbsp;&nbsp;deny&nbsp;&nbsp;all;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#}&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;deny&nbsp;access&nbsp;to&nbsp;.htaccess&nbsp;files,&nbsp;if&nbsp;Apache&#39;s&nbsp;document&nbsp;root&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;concurs&nbsp;with&nbsp;nginx&#39;s&nbsp;one&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;location&nbsp;~&nbsp;/(.svn|.git|.ht|.DS)&nbsp;{&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deny&nbsp;all;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;internal;&nbsp;&nbsp;</p></li><li><p>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</p></li><li><p>} &nbsp;</p></li></ol><p>原文链接：http://www.cnblogs.com/grimm/p/5389970.html</p>', '用yii2搭建项目放到nginx的服务器上，nginx的配置', 'nginx,yii2', '1', '9', '1461132428', '1461134465', '1', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xzg_tags
-- ----------------------------
INSERT INTO `xzg_tags` VALUES ('1', 'php', '1');

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
