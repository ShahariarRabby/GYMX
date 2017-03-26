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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/house', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::get('/admin', function (){
//    return view('admin.index');
//});
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware'=>'admin'],function (){
    Route::resource('/admin/users','AdminUsersController');

});







//Route::get('/admin', function () {
//    return view('admin.users.index');
//});
//Route::get('/admin/users/createe',function (){
//    return view('admin.users.create');
//});

//Route::get('/logout' , 'Auth\LoginController@logout');