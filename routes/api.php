<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('drinkingGames', 'App\Http\Controllers\ApiController@getAllDrinkingGames');
Route::get('drinkingGames/{id}', 'App\Http\Controllers\ApiController@getDrinkingGame');
Route::post('drinkingGames', 'App\Http\Controllers\ApiController@createDrinkingGame');
Route::put('drinkingGames/{id}/{rating}/', 'App\Http\Controllers\ApiController@updateRatingDrinkingGame');
Route::delete('drinkingGames/{id}/', 'App\Http\Controllers\ApiController@deleteDrinkingGame');