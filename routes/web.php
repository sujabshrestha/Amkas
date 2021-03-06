<?php

use App\Sitesetting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
#########superuser
Route::get('/createsuperuser','Auth\AuthController@createsuperuser')->name('superuser');

#####home#######
Route::get('/','Auth\AuthController@login')->name('login');
Route::post('/registersubmit','AmkasController@registersubmit')->name('registersubmit');
#######userregister

##userlogin
Route::post('/loginsubmit','Auth\AuthController@loginsubmit')->name('loginsubmit');

#######logout#####
Route::get('/logout','Auth\AuthController@logout')->name('logout');



Route::get('/csrf',function(){
    return csrf_token();
});
Route::post('/createformsubmit','Amkasdetails\DashboardController@createformsubmit')->name('createformsubmit');

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

########allforms
Route::get('/allforms','Amkasdetails\DashboardController@allforms')->name('allforms');
########formdetail
Route::get('/formdetail/{id}','Amkasdetails\DashboardController@formdetail')->name('formdetail');
#########editform
Route::get('/formedit/{id}','Amkasdetails\DashboardController@formedit')->name('formedit');
Route::post('/editformsubmit/{id}','Amkasdetails\DashboardController@editformsubmit')->name('editformsubmit');
##deleteform
Route::get('/deleteform/{id}','Amkasdetails\DashboardController@deleteform')->name('deleteform');
##########Amkas metas
Route::get('/addMetas/{id}','Amkasdetails\DashboardController@addMetas')->name('addMetas');
Route::post('/formmeta/metaSubmit/{id}','Amkasdetails\DashboardController@metaSubmit')->name('metaSubmit');


######sitesetting
Route::get('/sitesetting','sitesetting\SiteController@sitesetting')->name('sitesetting');
Route::post('/sitesettingsubmit','sitesetting\SiteController@sitesettingsubmit')->name('sitesettingsubmit');

});


// Route::post('/formmeta/migrationprocess','Amkasdetails\DashboardController@migrationprocess')->name('migrationprocess');
// Route::post('/formmeta/sevicesshelterhome','Amkasdetails\DashboardController@sevicesshelterhome')->name('sevicesshelterhome');


View::composer('*', function ($view) {

    $siteicon = Sitesetting::where('key','=','site_icon')->first();
    $favicon = Sitesetting::where('key','=','fav_icon')->first();
    $description = Sitesetting::where('key','=','description')->first();


    // $siteicon = '/images/zoro.jpg';
    $view->with('siteicon',$siteicon);
    $view->with('favicon',$favicon);
    $view->with('description',$description);

});
