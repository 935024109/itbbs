<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Collection;
use Hash;
use DB;

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
        echo "string";
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


    /**
     * 个人空间
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function user_info($id)
    {
        // 查询用户发表过的帖子
        $user_post = Post::where('uid',$id)->get();
        // 查询用户发表过的回复
        $user_reply = Reply::where('uid',$id)->get();
        // $user_reply_reply_id = Reply::find($user_reply[0]->reply_id);
        // dd($user_reply);

        return view('home.user.userinfo',compact('user_post','user_reply'));
    }

    /**
     * 删除忒贴子
     * @param  [type] $pid [description]
     * @return [type]      [description]
     */
    public function remove_post($pid)
    {
        DB::beginTransaction();
        $res = Post::where('pid',$pid)->delete();
        $res2 = Reply::where('pid',$pid)->delete();

        if($res && $res2){
            DB::commit();
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        } else {
            DB::rollBack();
            return back()->with('error','删除失败');
        }

    }


    /**
     * 删除自己回复
     * @param  [type] $rid [description]
     * @return [type]      [description]
     */
    public function remove_reply($rid)
    {
        $res = Reply::where('rid',$rid)->delete();
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        } else {
            return back()->with('error','删除失败');
        }
    }


}
