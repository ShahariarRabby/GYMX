<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserContant extends Controller
{
    //
    public function index(){
        return view('users.index');
    }

        public function task(){
        return view('users.tasks');
    }

        public function profile(){
            $user = Auth::User();
        return view('users.profile',compact('user'));
    }

        public function members(){
        return view('users.members');
    }

           public function payment(){
        return view('users.payment');
    }



}
