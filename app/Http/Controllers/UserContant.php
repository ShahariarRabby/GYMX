<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserContant extends Controller
{
    //
    public function index(){
        $user = Auth::User();
        return view('users.index',compact('user'));
    }

        public function task(){
        return view('users.tasks');
    }

        public function profile(){
            $user = Auth::User();

            $H = $user->profile->height;
            $W = $user->profile->weight;
            $BMI = $W/($H*$H);
            $IdealWeight =(0.5 * $BMI +11.5)*$H*$H;
          //  $Calorie_Needs_per_Day =66.67+(13.75*$W)+(5*$H)-(6.76*$age);
           // return $height.'<br>'.$weight;
        return view('users.profile',compact('user'));
    }






        public function members(){
            $members = User::all();
        return view('users.members',compact('members'));
    }

           public function payment(){
        return view('users.payment');
    }



}
