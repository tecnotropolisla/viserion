<?php

namespace Troovami;

use Illuminate\Database\Eloquent\Model;
use Troovami\Consultas;

class Buscador extends Model
{
    protected function camposBuscador(){

        $paisesBuscador = Consultas::querys('paisesBuscador');
        $tipos = Consultas::querys('tipo');
        $colores = Consultas::querysValor('maestro','color');
        $marcaspublicadas = Consultas::querysValor('marcasTiposPublicadas','153');
        $modelospublicados = Consultas::querys('modelos');
        \View::share(compact('paisesBuscador','tipos','colores','marcaspublicadas','modelospublicados'));  
    }
}