<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
//use App\Role;
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
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //UsersRequest
        //  User::create( $request->all());
        if(trim($request->password )==""){
            $input = $request->except('password');

        }else{
            $input = $request->all();

        }

        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['password'] = bcrypt($request->password);
        User::create($input);
//        $user = new User();
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $request->password;
//        $user->role_id = $request->role_id;
//        $user->	is_active = $request->	is_active;
//        $user->	photo_id = $request->	photo_id;
        Session::flash('create_user','User Update_user');

//        $user->save();
        return redirect('/admin/users');

        //  return $request->all();

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
       // $roles = Role::lists('name','id')->all();

        return view('admin.users.edit',compact('user'));
    }




    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        if(trim($request->password )==""){
            $input = $request->except('password');

        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);

        }

        if($user->photo_id !=""){
            unlink(public_path().'/images/'.$user->photo->file);
        }




        if ($file = $request->file('photo_id')){

            if($user->photo_id !=""){
                $photo = Photo::findOrFail($user->photo_id);
                $photo->delete();
            }



            //  $input = $request->all();

            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
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
