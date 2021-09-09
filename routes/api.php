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

//auth
Route::post('auth/login', 'Auth\LoginController@login');
Route::post('auth/registro', 'Auth\RegisterController@register');
//producto
Route::get('producto', 'ProductoController@getAll');
Route::get('producto/{id}', 'ProductoController@find');
Route::post('producto', 'ProductoController@create');
Route::put('producto/{producto}', 'ProductoController@update');
Route::delete('producto/{producto}', 'ProductoController@delete');
//horario
Route::get('horario', 'HorarioController@getAll');
Route::get('horario/{id}', 'HorarioController@find');
Route::post('horario', 'HorarioController@create');
Route::put('horario/{horario}', 'HorarioController@update');
Route::delete('horario/{horario}', 'HorarioController@delete');
