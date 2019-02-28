<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Reply;
use DB;

class Post extends Model
{
    //设置主键
    public $primaryKey = 'pid';

    //跟user建立属于关系
    public function User()
    {
    	return $this->belongsTo('App\Models\User','uid');
    }
    
    //跟forum建立属于关系
    public function Forum()
    {
    	return $this->belongsTo('App\Models\Forum','fid');
    }

    //跟forum建立一对多关系
    public function Reply()
    {
        return $this->hasMany('App\Models\Reply','pid');
    }

     // 统计对应帖子的回复条数
    public function ReplyCount($pid)
    {
        $replyCount = DB::table('replys')->where('pid',$pid)->count();
        return $replyCount;
    }
}
