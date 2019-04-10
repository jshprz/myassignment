<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('get-coach-data','CoachController@getCoachData');
Route::post('get-players-data','PlayerController@getPlayersData');
Route::post('create-player','PlayerRegisterController@createPlayer');
Route::post('add-player-to-team','PlayerController@addPlayerToTeam');
Route::post('remove-player-from-team','PlayerController@removePlayerToTeam');
Route::get('get-teams','AdminController@getTeams');