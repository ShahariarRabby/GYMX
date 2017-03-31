<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
//use App\Role;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $roles = Role::lists('name','id')->all();
        //  return view('admin.users.create',compact('roles'));
        $roles = Profile::pluck('role','id')->all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
//        $role = $request->role_id;
//        Profile::create($role);
        //  $input['profile_id'] = '1';
        //  $roles = 'adm';
        //  $role=Profile::create(['name'=>'1']);
        //  $input['role_id'] = $role->id;

        $profile= Profile::create([
            'role' => $request['role_id'],

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
        User::create($input);

        Session::flash('create_user','User Update_user');
        return redirect('/admin/users');
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
        $user = User::findOrFail($id);
        $roles = Profile::findOrFail($user->profile_id);
         $roles=$roles->role;


        return view('admin.users.edit',compact('user','roles'));
    }




    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        $profile = Profile::findOrFail($user->profile_id);
        $profile->role = $request['role_id'];
        $profile->save();
//         $profile -> update(
//             'role' = $request['role_id'],
//    );

        if(trim($request->password )==""){
            $input = $request->except('password');

        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }





        if ($file = $request->file('photo_id')){


            if($user->photo_id !=""){
                unlink(public_path().'/images/'.$user->photo->file);
                $photo = Photo::findOrFail($user->photo_id);
                $photo->delete();
            }



            //  $input = $request->all();

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
       // $input['profile_id'] = $profile->id;

        $user ->update($input);

        Session::flash('Update_user','User Update_user');


        return redirect('/admin/users');
        //return $request->all();
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
        if($user->photo_id !=""){
            unlink(public_path().'/images/'.$user->photo->file);

            $photo = Photo::findOrFail($user->photo_id);
            $photo->delete();
        }
        $user->delete();
        Session::flash('Delete_user','User Deleted');
        // $user = User::findOrFail($id)->delete();

        return redirect('admin/users');

    }
}

