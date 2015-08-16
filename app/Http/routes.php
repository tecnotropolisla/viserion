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
	
	Route::group(['prefix' => 'Publicar'], function () {

		//Carros:
			Route::get('Carros', [
					'uses' => 'PublicarCarrosController@vehiculo',
					'as' =>'publicarCarro'
			]);
		
			Route::post('Carros', [
				'uses' => 'PublicarCarrosController@postPublicar',
				'as' =>'publicarCarro'
			]);

		//Motocicletas:
			Route::get('Motocicletas', [
					'uses' => 'PublicarMotocicletasController@vehiculo',
					'as' =>'publicarMotocicleta'
			]);
		
			Route::post('Motocicletas', [
				'uses' => 'PublicarMotocicletasController@postPublicar',
				'as' =>'publicarMotocicleta'
			]);

		//Aeronaves:
			Route::get('Aeronaves', [
					'uses' => 'PublicarAeronavesController@vehiculo',
					'as' =>'publicarAeronave'
			]);
		
			Route::post('Aeronaves', [
				'uses' => 'PublicarAeronavesController@postPublicar',
				'as' =>'publicarAeronave'
			]);

		//Embarcaciones:
			Route::get('Embarcaciones', [
					'uses' => 'PublicarEmbarcacionesController@vehiculo',
					'as' =>'publicarEmbarcacion'
			]);
		
			Route::post('Embarcaciones', [
				'uses' => 'PublicarEmbarcacionesController@postPublicar',
				'as' =>'publicarEmbarcacion'
			]);

		//Maquinaria Agricola:
			Route::get('Maquinaria-Agricola', [
					'uses' => 'PublicarMaquinariaAgricolaController@vehiculo',
					'as' =>'publicarMaquinariaAgricola'
			]);
		
			Route::post('Maquinaria-Agricola', [
				'uses' => 'PublicarMaquinariaAgricolaController@postPublicar',
				'as' =>'publicarMaquinariaAgricola'
			]);

		//Maquinaria Pesada:
			Route::get('Maquinaria-Pesada', [
					'uses' => 'PublicarMaquinariaPesadaController@vehiculo',
					'as' =>'publicarMaquinariaPesada'
			]);
		
			Route::post('Maquinaria-Pesada', [
				'uses' => 'PublicarMaquinariaPesadaController@postPublicar',
				'as' =>'publicarMaquinariaPesada'
			]);

		//Trailers:
			Route::get('Trailers', [
					'uses' => 'PublicarTrailerController@vehiculo',
					'as' =>'publicarTrailer'
			]);
		
			Route::post('Trailers', [
				'uses' => 'PublicarTrailerController@postPublicar',
				'as' =>'publicarTrailer'
			]);
	
		//Estas rutas las llamo desde el archivo ajaxCars.js:

			//Función "dependienteModelos(valor)" :)
			Route::get('Modelos/{valor}','MaestroController@dependienteModelos');

			//Función "dependienteMarcas(valor)" :)
			Route::get('Marcas/{valor}','MaestroController@dependienteMarcas');

			//Función "dependienteCilindrada(valor)" :)
			Route::get('Cilindrada/{valor}','MaestroController@dependienteCilindrada');				
		
			//Función "buscarCiudadPorPais(lng_idpais)" :)
			Route::get('Pais/{pais}','MaestroController@dependiente3');
			
			//Función "buscarCiudadPorLetra(letra)" :)
			Route::get('Ciudades/{letra}/Pais/{pais}','MaestroController@dependiente2');

		});

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