/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50710
 Source Host           : localhost
 Source Database       : graduation

 Target Server Type    : MySQL
 Target Server Version : 50710
 File Encoding         : utf-8

 Date: 02/27/2016 17:21:22 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `msg`
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `html` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `msg`
-- ----------------------------
BEGIN;
INSERT INTO `msg` VALUES ('1', 'cgh\r\nThis is an H1\r\n=============\r\n\r\nThis is an H2  hkn\r\n-------------\r\n\r\n# 这是 H1\r\n\r\n## 这是 H2\r\n>     <script>aler(\'asd\');</script>\r\n\r\n###### 这是 H6\r\n> This is the first level of quoting.\r\n>\r\n> > This is nested blockquote.\r\n>\r\n> Back to the first level.\r\n\r\n> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,\r\nconsectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.\r\nVestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.\r\n\r\n> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse\r\nid sem consectetuer libero luctus adipiscing.\r\n> ## 这是一个标题。\r\n> \r\n> 1.   这是第一行列表项。\r\n> 2.   这是第二行列表项。\r\n> \r\n> 给出一些例子代码：\r\n> \r\n>     return shell_exec(\"echo $input | $markdown_script\");\r\n>     foreach(){} ;\r\n*   Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n    Aliquam hendrerit mi posuere lectus. Vestibulum enim wisi,\r\n    viverra nec, fringilla in, laoreet vitae, risus.\r\n*   Donec sit amet nisl. Aliquam semper ipsum sit amet velit.\r\n    Suspendisse id sem consectetuer libero luctus adipiscing.', '<p>cgh</p>\r\n<h1 id=\"this-is-an-h1\">This is an H1</h1>\r\n<h2 id=\"this-is-an-h2-hkn\">This is an H2  hkn</h2>\r\n<h1 id=\"-h1\">这是 H1</h1>\r\n<h2 id=\"-h2\">这是 H2</h2>\r\n<blockquote>\r\n<pre><code>&lt;script&gt;aler(&#39;asd&#39;);&lt;/script&gt;\r\n</code></pre></blockquote>\r\n<h6 id=\"-h6\">这是 H6</h6>\r\n<blockquote>\r\n<p>This is the first level of quoting.</p>\r\n<blockquote>\r\n<p>This is nested blockquote.</p>\r\n</blockquote>\r\n<p>Back to the first level.</p>\r\n<p>This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,\r\nconsectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.\r\nVestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.</p>\r\n<p>Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse\r\nid sem consectetuer libero luctus adipiscing.</p>\r\n<h2 id=\"-\">这是一个标题。</h2>\r\n<ol>\r\n<li>这是第一行列表项。</li>\r\n<li>这是第二行列表项。</li>\r\n</ol>\r\n<p>给出一些例子代码：</p>\r\n<pre><code>return shell_exec(&quot;echo $input | $markdown_script&quot;);\r\nforeach(){} ;\r\n</code></pre><ul>\r\n<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\nAliquam hendrerit mi posuere lectus. Vestibulum enim wisi,\r\nviverra nec, fringilla in, laoreet vitae, risus.</li>\r\n<li>Donec sit amet nisl. Aliquam semper ipsum sit amet velit.\r\nSuspendisse id sem consectetuer libero luctus adipiscing.</li>\r\n</ul>\r\n</blockquote>\r\n');
COMMIT;

-- ----------------------------
--  Table structure for `pusher`
-- ----------------------------
DROP TABLE IF EXISTS `pusher`;
CREATE TABLE `pusher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`) USING BTREE,
  KEY `teacher_id` (`teacher_id`) USING BTREE,
  CONSTRAINT `stu_pusher` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tea_pusher` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `relative`
-- ----------------------------
DROP TABLE IF EXISTS `relative`;
CREATE TABLE `relative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`student_id`) USING BTREE,
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `relative`
-- ----------------------------
BEGIN;
INSERT INTO `relative` VALUES ('7', '3', '1');
COMMIT;

-- ----------------------------
--  Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) DEFAULT NULL,
  `pwd` varchar(16) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ispusher` varchar(255) DEFAULT NULL,
  `isselect` int(1) DEFAULT NULL,
  `qq` int(11) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`num`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `student`
-- ----------------------------
BEGIN;
INSERT INTO `student` VALUES ('3', '2', '222222', 'Hekangnig', null, '1', '419217359', '', null);
COMMIT;

-- ----------------------------
--  Table structure for `su`
-- ----------------------------
DROP TABLE IF EXISTS `su`;
CREATE TABLE `su` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `su`
-- ----------------------------
BEGIN;
INSERT INTO `su` VALUES ('1', 'su', 'su');
COMMIT;

-- ----------------------------
--  Table structure for `subject`
-- ----------------------------
DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `html` text,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`) USING BTREE,
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `subject`
-- ----------------------------
BEGIN;
INSERT INTO `subject` VALUES ('3', 'qwe', 'qwe', '<p>qwe</p>\r\n', '3', null, '2016-02-27 17:17:43');
COMMIT;

-- ----------------------------
--  Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phonenum` int(11) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `qqgroup` int(11) DEFAULT NULL,
  `current` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`num`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `teacher`
-- ----------------------------
BEGIN;
INSERT INTO `teacher` VALUES ('1', '1', '1', '苏艳', '110', '419123', '', null, '1', '10'), ('2', '2', '2', '赵凤仪', null, null, null, null, '1', '10');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
