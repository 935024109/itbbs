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
    public function replyUser()
    {
    	return $this->belongsTo('App\Models\User','uid');
    }

    //跟post建立属于关系
    public function Post()
    {
    	return $this->belongsTo('App\Models\Post','pid');
    }

    //查看被回复的用户资料
    public function Reply_User($rid)
    {
    	// 先查询被回复的人的id 在通过id反向查找
		$reply = Reply::find($rid);
		if(empty($reply)){
			return '该楼层已删除';
		}
		$uid = $reply->uid;
		$res = User::find($uid);
		return $res;
    }
}
