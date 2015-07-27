<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
	public function index()
    {

        $tamano_pagina = 2; //Número de registros por página
        $total_vehiculos = DB::table('tbl_vehiculos')->count();
        $paginas = ceil($total_vehiculos / $tamano_pagina);

        $vehiculos = DB::table('tbl_vehiculos as v')
            ->join('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
            ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
            ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
            ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
			->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
			->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
			->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
			->where('ima.int_peso', '=', 1)
            ->select('v.*','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais','ma.str_marca as marca','mo.str_modelo as modelo')
            //->get();
            ->skip(0)->take($tamano_pagina)->get();

                //->skip() = offset
                //->take() = limit

            $total = array('paginas' => $paginas );

        return \View::make('inicio', compact('vehiculos','total'));
    }


    public function paginar($pagina)
    {
        
        //echo $pagina;die();

        $tamano_pagina = 2; //Número de registros por página
        $total_vehiculos = DB::table('tbl_vehiculos')->count();
        $paginas = ceil($total_vehiculos / $tamano_pagina);

        if (!$pagina) {
           $inicio = 0;
           $pagina = 1;
        }
        else {
           $inicio = ($pagina - 1) * $tamano_pagina;
        }
        //calculo el total de páginas
        $total_paginas = ceil($total_vehiculos / $tamano_pagina);

        $vehiculos = DB::table('tbl_vehiculos as v')
            ->join('cat_datos_maestros as dm', 'dm.id', '=', 'v.lng_idtransmision')
            ->join('cat_datos_maestros as dm2', 'dm2.id', '=', 'v.lng_iddireccion')
            ->join('cat_datos_maestros as dm3', 'dm3.id', '=', 'v.lng_idcolor')
            ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')
            ->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
            ->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
            ->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
            ->where('ima.int_peso', '=', 1)
            ->select('v.*','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 'dm2.str_descripcion as direccion','dm3.str_descripcion as color','p.str_paises as pais','ma.str_marca as marca','mo.str_modelo as modelo')
            //->get();
            ->skip($inicio)->take($tamano_pagina)->get();

                //->skip() = offset
                //->take() = limit


        $resultados = '';
        foreach ($vehiculos as $vehiculo)
        {

           $resultados .=

                                    '<div class="result-item format-standard">

                                        <div class="result-item-image">                         
                                            <a href="Detalle-del-Vehiculo/'.$vehiculo->id.'" class="media-box"><img class="" src="data:image/jpeg;base64,'.$vehiculo->imagen.'" /></a>
                                            <span class="vehicle-age">
                                            <p class="label label-default">'.$vehiculo->int_ano.'</p>
                                            <p class="text-center" style="margin-top: -2px;"><img class="" src="data:image/jpeg;base64, '.$vehiculo->bandera.'" style="width:35px" /></p>                                       
                                            </span>
                                            <span class="  premium-listing "></span>
                                            
                                            <div class="result-item-view-buttons">';

                                                if ($vehiculo->str_video == ""){
            $resultados .=                         '<a class="col-md-6" href="Detalle-del-Vehiculo/'.$vehiculo->id.'"><i class="fa fa-eye"></i> Ver</a>
                                                    <a class="col-md-6" href="#"><i class="fa fa-heart"></i> Fav</a>';
                                                }else{
            $resultados .=                         '<a class="col-md-4" href="'.$vehiculo->str_video.'" data-rel="prettyPhoto"><i class="fa fa-play-circle-o"></i> Video</a>
                                                    <a class="col-md-4" href="Detalle-del-Vehiculo/'.$vehiculo->id.'"><i class="fa fa-eye"></i> Ver</a>
                                                    <a class="col-md-4" href="#"><i class="fa fa-heart"></i> Fav</a>';
                                                }
                                                
            $resultados .=                 '</div>

                                        </div>

                                        <div class="result-item-in">

                                            <h4 class="result-item-title"><a href="Detalle-del-Vehiculo/'.$vehiculo->id.'">'.$vehiculo->marca." ".$vehiculo->modelo.'</a></h4>
                                            
                                            <div class="result-item-cont">
                                                <div class="result-item-block col1">
                                                    <p>'.$vehiculo->str_comentario.'</p>
                                                </div>
                                                <div class="result-item-block col2">
                                                    <div class="result-item-pricing">
                                                        <div class="price" style="font-size:20px">$ '.number_format($vehiculo->str_precio_venta, null, ',', '.').' </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="result-item-features">
                                                <ul class="inline" style="font-size:12px">
                                                   <li>País: '.$vehiculo->pais.'</li>
                                                    <li>Km: '.number_format($vehiculo->str_recorrido, null, ',', '.').'</li>
                                                    <li>Motor: '.$vehiculo->str_motor.'</li>
                                                    <li>Transmisión: '.$vehiculo->transmision.'</li>
                                                    <li>Dirección: '.$vehiculo->direccion.'</li>
                                                    <li>Locación: (Ciudad)</li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>';
        }

        return $resultados;

    }

}