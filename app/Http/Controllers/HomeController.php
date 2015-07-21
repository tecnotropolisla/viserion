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
    	$vehiculos = DB::table('tbl_vehiculos as v')
            ->join('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
            ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
            ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
            ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
			->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
			->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
			->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
			->where('ima.int_peso', '=', 1)
            ->select('v.*','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais','ma.str_marca as marca','mo.str_modelo as modelo')
            ->get();

        return \View::make('inicio', compact('vehiculos'));
    }
}