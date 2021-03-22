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
Route::get('/admin','Admin\AdminController@adminhome')->name('admin');
Route::get('/adduser','Admin\AdminController@adduser')->name('adduser');
Route::post('/addusersubmit','Admin\AdminController@addusersubmit')->name('addusersubmit');

Route::get('/alluser','Admin\AdminController@alluser')->name('allusers');
####edituser
Route::get('/edituser/{id}','Admin\AdminController@edituser')->name('edituser');
Route::get('/editsubmit/{id}','Admin\AdminController@editsubmit')->name('editsubmit');
#####deleteuser#####
Route::get('/deleteuser/{id}','Admin\AdminController@deleteuser')->name('deleteuser');

#####changepassword
Route::get('/changepassword','Admin\AdminController@changepassword')->name('changepassword');
Route::post('/changepasswordsubmit','Admin\AdminController@changepasswordsubmit')->name('changepasswordsubmit');


######Amkasdetails
Route::get('/Amkasdetails','Amkasdetails\DashboardController@adddetails')->name('Amkasdetails');
Route::post('/createformsubmit','Amkasdetails\DashboardController@createformsubmit')->name('createformsubmit');

########allforms
Route::get('/allforms','Amkasdetails\DashboardController@allforms')->name('allforms');
########formdetail
Route::get('/formdetail/{id}','Amkasdetails\DashboardController@formdetail')->name('formdetail');
#########editform
Route::get('/formedit/{id}','Amkasdetails\DashboardController@formedit')->name('formedit');
Route::post('/editformsubmit/{id}','Amkasdetails\DashboardController@editformsubmit')->name('editformsubmit');
##deleteform
Route::get('/deleteform/{id}','Amkasdetails\DashboardController@deleteform')->name('deleteform');
});
