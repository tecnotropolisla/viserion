<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
	/**
     *
     * @return void
     */
    public function __construct()
    {
        $this->tamano_pagina = 2;
    }

    public function index()
    {

        //$tamano_pagina = 20; //Número de registros por página
        $total_vehiculos = DB::table('tbl_vehiculos')->count();
        //$paginas = ceil($total_vehiculos / $tamano_pagina);
        $paginas = ceil($total_vehiculos / $this->tamano_pagina);

        $vehiculos = DB::table('tbl_vehiculos as v')
            ->leftjoin('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')//Transmisión no es obligatoria
            ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
            ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
            ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
			->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
			->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
			->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
			->where('ima.int_peso', '=', 1)
            ->select('v.*','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 
            		'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais',
            		'ma.str_marca as marca','mo.str_modelo as modelo')
            //->get();
            ->skip(0)->take($this->tamano_pagina)->get();

                //->skip() = offset
                //->take() = limit

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

        $vehiculos = DB::table('tbl_vehiculos as v')
            ->leftjoin('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')//Transmisión no es obligatoria
            ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
            ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
            ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
            ->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
            ->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
            ->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
            ->where('ima.int_peso', '=', 1)
            ->select('v.*','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 
            		'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais',
            		'ma.str_marca as marca','mo.str_modelo as modelo')
            //->get();
            ->skip($inicio)->take($this->tamano_pagina)->get();

                //->skip() = offset
                //->take() = limit

            return \View::make('paginador',compact('vehiculos'));
           
    }

}