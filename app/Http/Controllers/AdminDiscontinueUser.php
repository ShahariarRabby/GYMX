<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class AdminDiscontinueUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discontinued = Profile::orderBy('discontinued')->get();
        return view('admin.discontinued.index',compact('discontinued'));


    }
    public function Discontinued()
    {
        $discontinued = User::where('is_active','=','Not Active')->get();
        return view('admin.discontinued.discontinued',compact('discontinued'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discontinued = Profile::findOrFail($id);
        return view('admin.discontinued.edit',compact('discontinued'));
    }

    public function discontinuedEdit($id)
    {
        $discontinued = Profile::findOrFail($id);
        return view('admin.discontinued.edit',compact('discontinued'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $profile = Profile::findOrFail($id);
       $user = User::findOrFail($profile->user->id)->update($request->all());
        Profile::findOrFail($id)->update($request->all());

       return redirect('/admin/discontinue');

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
        return $id;
    }
}
