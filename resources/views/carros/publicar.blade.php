                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-newspaper-o"></i>
                                        Publicar
                                    </h3>

                                    <div class="lighter">
                                        <p>
                                            Casi finalizamos...
                                        </p>
                                    </div>

                                    <div class="form-group ">

                                        <!-- <i id="lng_idpais_validar" class="fa fa-asterisk" style="color:red;"></i>-->
                                        {!! Form::label('lng_idpais', '* País de la Publicación') !!}
                                        {!! Form::select('lng_idpais', 
                                                            (['' => 'Seleccione'] + $paises), 
                                                            null, 
                                                            ['class' => 'form-control','onchange' => 'soloEnVenezuela(this.name);buscarCiudadPorPais(this.value)']
                                                        ) 
                                        !!} 

                                    </div>

                                    <div class="form-group">
                                    
                                    	<!-- <i id="lng_idciudad_validar" class="fa fa-asterisk" style="color:red;"></i>-->
                                    	{!! Form::label('lng_idciudad', '* Ciudad') !!}
                                    	
                                        {!! Form::input('hidden', 'lng_idciudad', '',['id' =>'lng_idciudad']) !!}
                                        
                                        			{!! Form::input('text', 'buscador', '', 
														['class'=> 'form-control', 'id' => 'buscador', 'maxlength' => '20',
															'onkeyup'=>'buscarCiudadPorLetra(this.value)','onclick'=>'verCiudades()']) 
													!!}	
                                        
										<div id="dependiente2"></div>
										
                                    </div>
                                    
                                    <div class="form-group ">
                                        
                                        <!-- <i id="str_precio_venta_validar" class="fa fa-asterisk" style="color:red;"></i>-->
                                        {!! Form::label('str_precio_venta', '* Precio') !!}
                                        {!! Form::input('text', 'str_precio_venta', '', ['class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}

                                    </div>

                                    <div class="form-group ">

                                        <div id="monedas_validar">
                                            <!-- <i id="str_moneda_validar" class="fa fa-asterisk" style="color:red;"></i>-->
	                                        {!! Form::label('str_moneda', 'Moneda (Sólo para Venezuela)') !!}
	
	                                        {!!
	
	                                         	Form::select('str_moneda', array('' => 'Seleccione', 'Bolívares' => 'Bolívares', 'Dólares' => 'Dólares'), 'S',['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
	                                        
	                                        !!} 
										</div>
										
                                    </div>                                    
                  
                                                                            