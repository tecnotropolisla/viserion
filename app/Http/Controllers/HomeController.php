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
        $total_vehiculos = DB::table('tbl_vehiculos')->count();
        $paginas = ceil($total_vehiculos / $this->tamano_pagina);
        $vehiculos = Consultas::querysValor3('todosLosVehiculos',$this->tamano_pagina,0,'');
        $ultimosVehiculos = Consultas::querysValor3('ultimosVehiculos',$this->tamano_pagina,0,'');
        $total = array('paginas' => $paginas );
        
        
        //\View::share(compact('total'));
        
        return \View::make('inicio', compact('vehiculos','ultimosVehiculos','total'));
    }

    public function paginar($pagina)
    {        
        if (!$pagina) {
           $inicio = 0;
           $pagina = 1;
        }
        else {
           $inicio = ($pagina - 1) * $this->tamano_pagina;
        }
       
        $vehiculos = Consultas::querysValor3('todosLosVehiculos',$this->tamano_pagina,$inicio,'');
        return \View::make('paginador',compact('vehiculos'));
    }
}