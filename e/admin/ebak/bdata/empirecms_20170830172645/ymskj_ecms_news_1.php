<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_ecms_news`;");
E_C("CREATE TABLE `ymskj_ecms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_ecms_news` values('4','12','0','0','0','0','2017-08-30','4','1','admin','0','0','1','0','0','0','0','1504084860','1504084860','1','0','0','','/chanpinzhongxin/baojianshipin/2017-08-30/4.html','1','1','1','','造价业绩','1504084840','/d/file/chanpinzhongxin/baojianshipin/2017-08-30/c6d8964fd7a686b5e5982d2e0ce77da3.jpg','','        &lt;li&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;/li&gt;','0');");
E_D("replace into `ymskj_ecms_news` values('3','12','0','0','0','0','2017-08-30','3','1','admin','0','0','1','0','0','0','0','1504084839','1504084839','1','0','0','','/chanpinzhongxin/baojianshipin/2017-08-30/3.html','1','1','1','','师资力量','1504084792','/d/file/chanpinzhongxin/baojianshipin/2017-08-30/884ce20a62be0e39e180765b7985a444.jpg','','        &lt;li&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;/li&gt;','0');");
E_D("replace into `ymskj_ecms_news` values('5','12','0','0','0','0','2017-08-30','5','1','admin','0','0','1','0','0','0','0','1504084885','1504084885','1','0','0','','/chanpinzhongxin/baojianshipin/2017-08-30/5.html','1','1','1','','案例视频','1504084861','/d/file/chanpinzhongxin/baojianshipin/2017-08-30/801c24cee64dba80753cd461d0db1257.jpg','','        &lt;li&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;/li&gt;','0');");
E_D("replace into `ymskj_ecms_news` values('6','12','0','0','0','0','2017-08-30','6','1','admin','0','0','1','0','0','0','0','1504084904','1504084904','1','0','0','','/chanpinzhongxin/baojianshipin/2017-08-30/6.html','1','1','1','','测试信息','1504084886','/d/file/chanpinzhongxin/baojianshipin/2017-08-30/847b7f3c430f5387b15d17267edd178d.jpg','','        &lt;li&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;/li&gt;','0');");
E_D("replace into `ymskj_ecms_news` values('7','12','0','0','0','0','2017-08-30','7','1','admin','0','0','1','0','0','0','0','1504084921','1504084921','1','0','0','','/chanpinzhongxin/baojianshipin/2017-08-30/7.html','1','1','1','','造价咨询','1504084905','/d/file/chanpinzhongxin/baojianshipin/2017-08-30/fc13819036f81d55fb2c39525e23a599.jpg','','        &lt;li&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;/li&gt;','0');");

@include("../../inc/footer.php");
?>