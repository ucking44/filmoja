<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'tags', 'start_date', 'end_date'];

    public function videos(){
        return $this->hasMany('App\Video');
    }
}
