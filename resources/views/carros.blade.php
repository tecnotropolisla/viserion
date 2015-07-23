<!-- AD LISTING FORM -->

                         {!! Form::open(['route' => 'publicar', 'class' => 'listing-add-form','enctype'=>'multipart/form-data', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!}
                       
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">

                                        <div class="tab-content col-md-12">
                                            
                                            
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
                                        Descripción del Carro

                                    </h3>
                                    
									<div class="lighter"><p>¿Cómo es tu vehículo?</p></div>

                                                    <div class="form-group col-md-4">
                                                            
                                                            <i id="lng_idtipo_vehiculo_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idtipo_vehiculo', 'Clasificación') !!}
                                                            {!! Form::select('lng_idtipo_vehiculo', 
                                                                                (['' => 'Seleccione'] + $tipo_vehiculos), 
                                                                                null, 
                                                                                ['class' => 'form-control', 'onchange' => 'validar(this.value,this.name)']
                                                                            ) 
                                                            !!} 

                                                        </div>  

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="lng_idmarca_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idmarca', 'Marca') !!}
                                                            {!! Form::select('lng_idmarca', 
                                                                                (['0' => 'Seleccione'] + $marcas), 
                                                                                null, 
                                                                                ['class' => 'form-control','onchange'=>'dependiente(this.value);validar(this.value,this.name)']
                                                                            ) 
                                                            !!} 

                                                        </div>                      

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="modelos_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idmodelo', 'Modelo') !!}

                                                            <div id="dependiente">
                                                                {!! Form::select('modelos', 
                                                                                    (['0' => 'Seleccione']), 
                                                                                    null, 
                                                                                    ['class' => 'form-control','onchange'=>'idmodelo(this.value)']
                                                                                ) 
                                                                !!} 
                                                            </div>
                                                                
                                                        </div>
                      
                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="str_placa_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('str_placa', 'Placas') !!}
                                                            {!! Form::input('text', 'str_placa', '', ['class'=> 'form-control','maxlength'=> '10', 'onchange' => 'validar(this.value,this.name)']) !!}
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="int_cantidad_puertas_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('int_cantidad_puertas', 'Cantidad de Puertas') !!}
                                                            {!! 

                                                                Form::selectRange('int_cantidad_puertas', 2, 5, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
                                                            
                                                            !!}
                                                        
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            <i id="lng_idcolor_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idcolor', 'Color') !!}
                                                            {!! Form::select('lng_idcolor', 
                                                                                (['' => 'Seleccione'] + $colores), 
                                                                                null, 
                                                                                ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
                                                                            ) 
                                                            !!} 

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
                                                            {!! Form::label('lng_idtransmision', 'Transmision') !!}
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
                                                            
                                                            <i id="int_ano_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('int_ano', 'Año') !!}
                                                            {!! Form::selectRange('int_ano', 1950, 2015, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="str_recorrido_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('str_recorrido', 'Kilometraje') !!}
                                                            {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control','onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}
                                                
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="str_motor_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('str_motor', 'Motor') !!}
                                                            {!! Form::input('text', 'str_motor', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
                                                        
                                                        </div> 
                                                       
                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="int_cilindros_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('int_cilindros', 'Cilindros') !!}
                                                            {!! Form::selectRange('int_cilindros', 1, 16, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']) !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            
                                                            <i id="lng_idchocado_validar" class="fa fa-asterisk" style="color:red;"></i>

                                                           {!! Form::label('lng_idchocado', 'Chocado') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idchocado', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
                                                                {!! Form::label('lng_idchocado', $descripcion) !!} 

                                                            @endforeach

                                                        </div>

                                            </div>

                                        <div class="tab-content col-md-12">

                                                      <div class="form-group col-md-3">
                                                            
                                                            <i id="lng_idnegociable_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idnegociable', 'Negociable') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idnegociable', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
                                                                {!! Form::label('lng_idnegociable', $descripcion) !!} 

                                                            @endforeach

                                                      </div>

                                                      <div class="form-group col-md-3">
                                                            
                                                            <i id="lng_idfinanciamiento_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idfinanciamiento', 'Financiamiento') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idfinanciamiento', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
                                                                {!! Form::label('lng_idfinanciamiento', $descripcion) !!} 

                                                            @endforeach

                                                        </div>

                                                      <div class="form-group col-md-3">
                                                            
                                                            <i id="lng_idunicodueno_validar" class="fa fa-asterisk" style="color:red;"></i>
 
                                                            {!! Form::label('lng_idunicodueno', 'Único Dueño') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idunicodueno', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
                                                                {!! Form::label('lng_idunicodueno', $descripcion) !!} 

                                                            @endforeach
                                                        </div>

                                                      <div class="form-group col-md-3">
                                                            
                                                            <i id="lng_idmotorreparado_validar" class="fa fa-asterisk" style="color:red;"></i>
                                                            {!! Form::label('lng_idmotorreparado', 'Motor Reparado') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idmotorreparado', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
                                                                {!! Form::label('lng_idmotorreparado', $descripcion) !!} 

                                                            @endforeach

                                                        </div>

                                        </div>

                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">

                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-list-alt"></i>
                                        Características del Carro
                                    </h3>

                                    <div class="lighter"><p>Marca todas las caraterísticas que posee tu vehículo</p></div>

                                        <div class="panel-body">


                                    <div class="tabs listing-step-tabs">

                                        <ul class="nav nav-tabs">

                                            <li class="active"> <a data-toggle="tab" href="#seguridad" aria-controls="seguridad" role="tab">Seguridad</a></li>

                                            <li> <a data-toggle="tab" href="#sonido" aria-controls="sonido" role="tab">Sonido</a></li>

                                            <li> <a data-toggle="tab" href="#exterior" aria-controls="exterior" role="tab">Exterior</a></li>

                                            <li> <a data-toggle="tab" href="#confort" aria-controls="confort" role="tab">Confort</a></li>

                                            <li> <a data-toggle="tab" href="#accesorios_internos" aria-controls="accesorios_internos" role="tab">Accesorios Internos</a></li>

                                        </ul>

                                        <div class="tab-content">
                                            
                                            <div id="seguridad" class="tab-pane fade  in active">
                                                
                                                <ul class="optional-features-list">
                                                           
                                                    <?php $a = 0; ?>                    
                                                    @foreach ($seguridad as $valor => $descripcion)

                                                        <li class="checkbox">
                                                            <label>
                                                                        
                                                                {!! Form::checkbox("lng_idcaracteristica[$a]", $valor) !!}
                                                                {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                            </label>
                                                        </li>

                                                    <?php $a++; ?> 
                                                        
                                                    @endforeach

                                                </ul>

                                            </div>

                                            <div id="sonido" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                         
                                                <?php $b = $a; ?>
                                                @foreach ($sonido as $valor => $descripcion)

                                                    <li class="checkbox">
                                                        <label>
                                                                        
                                                            {!! Form::checkbox("lng_idcaracteristica[$b]", $valor) !!}
                                                            {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                         </label>
                                                    </li>

                                                    <?php $b++; ?> 
                                                @endforeach
                                                
                                                </ul>

                                            </div>

                                            <div id="exterior" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                        
                                                    <?php $c = $b; ?> 
                                                    @foreach ($exterior as $valor => $descripcion)

                                                    <li class="checkbox">
                                                        <label>
                                                                        
                                                            {!! Form::checkbox("lng_idcaracteristica[$c]", $valor) !!}
                                                            {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                         </label>
                                                    </li>

                                                    <?php $c++; ?> 
                                                    @endforeach
                                                
                                                </ul>

                                            </div>

                                            <div id="confort" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                    
                                                    <?php $d = $c; ?>                       
                                                    @foreach ($confort as $valor => $descripcion)

                                                    <li class="checkbox">
                                                        <label>
                                                                            
                                                            {!! Form::checkbox("lng_idcaracteristica[$d]", $valor) !!}
                                                            {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                            
                                                        </label>
                                                    </li>

                                                    <?php $d++; ?> 
                                                    @endforeach
                                                </ul>

                                            </div>

                                         <div id="accesorios_internos" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                    
                                                    <?php $e = $d; ?> 
                                                    @foreach ($accesorios_internos as $valor => $descripcion)

                                                    <li class="checkbox">
                                                        <label>
                                                                        
                                                            {!! Form::checkbox("lng_idcaracteristica[$e]", $valor) !!}
                                                            {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                         </label>
                                                     </li>

                                                    <?php $e++; ?> 
                                                    @endforeach
                                                </ul>

                                            </div>                                            

                                        </div>
                                    </div>

                                </div>

                                </div>
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    
                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-image"></i>
                                        Fotos del Carro
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
                                    <div class="lighter"><p>Se creativo, muestranos tu vehículo con un original video</p></div>

                                    {!! Form::input('text', 'str_video', '', ['class'=> 'form-control', 'placeholder'=> 'Youtube/Video URL']) !!}

                                    <hr class="fw">
                                    <h3>Descripción de la publicación</h3>
                                    <div class="lighter"><p>Cuentanos tu experiencia con este vehículo</p></div>
                                    
                                        {!! Form::textarea('str_comentario','',['class' =>'form-control', 'rows' => '10']) !!}

                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-four" class="tab-pane fade">

                                    <br>

                                    <h3 style="color: #777">
                                        <i class="fa fa-globe"></i>
                                        Publica tu carro!
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

                                        <i id="modelos_validar" class="fa fa-asterisk" style="color:red;"></i>
                                        {!! Form::label('lng_idciudad', 'Ciudad') !!}

                                        <div id="dependiente2">
                                            {!! Form::select('lng_idciudad', 
                                                                (['0' => 'Seleccione']), 
                                                                null, 
                                                                ['class' => 'form-control']
                                                            ) 
                                            !!} 
                                        </div>

                                    </div>



                                    <div class="form-group ">
                                        
                                        <i id="str_precio_venta_validar" class="fa fa-asterisk" style="color:red;"></i>
                                        {!! Form::label('str_precio_venta', 'Precio') !!}
                                        {!! Form::input('text', 'str_precio_venta', '', ['class'=> 'form-control', 'onkeypress'=>'return isNumber(event)','onchange' => 'validar(this.value,this.name)']) !!}

                                    </div>

                                    <div class="form-group ">

                                        <div id="monedas_validar">
	                                        {!! Form::label('str_moneda', 'Moneda (Sólo para Venezuela)') !!}
	
	                                        {!!
	
	                                         	Form::select('str_moneda', array('0' => 'Seleccione', '1' => 'Bolívar', '2' => 'Dólar'), 'S',['class' => 'form-control'])
	                                        
	                                        !!} 
										</div>
										
                                    </div>                                    
                  
                                        <!-- Eliminar -->
                                            {!! Form::input('hidden', 'lng_idequipo_medico', 127) !!}
                                            {!! Form::input('hidden', 'lng_idfrenado', 128) !!}
                                            {!! Form::input('hidden', 'lng_idmotor', 64) !!}
                                        <!-- Eliminar -->
                                        {!! Form::input('hidden', 'lng_idmodelo', '') !!}
                                        
                                        <div class="col-md-5">
                                            {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
                                        </div>
                                        
                                </div>

                            </section>
                            {!! Form::close() !!}


