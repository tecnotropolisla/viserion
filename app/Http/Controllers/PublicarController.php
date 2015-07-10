<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;

class PublicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $marcas = DB::table('cat_marcas')->orderBy('str_marca')->lists('str_marca','id');
        //$modelos = DB::table('tbl_modelos')->orderBy('str_modelo')->lists('str_modelo','id');
        $modelos = DB::table('tbl_modelos')->where('lng_idmarca', '62')->lists('str_modelo','id');
        $tipo_vehiculos = DB::table('cat_datos_maestros')->where('str_tipo', 'vehiculos')->lists('str_descripcion','id');
        $colores = DB::table('cat_datos_maestros')->where('str_tipo', 'color')->lists('str_descripcion','id');
        //Respuestas:
        $negociable = DB::table('cat_datos_maestros')->where('str_tipo', 'respuesta')->lists('id');
        $unico_dueno= DB::table('cat_datos_maestros')->where('str_tipo', 'respuesta')->lists('id');
        $financiamiento = DB::table('cat_datos_maestros')->where('str_tipo', 'respuesta')->lists('id');

        $seguridad = DB::table('cat_datos_maestros')->where('str_tipo', 'seguridad_vehiculos')->lists('str_descripcion','id');
        $sonido = DB::table('cat_datos_maestros')->where('str_tipo', 'color')->lists('str_descripcion','id');
        $exterior = DB::table('cat_datos_maestros')->where('str_tipo', 'color')->lists('str_descripcion','id');
        $confort = DB::table('cat_datos_maestros')->where('str_tipo', 'color')->lists('str_descripcion','id');
        $accesorios_internos = DB::table('cat_datos_maestros')->where('str_tipo', 'color')->lists('str_descripcion','id');

        return \View::make('publicar', compact('marcas','modelos','tipo_vehiculos','colores','negociable','unico_dueno','financiamiento','seguridad','sonido','exterior','confort','accesorios_internos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
