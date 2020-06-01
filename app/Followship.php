<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followship extends Model
{
    protected $fillable = ['user1_id', 'user2_id'];

    public function user1(){
        return $this->belongsTo('App\User', 'user1_id', 'id');
    }

    public function user2(){
        return $this->belongsTo('App\User', 'user2_id', 'id');
    }
}
