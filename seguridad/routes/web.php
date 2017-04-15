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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('usuarios', 'UsuarioController');
Route::get('ingreso', 'LogueoController@index');
Route::post('autenticar', 'LogueoController@authenticate');
Route::get('cerrar_sesion', 'LogueoController@cerrar_sesion');
