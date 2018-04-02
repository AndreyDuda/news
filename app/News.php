<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';

    protected $fillable = [
        'title', 'desc', 'user_id',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


}
