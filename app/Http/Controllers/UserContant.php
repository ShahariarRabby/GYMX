<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Card;
use App\Payment;
use App\Task;
use App\User;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserContant extends Controller
{
    //
    public function index(){
        $user = Auth::User();
        return view('users.index',compact('user'));
    }

        public function task(){
       $task = Task::all();

      // $date = Carbon::create($date);
   ///  return  $date = $date->addDays(29);
            return view('users.tasks',compact('task'));
    }

        public function profile(){

            $user = Auth::User();

            $dob = $user->profile->dob;

            $today = new DateTime();
            $birthdate = new DateTime($dob);
            $interval = $today->diff($birthdate);
            $age =  $interval->format('%y');




            $H = $user->profile->height;
            $W = $user->profile->weight;
            $h1 = floor($H);
            $i = $H -$h1;

            $M =($h1 * .3048) +($i * .254);

            $BMI = $W/($M*$M);
            $BMI = number_format($BMI, 2, '.', '');
//            if ($BMI < 18.5){
//               $msg = "" ;
//            }
           /// return $BMI . $H . $W;
        //  return  $IdealWeight =(0.5 * $BMI +11.5)*$M*$M;
         // return $IdealWeight =$BMI * $M*$M;
         //   $Calorie_Needs_per_Day =66.67+(13.75*$W)+(5*$H)-(6.76*$age);

//            $H = $user->profile->height;
//            $W = $user->profile->weight;
//            $BMI = $W/($H*$H);
//            $IdealWeight =(0.5 * $BMI +11.5)*$H*$H;
          //  $Calorie_Needs_per_Day =66.67+(13.75*$W)+(5*$H)-(6.76*$age);
           // return $height.'<br>'.$weight;
      return view('users.profile',compact('user','age','BMI','msg'));
    }






        public function members(){
            $members = User::all();
        return view('users.members',compact('members'));
    }

           public function payment(){
     $paymentTable = Payment::orderBy('created_at','desc')->whereUser_id(Auth::id())->get();
          $balance =   $paymentTable ->pluck('Balance')->first();


        return view('users.payment',compact('balance','paymentTable'));
    }

    public function payments(Request $request){

        $number =  $request->number;
        $check = Card::find($number);

        if ($check){
            $Credit = $check->amount;
            $check->status = Auth::id();
            $check->save();
             $userPayment = Payment::whereUser_id(Auth::id());
            $DebitSum=   $userPayment ->sum('Debit');
            $CreditSum=   $userPayment ->sum('Credit');
            $balance = $Credit +$CreditSum   - $DebitSum;

            $Credits= Payment::create([
                'Credit' =>$Credit,
                'user_id' => Auth::id(),
                'Balance' => $balance,
                'Type' => 'Card',
            ]);
            Session::flash('cardok','Payment Card');
//            return view('users.payment',compact($balance));
return redirect('/payment');

        }else{
            Session::flash('invalid','Payment Card');
            return redirect('/payment');

        }
   //  return   $count = Card::whereAmount(350)->sum('amount');
//       $count = Card::whereStatus(5424);
//     return  $count-> sum('amount');
    }

    public function paymentsbKash(Request $request)
    {
            $bikash =  $request->all();
            $bikash['user_id'] = Auth::id();
             Bkash::create($bikash);
            Session::flash('bkash','Payment');
             return redirect('/payment');




    }


}
