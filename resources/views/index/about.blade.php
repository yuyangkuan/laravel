<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>网站关键词-网站名称</title>
	<meta name="description" content="网站描述，一般显示在搜索引擎搜索结果中的描述文字，用于介绍网站，吸引浏览者点击。" />
	<meta name="keywords" content="网站关键词" />
	<meta name="generator" content="MetInfo 5.1.7" />
	<link href="favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" type="text/css" href="/images/metinfo.css" />
	<script src="/images/jQuery1.7.2.js" type="text/javascript"></script>
	<script src="/images/ch.js" type="text/javascript"></script>

</head>
<body>
    <header>
		<div class="inner">
			<div class="top-logo">
				<a href="http://demo.metinfo.cn/" title="网站名称" id="web_logo">
					<img src="/images/logo.png" alt="网站名称" title="网站名称" style="margin:20px 0px 0px 0px;" />
				</a>
				<ul class="top-nav list-none">
					<li class="t"><a href='#' onclick='SetHome(this,window.location,"非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='设为首页'  >设为首页</a><span>|</span><a href='#' onclick='addFavorite("非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='收藏本站'  >收藏本站</a><span>|</span><a class="fontswitch" id="StranLink" href="javascript:StranBody()">繁体中文</a><span>|</span><a href='#' title='WAP'>WAP</a><span>|</span><a href='#' title='English'  >English</a><span>|</span><a href='#' title='我的订单' class='shopweba'>我的订单</a></li>
					<li class="b"><a href="admin/"><strong><span style="color:#ffff00;"><span style="font-size: 16px;">后台演示请点击这里进入</span></span></strong></a></li>
				</ul>
			</div>

		</div>
	</header>

	<div class="inner met_flash"><div class="flash">
<a href='#' target='_blank' title='企业网站管理系统'><img src='/images/1342430358.jpg' width='980' alt='企业网站管理系统' height='90'></a>
</div></div>

	<div class="sidebar inner">
		@foreach($info as $v)
		<div class="sb_nav">
				<h3 class='title myCorner' data-corner='top 5px'>{{$v->lan_title}}</h3>
		<div class="active" id="sidebar" data-csnow="2" data-class3="0" data-jsok="2">
			<dl class="list-none navnow"><dt id='part2_4'><a href='#'  title='公司动态' class="zm"><span>{{$v->s_name}}</span></a></dt></dl>
		</div>
			@endforeach
		<div class="clear">
		</div>

	<h3 class='title line myCorner' data-corner='top 5px'>联系方式</h3>
	<div class="active editor"><div>
	<strong>如有不清楚的地方</strong>请联系我们</div>
	<div>
		北京窝是你蝶娱乐有限公司
	</div>
	<div>
		电 &nbsp;话：88888888
	</div>
	<div>
		微 &nbsp;信：234546536758
	</div>
	<div>
		邮 &nbsp;编：999999
	</div>
	<div>
		Email：admin@admin.cn
	</div>
	<div>
		网 &nbsp;址：www.jishengkai.top
	</div>
	<div class="clear">
	</div>
	</div>
    </div>

    <div class="sb_box">
	    <h3 class="title">
			<div class="position">当前位置：<a href="/index/index" title="网站首页">网站首页</a> &gt;
				<a href="/index/about" >关于我们</a> >
				<a href="/index/index" >公司简介</a>
			</div>
			<span>公司简介</span>
		</h3>
		<div class="clear"></div>

        <div class="editor active" id="showtext">
		    <div><div>
		<img  src="/uploads/20190823/190823993564.jpg" style="margin: 8px; width: 150px; float: left; height: 150px" / alt="图片关键词">&nbsp; &nbsp; &nbsp;</div>
			@foreach($subfield as $v)
			<div>
				&nbsp;</div>
			<div>
				&nbsp; &nbsp; &nbsp;{{$v->desc}}
			</div>
			@endforeach
		</div>
			<div class="clear">
			</div>
		</div>
    	</div>
    	<div class="clear"></div>
	</div>

<footer data-module="1" data-classnow="19">
	<div class="inner">
		<div class="foot-text">
			<p>我的网站 <script src="http://s6.cnzz.com/stat.php?id=1670348&web_id=1670348" language="JavaScript"></script></p>
<p>电话：0731-12345678 12345678  QQ:88888888 999999  Email:metinfo@metinfo.cn</p>


		</div>
	</div>
</footer>
<script src="/images/fun.inc.js" type="text/javascript"></script>

</body>
</html>