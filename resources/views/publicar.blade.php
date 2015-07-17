@extends('app')

@section('content')

<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">

	<!-- Start Site Header -->
@include('cabeza')
	<!-- End Site Header -->


    <!-- Start Body Content -->
  	     <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 listing-form-wrapper">
                        <!-- SIDEBAR -->
                        <div class="listing-form-steps-wrapper tbssticky">
                            <!-- AD LISTING PROGRESS BAR -->
                            <div class="listing-form-progress">
                                <div class="progress-label"> <span>Progreso</span> </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation=""></div>
                                </div>
                            </div>
                            <!-- AD LISTING FORM STEPS -->
                            <ul class="listing-form-steps">
                                <li class="active" data-target="#listing-add-form-one" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-car"></i></span>
                                        <strong class="step-title">Descripción del Vehículo</strong>
                                       
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-two" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-list-alt"></i></span>
                                        <strong class="step-title">Características del Vehículo</strong>
                                        
                                    </a>
                                </li>


                                <li data-target="#listing-add-form-three" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-image"></i></span>
                                        <strong class="step-title">Fotos del Vehículo</strong>
                                        
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-four" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <strong class="step-title">Publica tu Vehículo!</strong>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <!-- AD LISTING FORM -->

                         {!! Form::open(['route' => 'publicar', 'class' => 'listing-add-form']) !!}
                       
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">

                                    <h3 style="color: #777">
                                        <i class="fa fa-car"></i>
                                        Descripción del Vehículo
                                    </h3>
                                    
                                    <div class="lighter"><p>Esto tomará poco tiempo... Introduce los datos que se describen a continuación:</p></div>

                                        <div class="tab-content col-md-12">
                                        
                                               
                                               
                                                    <div class="form-group col-md-4">

                                                            {!! Form::label('lng_idtipo_vehiculo', 'Tipo de Vehiculo') !!}
                                                            {!! Form::select('lng_idtipo_vehiculo', 
                                                                                (['' => 'Seleccione'] + $tipo_vehiculos), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>  

                                                        <div class="form-group col-md-4">
                                                            
                                                            {!! Form::label('lng_idmarca', 'Marca') !!}
                                                            {!! Form::select('lng_idmarca', 
                                                                                (['0' => 'Seleccione'] + $marcas), 
                                                                                null, 
                                                                                ['class' => 'form-control','onchange'=>'dependiente(this.value)']
                                                                            ) 
                                                            !!} 

                                                        </div>                      

                                                        <div class="form-group col-md-4">
                                                            
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
                                                            
                                                            {!! Form::label('str_placa', 'Placas') !!}
                                                            {!! Form::input('text', 'str_placa', '', ['class'=> 'form-control','maxlength'=> '10']) !!}
                                                        
                                                        </div>
                                                        
                                                        <div class="form-group col-md-4">

                                                            {!! Form::label('lng_idcolor', 'Cantidad de Puertas') !!}
                                                            {!! 

                                                                Form::selectRange('int_cantidad_puertas', 2, 5, null, ['class' => 'form-control'])
                                                            
                                                            !!}
                                                        
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idcolor', 'Color') !!}
                                                            {!! Form::select('lng_idcolor', 
                                                                                (['' => 'Seleccione'] + $colores), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_iddireccion', 'Dirección') !!}
                                                            {!! Form::select('lng_iddireccion', 
                                                                                (['' => 'Seleccione'] + $direccion), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idestereo', 'Estereo') !!}
                                                            {!! Form::select('lng_idestereo', 
                                                                                (['' => 'Seleccione'] + $estereo), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                    <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idtransmision', 'Transmision') !!}
                                                            {!! Form::select('lng_idtransmision', 
                                                                                (['' => 'Seleccione'] + $transmision), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idtapizado', 'Tapizado') !!}
                                                            {!! Form::select('lng_idtapizado', 
                                                                                (['' => 'Seleccione'] + $tapizado), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div> 

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idvidrios', 'Vidrios') !!}
                                                            {!! Form::select('lng_idvidrios', 
                                                                                (['' => 'Seleccione'] + $vidrios), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idtraccion', 'Tracción') !!}
                                                            {!! Form::select('lng_idtraccion', 
                                                                                (['' => 'Seleccione'] + $traccion), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">
                                                           
                                                            {!! Form::label('lng_idcombustible', 'Combustible') !!}
                                                            {!! Form::select('lng_idcombustible', 
                                                                                (['' => 'Seleccione'] + $combustible), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>                                                                                                                                                                                                                                                                            

                                                        <div class="form-group col-md-4">

                                                            {!! Form::label('int_ano', 'Año') !!}
                                                            {!! Form::selectRange('int_ano', 1950, 2015, null, ['class' => 'form-control']) !!} 

                                                        </div>

                                                        <div class="form-group col-md-4">

                                                            {!! Form::label('str_recorrido', 'Kilometraje') !!}
                                                            {!! Form::input('text', 'str_recorrido', '', ['class'=> 'form-control auto', 'data-v-max'=>'999999', 'data-v-min'=>'0','data-a-sep'=> '.', 'data-a-dec'=>',']) !!}
                                            	
                                                        </div>

                                                        <div class="form-group col-md-4">

                                                            {!! Form::label('str_motor', 'Motor') !!}
                                                            {!! Form::input('text', 'str_motor', '', ['class'=> 'form-control']) !!}
                                                        
                                                        </div> 
                                                       
                                                        <div class="form-group col-md-4">

                                                            {!! Form::label('int_cilindros', 'Cilindros') !!}
                                                            {!! Form::selectRange('int_cilindros', 1, 16, null, ['class' => 'form-control']) !!} 

                                                        </div>

                                                        <div class="form-group col-md-2">

                                                            {!! Form::label('str_precio_venta', 'Precio') !!}
                                                            {!! Form::input('text', 'str_precio_venta', '', ['class'=> 'form-control auto', 'style'=>'width:95px', 'data-v-max'=>'999999', 'data-a-sep'=> '.', 'data-a-dec'=>',']) !!}

														</div>
														
														<div class="form-group col-md-2">
															{!! Form::label('lng_idpais', 'Moneda') !!}
                                                            {!! Form::select('lng_idpais', 
                                                                                (['' => '$'] + $paises), 
                                                                                null, 
                                                                                ['class' => 'form-control']
                                                                            ) 
                                                            !!} 

                                                        </div>

                                                      <div class="form-group col-md-3">

                                                            {!! Form::label('lng_idnegociable', 'Negociable') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idnegociable', $valor) !!}
                                                                {!! Form::label('lng_idnegociable', $descripcion) !!} 

                                                            @endforeach

                                                        </div>

                                                      <div class="form-group col-md-3">

                                                            {!! Form::label('lng_idunicodueno', 'Único Dueño') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idunicodueno', $valor) !!}
                                                                {!! Form::label('lng_idunicodueno', $descripcion) !!} 

                                                            @endforeach

                                                      </div>

                                                      <div class="form-group col-md-3">

                                                            {!! Form::label('lng_idfinanciamiento', 'Financiamiento') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idfinanciamiento', $valor) !!}
                                                                {!! Form::label('lng_idfinanciamiento', $descripcion) !!} 

                                                            @endforeach

                                                        </div>

                                                      <div class="form-group col-md-3">

                                                            {!! Form::label('lng_idchocado', 'Chocado') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idchocado', $valor) !!}
                                                                {!! Form::label('lng_idchocado', $descripcion) !!} 

                                                            @endforeach

                                                        </div>

                                                      <div class="form-group col-md-3">

                                                            {!! Form::label('lng_idmotorreparado', 'Motor Reparado') !!}<br>

                                                            @foreach ($respuesta as $valor => $descripcion)

                                                                {!! Form::radio('lng_idmotorreparado', $valor) !!}
                                                                {!! Form::label('lng_idmotorreparado', $descripcion) !!} 

                                                            @endforeach

                                                        </div>


                                        </div>
                                  
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">

                                    <h3 style="color: #777">
                                        <i class="fa fa-list-alt"></i>
                                        Características del Vehículo
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
                                                           
                                                       {{ $i = 0 }}                     
                                                    @foreach ($seguridad as $valor => $descripcion)
                                                        
                                                            
                                                            <li class="checkbox">
                                                                <label>
                                                                        
                                                                    {!! Form::checkbox('lng_idcaracteristica[{{ $i }}]', $valor) !!}
                                                                    {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                        
                                                                </label>
                                                            </li>

                                                            {{ $i++ }}
                                                        

                                                    @endforeach

                                                        <li class="checkbox">
                                                            <label>
                                                                    
                                                                        {!! Form::checkbox('lng_idcaracteristica[0]', 17) !!}
                                                                        {!! Form::label('lng_idcaracteristica', 'casa') !!}
                                                                    
                                                            </label>
                                                        </li>

                                                        <li class="checkbox">
                                                            <label>
                                                                    
                                                                        {!! Form::checkbox('lng_idcaracteristica[1]', 18) !!}
                                                                        {!! Form::label('lng_idcaracteristica', 'perro') !!}
                                                                    
                                                            </label>
                                                        </li>

                                                </ul>

                                            </div>

                                            <div id="sonido" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                                
                                                        @foreach ($sonido as $valor => $descripcion)

                                                            <li class="checkbox">
                                                                <label>
                                                                    <!--
                                                                        {!! Form::checkbox('lng_idcaracteristica', $valor) !!}
                                                                        {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                    -->
                                                                </label>
                                                            </li>

                                                        @endforeach

                                                </ul>

                                            </div>


                                            <div id="exterior" class="tab-pane fade">

                                                <ul class="optional-features-list">

                                                        @foreach ($exterior as $valor => $descripcion)

                                                            <li class="checkbox">
                                                                <label>
                                                                    <!--
                                                                        {!! Form::checkbox('lng_idcaracteristica', $valor) !!}
                                                                        {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                    -->
                                                                </label>
                                                            </li>

                                                        @endforeach

                                                </ul>

                                            </div>

                                            <div id="confort" class="tab-pane fade">

                                                <ul class="optional-features-list">
                                                                            
                                                    @foreach ($confort as $valor => $descripcion)

                                                        <li class="checkbox">
                                                            <label>
                                                                    <!--
                                                                        {!! Form::checkbox('lng_idcaracteristica', $valor) !!}
                                                                        {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                    -->
                                                            </label>
                                                        </li>

                                                    @endforeach

                                                </ul>

                                            </div>

                                         <div id="accesorios_internos" class="tab-pane fade">

                                                <ul class="optional-features-list">

                                                    @foreach ($accesorios_internos as $valor => $descripcion)

                                                        <li class="checkbox">
                                                            <label>
                                                                    <!--
                                                                        {!! Form::checkbox('lng_idcaracteristica', $valor) !!}
                                                                        {!! Form::label('lng_idcaracteristica', $descripcion) !!}
                                                                    -->
                                                            </label>
                                                        </li>

                                                    @endforeach

                                                </ul>

                                            </div>                                            

                                        </div>
                                    </div>

                                        </div>
                                   
                                </div>
                            
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    


                                    <h3 style="color: #777">
                                        <i class="fa fa-image"></i>
                                        Fotos del Vehículo
                                    </h3>

                                    <div class="lighter"><p>Añade fotos de tu vehículo</p></div>
                                    <input type="file">
                                    <hr class="fw">
                                    <h3>Añade un video de tu vehículo</h3>
                                    <div class="lighter"><p>Se creativo, muestranos tu vehículo con un original video</p></div>
                                    <input type="text" class="form-control" placeholder="Youtube/Video URL">
                                    <hr class="fw">
                                    <h3>Comentario adicional sobre tu vehículo</h3>
                                    <div class="lighter"><p>Cuentanos tu experiencia con este vehículo</p></div>
                                    <textarea class="form-control" rows="10"></textarea>
                                    
                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-four" class="tab-pane fade">

                                    <h3 style="color: #777">
                                        <i class="fa fa-shopping-cart"></i>
                                        Publica tu Vehículo!
                                    </h3>

                                    <div class="lighter">
                                        <p>
                                            Aun puedes revisar todos los datos introducidos
                                        </p>
                                    </div>

                                        {!! Form::input('hidden', 'lng_idpersona', Auth::user()->id) !!}
                                        {!! Form::input('hidden', 'lng_idequipo_medico', 127) !!}
                                        {!! Form::input('hidden', 'lng_idfrenado', 128) !!}
                                        {!! Form::input('hidden', 'lng_idmotor', 64) !!}
                                        
      									{!! Form::input('hidden', 'lng_idmodelo', '') !!}
      									
                                        <div class="col-md-5">
                                            {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
                                        </div>
                                        
                                        
                                </div>

                            </section>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->

    <!-- Start site footer -->
		@include('pie')
    <!-- End site footer -->
<script type="text/javascript">
	$("#dbl_precio_venta").maskMoney();
	SyntaxHighlighter.all()
</script>

@endsection