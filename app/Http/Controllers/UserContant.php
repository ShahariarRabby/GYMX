<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Card;
use App\Package;
use App\Payment;
use App\Profile;
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
            $BMI = 0;
if ($W !=0)
{
    $BMI = $W/($M*$M);

}
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
               $paymentTableFind = Payment::whereUser_id(Auth::id());
               $paymentTable = $paymentTableFind->orderBy('created_at','desc')->get();
             //  $balance =   $paymentTable ->pluck('Balance')->first();

               $userPayment = Payment::whereUser_id(Auth::id());
               $DebitSum=   $userPayment ->sum('Debit');
               $CreditSum=   $userPayment ->sum('Credit');
               $balance =$CreditSum   - $DebitSum;
               $package = Package::pluck('name','id')->all();


        return view('users.payment',compact('balance','paymentTable','package'));
    }

    public function payments(Request $request){

        $number =  $request->number;
        $check = Card::find($number);

        if ($check){
            if ($check->status==""){

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
                    'card_id' => $number,
                ]);
                Session::flash('cardok','Payment Card');
//            return view('users.payment',compact($balance));
                return redirect('/payment');
            }

            Session::flash('invalid','Payment Card');
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
        $profile =  Bkash::create($bikash);
        $data['bkash_id'] = $profile->id;
             Payment::create(
                 [
                     'user_id' => Auth::id(),
                     'Type' => 'Bkash',
                     'bkash_id' => $data['bkash_id'],
                 ]
             );
            Session::flash('bkash','Payment');
             return redirect('/payment');
    }


    public function enablePackage(Request $request)
    {
        $input =  $request->get('package_id');
        $request['user_id'] = Auth::id();
        $package = Package::findOrFail($input);
        $request['Debit'] = $package->amount;
        $request['Type'] = 'Enable '.$package->name;
        $userPayment = Payment::whereUser_id(Auth::id());

        $DebitSum = $userPayment->sum('Debit');
        $CreditSum = $userPayment->sum('Credit');
        $balance = $CreditSum - $DebitSum-$package->amount;
        $request['Balance'] = $balance;
        if($balance>=0){
            Payment::create($request->all());
            Session::flash('packagedone','Payment');
            return redirect('/payment');
        }else{
            Session::flash('packageFail','packagecng');
            return redirect('/payment');
        }




    }


}
