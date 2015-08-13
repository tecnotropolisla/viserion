                                                    <div class="form-group col-md-4">
                                                            
                                                            <!-- <i id="lng_idarranque_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                                                            {!! Form::label('lng_idarranque', 'Arranque') !!}<br>
                                                            
															{!! Form::select('lng_idarranque', 
																(['' => 'Seleccione'] + $arranque), 
																	null, 
																	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
																) 
															!!}                                                               

                                                        </div>
                                                        
                                                    <div class="form-group col-md-4">
                                                            
                                                            <!-- <i id="lng_idcilindrada_validar" class="fa fa-asterisk" style="color:red;"></i> -->
                                                            {!! Form::label('lng_idcilindrada', 'Cilindrada (CC)') !!}<br>
                                                            
															{!! Form::select('lng_idcilindrada', 
																(['' => 'Seleccione'] + $cilindrada1), 
																	null, 
																	['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
																) 
															!!}                                                               

                                                        </div>                                                        
