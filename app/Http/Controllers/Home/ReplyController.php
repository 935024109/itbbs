<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\User;
use App\Http\Controllers\Home\PostController;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'carearte';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       echo 'creater';
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
        // dd($id);
         // return view('home.post.checkcontent');
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
         // 判断用户是否登录
        if(!session('id')){
            // 如果没有登录,跳转到 登录页面
             return redirect('/home/login')->with('success', '抱歉，您尚未登录，还不能回帖');
            }
         //获取数据
        $data = $request -> input('content');
        //实例化对象
        $reply = new Reply;
        $reply->content = $data;
        $reply->pid = $id;
        $uid = session('id');
        $reply->uid = $uid;
        $user = User::find($uid);
        //保存数据到数据库
        $reply->save();
        $pc = new PostController;
       return $pc->show( $id );
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

    // 添加回复的回复贴
   // public function addReply(Request $request, $rid)
   //  {
   //       //判断用户是否登录
   //      if(!session('id')){
   //          //如果没有登录,跳转到 登录页面
   //           return redirect('/home/login')->with('success', '抱歉，您尚未登录，还不能回帖');
   //      }
   //      dd($request->all());
   //      //获取数据
   //      $data = $request -> input('content');
   //      //实例化对象
   //      $reply = new Reply;
   //      $reply->content = $data;
   //      $reply->pid = $pid;
   //      $reply->uid = $uid;
   //      $user = User::find($uid);
   //      //保存数据到数据库
   //      $reply->save();
   //      $pc = new PostController;
   //     return $pc->goCheckContent( $pid, $uid );
   //      // $reply_count = Reply::where('pid',$pid)->count();
   //      // return view('home.post.checkcontent',['reply'=>$reply,'reply_count'=>$reply_count,'user'=>$user]);


   //  }
}
