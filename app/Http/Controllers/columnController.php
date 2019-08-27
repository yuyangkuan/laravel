<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class columnController extends Controller
{

    #栏目添加
    public function add()
    {
        $data = DB::table('navbar')->select('n_id','n_name')->get();
        return view('/column/add',compact('data'));
    }
    public function adddo()
    {
        $data=\request()->post();
        if ($data['lan_title']==null || $data['lan_content']==null || $data['n_id']==null){
            return json_encode(['content'=>'必填项不得为空','icon'=>5,'code'=>2]);
        }
        $res = DB::table('lan')->insert($data);
//        dd($res);
        if($res){
            return json_encode(['content'=>'添加成功','icon'=>6,'code'=>1]);
        }else{
            return json_encode(['content'=>'添加失败','icon'=>5,'code'=>2]);
        }
    }

    //栏目列表
    public function lists()
    {
        $data = DB::table('lan')->where(['lan_status'=>1])->get();
        //dd($data);
        return view('/column/lists',compact('data'));
    }

    #删除  软删
    public function del()
    {
        $lan_id=request()->lan_id;
//dd($lan_id);
        $data = [
            'lan_status' => 2
        ];

        $res=DB::table('lan')->where('lan_id',$lan_id)->update($data);
//         dd($res);
        if($res){
            return json_encode(['msg'=>'删除成功','code'=>1]);
        }else{
            return json_encode(['msg'=>'删除失败','code'=>0]);
        }
    }
    #修改
    public function upd()
    {
        $lan_id=request()->lan_id;
//        dd($lan_id);
        $res=DB::table('lan')->where('lan_id',$lan_id)->first();
//        dd($res);
        $data = DB::table('navbar')->select('n_id','n_name')->get();
        return view('/column/upd',compact('res','data'));
    }
    public function upddo()
    {
        $id=request()->lan_id;
        //dd($id);
        $data = request()->post();
//dd($data);
        $res = DB::table('lan')->where('lan_id',$id)->update($data);
//        dd($res);
        if($res){
            echo json_encode(['content'=>'修改成功','icon'=>6,'code'=>1]);
        }else{
            echo json_encode(['content'=>'修改失败','icon'=>5,'code'=>2]);
        }
    }
}