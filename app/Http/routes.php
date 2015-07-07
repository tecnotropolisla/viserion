<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' =>'home'
]);

// Authentication routes...
Route::get('inicio-de-sesion', [
				'uses' => 'Auth\AuthController@getLogin',
				'as' =>'login'
]);
Route::post('inicio-de-sesion', [
				'uses' => 'Auth\AuthController@postLogin',
				'as' =>'login'
]);
Route::get('cerrar-sesion', [
				'uses' => 'Auth\AuthController@getLogout',
				'as' =>'logout'
]);

// Registration routes...
Route::get('registro-de-usuario', [
				'uses' => 'Auth\AuthController@getRegister',
				'as' =>'register'
]);

Route::post('registro-de-usuario', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {
 
	Route::get('publicar', [
		'uses' => 'PublicarController@index',
		'as' =>'publicar'
	]);

 });


Route::get('detalles', [
	'uses' => 'DetallesController@index',
	'as' =>'detalles'
]);











