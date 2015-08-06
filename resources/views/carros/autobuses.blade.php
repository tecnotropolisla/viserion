                                                    <div class="form-group col-md-4">
                                                            
                                                            <i id="str_version_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('str_version', 'Versión') !!}
															{!! Form::input('text', 'str_version', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}

                                                        </div>  

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="int_pisos_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('int_pisos', 'Cantidad de Pisos') !!}
                                                            {!! Form::selectRange('int_pisos', 1, 2, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 


                                                        </div>                      

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="str_carroceria_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('str_carroceria', 'Carrocería') !!}
															{!! Form::input('text', 'str_carroceria', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}

                                                        </div>
                      
														<div class="form-group col-md-4">
														
														<i id="int_pasajeros_validar" class="fa fa-asterisk" style="color:red;"></i>
														{!! Form::label('int_pasajeros', 'Capacidad de Personas') !!}
														{!! 
															Form::selectRange('int_pasajeros', 2, 120, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
														!!}
														
														</div>
														                                                        
                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="lng_idventana_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idventana', 'Ventanas Panoramicas') !!}<br>
                                                           
															{!! Form::select('lng_idventana', 
																(['' => 'Seleccione'] + $respuesta), 
																	null, 
																	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
																) 
															!!}
															                                                            
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            <i id="lng_idbano_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idbano', 'Baño') !!}<br>
                                                            
															{!! Form::select('lng_idbano', 
																(['' => 'Seleccione'] + $respuesta), 
																	null, 
																	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
																) 
															!!}                                                             
                                                            
                                                        </div>