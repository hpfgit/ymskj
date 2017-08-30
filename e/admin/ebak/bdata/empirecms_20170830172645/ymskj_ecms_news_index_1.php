<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_ecms_news_index`;");
E_C("CREATE TABLE `ymskj_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_ecms_news_index` values('4','12','1','1504084840','1504084860','1504084860','1');");
E_D("replace into `ymskj_ecms_news_index` values('3','12','1','1504084792','1504084839','1504084839','1');");
E_D("replace into `ymskj_ecms_news_index` values('5','12','1','1504084861','1504084885','1504084885','1');");
E_D("replace into `ymskj_ecms_news_index` values('6','12','1','1504084886','1504084904','1504084904','1');");
E_D("replace into `ymskj_ecms_news_index` values('7','12','1','1504084905','1504084921','1504084921','1');");

@include("../../inc/footer.php");
?>