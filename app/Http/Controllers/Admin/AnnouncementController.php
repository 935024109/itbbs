<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 搜索条数
        // $count = $request->input('count',5);
        // 搜索关键字
        $search = $request->input('search','');
        // 从数据库取值
        $data = Announcement::where('title','like','%'. $search.'%')->get();
        // dump($data);
        // 加载视图
        return view('admin.announcement.index',['data'=>$data,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载视图
        return view('admin.announcement.create');
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
            'auth' => 'required',
            'href' => 'required',
            'content' => 'required',
        ],[
            'title.required' => '描述必填',
            'auth.required' => '作者必填',
            'href.required' => '链接地址必填',
            'content.required' => '内容必填',
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
                $res = $file->storeAs('images/announcement',$file_name);
                 // 接收数据
                $data = $request->except(['_token']);
                // 实例化模型,赋值
                $Announcement = new Announcement;
                $Announcement->title = $data['title'];
                $Announcement->auth = $data['auth'];
                $Announcement->href = $data['href'];
                $Announcement->logo = $res;
                $Announcement->content = $data['content'];
            // 判断添加是否成功
            if($Announcement->save()){
                 return redirect('admin/announcement')->with('success','添加成功');
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
        $data = Announcement::find($id);
       // dd($data);
        return view('admin.announcement.edit',['data'=>$data]);
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
        $data = $request->except(['_token','_method']);
        // dd($data);
        
        $Announcement =Announcement::find($id);
        $Announcement->title = $data['title'];
        $Announcement->auth = $data['auth'];
        $Announcement->href = $data['href'];
        $Announcement->content = $data['content'];

         // 如果上传了新头像
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->extension();
            $filename = time().rand(1000,9999).'.'.$extension;
            // dump($filename);
            $data = $file->storeAs('images/announcement',$filename);
            // dd($data);
            //dump($res);
            if ($data) {
                $Announcement->logo = $data;
            } else {
               return back()->with('error','修改失败');
            }
        }

        if($Announcement->save()){
             return redirect('admin/announcement')->with('success','修改成功');
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
        // // 删除操作
        // if(Announcement::destroy($id)){
        //        return redirect('admin/announcement')->with('success','删除成功');
        //    }else{
        //      return back()->with('error','删除失败');
        //    }

        $logo = Announcement::find($id)->logo;
        $logo_path = 'uploads/'.$logo;
        $res1 = Announcement::destroy($id);
        $res2 = unlink($logo_path);
        if($res1 && $res2){
            return  redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        }else{
            return  redirect($_SERVER['HTTP_REFERER'])->with('error','删除失败');
        }
		   
		   
    }
}
