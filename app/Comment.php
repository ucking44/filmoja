<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'video_id',
        'author',
        'email',
        'body',
        'photo',
        'is_active'
    ];

    public function replies(){
        return $this->hasMany('App\CommentReply');
    }

    public function video(){
        return $this->belongsTo('App\Video');
    }
}
