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

                        <div id="formulario">
                        
		                    {!! Form::label('', 'Seleccione el tipo de vehículo:') !!}
		                  
		                    <div class="single-listing-actions ">
		                        <div class="btn-group" role="group">
		                            <a href="#" class="btn btn-default" title="Carros" onclick="formularioDinamico('carros')"><i class="fa fa-car"></i> <span> Carros</span></a>
		                            <a href="#" class="btn btn-default" title="Motocicletas" onclick="formularioDinamico('motocicletas')"><i class="fa fa-motorcycle"></i> <span> Motocicletas</span></a>
		                            <a href="#" class="btn btn-default" title="Embarcaciones" onclick="formularioDinamico('embarcaciones')"><i class="fa fa-ship"></i> <span> Embarcaciones</span></a>
		                            <a href="#" class="btn btn-default" title="Aeronaves" onclick="formularioDinamico('aeronaves')"><i class="fa fa-plane"></i> <span> Aeronaves</span></a>
		                        </div>
		                        
		                    </div> 
							
							<br>
							
	                        <p style="text-align: center;font-size: 100px;">
	                        	<i class="fa fa-smile-o"></i>
	                        </p>
	                        
                        </div>

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