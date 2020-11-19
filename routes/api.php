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

//Listado de API

Route::get('/comerciales', 'APIController@index')->name('comerciales.index');
Route::get('/comerciales/{comercial}','APIController@show')->name('comerciales.show');

Route::get('categorias','APIController@categorias')->name('categorias');
Route::get('categorias/{categoria}','APIController@categoria')->name('categoria');
Route::get('/{categoria}','APIController@comercialescategoria')->name('categoria');
