<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Signs;
class SignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //判断用户是否登录
        if (!session('flag')) {
            return redirect('home/signs/login')->with('error','');
        }
        //session(['id'=>1]);
        return view('home.signs.signs_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {   
        // 获取登陆用户信息  
        $uid = session('id');
        $user = User::find($uid);  

        // 判断登陆 次数
        if($user){            
            // 实例化签到对象
            $signs = new Signs;
            //判断是否为新用户
            if($user ->score == 100){
                // 赋值
                $signs -> uid = $uid;
                $signs -> nickname = $user -> nickname;
                $signs -> sign_time = date('Y-m-d',time());
                $signs -> last_time = date('Y-m-d',time());
                $signs->sign_count = $signs -> sign_count += 1;
                $res1 = $signs->save();
                
                // 用户增加积分
                $user -> score =  $user->score += 20;
                $res2 = $user -> save();
                if ($res1 && $res2) {
                    return redirect("/home/signs/list/$uid")->with('success','签到成功');
                }else{
                    return back()->with('error','签到失败');
                }
            }else {

                // $id = $user->uid;

                //查询用户签到信息
                $signs = Signs::where('uid',$uid)->first();

                // dump($signs);
                // 获取上次签到时间
                $last_time = $signs -> last_time;
                $last_time = json_encode($last_time);
                $last_time = json_decode($last_time,true);
                $last_time = substr($last_time,0,10);
                
                $yesterday = strtotime('-1 day');
               
                // 判断未签到
                // 如果上次签到时间等于昨天 或者为空
                if(strtotime($last_time) <= $yesterday){
                    $signs -> uid = $user -> uid;
                    $signs -> nickname = $user -> nickname;
                    $signs -> sign_time = date('Y-m-d',time());
                    $signs_count = $signs->sign_count;
                    
                    $signs_count = $signs_count + 1;
                    $signs->sign_count = $signs_count;
                    $signs->last_time = $signs->updated_at;
                    $res1 = $signs -> save();
                   
                    $score = $user -> score += 20;
                   
                    $res2 = $user->save();
           

                    if($res1 && $res2){
                        return redirect("/home/signs/list/$uid")->with('success','签到成功');
                    }else{
                        return back()->with('error','签到失败');
                    }

                } else {
                   
                    return redirect('/home/signs/error');
             
                }

                }
       } 
        
        
    }

    public function list($uid)
    {
        $id = session('id');
        $data = Signs::where('uid',$id)->first();
        $user = User::select('score','photo')->find($id);
        return view('home.signs.signs_index',['data'=>$data,'user'=>$user]); 
    }

    public function error()
    {
        return view('home.signs.error');
    }

    public function login()
    {
        return view('home.signs.login');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
