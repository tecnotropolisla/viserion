<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use DB;

class Consultas extends Model
{
    
	protected function querysValor($query,$valor){

		switch ($query) {

            case 'vehiculos':
                 $vehiculos = DB::table('tbl_vehiculos as v')
		        ->where('v.id', '=', $valor)
		        ->select('v.*')
		        ->get();
                return $vehiculos;
            break;

            case 'vehiculoDetalle':
			    $vehiculoDetalle = DB::table('tbl_vehiculos as v')
			    ->leftjoin('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
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
			    
			    ->join('cat_ciudades as ciu', 'ciu.id', '=', 'v.lng_idciudad')
			    
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
		            'p.str_paises as pais', 'ciu.str_ciudad as ciudad', 'ma.str_marca as marca', 'per.created_at as fecha_inscripcion',
		            'mo.str_modelo as modelo')
			    ->get();
			    return $vehiculoDetalle;
            break;

			case 'imagenes':
				    $imagenes = DB::table('tbl_imagenes_vehiculos as ima')
				    ->where('ima.lng_idvehiculo', '=', $valor)
				    ->select('ima.int_peso','ima.blb_img as imagen')
				    ->get();
				return $imagenes;
			break;

			case 'caracteristicas':
			        $caracteristicas = DB::table('tbl_detalles_vehiculos as dv')
			        ->join('cat_datos_maestros as dm', 'dm.id', '=', 'dv.lng_idcaracteristica')
			        ->where('dv.lng_idvehiculo', '=', $valor)
			        ->select('dm.str_descripcion','dm.str_tipo')
			        ->get();
				return $caracteristicas;
			break;

            case 'modelos':
                    $modelos = DB::table('tbl_modelos')
                    ->where('lng_idmarca', $valor)
                    ->lists('str_modelo','id');
                return $modelos;
            break;
            
            case 'ciudades':
            
            	$ciudades = DB::select("select id, str_ciudad from cat_ciudades where lng_idpais = ".$valor." ");
            
            	return $ciudades;
            break;            

        }
	}

    protected function querysValor2($query,$valor,$valor2){

        switch ($query) {

            case 'ciudades':

                $ciudades = DB::select("select id, str_ciudad from cat_ciudades where lng_idpais = ".$valor2." AND str_ciudad LIKE '%".$valor."%' ");

                return $ciudades;
            break;
        }
    }   

	protected function querys($query){

        switch ($query) {

            case 'menu':
                $menu = DB::table('cat_datos_maestros')
		    	->where('str_tipo', 'tipos')
		    	->Where(function ($query) {
		    		$query->where('int_peso', '=', 1);
		    	})
		    	->select('str_descripcion as titulo','str_caracteristica as detalle','str_caracteristica2 as icono','str_caracteristica3 as ruta')
		    	->get();
                return $menu;
            break;

            case 'frenado':
                $frenado = DB::table('cat_datos_maestros')->where('str_tipo', 'frenado_vehiculos')->lists('str_descripcion','id');
                return $frenado;
            break;

            case 'respuesta':
                $respuesta= DB::table('cat_datos_maestros')->where('str_tipo', 'respuesta')->lists('str_descripcion','id');
                return $respuesta;
            break;

            case 'desplazamiento':
                $desplazamiento = DB::table('cat_datos_maestros')->where('str_tipo', 'desplazamiento_vehiculos')->lists('str_descripcion','id');
                return $desplazamiento;
            break;

            case 'arranque':
                $arranque = DB::table('cat_datos_maestros')->where('str_tipo', 'arranque_vehiculos')->lists('str_descripcion','id');
                return $arranque;
            break;            
        
            case 'enfriamiento':
                $enfriamiento = DB::table('cat_datos_maestros')->where('str_tipo', 'enfriamiento_vehiculos')->lists('str_descripcion','id');
                return $enfriamiento;
            break;

            case 'marcas':
                $marcas = DB::table('cat_marcas as m')
                ->join('tbl_tipos_marcas as tm', 'tm.lng_idmarca', '=', 'm.id')
                ->join('cat_datos_maestros as dm', 'dm.id', '=', 'tm.lng_idtipo')
                ->where('dm.id', '=', 153)
                ->orderBy('m.str_marca')
                ->select('m.str_marca','m.id')
                ->lists('str_marca','id');
                return $marcas;
            break;

            case 'modelos':
                $modelos = DB::table('tbl_modelos')->lists('str_modelo','id');
                return $modelos;
            break;

            case 'tipo_vehiculos':
                $tipo_vehiculos = DB::table('cat_datos_maestros')->where('str_tipo', 'automoviles')->lists('str_descripcion','id');
                return $tipo_vehiculos;
            break;

            case 'colores':
                $colores = DB::table('cat_datos_maestros')
                ->where('str_tipo', 'color')
                ->select('id','str_descripcion','str_caracteristica')
                ->get();  
                return $colores;
            break;

            case 'seguridad':
                $seguridad = DB::table('cat_datos_maestros')->where('str_tipo', 'seguridad_vehiculos')->lists('str_descripcion','id');
                return $seguridad;
            break;

            case 'sonido':
                $sonido = DB::table('cat_datos_maestros')->where('str_tipo', 'sonido_vehiculos')->lists('str_descripcion','id');
                return $sonido;
            break;

            case 'exterior':
                $exterior = DB::table('cat_datos_maestros')->where('str_tipo', 'exterior_vehiculos')->lists('str_descripcion','id');
                return $exterior;
            break;

            case 'confort':
                $confort = DB::table('cat_datos_maestros')->where('str_tipo', 'confort_vehiculos')->lists('str_descripcion','id');
                return $confort;
            break;

            case 'accesorios_internos':
                $accesorios_internos = DB::table('cat_datos_maestros')->where('str_tipo', 'accesoriosInternos_vehiculos')->lists('str_descripcion','id');
                return $accesorios_internos;
            break;

            case 'direccion':
                $direccion = DB::table('cat_datos_maestros')->where('str_tipo', 'direccion_vehiculos')->lists('str_descripcion','id');
                return $direccion;
            break;

            case 'estereo':
                $estereo = DB::table('cat_datos_maestros')->where('str_tipo', 'estereo_vehiculos')->lists('str_descripcion','id');
                return $estereo;
            break;

            case 'transmision':
                $transmision = DB::table('cat_datos_maestros')->where('str_tipo', 'transmision_vehiculos')->lists('str_descripcion','id');
                return $transmision;
            break;

            case 'tapizado':
                $tapizado = DB::table('cat_datos_maestros')->where('str_tipo', 'tapizado_vehiculos')->lists('str_descripcion','id');
                return $tapizado;
            break;

            case 'vidrios':
                $vidrios = DB::table('cat_datos_maestros')->where('str_tipo', 'vidrios_vehiculos')->lists('str_descripcion','id');
                return $vidrios;
            break;

            case 'traccion':
                $traccion = DB::table('cat_datos_maestros')->where('str_tipo', 'traccion_vehiculos')->lists('str_descripcion','id');
                return $traccion;
            break;

            case 'combustible':
                $combustible = DB::table('cat_datos_maestros')->where('str_tipo', 'combustible_vehiculos')->lists('str_descripcion','id');
                return $combustible;
            break;

            case 'paises':
                $paises = DB::table('cat_paises as p')
                ->join('cat_ciudades as c', 'c.lng_idpais', '=', 'p.id')
                ->orderBy('p.str_paises')
                ->select('p.str_paises','p.id')
                ->lists('p.str_paises','p.id');
                return $paises;
            break;

        }

    }

}
