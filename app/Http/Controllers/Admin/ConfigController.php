<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use DB;
class ConfigController extends Controller
{
   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Config::all();
           
        // 加载视图
        return view('admin.config.index',['data'=>$data]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data_create = Config::all();
        // 加载视图
        return view('admin.config.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // 检测是否有文件上传
        if($request->hasFile('logo')){
            // 创建文件上传对象
            $file = $request->file('logo');           
            // 执行文件上传 并且指定文件名
            // 获取文件后缀
            $ext = $file->extension();
            // 拼接名称
            $file_name = time()+rand(1000,9999).'.'.$ext;
            $res = $file->storeAs('images/config',$file_name);
             // 接收数据
            $data = $request->except(['_token']);
            // 实例化模型,赋值
            $config = new Config;
            $config->logo = $file_name;
            $config->title = $data['title'];
            $config->url = $data['url'];
            $config->on_off = $data['on_off'];
            $config->save();
            return redirect('admin/config')->with('success','添加成功');
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
        // 根据id查询模型数据
        $data = config::find($id);
        // dd($data);
        // 加载视图
        return view('admin.config.edit',['data'=>$data]);
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
        $config = Config::find($id);
        $config->on_off = $data['on_off'];
        $config->url = $data['url'];
        $config->title = $data['title'];
        // 如果上传了新头像
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename = time().rand(1000,9999).'.'.$extension;
            // dump($filename);
            $data = $file->storeAs('images/config',$filename);
            //dump($res);
            
            if ($data) {
                $config->logo = $data;
            } else {
                return back()->with('error','新头像修改失败');
            }

        }
        $data = $config->save();
        if($data){
             return redirect('admin/config')->with('success','修改成功');
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
      
        // $logo = Config::find($id)->logo;
        // $logo_path = 'uploads/images/config/'.$logo;
        // $res1 = Config::destroy($id);
        // $res2 = unlink($logo_path);
        // if($res1 && $res2){
        //     return redirect('admin/config')->with('success','删除成功');
        // }else{
        //     return  redirect($_SERVER['HTTP_REFERER'])->with('error','删除失败');
        // }
    }
}
