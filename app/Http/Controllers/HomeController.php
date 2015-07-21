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
     
     /*
		$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
	*/

    	$vehiculos = DB::table('tbl_vehiculos as v')
            ->join('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
            ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
            ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
            ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
			->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
			->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
            ->select('v.*', 'dm.str_descripcion as transmision', 'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais','ma.str_marca as marca','mo.str_modelo as modelo')
            ->get();

    	$imagenes = DB::table('tbl_vehiculos as v')
			->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
			->where('ima.int_peso', '=', 1)
            ->select('ima.blb_img as imagen')
            ->get();


        return \View::make('inicio', compact('vehiculos','imagenes'));
    }
}
