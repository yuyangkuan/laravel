<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ImgController extends Controller
{
    #图片添加
    public function add()
    {
        return view('/img/add');
    }

    public function adddo(Request $request)
    {
        $data = request()->post();

        //接收文件
        $fileCharater = $request->file('c1_img');
        if ($fileCharater->isValid()) { //括号里面的是必须加的哦
            //如果括号里面的不加上的话，下面的方法也无法调用的
            //获取文件的扩展名
            $ext = $fileCharater->getClientOriginalExtension();

            //获取文件的绝对路径
            $path = $fileCharater->getRealPath();

            //定义文件名
            $filename = date("ymd").rand(100000,999999).'.'.$ext;

            //存路径
            $dirpath = public_path("/uploads/".date('Ymd'));

            //移动该目录下
            $res = $fileCharater->move($dirpath,$filename);
            $data['c1_img'] = date('Ymd').'/'.$filename;

            $res=DB::table('img')->insert($data);
            if ($res){
                return redirect('/img/lists')->with('status','上传成功');
            }else{
                return redirect('/img/add')->with('status','上传失败');
            }

        }
    }

    #列表
    public function lists()
    {
        $data=DB::table('img')->where('status',1)->get();
//        dd($data);
        return view('/img/lists',compact('data'));
    }

    /**
     * 删除
     */
    public function del()
    {
        $c1_id=request()->c1_id;

        $data = [
           'status' => 2
        ];

        $res=DB::table('img')->where('c1_id',$c1_id)->update($data);
//         dd($res);
        if($res){
            return json_encode(['msg'=>'删除成功','code'=>1]);
        }else{
            return json_encode(['msg'=>'删除失败','code'=>0]);
        }
    }


}