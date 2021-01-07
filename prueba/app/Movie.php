<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class Movie extends Model
{
    protected $fillable = ['name', 'code','year','available'];

    public function genre()
    {
        return $this->hasMany('App\Genre');
    }

}
