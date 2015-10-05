@extends('app')

@section('content')

    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
        	<div class="container">
            	
            	
            	<div class="row">
                    <!-- Search Filters -->
                    <div class="col-md-3 search-filters" id="Search-Filters">
                    	<div class="tbsticky filters-sidebar">	
                    	
                            <h3>Busca tu Vehículo</h3>
                            <div class="accordion" id="toggleArea">
                                <!-- Filter by Country -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFour">Paises <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseFour" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">Venezuela</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Peru</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">Chile</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">EEUU</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Colombia</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">Canadá</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Argentina</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by City -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSix">Ciudades <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">Barquisimeto</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Caracas</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">San Fernando de Apure</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">San Felipe</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Maracaibo</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">Coro</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Maracay</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Barcelona</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                                            
                                <!-- Filter by Year -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">Años<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseOne" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Año Desde</label>
                                                    <select name="Min Year" class="form-control selectpicker">
                                                        <option selected>Seleccione</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                        <option>2007</option>
                                                        <option>2008</option>
                                                        <option>2009</option>
                                                        <option>2010</option>
                                                        <option>2011</option>
                                                        <option>2012</option>
                                                        <option>2013</option>
                                                        <option>2014</option>
                                                    </select>
                                                </div>
                                                <div class="form-group last-child">
                                                    <label>Año Hasta</label>
                                                    <select name="Max Year" class="form-control selectpicker">
                                                        <option selected>Seleccione</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                        <option>2007</option>
                                                        <option>2008</option>
                                                        <option>2009</option>
                                                        <option>2010</option>
                                                        <option>2011</option>
                                                        <option>2012</option>
                                                        <option>2013</option>
                                                        <option>2014</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Make -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">Marcas<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTwo" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">Bentley</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Nissan</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">Mercedes</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">Ford</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Honda</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">Mazda</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Toyota</a></li>
                                                <li class="list-group-item"><span class="badge">45</span><a href="#">BMW</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Model -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird">Modelos <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseThird" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Alpina</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">M3</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">M5</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">M6</a></li>
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">X1</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">X3</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">X5</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Z3</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Z4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Filter by Price -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEight">Precios <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Precio Mínimo</label>
                                                    <select name="Min Price" class="form-control selectpicker">
                                                        <option selected>Seleccione</option>
                                                        <option>$10000</option>
                                                        <option>$20000</option>
                                                        <option>$30000</option>
                                                        <option>$40000</option>
                                                        <option>$50000</option>
                                                        <option>$60000</option>
                                                        <option>$70000</option>
                                                        <option>$80000</option>
                                                        <option>$90000</option>
                                                        <option>$100000</option>
                                                    </select>
                                                </div>
                                                <div class="form-group last-child">
                                                    <label>Precio Máximo</label>
                                                    <select name="Max Price" class="form-control selectpicker">
                                                        <option selected>Seleccione</option>
                                                        <option>$10000</option>
                                                        <option>$20000</option>
                                                        <option>$30000</option>
                                                        <option>$40000</option>
                                                        <option>$50000</option>
                                                        <option>$60000</option>
                                                        <option>$70000</option>
                                                        <option>$80000</option>
                                                        <option>$90000</option>
                                                        <option>$100000</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Filter by Color -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTen">Colores <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group color-options">
                                                <li class="list-group-item"><span class="badge car-color-white"></span><a href="#">Blanco</a></li>
                                                <li class="list-group-item"><span class="badge car-color-black"></span><a href="#">Negro</a></li>
                                                <li class="list-group-item"><span class="badge car-color-red"></span><a href="#">Rojo</a></li>
                                                <li class="list-group-item"><span class="badge car-color-yellow"></span><a href="#">Amarillo</a></li>
                                                <li class="list-group-item"><span class="badge car-color-brown"></span><a href="#">Marrón</a></li>
                                                <li class="list-group-item"><span class="badge car-color-grey"></span><a href="#">Gris</a></li>
                                                <li class="list-group-item"><span class="badge car-color-silver"></span><a href="#">Plateado</a></li>
                                                <li class="list-group-item"><span class="badge car-color-gold"></span><a href="#">Dorado</a></li>
                                                <li class="list-group-item"><span class="badge car-color-blue"></span><a href="#">Azul</a></li>
                                                <li class="list-group-item"><span class="badge car-color-green"></span><a href="#">Verde</a></li>
                                                <li class="list-group-item"><span class="badge car-color-orange"></span><a href="#">Naranja</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Toggle -->
                            <a href="#" class="btn-primary btn-sm btn"><i class="fa fa-folder-o"></i> Guardar Búsqueda</a>
                        </div>
                    </div>
                    
                    <!-- Listing Results -->
                    <div class="col-md-9 results-container">
                        <div class="results-container-in">
                        	<div class="waiting" style="display:none;">
                            	<div class="spinner">
                                  	<div class="rect1"></div>
                                  	<div class="rect2"></div>
                                  	<div class="rect3"></div>
                                  	<div class="rect4"></div>
                                  	<div class="rect5"></div>
                                </div>
                            </div>


                   <div class="toggle-view view-format-choice ">
                        
                        <div class="btn-group">
                            <a href="#" class="btn btn-default " id="results-list-view"><i class="fa fa-th-list"></i></a>
                            <a href="#" class="btn btn-default active" id="results-grid-view"><i class="fa fa-th"></i></a>
                        </div>
                    </div>


                        <div class="results-container-in">
                            {!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag']) !!}
                            
							<div id="barra-progreso" class="">
           
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Buscando...</span>
                                    </div>
                                </div>

                            </div>

                            @if(Route::current()->getName() == 'testing')
                               .
                            @endif

    
                        	<div id="results-holder" class="results-grid-view">
                        	
                            @include('paginador')

                            </div>
                            
                            <hr>

				            <!-- Recently Listed Vehicles -->
                            <section class="listing-block recent-vehicles">
                                <div class="listing-header">
                                    <h3>Últimas Publicaciones</h3>
                                </div>
                                
                                <div class="listing-container">
                                    <div class="carousel-wrapper">
                                        <div class="row">
                                            <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                                
                                                @foreach ($ultimosVehiculos as $ultimos)
	                                                <li class="item">
	                                                    <div class="vehicle-block format-standard">
	                                                      
	                                                        <a href="{{ route('detalles',$ultimos->id) }}" class="media-box"><img class="" src="{{ $ultimos->imagen }}" /></a>
	                                                        
	                                                        <span class="label label-default vehicle-age">{!! $ultimos->int_ano !!}</span>
					                                        <span class="vehicle-age">
					                                        <p class="label label-default">{!! $ultimos->int_ano !!}</p>
					                                        <p class="text-center" style="margin-top: -2px;"><img class="" src="data:image/jpeg;base64,{{ $ultimos->bandera }}" style="width:35px" /></p>                                       
					                                        </span>	                                                        
	                                                        <h5 class="vehicle-title"><a href="#">{!! $ultimos->marca." ".$ultimos->modelo!!}</a></h5>
	                                                        <span class="vehicle-cost">$ {!! number_format($ultimos->str_precio_venta, null, ',', '.') !!}</span>
	                                                    </div>
	                                                </li>
												@endforeach
												
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </section>

                        </div>
                    </div>
               	</div>
            </div>
        </div>
   	</div>
    <!-- End Body Content -->

@endsection