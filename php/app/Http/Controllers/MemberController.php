<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\Member;
use App\Model\Common\SecretKeyApply;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class MemberController extends Controller
{
    public $email ;
    public function register(Request $request)
    {
        $data = $request->all();
        $data['name'] = addslashes($data['name']);
        $data['password'] = md5($data['password']);
        $data['avatar'] = '';
        $data['signature'] = '';
        $member = new Member($data);
        $member->save();
        if($member){
            return responder()->success(['注册成功']);
        }else{
            return responder()->error(400, '注册失败,请及时联系站长处理bug');
        }
    }

    public function login(Request $request)
    {
        $data = $request->all();
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return responder()->error(400, '非法邮箱,请修改');
        }
        $member = Member::where('email',$data['email'])->first();
        if(!$member){
            return responder()->error(400, '邮箱或密码有误');
        }
        if(md5($data['password']) != $member['password']){
            return responder()->error(400, '邮箱或密码有误');
        }
        $request->session()->put('userinfo',$member);
        // Redis::set('username',$member['name']);
        // Redis::set('userid',$member['id']);
        return responder()->success($request->session()->get('userinfo'));
    }

    public function checkAuth(Request $request)
    {
        $user = $request->session()->get('userinfo');
        if(!$user){
            return responder()->error(400, '未登录');
        }
        return responder()->success($user);
    }

    public function logout(Request $request)
    {
        if($request->session()->has('userinfo')){
            $userData = $request->session()->get('userinfo');
            //移除session
            Redis::del('token'.$userData['id']);
            $request->session()->pull('userinfo',session('userinfo'));
        }
        return responder()->success(['退出成功']);
    }

    public function getInfo($id)
    {
        $user = Member::find($id);
        return responder()->success($user);
    }
}
