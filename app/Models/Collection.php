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
}
