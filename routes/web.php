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

Route::get('/', 'App\Http\Controllers\homeController@goMovie');


Route::get("/movie", 'App\Http\Controllers\MovieController@index');

Route::get("/game", 'App\Http\Controllers\GameController@index');

Route::get("/party", 'App\Http\Controllers\homeController@partyGames');

Route::get("/serie", 'App\Http\Controllers\SerieController@index');