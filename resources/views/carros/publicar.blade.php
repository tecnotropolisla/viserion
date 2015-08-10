                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-globe"></i>
                                        Publicar
                                    </h3>

                                    <div class="lighter">
                                        <p>
                                            Casi finalizamos...
                                        </p>
                                    </div>

                                    <div class="form-group ">

                                        <i id="lng_idpais_validar" class="fa fa-asterisk" style="color:red;"></i>
                                        {!! Form::label('lng_idpais', 'País de la Publicación') !!}
                                        {!! Form::select('lng_idpais', 
                                                            (['' => 'Seleccione'] + $paises), 
                                                            null, 
                                                            ['class' => 'form-control','onchange' => 'validar(this.value,this.name);soloEnVenezuela(this.name);limpiarCiudad()']
                                                        ) 
                                        !!} 

                                    </div>

                                    <div class="form-group">
                                    
                                    	<i id="lng_idciudad_validar" class="fa fa-asterisk" style="color:red;"></i>
                                    	{!! Form::label('lng_idciudad', 'Ciudad') !!}
                                    	
                                    	
                                    	
										<div id="ciudad-global" class="input-group">
											{!! Form::input('text', 'lng_idciudad', 'Seleccione', 
	                                            ['class'=> 'form-control', 'readonly', 'maxlength' => '20',
	                                                'onclick'=>'mostrarCiudad()']) 
                                        	!!} 
										  	<a class="input-group-addon btn btn-default btn-sm" onclick="mostrarCiudad()"><span class="caret"></span></a>  
										</div>
										
                                        {!! Form::input('hidden', 'idciudad', '',['id' =>'idciudad']) !!}
                                        
										<div id="buscadorCiudades">									                                                                                      
									        <div class='list-group'>
									        	<div class='input-group'>									       
													{!! Form::input('text', 'buscador', '', 
														['class'=> 'form-control', 'id' => 'buscador', 'maxlength' => '20',
															'onkeyup'=>'buscarCiudad(this.value)']) 
													!!}	
													<a class="input-group-addon btn btn-default btn-sm"><span class="caret"></span></a>
												</div>
																				        	
												<div id="dependiente2"></div>
									        </div>                                                      
										</div>
										
                                    </div>
                                    
                                    <div class="form-group ">
                                        
                                        <i id="str_precio_venta_validar" class="fa fa-asterisk" style="color:red;"></i>
                                        {!! Form::label('str_precio_venta', 'Precio') !!}
                                        {!! Form::input('text', 'str_precio_venta', '', ['class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}

                                    </div>

                                    <div class="form-group ">

                                        <div id="monedas_validar">
                                            <i id="str_moneda_validar" class="fa fa-asterisk" style="color:red;"></i>
	                                        {!! Form::label('str_moneda', 'Moneda (Sólo para Venezuela)') !!}
	
	                                        {!!
	
	                                         	Form::select('str_moneda', array('' => 'Seleccione', 'Bolívares' => 'Bolívares', 'Dólares' => 'Dólares'), 'S',['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
	                                        
	                                        !!} 
										</div>
										
                                    </div>                                    
                  
                                                                            