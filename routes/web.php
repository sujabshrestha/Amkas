<?php

use Illuminate\Support\Facades\Route;

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


#####home#######
Route::get('/','Auth\AuthController@login')->name('home');
Route::post('/registersubmit','AmkasController@registersubmit')->name('registersubmit');
#######userregister

##userlogin
Route::post('/loginsubmit','Auth\AuthController@loginsubmit')->name('loginsubmit');

#######logout#####
Route::get('/logout','Auth\AuthController@logout')->name('logout');



##########Admin

Route::group([
    'middleware' => ['auth','admin']
],
function(){
Route::get('/admin','AdminController@adminhome')->name('admin');
Route::get('/adduser','AdminController@adduser')->name('adduser');
Route::post('/addusersubmit','AdminController@addusersubmit')->name('addusersubmit');

Route::get('/alluser','AdminController@alluser')->name('allusers');
####edituser
Route::get('/edituser/{id}','AdminController@edituser')->name('edituser');
Route::get('/editsubmit/{id}','AdminController@editsubmit')->name('editsubmit');
#####deleteuser#####
Route::get('/deleteuser/{id}','AdminController@deleteuser')->name('deleteuser');

#####changepassword
Route::get('/changepassword','AdminController@changepassword')->name('changepassword');
Route::post('/changepasswordsubmit','AdminController@changepasswordsubmit')->name('changepasswordsubmit');




});
