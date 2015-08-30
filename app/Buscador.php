<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use Troovami\Consultas;

class Buscador extends Model
{
    protected function camposBuscador(){

        $paises = Consultas::querys('paises');
        $tipos = Consultas::querys('tipo');
        $colores = Consultas::querys('colores');

        \View::share(compact('paises','tipos','colores'));  

    }
}