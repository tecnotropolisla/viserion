<h3 style="color: #777">
<i class="fa fa-pencil-square-o"></i>
Descripción
</h3>

<div class="lighter">
    <p>¿Cómo es tu Vehículo?</p>
    <p>(*) Campos obligatorios</p>
</div>

            <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idtipo_vehiculo_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idtipo_vehiculo', '* Clasificación') !!}
                    {!! Form::select('lng_idtipo_vehiculo', 
                                        (['' => 'Seleccione'] + $tipo_vehiculos), 
                                        null, 
                                        ['class' => 'form-control', 'onchange' => 'dependienteMarcas(this.value);formularioDinamico()']
                                    ) 
                    !!} 

                </div>  

                <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idmarca_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idmarca', '* Marca del Vehículo') !!}
                    
                    <div id="dependienteMarcas">
	                    {!! Form::select('lng_idmarca', 
	                                        (['' => 'Seleccione'] + $marcas), 
	                                        null, 
	                                        ['class' => 'form-control','onchange'=>'dependienteModelos(this.value)']
	                                    ) 
	                    !!}
					</div>
					
                </div>                      

                <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idmodelo_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idmodelo', '* Modelo del Vehículo') !!}

                    <div id="dependienteModelos">

	                    {!! Form::select('lng_idmodelo', 
	                                        (['' => 'Seleccione'] + $modelos), 
	                                        null, 
	                                        ['id'=>'lng_idmodelo','class' => 'form-control','onchange'=>'validar(this.value,this.name)']
	                                    ) 
	                    !!} 

                    </div>
                    
                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="str_placa_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('str_placa', '* Placas') !!}
                    {!! Form::input('text', 'str_placa', '', ['class'=> 'form-control','maxlength'=> '10', 'onchange' => 'validar(this.value,this.name)']) !!}
                
                </div>
                
                <div class="form-group col-md-4">
                    
                    <!-- <i id="int_cantidad_puertas_validar" class="fa fa-check" style="color:green;"></i>-->
                    {!! Form::label('int_cantidad_puertas', 'Cantidad de Puertas') !!}
                                          
                    {!! 

                        Form::selectRange('int_cantidad_puertas', 0, 5, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
                    
                    !!}
                    
                </div>
                
				<div class="form-group col-md-4">
				
				<!-- <i id="int_pasajeros_validar" class="fa fa-check" style="color:green;"></i> -->
				{!! Form::label('int_pasajeros', '* Capacidad de Personas') !!}
										
                    {!! 

                        Form::selectRange('int_pasajeros', 2, 120, null, ['class' => 'form-control','id' => 'int_pasajeros','onchange' => 'validar(this.value,this.name)'])
                    
                    !!}						
				
				</div>                

                <div class="form-group col-md-4">
                   
                    <!-- <i id="lng_idcolor_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idcolor', '* Color') !!}

                    {!! Form::select('lng_idcolor', 
                                        (['' => 'Seleccione'] + $colores), 
                                        null, 
                                        ['id'=> 'lng_idcolor','class' => 'form-control','onchange'=>'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                   
                    <!-- <i id="lng_iddireccion_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_iddireccion', '* Dirección') !!}
                    {!! Form::select('lng_iddireccion', 
                                        (['' => 'Seleccione'] + $direccion), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                   
                    <!-- <i id="lng_idestereo_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idestereo', '* Estereo') !!}
                    {!! Form::select('lng_idestereo', 
                                        (['' => 'Seleccione'] + $estereo), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

            <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idtransmision_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idtransmision', '* Transmisión') !!}
                    {!! Form::select('lng_idtransmision', 
                                        (['' => 'Seleccione'] + $transmision), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idtapizado_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idtapizado', '* Tapizado') !!}
                    {!! Form::select('lng_idtapizado', 
                                        (['' => 'Seleccione'] + $tapizado), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div> 

                <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idvidrios_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idvidrios', '* Vidrios') !!}
                    {!! Form::select('lng_idvidrios', 
                                        (['' => 'Seleccione'] + $vidrios), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idtraccion_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idtraccion', '* Tracción') !!}
                    {!! Form::select('lng_idtraccion', 
                                        (['' => 'Seleccione'] + $traccion), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="lng_idcombustible_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('lng_idcombustible', '* Combustible') !!}
                    {!! Form::select('lng_idcombustible', 
                                        (['' => 'Seleccione'] + $combustible), 
                                        null, 
                                        ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                    ) 
                    !!} 

                </div>                                                                                                                                                                                                                                                                            

                <div class="form-group col-md-4">
                    
                    <!-- <i id="int_ano_validar" class="fa fa-check" style="color:green;"></i> -->
                    {!! Form::label('int_ano', '* Año') !!}
                    <?php $ano = date('Y')?>
                    
    					<select id='int_ano' name='int_ano' class='form-control' onchange=''>            
	                        <option value=''>Seleccione</option>
								@for ($i = 1950; $i < $ano+1; $i++)
								
								   <option value='{{ $i }}'>{{ $i }}</option>
								    								    
								@endfor	                        						
																			               						
						</select>
					
                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="str_recorrido_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('str_recorrido', '* Kilometraje') !!}
                    {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control','maxlength' => '6' ,'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
        
                </div>
               
                <div class="form-group col-md-4">
                    
                    <!-- <i id="int_cilindros_validar" class="fa fa-check" style="color:green;"></i> -->
                    {!! Form::label('int_cilindros', '* N° de Cilindros') !!}
                    {!! Form::selectRange('int_cilindros', 1, 16, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                </div>

                <div class="form-group col-md-4">
                        
                       <!-- <i id="lng_idcilindrada_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                        {!! Form::label('lng_idcilindrada', '* Cilindrada (CC)') !!}<br>
                        <div id="dependienteCilindrada">   
                            {!! Form::select('lng_idcilindrada', 
                                (['' => 'Seleccione'] + $cilindrada), 
                                    null, 
                                    ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                ) 
                            !!}                                                               
                        </div>
                </div>

                <div class="form-group col-md-4">
                    
                    <!-- <i id="str_version_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                    {!! Form::label('str_version', 'Versión') !!}
                    {!! Form::input('text', 'str_version', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}

                </div> 

			    <div class="form-group col-md-4">
			        
			        <!-- <i id="lng_idchocado_validar" class="fa fa-asterisk" style="color:red;"></i> -->
			
			       {!! Form::label('lng_idchocado', '* Chocado') !!}<br>
			
					{!! Form::select('lng_idchocado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
						) 
					!!}
			
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <!-- <i id="lng_idnegociable_validar" class="fa fa-asterisk" style="color:red;"></i> -->
			        {!! Form::label('lng_idnegociable', '* Negociable') !!}<br>
			        
			        {!! Form::select('lng_idnegociable', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			            	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
			            ) 
					!!} 
			
			  </div>
			
			  <div class="form-group col-md-4">
			        
			        <!-- <i id="lng_idfinanciamiento_validar" class="fa fa-asterisk" style="color:red;"></i> -->
			        {!! Form::label('lng_idfinanciamiento', '* Financiamiento') !!}<br>
			
			        {!! Form::select('lng_idfinanciamiento', 
			        	(['' => 'Seleccione'] + $respuesta), 
			            	null, 
			                ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
			            ) 
					!!} 
			
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <!-- <i id="lng_idunicodueno_validar" class="fa fa-asterisk" style="color:red;"></i> -->
			
			        {!! Form::label('lng_idunicodueno', '* Único Dueño') !!}<br>
			
					{!! Form::select('lng_idunicodueno', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
						) 
					!!} 
			        
			    </div>
			
			  <div class="form-group col-md-4">
			        
			        <!-- <i id="lng_idmotorreparado_validar" class="fa fa-asterisk" style="color:red;"></i> -->
			        {!! Form::label('lng_idmotorreparado', '* Motor Reparado') !!}<br>
			
					{!! Form::select('lng_idmotorreparado', 
						(['' => 'Seleccione'] + $respuesta), 
							null, 
							['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
						) 
			        !!} 
			
			    </div>