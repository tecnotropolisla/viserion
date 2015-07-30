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
                
            'lng_idtipo_vehiculo' =>    'required|max:255',
            'str_placa' =>  'required|string|max:255|unique:tbl_vehiculos',
            'lng_idmodelo' =>   'required|max:255',
            'int_ano' =>    'required|max:255',
            'int_cantidad_puertas' =>   'required|integer|max:255',
            'lng_idcolor' =>    'required|max:255',
            'lng_idnegociable' =>   'required|max:255',
            'lng_idmotorreparado' =>    'required|max:255',
            'lng_idfinanciamiento' =>   'required|max:255',
            'lng_idtapizado' =>   'required|max:255',
            'lng_idvidrios' =>   'required|max:255',
            'lng_idunicodueno' =>   'required|max:255',
            'lng_idtraccion' =>   'required|max:255',
            'lng_idchocado' =>  'required|max:255',
            'str_recorrido' =>  'required|max:255',
        	'lng_idcombustible' =>  'required|integer',
            'str_precio_venta' =>   'required|max:255',
            'lng_idpais' =>   'required|max:255',
    		'lng_idcaracteristica' =>    'required',
            'int_cilindros' => 'required|max:255',
    		'blb_img0' =>    'required|image:jpeg,png,jpg',
            'blb_img1' =>    'required|image:jpeg,png,jpg',
            'blb_img2' =>    'required|image:jpeg,png,jpg',
            'blb_img3' =>    'required|image:jpeg,png,jpg',
            'blb_img4' =>    'required|image:jpeg,png,jpg',
            'blb_img5' =>    'required|image:jpeg,png,jpg',
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

    	if ($data['str_moneda'] == null){
        	$data['str_moneda'] = "Moneda local";
        }
        
        //return Vehiculo::create([
        $vehiculo = Vehiculo::create([

            'lng_idpersona' =>  Auth::user()->id,
            'lng_idtipo_vehiculo' =>    $data['lng_idtipo_vehiculo'],
            'str_placa' =>  trim($data['str_placa']),
            'lng_idmodelo' =>   $data['lng_idmodelo'],
            'int_ano' =>    $data['int_ano'],
            'int_cantidad_puertas' =>   $data['int_cantidad_puertas'],
            'lng_idcolor' =>    $data['lng_idcolor'],
            'lng_idnegociable' =>  $data['lng_idnegociable'],
            'lng_idmotorreparado' =>    $data['lng_idmotorreparado'],
            'lng_idfinanciamiento' =>   $data['lng_idfinanciamiento'],
            'lng_idtapizado' =>   $data['lng_idtapizado'],
            'lng_idvidrios' =>  $data['lng_idvidrios'],
            'lng_idunicodueno' =>   $data['lng_idunicodueno'],
            'lng_idtraccion' =>   $data['lng_idtraccion'],
            'lng_idchocado' =>  $data['lng_idchocado'],
            'str_recorrido' =>  $data['str_recorrido'],
            'lng_idcombustible' =>  $data['lng_idcombustible'],
            'str_precio_venta' =>   $data['str_precio_venta'],

            //'lng_idequipo_medico' =>   $data['lng_idequipo_medico'],
            //'lng_idfrenado' =>   $data['lng_idfrenado'],
            //'lng_idmotor' =>   $data['lng_idmotor'],


            'lng_idpais' =>   $data['lng_idpais'], 
            'int_cilindrada' =>   $data['int_cilindrada'],
            'lng_idestereo' =>   $data['lng_idestereo'],
            'lng_iddireccion' =>   $data['lng_iddireccion'],
            'lng_idtransmision' =>   $data['lng_idtransmision'],
        	'str_comentario' =>   $data['str_comentario'],
            'int_cilindros' => $data['int_cilindros'],
            'str_video' =>   $data['str_video'],
            'str_moneda' => $data['str_moneda'],

        ]);

        $lastInsertedId = $vehiculo->id;

        //asigno los valores de un array a otro para reniniciar los indices desde 0
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

    public function carros()
    {
    	$marcas = DB::table('cat_marcas as m')
    	->join('cat_datos_maestros as dm', 'dm.id', '=', 'm.lng_idtipo')
    	->where('m.lng_idtipo', '=', 8)//CAMBIAR ID A 154!!!!!!!
    	->orderBy('str_marca')
    	->select('str_marca','m.id')
    	->lists('str_marca','m.id');
    	        
        $modelos = DB::table('tbl_modelos')->where('lng_idmarca', '62')->lists('str_modelo','id');
        $tipo_vehiculos = DB::table('cat_datos_maestros')->where('str_tipo', 'vehiculos')->lists('str_descripcion','id');
        $colores = DB::table('cat_datos_maestros')->where('str_tipo', 'color')->lists('str_descripcion','id');
        $respuesta= DB::table('cat_datos_maestros')->where('str_tipo', 'respuesta')->lists('str_descripcion','id');
        $seguridad = DB::table('cat_datos_maestros')->where('str_tipo', 'seguridad_vehiculos')->lists('str_descripcion','id');
        $sonido = DB::table('cat_datos_maestros')->where('str_tipo', 'sonido_vehiculos')->lists('str_descripcion','id');
        $exterior = DB::table('cat_datos_maestros')->where('str_tipo', 'exterior_vehiculos')->lists('str_descripcion','id');
        $confort = DB::table('cat_datos_maestros')->where('str_tipo', 'confort_vehiculos')->lists('str_descripcion','id');
        $accesorios_internos = DB::table('cat_datos_maestros')->where('str_tipo', 'accesoriosInternos_vehiculos')->lists('str_descripcion','id');
        $direccion = DB::table('cat_datos_maestros')->where('str_tipo', 'direccion_vehiculos')->lists('str_descripcion','id');
        $estereo = DB::table('cat_datos_maestros')->where('str_tipo', 'estereo_vehiculos')->lists('str_descripcion','id');
        $transmision = DB::table('cat_datos_maestros')->where('str_tipo', 'transmision_vehiculos')->lists('str_descripcion','id');
        $tapizado = DB::table('cat_datos_maestros')->where('str_tipo', 'tapizado_vehiculos')->lists('str_descripcion','id');
        $vidrios = DB::table('cat_datos_maestros')->where('str_tipo', 'vidrios_vehiculos')->lists('str_descripcion','id');
        $traccion = DB::table('cat_datos_maestros')->where('str_tipo', 'traccion_vehiculos')->lists('str_descripcion','id');
        $combustible = DB::table('cat_datos_maestros')->where('str_tipo', 'combustible_vehiculos')->lists('str_descripcion','id');
        $paises = DB::table('cat_paises')->orderBy('str_paises')->lists('str_paises','id');
        
        return \View::make('carros.formulario', compact('marcas','modelos','tipo_vehiculos','colores','respuesta','seguridad','sonido','exterior',
                'confort','accesorios_internos','direccion','estereo','transmision','tapizado','vidrios','traccion','combustible','paises'));
    }

    public function formulario($valor)
    {
    	
    	
    	$respuesta= DB::table('cat_datos_maestros')->where('str_tipo', 'respuesta')->lists('str_descripcion','id');
    	
    	switch ($valor) {
    
    		case 'Ambulancias':
    				
    				return \View::make('carros.ambulancias',compact('respuesta'));
    			break;
    
    		case 'Autobuses':
    				
    				return \View::make('carros.autobuses',compact('respuesta'));
    			break;
    
    		case 'Blindados':
    				return \View::make('carros.blindados');
    			break;
    
    		case 'Camiones':

                    $marcas = DB::table('cat_marcas as m')
                    ->join('cat_datos_maestros as dm', 'dm.id', '=', 'm.lng_idtipo')
                    ->where('m.lng_idtipo', '=', 8)//CAMBIAR ID A 154!!!!!!!
                    ->orderBy('str_marca')
                    ->select('str_marca','m.id')
                    ->lists('str_marca','m.id');


                    $frenado = DB::table('cat_datos_maestros')->where('str_tipo', 'frenado_vehiculos')->lists('str_descripcion','id');
    				return \View::make('carros.camiones',compact('frenado','marcas'));
    			break;
    			
    		case 'Carros de Golf':
    				return \View::make('carros.carrosGolf');
    			break;
    			
    		case 'Gruas':
    			 	return \View::make('carros.gruas');
    			 break;
    			 
    		case 'Kartings':
    			  	return \View::make('carros.kartings');
    			  break;
    			  
    		case 'Maquinaria Pesada':
    			  	return \View::make('carros.maquinariaPesada');
    			  break;
    	}
    }
    
    public function dependiente($valor)
    {

        //echo $valor;

        $modelos = DB::table('tbl_modelos')->where('lng_idmarca', $valor)->lists('str_modelo','id');
        
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
    
    public function cortarImagenes($nombre)
    {
    	
    	/*
    	echo $nombre;
    	echo "<br>";
    	echo base64_encode(file_get_contents($nombre ) );
    	echo "<br>";
    	echo $filename = $_FILES['blb_img0']['tmp_name'];
    	*/
    	
    	//die();
    	
    	$filename = $nombre;
    		
    	$percent = 0.5;
    	 
    	// Content type
    	header('Content-Type: image/jpeg');
    	 
    	// Get new dimensions
    	list($width, $height) = getimagesize($filename);
    	//$new_width = $width * $percent;
    	//$new_height = $height * $percent;
    	$new_width = 600; //* $percent;
    	$new_height = 400;//$height * $percent;
    	 
    	// Resample
    	$image_p = imagecreatetruecolor($new_width, $new_height);
    	$image = imagecreatefromjpeg($filename);
    	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    	 
    	// Output
    	return imagejpeg($image_p, null, 100);
    } 
    
}
