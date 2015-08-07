<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Vehiculo;
use Troovami\DetalleVehiculo;
use Troovami\ImagenesVehiculos;
use Illuminate\Support\Facades\Auth;
use Troovami\Consultas;

class PublicarCarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPublicar(Request $request)
    {
      	
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
    	
        $this->create($request->all());

        return redirect($this->redirectPath()); 
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    	return Validator::make($data, [
                
            'lng_idtipo_vehiculo' => 'required|max:255',
            'lng_idmodelo' => 'required|max:255',
            'str_placa' => 'required|string|max:255|unique:tbl_vehiculos',
            //'int_cantidad_puertas' => 'required|integer|max:255',
            'lng_idcolor' => 'required|max:255',
            'lng_iddireccion' => 'required|max:255',
            'lng_idestereo' => 'required|max:255',
            'lng_idtransmision' => 'required|max:255',
            'lng_idtapizado' => 'required|max:255',
            'lng_idvidrios' => 'required|max:255',
            'lng_idtraccion' => 'required|max:255',
            'lng_idcombustible' => 'required|integer',
            //'int_ano' => 'required|max:255',
            'str_recorrido' => 'required|max:255',
            'str_cilindrada' => 'required|max:255',
            //'int_cilindros' => 'required|max:255',
            'lng_idchocado' => 'required|max:255',
            'lng_idnegociable' => 'required|max:255',
            'lng_idfinanciamiento' => 'required|max:255',
            'lng_idunicodueno' => 'required|max:255',
            'lng_idmotorreparado' => 'required|max:255',
            
            'lng_idcaracteristica' => 'required',

            'str_precio_venta' => 'required|max:255',
            'lng_idpais' => 'required|max:255',
    		'blb_img0' => 'required|image:jpeg,png,jpg',
            'blb_img1' => 'required|image:jpeg,png,jpg',
            'blb_img2' => 'required|image:jpeg,png,jpg',
            'blb_img3' => 'required|image:jpeg,png,jpg',
            'blb_img4' => 'required|image:jpeg,png,jpg',
            'blb_img5' => 'required|image:jpeg,png,jpg',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  array  $data
     * @return Vehiculo
     */
    public function create(array $data)
    {
    	if(!isset($data['lng_idequipo_medico'])){$data['lng_idequipo_medico'] = null;} 
        if(!isset($data['lng_idarranque'])){$data['lng_idarranque'] = null;}
        if(!isset($data['lng_iddesplazamiento'])){$data['lng_iddesplazamiento'] = null;}
        if(!isset($data['int_carga'])){$data['int_carga'] = null;}
        if(!isset($data['int_lastre'])){$data['int_lastre'] = null;}
        if(!isset($data['str_version'])){$data['str_version'] = null;}        
        if(!isset($data['int_pisos'])){$data['int_pisos'] = null;}
        if(!isset($data['int_pasajeros'])){$data['int_pasajeros'] = null;}  
        if(!isset($data['lng_idventana'])){$data['lng_idventana'] = null;}  
        if(!isset($data['str_carroceria'])){$data['str_carroceria'] = null;}  
        if(!isset($data['lng_idbano'])){$data['lng_idbano'] = null;}  
        if(!isset($data['lng_idfrenado'])){$data['lng_idfrenado'] = null;}  
        if(!isset($data['dbl_neumatico'])){$data['dbl_neumatico'] = null;}  
        if(!isset($data['int_potenciamax'])){$data['int_potenciamax'] = null;}
         
        //return Vehiculo::create([
        $vehiculo = Vehiculo::create([

            'lng_idpersona' =>  Auth::user()->id,
            'lng_idtipo_vehiculo' => $data['lng_idtipo_vehiculo'],
            'lng_idmodelo' => $data['lng_idmodelo'],
            'str_placa' => trim($data['str_placa']),
            'int_cantidad_puertas' => $data['int_cantidad_puertas'],
            'lng_idcolor' => $data['lng_idcolor'],
            'lng_iddireccion' => $data['lng_iddireccion'],
            'lng_idestereo' => $data['lng_idestereo'],
            'lng_idtransmision' => $data['lng_idtransmision'],
            'lng_idtapizado' => $data['lng_idtapizado'],
            'lng_idvidrios' => $data['lng_idvidrios'],
            'lng_idtraccion' => $data['lng_idtraccion'],
            'lng_idcombustible' => $data['lng_idcombustible'],
            'int_ano' => $data['int_ano'],
            'str_recorrido' => $data['str_recorrido'],
            'str_cilindrada' => trim($data['str_cilindrada']),
            'int_cilindros' => $data['int_cilindros'],
            'lng_idchocado' => $data['lng_idchocado'],
            'lng_idnegociable' => $data['lng_idnegociable'],
            'lng_idfinanciamiento' => $data['lng_idfinanciamiento'],
            'lng_idunicodueno' => $data['lng_idunicodueno'],           
            'lng_idmotorreparado' => $data['lng_idmotorreparado'],
            'str_video' => trim($data['str_video']),
            'str_comentario' => trim($data['str_comentario']),
            'lng_idpais' => $data['lng_idpais'], 
            'str_precio_venta' => trim($data['str_precio_venta']),
            'str_moneda' => trim($data['str_moneda']),
            'lng_idequipo_medico' => $data['lng_idequipo_medico'],
            'lng_iddesplazamiento' => $data['lng_iddesplazamiento'],
            'int_carga' => $data['int_carga'],
            'lng_idarranque' => $data['lng_idarranque'],
            'int_lastre' => $data['int_lastre'], 
            'str_version' => trim($data['str_version']),
            'int_pisos' => $data['int_pisos'],
            'int_pasajeros' => $data['int_pasajeros'],
            'str_carroceria' => trim($data['str_carroceria']), 
            'lng_idbano' => $data['lng_idbano'],
            'dbl_neumatico' => $data['dbl_neumatico'],
            'int_potenciamax' => $data['int_potenciamax'],                                 
            'lng_idfrenado' => $data['lng_idfrenado'], 

        ]);
		
        //Último id:
        $lastInsertedId = $vehiculo->id;

        //Asigno los valores de un array a otro para reniniciar los indices desde 0
        $detalles = array_values($data['lng_idcaracteristica']);
        
        $total_detalles = count($detalles);
        
        for ($i = 0; $i <= $total_detalles - 1; $i++) 
        {      
            $detalleVehiculo = DetalleVehiculo::create([
                'lng_idvehiculo' => $lastInsertedId,
                'lng_idcaracteristica' => $detalles[$i],
            ]);
        }

        $total_imagenes = 6;
                
        for ($i = 0; $i <= $total_imagenes - 1; $i++)
        {   
        	$imagenesVehiculos = ImagenesVehiculos::create([
        		'lng_idvehiculo' => $lastInsertedId,
        		'blb_img' => base64_encode(file_get_contents($data['blb_img'.$i])),
                'int_peso' => $data['principal'.$i],
	        ]);
        }
  
        return $imagenesVehiculos;
        
    }

    //Este método llama a la vista del formulario de carros:
    public function carros()
    {
        $marcas = Consultas::querys('marcas');
        $modelos = Consultas::querys('modelos'); 
  	    $tipo_vehiculos = Consultas::querys('tipo_vehiculos');   
        $colores = Consultas::querys('colores');
        $respuesta = Consultas::querys('respuesta');
        $seguridad = Consultas::querys('seguridad');
        $sonido = Consultas::querys('sonido');
        $exterior = Consultas::querys('exterior');
        $confort = Consultas::querys('confort');
        $accesorios_internos = Consultas::querys('accesorios_internos');
        $direccion = Consultas::querys('direccion');
        $estereo = Consultas::querys('estereo');
        $transmision = Consultas::querys('transmision');
        $tapizado = Consultas::querys('tapizado');
        $vidrios = Consultas::querys('vidrios');
        $traccion = Consultas::querys('traccion');
        $combustible = Consultas::querys('combustible');
        $paises = Consultas::querys('paises');
        
        return \View::make('carros.formulario', compact('marcas','modelos','tipo_vehiculos','colores','respuesta','seguridad','sonido','exterior',
                'confort','accesorios_internos','direccion','estereo','transmision','tapizado','vidrios','traccion','combustible','paises'));
    }

    //Este método lo llamo desde routes.php pero se genera desde una función de ajax,
    //para crear contenido dinámico al formulario.
    //Nota: ver el archivo ajaxCars.js, función "formularioDinamico()" :)
    public function formulario($valor)
    {
    	switch ($valor) {
    
            case 'Carros de Golf':
                    return \View::make('carros.carrosGolf');
                break;
                
            case 'Gruas':
                    return \View::make('carros.gruas');
                 break;

            case 'Blindados':
                    return \View::make('carros.blindados');
                break;

    		case 'Ambulancias':
                    $respuesta = Consultas::querys('respuesta');
    				return \View::make('carros.ambulancias',compact('respuesta'));
    			break;
    
    		case 'Autobuses':
                    $respuesta = Consultas::querys('respuesta');
    				return \View::make('carros.autobuses',compact('respuesta'));
    			break;

    		case 'Camiones':
                    $frenado = Consultas::querys('frenado'); 
                    return \View::make('carros.camiones',compact('frenado'));
    			break;
    			
    		case 'Kartings':
                    $desplazamiento = Consultas::querys('desplazamiento'); 
                    $arranque = Consultas::querys('arranque'); 
    			  	return \View::make('carros.kartings',compact('desplazamiento','arranque'));
    			  break;
    			  
    	}
    }

    //Este método lo llamo desde routes.php pero se genera desde una función de ajax,
    //para crear un campo select dinámico en el formulario.
    //Nota: ver el archivo ajaxCars.js, función "dependiente(valor)" :)    
    public function dependiente($valor)
    {
        //echo $valor;
        $modelos = Consultas::querysValor('modelos',$valor);
            //var_dump($modelos);
            $select ="<select id='modelos' name='modelos' class='form-control' onchange='idmodelo(this.value);validar(this.value,this.name)'>
            
                        <option value=''>Seleccione</option>";

                foreach ($modelos as $key => $value) 
                {
                    $select.=" <option value='".$key."'>".$value."</option>";
                }

            $select.="</select>";

        return $select;
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    
}
