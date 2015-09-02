<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use Troovami\Consultas;

class Buscador extends Model
{
    protected function camposBuscador(){

        $paises = Consultas::querys('paises');
        $tipos = Consultas::querys('tipo');
        $colores = Consultas::querysValor('maestro','color');
        $marcaspublicadas = Consultas::querysValor('marcasTiposPublicadas','153');
        $modelospublicados = Consultas::querys('modelos');
        \View::share(compact('paises','tipos','colores','marcaspublicadas','modelospublicados'));  
    }
}