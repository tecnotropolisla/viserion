<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;

class DetallesController extends Controller
{
    public function detalles($valor)
    {
	    /*$vehiculos = DB::select(DB::raw('select v.id from tbl_vehiculos as v
	            join cat_datos_maestros as dm on dm.id = v.lng_idtransmision
	            join cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
	            join cat_datos_maestros as dm3 on dm3.id = v.lng_idcolor
	            join cat_paises as p on p.id = v.lng_idpais
	            join tbl_modelos as mo on mo.id = v.lng_idmodelo
	            join cat_marcas as ma on ma.id = mo.lng_idmarca
	            join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id
	            where ima.int_peso = 1
	            and v.id = '.$valor));*/
	    
	    $vehiculos = DB::table('tbl_vehiculos as v')
	    ->join('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
	    ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
	    ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
	    ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
	    ->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
	    ->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
	    ->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
	    ->where('v.id', '=', $valor)
	    ->Where(function ($query) {
	    	$query->where('ima.int_peso', '=', 1);
	    })
	    ->select('v.*','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais','ma.str_marca as marca','mo.str_modelo as modelo')
	    ->get();
	    
	    //SELECT `blb_img`,`int_peso` FROM `tbl_imagenes_vehiculos` WHERE `lng_idvehiculo` = 1
	    
	    $imagenes = DB::table('tbl_imagenes_vehiculos as ima')
	    ->where('ima.lng_idvehiculo', '=', $valor)
	    ->select('ima.int_peso','ima.blb_img as imagen')
	    ->get();
          
        return \View::make('detallesVehiculo', compact('vehiculos','imagenes'));

    }
    
}