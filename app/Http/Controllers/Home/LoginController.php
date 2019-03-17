<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use DB;
class LoginController extends Controller
{
    /**
     * 登录页面加载
     * @return [type] [description]
     */
    public function login()
    {
    	return view('home.login.index');
    }

    public function in(Request $request)
    {

       
    	$this->validate($request, [
	        'uname' => 'required',
	        'pwd' => 'required',
	        'captcha' => 'required|captcha'
    	],[
    		'uname.required' => '用户不能为空',
    		'pwd.required' => '密码不能为空',
    		'captcha.required' => '验证码不能为空',
    		'captcha.captcha' => '验证码不对'
    	]);
    	
		// 判断用户名和密码
    	$user = User::where('uname',$request->uname)->first();
    	if(empty($user)){
    		return back()->with('error','用户名或者密码不正确');
    	}
    	$pwd = Hash::check($request->pwd, $user->pwd);
    	//返回错误
    	if(!$pwd){
    		return back()->with('error','用户名或者密码不正确');
    	}
        //判断用户是否激活
        $user_status = User::where('uname',$request->uname)->get();
        if($user_status[0]->status == '0'){
            return response()->view('home/user/status');
        }

	    $user->last_time = date('Y-m-d H:i:s',time());   
        $user->save(); 
        // 登录成功后吧数据存入session
    	session(['flag'=>true]); 
		session(['id'=>$user->uid]);
		session(['uname'=>$user->uname]);
		session(['photo'=>$user->photo]);

		return redirect('/home')->with('success','登录成功');	

    } 

    /**
     *  退出登录
     * @return [type] [description]
     */
    public function out(){
        //清空session
        session(['flag'=>false]); 
        session(['id'=>NULL]);
        session(['uname'=>NULL]);
        session(['photo'=>NULL]);
        // 退出成功跳转
        return redirect('/home')->with('success','退出成功');
    }

}
