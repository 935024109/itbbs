<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Collection;
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
        // Redis::setex('12313',1000,'123123');
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
        // if(session('id') != $id){
        //     return redirect('error.404');
        // }
        $user = User::find($id);
        // dump($user);
        return view('home.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(session('id') != $id){
            return redirect('error.404');
        }

        $user = User::find($id);


        return view('home.user.edit',compact('user'));

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

        $this->validate($request, [
            'pwd' => 'required',
            'repwd' => 'required|same:pwd',
            'code' => 'required'
        ],[
         'pwd.required' => '密码不能为空',
         'repwd.required' => '密码不能为空',
         'code.required' => '验证码不能为空',
         'pwd.same' => '两次密码输入不一致'
         
        ]);
        // dump($request);
        
        $code = Redis::get('code_'.$request->phone);
        if($request->code != $code){
            return back()->with('error','验证码输入错误');
        }

        $user = User::find($id);
        $user->pwd = Hash::make($request->pwd);
        $res = $user->save();

        if($res){
            return redirect('home/login')->with('success','修改成功请重新登录');
        } else {
            return back()->with('error','修改失败');
        }
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

   
    /**
     * 修改密码发送手机验证码文档
     * @param  [type] $phone [description]
     * @return [type]        [description]
     */
    public function phone($phone)
    {
        return view('home.user.sendphone',compact('phone'));
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


    /**
     * 收藏
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function collection($id)
    {
        $user = User::find($id);
        $data = Collection::where('uid',$id)->get();
        // dd($data);
        return view('home.user.collection',compact('data','user'));
    }

}
