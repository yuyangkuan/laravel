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

<div class="inner met_flash">
	<div class="flash">
		<a href='#' target='_blank' title='企业网站管理系统'><img src='/images/1342430358.jpg' width='980' alt='企业网站管理系统' height='90'></a>
	</div>
</div>

<div class="sidebar inner">
	@foreach($info as $v)
		<div class="sb_nav">
			<h3 class='title myCorner' data-corner='top 5px'>{{$v->lan_title}}</h3>
			<div class="active" id="sidebar" data-csnow="2" data-class3="0" data-jsok="2">
				<dl class="list-none navnow">
					<dt id='part2_4'>
						<a href='/index/shownews'  title='公司动态' class="zm">
							{{$v->s_name}}
						</a>
					</dt>
				</dl>
			</div>
			@endforeach
			<div class="clear">
			</div>

			<h3 class='title line myCorner' data-corner='top 5px'>联系方式</h3>
			<div class="active editor">
				<div>
					<strong>如有不清楚的地方</strong>请联系我们
				</div>
				<div>
					北京窝是你蝶娱乐有限公司
				</div>
				<div>
					电 &nbsp;话：0000-888888
				</div>
				<div>
					微 &nbsp;信：1666666666
				</div>
				<div>
					邮 &nbsp;编：000000
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
			<div class="position">当前位置：<a href="index.html" title="网站首页">网站首页</a> &gt;
				<a href="news.blade.php">新闻资讯</a>
			</div>
			<span>新闻资讯</span>
		</h3>
		<div class="clear"></div>

		@foreach($subfield as $v)
        <div class="active" id="newslist">
			<ul class='list-none metlist'>
				<li class='list top'><span>{{date('Y-m-d',$v->create_time)}}</span>
					<a href='/index/shownews' title='如何选择网站关键词?' target='_self'>{{$v->s_name}}</a>
					<img class='listhot' src='/images/hot.gif' alt='图片关键词' />
				</li>
			</ul>
			@endforeach
			<div id="flip"><style>.digg4  { padding:3px; margin:3px; text-align:center; font-family:Tahoma, Arial, Helvetica, Sans-serif;  font-size: 12px;}.digg4  a,.digg4 span.miy{ border:1px solid #ddd; padding:2px 5px 2px 5px; margin:2px; color:#aaa; text-decoration:none;}.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  a:hover { border:1px solid #a0a0a0; }.digg4  span.current {border:1px solid #e0e0e0; padding:2px 5px 2px 5px; margin:2px; color:#aaa; background-color:#f0f0f0; text-decoration:none;}.digg4  span.disabled { border:1px solid #f3f3f3; padding:2px 5px 2px 5px; margin:2px; color:#ccc;}.digg4 .disabledfy { font-family: Tahoma, Verdana;} </style>
				<div class='digg4 metpager_8'><span class='disabled disabledfy'><b>«</b></span>
					<span class='disabled disabledfy'>‹</span>
					<span class='current'>1</span>
					<span class='disabled disabledfy'>›</span>
					<span class='disabled disabledfy'><b>»</b>
					</span>
				</div>
			</div>
		</div>
	</div>
    <div class="clear"></div>
</div>

<footer data-module="1" data-classnow="19" >
	<div class="inner" >
		<div class="foot-nav" style="margin: 5px;  align:center; ">
			<a href='../news/news.php?lang=cn&class2=4'  title='公司动态'>公司动态</a>
			<span>|</span><a href='../message/'  title='在线留言'>在线留言</a><span>|</span>
			<a href='../feedback/'  title='在线反馈'>在线反馈</a>
			<span>|</span><a href='../link/'  title='友情链接'>友情链接</a>
			<span>|</span><a href='../member/'  title='会员中心'>会员中心</a>
			<span>|</span><a href='../search/'  title='站内搜索'>站内搜索</a>
			<span>|</span><a href='../sitemap/'  title='网站地图'>网站地图</a>
			<span>|</span><a href='http://gc04430.d215.51kweb.com/admin/'  title='网站管理'>网站管理</a>
		</div>

	</div>
</footer>
<script src="/images/fun.inc.js" type="text/javascript"></script>

</body>
</html>