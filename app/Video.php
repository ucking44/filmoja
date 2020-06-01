<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{


    protected $fillable = [

        'user_id',
        'category_id',
        'video'

    ];
    public function user(){
        return $this->belongsTo('App\User');
    }


    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    }
}
