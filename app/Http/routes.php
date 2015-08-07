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

/**********************Accesos Públicos:*****************************************/

	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' =>'home'
	]);

	Route::get('Pagina/{valor}',[
					'uses' => 'HomeController@paginar',
					'as' => 'paginar'
	]);

	Route::get('Detalle-del-Vehiculo/{valor}', [
			'uses' => 'DetallesController@detalles',
			'as' =>'detalles'
	]);
		
	Route::get('Acceso-Restringido', [
					'uses' => 'DenegadoController@index',
					'as' =>'denegado'
	]);

/**********************************************************************************/

/**********************Accesos con autenticación:**********************************/

Route::group(['middleware' => 'auth'], function () {
 
	Route::get('Publicar', [
		'uses' => 'PublicarController@index',
		'as' =>'publicar'
	]);
	
	//Carros:
		Route::get('Publicar-Carro', [
				'uses' => 'PublicarCarrosController@carros',
				'as' =>'publicarCarro'
		]);
	
		Route::post('Publicar-Carro', [
			'uses' => 'PublicarCarrosController@postPublicar',
			'as' =>'publicarCarro'
		]);
	
	//Estas rutas las llamo desde el archivo ajaxCars.js:

	//Función "dependiente(valor)" :)
		Route::get('Publicar-Carro/{valor}','PublicarCarrosController@dependiente');

	//Función "formularioDinamico()" :)
		Route::get('Formulario/{valor}','PublicarCarrosController@formulario');
 });

/***********************************************************************************/

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