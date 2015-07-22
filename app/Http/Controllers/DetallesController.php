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
    	
    $vehiculos = DB::select(DB::raw('select v.id from tbl_vehiculos as v
            join cat_datos_maestros as dm on dm.id = v.lng_idtransmision
            join cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
            join cat_datos_maestros as dm3 on dm3.id = v.lng_idcolor
            join cat_paises as p on p.id = v.lng_idpais
            join tbl_modelos as mo on mo.id = v.lng_idmodelo
            join cat_marcas as ma on ma.id = mo.lng_idmarca
            join tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id
            where ima.int_peso = 1
            and v.id = '.$valor));

       
        return \View::make('detallesVehiculo', compact('vehiculos'));

    }
}