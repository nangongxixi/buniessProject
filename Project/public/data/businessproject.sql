/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : businessproject

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-11-06 17:09:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yw_apply`
-- ----------------------------
DROP TABLE IF EXISTS `yw_apply`;
CREATE TABLE `yw_apply` (
  `apply_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL COMMENT '金额',
  `phone` varchar(20) NOT NULL,
  `source` varchar(100) NOT NULL COMMENT '来源（1.PC网站，2.WAP网站）',
  `website` varchar(100) NOT NULL COMMENT '来源网站',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(10) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_apply
-- ----------------------------
INSERT INTO `yw_apply` VALUES ('1', '张三丰', '3.50', '13554555555', '1', 'm.baidu.com', '2017-11-02 14:39:34', '2017-11-02 15:21:15', '0');
INSERT INTO `yw_apply` VALUES ('2', '张武吉', '5.70', '13568777777', '2', 'www.baidu.com', '2017-11-02 14:43:44', '2017-11-02 15:21:04', '0');
INSERT INTO `yw_apply` VALUES ('3', '222', '111.00', '34654654654', '1', 'www.yunwei.com', '2017-11-02 15:57:11', '2017-11-02 15:57:11', '0');
INSERT INTO `yw_apply` VALUES ('4', '刘德华', '3.50', '13564979746', '2', 'www.yunwei.com', '2017-11-02 15:58:18', '2017-11-02 15:58:18', '0');
INSERT INTO `yw_apply` VALUES ('5', '3645', '12.00', '65654654654', '1', 'www.yunwei.com', '2017-11-02 16:00:14', '2017-11-02 16:00:14', '0');
INSERT INTO `yw_apply` VALUES ('6', '5454', '2.00', '15454545454', '1', 'www.yunwei.com', '2017-11-02 16:17:02', '2017-11-02 16:43:00', '1');
INSERT INTO `yw_apply` VALUES ('7', '65468888', '6456.00', '18545454545', '1', 'www.yunwei.com', '2017-11-03 21:10:10', '2017-11-03 21:10:10', '0');
INSERT INTO `yw_apply` VALUES ('8', '白娘子', '98.00', '13567678787', '1', 'www.yunwei.com', '2017-11-03 22:13:20', '2017-11-03 22:13:20', '0');
INSERT INTO `yw_apply` VALUES ('9', '55', '6666.00', '14645654545', '1', 'www.yunwei.com', '2017-11-05 11:54:22', '2017-11-05 11:54:22', '0');
INSERT INTO `yw_apply` VALUES ('10', '33', '666.00', '15454545454', '1', 'www.yunwei.com', '2017-11-05 11:55:53', '2017-11-05 11:55:53', '0');
INSERT INTO `yw_apply` VALUES ('11', '45', '54.00', '12545454545', '1', 'www.yunwei.com', '2017-11-05 11:57:05', '2017-11-05 11:57:05', '0');
INSERT INTO `yw_apply` VALUES ('12', '54', '12.00', '16546554787', '1', 'www.yunwei.com', '2017-11-05 11:58:23', '2017-11-05 11:58:23', '0');
INSERT INTO `yw_apply` VALUES ('13', '', '0.00', '', '1', 'www.yunwei.com', '2017-11-05 12:29:09', '2017-11-05 12:29:09', '0');
INSERT INTO `yw_apply` VALUES ('14', '愤怒地说', '53.33', '16479794646', '1', 'www.yunwei.com', '2017-11-05 12:40:17', '2017-11-05 12:40:17', '0');
INSERT INTO `yw_apply` VALUES ('15', '3656', '545.00', '13545454545', '2', 'www.yunwei.com', '2017-11-06 16:16:16', '2017-11-06 16:16:16', '0');
INSERT INTO `yw_apply` VALUES ('16', '6565', '4545.00', '15454655454', '2', 'www.yunwei.com', '2017-11-06 16:18:04', '2017-11-06 16:18:04', '0');
INSERT INTO `yw_apply` VALUES ('17', '25', '54.00', '15456454545', '2', 'www.yunwei.com', '2017-11-06 16:18:20', '2017-11-06 16:18:20', '0');
INSERT INTO `yw_apply` VALUES ('18', '455', '878.00', '15454545454', '2', 'www.yunwei.com', '2017-11-06 16:30:26', '2017-11-06 16:30:26', '0');

-- ----------------------------
-- Table structure for `yw_articles`
-- ----------------------------
DROP TABLE IF EXISTS `yw_articles`;
CREATE TABLE `yw_articles` (
  `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `category_id` int(50) NOT NULL COMMENT '所属分类ID',
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `discript` text NOT NULL,
  `sort` int(50) NOT NULL DEFAULT '0' COMMENT '排序（越大越靠前）',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(10) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_articles
-- ----------------------------
INSERT INTO `yw_articles` VALUES ('1', '4', '汽车抵押贷款', '<p><img alt=\"\" src=\"http://www.yunwei.com/public/upload/2017-11-04/59fdb849b8da6.jpg\" style=\"float:left; height:341px; width:300px\" />发大水法发射点发生发顺丰</p>\r\n', '<p><img alt=\"\" src=\"http://www.yunwei.com/public/upload/2017-11-04/59fdb7e34c050.jpg\" style=\"float:left; height:341px; width:300px\" /></p>\r\n\r\n<p>申请条件：全款车、按揭车<br />\r\n产品优势： 利息低至0.73%-0.83%<br />\r\n押证不押车：钱你贷走、车照开<br />\r\n押车押证：全国车辆可、30分钟...</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', '2017-11-05 09:37:29', '2017-11-05 09:37:29', '0');
INSERT INTO `yw_articles` VALUES ('2', '4', '按揭房贷款', '<p><img alt=\"\" src=\"http://www.yunwei.com/public/upload/2017-11-04/59fdcfd9dce17.jpg\" style=\"float:left; height:341px; width:300px\" />房发放大方撒发发发发发生的</p>\r\n', '<p><img alt=\"\" src=\"http://www.yunwei.com/public/upload/2017-11-04/59fdcfd9dce17.jpg\" style=\"float:left; height:341px; width:300px\" />房产贷款产品<br />\r\n1、房产抵押贷款<br />\r\n2、按揭房信用贷款<br />\r\n利率：月利率0.33%-0.75%<br />\r\n放款：1-3天即可放款</p>\r\n', '0', '2017-11-04 22:35:10', '2017-11-04 22:35:10', '0');
INSERT INTO `yw_articles` VALUES ('3', '5', '工资贷', '<p>事故发大水法个单方事故的发生个发大水告诉对方&nbsp;</p>\r\n', '<p><img alt=\"\" src=\"http://www.yunwei.com/public/upload/2017-11-04/59fdd054afb88.jpg\" style=\"float:left; height:341px; width:300px\" />优势：纯信用贷、无抵押、免担保<br />\r\n条件：银行代发工资3000以上<br />\r\n额度：2-50万（1-5天放款）<br />\r\n要求：在域工作...</p>\r\n', '0', '2017-11-04 22:36:46', '2017-11-04 22:36:46', '0');
INSERT INTO `yw_articles` VALUES ('4', '12', '张无忌', '', '', '0', '2017-11-05 12:45:26', '2017-11-05 12:45:26', '0');
INSERT INTO `yw_articles` VALUES ('5', '12', '璐瑶', '', '', '0', '2017-11-05 12:45:59', '2017-11-05 12:45:59', '0');
INSERT INTO `yw_articles` VALUES ('6', '12', '背影杀手', '', '', '0', '2017-11-05 12:47:11', '2017-11-05 12:47:11', '0');
INSERT INTO `yw_articles` VALUES ('7', '7', '贷款攻略放贷款攻略放贷款攻略放贷款攻略放贷款攻略放', '<p>萨芬士大夫阿凡达撒</p>\r\n', '<p>发放撒发生法发顺丰发送</p>\r\n', '0', '2017-11-05 13:39:23', '2017-11-05 13:39:23', '0');
INSERT INTO `yw_articles` VALUES ('8', '7', '贷款55555攻略放贷款攻略放贷款攻略放贷款攻略放贷款攻略放', '<p>防撒旦发射飞洒</p>\r\n', '<p>发达省份撒发送</p>\r\n', '0', '2017-11-05 13:39:47', '2017-11-05 13:39:47', '0');
INSERT INTO `yw_articles` VALUES ('9', '7', '贷款攻略放发送方式 范德萨', '<p>法撒法撒飞洒</p>\r\n', '<p>范德萨范德萨防撒旦法撒飞洒</p>\r\n', '0', '2017-11-05 13:40:23', '2017-11-05 13:40:23', '0');
INSERT INTO `yw_articles` VALUES ('10', '7', '4444贷款攻略放发生的', '<p>附属公司发达省份撒大富士达</p>\r\n', '<p>发达省份的撒分的撒法撒飞洒富士达</p>\r\n', '0', '2017-11-05 13:41:07', '2017-11-05 13:41:07', '0');
INSERT INTO `yw_articles` VALUES ('11', '7', '贷款0000攻略放', '<p>广泛大锅饭多个该罚的</p>\r\n', '<p>范德萨范德萨防撒旦法撒</p>\r\n', '0', '2017-11-05 13:41:28', '2017-11-05 13:41:28', '0');
INSERT INTO `yw_articles` VALUES ('12', '7', '贷款攻略放333333', '', '<p>法撒大分的撒发送大放送</p>\r\n', '0', '2017-11-05 13:41:47', '2017-11-05 13:41:47', '0');
INSERT INTO `yw_articles` VALUES ('13', '7', '贷款攻略放66666', '<p>广泛的撒高度分散高度分散广东省</p>\r\n', '<p>绘画风格风格的撒广泛的撒赶到事故的撒</p>\r\n', '0', '2017-11-05 13:42:50', '2017-11-05 13:42:50', '0');
INSERT INTO `yw_articles` VALUES ('14', '7', '贷款攻略放7777', '<p>很过分的话</p>\r\n', '<p>范德萨范德萨富士达</p>\r\n', '0', '2017-11-05 13:46:37', '2017-11-05 13:46:37', '0');
INSERT INTO `yw_articles` VALUES ('15', '7', '发大水法阿法撒飞洒', '<p>防撒旦法撒法撒法撒飞洒</p>\r\n', '<p>描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述描述</p>\r\n', '0', '2017-11-05 14:48:33', '2017-11-05 14:48:33', '0');
INSERT INTO `yw_articles` VALUES ('16', '8', '资讯中心分的撒法撒法撒法撒', '<p>防撒旦法撒大防撒旦法撒大发生的法撒法阿法撒飞洒</p>\r\n', '<p>资讯中心描述范德萨发顺丰撒法撒资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述</p>\r\n', '0', '2017-11-05 15:01:18', '2017-11-05 15:01:18', '0');
INSERT INTO `yw_articles` VALUES ('17', '8', '资讯中心发送大放送飞洒', '<p>法撒法撒阿凡达</p>\r\n', '<p>资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述资讯中心描述</p>\r\n', '0', '2017-11-05 15:02:02', '2017-11-05 15:02:02', '0');
INSERT INTO `yw_articles` VALUES ('18', '10', '信用贷款申请条件是什么', '<p>1.凡达司法所阿法撒大法撒的撒发大水法撒法撒大发生的</p>\r\n\r\n<p>2.发达省份的撒法撒大分撒法撒法艾丝凡阿斯</p>\r\n\r\n<p>3.分撒法的撒分的撒法撒大发生的范德萨</p>\r\n', '', '0', '2017-11-05 15:30:59', '2017-11-05 15:30:59', '0');
INSERT INTO `yw_articles` VALUES ('19', '10', '常见问题发达省份的范德萨', '<p>范德萨法撒法撒阿法撒大分撒法撒大发送</p>\r\n\r\n<p>1.凡达司法所阿法撒大法撒的撒发大水法撒法撒大发生的</p>\r\n\r\n<p>2.发达省份的撒法撒大分撒法撒法艾丝凡阿斯</p>\r\n\r\n<p>3.分撒法的撒分的撒法撒大发生的</p>\r\n', '', '0', '2017-11-05 15:31:28', '2017-11-05 15:31:28', '0');
INSERT INTO `yw_articles` VALUES ('20', '10', '常见问题66797979防守对方范德萨', '<p>453日的撒法的撒发撒旦放</p>\r\n\r\n<p>1.凡达司法所阿法撒大法撒的撒发大水法撒法撒大发生的</p>\r\n\r\n<p>2.发达省份的撒法撒大分撒法撒法艾丝凡阿斯</p>\r\n\r\n<p>3.分撒法的撒分的撒法撒大发生的</p>\r\n', '', '0', '2017-11-05 15:31:56', '2017-11-05 15:31:56', '0');
INSERT INTO `yw_articles` VALUES ('21', '14', '友情链接', '<p><a href=\"http://www.baidu.com\">百度</a>&nbsp; &nbsp;<a href=\"http://www.google.com\">谷歌</a>&nbsp; &nbsp; <a href=\"http://m.scmidai.com\">米袋金融</a></p>\r\n', '', '0', '2017-11-05 15:56:58', '2017-11-05 15:56:58', '0');
INSERT INTO `yw_articles` VALUES ('22', '15', '资金支持', '<ul>\r\n	<li><img alt=\"中国银行\" src=\"../../public/Home/img/20150602174249_65386.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"中信银行\" src=\"../../public/Home/img/20150602174311_60283.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"招商银行\" src=\"../../public/Home/img/20150602174134_76051.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"中国人民银行\" src=\"../../public/Home/img/20150602174213_67602.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"中国邮政储蓄银行\" src=\"../../public/Home/img/20150602174027_79657.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"渣打银行\" src=\"../../public/Home/img/20150602174102_33723.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"上海银行\" src=\"../../public/Home/img/20150605133936_20495.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"深圳发展银行\" src=\"../../public/Home/img/20160429170842_51838.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"平安银行\" src=\"../../public/Home/img/20150602173834_62053.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"浦发银行\" src=\"../../public/Home/img/20150602173916_64763.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"中国民生银行\" src=\"../../public/Home/img/20150602173222_47992.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"兴业银行\" src=\"../../public/Home/img/20160429165822_51095.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"中国农业银行\" src=\"../../public/Home/img/20150602173309_15905.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"华夏银行\" src=\"../../public/Home/img/20150602173134_68988.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"交通银行\" src=\"../../public/Home/img/20150602173157_67471.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"光大银行\" src=\"../../public/Home/img/20150602173034_57002.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"广发银行\" src=\"../../public/Home/img/20150602173101_27347.jpg\" style=\"height:69px; width:192px\" /></li>\r\n	<li><img alt=\"北京银行\" src=\"../../public/Home/img/20150602172947_28223.jpg\" style=\"height:69px; width:192px\" /></li>\r\n</ul>\r\n', '', '0', '2017-11-05 16:21:28', '2017-11-05 16:21:28', '0');
INSERT INTO `yw_articles` VALUES ('23', '16', '底部信息', '<p style=\"text-align:center\">底部信息底部信息底部信息底部信息底部信息底部信息底部信息底部信息底部信息底部信息底部信息底部信息</p>\r\n\r\n<p style=\"text-align:center\">555底部信息底部信息底部信息底部信息555</p>\r\n', '', '0', '2017-11-05 16:03:08', '2017-11-05 16:03:08', '0');
INSERT INTO `yw_articles` VALUES ('24', '9', '王先生购车贷款', '', '<p><span style=\"font-size:18px\">贷款金额：22万</span></p>\r\n\r\n<p>王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', '2017-11-06 14:44:55', '2017-11-06 14:44:55', '0');
INSERT INTO `yw_articles` VALUES ('25', '9', '张小姐购房贷款', '', '<p><span style=\"font-size:18px\">贷款金额：25万</span></p>\r\n\r\n<p>反对撒法发送王先生贷款王先生贷款王先生贷款王先生贷款王先生贷款王先生</p>\r\n\r\n<p>防撒旦法撒范德萨地方撒大撒旦撒的saDSADSA倒萨 大撒旦撒</p>\r\n', '10', '2017-11-06 14:44:45', '2017-11-06 14:44:45', '0');
INSERT INTO `yw_articles` VALUES ('26', '9', '蔡虎买地皮', '', '<p><span style=\"font-size:18px\">贷款金额：32万</span></p>\r\n\r\n<p>反对撒反对撒发生大幅撒的发撒旦对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生</p>\r\n\r\n<p>对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生对撒反对撒发生</p>\r\n', '0', '2017-11-06 14:06:41', '2017-11-06 14:06:41', '0');

-- ----------------------------
-- Table structure for `yw_articles_category`
-- ----------------------------
DROP TABLE IF EXISTS `yw_articles_category`;
CREATE TABLE `yw_articles_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL DEFAULT '' COMMENT '分类名称',
  `category_pid` int(10) NOT NULL COMMENT '父级ID',
  `category_path` varchar(100) NOT NULL COMMENT '分类全路径',
  `category_level` int(10) NOT NULL COMMENT '所属层级',
  `category_sort` int(10) NOT NULL COMMENT '排序',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '0未删，1已删除',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COMMENT='文章分类表';

-- ----------------------------
-- Records of yw_articles_category
-- ----------------------------
INSERT INTO `yw_articles_category` VALUES ('1', 'PC端', '0', '1', '0', '0', '2017-11-04 20:06:14', '2017-11-04 20:06:14', '0');
INSERT INTO `yw_articles_category` VALUES ('2', 'WAP端', '0', '2', '0', '0', '2017-11-04 20:06:30', '2017-11-04 20:06:30', '0');
INSERT INTO `yw_articles_category` VALUES ('3', '车贷', '1', '1-3', '1', '0', '2017-11-04 20:06:54', '2017-11-04 20:06:54', '0');
INSERT INTO `yw_articles_category` VALUES ('4', '房贷', '1', '1-4', '1', '0', '2017-11-04 20:07:05', '2017-11-04 20:07:05', '0');
INSERT INTO `yw_articles_category` VALUES ('5', '信用贷', '1', '1-5', '1', '0', '2017-11-04 20:07:17', '2017-11-04 20:07:17', '0');
INSERT INTO `yw_articles_category` VALUES ('6', '保单贷', '1', '1-6', '1', '0', '2017-11-04 20:07:44', '2017-11-04 20:07:44', '0');
INSERT INTO `yw_articles_category` VALUES ('7', '贷款攻略', '1', '1-7', '1', '0', '2017-11-04 20:09:52', '2017-11-04 20:09:52', '0');
INSERT INTO `yw_articles_category` VALUES ('8', '资讯中心', '1', '1-8', '1', '0', '2017-11-04 20:10:06', '2017-11-04 20:10:06', '0');
INSERT INTO `yw_articles_category` VALUES ('9', '成功案例', '1', '1-9', '1', '0', '2017-11-04 20:10:30', '2017-11-04 20:10:30', '0');
INSERT INTO `yw_articles_category` VALUES ('10', '常见问题', '1', '1-10', '1', '0', '2017-11-04 20:10:55', '2017-11-04 20:10:55', '0');
INSERT INTO `yw_articles_category` VALUES ('11', '关于我们', '1', '1-11', '1', '0', '2017-11-04 20:11:09', '2017-11-04 20:11:09', '0');
INSERT INTO `yw_articles_category` VALUES ('12', '信贷经理', '1', '1-12', '1', '0', '2017-11-05 12:42:24', '2017-11-05 12:42:24', '0');
INSERT INTO `yw_articles_category` VALUES ('13', '其他信息', '1', '1-13', '1', '0', '2017-11-05 15:55:17', '2017-11-05 15:55:17', '0');
INSERT INTO `yw_articles_category` VALUES ('14', '友情连接', '13', '1-13-14', '2', '0', '2017-11-05 15:56:02', '2017-11-05 15:56:02', '0');
INSERT INTO `yw_articles_category` VALUES ('15', '资金支持', '13', '1-13-15', '2', '0', '2017-11-05 15:56:27', '2017-11-05 15:56:27', '0');
INSERT INTO `yw_articles_category` VALUES ('16', '底部信息', '13', '1-13-16', '2', '0', '2017-11-05 16:02:25', '2017-11-05 16:02:25', '0');
INSERT INTO `yw_articles_category` VALUES ('17', '公积金贷', '5', '1-5-17', '2', '0', '2017-11-06 15:07:19', '2017-11-06 15:07:19', '0');
INSERT INTO `yw_articles_category` VALUES ('18', '车辆抵押', '3', '1-3-18', '2', '0', '2017-11-06 15:19:50', '2017-11-06 15:19:50', '0');
INSERT INTO `yw_articles_category` VALUES ('19', '车辆信贷', '3', '1-3-19', '2', '0', '2017-11-06 15:20:04', '2017-11-06 15:20:04', '0');
INSERT INTO `yw_articles_category` VALUES ('20', '房屋抵押', '4', '1-4-20', '2', '0', '2017-11-06 15:20:22', '2017-11-06 15:20:22', '0');
INSERT INTO `yw_articles_category` VALUES ('21', '房屋信贷', '4', '1-4-21', '2', '0', '2017-11-06 15:20:33', '2017-11-06 15:20:33', '0');
INSERT INTO `yw_articles_category` VALUES ('22', '社保贷', '5', '1-5-22', '2', '0', '2017-11-06 15:25:07', '2017-11-06 15:25:07', '0');
INSERT INTO `yw_articles_category` VALUES ('23', '流水贷', '5', '1-5-23', '2', '0', '2017-11-06 15:21:19', '2017-11-06 15:21:19', '0');
INSERT INTO `yw_articles_category` VALUES ('24', '保单贷', '6', '1-6-24', '2', '0', '2017-11-06 15:21:38', '2017-11-06 15:21:38', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='权限表';

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
INSERT INTO `yw_auth` VALUES ('22', '1111', '11', '22', '333', '1-11-22', '2', '0000-00-00 00:00:00', '2017-11-01 09:17:45', '0');

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
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_images
-- ----------------------------
INSERT INTO `yw_images` VALUES ('1', '1', 'public/upload/20150704101912_56928.jpg', '', '0', '0', '0', '2017-11-04 21:18:28', '2017-11-04 21:18:30');
INSERT INTO `yw_images` VALUES ('2', '4', 'public/upload/u=266057472,3867980612&fm=27&gp=0.jpg', '', '0', '0', '0', '2017-11-05 12:45:10', '2017-11-05 12:45:26');
INSERT INTO `yw_images` VALUES ('3', '5', 'public/upload/u=3327484616,3839932254&fm=27&gp=0.jpg', '', '0', '0', '0', '2017-11-05 12:45:57', '2017-11-05 12:46:00');
INSERT INTO `yw_images` VALUES ('4', '6', 'public/upload/u=2027952311,3645396534&fm=27&gp=0.jpg', '', '0', '0', '0', '2017-11-05 12:46:48', '2017-11-05 12:46:55');
INSERT INTO `yw_images` VALUES ('5', '14', 'public/upload/defauhead.png', '', '0', '0', '0', '2017-11-05 13:46:35', '2017-11-05 13:46:37');
INSERT INTO `yw_images` VALUES ('6', '15', 'public/upload/defaulthead.png', '', '0', '0', '0', '2017-11-05 14:38:42', '2017-11-05 14:38:44');
INSERT INTO `yw_images` VALUES ('7', '17', 'public/upload/defauhead.png', '', '0', '0', '0', '2017-11-05 15:01:58', '2017-11-05 15:02:02');
INSERT INTO `yw_images` VALUES ('8', '24', 'public/upload/u=846598781,1700184812&fm=27&gp=0.jpg', '', '0', '0', '0', '2017-11-06 13:54:53', '2017-11-06 13:56:16');
INSERT INTO `yw_images` VALUES ('9', '25', 'public/upload/u=1146158479,1811960157&fm=27&gp=0.jpg', '', '0', '0', '0', '2017-11-06 13:56:38', '2017-11-06 13:57:10');
INSERT INTO `yw_images` VALUES ('10', '26', 'public/upload/user7-128x128.jpg', '', '0', '0', '0', '2017-11-06 14:04:37', '2017-11-06 14:04:39');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of yw_manager
-- ----------------------------
INSERT INTO `yw_manager` VALUES ('1', 'admin', '运维经理', 'e10adc3949ba59abbe56e057f20f883e', '', '1', null, '2016-10-18 13:29:53', '2016-11-15 15:35:46', '', '', '0');

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
