<!--     
<h3 style="color: #777">
	
	Paso
 
    <span class="fa-stack fa-3px">
	  <i class="fa fa-circle-o fa-stack-2x"></i>
	  <strong class="fa-stack-1x " style="margin-top: .0em;">1</strong>
	</span> 
</h3>
-->

<h3 style="color: #777">
<i class="fa fa-pencil-square-o"></i>
Descripción
</h3>

<div class="lighter"><p>¿Cómo es tu vehículo?</p></div>

            <div class="form-group col-md-4">
                    
                    <i id="lng_idtipo_vehiculo_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idtipo_vehiculo', 'Clasificación') !!}
                    {!! Form::select('lng_idtipo_vehiculo', 
                                        (['' => 'Seleccione'] + $tipo_vehiculos), 
                                        null, 
                                        ['class' => 'form-control', 'onchange' => 'validar(this.value,this.name);formularioDinamico()']
                                    ) 
                    !!} 

                </div>  

                <div class="form-group col-md-4">
                    
                    <i id="lng_idmarca_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idmarca', 'Marca del Vehículo') !!}
                    {!! Form::select('lng_idmarca', 
                                        (['0' => 'Seleccione'] + $marcas), 
                                        null, 
                                        ['class' => 'form-control','onchange'=>'dependiente(this.value);validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>                      

                <div class="form-group col-md-4">
                    
                    <i id="modelos_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idmodelo', 'Modelo del Vehículo') !!}

                    <div id="dependiente">
                        {!! Form::select('modelos', 
                                            (['0' => 'Seleccione']), 
                                            null, 
                                            ['class' => 'form-control','onchange'=>'idmodelo(this.value)']
                                        ) 
                        !!} 
                    </div>
                        
                </div>

                <div class="form-group col-md-4">
                    
                    <i id="str_placa_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('str_placa', 'Placas') !!}
                    {!! Form::input('text', 'str_placa', '', ['class'=> 'form-control','maxlength'=> '10', 'onchange' => 'validar(this.value,this.name)']) !!}
                
                </div>
                
                <div class="form-group col-md-4">
                    
                    <i id="int_cantidad_puertas_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('int_cantidad_puertas', 'Cantidad de Puertas') !!}
                    {!! 

                        Form::selectRange('int_cantidad_puertas', 2, 5, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
                    
                    !!}
                
                </div>

                <div class="form-group col-md-4">
                   
                    <i id="lng_idcolor_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idcolor', 'Color') !!}
                    {!! Form::select('lng_idcolor', 
                                        (['' => 'Seleccione'] + $colores), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                   
                    <i id="lng_iddireccion_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_iddireccion', 'Dirección') !!}
                    {!! Form::select('lng_iddireccion', 
                                        (['' => 'Seleccione'] + $direccion), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                   
                    <i id="lng_idestereo_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idestereo', 'Estereo') !!}
                    {!! Form::select('lng_idestereo', 
                                        (['' => 'Seleccione'] + $estereo), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

            <div class="form-group col-md-4">
                    
                    <i id="lng_idtransmision_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idtransmision', 'Transmision') !!}
                    {!! Form::select('lng_idtransmision', 
                                        (['' => 'Seleccione'] + $transmision), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <i id="lng_idtapizado_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idtapizado', 'Tapizado') !!}
                    {!! Form::select('lng_idtapizado', 
                                        (['' => 'Seleccione'] + $tapizado), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div> 

                <div class="form-group col-md-4">
                    
                    <i id="lng_idvidrios_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idvidrios', 'Vidrios') !!}
                    {!! Form::select('lng_idvidrios', 
                                        (['' => 'Seleccione'] + $vidrios), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <i id="lng_idtraccion_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idtraccion', 'Tracción') !!}
                    {!! Form::select('lng_idtraccion', 
                                        (['' => 'Seleccione'] + $traccion), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <i id="lng_idcombustible_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idcombustible', 'Combustible') !!}
                    {!! Form::select('lng_idcombustible', 
                                        (['' => 'Seleccione'] + $combustible), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>                                                                                                                                                                                                                                                                            

                <div class="form-group col-md-4">
                    
                    <i id="int_ano_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('int_ano', 'Año') !!}
                    {!! Form::selectRange('int_ano', 1950, 2015, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <i id="str_recorrido_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('str_recorrido', 'Kilometraje') !!}
                    {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>

                <div class="form-group col-md-4">
                    
                    <i id="int_cilindrada_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('int_cilindrada', 'Cilindrada') !!}
                    {!! Form::input('text', 'int_cilindrada', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
                
                </div> 
               
                <div class="form-group col-md-4">
                    
                    <i id="int_cilindros_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('int_cilindros', 'Cilindros') !!}
                    {!! Form::selectRange('int_cilindros', 1, 16, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                </div>



