<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

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
        return redirect('/admin/chat');
    }


    public function destroy($id)
    {
       Chat::findOrFail($id)->delete();
       return redirect('admin/chat');
    }
}
