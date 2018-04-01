<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';

    protected $fillable = [
        'title', 'desc', 'id_user',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }

}
