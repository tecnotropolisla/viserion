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
        $marcas = DB::table('cat_marcas')->orderBy('str_marca')->lists('str_marca','id');
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
        


        return \View::make('publicar', compact('marcas','modelos','tipo_vehiculos','colores','respuesta','seguridad','sonido','exterior',
        		'confort','accesorios_internos','direccion','estereo','transmision','tapizado','vidrios','traccion','combustible','paises'));
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
            'str_placa' =>  'required|string|max:255',
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
            'lng_idequipo_medico' =>   $data['lng_idequipo_medico'],
            'lng_idfrenado' =>   $data['lng_idfrenado'],
            'lng_idmotor' =>   $data['lng_idmotor'],
            'lng_idpais' =>   $data['lng_idpais'], 
            'str_motor' =>   $data['str_motor'], 
            'lng_idestereo' =>   $data['lng_idestereo'],
            'lng_iddireccion' =>   $data['lng_iddireccion'],
            'lng_idtransmision' =>   $data['lng_idtransmision'],
        	'str_comentario' =>   $data['str_comentario'],
            'int_cilindros' => $data['int_cilindros'],
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

        //$total_imagenes = count($data['blb_img']);

        $total_imagenes = 6;
               
        for ($i = 0; $i <= $total_imagenes - 1; $i++)
        {
        	$imagenesVehiculos = ImagenesVehiculos::create([
        		'lng_idvehiculo' => $lastInsertedId,
        		'blb_img' => addslashes(file_get_contents($data['blb_img'.$i])),
                //'blb_img' => addslashes(file_get_contents($data['blb_img'][$i])),
	        ]);
        }
  
        return $imagenesVehiculos;
    }

    public function formulario($valor)
    {

        $formulario = $this->carros();
        return $formulario;
    }

    public function carros()
    {
        $marcas = DB::table('cat_marcas')->orderBy('str_marca')->lists('str_marca','id');
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
        

        
        return \View::make('carros', compact('marcas','modelos','tipo_vehiculos','colores','respuesta','seguridad','sonido','exterior',
                'confort','accesorios_internos','direccion','estereo','transmision','tapizado','vidrios','traccion','combustible','paises'));
    }












    public function dependiente($valor)
    {

        //echo $valor;

        $modelos = DB::table('tbl_modelos')->where('lng_idmarca', $valor)->lists('str_modelo','id');
        
            //var_dump($modelos);
            $select ="<select id='modelos' class='form-control' onchange='idmodelo(this.value)'>
            
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
