<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Troovami\Consultas;

class DetallesController extends Controller
{
    public function detalles($valor)
    {

        //busco el id del vehículo para saber si existe:
        $vehiculos = Consultas::querysValor('vehiculos',$valor);

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
        $vehiculos = Consultas::querysValor('vehiculoDetalle',$valor);
	    
        //Imágenes del vehículo:
        $imagenes = Consultas::querysValor('imagenes',$valor);

        //Características del vehículo:
        $caracteristicas = Consultas::querysValor('caracteristicas',$valor);
        
        $vehiculos[0]->fecha_inscripcion = substr($vehiculos[0]->created_at, 0,10);    
        $var = explode('-',$vehiculos[0]->fecha_inscripcion);
        $vehiculos[0]->fecha_inscripcion = "$var[2]-$var[1]-$var[0]";

        return \View::make('detallesVehiculo', compact('vehiculos','imagenes','caracteristicas'));

    }
    
}