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
                                                            ['class' => 'form-control','onchange' => 'validar(this.value,this.name);soloEnVenezuela(this.name)']
                                                        ) 
                                        !!} 

                                    </div>

                                    <div class="form-group">

                                        <i id="lng_idciudad_validar" class="fa fa-asterisk" style="color:red;"></i>
                                        {!! Form::label('lng_idciudad', 'Ciudad') !!}

                                        {!! Form::input('text', 'lng_idciudad', '', 
                                            ['class'=> 'form-control', 'readonly', 'maxlength' => '20',
                                                'onclick'=>'mostrarCiudad()']) 
                                        !!}

                                        {!! Form::input('hidden', 'idciudad', '',['id' =>'idciudad']) !!} 

                                    </div>
                                    
									<div id="buscadorCiudades" class="form-group">
									                                                                                      
									        <div class='list-group'>
									       
									        	<button type="button" class="list-group-item disabled">Seleccione la Ciudad</button>
									        	
												{!! Form::input('text', 'buscador', '', 
													['class'=> 'form-control', 'id' => 'buscador', 'maxlength' => '20',
														'onkeyup'=>'buscarCiudad(this.value)']) 
												!!}
									        	
												<div id="dependiente2"></div>
									
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
                  
                                                                            