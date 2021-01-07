<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];
    public function genre_users()
    {
        return $this->hasMany('App\Genre_User');
    }
    public function movies()
    {
        return $this->belongsTo('App\Movie');
    }
}
