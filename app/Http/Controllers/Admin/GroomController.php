<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Groom;
use App\Models\Post;

class GroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 获取推荐阅读的列表
        $grooms = Groom::get();
       
        // 加载视图,分配数据
        return view('admin.groom.index',['grooms'=>$grooms]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // 获取帖子列表
        $posts = Post::select('pid','title')->get();
        // 加载视图
        return view('admin.groom.create',['posts'=>$posts]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // 表单验证
        $this->validate($request,
            [
                'img_href' => 'required',
                'picture' => 'required',
                'pid' => 'required'
            ],
            [
                'img_href.required' => '图片链接必填',
                'picture.required' => '图片路径必填', 
                'pid.required'=>'帖子ID必填'
            ]);
        // 接收表单数据
        $data = $request->except('_token');
        // 实例化对象
        $groom = new Groom;
         // 执行文件上传
        if ($request->hasFile('picture')) {
            // 获取上传文件的数据
            $picture = $request->file('picture');
            // 获取扩展名
            $picture_ext = $picture->extension();
            // 拼接图片名称
            $picture_name = time().mt_rand(1000,9999).'.'.$picture_ext;
            // 执行上传到指定的文件夹
            $picture->storeAs('images/groom',$picture_name);
            // 把图片名存入对象中
            $groom['picture'] = $picture_name;  
        }
        // 赋值
        $groom->img_href = $data['img_href'];
        $groom->pid = $data['pid'];
        // 执行添加操作
        $res = $groom->save();
        if ($res) {
            return redirect('/admin/groom')->with('success','添加推荐阅读成功');
        }else{
            return back()->with('error','添加推荐阅读失败');
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
    public function edit($id)
    {
         // 获取帖子列表
        $posts = Post::select('pid','title')->get();
        // 根据id获取数据,加载视图,分配数据
        $groom = Groom::find($id);
        return view('admin.groom.edit',['groom'=>$groom, 'posts'=>$posts]);
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
         // 表单验证
        $this->validate($request,
            [
                'img_href' => 'required',
                'pid' => 'required'
            ],
            [
                'img_href.required' => '图片链接必填',
                'pid.required'=>'帖子ID必填'
            ]);
        // 接收表单数据
        $data = $request->except('_token','_method');

        // 获取被修改的实例对象
        $groom = Groom::find($id);
         // 执行文件上传
        if ($request->hasFile('picture')) {
            // 获取上传文件的数据
            $picture = $request->file('picture');
            // 获取扩展名
            $picture_ext = $picture->extension();
            // 拼接图片名称
            $picture_name = time().mt_rand(1000,9999).'.'.$picture_ext;
            // 执行上传到指定的文件夹
            $picture->storeAs('images/groom',$picture_name);
            // 把图片名存入对象中
            $groom['picture'] = $picture_name;  
        }else{
            $groom->picture = $groom->picture;
        }
        // 赋值
        $groom->img_href = $data['img_href'];
        $groom->pid = $data['pid'];
        // 执行添加操作
        $res = $groom->save();
        if ($res) {
            return redirect('/admin/groom')->with('success','修改推荐阅读成功');
        }else{
            return back()->with('error','修改推荐阅读失败');
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
        // 获取图片路径
        $groom_picture = Groom::find($id)->picture;

       
        // 删除磁盘文件(delete方法中要写配置文件之后的路径,即文件上传时的路径)
        $res2 = Storage::delete('images/groom/'.$groom_picture);
        
         //根据id删除记录,同时删除图片
        $res1 = Groom::destroy($id);
        if ($res1 && $res2) {
            return redirect('/admin/groom')->with('success','删除推荐阅读成功');
        }else{
            return back()->with('error','删除推荐阅读失败');
        } 
    }
}
