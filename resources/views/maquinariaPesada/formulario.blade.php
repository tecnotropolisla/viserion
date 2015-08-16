@extends('app2')

@section('content')

    <!-- Start Body Content -->
  	     <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-4 listing-form-wrapper">
                        <ol class="breadcrumb">
                          <li><a href="{!! route('home') !!}"> <i class="fa fa-home"></i> Inicio</a></li>
                          <li><a href="{!! route('publicar') !!}"> <i class="fa fa-newspaper-o"></i> Publicar</a></li>
                          <li class="active"> <i class="fa fa-truck"></i> Maquinaria-Pesada</li>
                        </ol>
                        <!-- SIDEBAR -->
                        <div class="listing-form-steps-wrapper tbssticky">
                            <!-- AD LISTING PROGRESS BAR -->
                            <div class="listing-form-progress">
                                <div class="progress-label"> <span>Progreso de la publicación</span> </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation=""></div>
                                </div>
                            </div>
                            <!-- AD LISTING FORM STEPS -->

                            <ul class="listing-form-steps">
                                <li class="active" data-target="#listing-add-form-one" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        
                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">1</strong>
                                                </span> 

                                                <strong class="step-title"><i class="fa fa-pencil-square-o"></i> Descripción</strong>
                                            </h4>

                                    </a>
                                </li>
                                <li data-target="#listing-add-form-two" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">2</strong>
                                                </span> 

                                                <strong class="step-"> <i class="fa fa-list-alt"></i> Características</strong>
                                            </h4>

                                    </a>
                                </li>
                                <li data-target="#listing-add-form-three" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">3</strong>
                                                </span> 

                                                <strong class="step-title"> <i class="fa fa-image"></i> Fotos</strong>
                                            </h4>
                                        
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-four" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>

                                            <h4 style="color: #777">

                                                <span class="fa-stack fa-3px">
                                                  <i class="fa fa-circle-o fa-stack-2x"></i>
                                                  <strong class="fa-stack-1x " style="margin-top: .0em;">4</strong>
                                                </span> 

                                                <strong class="step-title"> <i class="fa fa-newspaper-o"></i> Publicar</strong>
                                            </h4>                                        

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8">

				    	{!! Form::open(['route' => 'publicarMaquinariaPesada', 'class' => 'listing-add-form','enctype'=>'multipart/form-data', 'id' => 'formularioVehiculo', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!}
                       
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">

                                    <div class="tab-content col-md-12">

                                        @include('maquinariaPesada.camposGenericos')

                                        <div id="formularioAnexo">
                                        
	                                        <div id="ambulancias">
	                                        	@include('maquinariaPesada.ambulancias')
	                                        </div>
                                         
	                                        <div id="autobuses">
	                                        	@include('maquinariaPesada.autobuses')
	                                        </div>   
	                                                                             	                                        
	                                        <div id="camiones">
	                                        	@include('maquinariaPesada.camiones')
	                                        </div>

                                            <div id="carrosGolf">
                                                @include('maquinariaPesada.carrosGolf')
                                            </div>

                                            <div id="gruas">
                                                @include('maquinariaPesada.gruas')
                                            </div>

                                            <div id="kartings">
                                                @include('maquinariaPesada.kartings')
                                            </div>

                                        </div>

                                    </div>
									
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">

									@include('maquinariaPesada.caracteristicas')

                                </div>
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    
									@include('maquinariaPesada.fotos')

                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-four" class="tab-pane fade">

									@include('maquinariaPesada.publicar')
									
                                    <div class="col-md-5">
                                    	{!! Form::button('Guardar',['class' => 'btn btn-primary btn-lg btn-block','onclick' => 'confirmar()']) !!}
                                    </div>
                                     
                                </div>

                            </section>
                            
						{!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection