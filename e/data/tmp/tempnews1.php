<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
</head>
<body class="showpage news">
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
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：<?=$grurl?></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title_info">
<tr>
<td><h1><?=$ecms_gr[title]?></h1></td>
</tr>
<tr>
<td class="info_text">时间：<?=date('Y-m-d H:i:s',$ecms_gr[newstime])?>&nbsp;&nbsp;来源：<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?>&nbsp;&nbsp;作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="text"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
<p align="center" class="pageLink">[!--page.url--]</p></td>
</tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="8">
<tr>
<td><table border="0" align="center" cellpadding="0" cellspacing="0" class="digg">
<tr>
<td class="diggnum" id="diggnum"><strong><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5"></script></strong></td>
</tr>
<tr>
<td class="diggit"><a href="JavaScript:makeRequest('/e/public/digg/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');">来顶一下</a></td>
</tr>
</table></td>
<td><table border="0" align="center" cellpadding="0" cellspacing="0" class="digg">
<tr>
<td valign="middle" class="diggnum"><strong><a href="/"><img src="/skin/default/images/back.gif" alt="返回首页" width="12" height="13" border="0" align="absmiddle" /></a></strong></td>
</tr>
<tr>
<td class="diggit"><a href="/">返回首页</a></td>
</tr>
</table></td>
</tr>
</table>
          </td>
</tr>
</table>
<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">共有<span><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form>
</td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('news',2,4,128,90,1,20,20);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>相关文章</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<?=GetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?>
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>栏目更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>栏目热门</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
</tr>
</table></td>
</tr>
</table>
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
<?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>