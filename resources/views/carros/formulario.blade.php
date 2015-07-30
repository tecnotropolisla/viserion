@extends('app2')

@section('content')

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
                                        <span class="step-icon"><i class="fa fa-pencil-square-o"></i></span>
                                        <strong class="step-title">Descripción</strong>
                                       
  
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-two" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-list-alt"></i></span>
                                        <strong class="step-title">Características</strong>
                                        
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-three" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-image"></i></span>
                                        <strong class="step-title">Fotos</strong>
                                        
                                    </a>
                                </li>
                                <li data-target="#listing-add-form-four" data-toggle="tab">
                                    <a href="#">
                                        <span class="step-state"></span>
                                        <span class="step-icon"><i class="fa fa-globe"></i></span>
                                        <strong class="step-title">Publicar</strong>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-8">

				    	{!! Form::open(['route' => 'publicarCarro', 'class' => 'listing-add-form','enctype'=>'multipart/form-data', 'id' => 'formularioVehiculo', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!}
                       
                            <section class="listing-form-content">
                            
                                <!-- AD LISTING FORM STEP ONE -->
                                <div id="listing-add-form-one" class="tab-pane fade in active">

                                    <div class="tab-content col-md-12">

                                        @include('carros.camposGenericos')

                                        <div id="formularioAnexo"></div>

                                    </div>
									
                                </div>
                            
                                <!-- AD LISTING FORM STEP TWO -->
                                <div id="listing-add-form-two" class="tab-pane fade">

									@include('carros.caracteristicas')

                                </div>
                            
                                <!-- AD LISTING FORM STEP THREE -->
                                <div id="listing-add-form-three" class="tab-pane fade">
                                    
									@include('carros.fotos')

                                </div>
                            
                                <!-- AD LISTING FORM STEP FIVE -->
                                <div id="listing-add-form-four" class="tab-pane fade">

									@include('carros.publicar')
									
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