<?php

namespace App;

use Carbon\Carbon;
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
        'name', 'email', 'password','photo_id','profile_id','is_active','profile_id','confirmed','token','facebook_id',
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
   public function bkash(){
        return $this->hasOne('App\Bkash');
    }

    public function isAdmin(){
        if($this->profile->role == "Admin"){
            return true;
        }

        return false;
    }

//    public function isLogin(){
//        if(Auth::id()){
//            return true;
//        }
//
//        return false;
//    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->token = str_random(40);
        });
    }

    /**
     * Confirm the user.
     *
     * @return void
     */
    public function hasVerified()
    {
        $this->verified = true;
        $this->token = null;
        $this->save();
    }
}