<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_enewsfile_1`;");
E_C("CREATE TABLE `ymskj_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_enewsfile_1` values('2','1000010000000003','884ce20a62be0e39e180765b7985a444.jpg','28976','2017-08-30','admin','1504084831','12','0-wx_fmt=jpeg.jpg','1','0','3','0','0','0');");
E_D("replace into `ymskj_enewsfile_1` values('3','1000010000000004','c6d8964fd7a686b5e5982d2e0ce77da3.jpg','27842','2017-08-30','admin','1504084853','12','0-wx_fmt=jpeg-1.jpg','1','0','4','0','0','0');");
E_D("replace into `ymskj_enewsfile_1` values('4','1000010000000005','801c24cee64dba80753cd461d0db1257.jpg','29721','2017-08-30','admin','1504084880','12','0-wx_fmt=jpeg-2.jpg','1','0','5','0','0','0');");
E_D("replace into `ymskj_enewsfile_1` values('5','1000010000000006','847b7f3c430f5387b15d17267edd178d.jpg','51025','2017-08-30','admin','1504084897','12','0-wx_fmt=jpeg-3.jpg','1','0','6','0','0','0');");
E_D("replace into `ymskj_enewsfile_1` values('6','1000010000000007','fc13819036f81d55fb2c39525e23a599.jpg','36283','2017-08-30','admin','1504084915','12','0-wx_fmt=jpeg-4.jpg','1','0','7','0','0','0');");

@include("../../inc/footer.php");
?>