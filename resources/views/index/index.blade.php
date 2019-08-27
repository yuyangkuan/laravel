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
            <a href="index.html" title="网站名称" id="web_logo">
                <img src="/images/logo.png" alt="网站名称" title="网站名称" style="margin:20px 0px 0px 0px;" />
            </a>
            <ul class="top-nav list-none">
                <li class="t">
                    <a href='#' title='我的订单' class='shopweba'>我的订单</a></li><li class="b">
                    <a href="/admin/index"><strong><span style="color:#ffff00;"><span style="font-size: 14px;">点我丫</span></span></strong></a></li>
            </ul>
        </div>

        <nav>
            <ul class="list-none">
                @foreach($nav as $v)
                    <li id="nav_10001" style='width:121px;' >
                        <a href='javascript:' x class='nav'>
                            <span>
                                <a href="/index/about?n_id={{$v->n_id}}">{{$v->n_name}}</a>
                            </span>
                        </a >
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<div class="inner met_flash">
    <link href='/images/css.css' rel='stylesheet' type='text/css' />
    <script src='/images/jquery.bxSlider.min.js'></script>
    <div class='flash flash6' style='width:980px; height:450px;'>
        <ul id='slider6' class='list-none'>
            @foreach($c1 as $v)
            <li>
                <a href='#' target='_blank' ><img src='/uploads/{{$v->c1_img}}' width='980' height='400'></a>
            </li>
            @endforeach
        </ul>
    </div>
    <script type='text/javascript'>$(document).ready(function(){ $('#slider6').bxSlider({ mode:'vertical',autoHover:true,auto:true,pager: true,pause: 5000,controls:false});});</script></div>


<div class="index inner">
    <div class="aboutus style-1" >

        <h3 class="title" >
            <span class='myCorner' data-corner='top 5px'>详情</span>
            <a href="" class="more" title="链接关键词" >更多>></a>
        </h3>

        <div class="active editor clear contour-1"  style="   height: 500px;  ">
            @foreach($subfielde as $v)
                <div class="index-news style-1" >
            <div>
                <img alt="" src="/images/u=438048099,474049831&fm=26&gp=0.jpg" style="margin: 3px; width: 150px; float: left; height: 135px; " />
            </div>

            <div style="padding-top:5px; " >
                <span style="font-size:18px;"><strong><a href="/index/news">{{$v->s_name}}</a></strong></span>
            </div>
            <p>{{$v->desc}}</p>

            <div>&nbsp;</div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="case style-2">
        <h3 class='title myCorner' data-corner='top 5px'><a href="" title="链接关键词" class="more">更多>></a>案例</h3>
        <div class="active dl-jqrun contour-1">
            @foreach($subfields as $v)
            <dl class="ind">
                <dt><a href="#" target='_self'><img src="/images/u=1195223921,386095372&fm=26&gp=0.jpg" alt="图片关键词" title="图片关键词" style="width:116px; height:120px;" /></a></dt>
                <dd>
                    <h4><a href="#" target='_self' title="示例案例六">{{$v->s_name}}</a></h4>
                    <p class="desc" title="相关描述文字，相关描述文字，相关描述文字，相关描述文字，相关描述文字。">{{$v->desc}}</p>
                </dd>
            </dl>
            <div class="clear">
            </div>
            @endforeach
        </div>
    </div>

    <div class="clear"></div>

{{--    @foreach($infos as $v)--}}
{{--        <div class="index-news style-1">--}}
{{--            <h3 class="title">--}}
{{--                <span class='myCorner' data-corner='top 5px'>{{$v->c_name}}</span>--}}
{{--                <a href="" class="more" title="链接关键词">更多>></a>--}}
{{--            </h3>--}}
{{--            <div class="active clear listel contour-2">--}}
{{--                <ol class='list-none metlist'>--}}
{{--                    <li class='list top'><span class='time'>{{date('Y-m-d',$v->create_time)}}</span>--}}
{{--                        <a href='#' >{{$v->desc}}</a>--}}
{{--                    </li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
    <div class="index-news style-1">
        <h3 class="title">
            <span class='myCorner' data-corner='top 5px'>公司新闻</span>
            <a href="" class="more" title="链接关键词">更多>></a>
        </h3>
        @foreach($subfield as $v)
        <div class="active clear listel contour-2">
            <ol class='list-none metlist'>
                <li class='list top'><span class='time'>{{date('Y-m-d',$v->create_time)}}</span>
                    <a href='/index/shownews' >{{$v->desc}}</a>
                </li>
            </ol>
        </div>
        @endforeach
    </div>

    <div class="index-news style-1">
        <h3 class="title"><span class='myCorner' data-corner='top 5px'>行业资讯</span><a href="" class="more" title="链接关键词">更多>></a></h3>
        @foreach($subfield as $v)
        <div class="active clear listel contour-2">
            <ol class='list-none metlist'>
                <li class='list top'><span class='time'>{{date('Y-m-d',$v->create_time)}}</span>
                    <a href='/index/shownews' >{{$v->desc}}</a>
                </li>
            </ol>
        </div>
        @endforeach
    </div>

    <div class="index-conts style-2">
        <h3 class='title myCorner' data-corner='top 5px'>
            <a href="" title="链接关键词" class="more">更多>></a>招聘
        </h3>
        @foreach($subfield as $v)
        <div class="active clear listel contour-2">
            <ol class='list-none metlist'>
                <li class='list top'><span class='time'>{{date('Y-m-d',$v->create_time)}}</span><a href='/index/shownews' >{{$v->desc}}</a></li>
            </ol>
        </div>
        @endforeach
    </div>
    <div class="clear p-line"></div>

    <div class="index-product style-2">
        <h3 class='title myCorner' data-corner='top 5px'>
            <span></span>
            <div class="flip"><p id="trigger"></p> <a class="prev" id="car_prev" href="javascript:void(0);"></a> <a class="next" id="car_next" href="javascript:void(0);"></a></div>
            <a href=""  class="more">更多>></a>
        </h3>
        @foreach($c1 as $v)
        <div class="active clear" style='height:1px;'>
            <div class="profld" id="indexcar" data-listnum="5">
                <ol class='list-none metlist'>
                    <li class='list'>
                        <a href='#'  class='img'><img src='/uploads/{{$v->c1_img}}'  width='160' height='130' /></a>
                        <h3 style='width:160px;'><a href='#' >{{$v->c1_name}}</a></h3>
                    </li>
                </ol>
            </div>
        </div>
        @endforeach
    </div>

    <div class="clear"></div>
    <div class="index-links">
        <h3 class="title">

            <a href="" title="链接关键词" class="more">更多>></a>
        </h3>
        <div class="active clear">
            <div class="img"><ul class='list-none'>
                </ul>
            </div>
            <div class="txt"><ul class='list-none'>
                    <li><a href='#' target='_blank' title='企业网站管理系统'>MetInfo</a></li>
                    <li><a href='#' target='_blank' title='企业网站管理系统'>米拓信息</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</div>

<footer data-module="10001" data-classnow="10001">
    <div class="inner">
        <div class="foot-nav">
            <a href='news/news.php?lang=cn&class2=4'  title='公司动态'>公司动态</a>
            <span>|</span>
            <a href='message/'  title='在线留言'>在线留言</a>
            <span>|</span><a href='feedback/'  title='在线反馈'>在线反馈</a>
            <span>|</span><a href='link/'  title='友情链接'>友情链接</a>
            <span>|</span><a href='member/'  title='会员中心'>会员中心</a>
            <span>|</span><a href='search/'  title='站内搜索'>站内搜索</a>
            <span>|</span><a href='sitemap/'  title='网站地图'>网站地图</a>
            <span>|</span>
            <a href='http://gc04430.d215.51kweb.com/admin/'  title='网站管理'>网站管理</a>
        </div>
        <div class="foot-text">
            <p>我的网站 版权所有 2008-2012 湘ICP备88888</p>
            <p>电话：0731-12345678 12345678  QQ:88888888 999999  Email:metinfo@metinfo.cn</p>
        </div>
    </div>
</footer>
<script src="/images/fun.inc.js" type="text/javascript"></script>
<div style="text-align:center;">
    <p>来源：More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
</div>
</body>
</html>