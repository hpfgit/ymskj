<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_enewsadclass`;");
E_C("CREATE TABLE `ymskj_enewsadclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_enewsadclass` values('1','默认广告分类');");

@include("../../inc/footer.php");
?>