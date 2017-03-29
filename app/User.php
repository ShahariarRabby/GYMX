<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo_id','profile_id','is_active','profile_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function photo(){
        return $this->belongsTo('App\Photo','photo_id');
    }
    public function profile(){
        return $this->belongsTo('App\Profile','profile_id');
    }

    public function qq(){
        if($this->role == "Admin"){
            return true;
        }

        return false;
    }

    public function isAdmin(){
        if($this->id == Auth::id()){
            return true;
        }

        return false;
    }

}