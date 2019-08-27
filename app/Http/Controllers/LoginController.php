<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use DB;
class LoginController extends Controller
{
    //注册
    public function reg()
    {

        return view('/login/reg');
    }

    /**
     * 执行注册
     * @param Request $request
     */
    public function regdo(Request $request)
    {
        $data=$request->input();
        //var_dump($data);
        if(empty($data['uname']) || empty($data['pwd']) || empty($data['repwd']) || empty($data['email']) || empty($data['tel'])){
            die('缺少参数');
        }
        unset($data['repwd']);
        unset($data['code']);
        $data['create_time']=time();
        $data['pwd']=md5($data['pwd']);
        $res1=DB::table('user')->first();
        //dd($res1);
        if($data['uname'] ==$res1->uname){
            die('该用户已经注册');
        }

        if($data['email'] ==$res1->email){
            die('该邮箱已经注册');
        }
        $res=DB::table('user')->insert($data);
        //dd($res);

        if($res){
            echo json_encode(['msg'=>'注册成功','code'=>1]);
        }

    }

    //登录
    public function login()
    {
        return view('/login/login');
    }

    //获取验证码
    public function logincode()
    {
        $code=new CodeController();
        $code->doimg();
        session(['code'=>$code->getCode()]);
    }

    //执行登录
    public function logindo(Request $request )
    {
        $data=$request->input();
//        dd($data);

        if($data['uname']=='' || $data['pwd']==''){
            return ['code'=>2, 'msg'=>'任何选项都不得为空'];
        }

        $where = [
            'uname'=>$data['uname'],
        ];
        $res = DB::table('user')->where($where)->first();
//        dd($res);
        if(empty($res)){
            return ['code'=>4,'msg'=>'用户不存在'];
        }else if(md5($data['pwd'])!=$res->pwd){
            return ['code'=>3,'msg'=>'密码错误'];
        }
        session(['uid'=>$res->uid]);
        return ['code'=>1,'msg'=>'登陆成功'];
    }

    public function forgot()
    {
        return view('/login/forgot');
    }

    //手机号验证码
    public function send()
    {
        $tel=request()->tel;
//        dd($tel);
        $code=rand(1000,9000);
        Redis::set('code',$code);
        $host = "http://dingxin.market.alicloudapi.com";
        $path = "/dx/sendSms";
        $method = "POST";
        $appcode = "2b506cccc1cb48b7a9981c8f2a3abafd";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);

        $querys = "mobile=".$tel."&param=code%3A".$code."&tpl_id=TP1711063";
        $bodys = "";
        $url = $host . $path . "?" . $querys;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $curl=json_decode(curl_exec($curl),true);
        return $curl['return_code'];
    }

    public function forgotpwd()
    {
        $data=request()->input();
        //dd($data);
        $code=$data['code'];
//        dd(Redis::get('code'));
        $res=DB::table('user')->first();
//        dd($res);
        if(empty($data['tel']) || empty($data['pwd']) || empty($data['repwd']) || empty($data['code'])){
//            die('缺少参数');
        }

        if(empty($data['tel']) && $data['tel'] != $res->tel){
            return ['msg'=>'该手机号不是用户当时注册的手机号','code'=>2];
        }

        if($code != Redis::get('code')){
            return ['msg'=>'输入验证码不正确，请重新输入','code'=>3];
        }
        $where=[
          'pwd'=>md5($data['pwd']),
        ];
        unset($data['repwd']);
        unset($data['$code']);
        $info=DB::table('user')->update($where);
//        dd($info);
        if($info){
            Redis::del('code');
            return ['msg'=>'修改密码成功','code'=>1];
        }else{
            return ['msg'=>'修改密码失败','code'=>2];
        }

    }


}