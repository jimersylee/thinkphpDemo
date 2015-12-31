/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : thinkphp

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-31 17:25:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_article
-- ----------------------------
DROP TABLE IF EXISTS `think_article`;
CREATE TABLE `think_article` (
  `ID` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `isFather` tinyint(1) NOT NULL COMMENT '是否为主标题',
  `fatherTitle` varchar(50) DEFAULT NULL,
  `fatherID` int(4) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('1', '0', 'ThinkPHP Demo 文档', '2', '快速入门1', '快速入门（十一）：Action参数绑定 从本章开始，我们陆续为大家介绍下控制器的一些高级特性用法，让你更深入了解ThinkPHP控制器的独特功能。 Action参数绑定 在之前的内容中，涉及的控制器操作方法都是没有任何参数的，其实ThinkPHP可以支持操作方法的参数绑定功能。 Action参数绑定是通过直接绑定URL地址中的变量作为操作方法的参数，可以简化方法的定义甚至路由的解析,其原理是把URL中的参数（不包括模块、控制器和操作名）和控制器的操作方法中的参数（按变量名或者变量顺序）进行绑定。 按变量名绑定 默认的参数绑定方式是按照变量名进行绑定，例如，我们给Blog控制器定义了两个操作方法read和archive方法，由于read操作需要指定一个id参数，archive方法需要指定年份（year）和月份（month）两个参数，那么我们可以如下定义： ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'jimersylee');
INSERT INTO `think_article` VALUES ('2', '1', '', '0', 'ThinkPHP Demo 文档', '快速入门', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'jimersylee');
INSERT INTO `think_article` VALUES ('3', '0', 'ThinkPHP Demo 文档', '2', '快速入门2', '快速入门（十一）：Action参数绑定 从本章开始，我们陆续为大家介绍下控制器的一些高级特性用法，让你更深入了解ThinkPHP控制器的独特功能。 Action参数绑定 在之前的内容中，涉及的控制器操作方法都是没有任何参数的，其实ThinkPHP可以支持操作方法的参数绑定功能。 Action参数绑定是通过直接绑定URL地址中的变量作为操作方法的参数，可以简化方法的定义甚至路由的解析,其原理是把URL中的参数（不包括模块、控制器和操作名）和控制器的操作方法中的参数（按变量名或者变量顺序）进行绑定。 按变量名绑定 默认的参数绑定方式是按照变量名进行绑定，例如，我们给Blog控制器定义了两个操作方法read和archive方法，由于read操作需要指定一个id参数，archive方法需要指定年份（year）和月份（month）两个参数，那么我们可以如下定义： ', null, null, 'jimersylee');

-- ----------------------------
-- Table structure for think_comment
-- ----------------------------
DROP TABLE IF EXISTS `think_comment`;
CREATE TABLE `think_comment` (
  `ID` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `articleID` int(11) DEFAULT NULL,
  `userName` varchar(15) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `fatherID` int(11) DEFAULT NULL,
  `submitTime` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_comment
-- ----------------------------
INSERT INTO `think_comment` VALUES ('1', '0', null, '哈哈', '0', null);
INSERT INTO `think_comment` VALUES ('5', '2', 'jimersylee', '23213', '0', null);
INSERT INTO `think_comment` VALUES ('6', '2', 'jimersylee', '哈哈', '0', null);
INSERT INTO `think_comment` VALUES ('7', '2', 'jimersylee', '疯狂评论', '0', null);

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `psw` varchar(20) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `cookie` varchar(500) DEFAULT NULL,
  `regTime` datetime DEFAULT NULL,
  `lastTime` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL COMMENT '头像路径',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('1', 'jimersylee', '123456', null, null, null, null, null, null);
