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
                    {!! Form::input('hidden', 'lng_idmodelo', '') !!}    
                        
                </div>

                <div class="form-group col-md-4">
                    
                    <i id="str_placa_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('str_placa', 'Placas') !!}
                    {!! Form::input('text', 'str_placa', '', ['class'=> 'form-control','maxlength'=> '10', 'onchange' => 'validar(this.value,this.name)']) !!}
                
                </div>
                
                <div class="form-group col-md-4">
                    
                    <i id="int_cantidad_puertas_validar" class="fa fa-check" style="color:green;"></i>
                    {!! Form::label('int_cantidad_puertas', 'Cantidad de Puertas') !!}
                    {!! 

                        Form::selectRange('int_cantidad_puertas', 2, 5, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
                    
                    !!}
                
                </div>

                <div class="form-group col-md-4">
                   
                    <i id="lng_idcolor_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('lng_idcolor', 'Color') !!}

                    <select id="lng_idcolor" name="lng_idcolor" class="form-control" onchange = "validar(this.value,this.name)">
                    	<option value="">Seleccione</option>
		                    @foreach ($colores as $color)
		                    	<option style="background-color:{!! $color->str_caracteristica !!} " value="{!! $color->id !!}">{!! $color->str_descripcion !!}</option>
		                    @endforeach
                    </select>                                 
                    
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
                    {!! Form::label('lng_idtransmision', 'Transmisión') !!}
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
                    
                    <i id="int_ano_validar" class="fa fa-check" style="color:green;"></i>
                    {!! Form::label('int_ano', 'Año') !!}
                    <?php $ano = date('Y')?>
                    {!! Form::selectRange('int_ano', 1950, $ano , null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <i id="str_recorrido_validar" class="fa fa-asterisk" style="color:red;"></i>
                    {!! Form::label('str_recorrido', 'Kilometraje') !!}
                    {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>
               
                <div class="form-group col-md-4">
                    
                    <i id="int_cilindros_validar" class="fa fa-check" style="color:green;"></i>
                    {!! Form::label('int_cilindros', 'N° de Cilindros') !!}
                    {!! Form::selectRange('int_cilindros', 1, 16, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                </div>
                
			    <div class="form-group col-md-4">
			        
			        <i id="lng_idchocado_validar" class="fa fa-asterisk" style="color:red;"></i>
			
			       {!! Form::label('lng_idchocado', 'Chocado') !!}<br>
			
					{!! Form::select('lng_idchocado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
						) 
					!!}
			
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <i id="lng_idnegociable_validar" class="fa fa-asterisk" style="color:red;"></i>
			        {!! Form::label('lng_idnegociable', 'Negociable') !!}<br>
			        
			        {!! Form::select('lng_idnegociable', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			            	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
			            ) 
					!!} 
			
			  </div>
			
			  <div class="form-group col-md-4">
			        
			        <i id="lng_idfinanciamiento_validar" class="fa fa-asterisk" style="color:red;"></i>
			        {!! Form::label('lng_idfinanciamiento', 'Financiamiento') !!}<br>
			
			        {!! Form::select('lng_idfinanciamiento', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			                ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
			            ) 
					!!} 
			
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <i id="lng_idunicodueno_validar" class="fa fa-asterisk" style="color:red;"></i>
			
			        {!! Form::label('lng_idunicodueno', 'Único Dueño') !!}<br>
			
					{!! Form::select('lng_idunicodueno', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
						) 
					!!} 
			        
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <i id="lng_idmotorreparado_validar" class="fa fa-asterisk" style="color:red;"></i>
			        {!! Form::label('lng_idmotorreparado', 'Motor Reparado') !!}<br>
			
					{!! Form::select('lng_idmotorreparado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
						) 
			        !!} 
			
			    </div>