<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Post;
use DB;
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
        //查找帖子和对应帖子的回复
        $post = Post::find($id);
        $reply = Reply::where('pid',$id)->get();
        
        return view('admin.reply.show',['post'=>$post,'reply'=>$reply]);
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
        //删除对应red的帖子回复
        $res = Reply::where('rid',$id)->delete();

        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success', '删除成功');
        } else {
            return back($_SERVER['HTTP_REFERER'])->with('error', '删除失败');
        }
    }

    /**
     * 添加回复 测试数据
     */
    // public function add($id)
    // {   
    //     DB::beginTransaction();
    //     $reply = new Reply;
    //     $reply->content = '测试1';
    //     $reply->uid = 5;
    //     $reply->pid = $id;
    //     $reply->reply_id = 11;
    //     $res = $reply->save();

    //     $post = Post::find($id);
    //     $post->last_time = date('Y-m-d H:i:s',time());
    //     $res2= $post->save();

    //     if($res && $res2){
    //         DB::commit();
    //         return back()->with('success','成功');
    //     } else {
    //         DB::rollback();
    //         return back()->with('success','失败');
    //     }
        // }

}
