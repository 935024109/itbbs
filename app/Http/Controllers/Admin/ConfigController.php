<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use DB;
class ConfigController extends Controller
{
    public static function getConfig()
    {
         $data_index = Config::select('*',DB::raw("concat(path,',',cid) as paths"))->orderBy('paths','asc')->get();

        foreach($data_index as $k => $v){
            // 统计path中 , 出现的次数
            $n = substr_count($v->path,',');
            // 重复使用一个字符串
            $data_index[$k]->cname = str_repeat('|---',$n).$v->cname;
        }
        return $data_index;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data_index = Config::all();
        // 搜索关键字
        $search = $request->input('search','');
        // 搜索条数
        $count = $request->input('count','5');
        // 获取数据库值
        $data = Config::where('cname','like','%'.$search.'%')->paginate($count);
        // 加载视图
        return view('admin.config.index',['data_index'=>self::getConfig(),'data'=>$data,'count'=>$count,'request'=>$request->all()]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_create = Config::all();
        // 加载视图
        return view('admin.config.create',['data_create'=>self::getConfig()]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 接收数据
        $data =$request->except(['_token']);
        // 处理分类路径
        // 顶级分类
        if($data['pid'] == 0){
            $data['path'] = 0;
        }else{
            //获取父级分类的信息
            $parent_data = Config::find($data['pid']);
            // 获取分级飞鸟类的 path,id
            $data['path'] = $parent_data->path.','.$parent_data->cid;
        }

        // 赋值
        $config = new Config;
        $config->cname = $data['cname'];
        $config->pid = $data['pid'];
        $config->path = $data['path'];
       
        // 执行添加到数据库
        if($config->save()){
            return redirect('admin/config')->with('success','添加成功');
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
        // 接受修改后的表单数据
        $data = $request->except(['_token','_method']);
        // 根据id查询模型数据
        $config = Config::find($id);
        // 赋值
        $config->cname = $data['cname'];
        // 判断修改条件
       if($config->save()){
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
        //检查分类下是否有子分类
        $child_data = Config::where('pid',$id)->first();
        if($child_data){
            return back()->with('error','当前分类下有链接.不能删除');
        }
         if(Config::destroy($id)){
            return redirect('admin/config')->with('success','删除成功');
        }else{
            return  redirect($_SERVER['HTTP_REFERER'])->with('error','删除失败');
        }
    }
}
