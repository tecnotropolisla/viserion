<?php
	Route::get('Pagina/{valor}/pais/{pais}/ciudad/{ciudad}/tipo/{tipo}/marca/{marca}/modelo/{modelo}/color/{color}/min_ano/{min_ano}/max_ano/{max_ano}/min_precio/{min_precio}/max_precio/{max_precio}',[
			'uses' => 'HomeController@paginar',
			'as' => 'paginar'
	]);
?>