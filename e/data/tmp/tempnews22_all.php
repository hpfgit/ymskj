<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/skin/default/css/base.css" rel="stylesheet" type="text/css" />
<link href="/skin/default/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body>
    <header>
        <section class="header-top">
            <div class="top center clearfix">
                <p class="left">欢迎您访问伊美时官网！</p>
                <p class="right"><a href="/" title="伊美时国际医药科技（北京）有限公司">设为首页</a>&nbsp;/&nbsp;<a href="/" title="伊美时国际医药科技（北京）有限公司">点击收藏</a></p>
            </div>
        </section>
    </header>
    <nav class="navbar center clearfix">
        <img src="/skin/default/images/logo.png" alt="伊美时国际医药科技（北京）有限公司" class="left">
        <ul class="nav left">
            <li>
                <a href="/" title="伊美时国际医药科技（北京）有限公司">
                    <p>网站首页</p>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="/about.html" title="伊美时国际医药科技（北京）有限公司">
                    <p>关于我们</p>
                    <p>About us</p>
                </a>
            </li>
            <li>
                <a href="/xinwenzhongxin/" title="伊美时国际医药科技（北京）有限公司">
                    <p>新闻中心</p>
                    <p>News</p>
                </a>
            </li>
            <li>
                <a href="/chanpinzhongxin/" title="伊美时国际医药科技（北京）有限公司">
                    <p>产品中心</p>
                    <p>Products</p>
                </a>
            </li>
            <li>
                <a href="/jiankangzixun/" title="伊美时国际医药科技（北京）有限公司">
                    <p>健康资讯</p>
                    <p>Healthy</p>
                </a>
            </li>
            <li>
                <a href="/pinpailiansuo/" title="伊美时国际医药科技（北京）有限公司">
                    <p>品牌连锁</p>
                    <p>Brand chain</p>
                </a>
            </li>
            <li>
                <a href="/huiyuanzhongxin/" title="伊美时国际医药科技（北京）有限公司">
                    <p>会员中心</p>
                    <p>VIP</p>
                </a>
            </li>
            <li>
                <a href="/contact.html" title="伊美时国际医药科技（北京）有限公司">
                    <p>联系我们</p>
                    <p>Contact us</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="banner">
        <ul class="banner-ul">
            <li style="display: block;"><img src="/skin/default/images/01.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
            <li><img src="/skin/default/images/02.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
            <li><img src="/skin/default/images/03.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
            <li><img src="/skin/default/images/04.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
            <li><img src="/skin/default/images/05.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
        </ul>
        <div class="banner-p">
            <p>伊美时-羊胎盘</p>
            <p>取材自然 绿色养生</p>
            <p>健康中国慢病防控高峰论坛</p>
            <p>让优质健康的生活陪伴您</p>
            <p>科学提炼 荟萃精华</p>
        </div>
        <div class="banner-title">
            <p class="left">伊美时-羊胎盘</p>
            <div class="arrow1 left"></div>
            <div class="thumb left">
                <ul>
                    <li><img src="/skin/default/images/01.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
                    <li><img src="/skin/default/images/02.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
                    <li><img src="/skin/default/images/03.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
                    <li><img src="/skin/default/images/04.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
                    <li><img src="/skin/default/images/05.jpg" alt="伊美时国际医药科技（北京）有限公司"></li>
                </ul>
            </div>
            <div class="arrow2 left"></div>
        </div>
    </div>
    <section class="center clearfix">
        <div class="sec-item left" style="width: 19%;">
            <div class="sec-item-title">
                <img src="/skin/default/images/yms_08.jpg" alt="伊美时国际医药科技（北京）有限公司" class="left" style="margin-right: 10px;margin-top: 13px;">
                <p class="left" style="margin-right: 10px;">产品中心 Products</p>
            </div>
            <div class="about-list">
                <ul>
                    <? @sys_ShowClassByTemp(5,1,0,0);?>
                </ul>
            </div>
            <img src="/skin/default/images/left.jpg" alt="伊美时国际医药科技（北京）有限公司" style="margin-top: 10px;">
        </div>
        <div class="about-right left">
            <div class="about-right-title">
                <p><?=$grurl?></p>
            </div>
            <div class="products-list">
                <h1><?=$ecms_gr[title]?></h1>
                <div class="news-content">
                    <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
                </div>
                <div class="infopre"><span class="pre">上一篇：</span><?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></div>
                <div class="infonext"><span class="nex">下一篇：</span><?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></div>
            </div>
            <div class="totop right"></div>
        </div>
    </section>
    <ul class="index">
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <ul class="indexx">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="footer">
        <div class="link center clearfix">
           <div class="link-title">友情链接：</div>
            <ul>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li><a href="<?=$bqr[lurl]?>"><img src="<?=$bqr[lpic]?>" border="0"/></a></li>
                <?php
}
}
?>
            </ul>
        </div>
        <div class="foot">
            <p><a href="/about.html" title="伊美时国际医药科技（北京）有限公司">关于伊美时</a> | <a href="/pinpailiansuo/" title="伊美时国际医药科技（北京）有限公司">品牌连锁</a> | <a href="/chanpinzhongxin/" title="伊美时国际医药科技（北京）有限公司">产品中心</a> | <a href="/contact.html" title="伊美时国际医药科技（北京）有限公司">联系我们</a></p>
            <p>版权所有：伊美时国际医药科技（北京）有限公司  电话：400-029-3958  地址：北京市朝阳区北四环东路6号院21号</p>
            <p>技术支持：<a href="http://www.chinayuanbo.cn" title="渊博网络">渊博网络</a></p>
        </div>
    </div>
    <script src="/skin/default/js/jquery.min.js"></script>
    <script src="/skin/default/js/jquery.js"></script>
</body>
</html>