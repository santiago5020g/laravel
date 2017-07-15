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


Route::post('autenticar', 'UserController@authenticate');
Route::get('cerrar_sesion', 'UserController@cerrar_sesion');
Route::get('login', 'UserController@login');


Route::get('usuarios', 'UserController@index')->middleware('can:manageUsuarios');