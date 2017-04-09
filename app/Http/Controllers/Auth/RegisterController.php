<?php

namespace App\Http\Controllers\Auth;

use App\Profile;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\ConfirmationAccount;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

    protected function create(array $data)
    {
        $discontinued = carbon::now()->addDays(3);



        $profile= Profile::create([
            'role' =>'User',
            'package_id' =>'1',
            'discontinued'=>$discontinued
        ]);
        $data['profile_id'] = $profile->id;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'profile_id' => $data['profile_id'],
            'password' => bcrypt($data['password']),
        ]);
    }

//    public function register(Request $request)
//    {
//        $this->validator($request->all())->validate();
//
//        event(new Registered($user = $this->create($request->all())));
//
//        Mail::to($user->email)->send(new ConfirmationAccount($user));
//
//        return back()->with('status', 'Please confirm your email address.');
//
//        // $this->guard()->login($user);
//        // return redirect($this->redirectPath());
//    }
//
//    public function confirmEmail($token)
//    {
//        User::whereToken($token)->firstOrFail()->hasVerified();
//
//        return redirect('login')->with('status', 'You are now confirmed. Please login.');
//    }

    protected function register(Request $request){
        $input = $request->all();
        $validator = $this->validator($input);
        if ($validator->passes()){

            $data = $this->create($input)->toArray();
            $data['token'] = str_random(25);
            $user = User::find($data['id']);
            $user->token = $data['token'];
            $user->save();
            Mail::send('emails.confirmation',$data,function ($message) use($data){
                $message->to($data['email']);
                $message->subject('GYMX  Account Confirmation Mail');
            });
            return redirect(route('login'))->with('statusConfirm', 'Please confirm your email address.');
        }
        // return redirect(route('register'))->with('errors',$validator->errors());
        return back()->with('errors',$validator->errors());

    }

    public function Confirmation($token)
    {
//        User::whereToken($token)->firstOrFail()->hasVerified();
//
//        return redirect('login')->with('status', 'You are now confirmed. Please login.');
        $user= User::whereToken($token)->first();

        if (!is_null($user)){
            $user->confirmed = 1;
            $user->token = "";
            $user->save();
            return redirect('login')->with('statusVerified', 'You are now confirmed. Please login.');
        }

        return redirect('login')->with('status', 'Something is wrong');
    }

}
