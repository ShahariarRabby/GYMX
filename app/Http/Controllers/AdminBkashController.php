<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminBkashController extends Controller
{

    public function index()
    {
        $bkash = Bkash::all();
        return view('admin.payment.bkash.index', compact('bkash'));
    }










    public function edit($id)
    {
        $bkash = Bkash::findOrFail($id);

        return view('admin.payment.bkash.edit', compact('bkash'));
    }


    public function update(Request $request, $id)
    {


        $bkash = Bkash::findOrFail($id);
         $amountP = $bkash->amount;
        $input = $request->all();
        $amount = $bkash->amount;
        $bkash->update($input);
        $check = $input['status'];
        if ($check == 'Approved') {
        $test1 = Payment::whereBkash_id($id)->get();

            $test = 0;

            foreach ($test1 as $test) {
                $test = $test->id;
            }

            $test3 = Payment::find($test);
            $amount=$request['amount'] ;


                $request['Credit'] = $amount;
        //    return $amount;
            $amountu = $request->all();

            if ($test3){
                $test3->update($amountu);

                $test3 = Payment::find($test);
               $amount=$test3->Credit ;
                $Credit = $amount;
                $userPayment = Payment::whereUser_id($bkash->user->id);

                $DebitSum = $userPayment->sum('Debit');
                 $CreditSum = $userPayment->sum('Credit');
                $balance = $CreditSum - $DebitSum;
                $request['Balance'] = $balance;
                $amountu = $request->all();

                $test3->update($amountu);
            }

            if ($test == null) {
                $Credit = $amount;
                $userPayment = Payment::whereUser_id($bkash->user->id);
                $DebitSum = $userPayment->sum('Debit');
                $CreditSum = $userPayment->sum('Credit');
                $balance = $Credit + $CreditSum - $DebitSum;
                $Credits = Payment::create([
                    'Credit' => $Credit,
                    'user_id' => $bkash->user->id,
                    'Balance' => $balance,
                    'bkash_id' => $id,
                    'Type' => 'Bkash',
                ]);
            }
        } else {
            $test = Payment::whereBkash_id($id);
            if ($test) {
                $test->delete();
            }
        }
        Session::flash('update', 'User Update_user');


        return redirect('/admin/bkash');


    }


    public function destroy($id)
    {

        $bkash = Bkash::findOrFail($id)->delete();
        $test1 = Payment::whereBkash_id($id)->delete();
//        $test = 0;
//
//        foreach ($test1 as $test) {
//            $test =   $test->id->dele;
//        }
//
//        $test = Payment::find($test);
//    }
        Session::flash('delete', 'User Update_user');
        return redirect('/admin/bkash');
    }
}