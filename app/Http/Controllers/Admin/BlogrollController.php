<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blogroll;
use DB;

class BlogrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        // 搜索条数
        // $count = $request->input('count',5);
        // 搜索关键字
        $search = $request->input('search','');
        $data = Blogroll::where('name','like','%'. $search.'%')->get();
        // 获取数据库值
        // $data = Blogroll::get();
        // dd($data);
        // 加载视图
        return view('admin.blogroll.index',['data'=>$data,'request'=>$request->all()]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载视图
        return view('admin.blogroll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        // $data = Blogroll::select('name')->get();
        // dd($data);

        // 检测是否有文件上传
        if($request->hasFile('logo')){
            // 创建文件上传对象
            $file = $request->file('logo');
            // 执行文件上传
            // $res = $file->store('images');

            // 执行文件上传 并且指定文件名
            // 获取文件后缀
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;
            // dump($file_name);
            $res = $file->storeAs('images/blogroll',$file_name);
             // 接收数据
            $data = $request->except(['_token']);
            // dd($data);
            // 实例化模型,赋值
            $Blogroll = new Blogroll;
            $Blogroll->name = $data['name'];
            $Blogroll->logo = $res;
            $Blogroll->title = $data['title'];
            $Blogroll->url = $data['url'];
            $Blogroll->save();
            return redirect('admin/blogroll')->with('success','添加成功');
            // dump($res);
        }else{
            return back()->with('error','添加失败');
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
        $data = Blogroll::find($id);
        // dd($data);
        // 加载视图
        return view('admin.blogroll.edit',['data'=>$data]);
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
        $data = $request->except(['_token','_method']);
        // dd($data);
        // 
        $blogroll = Blogroll::find($id);
        $blogroll->name = $data['name'];
        $blogroll->url = $data['url'];
        $blogroll->title = $data['title'];
        // 如果上传了新头像
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename = time().rand(1000,9999).'.'.$extension;
            // dump($filename);
            $data = $file->storeAs('images/blogroll',$filename);
            // dd($data);
            //dump($res);
            if ($data) {
                $blogroll->logo = $data;
            } else {
               return back()->with('error','修改失败');
            }
        }

        $data = $blogroll->save();

        if($data){
             return redirect('admin/blogroll')->with('success','修改成功');
        }else{
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
        // 删除
        if(Blogroll::destroy($id)){
             return  redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
              return  redirect($_SERVER['HTTP_REFERER'])->with('error','删除失败');
        }
    }
}
