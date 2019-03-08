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
        dd($id);
         return view('home.post.checkcontent');
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

    // 添加回复贴
    public function add(Request $request, $pid, $uid)
    {
        //获取数据
        $data = $request -> input('content');
        //实例化对象
        $reply = new Reply;
        $reply->content = $data;
        $reply->pid = $pid;
        $reply->uid = $uid;
        $user = User::find($uid);
        //保存数据到数据库
        $reply->save();
        $pc = new PostController;
       return $pc->goCheckContent( $pid, $uid );
        // $reply_count = Reply::where('pid',$pid)->count();
        // return view('home.post.checkcontent',['reply'=>$reply,'reply_count'=>$reply_count,'user'=>$user]);


    }
}
