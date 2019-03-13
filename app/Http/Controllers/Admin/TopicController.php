<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Post;
use App\Models\User;
use DB;
class TopicController extends Controller
{
    public function post(Request $request)
    {
       $search = $request->input('search','');
        $count = $request->input('count','5');
       
        //添加视图
        $data = Post::where('title','like','%'.$search.'%')->paginate($count);
        
            
        return view('admin.topic.post',['data'=>$data,'request'=>$request->all()]);
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Topic::all();
        return view('admin.topic.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::all();
        return view('admin.topic.create',['post'=>$post]);
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
            'logo' => 'required',
            'url' => 'required',
        ],[
            'title.required' => '标题必填',
            'logo.required' => '文件必须上传',
            'url.required' => '链接地址必填',
        ]);


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
                $res1 = $file->storeAs('images/topic',$file_name);
                 // 接收数据
                $data = $request->except(['_token']);
                // 实例化模型,赋值
                $Topic = new Topic;
                $Topic->url = $data['url'];
                $Topic->logo = $res1;
                $Topic->pid = $data['pid'];
                // dump($Topic->save());
            // 判断添加是否成功
            if($Topic->save()){
                 return redirect('admin/topic')->with('success','添加成功');
            }else{
                return back()->with('error','添加失败');
            }
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
        $data = Topic::find($id);
        return view('admin.topic.edit',['data'=>$data]);
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
        
        $Topic =Topic::find($id);
        $Topic->title = $data['title'];
        $Topic->url = $data['url'];

         // 如果上传了新头像
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename = time().rand(1000,9999).'.'.$extension;
            // dump($filename);
            $data = $file->storeAs('images/topic',$filename);
            // dd($data);
            //dump($res);
            if ($data) {
                $Topic->logo = $data;
            } else {
               return back()->with('error','修改失败');
            }
        }

        if($Topic->save()){
             return redirect('admin/topic')->with('success','修改成功');
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
        // 查找数据
        $logo = Topic::find($id)->logo;
        // 获取图片路径
        $logo_path1 = 'uploads/'.$logo;
        // 删除操作
        $res1 = Topic::destroy($id);
        // 删除时图片在文件夹里一起删除
        $res2 = unlink($logo_path1);
        
        if($res1 && $res2 ){
            return  redirect('admin/topic')->with('success','删除成功');
        }else{
             return back()->with('error','删除失败');
        }
    }
}
