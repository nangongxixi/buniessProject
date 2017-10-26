/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : businessproject

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-10-26 17:26:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yw_articles`
-- ----------------------------
DROP TABLE IF EXISTS `yw_articles`;
CREATE TABLE `yw_articles` (
  `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `discript` text NOT NULL,
  `sort` int(50) NOT NULL DEFAULT '0' COMMENT '排序（越大越靠前）',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(10) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_articles
-- ----------------------------
INSERT INTO `yw_articles` VALUES ('1', '文章标题4545454', '<p>文章内容发生大幅度撒反对撒反对撒反对撒反对撒反对撒法防守打法范德萨富士达反对撒法撒反对撒反对撒反对撒反对撒反对撒反对撒反对撒发生大幅度撒防撒旦范德萨反对撒反对撒范德萨品部件的品质。 德国毕克化学BYK助剂拥有完整的产品系列，涵盖了消泡剂、润湿分散剂、流变助剂、表面助剂、附着力促进剂、紫外线吸收剂、蜡助剂、加工助剂，以及纳米助剂。 德国毕克化学BYK分散剂：BYK-P104 、BYK-P104S 、BYK-P105 、BYK-2</p>', '文章描述反对撒反对撒发生大幅度撒范德萨', '0', '2017-10-26 15:36:09', '2017-10-26 15:36:09', '0');
INSERT INTO `yw_articles` VALUES ('2', '发大水f', '<p>fdsa富士达范德萨富士达范德萨富士达防撒旦范德萨</p>', '描述描述描述反描述描述对撒反对撒发生大幅度防守打法', '7', '2017-10-26 15:39:49', '2017-10-26 15:39:49', '0');
INSERT INTO `yw_articles` VALUES ('3', '法定sag撒大f', '', '反对撒反对撒反对撒反对撒', '5', '2017-10-26 10:40:33', '2017-10-26 10:40:33', '0');
INSERT INTO `yw_articles` VALUES ('4', '倒萨范德萨富士达', '<p>反对撒法反对撒反对撒范德萨富士达范德萨<img alt=\"\" data-cke-saved-src=\"http://www.yunwei.com/public/upload/2017-10-26/59f14c5fd1057.jpg\" src=\"http://www.yunwei.com/public/upload/2017-10-26/59f14c5fd1057.jpg\" style=\"height:200px; width:200px\">​​​​​​​</p>', 'fdsafds', '0', '2017-10-26 10:48:31', '2017-10-26 10:48:31', '0');
INSERT INTO `yw_articles` VALUES ('5', '反对撒反对撒', '<p>反对撒法</p>', '反对撒反对撒', '0', '2017-10-26 17:01:34', '2017-10-26 17:01:34', '0');
INSERT INTO `yw_articles` VALUES ('6', 'fsdaf', '<p>fdsafdsa</p>', 'afdsa', '0', '2017-10-26 15:20:38', '2017-10-26 15:20:38', '0');
INSERT INTO `yw_articles` VALUES ('7', '大撒旦范德萨', '<p>发撒旦</p>', 'fdsadfds', '0', '2017-10-26 15:25:44', '2017-10-26 15:25:44', '0');
INSERT INTO `yw_articles` VALUES ('8', 'f适当', '<p>范德萨飞洒</p>', '发撒旦', '0', '2017-10-26 15:36:51', '2017-10-26 15:36:51', '0');
INSERT INTO `yw_articles` VALUES ('9', '', '<p><br></p>', 'f散打', '0', '2017-10-26 15:27:36', '2017-10-26 15:27:36', '0');
INSERT INTO `yw_articles` VALUES ('10', '富士达', '<p>范德萨</p>', 'f散打', '0', '2017-10-26 15:27:45', '2017-10-26 15:27:45', '0');
INSERT INTO `yw_articles` VALUES ('11', '富士达', '<p>范德萨</p>', 'f散打', '0', '2017-10-26 15:28:11', '2017-10-26 15:28:11', '0');
INSERT INTO `yw_articles` VALUES ('12', '', '<p>飞洒</p>', '', '0', '2017-10-26 15:32:38', '2017-10-26 15:32:38', '0');
INSERT INTO `yw_articles` VALUES ('13', '', '<p>fdsa&nbsp;</p>', 'fdsafsd ', '0', '2017-10-26 15:42:16', '2017-10-26 15:42:16', '0');

-- ----------------------------
-- Table structure for `yw_auth`
-- ----------------------------
DROP TABLE IF EXISTS `yw_auth`;
CREATE TABLE `yw_auth` (
  `auth_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(200) NOT NULL COMMENT '权限名称',
  `auth_pid` int(10) NOT NULL COMMENT '权限父ID',
  `auth_c` varchar(100) NOT NULL COMMENT '权限控制器',
  `auth_a` varchar(100) NOT NULL COMMENT '权限方法',
  `auth_path` varchar(100) NOT NULL COMMENT '权限全路径',
  `auth_level` int(10) NOT NULL COMMENT '权限所属层级',
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='权限表';

-- ----------------------------
-- Records of yw_auth
-- ----------------------------
INSERT INTO `yw_auth` VALUES ('1', '服务器日志', '0', '', '', '1', '0', '2016-10-18 15:05:51', '2016-10-18 15:13:36', '0');
INSERT INTO `yw_auth` VALUES ('2', '其他日志', '0', '', '', '2', '0', '2016-10-18 15:07:22', '2016-10-21 14:32:51', '1');
INSERT INTO `yw_auth` VALUES ('3', '日志列表', '1', 'Server', 'showlist', '1-3', '1', '2016-10-18 15:09:25', '2016-10-19 12:37:52', '0');
INSERT INTO `yw_auth` VALUES ('4', '填写日志', '1', 'Server', 'add', '1-4', '1', '2016-10-18 15:10:06', '2016-10-21 13:37:03', '0');
INSERT INTO `yw_auth` VALUES ('5', '日志列表', '1', 'Server', 'showlistRegular', '1-5', '1', '2016-10-18 15:15:28', '2016-11-03 15:16:15', '1');
INSERT INTO `yw_auth` VALUES ('6', '填写日志', '1', 'Server', 'addRegular', '1-6', '1', '2016-10-18 15:19:54', '2016-11-03 15:16:18', '1');
INSERT INTO `yw_auth` VALUES ('7', '用户管理', '0', '', '', '7', '0', '2016-10-18 15:19:58', '2016-10-25 10:13:47', '0');
INSERT INTO `yw_auth` VALUES ('8', '用户列表', '7', 'Manager', 'showlist', '7-8', '1', '2016-10-18 15:19:47', '2016-10-25 10:14:01', '0');
INSERT INTO `yw_auth` VALUES ('9', '添加用户', '7', 'Manager', 'add', '7-9', '1', '2016-10-18 15:20:52', '2016-10-25 10:14:10', '0');
INSERT INTO `yw_auth` VALUES ('10', '更新日志', '1', 'Server', 'upd', '1-10', '1', '2016-10-24 15:10:29', '2016-10-24 15:10:34', '0');
INSERT INTO `yw_auth` VALUES ('11', '公共池', '1', 'Server', 'suspendList', '1-11', '1', '2016-10-24 22:48:19', '2016-10-24 22:48:23', '0');
INSERT INTO `yw_auth` VALUES ('12', '角色管理', '0', '', '', '12', '0', '2016-10-25 14:37:31', '2016-10-25 14:37:34', '0');
INSERT INTO `yw_auth` VALUES ('13', '角色列表', '12', 'Role', 'showlist', '12-13', '1', '2016-10-25 14:38:45', '2016-10-26 14:38:48', '0');
INSERT INTO `yw_auth` VALUES ('14', '权限管理', '0', '', '', '14', '0', '2016-10-25 14:40:22', '2016-10-25 14:56:41', '0');
INSERT INTO `yw_auth` VALUES ('15', '权限列表', '14', 'Auth', 'showlist', '14-15', '1', '2016-10-25 14:57:26', '2016-10-25 14:57:29', '0');
INSERT INTO `yw_auth` VALUES ('16', '添加权限', '14', 'Auth', 'add', '14-16', '1', '2016-10-25 15:00:47', '2016-10-25 15:00:50', '0');
INSERT INTO `yw_auth` VALUES ('17', '问题管理', '0', '', '', '17', '0', '2016-10-26 08:53:12', '2016-10-26 08:53:15', '0');
INSERT INTO `yw_auth` VALUES ('18', '问题列表', '17', 'Problem', 'showlist', '17-18', '1', '2016-10-26 08:54:09', '2016-10-27 09:57:09', '1');
INSERT INTO `yw_auth` VALUES ('19', '添加问题', '17', 'Problem', 'add', '17-19', '1', '2016-10-26 08:55:27', '2016-10-27 09:57:07', '1');
INSERT INTO `yw_auth` VALUES ('20', '修改用户', '7', 'Manager', 'upd', '7-20', '1', '2016-10-26 09:05:55', '2016-11-03 15:22:34', '1');
INSERT INTO `yw_auth` VALUES ('21', '状态图', '17', 'Problem', 'hchats', '17-21', '1', '2016-10-27 09:56:55', '2016-10-27 10:02:08', '0');

-- ----------------------------
-- Table structure for `yw_images`
-- ----------------------------
DROP TABLE IF EXISTS `yw_images`;
CREATE TABLE `yw_images` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `article_id` int(50) NOT NULL COMMENT '文章ID',
  `img_url` varchar(100) NOT NULL DEFAULT '' COMMENT '大图地址',
  `themb_url` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图地址',
  `cover` tinyint(1) NOT NULL COMMENT '是否是封面图（1.是、0.不是）',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  `sort` int(50) NOT NULL DEFAULT '0' COMMENT '排序（越大越靠前）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_images
-- ----------------------------
INSERT INTO `yw_images` VALUES ('1', '1', 'public/upload/u=1146158479,1811960157&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('2', '5', 'public/upload/u=1146158479,1811960157&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('3', '5', 'public/upload/u=846598781,1700184812&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('4', '13', 'public/upload/u=1146158479,1811960157&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('5', '13', 'public/upload/u=846598781,1700184812&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('6', '5', 'public/upload/u=1146158479,1811960157&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('7', '5', 'public/upload/banner1.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('8', '5', 'public/upload/u=846598781,1700184812&fm=27&gp=0.jpg', '', '0', '0', '0');
INSERT INTO `yw_images` VALUES ('9', '5', 'public/upload/banner1.jpg', '', '0', '0', '0');

-- ----------------------------
-- Table structure for `yw_log`
-- ----------------------------
DROP TABLE IF EXISTS `yw_log`;
CREATE TABLE `yw_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` int(10) unsigned NOT NULL COMMENT '日志名称',
  `log_reported_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '事件报告时间',
  `log_level` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '严重级别(1.I,2.II,3.III,4.IV)',
  `log_phone` varchar(20) NOT NULL,
  `log_report_user` int(10) unsigned NOT NULL COMMENT '日志报告人',
  `log_type` int(10) NOT NULL COMMENT '事件类型(1.软件故障，2.硬件故障，3.彩打没墨，4.其他故障)',
  `log_describe` varchar(200) NOT NULL COMMENT '事件详细描述',
  `log_first_response_time` timestamp NULL DEFAULT NULL COMMENT '首次响应时间',
  `log_completion_time` timestamp NULL DEFAULT NULL COMMENT '处理完成时间',
  `log_processing_method` varchar(200) DEFAULT NULL COMMENT '处理方法及步骤',
  `log_status` int(10) DEFAULT '0' COMMENT '日志状态(1.正常，2.一般故障，3.严重故障)',
  `log_result` int(10) DEFAULT '1' COMMENT '处理结果(1.未处理，2.处理中，3.已处理)',
  `log_deal_user` varchar(20) DEFAULT NULL COMMENT '处理人',
  `list_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `list_deleted` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='日志信息表';

-- ----------------------------
-- Records of yw_log
-- ----------------------------
INSERT INTO `yw_log` VALUES ('1', '12', '2016-11-16 14:23:17', '1', '15828272713', '10', '4', '话务台断线，14：02', '2016-11-16 14:27:33', '2016-11-16 14:30:17', '需联系政务中心张伟查看断线原因及处理方法', '0', '3', '3', '2016-11-16 14:54:12', '0');
INSERT INTO `yw_log` VALUES ('2', '12', '2016-11-17 13:16:50', '1', '18482145438', '10', '4', '11月17日 12:50呼叫中心  出现无法打开知识库故障，请尽快处理。\r\n申报人：张宜\r\n', '2016-11-17 13:18:28', '2016-11-17 13:22:50', '本部测试没得问题', '0', '3', '3', '2016-11-17 13:22:36', '0');
INSERT INTO `yw_log` VALUES ('3', '12', '2016-11-17 15:42:42', '1', '15983415450', '10', '1', ' 11月17日15:30话务台 1：出现电脑显示挂断，可是我处还可以听到群众与窗口老师的对话的故障 2：由于电脑原因多次出现群众听不见我处声音的故障，请尽快处理。\r\n申报人：宋燕\r\n', '2016-11-17 15:46:39', '2016-11-17 15:46:42', '直接重装IE控件', '0', '3', '3', '2016-11-17 15:46:28', '0');
INSERT INTO `yw_log` VALUES ('4', '12', '2016-11-18 09:18:43', '1', '13088089786', '10', '4', '2016年11月18日 呼叫中心知识库内网知识库无法打开，外网知识库也无法使用。\r\n申报人：何丹', '2016-11-18 09:20:03', '2016-11-18 09:25:53', '外网检测没得问题，需要联系政务中心技术人员排查', '0', '3', '3', '2016-11-18 09:26:46', '0');
INSERT INTO `yw_log` VALUES ('5', '7', '2016-11-18 10:58:42', '1', '18382258575', '6', '2', '新津非紧急系统服务器故障，无法登录。需联系甲方82518725重启系统。', '2016-11-18 11:02:29', '2016-11-18 11:02:35', '系统重启联系电话：82518725', '0', '3', '2', '2016-11-18 11:03:43', '0');
INSERT INTO `yw_log` VALUES ('6', '12', '2016-11-23 09:21:08', '1', '13088089786', '10', '2', '11月23日 09:17 呼叫中心  出现主机无法开启，请尽快处理。\r\n申报人：何丹', '2016-11-23 09:30:02', '2016-11-23 09:38:40', '需要到现场处理。有备用PC就到后面一起处理', '0', '3', '3', '2016-11-23 09:40:20', '0');
INSERT INTO `yw_log` VALUES ('7', '8', '2016-11-28 14:09:08', '1', '15802855880', '6', '4', '无法登陆系统，需联系新津信息办重启服务器', '2016-11-28 14:11:47', '2016-11-28 14:11:49', '服务器已重启，系统正常。', '0', '3', '2', '2016-11-28 14:12:20', '0');
INSERT INTO `yw_log` VALUES ('8', '7', '2016-11-29 08:55:10', '1', '13388177780', '6', '1', '登陆不上，界面显示用户名和密码错误。', '2016-11-29 08:56:57', '2016-11-29 08:58:27', '联系新津重启服务器', '0', '3', '3', '2016-11-29 08:59:00', '0');
INSERT INTO `yw_log` VALUES ('9', '8', '2016-11-30 09:24:24', '1', '15802855880', '6', '2', '新津非紧急系统无法登陆，需要新津那边重启服务器', '2016-11-30 09:26:34', '2016-11-30 09:26:35', '联系新津重启服务器', '0', '3', '3', '2016-11-30 09:27:01', '0');
INSERT INTO `yw_log` VALUES ('10', '2', '2016-12-01 09:44:27', '1', '13541088328', '5', '4', '呼入弹屏，显示白屏。之前窗口一起白。', '2016-12-01 10:32:43', '2016-12-01 10:32:45', '关闭浏览器，重开。清理不必要的后台应用', '0', '3', '2', '2016-12-01 10:33:45', '0');
INSERT INTO `yw_log` VALUES ('11', '12', '2016-12-09 10:37:00', '1', '13088089786', '10', '4', '12月9日 10:28 话务台3个 账号： a b c   出现闪退，退出后无法登陆，再登陆提示登陆话务台服务器失败，链接错误，请尽快处理。\r\n申报人：何丹', '2016-12-09 10:42:43', '2016-12-09 10:42:45', '再次登录系统，记录时间及错误信息。报告给政务中心张伟', '0', '3', '3', '2016-12-09 10:44:09', '0');
INSERT INTO `yw_log` VALUES ('12', '13', '2016-12-20 09:22:08', '1', '15828272713', '10', '4', '3D政务大厅系统故障，无法进入', '2016-12-20 10:00:00', '2016-12-20 14:55:03', '已联系陈传奇处理', '0', '3', '3', '2016-12-21 08:56:21', '0');
INSERT INTO `yw_log` VALUES ('13', '19', '2017-01-05 14:24:06', '1', '', '3', '4', '乐政项目主动维护', '2017-01-05 14:24:06', '2017-01-05 14:24:06', '乐政项目主动维护', '0', '3', '3', '2017-01-05 14:39:53', '0');
INSERT INTO `yw_log` VALUES ('14', '12', '2017-02-14 14:22:51', '1', '13880745385', '24', '1', '2017年2月14日 09:00 呼叫中心有2台电脑出现故障。 电脑1出现蓝屏故障；电脑2出现政务云平台系统不能转接和白屏。请尽快处理。申报人：兰杰\r\n\r\n', '2017-02-14 14:25:04', '2017-02-14 14:26:45', '电脑蓝屏运维将1个工作日内到现场维护，电脑转接以及白屏属于呼叫系统插件故障，将立即远程维护！', '0', '3', '2', '2017-02-14 14:26:49', '0');
INSERT INTO `yw_log` VALUES ('15', '2', '2017-08-25 11:07:50', '1', '15802855880', '5', '1', '系统自身原因 呼入不弹屏，', '2017-08-25 11:09:28', '2017-08-25 11:09:32', '重装IE控件', '0', '3', '34', '2017-08-25 11:19:12', '0');
INSERT INTO `yw_log` VALUES ('16', '2', '2017-08-28 14:23:20', '1', '13540361390', '5', '4', '呼入不弹屏，系统自身原因。', '2017-08-28 14:29:47', '2017-08-28 14:29:49', '重装IE控件', '0', '3', '34', '2017-09-14 10:27:16', '0');
INSERT INTO `yw_log` VALUES ('17', '2', '2017-08-28 16:14:11', '1', '15802855880', '5', '1', '一号通系统呼入不弹屏。', '2017-08-28 16:34:53', '2017-08-28 16:34:54', '重装IE控件', '0', '3', '34', '2017-09-14 10:27:17', '0');
INSERT INTO `yw_log` VALUES ('18', '2', '2017-09-01 16:39:31', '1', '15708449712', '5', '1', '大邑一号通系统有时不弹屏', '2017-09-01 16:40:29', '2017-09-01 16:40:31', '重装控件', '0', '3', '34', '2017-09-14 10:27:18', '0');
INSERT INTO `yw_log` VALUES ('19', '2', '2017-09-05 17:06:06', '1', '15708449712', '5', '1', '一号通不弹屏，一直没得到解决。', '2017-09-05 17:08:09', '2017-09-05 17:08:11', '重装IE控件', '0', '1', '34', '2017-09-14 10:27:18', '0');
INSERT INTO `yw_log` VALUES ('20', '2', '2017-09-08 13:33:25', '1', '15708449712', '5', '1', '系统不弹屏，一直没有得到解决。', '2017-09-08 13:40:08', '2017-09-08 13:40:09', '重装控件', '0', '3', '34', '2017-09-14 10:27:21', '0');
INSERT INTO `yw_log` VALUES ('21', '2', '2017-09-13 09:30:47', '1', '15802855880', '5', '1', '系统自身原因，呼入不弹屏', '2017-09-13 09:46:34', '2017-09-13 09:46:35', '重装IE控件', '0', '3', '34', '2017-09-14 10:27:23', '0');
INSERT INTO `yw_log` VALUES ('22', '2', '2017-09-15 14:08:56', '1', '15802855880', '5', '1', '登录系统，网页空白无显示', '2017-09-15 14:28:42', '2017-09-15 14:28:45', '重装IE控件', '0', '3', '34', '2017-09-15 14:29:04', '0');
INSERT INTO `yw_log` VALUES ('23', '2', '2017-09-25 17:30:50', '1', '13540361390', '5', '1', '群众来电话时，系统呼入没有弹屏。', '2017-09-25 17:32:38', '2017-09-25 17:32:54', '重装IE控件', '0', '3', '34', '2017-09-30 15:14:36', '0');
INSERT INTO `yw_log` VALUES ('24', '2', '2017-09-30 15:06:39', '1', '15802855880', '5', '1', '系统网5555空白，内容显示不全', '2017-09-30 15:12:45', '2017-09-30 15:12:46', '重装控件', '0', '3', '34', '2017-10-20 14:45:34', '0');

-- ----------------------------
-- Table structure for `yw_log_list`
-- ----------------------------
DROP TABLE IF EXISTS `yw_log_list`;
CREATE TABLE `yw_log_list` (
  `list_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `list_name` varchar(200) NOT NULL COMMENT '日志名称',
  `list_pid` int(10) unsigned NOT NULL COMMENT '日志父ID',
  `list_path` varchar(100) NOT NULL COMMENT '日志路径',
  `list_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `list_deleted` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='日志分类列表';

-- ----------------------------
-- Records of yw_log_list
-- ----------------------------
INSERT INTO `yw_log_list` VALUES ('1', '大邑', '0', '0,', '2016-11-15 13:20:20', '2016-11-15 13:20:26', '0');
INSERT INTO `yw_log_list` VALUES ('2', '一号通', '1', '0,1,', '2016-11-15 13:20:47', '2016-11-15 13:20:52', '0');
INSERT INTO `yw_log_list` VALUES ('3', '在线咨询', '1', '0,1,', '2016-11-15 13:21:27', '2016-11-15 13:21:31', '0');
INSERT INTO `yw_log_list` VALUES ('4', '新津', '0', '0,', '2016-11-15 13:25:35', '2016-11-15 13:25:40', '0');
INSERT INTO `yw_log_list` VALUES ('5', '县长信箱', '4', '0,4,', '2016-11-15 13:28:10', '2016-11-15 13:29:41', '0');
INSERT INTO `yw_log_list` VALUES ('6', '县长热线', '4', '0,4,', '2016-11-15 13:30:24', '2016-11-15 13:30:29', '0');
INSERT INTO `yw_log_list` VALUES ('7', '民生诉求', '4', '0,4,', '2016-11-15 13:31:09', '2016-11-15 13:31:14', '0');
INSERT INTO `yw_log_list` VALUES ('8', '阳光热线', '4', '0,4,', '2016-11-15 13:31:37', '2016-11-15 13:31:41', '0');
INSERT INTO `yw_log_list` VALUES ('9', '微博微信', '4', '0,4,', '2016-11-15 13:33:47', '2016-11-15 13:33:51', '0');
INSERT INTO `yw_log_list` VALUES ('10', '市长电话', '4', '0,4,', '2016-11-15 13:33:44', '2016-11-15 13:34:04', '0');
INSERT INTO `yw_log_list` VALUES ('11', '武侯', '0', '0,', '2016-11-15 13:39:55', '2016-11-15 13:39:59', '0');
INSERT INTO `yw_log_list` VALUES ('12', '政务热线', '11', '0,11,', '2016-11-15 13:39:58', '2016-11-15 13:40:02', '0');
INSERT INTO `yw_log_list` VALUES ('13', '在线咨询', '11', '0,11,', '2016-11-15 13:39:53', '2016-11-15 13:39:56', '0');
INSERT INTO `yw_log_list` VALUES ('14', '微博微信', '11', '0,11,', '2016-11-15 13:39:51', '2016-11-15 13:39:54', '0');
INSERT INTO `yw_log_list` VALUES ('15', '大联动热线', '11', '0,11,', '2016-11-15 13:39:48', '2016-11-15 13:39:52', '0');
INSERT INTO `yw_log_list` VALUES ('16', '金牛', '0', '0,', '2016-11-15 13:39:45', '2016-11-15 13:39:49', '0');
INSERT INTO `yw_log_list` VALUES ('17', '微博微信', '16', '0,16,', '2016-11-15 13:40:38', '2016-11-15 13:40:42', '0');
INSERT INTO `yw_log_list` VALUES ('18', '乐政', '0', '0,', '2017-01-05 13:36:56', '2017-01-05 13:37:33', '0');
INSERT INTO `yw_log_list` VALUES ('19', '乐政项目', '18', '0,18', '2017-01-05 13:44:07', '2017-01-05 13:44:39', '0');

-- ----------------------------
-- Table structure for `yw_manager`
-- ----------------------------
DROP TABLE IF EXISTS `yw_manager`;
CREATE TABLE `yw_manager` (
  `mg_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(200) NOT NULL COMMENT '管理员名称',
  `mg_real_name` varchar(100) NOT NULL,
  `mg_pwd` varchar(200) NOT NULL COMMENT '管理员密码',
  `mg_tel` varchar(20) NOT NULL COMMENT '管理员电话',
  `mg_role_id` varchar(200) NOT NULL COMMENT '管理员权限',
  `mg_content` text COMMENT '内容',
  `mg_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mg_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mg_big_img` varchar(200) NOT NULL COMMENT '缩略图',
  `mg_small_img` varchar(200) NOT NULL,
  `mg_deleted` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除的标识',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of yw_manager
-- ----------------------------
INSERT INTO `yw_manager` VALUES ('1', 'admin', '运维经理', 'e10adc3949ba59abbe56e057f20f883e', '', '1', null, '2016-10-18 13:29:53', '2016-11-15 15:35:46', '', '', '0');
INSERT INTO `yw_manager` VALUES ('2', 'huangping', '黄平', 'e10adc3949ba59abbe56e057f20f883e', '18584073303', '2', null, '2016-10-18 13:31:19', '2016-11-15 15:40:23', '', '', '0');
INSERT INTO `yw_manager` VALUES ('3', 'lvshanbing', '吕膳兵', 'e10adc3949ba59abbe56e057f20f883e', '15708416713', '2', null, '2016-10-18 13:33:16', '2017-08-25 11:17:45', '', '', '0');
INSERT INTO `yw_manager` VALUES ('4', 'chenzhi', '陈志', 'e10adc3949ba59abbe56e057f20f883e', '13076027828', '2', null, '2016-10-18 13:33:19', '2016-11-15 15:41:02', '', '', '0');
INSERT INTO `yw_manager` VALUES ('5', 'dy01', '大邑', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-10-25 09:34:10', '2016-11-15 15:35:39', '', '', '0');
INSERT INTO `yw_manager` VALUES ('6', 'xj01', '新津', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-10-25 09:34:07', '2016-11-15 15:35:38', '', '', '0');
INSERT INTO `yw_manager` VALUES ('10', 'wh01', '武侯', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:06:55', '2016-11-15 15:35:36', '', '', '0');
INSERT INTO `yw_manager` VALUES ('11', 'jn01', '金牛', 'd41d8cd98f00b204e9800998ecf8427e', '', '3', '<p><img alt=\"\" data-cke-saved-src=\"http://www.yunwei.com/public/upload/2017-10-25/59f056ab86f89.jpg\" src=\"http://www.yunwei.com/public/upload/2017-10-25/59f056ab86f89.jpg\" style=\"width: 200px; height: 200px;\">​​​​​​​<br></p>', '2017-10-25 17:17:39', '2017-10-25 17:17:39', 'upload/2017-10-25/59f056b3818c5.jpg', 'upload/2017-10-25/small_59f056b3818c5.jpg', '0');
INSERT INTO `yw_manager` VALUES ('20', 'dy02', '大邑', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:35:53', '2016-11-15 15:35:56', '', '', '0');
INSERT INTO `yw_manager` VALUES ('21', 'dy03', '大邑', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:35:55', '2016-11-15 15:35:59', '', '', '0');
INSERT INTO `yw_manager` VALUES ('22', 'xj02', '新津', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:35:58', '2016-11-15 15:36:01', '', '', '0');
INSERT INTO `yw_manager` VALUES ('23', 'xj03', '新津', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:36:00', '2016-11-15 15:36:03', '', '', '0');
INSERT INTO `yw_manager` VALUES ('24', 'wh02', '武侯', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:36:03', '2016-11-15 15:36:07', '', '', '0');
INSERT INTO `yw_manager` VALUES ('25', 'wh03', '武侯', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:36:07', '2016-11-15 15:36:10', '', '', '0');
INSERT INTO `yw_manager` VALUES ('26', 'jn02', '金牛', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:36:10', '2016-11-15 15:36:14', '', '', '0');
INSERT INTO `yw_manager` VALUES ('27', 'jn03', '金牛', 'e10adc3949ba59abbe56e057f20f883e', '', '3', null, '2016-11-15 15:36:14', '2016-11-15 15:36:18', '', '', '0');
INSERT INTO `yw_manager` VALUES ('28', 'chenzongjie', '陈宗洁', '3861b6b8f02b024c3f5be335e2bc5025', '18048888066', '2', null, '2016-11-15 15:36:16', '2016-11-16 11:45:06', '', '', '0');
INSERT INTO `yw_manager` VALUES ('29', 'zhangyiyun', '张怡芸', '13ee501394586a284b0e19c22f12bc2d', '18608053006', '2', null, '2016-11-15 15:36:20', '2016-11-16 11:45:17', '', '', '0');
INSERT INTO `yw_manager` VALUES ('30', 'linmeifeng', '林美凤', 'f25990482fcbb81c9c3b906ec86cb484', '18382258575', '2', null, '2016-11-15 15:36:23', '2016-11-16 11:45:25', '', '', '0');
INSERT INTO `yw_manager` VALUES ('31', 'xiaqiumei', '夏秋梅', '7840ac537c71f2eea75bb738fc17aadc', '15828272713', '2', null, '2016-11-15 15:36:25', '2016-11-16 11:45:38', '', '', '0');
INSERT INTO `yw_manager` VALUES ('32', 'chentingting', '陈婷婷', '6473b7a13674cb4898b5a30381ab24bd', '13689008676', '2', null, '2016-11-15 15:36:29', '2016-11-16 11:45:46', '', '', '0');
INSERT INTO `yw_manager` VALUES ('33', 'xianzhen', '冼臻', '452f384cf22976d02a92a034e9bc67c4', '13881710813', '2', null, '2016-11-15 15:36:32', '2016-11-16 11:45:53', '', '', '0');
INSERT INTO `yw_manager` VALUES ('34', 'linwanqin', '林万琴', 'e10adc3949ba59abbe56e057f20f883e', '15708416713', '2', null, '0000-00-00 00:00:00', '2017-08-25 11:17:08', '', '', '0');
INSERT INTO `yw_manager` VALUES ('35', '11', '22', '182be0c5cdcd5072bb1864cdee4d3d6e', '44', '2', null, '2017-10-24 16:45:30', '2017-10-24 16:45:30', '', '', '0');
INSERT INTO `yw_manager` VALUES ('36', '2221', '2121', '02b1be0d48924c327124732726097157', '4545', '2', null, '2017-10-24 16:46:45', '2017-10-24 16:46:45', '', '', '0');
INSERT INTO `yw_manager` VALUES ('37', '111', '22', '182be0c5cdcd5072bb1864cdee4d3d6e', '44', '2', null, '2017-10-24 16:51:45', '2017-10-24 16:51:45', '', '', '0');
INSERT INTO `yw_manager` VALUES ('38', '8888', '888', 'ac627ab1ccbdb62ec96e702f07f6425b', '9', '3', null, '2017-10-24 16:54:26', '2017-10-24 16:54:26', '', '', '0');
INSERT INTO `yw_manager` VALUES ('39', '777', '77', '28dd2c7955ce926456240b2ff0100bde', '7', '1', null, '2017-10-24 16:57:23', '2017-10-24 16:57:23', '', '', '0');
INSERT INTO `yw_manager` VALUES ('40', '88', '88', '2a38a4a9316c49e5a833517c45d31070', '8', '2', null, '2017-10-24 17:00:09', '2017-10-24 17:00:09', '', '', '0');
INSERT INTO `yw_manager` VALUES ('41', '88', '99', 'b4b147bc522828731f1a016bfa72c073', '545', '2', null, '2017-10-24 17:01:07', '2017-10-24 17:01:07', '', '', '0');
INSERT INTO `yw_manager` VALUES ('42', 'jack', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '13546497946', '1', null, '2017-10-24 17:03:44', '2017-10-24 17:03:44', '', '', '0');
INSERT INTO `yw_manager` VALUES ('43', 'jack', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '13546497946', '1', null, '2017-10-24 17:03:44', '2017-10-24 17:03:44', '', '', '0');
INSERT INTO `yw_manager` VALUES ('44', 'jack', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '13546497946', '1', null, '2017-10-24 17:03:44', '2017-10-24 17:03:44', '', '', '0');
INSERT INTO `yw_manager` VALUES ('45', 'jack', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '13546497946', '1', null, '2017-10-24 17:03:44', '2017-10-24 17:03:44', '', '', '0');
INSERT INTO `yw_manager` VALUES ('46', 'jack', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '13546497946', '1', null, '2017-10-24 17:03:45', '2017-10-25 10:57:43', '', '', '1');
INSERT INTO `yw_manager` VALUES ('47', 'jack', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '13546497946', '1', null, '2017-10-24 17:03:45', '2017-10-24 17:03:45', '', '', '0');
INSERT INTO `yw_manager` VALUES ('48', 'lucy', '漓江', '1ffb846376bf18ef100272c8c5b60877', '316464136', '2', null, '2017-10-24 17:04:17', '2017-10-24 17:04:17', '', '', '0');
INSERT INTO `yw_manager` VALUES ('49', 'jack555', '张三丰', 'd41d8cd98f00b204e9800998ecf8427e', '13546497946', '1', null, '2017-10-25 10:00:36', '2017-10-25 11:01:22', '', '', '1');
INSERT INTO `yw_manager` VALUES ('50', 'jack5555', '张三丰', 'd41d8cd98f00b204e9800998ecf8427e', '13255', '1', null, '2017-10-25 10:28:31', '2017-10-25 10:57:12', '', '', '1');
INSERT INTO `yw_manager` VALUES ('51', 'jacklucy', '张三丰', 'd41d8cd98f00b204e9800998ecf8427e', '1365454', '1', null, '2017-10-25 10:31:03', '2017-10-25 10:49:54', '', '', '1');
INSERT INTO `yw_manager` VALUES ('52', '新增测试', '张三丰的事55', 'd41d8cd98f00b204e9800998ecf8427e', '54545', '3', null, '2017-10-25 10:33:12', '2017-10-25 10:49:43', '', '', '1');
INSERT INTO `yw_manager` VALUES ('53', '11', '222', '310dcbbf4cce62f762a2aaa148d556bd', '55', '2', null, '2017-10-25 11:35:44', '2017-10-25 11:35:44', '', '', '0');
INSERT INTO `yw_manager` VALUES ('54', '87', '78', '0cc918dec28dbd91f6006a2ce8101e2e', '97', '2', null, '2017-10-25 11:48:32', '2017-10-25 11:48:32', '', '', '0');
INSERT INTO `yw_manager` VALUES ('55', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 11:56:34', '2017-10-25 11:56:34', '', '', '0');
INSERT INTO `yw_manager` VALUES ('56', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 11:56:59', '2017-10-25 11:56:59', '', '', '0');
INSERT INTO `yw_manager` VALUES ('57', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 12:00:09', '2017-10-25 12:00:09', '', '', '0');
INSERT INTO `yw_manager` VALUES ('58', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 12:00:11', '2017-10-25 12:00:11', '', '', '0');
INSERT INTO `yw_manager` VALUES ('59', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 12:00:12', '2017-10-25 12:00:12', '', '', '0');
INSERT INTO `yw_manager` VALUES ('60', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 12:01:42', '2017-10-25 12:01:42', '', '', '0');
INSERT INTO `yw_manager` VALUES ('61', '544', '787', 'c7e1249ffc03eb9ded908c236bd1996d', '78', '2', null, '2017-10-25 12:02:10', '2017-10-25 12:02:10', '', '', '0');
INSERT INTO `yw_manager` VALUES ('62', '12', '121', '0266e33d3f546cb5436a10798e657d97', '45', '2', null, '2017-10-25 12:02:56', '2017-10-25 12:02:56', '', '', '0');
INSERT INTO `yw_manager` VALUES ('63', '', '', '0266e33d3f546cb5436a10798e657d97', '', '', null, '2017-10-25 12:10:54', '2017-10-25 12:10:54', '', '', '0');
INSERT INTO `yw_manager` VALUES ('64', '', '', '35f4a8d465e6e1edc05f3d8ab658c551', '', '', null, '2017-10-25 12:11:43', '2017-10-25 12:11:43', '', '', '0');
INSERT INTO `yw_manager` VALUES ('65', 'h', 'j', 'y', 'r', '2', null, '0000-00-00 00:00:00', '2017-10-25 13:08:49', 'upload/2017-10-25/59f01c610a3c3.jpg', 'upload/2017-10-25/small_59f01c610a3c3.jpg', '0');
INSERT INTO `yw_manager` VALUES ('66', 'h', 'j', 'y', 'r', '2', null, '0000-00-00 00:00:00', '2017-10-25 13:10:38', 'upload/2017-10-25/59f01cce390db.jpg', 'upload/2017-10-25/small_59f01cce390db.jpg', '0');
INSERT INTO `yw_manager` VALUES ('67', 'h', 'j', 'y', 'r', '2', null, '0000-00-00 00:00:00', '2017-10-25 13:11:34', 'upload/2017-10-25/59f01d067e421.jpg', 'upload/2017-10-25/small_59f01d067e421.jpg', '0');
INSERT INTO `yw_manager` VALUES ('68', '555', '666', '777', '888', '1', null, '0000-00-00 00:00:00', '2017-10-25 13:12:04', 'upload/2017-10-25/59f01d2440d2d.jpg', 'upload/2017-10-25/small_59f01d2440d2d.jpg', '0');
INSERT INTO `yw_manager` VALUES ('69', '555', '666', '777', '888', '1', null, '2017-10-25 13:16:05', '2017-10-25 13:16:05', 'upload/2017-10-25/59f01e153aebd.jpg', 'upload/2017-10-25/small_59f01e153aebd.jpg', '0');
INSERT INTO `yw_manager` VALUES ('70', '99999', '7', '5', '54', '2', null, '2017-10-25 13:19:41', '2017-10-25 13:19:41', 'upload/2017-10-25/59f01eedcabdc.jpg', 'upload/2017-10-25/small_59f01eedcabdc.jpg', '0');
INSERT INTO `yw_manager` VALUES ('71', 'ppp', '[[', 'puy', 'ytyty', '2', null, '2017-10-25 13:21:10', '2017-10-25 13:21:10', 'upload/2017-10-25/59f01f46578b6.jpg', 'upload/2017-10-25/small_59f01f46578b6.jpg', '0');
INSERT INTO `yw_manager` VALUES ('72', 'ppp', '[[', 'puy', 'ytyty', '2', null, '2017-10-25 13:23:16', '2017-10-25 13:23:16', 'upload/2017-10-25/59f01fc4b335a.jpg', 'upload/2017-10-25/small_59f01fc4b335a.jpg', '0');
INSERT INTO `yw_manager` VALUES ('73', '66', '78', '89', '97', '2', null, '2017-10-25 13:23:31', '2017-10-25 13:23:31', '', '', '0');
INSERT INTO `yw_manager` VALUES ('74', '55555555', '54', '54', '656', '2', null, '2017-10-25 13:23:53', '2017-10-25 13:23:53', '', '', '0');
INSERT INTO `yw_manager` VALUES ('75', '1', '2', '55', '', '', null, '2017-10-25 13:55:08', '2017-10-25 13:55:08', '', '', '0');
INSERT INTO `yw_manager` VALUES ('76', '520', '', '22', '', '2', null, '2017-10-25 13:59:15', '2017-10-25 13:59:15', 'upload/2017-10-25/59f0283352e1d.jpg', 'upload/2017-10-25/small_59f0283352e1d.jpg', '0');
INSERT INTO `yw_manager` VALUES ('77', '520', '530', '540', '550', '1', null, '2017-10-25 14:00:40', '2017-10-25 14:00:40', 'upload/2017-10-25/59f0288876b51.jpg', 'upload/2017-10-25/small_59f0288876b51.jpg', '0');
INSERT INTO `yw_manager` VALUES ('78', '55', '55', '', '', '', null, '2017-10-25 14:02:49', '2017-10-25 14:02:49', 'upload/2017-10-25/59f029098541b.jpg', 'upload/2017-10-25/small_59f029098541b.jpg', '0');
INSERT INTO `yw_manager` VALUES ('79', '111', '89', '9', '8', '1', null, '2017-10-25 14:03:53', '2017-10-25 14:03:53', 'upload/2017-10-25/59f02949214ad.jpg', 'upload/2017-10-25/small_59f02949214ad.jpg', '0');
INSERT INTO `yw_manager` VALUES ('80', '', '44', '', '', '', null, '2017-10-25 14:09:30', '2017-10-25 14:09:30', 'upload/2017-10-25/59f02a9acb73e.jpg', 'upload/2017-10-25/small_59f02a9acb73e.jpg', '0');
INSERT INTO `yw_manager` VALUES ('81', '', '44', '', '', '', null, '2017-10-25 14:10:31', '2017-10-25 14:13:27', 'upload/2017-10-25/59f02ad70e4a6.jpg', 'upload/2017-10-25/small_59f02ad70e4a6.jpg', '1');
INSERT INTO `yw_manager` VALUES ('82', '', '', '99', '', '', null, '2017-10-25 14:11:13', '2017-10-25 14:11:13', 'upload/2017-10-25/59f02b017a22d.jpg', 'upload/2017-10-25/small_59f02b017a22d.jpg', '0');
INSERT INTO `yw_manager` VALUES ('83', '98', '83', '', '83', '2', null, '2017-10-25 14:11:47', '2017-10-25 14:12:36', 'upload/2017-10-25/59f02b23d7ad7.jpg', 'upload/2017-10-25/small_59f02b23d7ad7.jpg', '0');
INSERT INTO `yw_manager` VALUES ('84', '5454', '54', '545', '44', '1', null, '2017-10-25 14:14:07', '2017-10-25 14:14:07', 'upload/2017-10-25/59f02baf2591f.jpg', 'upload/2017-10-25/small_59f02baf2591f.jpg', '0');
INSERT INTO `yw_manager` VALUES ('85', '55', '55', '55', '', '', null, '2017-10-25 14:14:40', '2017-10-25 14:14:40', 'upload/2017-10-25/59f02bd06c844.jpg', 'upload/2017-10-25/small_59f02bd06c844.jpg', '0');
INSERT INTO `yw_manager` VALUES ('86', '55', '', '', '', '', null, '2017-10-25 14:15:08', '2017-10-25 14:15:08', 'upload/2017-10-25/59f02bec4359c.jpg', 'upload/2017-10-25/small_59f02bec4359c.jpg', '0');
INSERT INTO `yw_manager` VALUES ('87', '', '55', '', '', '', null, '2017-10-25 14:15:40', '2017-10-25 14:15:40', 'upload/2017-10-25/59f02c0c81183.jpg', 'upload/2017-10-25/small_59f02c0c81183.jpg', '0');
INSERT INTO `yw_manager` VALUES ('88', '', '', '55', '', '', null, '2017-10-25 14:16:44', '2017-10-25 14:16:44', 'upload/2017-10-25/59f02c4c06c90.jpg', 'upload/2017-10-25/small_59f02c4c06c90.jpg', '0');
INSERT INTO `yw_manager` VALUES ('89', '', '', '55', '', '', null, '2017-10-25 14:17:36', '2017-10-25 14:17:36', 'upload/2017-10-25/59f02c80b73c9.jpg', 'upload/2017-10-25/small_59f02c80b73c9.jpg', '0');
INSERT INTO `yw_manager` VALUES ('90', '1111', '', '', '', '', null, '2017-10-25 14:20:10', '2017-10-25 14:20:10', 'upload/2017-10-25/59f02d1a3889a.jpg', 'upload/2017-10-25/small_59f02d1a3889a.jpg', '0');
INSERT INTO `yw_manager` VALUES ('91', '77', '', '', '', '', null, '2017-10-25 14:20:50', '2017-10-25 14:20:50', 'upload/2017-10-25/59f02d42c5911.jpg', 'upload/2017-10-25/small_59f02d42c5911.jpg', '0');
INSERT INTO `yw_manager` VALUES ('92', '54', '', '', '', '', null, '2017-10-25 14:23:43', '2017-10-25 14:23:43', 'upload/2017-10-25/59f02def1c6ec.jpg', 'upload/2017-10-25/small_59f02def1c6ec.jpg', '0');
INSERT INTO `yw_manager` VALUES ('93', '', '45', '', '', '', null, '2017-10-25 14:31:34', '2017-10-25 14:31:34', 'upload/2017-10-25/59f02fc68553e.jpg', 'upload/2017-10-25/small_59f02fc68553e.jpg', '0');
INSERT INTO `yw_manager` VALUES ('94', '', '66', '', '', '', null, '2017-10-25 14:31:57', '2017-10-25 14:31:57', 'upload/2017-10-25/59f02fdd1372d.jpg', 'upload/2017-10-25/small_59f02fdd1372d.jpg', '0');
INSERT INTO `yw_manager` VALUES ('95', '', '55', '', '', '', null, '2017-10-25 14:32:20', '2017-10-25 14:32:20', 'upload/2017-10-25/59f02ff4a8f51.jpg', 'upload/2017-10-25/small_59f02ff4a8f51.jpg', '0');
INSERT INTO `yw_manager` VALUES ('96', '44', '', '', '', '', null, '2017-10-25 14:33:00', '2017-10-25 14:33:00', 'upload/2017-10-25/59f0301ceaad6.jpg', 'upload/2017-10-25/small_59f0301ceaad6.jpg', '0');
INSERT INTO `yw_manager` VALUES ('97', '', '555', '', '', '', null, '2017-10-25 14:36:26', '2017-10-25 14:36:26', 'upload/2017-10-25/59f030ea9a487.jpg', 'upload/2017-10-25/small_59f030ea9a487.jpg', '0');
INSERT INTO `yw_manager` VALUES ('98', '', '554', '', '', '', null, '2017-10-25 14:38:04', '2017-10-25 14:38:04', 'upload/2017-10-25/59f0314c86389.jpg', 'upload/2017-10-25/small_59f0314c86389.jpg', '0');
INSERT INTO `yw_manager` VALUES ('99', '45', '', '', '', '', null, '2017-10-25 14:38:37', '2017-10-25 14:38:37', 'upload/2017-10-25/59f0316d71e6f.jpg', 'upload/2017-10-25/small_59f0316d71e6f.jpg', '0');
INSERT INTO `yw_manager` VALUES ('100', '9999', '', '', '', '', null, '2017-10-25 14:38:53', '2017-10-25 14:38:53', 'upload/2017-10-25/59f0317dbe6cc.jpg', 'upload/2017-10-25/small_59f0317dbe6cc.jpg', '0');
INSERT INTO `yw_manager` VALUES ('101', '55', '', '', '', '', null, '2017-10-25 14:39:37', '2017-10-25 14:39:37', 'upload/2017-10-25/59f031a9a3a89.jpg', 'upload/2017-10-25/small_59f031a9a3a89.jpg', '0');
INSERT INTO `yw_manager` VALUES ('102', '9999', '', '', '', '', null, '2017-10-25 14:40:07', '2017-10-25 14:40:07', 'upload/2017-10-25/59f031c764788.jpg', 'upload/2017-10-25/small_59f031c764788.jpg', '0');
INSERT INTO `yw_manager` VALUES ('103', '', '99', '', '', '', null, '2017-10-25 14:40:55', '2017-10-25 14:40:55', 'upload/2017-10-25/59f031f77470a.jpg', 'upload/2017-10-25/small_59f031f77470a.jpg', '0');
INSERT INTO `yw_manager` VALUES ('104', '', '99', '', '', '', null, '2017-10-25 14:41:23', '2017-10-25 14:41:23', 'upload/2017-10-25/59f03213c53ef.jpg', 'upload/2017-10-25/small_59f03213c53ef.jpg', '0');
INSERT INTO `yw_manager` VALUES ('105', '', '99', '', '', '', null, '2017-10-25 14:42:48', '2017-10-25 14:42:48', 'upload/2017-10-25/59f032687505f.jpg', 'upload/2017-10-25/small_59f032687505f.jpg', '0');
INSERT INTO `yw_manager` VALUES ('106', '', '88', '', '', '', null, '2017-10-25 14:44:33', '2017-10-25 14:44:33', 'upload/2017-10-25/59f032d16dbf6.jpg', 'upload/2017-10-25/small_59f032d16dbf6.jpg', '0');
INSERT INTO `yw_manager` VALUES ('107', '', '44', '', '', '', null, '2017-10-25 14:45:05', '2017-10-25 14:50:57', 'upload/2017-10-25/59f032f18030a.jpg', 'upload/2017-10-25/small_59f032f18030a.jpg', '1');
INSERT INTO `yw_manager` VALUES ('108', '', '55', '', '', '', null, '2017-10-25 14:45:39', '2017-10-25 14:45:39', 'upload/2017-10-25/59f033133bd42.jpg', 'upload/2017-10-25/small_59f033133bd42.jpg', '0');
INSERT INTO `yw_manager` VALUES ('109', '666', '', '', '', '', null, '2017-10-25 14:49:35', '2017-10-25 15:28:28', 'upload/2017-10-25/59f033ff7c976.jpg', 'upload/2017-10-25/small_59f033ff7c976.jpg', '1');
INSERT INTO `yw_manager` VALUES ('110', '最后的图片', '2155', '', '654', '1', null, '2017-10-25 14:51:12', '2017-10-25 15:04:55', 'upload/2017-10-25/59f03797a63d2.jpg', 'upload/2017-10-25/small_59f03797a63d2.jpg', '0');
INSERT INTO `yw_manager` VALUES ('111', '575757', 'fdsfds99', 'd41d8cd98f00b204e9800998ecf8427e', 'fdsfsd99', '1', null, '2017-10-25 15:29:22', '2017-10-25 15:29:22', 'upload/2017-10-25/59f03c8fda8bb.jpg', 'upload/2017-10-25/small_59f03c8fda8bb.jpg', '0');
INSERT INTO `yw_manager` VALUES ('112', '', '', '', '', '', '', '0000-00-00 00:00:00', '2017-10-25 15:42:03', '', '', '0');
INSERT INTO `yw_manager` VALUES ('113', '', '', '', 'eee', '', '999', '0000-00-00 00:00:00', '2017-10-25 17:08:19', '', '', '1');
INSERT INTO `yw_manager` VALUES ('114', '', '', '44', '', '', '', '0000-00-00 00:00:00', '2017-10-25 15:43:15', '', '', '0');
INSERT INTO `yw_manager` VALUES ('115', '发撒旦', '防守打法三大', 'ee67e3f91573510a6b520ed1381450e5', '淡淡的', '3', '<p>98989<img alt=\"\" data-cke-saved-src=\"http://www.yunwei.com/public/upload/2017-10-25/59f056da87326.jpg\" src=\"http://www.yunwei.com/public/upload/2017-10-25/59f056da87326.jpg\" style=\"height:200px; width:200px\">​​​​​​​</p>', '2017-10-25 17:18:42', '2017-10-25 17:18:50', 'upload/2017-10-25/59f056e0ca9cc.jpg', 'upload/2017-10-25/small_59f056e0ca9cc.jpg', '1');
INSERT INTO `yw_manager` VALUES ('116', '反对撒反对撒反对撒法', '我让你依靠989', 'd41d8cd98f00b204e9800998ecf8427e', '淡淡的', '', '<p>f&nbsp;<img alt=\"\" data-cke-saved-src=\"http://www.yunwei.com/public/upload/2017-10-25/59f053e8ab317.jpg\" src=\"http://www.yunwei.com/public/upload/2017-10-25/59f053e8ab317.jpg\" style=\"height:200px; width:200px\"><img alt=\"\" data-cke-saved-src=\"http://www.yunwei.com/public/upload/2017-10-25/59f053f10ddea.jpg\" src=\"http://www.yunwei.com/public/upload/2017-10-25/59f053f10ddea.jpg\" style=\"height:200px; width:200px\">​​​​​​​发生大幅度撒范德萨富士达</p>', '2017-10-25 17:06:23', '2017-10-25 17:06:23', 'upload/2017-10-25/59f042fd02d22.jpg', 'upload/2017-10-25/small_59f042fd02d22.jpg', '0');
INSERT INTO `yw_manager` VALUES ('117', '富士达99', '号发给对方的88', 'd41d8cd98f00b204e9800998ecf8427e', '范德萨', '2', '<p style=\"text-align:center\">反<span style=\"font-size:36px\">对<strong>撒反对撒发是</strong></span>对撒法s</p><p style=\"text-align:center\">反对撒反对撒反对撒反对撒</p><p style=\"text-align:center\"><img alt=\"\" data-cke-saved-src=\"http://www.yunwei.com/public/upload/2017-10-25/59f054581b6d4.jpg\" src=\"http://www.yunwei.com/public/upload/2017-10-25/59f054581b6d4.jpg\" style=\"height:200px; width:200px\"></p>', '2017-10-25 17:08:08', '2017-10-25 17:09:05', 'upload/2017-10-25/59f05462913b6.jpg', 'upload/2017-10-25/small_59f05462913b6.jpg', '1');
INSERT INTO `yw_manager` VALUES ('118', '', '', '', '', '', '&lt;p&gt;&lt;img alt=&quot;&quot; data-cke-saved-src=&quot;http://www.yunwei.com/public/upload/2017-10-25/59f058d7746a0.jpg&quot; src=&quot;http://www.yunwei.com/public/upload/2017-10-25/59f058d7746a0.jpg&quot; style=&quot;width: 200px; height: 200px;&quot;&gt;​​​​​​​&lt;br&gt;&lt;/p&gt;', '0000-00-00 00:00:00', '2017-10-25 17:26:50', '', '', '0');
INSERT INTO `yw_manager` VALUES ('119', '', '', '', '', '', '&lt;p&gt;反对撒反对撒反对撒反对撒&lt;/p&gt;', '0000-00-00 00:00:00', '2017-10-26 10:33:23', '', '', '0');

-- ----------------------------
-- Table structure for `yw_role`
-- ----------------------------
DROP TABLE IF EXISTS `yw_role`;
CREATE TABLE `yw_role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(200) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(200) NOT NULL COMMENT '角色权限列表',
  `role_auth_ac` varchar(400) NOT NULL COMMENT '角色控制器方法',
  `role_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_deleted` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色';

-- ----------------------------
-- Records of yw_role
-- ----------------------------
INSERT INTO `yw_role` VALUES ('1', '运维经理', '1,3,4,7,8,9,10,11,12,13,14,15,16,17,18,19,21', 'Server-sendSMS,Server-showlist,Server-add,Server-upd,Server-del,Server-delSuspend,Server-suspendList,Role-showlist,Role-distribute,Auth-showlist,Auth-add,Problem-showlist,Problem-add,Problem-upd,Problem-hchats,Problem-getData,Manager-showlist,Manager-add,Manager-del,Manager-upd', '2016-10-18 13:47:29', '2016-11-07 16:30:31', '0');
INSERT INTO `yw_role` VALUES ('2', '运维工程师', '1,3,4,11,17,21', 'Server-showlist,Server-add,Server-upd,Server-suspendList,Problem-hchats,Problem-getData,Problem-getYAxis,', '2016-10-18 13:47:32', '2016-11-11 14:49:44', '0');
INSERT INTO `yw_role` VALUES ('3', '座席', '0', 'Server-addRegular,Problem-hchats,', '2016-10-24 14:41:38', '2016-11-07 16:30:56', '0');
