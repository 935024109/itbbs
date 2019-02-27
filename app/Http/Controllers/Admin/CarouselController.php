<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carousels = Carousel::all();
        // dd($carousels);
        return view('admin.carousel.index',['carousels' => $carousels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 表单数据验证
        $this->validate($request, [
            'title' => 'required',
            'img_src' => 'required',
            'link_url' => 'required',
        ],[
            'title.required' => '标题必填',
            'img_src.required' => '文件必须上传',
            'link_url.required' => '链接地址必填',
        ]);

        // 执行文件上传
        if($request->hasFile('img_src')){
            $file = $request->file('img_src');
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;
            // dump($file_name);
            $file->storeAs('images',$file_name);
        }

        // 接收数据
        $data = $request->except(['_token']);

        // 赋值
        $data['img_src'] = $file_name;
        $carousel = new Carousel;
        $carousel->title = $data['title'];
        $carousel->img_src = $data['img_src'];
        $carousel->link_url = $data['link_url'];

        // 压入到数据库
        $res = $carousel->save();
        //判断返回值,做出响应
        if($res){
            return redirect('admin/carousel')->with('success', '添加成功');
        }else{
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
        //根据id 获取数据,分配数据到视图
        $carousel = Carousel::find($id);

        return view('admin.carousel.edit',['carousel'=>$carousel]);
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
         // 接收数据
        $data = $request->except(['_token','_method']);
        //根据id获取数据
        $carousel = Carousel::find($id);
        $carousel->title = $data['title'];
        $carousel->link_url = $data['link_url'];

        //获取数据
        if($request->hasFile('img_src')){
            $file = $request->file('img_src');
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;
            // dump($file_name);
            $file->storeAs('images',$file_name);
            //给模型图片路径属性赋值
            $carousel->img_src = $file_name;
            // 压入到数据库
            $res = $carousel->save();
        }else{
            // 压入到数据库
            $res = $carousel->save();
            
        }
       
        
        //判断返回值,做出响应
        if($res){
            return redirect('admin/carousel')->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
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
        //根据id删除轮播图
        $res = Carousel::destroy($id);
        //判断返回值,做出响应
        if($res){
            return redirect('admin/carousel')->with('success', '删除成功');
        }else{
            return back()->with('error', '删除失败');
        }
    }
}
