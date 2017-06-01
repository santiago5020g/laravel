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


Route::resource('productos', 'ProductoController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('servicios', 'ServicioController@index');
Route::get('servicios/create', 'ServicioController@create');
Route::post('servicios', 'ServicioController@store');

Route::get('servicios/asociar_pago', 'ServicioController@AddPaymentToService');
Route::post('servicios/guardar_pago', 'ServicioController@SavePaymentToService');
