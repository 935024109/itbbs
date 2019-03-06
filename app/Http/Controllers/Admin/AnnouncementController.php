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
        // 接受表单传过来的数据
        $data = $request->except(['_token']);

        // 实例化模型,赋值
        $Announcement = new Announcement;
        $Announcement->title = $data['title'];
        $Announcement->auth = $data['auth'];
        $Announcement->content = $data['content'];
        // 判断添加是否成功
        if($Announcement->save()){
             return redirect('admin/announcement')->with('success','添加成功');
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
        $Announcement->content = $data['content'];
        // 判断返回值,做出响应
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
        // 删除操作
        if(Announcement::destroy($id)){
               return redirect('admin/announcement')->with('success','删除成功');
           }else{
             return back()->with('error','删除失败');
           }
		   
		   
    }
}
