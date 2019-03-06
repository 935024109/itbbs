<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('home/login/index');
    }

    public function in(Request $request)
    {
        $this->validate($request, [
                'uname' => 'required',
                'pwd' => 'required',
                'captcha' => 'required|captcha',
            ],
            [
                'uname.required'    => '用户名不能为空',
                'pwd.required'    => '密码不能为空',
                'captcha.required' => '验证码不能为空',
                'captcha.captcha' => '验证码不正确',
            ]
        );
         

        $data = $request->except('_token');
        // dd($data);
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
                return redirect('/home');
            } else {
                return back()->with('error','密码输入错误');
            }
        } else {
            return back()->with('error','用户名不存在');
        }
    }

    // 签到页面
    public function signin()
    {
        // 判断session是否有值
        if(session('id')){
            // 有值跳到签到页面
            return view('home.signin.index');

        }
            // 没有则跳到登陆页面
            return view('home/login/index');
        // 加载试图
        
    }
    // 接受
    public function signin_form($id)
    {
        
        $data = User::find($id);
        
        return view('home.signin.signin_form',['data'=>$data]);
    }
}
