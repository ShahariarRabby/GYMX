<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
//use App\Http\Requests\Request;
use App\Profile;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password') + ['confirmed'=> true];
    }


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
//    public function handleProviderCallback()
//    {
//        $user = Socialite::driver('facebook')->stateless()->user();
//
//
//        // $user->token;
//        return $user->getEmail();
//    }

    public function handleProviderCallback()
    {
        try{
       $user = Socialite::driver('facebook')->stateless()->user()->user;
//            return   dd($user['id']);
        } catch (Exception $e){
            return redirect('auth/facebook');
        }
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser,true);
        return redirect('/admin');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = User::where('facebook_id',$facebookUser['id'])->first();
        if ($authUser){
            return $authUser;
        }
        $discontinued = carbon::now()->addDays(3);



        $profile= Profile::create([
            'role' =>'User',
            'package_id' =>'1',
            'discontinued'=>$discontinued,
            'gender'=>$facebookUser['gender'],
        ]);
        $facebookUser['profile_id'] = $profile->id;
        return User::create([
           'name' => $facebookUser['name'],
            'email' => $facebookUser['email'],
            'facebook_id' => $facebookUser['id'],
            'confirmed' => $facebookUser['verified'],
            'token' =>null,
            'profile_id' => $facebookUser['profile_id'],
        ]);

    }

}