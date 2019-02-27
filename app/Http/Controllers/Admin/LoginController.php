<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Contracts\Encryption\DecryptException;
use Hash;
class LoginController extends Controller
{
    public function index()
    {
    	return view('admin/login/index');
    }

    public function login(Request $request)
    {
    	$data = $request->except('_token');
    	// 根据用户名去查询数据
    	$user = User::where('uname','=',$data['uname'])->first();
    	//dd($user->photo);
    	if ($user) {
    		// 匹配密码
    		$res = Hash::check($data['pwd'], $user->pwd);
    		if ($res) {
    			// 如果匹配成功
    			session(['id'=>$user->uid]);
    			session(['uname'=>$data['uname']]);
    			session(['photo'=>$user->photo]);
    			return redirect('/admin/user');
    		} else {
    			return back()->with('error','密码输入错误');
    		}
    	} else {
    		return back()->with('error','用户名不存在');
    	}
    }

    public function out()
    {
    	session()->forget('uname');
    	session()->forget('photo');
    	return redirect('/admin/in')->with('success','退出成功');
    }
}
