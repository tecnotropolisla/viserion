<?php

namespace Troovami\Http\Controllers;

use Illuminate\Http\Request;

use Troovami\Http\Requests;
use Troovami\Http\Controllers\Controller;
use Troovami\Consultas;

class MaestroController extends Controller
{
    
    //Este método lo llamo desde routes.php pero se genera desde una función de ajax,
    //para crear un campo select dinámico en el formulario.
    //Nota: ver el archivo ajaxCars.js, función "dependienteModelos(valor)" :)    
    public function dependienteModelos($valor)
    {
        //echo $valor;
        $modelos = Consultas::querysValor('modelos',$valor);
            //var_dump($modelos);
            $select ="<select id='lng_idmodelo' name='lng_idmodelo' class='form-control' onchange='validar(this.value,this.name)'>
            
                        <option value=''>Seleccione</option>";

                foreach ($modelos as $key => $value) 
                {
                    $select.=" <option value='".$key."'>".$value."</option>";
                }

            $select.="</select>";

        return $select;
    }
    
    //Este método lo llamo desde routes.php pero se genera desde una función de ajax,
    //para crear un campo select dinámico en el formulario.
    //Nota: ver el archivo ajaxCars.js, función "dependienteMarcas(valor)" :)
    public function dependienteMarcas($valor)
    {
        //echo $valor;
        $marcas = Consultas::querysValor('marcasSubtipos',$valor);
        //var_dump($modelos);
        $select ="<select id='lng_idmarca' name='lng_idmarca' class='form-control' onchange='dependienteModelos(this.value)'>
    
                        <option value=''>Seleccione</option>";
    
        foreach ($marcas as $key => $value)
        {
            $select.=" <option value='".$key."'>".$value."</option>";
        }
    
        $select.="</select>";
    
        return $select;
    }

    //Este método lo llamo desde routes.php pero se genera desde una función de ajax,
    //para crear un campo select dinámico en el formulario.
    //Nota: ver el archivo ajaxCars.js, función "dependienteCilindrada(valor)" :)
    public function dependienteCilindrada($valor)
    {
        $valor2 = "carros";

        if($valor == "141"){
            $valor2 = "karting";
        }

        $cilindrada = Consultas::querysValor('cilindradaTipos',$valor2);
        //var_dump($modelos);
        $select ="<select id='lng_idcilindrada' name='lng_idcilindrada' class='form-control' onchange=''>
    
                        <option value=''>Seleccione</option>";
    
        foreach ($cilindrada as $key => $value)
        {
            $select.=" <option value='".$key."'>".$value."</option>";
        }
    
        $select.="</select>";
    
        return $select;
    }  

    public function dependiente2($letra,$pais)
    {
        
       $ciudades = Consultas::querysValor2('ciudades',$letra,$pais);
        //var_dump($ciudades);
       return \View::make('ciudades',compact('ciudades')); 

    }
    
    public function dependiente3($pais)
    {
    
        $ciudades = Consultas::querysValor('ciudades',$pais);
        //var_dump($ciudades);
        return \View::make('ciudades',compact('ciudades'));
    
    } 

}
