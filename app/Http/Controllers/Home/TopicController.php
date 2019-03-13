<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Post;
class TopicController extends Controller
{
    public function post($id)
    {
        // 接受传值 id
        $post_content = Post::find($id);
        // dump($post_content);
        // 通过帖子表外键去查找用户表的内容
        $user = $post_content->user;
        // dump($user);
        // 获取该id 帖子的总数量
        $post_count = Post::where('uid',$user->uid)->count();
        // 获取该id 精华的总数量
        $post_hot_count = Post::where('uid',$user->uid)->where('hot',1)->count();
        // 查询数据
        $data = Topic::all();
        // dd($data);
        // 加载视图 分配数据
        return view('home.topic.index',['data'=>$data[0],'post_content'=>$post_content,'user'=>$user,'post_count'=>$post_count,'post_hot_count'=>$post_hot_count]);
       
    }
    
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
}
