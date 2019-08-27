@extends('layouts.app')

@section('body')

    @if (session('status'))
        <div class="alert alert-success">
            <script !src="">alert("{{ session('status') }}")</script>
        </div>
    @endif
    <link rel="stylesheet" href="/admin/css/pintuer.css">
    <link rel="stylesheet" href="/admin/css/admin.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/pintuer.js"></script>
    <body>
    <form method="post" action="javascript:0" onsubmit="false">
        <div class="panel admin-panel">
            <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
            <div class="body-content">
                <div  class="form-x">
                    <div class="form-group">
                        <div class="label">
                            <label>栏目标题：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input w50"  name="lan_title" id="lan_title" />
                            <div class="tips"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label>内容：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input w50"  name="lan_content" id="lan_content" />
                            <div class="tips"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label>选项：</label>
                        </div>
                        <div class="field">
                            <select class="form-control" name="n_id" id="n_id">
                                <option value="0">请选择</option>
                                @foreach($data as $val)
                                    <option value="{{$val->n_id}}">{{$val->n_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label for="exampleInputPassword1">是否展示</label>
                        </div>
                        <div class="field">
                            <input type="radio" name="lan_status" id="lan_status" value="1" checked> 是
                            <input type="radio" name="lan_status" id="lan_status" value="2"> 否
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label></label>
                        </div>
                        <div class="field">
                            <button class="button bg-main icon-check-square-o" id="btn"> 添加栏目</button>
                            <button class="button bg-main icon-check-square-o" type="reset"> 重置</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </body>
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script>
        $('#btn').click(function(){
            var lan_title=$('#lan_title').val();
            var lan_content=$('#lan_content').val();
            var lan_status=$('#lan_status').val();
            var n_id=$('#n_id').val();
            $.post(
                    '/column/adddo',
                    {lan_title:lan_title,lan_content:lan_content,lan_status:lan_status,n_id:n_id},
                    function (res) {
//                    console.log(res);
                        if( res.code == 1){
                            alert(res.content);
                            location.href="/column/lists";
                        }
                    },
                    'json'
            )
        })
    </script>
@endsection