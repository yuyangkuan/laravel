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
      <th>名称</th>
      <th>图片</th>
      <th>权重</th>
      <th>是否显示</th>
      <th>操作</th>
    </tr>
    </thead>
    @foreach ($data as $v)
      <tbody>
      <tr>
        <td>{{$v->c1_id}}</td>
        <td>{{$v->c1_name}}</td>
        <td><img src="/uploads/{{$v->c1_img}}" width="100" height="150"></td>
        <td>{{$v->c1_weight}}</td>
        <td>@if($v->status ==1)
            显示
          @elseif($v->status==2)
            不显示
          @endif
        </td>
        <td>
          <a href="javascript:;" class="del" c1_id='{{$v->c1_id}}'>删除</a>
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
                  var c1_id=_this.attr('c1_id');
                  //console.log(n_id);
                  $.post(
                      "/img/del",
                      {c1_id:c1_id},
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