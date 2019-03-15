<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
	// 默认主键
    public $primaryKey = 'uid';
    // 模型限定
    public $table = 'users';
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

    // 设置与签到表的关联
    public function signsinfo()
    {
        return $this->hasOne('App\Models\Signs','uid');
    }

    // 设置用户与回帖表的一对多关联
    public function userReply()
    {
        return $this->hasMany('App\Models\Reply','uid');
    }
}
