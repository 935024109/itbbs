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
      
        // $id = session('id');
        // 获取登陆用户信息     
        if(session('id')){
            $uid = session('id');
            $user = User::find(session('id'));
              $signs = new Signs;
            //判断是否为新用户
            if($user ->score == 0){
                // echo 111;
                $signs -> uid = $user -> uid;
                $signs -> nickname = $user -> nickname;
                $signs -> sign_time = date('Y-m-d',time());
                $sign_count = $signs -> sign_count;
                $sign_count = $sign_count += 1;
                $signs->sign_count = $sign_count;
                $res1 = $signs->save();
                // dump($res1);
                $score = $user->score;
                // dump($score);
                $score = $score = 20;
                // dump($score);
                $user -> score = $score;
                $res2 = $user -> save();
                if ($res1 && $res2) {
                    return redirect("/home/signs/list")->with('success','');
                }else{
                    return back()->with('error','签到失败');
                }
            }else {

                $id = $user->uid;

                //查询用户签到信息
                $signs = Signs::where('uid',$id)->first();

                // dump($signs);
                // 获取上次签到时间
                $last_time = $signs -> updated_at;
                $last_time = json_encode($last_time);
                $a = json_decode($last_time,true);
                $last_time = $a['date'];
                $last_time = substr($last_time,0,10);
                // dump($last_time);
                $yesterday = date('Y-m-d',strtotime('-1 day'));
                // dd($yesterday);
                // 判断未签到
                // 如果上次签到时间等于昨天 或者为空
                if($last_time == $yesterday){
                    $signs -> uid = $user -> uid;
                    $signs -> nickname = $user -> nickname;
                    $signs -> sign_time = date('Y-m-d',time());
                    $signs_count = $signs->sign_count;
                    // dd($signs_count);
                    $signs_count = $signs_count + 1;
                    $signs->sign_count = $signs_count;
                    $signs->last_time = $signs->updated_at;
                    $res1 = $signs -> save();
                    // dump($res1);
                    $score = $user -> score;
                    // dump($score);
                    $res2 = $user->save();
           

                    if($res1 && $res2){
                        return redirect('/home/signs/list')->with('success','签到成功');
                    }else{
                        return back()->with('error','签到失败');
                    }

                } else if ($last_time == date('Y-m-d')) {
                   
                    return redirect('/home/signs/error');
             
                }

                }
       } 
        
        
    }

    public function list()
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
