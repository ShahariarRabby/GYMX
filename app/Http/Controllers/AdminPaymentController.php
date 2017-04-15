<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Card;
use App\Payment;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment = Payment::all();
        return view('admin.payment.payments',compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::pluck('name','id')->all();
        return view('admin.payment.create',compact('user'));

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
        $amount = $request->Credit;
        $debitForm = $request->Debit;
        $Credit = $amount;
        $userPayment = Payment::whereUser_id($request->user_id);
        $DebitSum = $userPayment->sum('Debit');
        $CreditSum = $userPayment->sum('Credit');
        $balance = $Credit + $CreditSum - $DebitSum-$debitForm;
        $request['Balance'] = $balance;
        Payment::create($request->all());
        Session::flash('create', 'User Update_user');
        return redirect('admin/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return redirect('admin/payment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {

       return view('admin.payment.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
            $payment->update($request->all());
        Session::flash('update', 'User Update_user');

        return redirect('admin/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
        $payment->delete();
        Session::flash('delete', 'User Update_user');

        return redirect('admin/payment');

    }

    public function details()
    {
        $bkash = Bkash::whereStatus("Approved")->sum('amount');
         $card  = Card::where('status','!=',null)->sum('amount');
         $amount = $card +$bkash;
         return view('admin.payment.details',compact('bkash','card','amount'));

    }
}
