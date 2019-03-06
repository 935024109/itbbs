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
        return $this->hasMany('App\Models\Post','uid');
    }

    // 设置与收藏贴的关系
    public function collection()
    {
    	return $this->hasMany('App\Models\Collection','uid');
    }
}
