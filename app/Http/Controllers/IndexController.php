<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class IndexController extends Controller
{
    public function index()
    {
        $person = Redis::get('person_index');
        $persons = unserialize($person);
        $nav = $persons['nav'];
        $c1 = $persons['c1'];
        $subfielde = $persons['subfielde'];
        $subfield = $persons['subfield'];
        $subfields = $persons['subfields'];
        if (empty($persons)){
            $nav=DB::table('navbar')->get()->toArray();
            $c1=DB::table('img')->orderby('c1_weight','desc')->get()->toArray();
//        dd($c1);
            $subfielde=DB::table('fenlan')->orderby('create_time','desc')->paginate(3);
            $subfield=DB::table('fenlan')->orderby('create_time','desc')->get()->toArray();
            $subfields=DB::table('fenlan')->paginate(3);
        }
        $data = [
            'nav'=>$nav,
            'c1'=>$c1,
            'subfielde'=>$subfielde,
            'subfield'=>$subfield,
            'subfields'=>$subfields
        ];
        $datas = serialize($data);
        Redis::setex('person_index',8600,$datas);
        return view('/index/index',compact('nav','c1','subfielde','subfield','subfields'));
    }
    public function about()
    {
        $person = Redis::get('person_about');
        $persons = unserialize($person);
        $nav = $persons['nav'];
        $subfield = $persons['subfield'];
        $info = $persons['info'];

        if (empty($persons)){
            $nav=DB::table('navbar')->orderby('weight','desc')->get()->toArray();
            $subfield=DB::table('fenlan')->orderby('create_time','desc')->get()->toArray();
            $info=DB::table('lan')
                ->join('fenlan','lan.lan_id','=','fenlan.lan_id')
                ->paginate(1);
        }

        $data = [
            'nav'=>$nav,
            'subfield'=>$subfield,
            'info'=>$info
        ];
        $datas = serialize($data);
        Redis::setex('person_about',8600,$datas);
//        Redis::flushall('person_about');
        return view('/index/about',['nav'=>$nav,'subfield'=>$subfield,'info'=>$info]);
    }
    public function news()
    {
        $person = Redis::get('person_about');
        $persons = unserialize($person);
        $nav = $persons['nav'];
        $subfield = $persons['subfield'];
        $info = $persons['info'];

        if (empty($persons)){
            $nav=DB::table('navbar')->orderby('weight','desc')->get()->toArray();
            $subfield=DB::table('fenlan')->orderby('create_time','desc')->get()->toArray();

            $info=DB::table('lan')
                ->join('fenlan','lan.lan_id','=','fenlan.lan_id')
                ->paginate(1);
        }
        $data = [
            'nav'=>$nav,
            'subfield'=>$subfield,
            'info'=>$info
        ];
        $datas = serialize($data);
        Redis::setex('person_about',8600,$datas);
        return view('/index/news',['nav'=>$nav,'subfield'=>$subfield,'info'=>$info]);
    }
    public function shownews()
    {
        $person = Redis::get('person_about');
        $persons = unserialize($person);
        $nav = $persons['nav'];
        $subfield = $persons['subfield'];
        $info = $persons['info'];

        if (empty($persons)){
            $nav=DB::table('navbar')->orderby('weight','desc')->get()->toArray();
            $subfield=DB::table('fenlan')->get()->toArray();
            $info=DB::table('img')
                ->join('fenlan','img.c_id','=','fenlan.c_id')
                ->paginate(1);
        }

        $data = [
            'nav'=>$nav,
            'subfield'=>$subfield,
            'info'=>$info
        ];
        $datas = serialize($data);
        Redis::setex('person_about',8600,$datas);


        return view('/index/shownews',['nav'=>$nav,'subfield'=>$subfield,'info'=>$info]);
    }
}