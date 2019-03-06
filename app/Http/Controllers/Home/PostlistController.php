<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\User;
use App\Models\Post;
use App\Models\Collection;
class PostlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dump('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
        $post = $data->post;
        // 帖子信息
       
        $post = Post::where('fid',$id)->where($key[0],$value)->orderBy('top','desc')->orderBy('created_at','desc')->paginate(13);

        // dump($post[0]->Collection[0]->uid);
        return view('home/postlist/index',['id'=>$id,'data'=>$data,'post'=>$post]);
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
     * [like description]
     * @return [type] [description]
     */
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
