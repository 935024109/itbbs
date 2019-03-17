<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\user;
use Hash;
use App\Http\Requests\UserStoreBlogPost;
use DB;
use App\Models\post;
use App\Models\reply;
class UserController extends Controller
{	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dump(session('flag'))
        // 所有条数
        $count = $request->input('count','5');

        // 搜索条件
        $search = $request->input('search','');

        $request = $request->all();
        // dump($request);
        // 查询所有数据
        $user = new User;
        $data = $user->where('uname','like','%'.$search.'%')->paginate($count);
        // dump($data);
        return view('admin/user/index',['data'=>$data,'search'=>$search,'count'=>$count,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreBlogPost $request)
    {
        /*
            开启事务   DB::beginTransaction();
            提交事务    DB::commit()
            回滚事务   DB::rollBack()

         */
        DB::beginTransaction();
        $data = $request->except('_token','repwd');
        //dd($data);

        // 如果文件存在
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->extension();
            $filename = time().rand(1000,9999).'.'.$extension;
            // dump($filename);
            $res = $file->storeAs('images/user',$filename);
            //dump($res);
        } else {
            $res = 'images/user/15512302229854.jpeg';
        }

        // 将所获得的所有数据保存到数据库
        $user = new User;
        $user->uname = $data['uname'];
        $user->nickname = $data['nickname'];
        $user->pwd = Hash::make($data['pwd']);
        $user->email = $data['email'];
        $user->auth = $data['auth'];
        $user->photo = $res;
        $user->phone = $data['phone'];
        $user->last_time = date('Y-m-d H:i:s',time());
        $res = $user->save();
        
        if ($res) {
            DB::commit();
            return redirect('/admin/user')->with('success','添加成功');
        } else {
            DB::rollBack();
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
        //if ($id == session('id') ){
            // 根据id查询
        $user = User::find($id);
        // dd($user);
        return view('admin/user/edit',['user'=>$user]);
        //} else {
           // return redirect('admin/user')->with('error','对不起 无法修改其他人信息');
        //}
        
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

        $data = $request->except('_token','_method','uname');
        //dd($data);
        // 修改信息
        $user = User::find($id);
        $user->nickname = $data['nickname'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->auth = $data['auth'];
        // 如果上传了新头像
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->extension();
            $filename = time().rand(1000,9999).'.'.$extension;
            // dump($filename);
            $res = $file->storeAs('images',$filename);
            //dump($res);
            if ($res) {
                $user->photo = $res;
            } else {
                $user->photo = $user->photo;
            }

        }

        $res = $user->save();
        if ($res){
            return redirect('/admin/user')->with('success','修改成功');
        } else {
            return redirect($_SERVER['HTTP_REFERER'])->with('error','修改失败');
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
        // 根据id查询用户
        $user = User::find($id);
        // dd($res);

        // 根据id查询主贴
        $post = Post::where('uid',$user->uid)->get();
        foreach($post as $k=>$v){
            //根据主贴id查询回帖
            $reply = Reply::where('pid',$v->pid)->get();
            if (!empty($reply)) {
                Reply::where('pid',$v->pid)->delete();
            }
        }
        Post::where('uid',$user->uid)->delete();
        $res = $user->forceDelete($id);
        
        //dd($_SERVER['HTTP_REFERER']);
        if ($res){
            return redirect($_SERVER['HTTP_REFERER'])->with('success','删除成功');
        } else {
            return redirect($_SERVER['HTTP_REFERER'])->with('error','删除失败');
        }
    }

    // 小黑屋主页面
    public function black()
    {
    	$data = User::onlyTrashed()->get();;
    	//dump($data);
    	return view('/admin/user/black',['data'=>$data]);
    }

    // 禁止发言
    public function stoptalk($id)
    {
    	$data = User::find($id);
    	$data->black = 1;
    	$res = $data->save();
    	$res2 = User::destroy([$id]);
    	if ($res && $res2){
    		return redirect('admin/user')->with('success','成功加入小黑屋');
    	} else {
    		return redirect('admin/user')->with('error','失败加入小黑屋');
    	}
    }

    // 禁止访问
    public function stopin($id)
    {
    	$data = User::find($id);
    	$data->black = 2;
    	$res = $data->save();
    	$res2 = User::destroy([$id]);
    	if ($res && $res2){
    		return redirect('admin/user')->with('success','成功加入小黑屋');
    	} else {
    		return redirect('admin/user')->with('error','失败加入小黑屋');
    	}
    }

    // 刑满释放
    public function freedom($id)
    {
    	$res = User::withTrashed()
            ->where('uid', $id)
            ->restore();
        if ($res){
        	return redirect('admin/user')->with('success','释放成功');
        } else {
        	return back()->with('error','释放失败');
        }
    }
}
