<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\card;
use Illuminate\Http\Request;

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

        $card = Bkash::all();
        return $card;
        return view('admin.payment.card.index',compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        return view('admin.payment.card.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//      Card::create($request->all());
//      return redirect('admin/card');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\card  $card
//     * @return \Illuminate\Http\Response
//     */
//    public function show(card $card)
//    {
//        return redirect('admin/card');
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\card  $card
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(card $card)
//    {
//       $cards = Card::findOrFail($card);
//       return view('admin.payment.card.edit',compact('cards'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\card  $card
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, card $card)
//    {
//        //
//        Card::findOrFail($card)->update($request->all());
//        return redirect('admin/card');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\card  $card
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(card $card)
//    {
//        //
//        Card::findOrFail($card)->delete();
//        return redirect('admin/card');
//    }
}
