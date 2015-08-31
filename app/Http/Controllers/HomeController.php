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
        $this->tamano_pagina = 1;
        Buscador::camposBuscador();   
    }

    public function index()
    {
        $total_vehiculos = DB::table('tbl_vehiculos')->count();
        $paginas = ceil($total_vehiculos / $this->tamano_pagina);
        $vehiculos = Consultas::querysValor3('todosLosVehiculos',$this->tamano_pagina,0,'');
        $total = array('paginas' => $paginas );
        return \View::make('inicio', compact('vehiculos','total'));
    }

    public function paginar($pagina)
    {
        //$tamano_pagina = 20; //Número de registros por página
        $total_vehiculos = DB::table('tbl_vehiculos')->count();
        //$paginas = ceil($total_vehiculos / $tamano_pagina);
        $paginas = ceil($total_vehiculos / $this->tamano_pagina);

        if (!$pagina) {
           $inicio = 0;
           $pagina = 1;
        }
        else {
           $inicio = ($pagina - 1) * $this->tamano_pagina;
        }
        //calculo el total de páginas
        $total_paginas = ceil($total_vehiculos / $this->tamano_pagina);
        $vehiculos = Consultas::querysValor3('todosLosVehiculos',$this->tamano_pagina,$inicio,'');

        return \View::make('paginador',compact('vehiculos'));
    }
}