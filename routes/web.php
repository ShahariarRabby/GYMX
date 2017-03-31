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


Auth::routes();

//Route::get('/home', 'HomeController@index');
//Route::get('/admin', function (){
//    return view('admin.index');
//});
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware'=>'admin'],function (){
    Route::resource('/admin/users','AdminUsersController');
    Route::resource('/admin/bkash','AdminBkashController');
    });
Route::group(['middleware'=>'UserAccess'],function (){
Route::resource('/users','UsersControler');
    ROute::get('/home','UserContant@index');
    ROute::get('/task','UserContant@task');
    ROute::get('/profile','UserContant@profile');
    ROute::get('/members','UserContant@members');
    ROute::get('/payment','UserContant@payment');
    ROute::post('/card','UserContant@payments');
    ROute::post('/bkash','UserContant@paymentsbKash');
});







//Route::get('/admin', function () {
//    return view('admin.users.index');
//});
//Route::get('/admin/users/createe',function (){
//    return view('admin.users.create');
//});

//Route::get('/logout' , 'Auth\LoginController@logout');













