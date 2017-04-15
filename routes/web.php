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

Route::get('/', 'MainController@home');
Route::get('puntos_de_pago', 'MainController@getPuntosPago');
Route::get('plataforma', 'MainController@getPlataforma');
Route::resource('contacto', 'ContactoPaginaController');
Route::resource('registro', 'RegistroPaginaController');