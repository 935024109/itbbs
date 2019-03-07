<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    // 默认主键
    public $primaryKey = 'cid';

    // 判断收藏
    public function user()
    {
    	return $this->belongsTo('App\Models\User','uid'); 
    }
        // 跟post表建立关联
    public function post()
    {
    	return $this->belongsTo('App\Models\Post','pid'); 
    }


    public function post_user($pid)
    {	
    	$uid = Post::find($pid)->uid;
    	return User::find($uid)->nickname;
    }

}
