<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Http\Requests\ProfileEditReques;
use App\Profile;
use App\User;
use App\Photo;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;
use Illuminate\Support\Facades\Session;

class UsersControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return view('users.index');
        return view('errors.404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('errors.404');
        //
//        $user = Profile::findOrFail(5);
//
//         $users = $user->user->id;
//   return      $users = User::findOrfail($users);

      //  $user = $user->id;
     //   $profile =

   //    echo $profile = DB::table('profiles')->where('role', '=', 'admin' )->id;
//        foreach ($profile as $profile){
//            $users = DB::table('users')->where('profile_id', '=', $profile )->get();
//            echo $users;
//        }

     //  $profile = profile::;
   //return     $profile->user->name;
       // return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileEditReques $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        if($user){

            $dob = $user->profile->dob;

            $today = new DateTime();
            $birthdate = new DateTime($dob);
            $interval = $today->diff($birthdate);
            $age =  $interval->format('%y');




            $H = $user->profile->height;
            $W = $user->profile->weight;
            $h1 = floor($H);
            $i = $H -$h1;
            $i = $i*100;

            $M =($h1 * .3048) +($i * .0254);
            $BMI = 0;
            if ($W !=0)
            {
                $BMI = $W/($M*$M);
            }
            $BMI = number_format($BMI, 2, '.', '');
//            if ($BMI < 18.5){
//               $msg = "" ;
//            }
            /// return $BMI . $H . $W;
            //  return  $IdealWeight =(0.5 * $BMI +11.5)*$M*$M;
            // return $IdealWeight =$BMI * $M*$M;
            //   $Calorie_Needs_per_Day =66.67+(13.75*$W)+(5*$H)-(6.76*$age);

//            $H = $user->profile->height;
//            $W = $user->profile->weight;
//            $BMI = $W/($H*$H);
//            $IdealWeight =(0.5 * $BMI +11.5)*$H*$H;
            //  $Calorie_Needs_per_Day =66.67+(13.75*$W)+(5*$H)-(6.76*$age);
            // return $height.'<br>'.$weight;
            return view('users.userprofile',compact('user','age','BMI'));


        }
        return 10;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $message = Chat::orderBy('updated_at','desc')->get();
        if($id == Auth::id()){
            $user = User::findOrFail($id);
            $profile = Profile::findOrFail($user->profile_id);

            return view('users.edit',compact('user','profile','message'));
        }
        return redirect(url('users/'.Auth::id().'/edit'));
       // return redirect(404);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileEditReques $request, $id)
    {
        $user = User::findOrFail($id);

        $profile = Profile::findOrFail($user->profile_id);



        if(trim($request->password )==""){
            $input = $request->except('password');

        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }





        if ($file = $request->file('photo_id')){
            if($user->photo_id !=""){
              $unlink =    unlink(public_path().'/images/'.$user->photo->file);
                $photo = Photo::findOrFail($user->photo_id);
                $photo->delete();
            }


            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }


        $user ->update($input);
        $input = $request->except('photo_id');
        $profile->update($input);



        //
//$request->all();
        //         $user = User::findOrFail($id);
//        $profile= Profile::findOrFail($user->profile_id);
//
//
//            $input = $request->all();
//
//            $input['password'] = bcrypt($request->password);
//             if ($file = $request->file('photo_id')){
//            if($user->photo_id !=""){
//               unlink(public_path().'/images/'.$user->photo->file);
//                $photo = Photo::findOrFail($user->photo_id);
//                $photo->delete();
//            }
//
//
//
//            //  $input = $request->all();
//
//            $name = time() . $file->getClientOriginalName();
//            $file->move('images',$name);
//            $photo=Photo::create(['file'=>$name]);
//            $input['photo_id'] = $photo->id;
//        }
//
//         $user ->update($input);
//         $profile ->update($input);
        Session::flash('update', 'User Update_user');

        return redirect('/profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return view('errors.404');
    }
}
