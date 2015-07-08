<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;

class DenegadoController extends Controller
{
	public function index()
    {
        return \View::make('errors.denegado');
    }
}
