<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use DB;

class Consultas extends Model
{
    
	protected function querys($query){

        switch ($query) {

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
                $paises = DB::table('cat_paises')->orderBy('str_paises')->lists('str_paises','id');
                return $paises;
            break;

        }

    }

}
