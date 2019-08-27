@extends('layouts.app')

@section('body')

    <link rel="stylesheet" href="/admin/css/pintuer.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/pintuer.js"></script>
    <body>
    <div class="panel admin-panel">
        <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改密码</strong></div>
        <div class="body-content">
            <div  class="form-x">

                <div class="form-group">
                    <div class="label">
                        <label>手机号：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input w50"  name="tel" id="tel" />
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                    </div>
                    <div class="field">
                        <input type="button" class="btn"  name="code" id="send"  value="发送验证码"/>
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label>验证码：</label>
                    </div>
                    <div class="field">
                        <input type="text" class="input w50"  name="code" id="code"  />
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label>重置密码：</label>
                    </div>
                    <div class="field">
                        <input type="password" class="input w50"  name="pwd" id="pwd" />
                        <span><p id="p1"> </p></span>
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label>确认密码：</label>
                    </div>
                    <div class="field">
                        <input type="password" class="input w50"  name="repwd" id="repwd" />
                        <span><p id="p2"> </p></span>
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label>是否修改：</label>
                    </div>
                    <div class="field">
                        <input id="btn" type="button" value="修改"  name="repwd" />
                        <span><p id="p2"> </p></span>
                        <div class="tips"></div>
                    </div>
                </div>
    </body>
</html>
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(function(){
        $('#send').click(function(){
            var tel=$('#tel').val();
            var send=$('#send').val();
            // console.log(tel);return;
            reg=/^1[3456789]\d{9}$/;
            if(tel==''){
                alert("手机号不能为空");
                return false;
            }else if(!(reg.test(tel))){
                alert("手机号格式有误");
                return false;
            }

            $.post({
                url:"/login/send",
                data:{tel:tel},
                dataType:'json',
                success:function(res){
//                    console.log(res);
                    if(res == 00000){
                        alert('发送成功');
                    }
                }
            });
        });

        $('#btn').click(function(){
            var tel=$('#tel').val();
            var pwd=$('#pwd').val();
            var repwd=$('#repwd').val();
            var code=$('#code').val();
            reg=/^1[3456789]\d{9}$/;
            // console.log(tel);return;

            if(tel==''){
                alert("手机号不能为空");
                return false;
            }else if(!(reg.test(tel))){
                alert("手机号格式有误");
                return false;
            }

            if(code==''){
                alert('验证码不能为空');
                return false;
            }

            if(pwd==''){
                alert('重置密码不能为空');
                return false;
            }

            if(repwd==''){
                alert('确认密码不能为空');
                return false;
            }else if(pwd !=repwd){
                alert('重置密码与确认密码不一致');
                return false;
            }
//            $.post(
//                    "/login/forgotpwd",
//                    {tel:tel,code:code,pwd:pwd,repwd:repwd},
//                    function(res){
//                        console.log(res);
//                    },
//                    "json"
//
//            );
            $.post({
                url:"/login/forgotpwd",
                data:{tel:tel,code:code,pwd:pwd,repwd:repwd},
                dataType:'json',
                success:function(res){
                    if(res.code==1){
                        alert(res.msg);
                        location.href="/login/login";
                    }

                }
            })

        })
    })
</script>
@endsection
