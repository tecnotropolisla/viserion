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

    public function paginar($pagina,$and)
    {        
        
        if ($and == "nada") {
           $and = '';
        }

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