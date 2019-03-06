<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Forum;
use DB;

class PostController extends Controller
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
    public function create($id)
    {
        //判断用户是否登录
       /* if(!session('id')){
            //如果没有登录,跳转到 登录页面
            return view('home.login.index');
        }

        return view('home.post.create',['fid'=>$id]);
*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取数据
        $data = $request->except('_token');
        $uid = session('id');
        $post = new Post;
        $post->uid = $uid;
        $user = User::find($uid);
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->revert = $data['revert'];
        $post->fid = $data['fid'];
        $forum = Forum::find($data['fid']);
       
        $res = $post->save();
        $post_count = Post::where('uid',$uid)->count();
        // dd($posts_data);
        if ($res) {
            return view('home.post.checkcontent',['posts_data'=>$post,'post_count'=>$post_count, 'user'=>$user]);
        }else{
            return back();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request,$id)
    {
        // 通过id查询板块信息
        $data = Forum::find($id);
        
        $post = Post::where('fid',$id)->get();
       
        return view('home.postlist.index',['id'=>$id,'data'=>$data,'post'=>$post]);
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

    // 获取模板分类数据
    public static function getForumCates($search = '')
    {   
        
        //根据条件获取分类数据
        $forums_cates = Forum::where('fname','like','%'. $search.'%')->select('*',DB::raw("concat(path,',',fid) as paths"))->orderby('paths')->get();
        foreach ($forums_cates as $key => $value) {
            //统计path中 , 出现时 次数
            $sum  = substr_count($value->path, ',');
            //重复使用一个字符串拼接字符串
            $forums_cates[$key]->fname = str_repeat('|----', $sum).$value->fname;
        }
        return $forums_cates;
    }   

    public function goPost($id = 0)
    {
        //判断用户是否登录
        if(!session('id')){
            //如果没有登录,跳转到 登录页面
            return view('home.login.index');
        }

        return view('home.post.create',['forum_cates'=>self::getForumCates(),'fid'=>$id]);

    }

    // 跳转到帖子详情页
    public function goCheckContent($pid,$uid)
    {
        $post = Post::find($pid);
        $user = User::find($uid);
        $post_count = Post::where('uid',$uid)->count();
        
        return view('home.post.checkcontent',['posts_data'=>$post,'post_count'=>$post_count, 'user'=>$user]);
       
    }
}
