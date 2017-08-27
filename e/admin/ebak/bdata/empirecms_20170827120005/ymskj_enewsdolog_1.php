<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_enewsdolog`;");
E_C("CREATE TABLE `ymskj_enewsdolog` (
  `logid` bigint(20) NOT NULL AUTO_INCREMENT,
  `logip` varchar(20) NOT NULL DEFAULT '',
  `logtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL DEFAULT '',
  `enews` varchar(30) NOT NULL DEFAULT '',
  `doing` varchar(255) NOT NULL DEFAULT '',
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`logid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_enewsdolog` values('1','127.0.0.1','2017-08-25 11:24:11','admin','login','---','0','59179');");
E_D("replace into `ymskj_enewsdolog` values('2','127.0.0.1','2017-08-25 11:25:10','admin','SetEnews','---','0','59351');");
E_D("replace into `ymskj_enewsdolog` values('3','127.0.0.1','2017-08-27 10:12:40','admin','login','---','0','51954');");
E_D("replace into `ymskj_enewsdolog` values('4','127.0.0.1','2017-08-27 10:26:24','admin','AddPagetemp','tempid=1&tempname=关于我们&gid=1','0','52269');");
E_D("replace into `ymskj_enewsdolog` values('5','127.0.0.1','2017-08-27 10:41:19','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','53474');");
E_D("replace into `ymskj_enewsdolog` values('6','127.0.0.1','2017-08-27 10:46:18','admin','EditTempvar','varid=1<br>var=header&gid=1','0','54054');");
E_D("replace into `ymskj_enewsdolog` values('7','127.0.0.1','2017-08-27 10:47:53','admin','EditTempvar','varid=2<br>var=footer&gid=1','0','54263');");
E_D("replace into `ymskj_enewsdolog` values('8','127.0.0.1','2017-08-27 10:54:55','admin','EditPublicTemp','gid=1','0','55098');");
E_D("replace into `ymskj_enewsdolog` values('9','127.0.0.1','2017-08-27 10:54:59','admin','ReIndex','---','0','55098');");
E_D("replace into `ymskj_enewsdolog` values('10','127.0.0.1','2017-08-27 10:56:05','admin','EditTempvar','varid=2<br>var=footer&gid=1','0','55311');");
E_D("replace into `ymskj_enewsdolog` values('11','127.0.0.1','2017-08-27 10:56:08','admin','ReIndex','---','0','55311');");
E_D("replace into `ymskj_enewsdolog` values('12','127.0.0.1','2017-08-27 10:57:08','admin','EditPublicTemp','gid=1','0','55463');");
E_D("replace into `ymskj_enewsdolog` values('13','127.0.0.1','2017-08-27 11:00:51','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','55917');");
E_D("replace into `ymskj_enewsdolog` values('14','127.0.0.1','2017-08-27 11:04:28','admin','AddUserpage','id=1&title=关于我们','0','56373');");
E_D("replace into `ymskj_enewsdolog` values('15','127.0.0.1','2017-08-27 11:07:42','admin','AddUserpage','id=2&title=企业文化','0','56827');");
E_D("replace into `ymskj_enewsdolog` values('16','127.0.0.1','2017-08-27 11:08:56','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','56983');");
E_D("replace into `ymskj_enewsdolog` values('17','127.0.0.1','2017-08-27 11:09:04','admin','DoReUserpage','---','0','56992');");
E_D("replace into `ymskj_enewsdolog` values('18','127.0.0.1','2017-08-27 11:09:51','admin','EditUserpage','id=2&title=企业文化','0','57122');");
E_D("replace into `ymskj_enewsdolog` values('19','127.0.0.1','2017-08-27 11:09:59','admin','DoReUserpage','---','0','57133');");
E_D("replace into `ymskj_enewsdolog` values('20','127.0.0.1','2017-08-27 11:10:50','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','57241');");
E_D("replace into `ymskj_enewsdolog` values('21','127.0.0.1','2017-08-27 11:10:56','admin','DoReUserpage','---','0','57280');");
E_D("replace into `ymskj_enewsdolog` values('22','127.0.0.1','2017-08-27 11:17:03','admin','AddClass','classid=1<br>classname=团队风采','0','58182');");
E_D("replace into `ymskj_enewsdolog` values('23','127.0.0.1','2017-08-27 11:18:12','admin','AddClass','classid=2<br>classname=资质荣誉','0','58364');");
E_D("replace into `ymskj_enewsdolog` values('24','127.0.0.1','2017-08-27 11:19:07','admin','AddClass','classid=3<br>classname=视频展厅','0','58473');");
E_D("replace into `ymskj_enewsdolog` values('25','127.0.0.1','2017-08-27 11:28:11','admin','AddListtemp','tempid=9<br>tempname=团队风采&gid=1','0','59961');");
E_D("replace into `ymskj_enewsdolog` values('26','127.0.0.1','2017-08-27 11:31:38','admin','AddListtemp','tempid=10<br>tempname=资质荣誉&gid=1','0','60467');");
E_D("replace into `ymskj_enewsdolog` values('27','127.0.0.1','2017-08-27 11:32:00','admin','EditListtemp','tempid=9<br>tempname=团队风采&gid=1','0','60538');");
E_D("replace into `ymskj_enewsdolog` values('28','127.0.0.1','2017-08-27 11:32:52','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','60666');");
E_D("replace into `ymskj_enewsdolog` values('29','127.0.0.1','2017-08-27 11:33:06','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','60697');");
E_D("replace into `ymskj_enewsdolog` values('30','127.0.0.1','2017-08-27 11:34:43','admin','AddListtemp','tempid=11<br>tempname=视频展厅&gid=1','0','60942');");
E_D("replace into `ymskj_enewsdolog` values('31','127.0.0.1','2017-08-27 11:39:02','admin','AddNewstemp','tempid=10<br>tempname=关于我们&gid=1','0','61592');");
E_D("replace into `ymskj_enewsdolog` values('32','127.0.0.1','2017-08-27 11:39:39','admin','EditClass','classid=1<br>classname=团队风采','0','61690');");
E_D("replace into `ymskj_enewsdolog` values('33','127.0.0.1','2017-08-27 11:39:54','admin','EditClass','classid=2<br>classname=资质荣誉','0','61726');");
E_D("replace into `ymskj_enewsdolog` values('34','127.0.0.1','2017-08-27 11:40:22','admin','EditClass','classid=3<br>classname=视频展厅','0','61807');");
E_D("replace into `ymskj_enewsdolog` values('35','127.0.0.1','2017-08-27 11:43:12','admin','AddPagetemp','tempid=2&tempname=公司简介&gid=1','0','62237');");
E_D("replace into `ymskj_enewsdolog` values('36','127.0.0.1','2017-08-27 11:44:39','admin','EditPagetemp','tempid=1&tempname=关于我们&gid=1','0','62493');");
E_D("replace into `ymskj_enewsdolog` values('37','127.0.0.1','2017-08-27 11:45:19','admin','EditPagetemp','tempid=2&tempname=公司简介&gid=1','0','62611');");
E_D("replace into `ymskj_enewsdolog` values('38','127.0.0.1','2017-08-27 11:46:26','admin','AddPagetemp','tempid=3&tempname=企业文化&gid=1','0','62786');");
E_D("replace into `ymskj_enewsdolog` values('39','127.0.0.1','2017-08-27 11:46:53','admin','DoReUserpage','---','0','62839');");
E_D("replace into `ymskj_enewsdolog` values('40','127.0.0.1','2017-08-27 11:47:31','admin','AddUserpage','id=3&title=公司简介','0','62944');");
E_D("replace into `ymskj_enewsdolog` values('41','127.0.0.1','2017-08-27 11:47:55','admin','EditUserpage','id=3&title=公司简介','0','63020');");
E_D("replace into `ymskj_enewsdolog` values('42','127.0.0.1','2017-08-27 11:47:59','admin','DoReUserpage','---','0','63022');");
E_D("replace into `ymskj_enewsdolog` values('43','127.0.0.1','2017-08-27 11:59:22','admin','EditPagetemp','tempid=2&tempname=公司简介&gid=1','0','65124');");

@include("../../inc/footer.php");
?>