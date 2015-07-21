<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;

class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return \View::make('detalles');
    }
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function detalles($valor)
    {
    	return \View::make('detallesVehiculo');
    }
    

}