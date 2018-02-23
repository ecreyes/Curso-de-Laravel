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

Route::get('/', ['as'=>'home','uses'=>'PagesController@home']);

Route::get('saludo/{nombre?}',['as'=>'saludo','uses'=>'PagesController@saludo'])
		->where('nombre','[a-zA-Z]+');

Route::resource('mensajes','MessagesController');