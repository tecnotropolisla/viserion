<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use DB;
use Troovami\Consultas;
use Troovami\Buscador;
use Troovami\Http\Controllers\Auth;

class UsuariosController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Buscador::camposBuscador();    
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {    	
    	$id = \Auth::user()->id;
    	$cuenta_usuario = Consultas::querysValor('cuenta_usuario',$id);
    	        
    	$cuenta_usuario[0]->fecha_inscripcion = substr($cuenta_usuario[0]->fecha_inscripcion, 0,10);
    	$var = explode('-',$cuenta_usuario[0]->fecha_inscripcion);
    	$cuenta_usuario[0]->fecha_inscripcion = "$var[2]-$var[1]-$var[0]";
    	
    	$cuenta_usuario[0]->fecha_nacimiento = substr($cuenta_usuario[0]->fecha_nacimiento, 0,10);
    	$var = explode('-',$cuenta_usuario[0]->fecha_nacimiento);
    	$cuenta_usuario[0]->fecha_nacimiento = "$var[2]-$var[1]-$var[0]";
    	    	
    	return \View::make('usuarios',compact('cuenta_usuario'));
    }  
}