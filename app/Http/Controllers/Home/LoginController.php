<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

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

    	// $this->validate($request, [
	    //     'uname' => 'required',
	    //     'pwd' => 'required',
	    //     'captcha' => 'required|captcha'
    	// ],[
    	// 	'uname.required' => '用户不能为空',
    	// 	'pwd.required' => '密码不能为空',
    	// 	'captcha.required' => '验证码不能为空',
    	// 	'captcha.captcha' => '验证码不对'
    	// ]);
    	
		// 判断用户名和密码
    	$uname = User::where('uname',$request->uname)->first();
    	if(empty($uname)){
    		return back()->with('error','用户名或者密码不正确');
    	}
    	$pwd = Hash::check($request->pwd, $uname->pwd);
    	// dd($pwd);
    	//返回错误
    	if(!$pwd){
    		return back()->with('error','用户名或者密码不正确');
    	}
	
    	session(['flag'=>true]); 
		session(['id'=>$user->uid]);
		session(['uname'=>$data['uname']]);
		session(['photo'=>$user->photo]);

		return redirect('/home')->with('success','登录成功');	

    } 


}
