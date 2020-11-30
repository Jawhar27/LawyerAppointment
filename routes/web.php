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

Route::get('/', function () {
    return view('public.home');
});
// Route::get('/l', function () {
//     return view('public.home');
// });



Route::get('/aboutus', function () {
    return view('public.aboutUs');
});
Route::get('/legalIssues', function () {
    return view('public.legalIssues');
});
Route::get('/aboutus', function () {
    return view('public.aboutUs');
});
Route::get('/registerClient', function () {
    return view('public.registerClient');
});
Route::get('/registerLawyer', function () {
    return view('public.registerLawyer');
});

// lawyer
// Route::get('/lawyer', function () {
//     return view('lawyer.home');
// })->middleware('guest:lawyer');


Route::post('/savingLawyerDetails','LawyerRegisterController@store');
Route::post('/uploadImage/{id}','LawyerController@uploadImage');
Route::post('/uploadClientImage/{id}','HomeController@uploadClientImage');

// client

// Route::get('/client', function () {
//     return view('client.home');
// });

Route::get('/clientprofile','ProfileController@index');


Route::get('/neliya','ClientController@showNeliyaLawyer');

//client with appointments
Route::post('/appointment/{id}','ClientController@showAppointmentForm');
Route::post('/saveAppointment/{id}/{date}','AppointmentController@store');

//lawyer with Appointments
Route::get('/appointmentAccept/{id}','AppointmentController@acceptStatus');
Route::get('/appointmentDecline/{id}','AppointmentController@declineStatus');
Route::post('/updateAppointment/{id}','AppointmentController@updateAppointment');

Route::post('/searchForLawyers','ClientController@searchLawyer');

Route::post('/updateTime1/{id}','AvailableTimeController@store1');



//filters
Route::get('/filterDistrict/{id}','ClientController@filterDistrict');
Route::get('/filterType/{id}','ClientController@filterType');
Route::get('filterDistrictAndType/{id}','ClientController@filterDistrictAndType');




Route::group(['middleware' => 'prevent-back-history'],function(){


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('user/logout','Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('/lawyer')->group(function(){

    // login routes
    Route::get('/login','Auth\LawyerLoginController@showLoginForm')->name('lawyer.login');
   

    Route::post('/login','Auth\LawyerLoginController@login')->name('lawyer.login.submit');
     
    //logout Routes

    Route::post('/logout','Auth\LawyerLoginController@logout')->name('lawyer.logout');

    //registering routes
    Route::get('/register','Auth\LawyerRegisterController@showRegisterForm')->name('lawyer.register');
    Route::post('/register','Auth\LawyerregisterController@register')->name('lawyer.register.submit');

    //dashboard for lawyer

    Route::get('/','LawyerController@index')->name('lawyer.dashboard');

    ///password reset for lawyer
Route::get('/password/reset','Auth\LawyerForgotPasswordController@showLinkRequestForm')->name('lawyer.password.request');
Route::post('/password/email','Auth\LawyerForgotPasswordController@sendResetLinkEmail')->name('lawyer.password.email');

Route::get('/password/reset/{token}','Auth\LawyerResetPasswordController@showResetForm')->name('lawyer.password.reset');
Route::post('/password/reset','Auth\LawyerResetPasswordController@reset')->name('lawyer.password.update');



    

});
});