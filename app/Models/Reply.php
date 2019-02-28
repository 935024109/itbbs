<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
