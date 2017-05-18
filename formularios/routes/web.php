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


Route::get('formularios/formularios_usuario', 'FormularioController@formularios_usuario');
Route::resource('empleado', 'EmpleadoController');

Route::resource('/', 'InicioController');
Route::post('autenticar', 'LogueoController@authenticate');
Route::get('ingreso', 'LogueoController@index');
Route::get('cerrar_sesion', 'LogueoController@cerrar_sesion');