<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Card;
use App\Chat;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Package;
use App\Payment;
use App\Photo;
//use App\Role;
use App\Profile;
use App\Task;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;
use phpDocumentor\Reflection\Types\Null_;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @Working
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = Package::pluck('name','id')->all();
        $roles = Profile::pluck('role','id')->all();

        return view('admin.users.create',compact('roles','package'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $input =  $request->get('package_id');
        $package = Package::findOrFail($input);
        $time = $package->time;
        $discontinued = carbon::now()->addDays($time);
        $profile= Profile::create([
            'role' => $request['role_id'],
            'package_id' =>$input,
            'discontinued'=>$discontinued,
            'discontinued'=>$discontinued,

        ]);



        if(trim($request->password )==""){
            $input = $request->except('password');
        }else{
            $input = $request->all();
        }
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo= Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['password'] = bcrypt($request->password);
        $input['profile_id'] = $profile->id;
        $input['confirmed'] = 1;
        $input['token'] = " ";
        User::create($input);

        Session::flash('create','User Update_user');
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Profile::findOrFail($user->profile_id);
        $roles=$roles->role;

        $package = Package::pluck('name','id')->all();
        $userPackage = Package::whereId($user->profile->package_id)->pluck('name','id')->all();

        return view('admin.users.edit',compact('user','roles','package','userPackage'));
    }




    public function update(UsersEditRequest $request, $id)
    {
        //

        $user = User::findOrFail($id);

        $profile = Profile::findOrFail($user->profile_id);
        $profile->role = $request['role_id'];


        if ($request['package_id']!=""){
            $profile->package_id = $request['package_id'];
            $package = Package::findOrFail( $profile->package_id);
            $time = $package->time;
            $discontinued = carbon::now()->addDays($time);
            $profile->discontinued = $discontinued;
        }


        if($request['Credit']!=null){
            $Credit=$request['Credit'];
            $userPayment = Payment::whereUser_id($id);
            $DebitSum=   $userPayment ->sum('Debit');
            $CreditSum=   $userPayment ->sum('Credit');
            $balance = $Credit +$CreditSum   - $DebitSum;


            Payment::create(
                [
                    'user_id' => $id,
                    'Type' => 'Admin',
                    'Credit' => $Credit,
                    'Balance' => $balance,
                ]
            );
        }


        $profile->save();


        if(trim($request->password )==""){
            $input = $request->except('password');

        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }





        if ($file = $request->file('photo_id')){
            if($user->photo_id !=""){
                try{
                    unlink(public_path().'/images/'.$user->photo->file);
                }catch (Exception $exception){

                }

                $photo = Photo::findOrFail($user->photo_id);
                $photo->delete();
            }

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }


        $user ->update($input);

        Session::flash('update','User Update_user');


        return redirect('/admin/users');
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
        $user = User::findOrFail($id);
        $profile = $user->profile_id;
        $profile = Profile::findOrFail($profile);
        if($user->photo_id !=""){
           unlink(public_path().'/images/'.$user->photo->file);

            $photo = Photo::findOrFail($user->photo_id);
            $photo->delete();
        }
        $user->delete();
        $profile->delete();
        Session::flash('delete','User Deleted');

        return redirect('admin/users');

    }




    public function details()
    {
        $user = User::whereIs_active('Not Active')->get();
        $user1 = User::whereIs_active('Active')->get();
        $notActive =  count($user);
        $Active =  count($user1);
        $package1 = Profile::wherePackage_id('1')->count();
        $package2 = Profile::wherePackage_id('2')->count();
        $package3 = Profile::wherePackage_id('3')->count();
        $package4 = Profile::wherePackage_id('4')->count();
         $package5 = Profile::wherePackage_id('5')->count();

        return view('admin.users.details',compact('notActive','Active','package1','package2','package3','package5','package4'));

    }





    public function home()
    {
        $user = User::all()->count();
        $package = Package::all()->count();
        $task = Task::all()->count();

        $user1 = User::whereIs_active('Not Active')->get();
        $notActive =  count($user1);
        $user1 = User::whereIs_active('Active')->get();
        $Active =  count($user1);
        $package1 = Profile::wherePackage_id('1')->count();
        $package2 = Profile::wherePackage_id('2')->count();
        $package3 = Profile::wherePackage_id('3')->count();
        $package4 = Profile::wherePackage_id('4')->count();
        $package5 = Profile::wherePackage_id('5')->count();

        $bkash = Bkash::whereStatus("Approved")->sum('amount');
        $card  = Card::where('status','!=',null)->sum('amount');
        $amount = $card +$bkash;
        $card = Card::all()->count();
        $bkash = Bkash::all()->count();
       $chat = Chat::all()->count();
       $payment = Payment::all()->count();

        return view('admin.dashbord',compact('user','amount','payment','package','task','notActive','Active','package1','package2','package3','package4', 'card','bkash','chat'));
    }

    public function blood(Request $request)
    {
        $blood = $request['blood'];
        $userBlood = \App\Profile::Where('bloodGroup','like', '%'.$blood.'%')->get();

        return view('admin.users.blood',compact('userBlood'));

    }

    public function photo(Request  $request)
    {
        $id= $request['id'];
        $user = User::find($id);
        $photos = Photo::Find($user->photo_id);
        $photo['photo_id']=null;
        $user->update($photo);

    }




}

