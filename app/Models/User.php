<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // 默认表
    public $table = 'users';

    // 默认主键
    public $primaryKey = 'uid';
}
