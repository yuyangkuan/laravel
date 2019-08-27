<!DOCTYPE html>
<html lang="zh-cn">
@section('head')
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="renderer" content="webkit">
  <title>后台管理中心</title>
  <link rel="stylesheet" href="/admin/css/pintuer.css">
  <link rel="stylesheet" href="/admin/css/admin.css">
  <script src="/admin/js/jquery.js"></script>
</head>
@show

@section('left')
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/images/touxiang.jpg" class="radius-circle rotate-hover" height="50" alt="" />来呀快活啊❤</h1>
  </div>
  <div class="head-l">
    <a class="button button-little bg-green" href="/" target="_blank">
      <span class="icon-home"></span> 前台首页
    </a> &nbsp;&nbsp;

    <a class="button button-little bg-red" href="/login/login">
      <span class="icon-power-off"></span> 退出登录
    </a>
    <a class="button button-little bg-red" href="/login/reg">
      <span class="icon-power-off"></span> 注册
    </a>
  </div>
</div>
<div class="leftnav">
  <div class="leftnav-title">
    <strong>
      <span class="icon-list"></span>菜单列表
    </strong>
  </div>

  <h2><span class="icon-pencil-square-o"></span>用户管理</h2>
  <ul>
    <li>
      <a href="/login/login" target="right">
        <span class="icon-caret-right"></span>管理员登录
      </a>
    </li>

    <li>
      <a href="/login/forgot" target="right">
        <span class="icon-caret-right"></span>管理员修改
      </a>
    </li>
  </ul>

  <h2><span class="icon-pencil-square-o"></span>头部导航栏管理</h2>
  <ul>
    <li>
      <a href="/navbar/add" target="right">
        <span class="icon-caret-right"></span>导航栏添加
      </a>
    </li>

    <li>
      <a href="/navbar/list" target="right">
        <span class="icon-caret-right"></span>导航栏列表
      </a>
    </li>
  </ul>

  <h2><span class="icon-pencil-square-o"></span>轮播图管理</h2>
  <ul>
    <li>
      <a href="/img/add" target="right">
        <span class="icon-caret-right"></span>轮播图添加
      </a>
    </li>

    <li>
      <a href="/img/lists" target="right">
        <span class="icon-caret-right"></span>轮播图列表
      </a>
    </li>
  </ul>

  <h2><span class="icon-pencil-square-o"></span>轮播图管理二</h2>
  <ul>
    <li>
      <a href="/img/add" target="right">
        <span class="icon-caret-right"></span>轮播图添加
      </a>
    </li>

    <li>
      <a href="/img/lists" target="right">
        <span class="icon-caret-right"></span>轮播图列表
      </a>
    </li>
  </ul>

  <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
  <ul>
    <li>
      <a href="/column/add" target="right">
        <span class="icon-caret-right"></span>栏目添加
      </a>
    </li>

    <li>
      <a href="/column/lists" target="right">
        <span class="icon-caret-right"></span>栏目列表
      </a>
    </li>
  </ul>

  <h2><span class="icon-pencil-square-o"></span>专栏管理</h2>
  <ul>
    <li>
      <a href="/fenlan/add" target="right">
        <span class="icon-caret-right"></span>专栏添加
      </a>
    </li>

    <li>
      <a href="/fenlan/lists" target="right">
        <span class="icon-caret-right"></span>专栏列表
      </a>
    </li>
  </ul>

  <h2><span class="icon-pencil-square-o"></span>底部导航栏管理</h2>
  <ul>
    <li>
      <a href="/navbar/add" target="right">
        <span class="icon-caret-right"></span>底部导航栏添加
      </a>
    </li>

    <li>
      <a href="/navbar/list" target="right">
        <span class="icon-caret-right"></span>底部导航栏列表
      </a>
    </li>
  </ul>



</div>
@show

<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
  <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><b>当前语言：</b><span style="color:red;">中文</php></span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
</ul>
<div class="admin">
  @section('body')

  @show
</div>
</body>
</html>