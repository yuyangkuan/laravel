<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"IndexController@index");
#前台
Route::prefix('/index')->group(function(){
    Route::get('about','IndexController@about');
    Route::get('news','IndexController@news');
    Route::get('shownews','IndexController@shownews');
    Route::any('index','IndexController@index');
});

//登录注册
Route::prefix('/login')->group(function(){
    Route::get('reg','LoginController@reg');#注册
    Route::post('regdo','LoginController@regdo');#注册执行
    Route::get('login','LoginController@login');#登录
    Route::post('logindo','LoginController@logindo');#执行登录
    Route::post('forgotpwd','LoginController@forgotpwd');//执行忘记密码
    Route::get('forgot','LoginController@forgot');//忘记密码
    Route::post('send','LoginController@send');//获取验证码
});

//登录加上中间件
Route::group(['prefix'=>'admin','middleware'=>'login'],function(){
    Route::get('index','AdminController@index');
});

Route::get('code','LoginController@logincode');//登录验证码

//导航栏
Route::prefix('/navbar')->group(function(){
    Route::get('add','NavbarController@add');//添加视图
    Route::any('doAdd','NavbarController@doAdd');//执行添加
    Route::any('list','NavbarController@list');//执行添加
    Route::any('del','NavbarController@del');//删除
    Route::any('update/{id}','NavbarController@update');//修改
    Route::any('doupdate','NavbarController@doupdate');//执行修改
});


#轮播图
Route::prefix('/img')->group(function(){
    Route::get('add','ImgController@add');
    Route::post('adddo','ImgController@adddo');
    Route::get('lists','ImgController@lists');
    Route::any('del','ImgController@del');
    Route::get('shownews','ImgController@shownews');
});


#栏目管理
Route::prefix('/column')->group(function(){
    Route::get('add','columnController@add');
    Route::post('adddo','columnController@adddo');
    Route::get('lists','columnController@lists');
    Route::any('del','columnController@del');
    Route::get('upd','columnController@upd');
    Route::post('upddo','columnController@upddo');
});

#专栏管理
Route::prefix('/fenlan')->group(function(){
    Route::get('add','FenlanController@add');//添加视图
    Route::any('doadd','FenlanController@doadd');//执行添加
    Route::any('lists','FenlanController@lists');//展示
    Route::any('del','FenlanController@del');//删除
    Route::any('update','FenlanController@update');//修改
    Route::any('doupdate','FenlanController@doupdate');//执行修改
});





