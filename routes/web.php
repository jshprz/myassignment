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





Route::get('/', 'Auth\LoginController@playerLogin')->name('playerLogin');
Route::get('/coach-login', 'Auth\LoginController@coachLogin')->name('coachLogin');
Route::get('/admin-login', 'Auth\LoginController@adminLogin')->name('adminLogin');
Route::get('/coach-registration', 'CoachRegisterController@index');
Route::get('/player-registration', 'PlayerRegisterController@index');
Route::post('player-dologin','Auth\LoginController@playerDoLogin')->name('playerDoLogin');
Route::post('coach-dologin','Auth\LoginController@coachDoLogin')->name('coachDoLogin');
Route::post('admin-dologin','Auth\LoginController@adminDoLogin')->name('adminDoLogin');

Route::group(['middleware' => 'auth:coach'], function() {
    Route::get('/coach', 'CoachController@index');
    Route::get('/coach-logout', function() {
          Auth::guard('coach')->logout();
          Session::flush();
          return redirect('/coach-login');
    })->name('coachDoLogout');
});
Route::group(['middleware' => 'auth'], function() {
Route::get('/player', 'PlayerController@index');
Route::get('/player-logout', function() {
        Auth::logout();
        Session::flush();
        return redirect('/');
})->name('playerDoLogout');
});
Route::group(['middleware' => 'auth:admin'], function() {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin-logout', function() {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('/admin-login');
    })->name('adminDoLogout');
});