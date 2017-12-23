<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    public function field()
    {
        return $this->belongsToMany('App\User', 'user_bill', 'bill_id', 'user_id');
    }

}
