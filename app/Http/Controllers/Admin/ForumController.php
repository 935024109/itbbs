<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use DB;
class ForumController extends Controller
{
    // 获取模板分类数据
    public static function getForumCates($count=5, $search=0)
    {   
        
        //根据条件获取分类数据
        $forums_cates = Forum::where('fname','like','%'. $search.'%')->select('*',DB::raw("concat(path,',',fid) as paths"))->paginate($count);
        foreach ($forums_cates as $key => $value) {
            //统计path中 , 出现时 次数
            $sum  = substr_count($value->path, ',');
            //重复使用一个字符串拼接字符串
            $forums_cates[$key]->fname = str_repeat('|----', $sum).$value->fname;
        }
        return $forums_cates;
    }   
    /**
     * 模板分类列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // 获取每页的条数, 搜索的关键字
         $count = $request->input('count',5);
        $search = $request->input('search','');
        
        //加载视图,分配数据
        return view('admin.forum.index',['request'=>$request->all(),'forums'=>self::getForumCates($count,$search)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 0)
    {
        //加载视图
        return view('admin.forum.create',['forums'=>self::getForumCates(),'fid'=>$id]);
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
            'fname' => 'required',
            'pid' => 'required',
        ],[
            'fname.required' => '分类名必填',
            'pid.required' => '所属分类必填',
        ]);
        //获取数据
        $fname = $request->input('fname');

        $forum_name = Forum::where('fname',$fname)->first();
        //判断分类名称是否重复
        if ($forum_name) {
            return back()->with('error', '分类名称已存在,不可重复添加!');
        }
        $pid = $request->input('pid');
        
        //判断是否为顶级分类
        if ($pid == 0) {
            $path = 0;
        }else{
           $path = Forum::select('path')->find($pid)->path; 
           $path = $path.','.$pid;
        }
        
        //实例化模型,赋值
        $forum = new Forum;
        $forum->pid = $pid;
        $forum->fname = $fname;
        $forum->path = $path;
        $forum->status = 1;
        // 执行添加
        $res = $forum->save();
         //判断返回值,做出响应
        if($res){
            return redirect('admin/forum')->with('success', '添加成功');
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
        //加载视图,分配数据
        $forum = Forum::find($id);
        return view('admin.forum.edit',['forum'=>$forum]);
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
        $forum_data = $request -> except('_token','_method');
        $forum = Forum::find($id);
        $forum->fname = $forum_data['fname'];
        $forum->status = $forum_data['status'];
        $res = $forum->save();
        //判断返回值,做出响应
        if($res){
            return redirect('admin/forum')->with('success', '修改成功');
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
        //根据id查询分类下是否有子分类
        $forum_cates = Forum::where('pid',$id)->first();
        //判断是否可以删除
        if ($forum_cates) {
             return back()->with('error', '此分类下有子分类,不能删除');
        }
        //执行删除
        if(Forum::destroy($id)){
            return redirect('admin/forum')->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
        }
    }

}
