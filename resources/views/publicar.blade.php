@extends('app')

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

                        <div id="formulario">
                    	                  		                  
                        <h2>Publique su vehículo en Troovami!</h2>

                        <p>Usted podrá publicar cualquira de estos tipos de vehículos:</p>
                        <div class="spacer-5"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-car" title="Carros" onclick="formularioDinamico('carros')"></i>
                            </div>
                            <h3>Carros</h3>
                            <p>Publique con nosotros su carro o camioneta, es sencillo sólo llene los datos más relevantes.</p>
                        </div>
                        <div class="spacer-20"></div>

                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-motorcycle" title="Motocicletas" onclick="formularioDinamico('motocicletas')"></i>
                            </div>
                            <h3>Motocicletas</h3>
                            <p>Publicar su motocicleta nunca había sido tan fácil, en pocos minutos estará a la vista de todos.</p>
                        </div>
                        <div class="spacer-20"></div>

                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-ship" title="Embarcaciones" onclick="formularioDinamico('embarcaciones')"></i>
                            </div>
                            <h3>Embarcaciones</h3>
                            <p>¿Necesita vender su embarcación? No espere más y publiquela aquí.</p>
                        </div>
                        <div class="spacer-20"></div>

                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-plane" title="Aeronaves" onclick="formularioDinamico('aeronaves')"></i>
                            </div>
                            <h3>Aeronaves</h3>
                            <p>Cualquier tipo de aeronave, no importa la marca o el modelo será publicada y lista para ser vendida.</p>
                        </div>
                        <div class="spacer-20"></div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection