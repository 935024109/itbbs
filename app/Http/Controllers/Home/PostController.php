<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Forum;
use App\Models\Reply;

use App\Models\Collection;
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
    public function create($id = 0)
    {
        //判断用户是否登录
        if(!session('id')){
            //如果没有登录,跳转到 登录页面
             return redirect('/home/login')->with('success', '抱歉，您尚未登录，没有权限发帖');
        }
         return view('home.post.create',['forum_cates'=>self::getForumCates(),'fid'=>$id]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取表单数据数据
        $data = $request->except('_token');
        // 获取登录用户的id
        $uid = session('id');
        // 实例化表单对象
        $post = new Post;

        // 保存数据到表单中
        $post->uid = $uid;
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->revert = $data['revert'];
        $post->fid = $data['fid'];
        $post->score = $post->score += 5;
        $res = $post->save();
        if ($res) {
            return $this->show($post->pid);
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
        // 获取帖子数据
        $post = Post::find($id);
        // 获取板块信息
        $forum = $post->forum;
        // 上一板块的名字
        $lastforum = Forum::where('fid',$forum->pid)->first()->fname;
        // 获取用户数据
        $uid = $post->uid;
        $user = User::find($uid);
        // 获取当前用户的帖子个数
        $post_count = Post::where('uid',$uid)->count();
        
        // 获取帖子下的回帖个数
        $reply_count = Reply::where('pid',$id)->count();

        // 获取当前帖子的回帖
        $reply_data = Reply::where('pid',$id)->get();

        // 获取帖子被多少人收藏
        // 初始化变量累计人数
        $uid_count = 0;
        // 获取所有收藏该帖子的人数
        $collections = $post->collection;
        foreach ($collections as $k => $v) {
            if ($v->pid == $id) {
                $uid_count += 1;
            }
        }

        // 加载视图,分配数据
        return view('home.post.show',['posts_data'=>$post,'post_count'=>$post_count, 'user'=>$user,'pid'=>$id,'reply_data'=>$reply_data,'reply_count'=>$reply_count,'lastforum'=>$lastforum,'forum'=>$forum,'uid_count'=>$uid_count,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request,$id)
    {
         // 接收表单传来的值
        $get = $_GET;
        // 先随便给value赋个初值
        $value = $id;
        // 进行判断如果是查看所有 给$get 赋一个关联下标数据
        if (!$get) {
            $get['fid'] = $value;
        }


        $key = array_keys($get);
        // 如果传值是 top 
        if ($key[0] == 'top') {
            $value = '1';
        }
        // 如果传值是 hot 
        elseif ($key[0] == 'hot') {
            $value = '1';
        }

        // 通过id查询板块信息
        $data = Forum::find($id);
        // 查询上一级板块的名字
        $lastforum = Forum::where('fid',$data->pid)->first()->fname;

        $post = $data->post;
        // 帖子信息
       
        $post = Post::where('fid',$id)->where($key[0],$value)->orderBy('top','desc')->orderBy('created_at','desc')->paginate(13);
        // 根据id去查询所有回复
        // dump($post[0]->Collection[0]->uid);
        return view('home/postlist/index',['lastforum'=>$lastforum,'id'=>$id,'data'=>$data,'post'=>$post]);
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

    // 收藏
    public function like($id)
    {
        $uid = session('id');
        $pid = $id;
        // dd($uid,$pid);
        $collection = new Collection;
        $collection->uid = $uid;
        $collection->pid = $pid;
        $res = $collection->save();
        // dd('123');
        if ($res) {
            return back();
        } else {
            return back();
        }
    }
    // 取消收藏
    public function nolike($id)
    {
        $res = Collection::where('pid',$id)->where('uid',session('id'))->delete();
        if ($res) {
            return back();
        } else {
            return back();
        }
    }

}
