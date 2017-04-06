<?php

namespace App\Http\Controllers;



use App\Bkash;

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
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminCardControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $card = Card::all();
        return view('admin.payment.Card.index',compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.Card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Card::create($request->all());
      Session::flash('create', 'User Update_user');
      return redirect('admin/card');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(card $card)
    {
       $cards = Card::findOrFail($card);
       return view('admin.payment.Card.edit',compact('cards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, card $card)
    {
        //
        Card::findOrFail($card)->update($request->all());
        Session::flash('update', 'User Update_user');
        return redirect('admin/card');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(card $card)
    {
        //
        Card::findOrFail($card)->delete();
        Session::flash('delete', 'User Update_user');
        return redirect('admin/card');
    }
}
