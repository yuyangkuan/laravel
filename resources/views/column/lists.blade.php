@extends('layouts.app')

@section('body')
    <link rel="stylesheet" href="{{asset('layui/layui.js')}}">
    <link rel="stylesheet" href="{{asset('layui/layui.css')}}">

    <table class="layui-table" align="center" >
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>内容</th>
            <th>所属分类</th>
            <th>操作</th>
        </tr>
        </thead>
        @foreach ($data as $v)
            <tbody>
            <tr>
                <td>{{$v->lan_id}}</td>
                <td>{{$v->lan_title}}</td>
                <td>{{$v->lan_content}}</td>
                <td>{{$v->n_id}}</td>
                <td>
                    <a href="javascript:;" class="del" lan_id='{{$v->lan_id}}'>删除</a>||
                    <a href="/column/upd?lan_id={{$v->lan_id}}">修改</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>

    <script>
        $(function(){
            $(".del").click(function(){
                var f=confirm("确定要删除吗？");
                if(f == true){
                    var _this=$(this);
                    var lan_id=_this.attr('lan_id');
                    //console.log(n_id);
                    $.post(
                            "/column/del",
                            {lan_id:lan_id},
                            function(res){
                                alert(res.msg);
                                if(res.code==1){
                                    location.reload();
                                }
                            },'json'
                    );

                }else{
                    return false;
                }
            })
        })
    </script>
@endsection