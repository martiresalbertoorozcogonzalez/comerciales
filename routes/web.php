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


Route::get('/','InicioController')->name('inicio');

Auth::routes(['verify' => true]);

Route::group(['middleware' =>[ 'auth','verified']], function () {

    Route::get('/comercial/admin','AdminController@index')->name('comercial.admin');

    Route::get('/comercial/create','ComercialController@create')->name('comercial.create')->middleware('revisar');
    Route::post('/comercial','ComercialController@store')->name('comercial.store');
    Route::get('/comercial/edit','ComercialController@edit')->name('comercial.edit');
    Route::put('/comercial/{comercial}','ComercialController@update')->name('comercial.update');

    //Ruta para guardar imagenes en el store
    Route::post('/imagenes/store','ImagenController@store')->name('imagenes.store');
    Route::post('/imagenes/destroy','ImagenController@destroy')->name('imagenes.destroy');

});

