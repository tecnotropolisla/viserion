<?php
	//Función "dependienteModelosBuscador(valor)" :)
	Route::get('ModelosBuscador/{valor}','MaestroController@dependienteModelosBuscador');
	
	//Función "dependienteMarcasBuscador(valor)" :)
	Route::get('MarcasBuscador/{valor}','MaestroController@dependienteMarcasBuscador');
	
	//Función "buscarCiudadPorPais_Buscador(lng_idpais)" :)
	Route::get('BuscadorPais/{pais}','MaestroController@BuscadorPais');
				
	//Función "buscarCiudadPorLetra_Buscador(letra)" :)
	Route::get('BuscadorCiudades/{letra}/Pais/{pais}','MaestroController@BuscadorCiudades');
?>