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
}
