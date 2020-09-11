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
    return view('welcome');
});

// User routes
Route::get('/vivienda/list', 'ViviendaController@index')->name('vivienda.index');
Route::get('/vivienda/create', 'ViviendaController@create')->name('vivienda.create');
Route::get('/vivienda/show', 'ViviendaController@show' )->name("vivienda.show");
Route::post('viviendas', 'ViviendaController@store')->name('viviendas.store');
Route::delete('vivienda/{vivienda}', 'ViviendaController@destroy')->name('vivienda.destroy');