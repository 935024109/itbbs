<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Contracts\Encryption\DecryptException;
use Hash;
use Gregwar\Captcha\CaptchaBuilder; 
use Gregwar\Captcha\PhraseBuilder;
class LoginController extends Controller
{
    public function index()
    {
    	return view('admin/login/index');
    }

    public function login(Request $request)
    {
        // dd(session('id'));
        $this->validate($request, [
            'captcha' => 'required|captcha',
        ],[
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请看好了在填写'
        ]);
    	$data = $request->except('_token');
    	// 根据用户名去查询数据
    	$user = User::where('uname','=',$data['uname'])->first();
    	//dd($user->photo);
    	if ($user) {
    		// 匹配密码
    		$res = Hash::check($data['pwd'], $user->pwd);
    		if ($res) {
    			// 如果匹配成功
                session(['flag'=>true]); 
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
        session(['flag'=>false]); 
        session()->forget('uname');
    	session()->forget('id');
    	session()->forget('photo');
    	return redirect('/admin/user')->with('success','退出成功');
    }

    // 验证码生成
    public function captcha($tmp)
    {
 
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(6);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片   此处要设置浏览器不要缓存
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }
}
