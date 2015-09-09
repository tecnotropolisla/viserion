<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Consultas;
use Troovami\Buscador;

class HomeController extends Controller
{
	/**
     *
     * @return void
     */
    public function __construct()
    {
        $this->tamano_pagina = 10;
        Buscador::camposBuscador();
    }

    public function index()
    {
        $total_vehiculos = Consultas::querysValor3('total_vehiculos','','','');

         foreach ($total_vehiculos as $total) {
            $resultados = $total->total;
        }   

        $paginas = ceil($resultados / $this->tamano_pagina);
        $vehiculos = Consultas::querysValor3('todosLosVehiculos',$this->tamano_pagina,0,'');
        $ultimosVehiculos = Consultas::querysValor3('ultimosVehiculos',$this->tamano_pagina,0,'');
        $total_paginas = array('paginas' => $paginas ); 
        $registros = array('resultados' => $resultados ); 

        return \View::make('inicio', compact('vehiculos','ultimosVehiculos','total_paginas','registros'));
    }

    public function paginar($pagina,$pais,$ciudad,$tipo,$marca,$modelo,$color,$min_ano,$max_ano,$min_precio,$max_precio)
    {        
        $and = '';
       
        if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por País:
            $and = 'and v.lng_idpais = '.$pais;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
			//Busqueda por País y Ciudad:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais, Ciudad y Tipo:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais, Ciudad, Tipo y Marca:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais, Ciudad, Tipo, Marca y Modelo:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais, Ciudad, Tipo, Marca, Modelo y Color:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color;

        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        		
        	//Busqueda por Pais y Tipo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais Tipo y Marca:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca;
			
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais Tipo, Marca y Modelo:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo;
			
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais Tipo, Marca, Modelo y Color:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color;
			
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Pais, Tipo, Marca y Color:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idcolor = '.$color;

        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        		
        	//Busqueda por Pais y Color:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idcolor = '.$color;
        
        }
        
        
        
        
        
        else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Tipo:
            $and = 'and lng_idtipo_vehiculo = '.$tipo;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {

        	//Busqueda por Tipo y Marca:
            $and = 'and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Tipo, Marca y Modelo:
            $and = 'and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Tipo, Marca, Modelo y Color:
            $and = 'and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {

            //Busqueda por Tipo, Marca y Color:
        	$and = 'and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idcolor = '.$color;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busqueda por Tipo y Color:
            $and = 'and lng_idtipo_vehiculo = '.$tipo.' and lng_idcolor = '.$color;

        }
        
        
        else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busquda por Color:
            $and = 'and lng_idcolor = '.$color;

        };

        //return $and;

        if (!$pagina) {
           $inicio = 0;
           $pagina = 1;
        }
        else {
           $inicio = ($pagina - 1) * $this->tamano_pagina;
        }

        $total_vehiculos = Consultas::querysValor3('total_buscarVehiculos','','',$and);

         foreach ($total_vehiculos as $total) {
            $resultados = $total->total;
        }   

        $paginas = ceil($resultados / $this->tamano_pagina);
        $vehiculos = Consultas::querysValor3('buscarVehiculos',$this->tamano_pagina,$inicio,$and);
        $total_paginas = array('paginas' => $paginas );
        $registros = array('resultados' => $resultados );

        return \View::make('paginador',compact('vehiculos','total_paginas','registros'));
    }
}