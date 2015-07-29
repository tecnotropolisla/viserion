                                                    <div class="form-group col-md-4">
                                                            
                                                            <i id="lng_idequipo_medico_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idequipo_medico', 'Equipo Médico') !!}
                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idequipo_medico', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
                                                                {!! Form::label('lng_idequipo_medico', $descripcion) !!} 

                                                            @endforeach

                                                        </div>