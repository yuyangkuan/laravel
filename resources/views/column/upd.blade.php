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
        <input type="hidden" name="lan_id" id="lan_id" value="{{$res->lan_id}}" >
        <div class="panel admin-panel">
            <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
            <div class="body-content">
                <div  class="form-x">
                    <div class="form-group">
                        <div class="label">
                            <label>栏目标题：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input w50" required="" name="lan_title" id="lan_title" value="{{$res->lan_title}}"/>
                            <div class="tips"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label>内容：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input w50"  name="lan_content" required="" id="lan_content" value="{{$res->lan_content}}"/>
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
                            <label></label>
                        </div>
                        <div class="field">
                            <button class="button bg-main icon-check-square-o" id="btn"> 修改栏目</button>
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
            var lan_id=$('#lan_id').val();
            var lan_title=$('#lan_title').val();
            var lan_content=$('#lan_content').val();
            var n_id=$('#n_id').val();
            $.post(
                    '/column/upddo',
                    {lan_id:lan_id,lan_title:lan_title,lan_content:lan_content,n_id:n_id},
                    function (res) {
                        console.log(res);
                        alert(res.content);
                        if (res.code==1){
                            location.href='/column/lists';
                        }
                    },
                    'json'
            )
        })
    </script>
@endsection