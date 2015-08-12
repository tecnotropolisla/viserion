                                                    <div class="form-group col-md-4">
                                                            
                                                            <i id="lng_idcilindrada_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idcilindrada', 'Cilindrada (CC)') !!}<br>
                                                            
															{!! Form::select('lng_idcilindrada', 
																(['' => 'Seleccione'] + $cilindrada2), 
																	null, 
																	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
																) 
															!!}                                                               

                                                        </div>                                                        
