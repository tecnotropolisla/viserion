<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;

class PublicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$menu = DB::table('cat_datos_maestros')
    	->where('str_tipo', 'tipos')
    	->Where(function ($query) {
    		$query->where('int_peso', '=', 1);
    	})
    	->select('str_descripcion as titulo','str_caracteristica as detalle','str_caracteristica2 as icono','str_caracteristica3 as ruta')
    	->get();

    	return \View::make('publicar',compact('menu'));
    }   
}