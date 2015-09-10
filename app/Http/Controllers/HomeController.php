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
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
                
            //Busqueda por Año Desde:
            $and = 'and v.int_ano >= '.$min_ano;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
                
            //Busqueda por Pais y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and v.int_ano >= '.$min_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and v.int_ano >= '.$min_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano >= '.$min_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo, Marca y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and v.int_ano >= '.$min_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo, Marca, Modelo y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and v.int_ano >= '.$min_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo, Marca, Modelo, Color y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color.' and v.int_ano >= '.$min_ano;

        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Pais, Color y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idcolor = '.$color.' and v.int_ano >= '.$min_ano;

        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Pais, Tipo y Año Desde:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano >= '.$min_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Tipo y Año Desde:
            $and = 'and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano >= '.$min_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano != "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Color y Año Desde:
            $and = 'and lng_idcolor = '.$color.' and v.int_ano >= '.$min_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Año Desde y Año Hasta:
            $and = 'and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
                
            //Busqueda por Año Hasta:
            $and = 'and v.int_ano <= '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
                
            //Busqueda por Pais y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and v.int_ano <= '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and v.int_ano <= '.$max_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano <= '.$max_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo, Marca y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and v.int_ano <= '.$max_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo, Marca, Modelo y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and v.int_ano <= '.$max_ano;

        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por País, Ciudad, Tipo, Marca, Modelo, Color y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color.' and v.int_ano <= '.$max_ano;

        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Pais, Color y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idcolor = '.$color.' and v.int_ano <= '.$max_ano;

        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Pais, Tipo y Año Hasta:
            $and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano <= '.$max_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Tipo y Año Hasta:
            $and = 'and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano <= '.$max_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
            
            //Busqueda por Color y Año Hasta:
            $and = 'and lng_idcolor = '.$color.' and v.int_ano <= '.$max_ano;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
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

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
			
        	//Busquda por Color:
            $and = 'and lng_idcolor = '.$color;

        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Precio Mínimo:
        	$and = 'and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por País, Ciudad y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo, Marca y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo, Marca, Modelo y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo, Marca, Modelo, Color y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Color y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idcolor = '.$color.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Tipo y Precio Mínimo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Tipo y Precio Mínimo:
        	$and = 'and lng_idtipo_vehiculo = '.$tipo.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Color y Precio Mínimo:
        	$and = 'and lng_idcolor = '.$color.' and v.str_precio_venta >= '.$min_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Precio Mínimo y Precio Máximo:
        	$and = 'and v.str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Precio Máximo:
        	$and = 'and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por País, Ciudad y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo, Marca y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo, Marca, Modelo y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por País, Ciudad, Tipo, Marca, Modelo, Color y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Color y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idcolor = '.$color.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Tipo y Precio Máximo:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idtipo_vehiculo = '.$tipo.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Tipo y Precio Máximo:
        	$and = 'and lng_idtipo_vehiculo = '.$tipo.' and v.str_precio_venta <= '.$max_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio == "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Color y Precio Máximo:
        	$and = 'and lng_idcolor = '.$color.' and v.str_precio_venta <= '.$max_precio;
        
        }
        

                
        
        else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Año Desde y Año Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Año Desde y Año Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Año Desde y Año Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Año Desde y Año Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Año Desde y Año Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Año Desde y Año Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Tipo Año Desde y Año Hasta:
        	$and = 'and lng_idtipo_vehiculo = '.$tipo.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Marca, Año Desde y Año Hasta:
        	$and = 'and mo.lng_idmarca = '.$marca.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano != "min_ano") and ($max_ano != "max_ano") and ($min_precio == "min_precio") and ($max_precio == "max_precio")) {
        
        	//Busqueda por Marca, Año Desde y Año Hasta:
        	$and = 'and lng_idcolor = '.$color.' and v.int_ano BETWEEN '.$min_ano.' and '.$max_ano;
        
        }        
        
        
        else if (($pais != "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Precio Desde y Precio Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Precio Desde y Precio Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Precio Desde y Precio Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Precio Desde y Precio Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Precio Desde y Precio Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais != "0") and ($ciudad != "vacio") and ($tipo != "0") and ($marca != "0") and ($modelo != "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Pais, Ciudad, Precio Desde y Precio Hasta:
        	$and = 'and v.lng_idpais = '.$pais.' and lng_idciudad = '.$ciudad.' and lng_idtipo_vehiculo = '.$tipo.' and mo.lng_idmarca = '.$marca.' and lng_idmodelo = '.$modelo.' and lng_idcolor = '.$color.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo != "0") and ($marca == "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Tipo Precio Desde y Precio Hasta:
        	$and = 'and lng_idtipo_vehiculo = '.$tipo.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca != "0") and ($modelo == "0") and ($color == "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Marca, Precio Desde y Precio Hasta:
        	$and = 'and mo.lng_idmarca = '.$marca.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }else if (($pais == "0") and ($ciudad == "vacio") and ($tipo == "0") and ($marca == "0") and ($modelo == "0") and ($color != "0") and ($min_ano == "min_ano") and ($max_ano == "max_ano") and ($min_precio != "min_precio") and ($max_precio != "max_precio")) {
        
        	//Busqueda por Marca, Precio Desde y Precio Hasta:
        	$and = 'and lng_idcolor = '.$color.' and str_precio_venta BETWEEN '.$min_precio.' and '.$max_precio;
        
        }

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