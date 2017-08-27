<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `ymskj_enewspage`;");
E_C("CREATE TABLE `ymskj_enewspage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `pagetext` mediumtext NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ymskj_enewspage` values('1','关于我们','<p>&nbsp;&nbsp; 伊美时国际医药科技（北京）有限公司隶属伊美时集团，伊美时集团是一家以健康产业为龙头，涉足生物技术研发，营养保健品及医疗器械生产、推广、等多个领域的综合型集团公司。其下属子公司有伊美时国际医药科技（北京）有限公司，杨凌伊美时公司，西安百姓堂药业、河北同济生物有限公司、伊美时生活连锁店、等多家子公司。</p>\r\n<p>&nbsp; &nbsp; 伊美时国际医药科技（北京）有限公司成立于2014年，公司座落在美丽文明的古城邯郸，是一家以健康管理为主导，集日用品、功能性纺织品、保健食品、水处理设备、空气净化设备，生产与销售推广为一体的企业。伊美时国际医药科技（北京）有限公司成立至今，其产品已覆盖全国十余个省份，设有伊美时连锁500余家，拥有高级管理人才2000余名。公司凭借优质的产品，专业的销售团队，保持着持续稳定的发展，其市场影响力快速上升。伊美时健康管理有限公司本着&ldquo;诚信，质量，共赢&rdquo;的企业理念，以诚信为标准，以品质为核心，以市场为导向，打造中国高端养生第一品牌。</p>\r\n<p>&nbsp; &nbsp; 伊美时国际医药科技（北京）有限公司以传播绿色养生文化为己任，致力于提高生命品质，公司以孝爱的文化管理团队，以孝爱的团队服务市场，以孝爱的事业造福社会。让你我享受真正的健康好生活。</p>\r\n<p>&nbsp; &nbsp; 电话：400-029-3958 &nbsp;</p>','../../about.html','0','关于我们-伊美时国际医药科技（北京）有限公司','伊美时国际医药科技（北京）有限公司，关于我们','伊美时国际医药科技（北京）有限公司','1');");
E_D("replace into `ymskj_enewspage` values('2','企业文化','','../../culture.html','0','企业文化-伊美时国际医药科技（北京）有限公司','伊美时国际医药科技（北京）有限公司，企业文化','伊美时国际医药科技（北京）有限公司','1');");
E_D("replace into `ymskj_enewspage` values('3','公司简介','<p>&nbsp;&nbsp; 伊美时国际医药科技（北京）有限公司隶属伊美时集团，伊美时集团是一家以健康产业为龙头，涉足生物技术研发，营养保健品及医疗器械生产、推广、等多个领域的综合型集团公司。其下属子公司有伊美时国际医药科技（北京）有限公司，杨凌伊美时公司，西安百姓堂药业、河北同济生物有限公司、伊美时生活连锁店、等多家子公司。</p>\r\n<p>&nbsp; &nbsp; 伊美时国际医药科技（北京）有限公司成立于2014年，公司座落在美丽文明的古城邯郸，是一家以健康管理为主导，集日用品、功能性纺织品、保健食品、水处理设备、空气净化设备，生产与销售推广为一体的企业。伊美时国际医药科技（北京）有限公司成立至今，其产品已覆盖全国十余个省份，设有伊美时连锁500余家，拥有高级管理人才2000余名。公司凭借优质的产品，专业的销售团队，保持着持续稳定的发展，其市场影响力快速上升。伊美时健康管理有限公司本着&ldquo;诚信，质量，共赢&rdquo;的企业理念，以诚信为标准，以品质为核心，以市场为导向，打造中国高端养生第一品牌。</p>\r\n<p>&nbsp; &nbsp; 伊美时国际医药科技（北京）有限公司以传播绿色养生文化为己任，致力于提高生命品质，公司以孝爱的文化管理团队，以孝爱的团队服务市场，以孝爱的事业造福社会。让你我享受真正的健康好生活。</p>\r\n<p>&nbsp; &nbsp; 电话：400-029-3958 &nbsp;</p>','../../brief.html','0','','','','2');");

@include("../../inc/footer.php");
?>