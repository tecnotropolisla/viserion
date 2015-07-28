<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;

class PublicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         return \View::make('publicar');
    }
    
    public function formulario($valor)
    {
    
    	switch ($valor) {
    
    		case 'carros':
    			$formulario = $this->carros();
    			break;
    
    		case 'motocicletas':
    			$formulario = "Formulario de motocicletas en construccion";
    			break;
    
    		case 'embarcaciones':
    			$formulario = "Formulario embarcaciones en construccion";
    			break;
    
    		case 'aeronaves':
    			$formulario = "Formulario de aeronaves en construccion";
    			break;
    
    	}
    
    	return $formulario;
    }    
}