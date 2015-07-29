@extends('app2')

@section('content')


    <!-- Start Body Content -->
  	     <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                
             

                    <div class="col-md-8 col-sm-8">

                        <div id="formulario">
                    	                  		                  
                        <h2>Publique su vehículo en Troovami!</h2>

                        <p>Usted podrá publicar cualquira de estos tipos de vehículos:</p>
                        <div class="spacer-5"></div>
                        
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                         <a href="{{route('publicarCarro')}}">
                            <div class="ibox-icon">
                                <i class="fa fa-car" title="Carros"></i>
                            </div>
                         </a>
                        </div>
                        
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <h3>Carros</h3>
                            <p>Publique con nosotros su carro o camioneta, es sencillo sólo llene los datos más relevantes.</p>
                        </div>                      
                        <div class="spacer-20"></div>

                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                         <a href="">
                            <div class="ibox-icon">
                                <i class="fa fa-motorcycle" title="Motocicletas"></i>
                            </div>
                         </a>
                        </div>
                        
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <h3>Motocicletas</h3>
                            <p>Publicar su motocicleta nunca había sido tan fácil, en pocos minutos estará a la vista de todos.</p>
                        </div>                      
                        <div class="spacer-20"></div>

                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                         <a href="">
                            <div class="ibox-icon">
                                <i class="fa fa-ship" title="Embarcaciones"></i>
                            </div>
                         </a>
                        </div>
                        
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <h3>Embarcaciones</h3>
                            <p>¿Necesita vender su embarcación? No espere más y publiquela aquí.</p>
                        </div>                      
                        <div class="spacer-20"></div>
                        
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                         <a href="">
                            <div class="ibox-icon">
                                <i class="fa fa-plane" title="Aeronaves"></i>
                            </div>
                         </a>
                        </div>
                        
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
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