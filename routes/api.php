<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Clients', 'App\Http\Controllers\ClientController@index');
Route::post('/Clients', 'App\Http\Controllers\ClientController@store');
Route::get('/Clients/{client}', 'App\Http\Controllers\ClientController@show');
Route::put('/Clients/{client}', 'App\Http\Controllers\ClientController@update');
Route::delete('/Clients/{client}', 'App\Http\Controllers\ClientController@destroy');