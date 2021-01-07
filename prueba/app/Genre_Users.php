<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre_Users extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
}
