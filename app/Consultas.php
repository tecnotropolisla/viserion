<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use DB;

class Consultas extends Model
{
	protected function querysValor($consulta,$valor){

		switch ($consulta) {
				
			case 'cuenta_usuario':
				$cuenta_usuario = DB::table('tbl_personas as per')
				->join('cat_paises as p', 'p.id', '=', 'per.lng_idpais')
				->join('cat_datos_maestros as dm', 'dm.id', '=', 'per.lng_idgenero')				 
				->where('per.id', '=', $valor)
				->Where(function ($query) {
					$query->where('p.bol_eliminado', '=', 0);
				})
				->select('per.*','per.created_at as fecha_inscripcion','per.dmt_fecha_nacimiento as fecha_nacimiento','dm.str_descripcion as genero','p.str_paises as pais','p.blb_img as blb_bandera','p.str_codarea')
				->get();
				return $cuenta_usuario;
			break;			
						
            case 'vehiculos':
                 $vehiculos = DB::table('tbl_vehiculos as v')
		        ->where('v.id', '=', $valor)
		        ->Where(function ($query) {
		        	$query->where('v.bol_eliminado', '=', 0);
		        })		        
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
		        ->join('cat_datos_maestros as dm14', 'dm14.id', '=', 'v.lng_idcilindrada')
		        
		        ->join('cat_datos_maestros as dm15', 'dm15.id', '=', 'v.lng_idsubtipo_vehiculo')
		        
			    ->join('cat_paises as p', 'p.id', '=', 'v.lng_idpais')			    
			    ->join('cat_ciudades as ciu', 'ciu.id', '=', 'v.lng_idciudad')			    
			    ->join('tbl_modelos as mo', 'mo.id', '=', 'v.lng_idmodelo')
			    ->join('cat_marcas as ma', 'ma.id', '=', 'mo.lng_idmarca')
			    ->join('tbl_imagenes_vehiculos as ima', 'ima.lng_idvehiculo', '=', 'v.id')
		        ->join('tbl_personas as per', 'per.id', '=', 'v.lng_idpersona')
		        ->join('cat_paises as p2', 'p2.id', '=', 'v.lng_idpais')
			    ->where('v.id', '=', $valor)
			    ->Where(function ($query) {
			    	$query->where('ima.int_peso', '=', 1);
			    })
			    ->Where(function ($query) {
			    	$query->where('v.bol_eliminado', '=', 0);
			    })			    
			    ->select('v.*','per.name as usuario','p2.str_paises as pais_persona','p2.str_abreviatura','p2.blb_img as bandera_persona','per.str_nombre as nombre_persona','per.str_apellido as apellido_persona','per.email',
		            'per.str_ididentificacion','per.str_telefono','per.str_twitter','per.str_facebook','per.str_instagram',
		            'per.blb_img as ima_persona','ima.blb_img as imagen', 'p.blb_img as bandera','dm.str_descripcion as transmision', 
		            'dm2.str_descripcion as direccion','dm3.str_descripcion as color', 'dm4.str_descripcion as estereo',
		            'dm5.str_descripcion as tapizado', 'dm6.str_descripcion as vidrios', 'dm7.str_descripcion as traccion',
		            'dm8.str_descripcion as combustible', 'dm9.str_descripcion as negociable', 
		            'dm10.str_descripcion as financiamiento', 'dm11.str_descripcion as chocado', 
		            'dm12.str_descripcion as unicodueno', 'dm13.str_descripcion as reparado', 'dm14.str_descripcion as cilindrada', 'dm15.str_descripcion as subtipo',
		            'p.str_paises as pais', 'ciu.str_ciudad as ciudad', 'ma.str_marca as marca', 'per.created_at as fecha_inscripcion',
		            'mo.str_modelo as modelo')
			    ->get();
			    return $vehiculoDetalle;
            break;

			case 'imagenes':
				    $imagenes = DB::table('tbl_imagenes_vehiculos as ima')
				    ->where('ima.lng_idvehiculo', '=', $valor)
				    ->Where(function ($query) {
				    	$query->where('ima.bol_eliminado', '=', 0);
				    })
                    ->Where(function ($query) {
                        $query->where('ima.int_peso', '=', 2);
                    })                      			    
				    ->select('ima.int_peso','ima.blb_img as imagen')
				    ->get();
				return $imagenes;
			break;

			case 'caracteristicas':
			        $caracteristicas = DB::table('tbl_detalles_vehiculos as dv')
			        ->join('cat_datos_maestros as dm', 'dm.id', '=', 'dv.lng_idcaracteristica')
			        ->where('dv.lng_idvehiculo', '=', $valor)
			        ->Where(function ($query) {
			        	$query->where('dv.bol_eliminado', '=', 0);
			        })			        
			        ->select('dm.str_descripcion','dm.str_tipo')
			        ->get();
				return $caracteristicas;
			break;

			case 'maestro':
				$maestro = DB::table('cat_datos_maestros')
				->where('str_tipo', $valor)
				->Where(function ($query) {
					$query->where('bol_eliminado', '=', 0);
				})				
				->lists('str_descripcion','id');
				return $maestro;
			break;
				
			case 'maestro2':
				$maestro2 = DB::table('cat_datos_maestros')
				->where('str_tipo', $valor)
				->Where(function ($query) {
					$query->where('str_caracteristica', '=', 'automoviles');
				})
				->Where(function ($query) {
					$query->where('bol_eliminado', '=', 0);
				})
				->lists('str_descripcion','id');
				return $maestro2;
			break;

			case 'marcasTiposPublicadas':
				$marcas = DB::table('cat_marcas as m')
				->join('tbl_tipos_marcas as tm', 'tm.lng_idmarca', '=', 'm.id')
				->join('cat_datos_maestros as dm', 'dm.id', '=', 'tm.lng_idtipo')			
				->join('tbl_modelos as mo', 'mo.lng_idmarca', '=', 'm.id')
				->join('tbl_vehiculos as v', 'v.lng_idmodelo', '=', 'mo.id')				
				->where('dm.id', '=', $valor)
				->Where(function ($query) {
					$query->where('m.bol_eliminado', '=', 0);
				})
				->groupBy('m.str_marca','m.id')
				->orderBy('m.str_marca')
				->select('m.str_marca','m.id')
				->lists('str_marca','id');
				return $marcas;
			break;
				
			case 'marcasTipos':
				$marcas = DB::table('cat_marcas as m')
				->join('tbl_tipos_marcas as tm', 'tm.lng_idmarca', '=', 'm.id')
				->join('cat_datos_maestros as dm', 'dm.id', '=', 'tm.lng_idtipo')
				->where('dm.id', '=', $valor)
				->Where(function ($query) {
					$query->where('m.bol_eliminado', '=', 0);
				})				
				->orderBy('m.str_marca')
				->select('m.str_marca','m.id')
				->lists('str_marca','id');
				return $marcas;
			break;
				
			case 'marcasSubtipos':
				$marcas = DB::table('cat_marcas as m')
				->join('tbl_tipos_marcas as tm', 'tm.lng_idmarca', '=', 'm.id')
				->join('cat_datos_maestros as dm', 'dm.id', '=', 'tm.lng_idtipo')
				->join('tbl_subtipos_marcas as stm', 'stm.lng_idtipo_marca', '=', 'tm.id')
				->where('stm.lng_idsubtipo', '=', $valor)
				->Where(function ($query) {
					$query->where('dm.id', '=', 153);
				})
				->Where(function ($query) {
					$query->where('m.bol_eliminado', '=', 0);
				})				
				->orderBy('m.str_marca')
				->select('m.str_marca','m.id')
				->lists('str_marca','id');
				return $marcas;
			break;			
			
            case 'modelos':
                    $modelos = DB::table('tbl_modelos')
                    ->where('lng_idmarca', $valor)
                    ->Where(function ($query) {
                    	$query->where('bol_eliminado', '=', 0);
                    })                    
                    ->lists('str_modelo','id');
                return $modelos;
            break;
            
            case 'ciudades':
            
            	$ciudades = DB::select("select id, str_ciudad from cat_ciudades where lng_idpais = ".$valor." and bol_eliminado = 0 ");
            
            	return $ciudades;
            break;

            case 'ciudadesBuscador':
            
            	$ciudades = DB::select("select c.id, c.str_ciudad 
						from tecnotropolislaDrogon.cat_ciudades c
						join tecnotropolislaDrogon.tbl_vehiculos as v on v.lng_idciudad = c.id      		
						where c.lng_idpais = ".$valor."
						and c.bol_eliminado = 0
						group by c.id, c.str_ciudad
						order by c.str_ciudad");
            
            	return $ciudades;
            break;            
            
            case 'cilindrada':
            	$cilindrada = DB::table('cat_datos_maestros')
            	->where('str_caracteristica', '=', $valor)
            	->Where(function ($query) {
            		$query->where('str_tipo', '=', 'desplazamiento_vehiculos');
            	})
            	->Where(function ($query) {
            		$query->where('bol_eliminado', '=', 0);
            	})            	
            	->select('str_descripcion','id')
            	->lists('str_descripcion','id');
            	return $cilindrada;
            break;
            
            //La utiliza el formulario carros.camposGenericos. 
            //Al cambiar el campo lng_idtipo_vehiculo llama a la funcion
            //dependienteMarcas(valor) y luego a dependienteCilindrada(valor) en el archivo ajax.js
            //Ver tambien dependienteCilindrada(valor) en MaestroController.php
            case 'cilindradaTipos':
            	$cilindrada = DB::table('cat_datos_maestros')
            	->where('str_caracteristica2', $valor)
            	->Where(function ($query) {
            		$query->where('str_tipo', '=', 'desplazamiento_vehiculos');
            	})
            	->Where(function ($query) {
            		$query->where('bol_eliminado', '=', 0);
            	})            	
            	->select('str_descripcion','id')
            	->lists('str_descripcion','id');
            	return $cilindrada;
            break;       
        }
	}

    protected function querysValor2($consulta,$valor,$valor2){

        switch ($consulta) {

            case 'ciudades':

                $ciudades = DB::select("select id, str_ciudad 
                	from cat_ciudades 
                	where lng_idpais = ".$valor2." 
                	AND str_ciudad LIKE '%".$valor."%' and bol_eliminado = 0");

                return $ciudades;

            case 'ciudadesBuscadorLetra':

                $ciudades = DB::select("select c.id, c.str_ciudad 
                	from cat_ciudades as c
                	join tbl_vehiculos v on v.lng_idciudad = c.id 
                	where c.lng_idpais = ".$valor2." 
                	AND c.str_ciudad LIKE '%".$valor."%' and c.bol_eliminado = 0
					group by c.id, c.str_ciudad
					order by c.str_ciudad");

                return $ciudades;

            break;
        }
    }   

	protected function querys($consulta){

        switch ($consulta) {

            case 'tipo':
                $tipo = DB::table('cat_datos_maestros')
                ->where('str_tipo', 'tipos')
                ->Where(function ($query) {
                    $query->where('int_peso', '>', 0);
                })
                ->Where(function ($query) {
                    $query->where('bol_eliminado', '=', 0);
                })              
                ->orderBy('int_peso')
                ->lists('str_descripcion','id');
                return $tipo;
            break;
            
            case 'menu':
                $menu = DB::table('cat_datos_maestros')
		    	->where('str_tipo', 'tipos')
		    	->Where(function ($query) {
		    		$query->where('int_peso', '>', 0);
		    	})
		    	->Where(function ($query) {
		    		$query->where('bol_eliminado', '=', 0);
		    	})		    	
                ->orderBy('int_peso')
		    	->select('str_descripcion as titulo','str_caracteristica as detalle','str_caracteristica2 as icono','str_caracteristica3 as ruta')
		    	->get();
                return $menu;
            break;

            case 'enfriamiento':
                $enfriamiento = DB::table('cat_datos_maestros')
                ->where('str_tipo', 'enfriamiento_vehiculos')
                ->Where(function ($query) {
                	$query->where('bol_eliminado', '=', 0);
                })                
                ->lists('str_descripcion','id');
                return $enfriamiento;
            break;

            case 'modelos':
                $modelos = DB::table('tbl_modelos')
                ->Where(function ($query) {
                	$query->where('bol_eliminado', '=', 0);
                })
                ->orderBy('str_modelo')            
                ->lists('str_modelo','id');
                return $modelos;
            break;

            case 'paises':
                $paises = DB::table('cat_paises as p')
                ->join('cat_ciudades as c', 'c.lng_idpais', '=', 'p.id')
                ->Where(function ($query) {
                	$query->where('p.bol_eliminado', '=', 0);
                })                
                ->orderBy('p.str_paises')
                ->select('p.str_paises','p.id')
                ->lists('p.str_paises','p.id');
                return $paises;
            break;

            case 'paisesBuscador':
                $paises = DB::table('cat_paises as p')
                ->join('tbl_vehiculos as v', 'v.lng_idpais', '=', 'p.id')
                ->Where(function ($query) {
                	$query->where('p.bol_eliminado', '=', 0);
                })
                ->groupBy('p.str_paises','p.id')
                ->orderBy('p.str_paises')
                ->select('p.str_paises','p.id')
                ->lists('p.str_paises','p.id');
                return $paises;
            break; 
        }
    }

    protected function querysValor3($consulta,$limit,$offset,$and){

        switch ($consulta) {

            case 'total_vehiculos':
                
                $total_vehiculos = DB::select("SELECT HIGH_PRIORITY count(*) as total from tecnotropolislaDrogon.tbl_vehiculos as v where v.bol_eliminado = 0");
                
                return $total_vehiculos;

            break;

            case 'todosLosVehiculos':
                
            	/*
                $todosLosVehiculos = DB::select("select v.*,ima.blb_img as imagen, p.blb_img as bandera,dm.str_descripcion as transmision, 
                            dm2.str_descripcion as direccion,dm3.str_descripcion as color,dm4.str_descripcion as cilindrada,p.str_paises as pais,
                            ciu.str_ciudad as ciudad,ma.str_marca as marca,mo.str_modelo as modelo
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada            
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca                		                		
                    join tecnotropolislaDrogon.tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id                		                		                		                	
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad                                    		
                	where ima.int_peso = 1
                    order by v.id desc limit ".$limit." offset ".$offset." ");                                
                */
                
            	$todosLosVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.*,ima.blb_img as imagen, p.blb_img as bandera,dm.str_descripcion as transmision, 
                            dm2.str_descripcion as direccion,dm3.str_descripcion as color,dm4.str_descripcion as cilindrada,p.str_paises as pais,
                            ciu.str_ciudad as ciudad,ma.str_marca as marca,mo.str_modelo as modelo
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada            
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca
                    join (SELECT lng_idvehiculo, blb_img FROM tecnotropolislaDrogon.tbl_imagenes_vehiculos WHERE int_peso = 1) as ima on ima.lng_idvehiculo = v.id             	
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad                               	                    
            		where v.bol_eliminado = 0
            		order by v.id desc limit ".$limit." offset ".$offset." ");
            	
                return $todosLosVehiculos;

            break;

            case 'total_buscarVehiculos':
                
            	/*
                $total_buscarVehiculos = DB::select("select count(*) as total
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada            
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca
                    join tecnotropolislaDrogon.tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad
                    where ima.int_peso = 1 ".$and."

                    order by v.id desc ");
                */
            	/*
            	$total_buscarVehiculos = DB::select("SELECT HIGH_PRIORITY count(*) as total
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca
                    join (SELECT lng_idvehiculo, blb_img FROM tecnotropolislaDrogon.tbl_imagenes_vehiculos WHERE int_peso = 1) as ima on ima.lng_idvehiculo = v.id  
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad                    
            		where v.bol_eliminado = 0 ".$and."            	
                    order by v.id desc ");
            	*/
            	
            	$total_buscarVehiculos = DB::select("SELECT HIGH_PRIORITY count(*) as total
                    from tecnotropolislaDrogon.tbl_vehiculos as v
            		where v.bol_eliminado = 0 ".$and."
                    order by v.id desc ");            	
            	
            	
                return $total_buscarVehiculos;

            break;

            case 'buscarVehiculos':
                
            	/*
                $buscarVehiculos = DB::select("select v.*,ima.blb_img as imagen, p.blb_img as bandera,dm.str_descripcion as transmision, 
                            dm2.str_descripcion as direccion,dm3.str_descripcion as color,dm4.str_descripcion as cilindrada,p.str_paises as pais,
                            ciu.str_ciudad as ciudad,ma.str_marca as marca,mo.str_modelo as modelo
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada            
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca
                    join tecnotropolislaDrogon.tbl_imagenes_vehiculos as ima on ima.lng_idvehiculo = v.id
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad
                    where ima.int_peso = 1 ".$and."

                    order by v.id desc limit ".$limit." offset ".$offset." ");                
                */
                
            	$buscarVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.*,ima.blb_img as imagen, p.blb_img as bandera,dm.str_descripcion as transmision,
                            dm2.str_descripcion as direccion,dm3.str_descripcion as color,dm4.str_descripcion as cilindrada,p.str_paises as pais,
                            ciu.str_ciudad as ciudad,ma.str_marca as marca,mo.str_modelo as modelo
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca
                    join (SELECT lng_idvehiculo, blb_img FROM tecnotropolislaDrogon.tbl_imagenes_vehiculos WHERE int_peso = 1) as ima on ima.lng_idvehiculo = v.id
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad
                    where v.bol_eliminado = 0 ".$and."            	
                    order by v.id desc limit ".$limit." offset ".$offset." ");                
                
                return $buscarVehiculos;

            break;

            case 'ultimosVehiculos':
            
            	$ultimosVehiculos = DB::select("SELECT HIGH_PRIORITY SQL_BUFFER_RESULT v.*,ima.blb_img as imagen, p.blb_img as bandera,dm.str_descripcion as transmision,
                            dm2.str_descripcion as direccion,dm3.str_descripcion as color,dm4.str_descripcion as cilindrada,p.str_paises as pais,
                            ciu.str_ciudad as ciudad,ma.str_marca as marca,mo.str_modelo as modelo
                    from tecnotropolislaDrogon.tbl_vehiculos as v
                    join tecnotropolislaDrogon.cat_datos_maestros as dm on dm.id = v.lng_idtransmision
                    join tecnotropolislaDrogon.cat_datos_maestros as dm2 on dm2.id = v.lng_iddireccion
                    join tecnotropolislaDrogon.cat_datos_maestros as dm3 on dm3.id =  v.lng_idcolor
                    join tecnotropolislaDrogon.cat_datos_maestros as dm4 on dm4.id =  v.lng_idcilindrada
                    join tecnotropolislaDrogon.cat_paises as p on p.id = v.lng_idpais
                    join tecnotropolislaDrogon.tbl_modelos as mo on mo.id =  v.lng_idmodelo
                    join tecnotropolislaDrogon.cat_marcas as ma on ma.id =  mo.lng_idmarca
                    join (SELECT lng_idvehiculo, blb_img FROM tecnotropolislaDrogon.tbl_imagenes_vehiculos WHERE int_peso = 1) as ima on ima.lng_idvehiculo = v.id
                    join tecnotropolislaDrogon.cat_ciudades as ciu on ciu.id =  v.lng_idciudad
                    where v.bol_eliminado = 0            
                    order by v.id desc limit 9 offset 0");
            
            	return $ultimosVehiculos;
            
            	break;            
        }
    }
}