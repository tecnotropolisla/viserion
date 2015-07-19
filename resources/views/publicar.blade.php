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
                        
                        <h3>
                            {!! Form::label('', 'Seleccione el tipo de vehículo:') !!}
                        </h3>

                        <div class="btn-group" role="group" aria-label="...">
                          <button type="button" class="btn btn-default fa fa-car" onclick="formularioDinamico('carros')"> Carros</button>
                          <button type="button" class="btn btn-default fa fa-motorcycle" onclick="formularioDinamico('motocicletas')"> Motocicletas</button>
                          <button type="button" class="btn btn-default fa fa-ship" onclick="formularioDinamico('embarcaciones')"> Embarcaciones</button>
                          <button type="button" class="btn btn-default fa fa-plane" onclick="formularioDinamico('aeronaves')"> Aeronaves</button>
                        </div>

                        <div id="formulario">.</div>

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