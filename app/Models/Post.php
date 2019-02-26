<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
}
