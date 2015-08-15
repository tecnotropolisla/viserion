                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-image"></i>
                                        Fotos
                                    </h3>
                                        <div class="lighter"><p>Añade fotos de tu vehículo</p></div>

                                        <div class="tab-content col-md-12">

                                            <div class="form-group col-md-4">

                                                {!! Form::radio('principal', '1', null,['onclick' => 'imagenppal(this.value,"principal0")','checked']) !!}
                                                {!! Form::label('principal', 'Principal') !!} 

                                                {!! Form::label('blb_img0', 'Imagen N° 1') !!}
                                                {!! Form::file('blb_img0',['onclick' =>'oir()']) !!}
                                                {!! Form::input('hidden', 'principal0', '1',['id'=> 'principal0']) !!}

                                                <output id="img0">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>

                                            </div>

                                            <div class="form-group col-md-4">

                                                {!! Form::radio('principal', '1', null,['onclick' => 'imagenppal(this.value,"principal1")']) !!}
                                                {!! Form::label('principal', 'Principal') !!} 

                                                {!! Form::label('blb_img1', 'Imagen N° 2') !!}
                                                {!! Form::file('blb_img1',['onclick' =>'oir()']) !!}
                                                {!! Form::input('hidden', 'principal1', '0',['id'=> 'principal1']) !!}

                                                <output id="img1">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>

                                            </div>

                                            <div class="form-group col-md-4">

                                                {!! Form::radio('principal', '1', null,['onclick' => 'imagenppal(this.value,"principal2")']) !!}
                                                {!! Form::label('principal', 'Principal') !!} 

                                                {!! Form::label('blb_img2', 'Imagen N° 3') !!}
                                                {!! Form::file('blb_img2',['onclick' =>'oir()']) !!}
                                                {!! Form::input('hidden', 'principal2', '0',['id'=> 'principal2']) !!}

                                                <output id="img2">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>

                                            </div> 

                                        </div>

                                        <div class="tab-content col-md-12">

                                            <div class="form-group col-md-4">

                                                {!! Form::radio('principal', '1', null,['onclick' => 'imagenppal(this.value,"principal3")']) !!}
                                                {!! Form::label('principal', 'Principal') !!} 

                                                {!! Form::label('blb_img3', 'Imagen N° 4') !!}
                                                {!! Form::file('blb_img3',['onclick' =>'oir()']) !!}
                                                {!! Form::input('hidden', 'principal3', '0',['id'=> 'principal3']) !!}

                                                <output id="img3">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>

                                            </div>

                                            <div class="form-group col-md-4">

                                                {!! Form::radio('principal', '1', null,['onclick' => 'imagenppal(this.value,"principal4")']) !!}
                                                {!! Form::label('principal', 'Principal') !!}

                                                {!! Form::label('blb_img4', 'Imagen N° 5') !!}
                                                {!! Form::file('blb_img4',['onclick' =>'oir()']) !!}
                                                {!! Form::input('hidden', 'principal4', '0',['id'=> 'principal4']) !!}

                                                <output id="img4">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>

                                            </div>

                                            <div class="form-group col-md-4">

                                                {!! Form::radio('principal', '1', null,['onclick' => 'imagenppal(this.value,"principal5")']) !!}
                                                {!! Form::label('principal', 'Principal') !!} 

                                                {!! Form::label('blb_img5', 'Imagen N° 6') !!}
                                                {!! Form::file('blb_img5',['onclick' =>'oir()']) !!}
                                                {!! Form::input('hidden', 'principal5', '0',['id'=> 'principal5']) !!}

                                                <output id="img5">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>

                                            </div> 

                                        </div>

                                    <hr class="fw">
                                    <h3>Añade un video de tu carro</h3>
                                    <div class="lighter">
                                        <p>Se creativo, muestranos tu vehículo con un original video</p>
                                    </div>

                                    {!! Form::input('text', 'str_video', '', ['id'=>'str_video','class'=> 'form-control', 'placeholder'=> 'Youtube/Video URL', 'onchange' => 'validarUrl(this.value)']) !!}

                                    <hr class="fw">
                                    <h3>Descripción de la publicación</h3>
                                    <div class="lighter">
                                        <p>Cuentanos tu experiencia con este vehículo (Máximo 500 caracteres)</p>
                                    </div>
                                    
                                        {!! Form::textarea('str_comentario','',['maxlength'=>'500','class' =>'form-control', 'rows' => '10']) !!}