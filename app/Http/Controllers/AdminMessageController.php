<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMessageController extends Controller
{

    public function index()
    {
        //
        $message = Chat::orderBy('updated_at','desc')->get();
        return view('admin.chat.index',compact('message'));
    }


    public function store(Request $request)
    {
        $request['name']='Admin';
        $message =  $request->all();
        Chat::create($message);
        //Session::flash('create', 'User Update_user');
        return redirect('/admin/chat');
    }


    public function destroy($id)
    {
       Chat::findOrFail($id)->delete();
        Session::flash('delete', 'User Update_user');
       return redirect('admin/chat');
    }
}
