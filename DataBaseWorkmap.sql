  /*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 60004
Source Host           : localhost:3306
Source Database       : workmaps

Target Server Type    : MYSQL
Target Server Version : 60004
File Encoding         : 65001

Date: 2014-05-13 20:32:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `acti_codigos`
-- ----------------------------
DROP TABLE IF EXISTS `acti_codigos`;
CREATE TABLE `acti_codigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `cod` text,
  `expi` datetime DEFAULT NULL,
  `listo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of acti_codigos
-- ----------------------------
INSERT INTO `acti_codigos` VALUES ('1', '1', '3213', '2014-05-13 19:53:35', '1');
INSERT INTO `acti_codigos` VALUES ('2', '2', 'a97b96d868d98c556448a72f3e09223c', '2014-05-14 20:57:38', null);
INSERT INTO `acti_codigos` VALUES ('3', '3', 'b3eadf657ac769717e0bce12da92b8fe', '0000-00-00 00:00:00', '1');
INSERT INTO `acti_codigos` VALUES ('4', '4', '6ec47f0df17b4276cb510077a3e4e759', '0000-00-00 00:00:00', '1');

-- ----------------------------
-- Table structure for `miembros`
-- ----------------------------
DROP TABLE IF EXISTS `miembros`;
CREATE TABLE `miembros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nick` varchar(255) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `activar` int(11) DEFAULT NULL,
  `group_id` tinyint(4) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `unban_time` int(11) DEFAULT NULL,
  `logincount` mediumint(9) DEFAULT NULL,
  `last_ip` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miembros
-- ----------------------------
INSERT INTO `miembros` VALUES ('1', 'test', 'test', 'gerardo.manuel3@gmail.com', '1', '99', '0', null, null, null, '2014-05-13');
INSERT INTO `miembros` VALUES ('3', 'smoc1991', 'test1234', 'test@test.cm21', '1', null, '1', null, null, null, '2014-05-13');
INSERT INTO `miembros` VALUES ('4', 'tester1234', 'tester', 'teste@asd.com', '1', null, '1', null, null, null, '2014-05-13');
INSERT INTO `miembros` VALUES ('5', 'test2', 'test2', 'test2@test2.com', '2', null, '1', null, null, null, '2014-05-13');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `rut` varchar(255) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('1', '1', 'Gerardo', 'Muñoz', '1-9', '1');
INSERT INTO `user_info` VALUES ('2', '3', 'Yeral', 'Tester', '1-9', '1');
INSERT INTO `user_info` VALUES ('3', '4', 'tester', 'tester', '1-9', '1');
INSERT INTO `user_info` VALUES ('4', '5', 'test2', 'test2', '17784136-6', '1');
