<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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


Route::get('/','IndexController@index')->name('inicio');

//Ruta para mostrar un solo cabezal
Route::get('/cabezal/{comercial}', [IndexController::class, 'vercabezal'])->name('ver.cabezal');

//Ruta para mostrar el resto de transporte segun id
Route::get('/cabezales', [IndexController::class, 'vercabezales'])->name('ver.cabezales');

Auth::routes(['verify' => true]);

Route::group(['middleware' =>[ 'auth','verified']], function () {

    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/admin/publicaciones', 'AdminController@publicaciones')->name('admin.publicaciones');
    Route::get('/admin/publicaciones/create', 'AdminController@create')->name('admin.publicaciones.create');
    Route::post('/admin/publicaciones','AdminController@store')->name('admin.publicaciones.store');
    Route::get('/admin/publicaciones/edit', 'AdminController@edit')->name('admin.publicaciones.edit');
    Route::put('/admin/publicaciones/{comercial}','AdminController@update')->name('admin.publicaciones.update');
    Route::delete('/admin/publicaciones/{comercial}','AdminController@destroy')->name('admin.publicaciones.destroy');

    //Ruta para guardar imagenes en el store
    Route::post('/imagenes/store','ImagenController@store')->name('imagenes.store');
    Route::post('/imagenes/destroy','ImagenController@destroy')->name('imagenes.destroy');

});

