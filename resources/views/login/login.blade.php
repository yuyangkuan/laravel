<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/css/detailsmusic.css" />

</head>

<body>
<div class="music-lgin">

    <div class="music-lgin-all">
        <!--左手-->
        <div class="music-lgin-left ovhd">
            <div class="music-hand">
                <div class="music-lgin-hara"></div>
                <div class="music-lgin-hars"></div>
            </div>
        </div>

        <!--脑袋-->
        <div class="music-lgin-dh">
            <div class="music-lgin-alls">
                <div class="music-lgin-eyeleft">
                    <div class="music-left-eyeball yeball-l"></div>
                </div>
                <div class="music-lgin-eyeright">
                    <div class="music-right-eyeball yeball-r"></div>
                </div>
                <div class="music-lgin-cl"></div>
            </div>
            <!--鼻子-->
            <div class="music-nose"></div>
            <!--嘴-->
            <div class="music-mouth music-mouth-ds"></div>
            <!--肩-->
            <div class="music-shoulder-l">
                <div class="music-shoulder"></div>
            </div>
            <div class="music-shoulder-r">
                <div class="music-shoulder"></div>
            </div>
            <!--消息框-->
            <div class="music-news">感谢老铁来到于某人直播间，给老铁点点关注！</div>
        </div>

        <!--右手-->
        <div class="music-lgin-right ovhd">
            <div class="music-hand">
                <div class="music-lgin-hara"></div>
                <div class="music-lgin-hars"></div>
            </div>
        </div>

    </div>

    <!--1-->
    <div class="music-lgin-text">
        <input class="inputname inputs" type="text" name="uname" id="uname" placeholder="用户名"/>
    </div>
    <!--2-->
    <div class="music-lgin-text">
        <input type="password" class="mima inputs" name="pwd" id="pwd" placeholder="密码" />
    </div>
    <div class="music-lgin-text">
        <input class="music-qd inputs" type="button" value="登录"  id="btn" />
    </div>

    <div class="music-lgin-text">
        <a href="/login/forgot"><input class="music-qd inputs" type="button" value="忘记密码"   /></a>
    </div>
</div>

<script src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    //眼睛 密码部分
    $('#code').click(function () {
        $(this).prop('src',"http://www.qiye.com/code?id="+Math.random())
    });
    $(".mima").focus(function() {
        $(".music-lgin-left").addClass("left-dh").removeClass("rmleft-dh");
        $(".music-lgin-right").addClass("right-dh").removeClass("right-rmdh");
        $(".music-hand").addClass("no");
    }).blur(function() {
        $(".music-lgin-left").removeClass("left-dh").addClass("rmleft-dh");
        $(".music-lgin-right").removeClass("right-dh").addClass("right-rmdh");
        $(".music-hand").removeClass("no");

    })
    //点击小人出来
    $(".inputname").focus(function() {
        $(".music-lgin-all").addClass("block");
        $(".music-news").addClass("no")
    })
    //点击小人消失

    //          $(".music-qd").focus(function(){
    //          	$(".music-lgin-all").removeClass("block")
    //          })


    //注册正则 简单判断

    // $('.music-qd').click(function(){
    //     if(($('.inputname').val()=='')){
    //         $(".music-news").html("请输入名称")
    //     }else if(($('.mima').val()=='')){
    //         $(".music-news").html("请输入密码")
    //         $(".music-news").addClass("block")
    //     }else{
    //         alert('提交ajax')
    //     }
    // });

    $('#btn').click(function(){
        var uname=$('#uname').val();
        var pwd=$('#pwd').val();
        var code=$('#code').val();
        // console.log(uname);
        $.post({
            url:"/login/logindo",
            data:{uname:uname,pwd:pwd,code:code},
            dataType:'json',
            success:function(res){
                // console.log(res);
                if(res.code==1){
                    alert(res.msg);
                    location.href="/admin/index";
                }
            }
        })
    })



</script>

</body>

</html>