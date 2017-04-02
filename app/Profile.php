<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'role', 'photo_id', 'package_id','reputation_id',
        'recharge_id','gender','height', 'weight', 'created_at','updated_at',
        'facebook','bloodGroup','phone','bio','dob','discontinued',
    ];



    public function user(){
        return $this->hasOne('App\User');
    }

    public function age() {
        return $this->dob->diffInYears(\Carbon::now());
    }

    public function package(){
        return $this->belongsTo('App\Package','package_id');
    }

}


