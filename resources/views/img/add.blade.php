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
  <form action="/img/adddo" method="post" enctype="multipart/form-data">
    <div class="panel admin-panel">
      <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
      <div class="body-content">
        <div  class="form-x">
          <div class="form-group">
            <div class="label">
              <label>图片名称：</label>
            </div>
            <div class="field">
              <input type="text" class="input w50"  name="c1_name" id="c1_img" />
              <div class="tips"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="label">
              <label>轮播图图片：</label>
            </div>
            <div class="field">
              <input type="file" class="input w50"  name="c1_img"/>
              <div class="tips"></div>
            </div>
          </div>

          <div class="form-group">
            <div class="label">
              <label>图片权重：</label>
            </div>
            <div class="field">
              <select class="form-control" name="c1_weight" id="weight">
                <option value="0">请选择权重等级</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>


          <div class="form-group">
            <div class="label">
              <label for="exampleInputPassword1">是否展示</label>
            </div>
            <div class="field">
              <input type="radio" name="status" id="status" value="1" checked> 是
              <input type="radio" name="status" id="status" value="2"> 否
            </div>
          </div>

          <div class="form-group">
            <div class="label">
              <label></label>
            </div>
            <div class="field">
              <button class="button bg-main icon-check-square-o" type="submit" id="btn"> 添加图片</button>
              <button class="button bg-main icon-check-square-o" type="reset"> 重置</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
@endsection