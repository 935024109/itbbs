<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signs extends Model
{
     public function userSigns()
    {
        return $this->belongsTo('App\Models\User','uid');
    }
}
