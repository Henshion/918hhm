-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 07 月 31 日 23:22
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hhmblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `hhm_adminblog`
--

CREATE TABLE IF NOT EXISTS `hhm_adminblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '����id',
  `username` varchar(32) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `password` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '邮箱',
  `phone` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '手机号码',
  `weixin` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '微信号',
  `qq` varchar(32) CHARACTER SET utf8 NOT NULL COMMENT 'QQ',
  `address` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '地址',
  `actualname` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '真实姓名',
  `headerimg` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '头像地址',
  `birthday` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '生日',
  `state` int(11) DEFAULT '1' COMMENT '状态',
  `login_titme` int(11) DEFAULT NULL COMMENT '最近登录时间',
  `create_time` date NOT NULL COMMENT '创建时间',
  `auth` int(11) NOT NULL COMMENT '权限',
  `system` int(11) DEFAULT NULL COMMENT '超级管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12312215 ;

--
-- 转存表中的数据 `hhm_adminblog`
--

INSERT INTO `hhm_adminblog` (`id`, `username`, `password`, `email`, `phone`, `weixin`, `qq`, `address`, `actualname`, `headerimg`, `birthday`, `state`, `login_titme`, `create_time`, `auth`, `system`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '595700844@qq.com', '15767191797', 'Frank_Hhm', '595700844', '广州市番禺区大石', '小明同学', 'http://918hhm.com/Public/Admin/images/0.jpg', '26', 1, NULL, '2017-07-30', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hhm_article`
--

CREATE TABLE IF NOT EXISTS `hhm_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `open` tinyint(1) NOT NULL,
  `author` varchar(32) NOT NULL,
  `source` varchar(100) DEFAULT NULL,
  `view` varchar(32) DEFAULT '1',
  `time` varchar(32) NOT NULL COMMENT '时间',
  `commend` tinyint(1) NOT NULL DEFAULT '0',
  `choice` tinyint(1) NOT NULL DEFAULT '0',
  `pic` varchar(255) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  `zan` int(11) DEFAULT '0' COMMENT '点赞',
  `info` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '状态',
  `label` varchar(32) DEFAULT NULL COMMENT '标签',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章' AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- 表的结构 `hhm_cate`
--

CREATE TABLE IF NOT EXISTS `hhm_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `time` varchar(32) NOT NULL,
  `keywords` varchar(32) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='栏目' AUTO_INCREMENT=31119 ;

--
-- 转存表中的数据 `hhm_cate`
--

INSERT INTO `hhm_cate` (`id`, `tid`, `name`, `type`, `time`, `keywords`, `description`) VALUES
(44, 2, 'css', 1, '1501160206', '', ''),
(1, 0, 'Php/Java', 1, '1501085893', 'thinkphp', 'ad'),
(4, 0, 'Living', 1, '1501159713', '', ''),
(3, 0, 'Javascript', 1, '1501159696', '', ''),
(2, 0, 'html/css', 1, '1501086905', '', ''),
(11, 1, 'php功能', 1, '1501163452', '', ''),
(2233, 2, '插件', 1, '1501287447', '插件', '插件'),
(5, 0, 'PS', 1, '1501344409', 'PS', 'PS');

-- --------------------------------------------------------

--
-- 表的结构 `hhm_img`
--

CREATE TABLE IF NOT EXISTS `hhm_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `savename` varchar(32) DEFAULT NULL,
  `file` char(32) DEFAULT NULL COMMENT '文件名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='相册' AUTO_INCREMENT=66 ;

-- --------------------------------------------------------

--
-- 表的结构 `hhm_index`
--

CREATE TABLE IF NOT EXISTS `hhm_index` (
  `id` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `cateid` int(11) DEFAULT NULL COMMENT '栏目id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='前台编辑';

--
-- 转存表中的数据 `hhm_index`
--

INSERT INTO `hhm_index` (`id`, `name`, `cateid`) VALUES
(1, 'php', 1),
(2, 'html', 2),
(3, '插件', 2233),
(4, 'Living', 4),
(5, 'PS', 5);

-- --------------------------------------------------------

--
-- 表的结构 `hhm_link`
--

CREATE TABLE IF NOT EXISTS `hhm_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` char(255) DEFAULT NULL COMMENT '链接昵称',
  `link` char(255) DEFAULT NULL COMMENT '链接地址',
  `state` int(11) DEFAULT '1' COMMENT '状态',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `system` int(11) DEFAULT NULL COMMENT '不能删除此链接',
  `pic` varchar(255) DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `hhm_link`
--

INSERT INTO `hhm_link` (`id`, `name`, `link`, `state`, `sort`, `system`, `pic`) VALUES
(1, '孔乐教育', 'http://konglejiaoyu.com', 1, 2, 1, '/Public/Uploads/2017-07-31/597f33fc07c39.png'),
(16, 'hhm个人博客', 'http://www.918hhm.com/', 1, 0, NULL, '');

-- --------------------------------------------------------

--
-- 表的结构 `hhm_menu`
--

CREATE TABLE IF NOT EXISTS `hhm_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) DEFAULT NULL COMMENT '菜单名称',
  `link` char(255) DEFAULT NULL COMMENT '链接地址',
  `sort` int(11) DEFAULT NULL COMMENT '权限',
  `state` int(11) DEFAULT NULL COMMENT '状态',
  `system` int(11) DEFAULT NULL COMMENT '固定',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='菜单' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `hhm_menu`
--

INSERT INTO `hhm_menu` (`id`, `name`, `link`, `sort`, `state`, `system`) VALUES
(1, 'Home', 'http://918hhm.com/', 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hhm_navtop`
--

CREATE TABLE IF NOT EXISTS `hhm_navtop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL,
  `link` varchar(32) DEFAULT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `time` varchar(32) NOT NULL,
  `blank` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='菜单' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hhm_navtop`
--

INSERT INTO `hhm_navtop` (`id`, `tid`, `link`, `show`, `sort`, `name`, `time`, `blank`) VALUES
(1, 0, '../index.php', 1, 1, '网站首页', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hhm_slide`
--

CREATE TABLE IF NOT EXISTS `hhm_slide` (
  `id` int(11) NOT NULL,
  `title` text COMMENT '标题',
  `address1` varchar(255) DEFAULT NULL COMMENT '图片1地址',
  `address2` varchar(255) DEFAULT NULL COMMENT '图片2地址',
  `address3` varchar(255) DEFAULT NULL COMMENT '图片3地址',
  `link` varchar(255) DEFAULT NULL COMMENT '链接地址',
  `img_id1` char(32) DEFAULT NULL COMMENT '相册id',
  `img_id2` char(32) DEFAULT NULL COMMENT '相册id',
  `img_id3` char(32) DEFAULT NULL COMMENT '相册id2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='幻灯片';

-- --------------------------------------------------------

--
-- 表的结构 `hhm_system`
--

CREATE TABLE IF NOT EXISTS `hhm_system` (
  `id` int(11) NOT NULL,
  `webtitle` char(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '网站标题',
  `icp` char(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '网站备案号码',
  `email` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '对外邮箱',
  `qq` char(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'qq联系',
  `xinlang` char(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '新浪微博',
  `weixinpic` char(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '微信二维码地址',
  `copyright` char(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '版权',
  `logo` char(32) CHARACTER SET utf8 DEFAULT NULL COMMENT 'logo地址',
  `keywords` char(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '关键字',
  `describe` char(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='系统设置';

--
-- 转存表中的数据 `hhm_system`
--

INSERT INTO `hhm_system` (`id`, `webtitle`, `icp`, `email`, `qq`, `xinlang`, `weixinpic`, `copyright`, `logo`, `keywords`, `describe`) VALUES
(1, '黄海明个人博客', ' 粤ICP备17085554号', '595700844@qq.com', '595700844', '595700844', '', '918hhm_blog', '', 'hhm、黄海明、个人博客、web前端、php', '黄海明个人博客');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
