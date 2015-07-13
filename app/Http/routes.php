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
Route::get('Iniciar-Sesion', [
				'uses' => 'Auth\AuthController@getLogin',
				'as' =>'login'
]);
Route::post('Iniciar-Sesion', [
				'uses' => 'Auth\AuthController@postLogin',
				'as' =>'login'
]);
Route::get('Salir', [
				'uses' => 'Auth\AuthController@getLogout',
				'as' =>'logout'
]);

// Registration routes...
Route::get('Crear-Cuenta', [
				'uses' => 'Auth\AuthController@getRegister',
				'as' =>'register'
]);

Route::post('Crear-Cuenta', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth'], function () {
 
	Route::get('Publicar-Vehiculo', [
		'uses' => 'PublicarCarrosController@index',
		'as' =>'publicar'
	]);

	Route::post('Publicar-Vehiculo', [
		'uses' => 'PublicarCarrosController@postPublicar',
		'as' =>'publicar'
	]);








 });

Route::get('Detalle-del-Vehiculo', [
	'uses' => 'DetallesController@index',
	'as' =>'detalles'
]);

Route::get('Acceso-Restringido', [
				'uses' => 'DenegadoController@index',
				'as' =>'denegado'
]);


