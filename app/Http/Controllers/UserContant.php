<?php

namespace App\Http\Controllers;

use App\Bkash;
use App\Card;
use App\Chat;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserContant extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|int
     */
    public function index(){
        $user = Auth::User();

        $userPayment = Payment::whereUser_id(Auth::id());
        $DebitSum=   $userPayment ->sum('Debit');
        $CreditSum=   $userPayment ->sum('Credit');
        $balance =$CreditSum   - $DebitSum;


        $discontinued = $user->profile->discontinued;
//        $discontinued=  Carbon::parse($discontinued);
//        $now =Carbon::now();
//      return  $discontinued = $discontinued->diffInMinutes($now);




//
//        $date = new DateTime;
//        $date->modify('+30 days');
//     return   $formatted_date = $date->format('Y-m-d H:i:s');
//
//        $result = DB::table('db_user')->where('id_user','=',Session::get('id_user'))->where('last_activity','>=',$formatted_date)->get();
//
//


        return view('users.index',compact('user','balance'));
    }

        public function task(){
       $task = Task::all();

      // $date = Carbon::create($date);
   ///  return  $date = $date->addDays(29);
            return view('users.tasks',compact('task'));
    }

        public function profile(){

            $message = Chat::orderBy('updated_at','desc')->get();

            $user = Auth::User();

            $dob = $user->profile->dob;

            $today = new DateTime();
            $birthdate = new DateTime($dob);
            $interval = $today->diff($birthdate);
            $age =  $interval->format('%y');




            $H = $user->profile->height;
            $W = $user->profile->weight;
//            $h1 = floor($H);
//            $i = $H -$h1;
//            $i = $i*100;
//
//            $M =($h1 * .3048) +($i * .0254);
            $BMI = 0;
            if ($W !=0)
            {
             $BMI = $W/($H*$H);
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
      return view('users.profile',compact('user','age','BMI','msg','message'));
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
       $profile = Auth::user()->profile->id;
       $profile = Profile::findOrFail($profile);


        $request['user_id'] = Auth::id();
        $request['is_active'] = "Active";

        $package = Package::findOrFail($input);
        $request['Debit'] = $package->amount;
        $time = $package->time;
        $request['Type'] = 'Enable '.$package->name;
        $userPayment = Payment::whereUser_id(Auth::id());

        $DebitSum = $userPayment->sum('Debit');
        $CreditSum = $userPayment->sum('Credit');
        $balance = $CreditSum - $DebitSum-$package->amount;
        $request['Balance'] = $balance;

        $discontinued = carbon::now()->addDays($time);
        $request['discontinued'] = $discontinued;



        if($balance>=0){
            $profile->update($request->all());

            Auth::user()->is_active = $request->is_active;
            Auth::user()->save();

            Payment::create($request->all());

            Session::flash('packagedone','Payment');
            return redirect('/payment');
        }else{
            Session::flash('packageFail','packagecng');
            return redirect('/payment');
        }




    }




    public  function chat(Request $request){
        $request['name']=Auth::user()->name;
        $message =  $request->all();
       Chat::create($message);
        return redirect('/profile#chat');

    }


}
