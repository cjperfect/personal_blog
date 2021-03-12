/*
 Navicat Premium Data Transfer

 Source Server         : aliyun
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 101.132.192.245:3306
 Source Schema         : love

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 18/03/2020 10:19:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loginIp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `flag` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'chenjiang', '$2y$10$u3Eq1kscpZdNPbJGO/O2UepHjkF1wIcgXR9xDwu/tRfKdF2UeGmUa', '117.136.52.71', '1', '2020-01-08 07:11:33', '2020-02-09 13:01:15');
INSERT INTO `admins` VALUES (2, 'cmt123', '$2y$10$Bds.cHaarbvnLa711paqmuVRQe7pQP4bf4KYqxLIIwwh1jjZhjf6y', '43.227.139.20', '1', '2020-01-08 07:20:43', '2020-02-09 11:32:51');
INSERT INTO `admins` VALUES (5, 'test12', '$2y$10$DAqDFVqdRih2t/5q3t.nEOGCwmm7usYeZqczmdcMaM0dXx4ccxD0e', NULL, '2', '2020-02-09 11:12:09', '2020-02-09 11:12:19');

-- ----------------------------
-- Table structure for descriptions
-- ----------------------------
DROP TABLE IF EXISTS `descriptions`;
CREATE TABLE `descriptions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loveNote` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `important_time` date NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of descriptions
-- ----------------------------
INSERT INTO `descriptions` VALUES (1, '情不知所起 一往情深', '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破', '我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳', '我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的', '你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰', '2020-03-08', '2020-01-08 18:46:58', '2020-02-09 11:14:40');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (9, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (10, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (12, '2020_01_05_040800_create_admins_table', 1);
INSERT INTO `migrations` VALUES (16, '2020_01_08_060852_create_settings_table', 1);
INSERT INTO `migrations` VALUES (17, '2020_01_08_172536_create_settings_table', 2);
INSERT INTO `migrations` VALUES (18, '2020_01_05_041035_create_descriptions_table', 3);
INSERT INTO `migrations` VALUES (20, '2020_01_05_041535_create_photos_table', 5);
INSERT INTO `migrations` VALUES (21, '2020_01_05_035808_create_notes_table', 6);
INSERT INTO `migrations` VALUES (22, '2020_01_05_073846_create_us_table', 7);

-- ----------------------------
-- Table structure for notes
-- ----------------------------
DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isShowHome` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0',
  `pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of notes
-- ----------------------------
INSERT INTO `notes` VALUES (6, '一房二人三餐四季', '0', 'note_photo/QFpTGWD2P8YePreU5sIHNk1yxwMz0Wn1tD8bfBbY.jpeg', 119, '陈江', '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。', '2020-01-11 11:35:07', '2020-02-03 12:06:45');
INSERT INTO `notes` VALUES (7, '春风十里不如你', '1', 'note_photo/oQOC5glSRVlDD1LglaB1MJNZICxf5Fpfa49p9FwV.png', 1005, '程梦婷', '你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。<br />\r\n<div>\r\n	<br />\r\n</div>', '2020-01-11 11:39:12', '2020-02-09 18:32:52');
INSERT INTO `notes` VALUES (8, '因为喜欢 可迎万难', '1', 'note_photo/v4T8x7FiX1gOEQKtTufMPjE5udnM9g7JJrlGrwxE.png', 13, '陈江', '我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。<br />\r\n<div>\r\n	<br />\r\n</div>', '2020-01-11 16:46:32', '2020-02-10 07:45:07');
INSERT INTO `notes` VALUES (9, '其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦', '0', 'note_photo/Li9sUQhdYTv0V9kRwBeP7E3zWUg6EljWtKmk8Lip.jpeg', 25, '陈江', '<p>\r\n	其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦，沿着大烟囱炊烟袅袅，氧化乘风，飘在一枚树叶上，随着露水滴落在草颗丛，黏在经过路人的鞋底，通过排水管道进入污水处理厂...最终我们变化成原子，在宇宙中不死不灭，生生不息。其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦，沿着大烟囱炊烟袅袅，氧化乘风，飘在一枚树叶上，随着露水滴落在草颗丛，黏在经过路人的鞋底，通过排水管道进入污水处理厂...最终我们变化成原子，在宇宙中不死不灭，生生不息。其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦，沿着大烟囱炊烟袅袅，氧化乘风，飘在一枚树叶上，随着露水滴落在草颗丛，黏在经过路人的鞋底，通过排水管道进入污水处理厂...最终我们变化成原子，在宇宙中不死不灭，生生不息。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"/kindeditor/attached/image/20200202/20200202083548_77538.jpg\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span>其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦，沿着大烟囱炊烟袅袅，氧化乘风，飘在一枚树叶上，随着露水滴落在草颗丛，黏在经过路人的鞋底，通过排水管道进入污水处理厂...最终我们变化成原子，在宇宙中不死不灭，生生不息。其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦，沿着大烟囱炊烟袅袅，氧化乘风，飘在一枚树叶上，随着露水滴落在草颗丛，黏在经过路人的鞋底，通过排水管道进入污水处理厂...最终我们变化成原子，在宇宙中不死不灭，生生不息。其实生生世世是存在的，经过三万八千天，你我一阵噼里啪啦，沿着大烟囱炊烟袅袅，氧化乘风，飘在一枚树叶上，随着露水滴落在草颗丛，黏在经过路人的鞋底，通过排水管道进入污水处理厂...最终我们变化成原子，在宇宙中不死不灭，生生不息。</span> \r\n</p>', '2020-01-11 17:08:54', '2020-02-04 18:09:37');
INSERT INTO `notes` VALUES (10, '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈', '1', 'note_photo/33hYmkttDHXsFkUEge3FbBFG8NFLogAL9hoP0MRj.jpeg', 4, '程梦婷', '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n<p>\r\n	<img src=\"/kindeditor/attached/image/20200202/20200202090316_39321.jpg\" alt=\"\" />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n</p>', '2020-02-02 16:03:24', '2020-02-02 16:54:53');
INSERT INTO `notes` VALUES (11, '我对你的喜欢，何止钟意二字', '0', 'note_photo/2L6X2N18Ko5jQ6wBA0PVsZYxDNC35eJdOMIa5qXq.jpeg', 14, '陈江', '我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳，每次你的出现，仿佛有星星闪耀在四周的亮眼，或许先生觉得我说的话太过露骨，可这爱意早已藏不住心头的要满溢出来，只好将其所有都袒露与你。<br />\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳，每次你的出现，仿佛有星星闪耀在四周的亮眼，或许先生觉得我说的话太过露骨，可这爱意早已藏不住心头的要满溢出来，只好将其所有都袒露与你。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n	<p>\r\n		<br />\r\n	</p>\r\n我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳，每次你的出现，仿佛有星星闪耀在四周的亮眼，或许先生觉得我说的话太过露骨，可这爱意早已藏不住心头的要满溢出来，只好将其所有都袒露与你。<br />\r\n	<p>\r\n		我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳，每次你的出现，仿佛有星星闪耀在四周的亮眼，或许先生觉得我说的话太过露骨，可这爱意早已藏不住心头的要满溢出来，只好将其所有都袒露与你。<br />\r\n		<p>\r\n			<br />\r\n		</p>\r\n	</p>\r\n</p>', '2020-02-02 16:12:04', '2020-02-02 16:49:48');
INSERT INTO `notes` VALUES (12, '我院子里有四万万朵玫瑰花，每一天早晨', '0', 'note_photo/j8X98J9xWl7xXPXE8b3cayy3Q9ahQdeWu6FYsIIh.jpeg', 9, '程梦婷', '我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<p>\r\n	我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n</p>', '2020-02-02 16:12:34', '2020-02-02 17:15:44');
INSERT INTO `notes` VALUES (13, '每天都是爱你的样子', '1', 'note_photo/PQEkHd5rvmZDEYAtsxRlIgdxxEvetucD5WYNqfbl.jpeg', 36, '陈江', '<p style=\"text-indent:2em;\">\r\n	<span style=\"color:#E53333;\">我院子里有四万万朵玫瑰花</span>，<img src=\"/kindeditor/attached/image/20200202/20200202095442_35014.jpg\" alt=\"\" width=\"280\" height=\"498\" title=\"\" align=\"left\" />每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。\r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<br />\r\n</p>', '2020-02-02 16:54:47', '2020-02-18 12:16:13');
INSERT INTO `notes` VALUES (14, '每天都爱你一点', '0', 'note_photo/NA8jsrKmT8kXYJcAImnMQf7v9DSrQrUGlntwSmP4.jpeg', 9, '程梦婷', '<p style=\"text-indent:2em;\">\r\n	<span style=\"line-height:2.5;\"><span style=\"background-color:#E53333;color:#FFFFFF;\">我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情</span>，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我<b><u>的样子，我<em></em>喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多</u></b>的状态里，那样我就知道，在<span style=\"background-color:;\"></span>你的世界里，我和别人不一样，而我喜欢这种不一样。</span><img src=\"/kindeditor/attached/image/20200202/20200202095442_35014.jpg\" width=\"300\" alt=\"\" height=\"534\" title=\"\" align=\"left\" /> \r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<span style=\"line-height:2.5;\">我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样</span><span style=\"line-height:1.5;\"><span style=\"line-height:2.5;\"></span><span style=\"line-height:2.5;\"></span></span><span style=\"line-height:2.5;\">我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。</span> \r\n</p>', '2020-02-02 17:07:03', '2020-02-09 18:32:48');
INSERT INTO `notes` VALUES (15, '爱你是一种责任', '1', 'note_photo/vedg34UCOB0yq7azBzLyMu4B2cKAnKMmNX9vqqqr.jpeg', 4, '陈江', '<p style=\"text-indent:2em;\">\r\n	我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。我喜欢你告诉我不曾告诉别人的心情，我喜欢你带我做不曾和别人做过的事情，我喜欢你偶尔像个孩子依赖我的样子，我喜欢你对我毫不见外倾囊相待的信任，我喜欢你只对我才有的表情，我喜欢你把我的名字写进为数不多的状态里，那样我就知道，在你的世界里，我和别人不一样，而我喜欢这种不一样。\r\n</p>', '2020-02-03 17:58:07', '2020-03-01 16:45:18');
INSERT INTO `notes` VALUES (16, '情不知所起 一往情深', '0', 'note_photo/vkXEFpLIVlAQT6GMs7BCChJL24ww72o0EfKAJC7x.jpeg', 6, '程梦婷', '你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。你来吧，我想我已经准备好了。准备好和你一起吹夏末海边的晚风，准备好在十二点的夜晚邀你喝一杯晚归的酒，准备好在秋天的黄昏之后与你一起数淡淡星辰，准备好相遇，准备好真心，准备好爱你。万事俱备，我只欠你。', '2020-02-04 16:54:52', '2020-02-09 11:29:44');
INSERT INTO `notes` VALUES (17, '爱你是一种责任', '0', 'note_photo/gCarpDDzKiVI228nG62qBe96pHBo78kbU1feAMzO.jpeg', 3, '测试作者', '我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。', '2020-02-04 17:19:26', '2020-02-09 11:29:40');
INSERT INTO `notes` VALUES (18, '既见君子 云胡不喜', '0', 'note_photo/TvRNTnTFbYZGgCMv1hPVKl7Bq40KLXt0alDK0KTW.png', 1, '程梦婷', '我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>\r\n我院子里有四万万朵玫瑰花，每一天早晨，我就捧一本书坐在门口，所有的路人路过，都要称赞我的玫瑰花，也有想要折去一两朵的，我通通不理睬，直到那天你来，笑眼眯成月牙，问我“看的什么书啊”，我就知道，这四万万朵玫瑰花，通通都是你的。<br />\r\n<div>\r\n	<br />\r\n</div>', '2020-02-04 17:19:52', '2020-02-09 11:29:35');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoTime` date NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES (12, '这是回忆标题', 'photos/pAdYWBhdnEhRR7d2R6YjKCHRnq2SoFb31yQUqBPf.png', 'chenjiang', '武汉市', '2020-01-10', '开奖号公开较好的科技感离开但是本科卡官方都诶及空气格日额额', '2020-01-09 17:03:09', '2020-01-09 17:03:09');
INSERT INTO `photos` VALUES (13, '这是回忆标题', 'photos/ogf3zZ0EFIIhYB0G59Z2RDJWVWMPneRQInB0bgeu.png', '辅导书', '萨芬', '2020-01-18', '提款机华工科技是发给你的分公司法国队会加工费费覆盖', '2020-01-09 17:03:51', '2020-01-09 17:03:51');
INSERT INTO `photos` VALUES (19, '开心的一天', 'photos/jhLQCmi1GPwl0iSzrX4xPEj5NtClP6xplqSJQQPO.jpeg', 'chenjiang', '武汉市', '2020-02-14', '开心的一天开心的一天开心的一天开心的一天开心的一天开心的一天', '2020-02-01 17:22:40', '2020-02-01 17:22:40');
INSERT INTO `photos` VALUES (20, '开心的一天', 'photos/QSvk5xx0xy545fdc3H5sqTc0laOnxBP9JvesoO1i.png', 'chenjiang', '武汉市', '2020-02-14', '开心的一天开心的一天开心的一天开心的一天开心的一天开心的一天', '2020-02-01 17:22:40', '2020-02-01 17:22:40');
INSERT INTO `photos` VALUES (21, '开心的一天', 'photos/Ck3dtA5qp9hOxUuc9mf6VGh8QBAubyjSH3sIOlIy.png', 'chenjiang', '武汉市', '2020-02-14', '开心的一天开心的一天开心的一天开心的一天开心的一天开心的一天', '2020-02-01 17:22:40', '2020-02-01 17:22:40');
INSERT INTO `photos` VALUES (22, '快乐的一天', 'photos/51D0nRNt1Znikm0ZBL5tespj6JXC10IbuJWI4JU7.jpeg', 'cmt', '武汉市', '2020-02-19', '快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天', '2020-02-01 17:23:21', '2020-02-01 17:23:21');
INSERT INTO `photos` VALUES (23, '快乐的一天', 'photos/LJEkMiBdSMFAXCw1tnqKlLspUz6W9JMCdzYz4OZr.jpeg', 'cmt', '武汉市', '2020-02-19', '快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天', '2020-02-01 17:23:21', '2020-02-01 17:23:21');
INSERT INTO `photos` VALUES (24, '快乐的一天', 'photos/FCkA66arWOrkToCrSKvn75DSvciUZcTAx14ndCqr.jpeg', 'cmt', '武汉市', '2020-02-19', '快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天快乐的一天', '2020-02-01 17:23:21', '2020-02-01 17:23:21');
INSERT INTO `photos` VALUES (25, '程梦婷', 'photos/1yvyqgRXYB7TbWXG4Q1ku0WyoqsLtj9Vy6yg75Pk.jpeg', '程梦婷', '武汉市', '2020-02-06', '这是我的描述', '2020-02-03 11:25:50', '2020-02-03 11:25:50');
INSERT INTO `photos` VALUES (27, '爱你是一种责任', 'photos/wmdXKzCzZR2yuFLSzvgOllr0Z6Wezm7u1kPmqLcS.jpeg', '程梦婷', '武汉市', '2020-02-05', '人间无趣 但有先生你\r\n情不知所起 一往情深', '2020-02-04 18:25:05', '2020-02-04 18:25:05');
INSERT INTO `photos` VALUES (28, '情不知所起 一往情深', 'photos/4hJRHHzloZvn2KTgeKby2lAo64qJ33jufriLHElN.jpeg', '程梦婷', '广州市', '2020-02-06', '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈', '2020-02-05 17:28:16', '2020-02-05 17:28:16');
INSERT INTO `photos` VALUES (30, '情不知所起 一往情深', 'photos/wrhb7Jch5QW8B1gqSyPHyH08YXvT5mX5FVxJzFK6.jpeg', '程梦婷', '广州市', '2020-02-06', '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈', '2020-02-05 17:28:16', '2020-02-05 17:28:16');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visited` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, '因为喜欢 可迎万难', '我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳，每次你的出现，仿佛有星星闪耀在四周的亮眼，或许先生觉得我说的话太过露骨，可这爱意早已藏不住心头的要满溢出来，只好将其所有都袒露与你。', '416171534@qq.com', '湖北省武汉市江夏区', '15927202962', '人间无趣 但有先生你 春风十里不如你', 1332, '2020-01-08 18:09:39', '2020-03-18 08:51:21');

-- ----------------------------
-- Table structure for us
-- ----------------------------
DROP TABLE IF EXISTS `us`;
CREATE TABLE `us`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sheName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `heName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sheDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `heDescription` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shePic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hePic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SheSex` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `heSex` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of us
-- ----------------------------
INSERT INTO `us` VALUES (1, 'CMT', 'CJ', '我才不要和你悬崖勒马，我要爱到春光散尽世纪倒戈，我才不给自己任何后悔的机会，要么和你分道扬镳鱼死网破，要么至死方休永不分离，我要江湖儿女快意恩仇，要你问心有愧，我要我来过就在你心建起堡垒，我要你时刻爱我永远爱我必须爱我。', '我对你的喜欢，何止钟意二字，望向你时眼里满是藏不住的爱意，一想到嘴角就不听使唤的上扬，你一笑胜过这寒日里的每个暖阳，每次你的出现，仿佛有星星闪耀在四周的亮眼，或许先生觉得我说的话太过露骨，可这爱意早已藏不住心头的要满溢出来，只好将其所有都袒露与你。', 'us_photo/5b7M3ZeezfhKd4MuP7pg0bntx6i4iFNqPQ90Plrd.jpeg', 'us_photo/ssx4Dz93Vd6kEQ1PYoehFlwgfpLpxS0VGbnhfCaJ.jpeg', '1', '0', '2020-02-06 17:22:05', '2020-02-08 18:22:17');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
