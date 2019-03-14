<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reply;
use App\Models\User;
use App\Models\Post;

class Reply extends Model
{
    //设置主键
    public $primaryKey = 'rid';

    //设置表名
    public $table = 'replys';


    //跟user建立属于关系
    public function User()
    {
    	return $this->belongsTo('App\Models\User','uid');
    }

    //查看被回复的用户资料
    public function Reply_User($rid)
    {
    	// 先查询被回复的人的id 在通过id反向查找
		$reply = Reply::find($rid)->uid;
		return User::find($reply);
    }


      //查看被主贴的资料
    public function Reply_Post($rid)
    {
    	// 先查询被回复的人的id 在通过id反向查找
		$reply = Reply::find($rid)->pid;
		return Post::find($reply);
    }
}
