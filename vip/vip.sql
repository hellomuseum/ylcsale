-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-11-02 16:15:17
-- 服务器版本： 5.6.27-log
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vip`
--

-- --------------------------------------------------------

--
-- 表的结构 `asus`
--

CREATE TABLE `asus` (
  `yd631_id` int(10) NOT NULL,
  `yd631_name` varchar(10) NOT NULL,
  `yd631_pws` varchar(32) NOT NULL,
  `yd631_sex` varchar(4) NOT NULL,
  `yd631_age` varchar(4) NOT NULL,
  `yd631_call` varchar(15) NOT NULL,
  `yd631_email` varchar(20) NOT NULL,
  `yd631_address` text NOT NULL,
  `yd631_pass` varchar(20) NOT NULL,
  `yd631_time` date NOT NULL,
  `life_cityorhamlet` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `asus`
--

INSERT INTO `asus` (`yd631_id`, `yd631_name`, `yd631_pws`, `yd631_sex`, `yd631_age`, `yd631_call`, `yd631_email`, `yd631_address`, `yd631_pass`, `yd631_time`, `life_cityorhamlet`) VALUES
(5, 'yyg', 'e10adc3949ba59abbe56e057f20f883e', '男', '21', '12121212', '121212@163.com', '西安', 'yes', '2015-09-29', '西安'),
(6, 'yyj', 'd81e0fb576a2390c6c1231b5ad0e2f83', '女', '21', '12121212', '1284817@qq.com', '陕西', 'yes', '2015-10-28', '西安'),
(7, 'yyz', '37612607323c2c91f9c38619a76b4176', '男', '18', '12121212', '1284817@qq.com', '陕西', 'yes', '2015-10-28', '西安,石家庄'),
(8, 'aaa', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 'yes', '2015-11-01', '天津'),
(9, 'qqq', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 'yes', '2015-11-02', '杭州'),
(10, 'www', 'd785c99d298a4e9e6e13fe99e602ef42', '男', '21', '12121212', '121212@163.com', '天津', 'yes', '2015-11-02', '西安'),
(11, 'ccc', 'c1f68ec06b490b3ecb4066b1b13a9ee9', '男', '21', '12121212', '121212@163.com', '天津', 'yes', '2015-11-02', ''),
(12, 'ddd', '980ac217c6b51e7dc41040bec1edfec8', '男', '21', '12121212', '121212@163.com', '西安', 'yes', '2015-11-02', ''),
(13, 'eee', 'cd87cd5ef753a06ee79fc75dc7cfe66c', '男', '21', '12121212', '121212@163.com', '天津', 'yes', '2015-11-02', '北京,上海,天津'),
(14, 'fff', 'eed8cdc400dfd4ec85dff70a170066b7', '男', '21', '12121212', '121212@163.com', '西安', 'yes', '2015-11-02', ''),
(15, 'ggg', '9cafeef08db2dd477098a0293e71f90a', '男', '21', '12121212', '121212@163.com', '天津', 'no', '2015-11-02', '上海,西安,石家庄'),
(16, '123', 'e10adc3949ba59abbe56e057f20f883e', '女', '21', '12121212', '121212@163.com', '西安', 'no', '2015-11-02', '西安,北京,石家庄');

-- --------------------------------------------------------

--
-- 表的结构 `city`
--

CREATE TABLE `city` (
  `id` int(20) NOT NULL,
  `adress` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `city`
--

INSERT INTO `city` (`id`, `adress`) VALUES
(1, '西安'),
(2, '上海'),
(3, '北京'),
(4, '杭州'),
(5, '石家庄'),
(6, '天津'),
(7, '长沙'),
(8, '广州'),
(9, '深圳'),
(10, '成都'),
(11, '济南'),
(12, '福州'),
(13, '合肥'),
(14, '南京'),
(15, '重庆'),
(16, '乌鲁木齐'),
(17, '拉萨'),
(18, '哈尔滨'),
(19, '长春'),
(20, '沈阳');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `createtime` varchar(50) NOT NULL,
  `from_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `to_id`, `title`, `content`, `createtime`, `from_id`) VALUES
(1, 1, 'hello,yyg', 'hello,yyg,nice to meet you.', '1443456005', '3'),
(2, 1, 'hello,yyg.2', 'hello,yyg,nice to meet you.2', '1443456034', '3'),
(4, 3, 'hello,yyj', 'hello,yyj,nice to meet you.', '1443456981', '1'),
(5, 4, 'hello,mm', 'hello,mm!hello,mm!', '1443548842', '1'),
(7, 2, 'bbb', 'bbbbbbbbbbbbbbbb', '1443554469', '5'),
(8, 2, 'ccc', 'cccccccccccccccc', '1443554481', '5'),
(9, 2, 'ddd', 'dddddddddddddddd', '1443554489', '5'),
(10, 2, 'eee', 'eeeeeeeeeeeeeeeee', '1443554500', '5'),
(11, 2, 'fff', 'ffffffffffffffff', '1443554510', '5'),
(12, 2, 'ggg', 'gggggggggggggggggg', '1443554524', '5'),
(13, 5, 'aaa', 'aaaaaaaaaaaa', '1443554732', '3'),
(14, 5, 'bbb', 'bbbbbbbb', '1443554745', '3'),
(15, 6, 'aaa', 'aaaaaaaaaaaaa', '1446445146', '5'),
(16, 6, 'eee', 'eeeeeeeeeeee', '1446446650', '5');

-- --------------------------------------------------------

--
-- 表的结构 `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(4) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_message`
--

INSERT INTO `tb_message` (`id`, `title`, `content`, `username`, `password`, `time`) VALUES
(1, 'hello.world!', 'hello.world! good night!', 'yyg', '11111', '1443491930'),
(2, 'hello.world!2', 'hello,world! good night!2', 'yyg', '22222', '1443495226'),
(3, 'hello.world!3', 'hello,world! good night!3', 'yyg', '33333', '1443497613'),
(4, 'hello.world!4', 'hello,world! good night!4', 'yyg', '44444', '1443506834'),
(5, 'hello.world!5', 'hello,world! good night!5', 'yyg', '55555', '1443506939'),
(6, 'hello.world!6', 'hello,world! good night!6', 'yyg', '66666', '1443507124'),
(7, 'hello.world!7', 'hello,world! good night!7', 'yyj', '77777', '1443507237'),
(8, 'hello.world!8', 'hello,world! good night!8', 'yyj', '88888', '1443507290'),
(9, 'hello.world!9', 'hello,world! good night!9', 'yyj', '99999', '1443508709'),
(10, 'hello.world!9', 'hello,world! good night!9', 'yyj', '99999', '1443508790'),
(11, 'hello.world!9', 'hello,world! good night!9', 'yyj', '99999', '1443508859'),
(12, 'hello.world!9', 'hello,world! good night!9', 'yyj', '99999', '1443508974'),
(13, 'hello.world!9', 'hello,world! good night!9', 'yyj', '99999', '1443509009'),
(14, 'hello.world!9', 'hello,world! good night!9', 'yyj', '99999', '1443509038'),
(33, 'aaa', 'aaaaaaa', 'yyg', 'aaa', '1446447567'),
(36, 'ddd', 'dddddddddddddddddddddd', 'yyg', 'ddd', '1446447594'),
(40, 'ddd', 'ddddddddd', 'yyg', 'ddd', '1446450038'),
(41, 'fff', 'fffffffffff', 'yyg', 'fff', '1446450047'),
(42, 'gggg', 'ggggggggggggggg', 'yyg', 'gggg', '1446450055'),
(43, 'hhh', 'hhhhhhhhhhh', 'yyg', 'hhh', '1446450063'),
(44, 'iii', 'iiiiiiiiiiiiiii', 'yyg', 'iii', '1446450073'),
(45, 'kkk', 'kkkkkkkkkkkkk', 'yyg', 'kkkk', '1446450084');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asus`
--
ALTER TABLE `asus`
  ADD PRIMARY KEY (`yd631_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_tb_message_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
