<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $fillable = [
        'text', 'news_id', 'user_id',
    ];

    public function news()
    {
        return $this->belongsTo('App\News');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
