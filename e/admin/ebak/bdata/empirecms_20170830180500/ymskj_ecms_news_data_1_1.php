<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_ecms_news_data_1`;");
E_C("CREATE TABLE `ymskj_ecms_news_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_ecms_news_data_1` values('3','12','','1','0','0','0','','','','<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('4','12','','1','0','0','0','','','','<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('5','12','','1','0','0','0','','','','<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('6','12','','1','0','0','0','','','','<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('7','12','','1','0','0','0','','','','<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;&lt;/li&gt;</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('8','9','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('9','10','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('10','11','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('11','13','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('12','14','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('13','15','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('14','16','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('15','17','','1','0','0','0','','','','<p>师资力量</p>');");
E_D("replace into `ymskj_ecms_news_data_1` values('16','18','','1','0','0','0','','','','<p>师资力量</p>');");

@include("../../inc/footer.php");
?>