<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password', 'active', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userActivationCode(){
        return $this->hasOne(ActivationCode::class);
    }

    public function userIsActivated(){
        if($this->active){
            return true;
        }

        return false;
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isUser(){
        if($this->role->id == 1){
            return true;
        }

        return false;
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function videos(){
        return $this->hasMany('App\Video');
    }
}
