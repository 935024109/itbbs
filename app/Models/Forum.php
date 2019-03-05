<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //主键约束
    public $primaryKey = 'fid';

    //跟Rost建立一对多关系
    public function Post()
    {
        return $this->hasMany('App\Models\Post','fid');
    }
}
