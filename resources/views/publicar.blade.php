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
                                <div class="progress progress-striped">
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
                                        <strong class="step-title">Añadir fotos del Vehículo</strong>
                                        
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-four" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <strong class="step-title">Publica y vende tu Vehículo!</strong>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <!-- AD LISTING FORM -->
                        <form class="listing-add-form">
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">
                                    <h3>Descripción del Vehículo</h3>
                                    <div class="lighter"><p>Esto tomará poco tiempo... Introduce los datos que se describen a continuación:</p></div>
                                    <div class="spacer-10"></div>
                                    <div class="tabs listing-step-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"> <a data-toggle="tab" href="#searchvehicle" aria-controls="searchvehicle" role="tab">Parte 1</a></li>
                                            <li> <a data-toggle="tab" href="#addcustom" aria-controls="addcustom" role="tab">Parte 2</a></li>
                                        </ul>


                                        <div class="tab-content">
                                            <!-- VEHICLE SEARCH AD LISTING -->
                                            <div id="searchvehicle" class="tab-pane fade  in active">
                                                
 {!! Form::open(['route' => 'register', 'class' => 'form']) !!}
                            <div class="regular-signup">

                                <div class="form-group">
                                        <label>Tipo de Vehículo</label>
                                        
                                        {!! Form::select('lng_idtipo_vehiculo', 
                                                            (['' => 'Seleccione'] + $tipo_vehiculos), 
                                                            null, 
                                                            ['class' => 'form-control']
                                                        ) 
                                        !!} 

                                    </div>  

                                           
                                    <div class="form-group">
                                        <label>Marcas</label>
                                        
                                        {!! Form::select('lng_idmarca', 
                                                            (['' => 'Seleccione'] + $marcas), 
                                                            null, 
                                                            ['class' => 'form-control']
                                                        ) 
                                        !!} 

                                    </div>                      

                                    <div class="form-group">
                                        <label>Modelo</label>

                                        {!! Form::select('lng_idmodelo', 
                                                            (['' => 'Seleccione'] + $modelos), 
                                                            null, 
                                                            ['class' => 'form-control']
                                                        ) 
                                        !!} 

                                    </div>
  
                                    
                                    <div class="form-group">
                                        <label>Placa</label>
                                        {!! Form::input('text', 'str_placa', '', ['class'=> 'form-control']) !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Cantidad de Puertas</label>
                                        {!! Form::input('text', 'int_cantidad_puertas', '', ['class'=> 'form-control']) !!}
                                    </div>



                                    <div class="form-group">
                                        <label>Color</label>

                                        {!! Form::select('lng_idcolor', 
                                                            (['' => 'Seleccione'] + $colores), 
                                                            null, 
                                                            ['class' => 'form-control']
                                                        ) 
                                        !!} 

                                    </div>


                                    <div class="form-group">
                                        <label>Año</label>

                                        {!! 

                                            Form::selectRange('int_ano', 1950, 2015, null, ['class' => 'form-control'])

                                        !!} 

                                    </div>

                                  <div class="form-group">

                                        {!! Form::label('lng_idnegociable', 'Negociable') !!}<br>

                                        @foreach ($negociable as $negocia)

                                            {!! Form::label('lng_idnegociable', $negocia) !!} 
                                            {!! Form::radio('lng_idnegociable', $negocia) !!}

                                        @endforeach

                                    </div>

                                  <div class="form-group">

                                        {!! Form::label('lng_idunicodueno', 'Único Dueño') !!}<br>

                                        @foreach ($unico_dueno as $unico_due)

                                            {!! Form::label('lng_idunicodueno', $unico_due) !!} 
                                            {!! Form::radio('lng_idunicodueno', $unico_due) !!}

                                        @endforeach

                                  </div>

                                  <div class="form-group">

                                        {!! Form::label('lng_idfinanciamiento', 'Financiamiento') !!}<br>

                                        @foreach ($financiamiento as $financia)

                                            {!! Form::label('lng_idfinanciamiento', $financia) !!} 
                                            {!! Form::radio('lng_idfinanciamiento', $financia) !!}

                                        @endforeach

                                    </div>


                                        {!! Form::input('hidden', 'lng_idpersona','1') !!}

                                    <div>
                                        {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
                                    </div>
                                
                            </div>
                            {!! Form::close() !!}



                                            </div>

                                            <!-- CUSTOM VEHICLE LISTING -->
                                            <div id="addcustom" class="tab-pane fade">

                                                hola


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">
                                    <h3>Características del Vehículo</h3>
                                    <div class="lighter"><p>Marca todas las caraterísticas que posee tu vehículo</p></div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <ul class="optional-features-list">
                                                                        
                                                    {!! Form::label('lng_idcaracteristica', 'Sonido') !!}<br>

                                                    @foreach ($seguridad as $seg)


                                                        <li class="checkbox">
                                                            <label>
                                                                    {!! Form::checkbox('lng_idcaracteristica', $seg) !!}
                                                                    {!! Form::label('lng_idcaracteristica', $seg) !!}
                                                            </label>
                                                        </li>

                                                    @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn btn-info pull-right">Save &amp; continue</button>
                                </div>
                            
                                
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    <h3>Fotos del vehículo</h3>
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
                                    <button class="btn btn-info pull-right">Guradar</button>
                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-four" class="tab-pane fade">


                                    <h3>Listo! publica y vende tu Vehículo</h3>
                                    <div class="lighter"><p>Aun puedes revisar todos los datos introducidos</p></div>
                                    
                                        <button class="btn btn-info pull-right">Guradar</button>



                                </div>




                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->



    <!-- Start site footer -->
		@include('pie')
    <!-- End site footer -->


@endsection