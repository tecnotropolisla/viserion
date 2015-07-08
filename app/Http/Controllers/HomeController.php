<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
	public function index()
    {
        
        $paises = DB::table('cat_paises')->orderBy('str_paises')->lists('str_paises','id');
        $genero = DB::table('cat_datos_maestros')->where('str_tipo', 'genero')->lists('str_descripcion','id');

        //return \View::make('inicio', compact('genero','paises'));
        return \View::make('inicio');
    }
}
