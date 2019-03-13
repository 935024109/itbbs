<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Post;
use App\Models\Carousel;
use App\Models\Blogroll;
use App\Models\User;
use App\Models\Groom;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 通过id遍历获取所有栏目
    public static function getIdForum($id = 0)
    {
        $data = Forum::where('pid',$id)->get(); // 一级栏目
        foreach ($data as $k => $v) {
            
            $v['sub'] = self::getIdForum($v->fid); // 二级栏目
            foreach ($v['sub'] as $kk => $vv) {
                // 计算当前栏目下的帖子数
                $count = Post::where('fid',$vv->fid)->count();
                // 获取置顶帖子中的第一个帖子的所有信息
                $post = Post::where('top',1)->where('fid',$vv->fid)->first();
                if (!empty($post)) {
                // 获取帖子标题
                $title = $post->title;
                // 获取帖子创建时间
                $created = $post->created_at;
                // 通过帖子去获取发帖人的名字
                // $auth = $post->user->uname;
                } else {
                // 获取帖子标题
                $title = '';
                // 获取帖子创建时间
                $created = '';
                // 通过帖子去获取发帖人的名字
                $auth = '';
                }
                // 将获取到的信息放到二级栏目的信息中
                $vv['count'] = $count;
                $vv['title'] = $title;
                $vv['created'] = $created;
                // $vv['auth'] = $auth;
            }
            
        }
        return $data;
    }

    // 获取分类数据,分配数据到视图
    public function index()
    {   
        
        $user = User::where('uid',session('id'))->first();
        //获取分类
        $data = self::getIdForum();
        //获取轮播图数据
        $carousels = Carousel::select('img_src','link_url')->get();

        // 获取友情链接数据
        $blogroll = Blogroll::select('name','url')->get();

        // 获取推荐阅读数据
        $grooms = Groom::get();
        //加载视图,分配数据

        return view('home.index',['data'=>$data,'carousels_data'=>$carousels,'blogroll'=>$blogroll,'user'=>$user,'grooms'=>$grooms]);
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
