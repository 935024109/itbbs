<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPost;
use App\Models\Post;
use App\Models\User;
use App\Models\Forum;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //搜索分页
        $search = $request->input('search','');
        $count = $request->input('count','5');
       
        //添加视图
        $data = Post::where('title','like','%'.$search.'%')->paginate($count);
        
            
        return view('admin.post.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加视图
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        //接收数据
        $data = $request->except('_token');
        
        //把数据压入数据库
        $post = new Post;
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->fid = $data['fid'];
        $post->uid = '1';
        $post->revert = $data['revert'];
        $res = $post->save();
        //判断数据添加成功
        if($res){
            return redirect('admin/post')->with('success', '添加成功');
        } else {
            return back()->with('error', '添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 接受id 并查找数据
        $psot = Post::find($id);
        // dump($psot);
        return view('admin.post.edit',['post'=>$psot]);
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
        //类型约束
         $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required'
        ],[
            'title.required' => '标题不能为空',
            'title.max' => '标题太长',
            'content.required' => '内容不能为空',
        ]);

        // dump($request);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->top = $request->top;
        $post->hot = $request->hot;
        $post->revert = $request->revert;
        $res = $post->save();

        if($res){
            return redirect('admin/post')->with('success','修改成功');
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
     * 加精设置
     * @return [type] [description]
     */
    public function hot($id)
    {

        // 找到对应id数据并且修改数据
        $data = Post::find($id);
        $data->hot = '1';
        $res = $data->save();
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','加精成功');
        } else {
            return back($_SERVER['HTTP_REFERER'])->with('error','加精失败');
        }

    }

    /**
     * 取消加精设置
     * @return [type] [description]
     */
    public function nothot($id)
    {
        // 找到对应id数据并且修改数据
        $data = Post::find($id);
        $data->hot = '0';
        $res = $data->save();
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','取消加精成功');
        } else {
            return back($_SERVER['HTTP_REFERER'])->with('error','取消加精失败');
        }
    }

    /**
     * 置顶设置
     * @return [type] [description]
     */
    public function top($id)
    {
        // 找到对应id数据并且修改数据
        $data = Post::find($id);
        $data->top = '1';
        $res = $data->save();
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','顶置成功');
        } else {
            return back($_SERVER['HTTP_REFERER'])->with('error','顶置失败');
        }
    }

    /**
     * 取消加精设置
     * @return [type] [description]
     */
    public function nottop($id)
    {
        // 找到对应id数据并且修改数据
        $data = Post::find($id);
        $data->top = '0';
        $res = $data->save();
        if($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','取消顶置成功');
        } else {
            return back($_SERVER['HTTP_REFERER'])->with('error','取消顶置失败');
        }
    }









    // public function aaa()
    // {
    //     echo 123;
    //     for ($i=0; $i < 10; $i++) { 
    //      $post = new Post;
    //     $post->title = 'sdfsdfasdfsdf'.rand(11111,99999);
    //     $post->content = 'asdfsd'.rand(99999,11111);
    //     $post->fid = rand(1,10);
    //     $post->uid = rand(1,10);
    //     $post->revert = rand(1,2);
    //     $post->hot = rand(1,2);
    //     $post->clicks = rand(100,200);
    //     $res = $post->save();
    //     dump($res);
    //     }
        
    // }

}
