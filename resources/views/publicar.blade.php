@extends('app')

@section('content')

  <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row" style="margin-top:-49px">


                    <div class="results-container">

                        <div class="results-container-in">
                            {!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag']) !!}
                            
                            <div id="barra-progreso" class="">
           
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Buscando...</span>
                                    </div>
                                </div>

                            </div>

                            <div id="results-holder" class="results-grid-view">
                                {!! Form::input('hidden', 'paginas', 1 , ['id'=> 'paginas']) !!}


    <!-- Start Body Content -->

                
                    <div class="col-md-8 col-sm-8">


                        <div id="formulario">
                    	                  		                  
                        <h2>Publique su vehículo en Troovami!</h2>

                        <p>Usted podrá publicar cualquira de estos tipos de vehículos:</p>
                        <div class="spacer-5"></div>
                        
	                       @foreach ($menu as $opciones)
	                        
		                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
		                         <a href="{!! $opciones->ruta !!}" onclick="">
		                        
		                            <div class="ibox-icon">
		                                <i class="{!! $opciones->icono !!}" title="{!! $opciones->titulo !!}"></i>
		                            </div>
		                            
		                         </a>
		                        </div>
		                        
		                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
		                            <h3>{!! $opciones->titulo !!}</h3>
		                            <p>{!! $opciones->detalle !!}</p>
		                        </div>                      
		                        <div class="spacer-20"></div>
	
							@endforeach

                        </div>

                    </div>

   


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection