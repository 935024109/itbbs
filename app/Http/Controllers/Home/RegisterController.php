<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreBlogPost;
use App\Models\User;
use Hash;
use Mail;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.register.index');
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
        echo 123;
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


    /**
     * 邮箱验证发送
     * @return [type] [description]
     */
    public function email(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'pwd' => 'required',
            'repwd' => 'required|same:pwd'
        ],[
             'pwd.required' => '密码不能为空',
             'repwd.same' => '两次密码不一致',
             'email.required' => '邮箱不能为空',
             'email.email' => '邮箱格式不对',
             'repwd.required' => '确认密码不能为空'
        ]);

        // dump($request->except('_token'));
        // 接受数据
        $email = $request->email;
        // dd($email);
        $uname = $request->uname;
        //查询数据库是否唯一 
        $res = User::where('email',$email)->first();
        $res2 = User::where('uname',$uname)->first();
        // dd(typeOf($res));
        // 判断是否存在 存在就调回
        if($res){
            return back()->with('error','邮箱已存在');
        }
        if($res2){
            return back()->with('error','用户名已存在');
        }

        $user = new User;
        $user->uname = $request->uname;
        $user->nickname = $request->uname;
        $user->pwd = Hash::make($request->pwd);
        $user->email = $email;
        $user->photo = 'iamges/user/default.jpg';
        $user->token = str_random(60);
        if($user->save()){
            Mail::send('home.register.mail', ['user' => $user->uname,'id'=>$user->uid,'token'=>$user->token], function ($m) use ($user) {
                

                if($m->to($user->email)->subject('Your Reminder!')){
                   return back()->with('success','成功');
                } else {
                    return back()->with('error','发送邮件失败');
                }
            });
        } else {
            return back()->with('error','未知原因注册失败!');
        }
       
    }


    public function changestatus($id,$token)
    {
        // dump($id);
        // dump($token);
        $user = User::find($id);
        if($user->token != $token){
            dd('未知错误..');
        }
        if(!$user){
            dd('未知错误..');
        }

        $user->status = '1';
        $user->token = str_random(60);
        
        if($user->save()){
            dd('激活成功');
        } else {
            dd('激活失败');
        }

    }


}
