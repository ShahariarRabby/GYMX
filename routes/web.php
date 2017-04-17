<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/name', function () {
    $user=Auth::id();


   // $pro = $user->profile->all();
   // return dd($pro);
    return dd($user);
});
Route::get('/mail', function () {


   // $pro = $user->profile->all();
   // return dd($pro);
    return view('emails.pass');
});
Route::get('/maill', function () {


   // $pro = $user->profile->all();
   // return dd($pro);
    return view('emails.pass');
});
Route::get('users/confirm/{token}','Auth\RegisterController@Confirmation')->name('confirmation');

Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();

//Route::get('/home', 'HomeController@index');
//Route::get('/admin', function (){
//    return view('admin.index');
//});
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware'=>'admin'],function (){
    Route::resource('/admin/users','AdminUsersController');
    Route::resource('/admin/bkash','AdminBkashController');
    Route::resource('/admin/payment','AdminPaymentController');
    Route::resource('/admin/package','AdminPackegeController');
    Route::resource('/admin/card','AdminCardControler');
    Route::resource('/admin/task','AdminTaskController');
    Route::resource('/admin/discontinue','AdminDiscontinueUser');
    Route::get('/admin/discontinued','AdminDiscontinueUser@Discontinued');
    Route::get('/admin/payments/details','AdminPaymentController@details');
    Route::get('/admin/user/details','AdminUsersController@details');
    Route::get('/admin','AdminUsersController@home');
    Route::get('/admin/chat','AdminMessageController@index');
    Route::post('admin/chat','AdminMessageController@store');
    Route::delete('/admin/chat/{id}','AdminMessageController@destroy');

    Route::get('/admin/blood','AdminUsersController@blood');
    Route::get('/admin/photo','AdminUsersController@photo');

});

Route::group(['middleware'=>'UserAccess'],function (){
Route::resource('/users','UsersControler');
    ROute::get('/home','UserContant@index');
    ROute::get('/task','UserContant@task');
    ROute::get('/profile','UserContant@profile');
    ROute::get('/members','UserContant@members');
    ROute::get('/payment','UserContant@payment');
    ROute::post('/card','UserContant@payments');
    ROute::post('/package','UserContant@enablePackage');
    ROute::post('/bkash','UserContant@paymentsbKash');
    ROute::post('/chat','UserContant@chat');
    ROute::get('/admins',function () {
        return view('layouts.admin');
    });

    //****************************************
    // fake route
    //****************************************

    ROute::get('/package',function(){
        return redirect('/payment');
    });
    ROute::get('/card',function (){
        return redirect('/payment');
    });
    ROute::get('/bkash',function (){
        return redirect('/payment');
    });

    ROute::get('/xxx',function (){
        return view('home');
    });
//    ROute::get('/dis',function (){
//        return view('users.discontinued');
//    });
});







//Route::get('/admin', function () {
//    return view('admin.users.index');
//});
//Route::get('/admin/users/createe',function (){
//    return view('admin.users.create');
//});

//Route::get('/logout' , 'Auth\LoginController@logout');













