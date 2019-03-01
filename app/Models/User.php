<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
	// 默认主键
    public $primaryKey = 'uid';

    	// 开启软删除
	use SoftDeletes;

	// 设置与主贴的关系
	public function post()
    {
        return $this->hasMany('App\Model\Post','uid');
    }
}
