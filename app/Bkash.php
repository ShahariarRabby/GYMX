<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkash extends Model
{
    //
    protected $fillable = [
        'user_id',
        'amount',
        'phone',
        't_id',
        'status',


    ];


    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
