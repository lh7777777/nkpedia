/*
 Navicat Premium Data Transfer

 Source Server         : dbcloud
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 106.14.201.205:3306
 Source Schema         : yii999

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 22/07/2019 00:07:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_entry_basicinfo
-- ----------------------------
DROP TABLE IF EXISTS `pedia_entry_basicinfo`;
CREATE TABLE `pedia_entry_basicinfo`  (
  `eid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '词条id',
  `title` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '词条标题',
  `brief_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '词条简介',
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '词条内容',
  `grade` double NOT NULL DEFAULT 3 COMMENT '词条评分',
  `isshow` tinyint(1) NOT NULL DEFAULT 1 COMMENT '是否显示',
  `clicktimes` int(11) NOT NULL DEFAULT 0 COMMENT '点击次数',
  `needperm` mediumint(8) UNSIGNED NOT NULL DEFAULT 1 COMMENT '编辑词条所需权限',
  `edittime` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) COMMENT '最后修改时间',
  `lastediter` int(10) UNSIGNED NOT NULL COMMENT '最后修改用户',
  PRIMARY KEY (`eid`) USING BTREE,
  INDEX `lastediter`(`lastediter`) USING BTREE,
  INDEX `click`(`clicktimes`) USING BTREE,
  CONSTRAINT `pedia_entry_basicinfo_ibfk_1` FOREIGN KEY (`lastediter`) REFERENCES `pedia_user_member` (`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 48 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '词条基本信息' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_entry_category
-- ----------------------------
DROP TABLE IF EXISTS `pedia_entry_category`;
CREATE TABLE `pedia_entry_category`  (
  `cid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '类别名称',
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '词条类别' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_entry_classification
-- ----------------------------
DROP TABLE IF EXISTS `pedia_entry_classification`;
CREATE TABLE `pedia_entry_classification`  (
  `eid` int(10) UNSIGNED NOT NULL COMMENT '词条id',
  `cid` smallint(5) UNSIGNED NOT NULL COMMENT '类别id',
  PRIMARY KEY (`eid`, `cid`) USING BTREE,
  INDEX `cid`(`cid`) USING BTREE,
  CONSTRAINT `pedia_entry_classification_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `pedia_entry_basicinfo` (`eid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedia_entry_classification_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `pedia_entry_category` (`cid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '词条分类' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_entry_historyversion
-- ----------------------------
DROP TABLE IF EXISTS `pedia_entry_historyversion`;
CREATE TABLE `pedia_entry_historyversion`  (
  `vid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '版本id',
  `edit_time` datetime(0) NOT NULL COMMENT '修改时间',
  `edit_cont` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '修改内容',
  `eid` int(10) UNSIGNED NOT NULL COMMENT '词条id',
  `uid` int(10) UNSIGNED NOT NULL COMMENT '用户id',
  PRIMARY KEY (`vid`) USING BTREE,
  INDEX `uid`(`uid`) USING BTREE,
  INDEX `hisword`(`eid`) USING BTREE,
  CONSTRAINT `pedia_entry_historyversion_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `pedia_entry_basicinfo` (`eid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedia_entry_historyversion_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `pedia_user_member` (`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 350 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '词条历史版本' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_entry_relatedlinks
-- ----------------------------
DROP TABLE IF EXISTS `pedia_entry_relatedlinks`;
CREATE TABLE `pedia_entry_relatedlinks`  (
  `eid` int(10) UNSIGNED NOT NULL COMMENT '主词条id',
  `lid` int(10) UNSIGNED NOT NULL COMMENT '链接词条id',
  PRIMARY KEY (`eid`, `lid`) USING BTREE,
  CONSTRAINT `pedia_entry_relatedlinks_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `pedia_entry_basicinfo` (`eid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedia_entry_relatedlinks_ibfk_2` FOREIGN KEY (`eid`) REFERENCES `pedia_entry_basicinfo` (`eid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '相关链接' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_entry_report
-- ----------------------------
DROP TABLE IF EXISTS `pedia_entry_report`;
CREATE TABLE `pedia_entry_report`  (
  `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '举报id',
  `vid` smallint(5) UNSIGNED NOT NULL COMMENT '被举报词条历史版本',
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '举报原因描述',
  PRIMARY KEY (`rid`) USING BTREE,
  INDEX `vid`(`vid`) USING BTREE,
  CONSTRAINT `pedia_entry_report_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `pedia_entry_historyversion` (`vid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '举报行为' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_user_aboutus
-- ----------------------------
DROP TABLE IF EXISTS `pedia_user_aboutus`;
CREATE TABLE `pedia_user_aboutus`  (
  `uid` int(10) UNSIGNED NOT NULL COMMENT '关联用户id',
  `sid` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '学号',
  `sname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '姓名',
  `ssex` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '性别',
  `smajor` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '专业',
  `semail` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`uid`) USING BTREE,
  CONSTRAINT `pedia_user_aboutus_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `pedia_user_member` (`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '关于我们' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_user_adorn
-- ----------------------------
DROP TABLE IF EXISTS `pedia_user_adorn`;
CREATE TABLE `pedia_user_adorn`  (
  `uid` int(10) UNSIGNED NOT NULL COMMENT '用户id',
  `mid` mediumint(8) UNSIGNED NOT NULL COMMENT '勋章id',
  PRIMARY KEY (`uid`, `mid`) USING BTREE,
  INDEX `mid`(`mid`) USING BTREE,
  CONSTRAINT `pedia_user_adorn_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `pedia_user_member` (`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedia_user_adorn_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `pedia_user_medal` (`mid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户佩戴' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_user_group
-- ----------------------------
DROP TABLE IF EXISTS `pedia_user_group`;
CREATE TABLE `pedia_user_group`  (
  `gid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户组id',
  `gname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '用户组名称',
  `pid` smallint(5) UNSIGNED NOT NULL COMMENT '权限组id',
  PRIMARY KEY (`gid`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE,
  CONSTRAINT `pedia_user_group_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `pedia_user_perm` (`pid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户组' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_user_medal
-- ----------------------------
DROP TABLE IF EXISTS `pedia_user_medal`;
CREATE TABLE `pedia_user_medal`  (
  `mid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '勋章id',
  `mname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '勋章名称',
  `mdes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '勋章描述',
  PRIMARY KEY (`mid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户勋章' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_user_member
-- ----------------------------
DROP TABLE IF EXISTS `pedia_user_member`;
CREATE TABLE `pedia_user_member`  (
  `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `gid` smallint(5) UNSIGNED NOT NULL COMMENT '所属组id',
  `loginname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '用户名',
  PRIMARY KEY (`uid`) USING BTREE,
  INDEX `gid`(`gid`) USING BTREE,
  INDEX `login`(`loginname`) USING BTREE,
  CONSTRAINT `pedia_user_member_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `pedia_user_group` (`gid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户成员' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pedia_user_perm
-- ----------------------------
DROP TABLE IF EXISTS `pedia_user_perm`;
CREATE TABLE `pedia_user_perm`  (
  `pid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '权限组id',
  `alloweditword` mediumint(8) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否允许编辑词条',
  `allowbanuser` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否允许禁止用户',
  `allowedcreword` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否允许新建词条',
  `alloweddistri` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否允许增加勋章',
  `allowedchangeperm` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否允许更改他人权限',
  PRIMARY KEY (`pid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '用户组权限' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Triggers structure for table pedia_entry_basicinfo
-- ----------------------------
DROP TRIGGER IF EXISTS `cre_historyinfo`;
delimiter ;;
CREATE TRIGGER `cre_historyinfo` AFTER INSERT ON `pedia_entry_basicinfo` FOR EACH ROW BEGIN
INSERT INTO pedia_entry_historyversion(edit_time,edit_cont,eid,uid) VALUES(NOW(),'create word',new.eid,new.lastediter);
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table pedia_entry_basicinfo
-- ----------------------------
DROP TRIGGER IF EXISTS `upd_historyinfo`;
delimiter ;;
CREATE TRIGGER `upd_historyinfo` AFTER UPDATE ON `pedia_entry_basicinfo` FOR EACH ROW BEGIN
		IF new.clicktimes=old.clicktimes
		THEN
		INSERT INTO pedia_entry_historyversion(edit_time,edit_cont,eid,uid) VALUES(NOW(),'update word',new.eid,new.lastediter);
		END IF;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table pedia_user_member
-- ----------------------------
DROP TRIGGER IF EXISTS `adornmedal`;
delimiter ;;
CREATE TRIGGER `adornmedal` AFTER INSERT ON `pedia_user_member` FOR EACH ROW BEGIN
    INSERT INTO pedia_user_adorn(uid,mid) VALUES(new.uid,2);
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table user
-- ----------------------------
DROP TRIGGER IF EXISTS `createuser`;
delimiter ;;
CREATE TRIGGER `createuser` AFTER INSERT ON `user` FOR EACH ROW BEGIN
INSERT INTO pedia_user_member(gid,loginname) VALUES(2,new.username);
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;

-- ----------------------------
-- Data Required
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1562842138);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1562842141);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1562842141);
INSERT INTO `pedia_user_group` VALUES (1, '超级管理员', 1);
INSERT INTO `pedia_user_group` VALUES (2, '新人', 2);
INSERT INTO `pedia_user_member` VALUES (1, 1, 'admin');
INSERT INTO `pedia_user_perm` VALUES (1, 10, 1, 1, 1, 1);
INSERT INTO `pedia_user_perm` VALUES (2, 1, 0, 0, 0, 0);
INSERT INTO `user` VALUES (1, 'admin', 'Ky2_cEoKU_MJpN7aF4ebp8dJ5t_Jj-_a', '$2y$13$5l3PAje5FUt0z9vBAM6geuz/jf1YCevVQXtlb8Ip4HiarunVAzj2i', NULL, 'example@xxx.com', 10, 1562842446, 1562842446, 'Wzip09ZNwKQ5TI1YDyZK0FY33RaQiB_E_1562842446');
