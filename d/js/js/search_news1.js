function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table border=0 cellpadding=3 cellspacing=1><form name=search_js1 method=post action='/e/search/index.php' onsubmit='return search_check(document.search_js1);'><tr><td><div align=center>搜索: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select><select name=classid><option value=0>所有栏目</option><option value='1' style='background:#99C4E3'>|-团队风采</option><option value='2' style='background:#99C4E3'>|-资质荣誉</option><option value='3' style='background:#99C4E3'>|-视频展厅</option><option value='4'>|-新闻中心</option><option value='9' style='background:#99C4E3'>&nbsp;&nbsp;|-公司新闻</option><option value='10' style='background:#99C4E3'>&nbsp;&nbsp;|-行业新闻</option><option value='11' style='background:#99C4E3'>&nbsp;&nbsp;|-最新公告</option><option value='5'>|-产品中心</option><option value='12' style='background:#99C4E3'>&nbsp;&nbsp;|-保健食品</option><option value='13' style='background:#99C4E3'>&nbsp;&nbsp;|-保健用品</option><option value='14' style='background:#99C4E3'>&nbsp;&nbsp;|-日常用品</option><option value='15' style='background:#99C4E3'>&nbsp;&nbsp;|-医疗机械</option><option value='16' style='background:#99C4E3'>&nbsp;&nbsp;|-净化设备</option><option value='17' style='background:#99C4E3'>&nbsp;&nbsp;|-小赠品</option><option value='18' style='background:#99C4E3'>&nbsp;&nbsp;|-食品</option><option value='6'>|-健康资讯</option><option value='19' style='background:#99C4E3'>&nbsp;&nbsp;|-健康指南</option><option value='7' style='background:#99C4E3'>|-品牌连锁</option><option value='8' style='background:#99C4E3'>|-会员中心</option></select><input name=keyboard type=text size=13><input type=submit name=Submit value=搜索></div></td></tr></form></table>");