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

        //busco el id del vehículo para saber si existe:
        $vehiculos = DB::table('tbl_vehiculos as v')
        ->where('v.id', '=', $valor)
                ->select('v.*')
                ->get();

        //Mi variable bandera para establecer si pasa o no a determinada vista:
        $flag = false;

        foreach ($vehiculos as $value) {
            if (!empty($value->id)) {
                 //echo $value->id;
                 $flag = true;
            }   
        }
         
        if ($flag == false) {
            //echo "no existe";
            return \View::make('errors.404');
        }

        //Descripción del vehículo:
	    $vehiculos = DB::table('tbl_vehiculos as v')
	    ->join('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
	    ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
	    ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
        ->join('cat_datos_maestros as dm4', 'dm4.id', '=', 'v.lng_idestereo')
        ->join('cat_datos_maestros as dm5', 'dm5.id', '=', 'v.lng_idtapizado')
        ->join('cat_datos_maestros as dm6', 'dm6.id', '=', 'v.lng_idvidrios')
        ->join('cat_datos_maestros as dm7', 'dm7.id', '=', 'v.lng_idtraccion')
        ->join('cat_datos_maestros as dm8', 'dm8.id', '=', 'v.lng_idcombustible')
        ->join('cat_datos_maestros as dm9', 'dm9.id', '=', 'v.lng_idnegociable')
        ->join('cat_datos_maestros as dm10', 'dm10.id', '=', 'v.lng_idfinanciamiento')
        ->join('cat_datos_maestros as dm11', 'dm11.id', '=', 'v.lng_idchocado')
        ->join('cat_datos_maestros as dm12', 'dm12.id', '=', 'v.lng_idunicodueno')
        ->join('cat_datos_maestros as dm13', 'dm13.id', '=', 'v.lng_idmotorreparado')
	    ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
	    ->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
	    ->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
	    ->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
        ->join('tbl_personas as per', 'per.id', '=', 'v.lng_idpersona')
        ->join('cat_paises as p2', 'p2.id', '=', 'per.lng_idpais')
	    ->where('v.id', '=', $valor)
	    ->Where(function ($query) {
	    	$query->where('ima.int_peso', '=', 1);
	    })
	    ->select('v.*','per.name as usuario','p2.str_paises as pais_persona','p2.blb_img as bandera_persona','per.str_nombre as nombre_persona','per.str_apellido as apellido_persona','per.email',
            'per.str_ididentificacion','per.str_telefono','per.str_twitter','per.str_facebook','per.str_instagram',
            'per.blb_img as ima_persona','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 
            'dm2.str_descripcion as direccion','dm3.str_descripcion as color', 'dm4.str_descripcion as estereo',
            'dm5.str_descripcion as tapizado', 'dm6.str_descripcion as vidrios', 'dm7.str_descripcion as traccion',
            'dm8.str_descripcion as combustible', 'dm9.str_descripcion as negociable', 
            'dm10.str_descripcion as financiamiento', 'dm11.str_descripcion as chocado', 
            'dm12.str_descripcion as unicodueno', 'dm13.str_descripcion as reparado',
            'p.str_paises as pais','ma.str_marca as marca',
            'mo.str_modelo as modelo')
	    ->get();
	    
        //Imágenes del vehículo:
	    $imagenes = DB::table('tbl_imagenes_vehiculos as ima')
	    ->where('ima.lng_idvehiculo', '=', $valor)
	    ->select('ima.int_peso','ima.blb_img as imagen')
	    ->get();

        //Características del vehículo:
        $caracteristicas = DB::table('tbl_detalles_vehiculos as dv')
        ->join('cat_datos_maestros as dm', 'dm.id', '=', 'dv.lng_idcaracteristica')
        ->where('dv.lng_idvehiculo', '=', $valor)
        ->select('dm.str_descripcion','dm.str_tipo')
        ->get();

        return \View::make('detallesVehiculo', compact('vehiculos','imagenes','caracteristicas'));

    }
    
}