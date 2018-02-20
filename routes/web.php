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
    return "Hola desde la página de inicio";
});

Route::get('contacto',function(){
	return "Hola desde la página de contacto";
});

Route::get('saludo/{nombre?}',function($nombre='invitado'){
	return "Hola $nombre";
})->where('nombre','[a-zA-Z]+');