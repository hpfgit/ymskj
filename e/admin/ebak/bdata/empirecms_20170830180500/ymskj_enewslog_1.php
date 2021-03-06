<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_enewslog`;");
E_C("CREATE TABLE `ymskj_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_enewslog` values('1','admin','2017-08-25 11:24:11','127.0.0.1','1','','0','59179');");
E_D("replace into `ymskj_enewslog` values('2','admin','2017-08-27 10:12:31','127.0.0.1','0','','1','51952');");
E_D("replace into `ymskj_enewslog` values('3','admin','2017-08-27 10:12:40','127.0.0.1','1','','0','51954');");
E_D("replace into `ymskj_enewslog` values('4','admin','2017-08-29 10:09:07','127.0.0.1','1','','0','54502');");
E_D("replace into `ymskj_enewslog` values('5','admin','2017-08-29 15:16:18','127.0.0.1','1','','0','52457');");
E_D("replace into `ymskj_enewslog` values('6','admin','2017-08-30 10:43:19','127.0.0.1','1','','0','52634');");
E_D("replace into `ymskj_enewslog` values('7','admin','2017-08-30 15:23:06','127.0.0.1','1','','0','53846');");
E_D("replace into `ymskj_enewslog` values('8','admin','2017-08-30 17:58:00','127.0.0.1','1','','0','59274');");

@include("../../inc/footer.php");
?>