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
                    	
                    	<ol class="breadcrumb">
                          <li class="active"> <i class="fa fa-home"></i> Inicio</li>
                        </ol>  
                    	
                    	
                            <h3>Busca tu Vehículo</h3>
                            <div class="accordion" id="toggleArea">
                                <!-- Filter by Year -->
                                <div class="accordion-group panel">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">Year<i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseOne" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Min Year</label>
                                                    <select name="Min Year" class="form-control selectpicker">
                                                        <option selected>Any</option>
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
                                                    <label>Max Year</label>
                                                    <select name="Max Year" class="form-control selectpicker">
                                                        <option selected>Any</option>
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
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">Make<i class="fa fa-angle-down"></i> </a> </div>
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
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird">Model <i class="fa fa-angle-down"></i> </a> </div>
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
                                <!-- Filter by Body Type -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFour">Body type <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseFour" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">Wagon</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Minivan</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">SUV</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">Coupe</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Convertible</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">Crossover</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">Sedan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Mileage -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFive">Mileage <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseFive" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Min Mileage</label>
                                                    <select name="Min Mileage" class="form-control selectpicker">
                                                        <option selected>Any</option>
                                                        <option>10000</option>
                                                        <option>20000</option>
                                                        <option>30000</option>
                                                        <option>40000</option>
                                                        <option>50000</option>
                                                        <option>60000</option>
                                                        <option>70000</option>
                                                        <option>80000</option>
                                                        <option>90000</option>
                                                        <option>100000</option>
                                                    </select>
                                                </div>
                                                <div class="form-group last-child">
                                                    <label>Max Mileage</label>
                                                    <select name="Max Mileage" class="form-control selectpicker">
                                                        <option selected>Any</option>
                                                        <option>10000</option>
                                                        <option>20000</option>
                                                        <option>30000</option>
                                                        <option>40000</option>
                                                        <option>50000</option>
                                                        <option>60000</option>
                                                        <option>70000</option>
                                                        <option>80000</option>
                                                        <option>90000</option>
                                                        <option>100000</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Transmission -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSix">Transmission <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseSix" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">5 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">5 speed automatic</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">6 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">6 speed automatic</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">7 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">9</span><a href="#">7 speed automatic</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">8 speed manual</a></li>
                                                <li class="list-group-item"><span class="badge">38</span><a href="#">8 speed automatic</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Fuel Economy -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSeven">Fuel economy <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseSeven" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">5L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">7L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">9L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">11L/100Km or less</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">11L/100Km or less</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Price -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEight">Price <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseEight" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="form-inline">
  												<div class="form-group">
                                                    <label>Price Min</label>
                                                    <select name="Min Price" class="form-control selectpicker">
                                                        <option selected>Any</option>
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
                                                    <label>Price Max</label>
                                                    <select name="Max Price" class="form-control selectpicker">
                                                        <option selected>Any</option>
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
                                <!-- Filter by Location -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseNine">Location <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseNine" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group">
                                                <li class="list-group-item"><span class="badge">4</span><a href="#">New York</a></li>
                                                <li class="list-group-item"><span class="badge">23</span><a href="#">Queensland</a></li>
                                                <li class="list-group-item"><span class="badge">41</span><a href="#">California</a></li>
                                                <li class="list-group-item"><span class="badge">6</span><a href="#">South Wales</a></li>
                                                <li class="list-group-item"><span class="badge">54</span><a href="#">Tasmania</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter by Color -->
                                <div class="accordion-group">
                                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTen">Color <i class="fa fa-angle-down"></i> </a> </div>
                                    <div id="collapseTen" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <ul class="filter-options-list list-group color-options">
                                                <li class="list-group-item"><span class="badge car-color-white"></span><a href="#">White</a></li>
                                                <li class="list-group-item"><span class="badge car-color-black"></span><a href="#">Black</a></li>
                                                <li class="list-group-item"><span class="badge car-color-red"></span><a href="#">Red</a></li>
                                                <li class="list-group-item"><span class="badge car-color-yellow"></span><a href="#">Yellow</a></li>
                                                <li class="list-group-item"><span class="badge car-color-brown"></span><a href="#">Brown</a></li>
                                                <li class="list-group-item"><span class="badge car-color-grey"></span><a href="#">Grey</a></li>
                                                <li class="list-group-item"><span class="badge car-color-silver"></span><a href="#">Silver</a></li>
                                                <li class="list-group-item"><span class="badge car-color-gold"></span><a href="#">Gold</a></li>
                                                <li class="list-group-item"><span class="badge car-color-blue"></span><a href="#">Blue</a></li>
                                                <li class="list-group-item"><span class="badge car-color-green"></span><a href="#">Green</a></li>
                                                <li class="list-group-item"><span class="badge car-color-orange"></span><a href="#">Orange</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Toggle -->
                            <a href="#" class="btn-default btn-sm btn"><i class="fa fa-refresh"></i> Reset search</a>
                            <a href="#" class="btn-primary btn-sm btn"><i class="fa fa-folder-o"></i> Save search</a>
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
                        	
                        	 @foreach ($registros as $total) @endforeach
                            
                             @if ($total == 0)
                                                     
					            <div class="container">
					                <div class="text-align-center error-404">
					                    <h1 class="">0 Resultados obtenidos</h1>
					                    Seleccione otros criterios de búsqueda<br>
					                    <h3><i class="fa fa-frown-o"></i></h3>
					                    							
					                </div>					               
					            </div>
	                                                  
                             @endif

		                    <nav class="pull-right ">
		
		                        <ul class="pagination">
		                            <li class=""><a onclick="anterior()" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left"></i></span></a></li>
		                            
		                            @foreach ($total_paginas as $paginas) @endforeach
		        
		                                @for ($i = 1; $i < $paginas + 1; $i++)
		                               
		                                    <li id="numeroPag{{$i}}" class="">
		                                        <a onclick="paginar({{$i}})">
		                                            {!! $i !!} 
		                                            <span class="sr-only"></span>
		                                        </a>
		                                    </li>
		        
		                                @endfor
		                           
		                            {!! Form::input('hidden', 'paginas', $i-1 , ['id'=> 'paginas']) !!}
		                            
		                            <li class=""><a onclick="siguiente()" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right"></i></span></a></li>
		                        </ul>
		                    </nav><br><br>

                            @foreach ($vehiculos as $vehiculo)

                                <!-- Result Item -->
                                <div class="result-item format-standard">

                                    <div class="result-item-image">                         
                                        <a href="{{ route('detalles',$vehiculo->id) }}" class="media-box"><img class="" src="{{ $vehiculo->imagen }}" /></a>
                                        <span class="vehicle-age">
                                        <p class="label label-default">{!! $vehiculo->int_ano !!}</p>
                                        <p class="text-center" style="margin-top: -2px;"><img class="" src="data:image/jpeg;base64,{{ $vehiculo->bandera }}" style="width:35px" /></p>                                       
                                        </span>
                                        <span class="  premium-listing "></span>
                                        
                                        <div class="result-item-view-buttons">

                                            @if ($vehiculo->str_video == "")
                                            	<a style="font-size:10px" class="col-md-6" href="{{ route('detalles',$vehiculo->id) }}"><i class="fa fa-eye"></i> Ver</a>
                                            	<a style="font-size:10px" class="col-md-6" href="#"><i class="fa fa-heart"></i> Fav</a>
                                            @else
                                                <a style="font-size:10px" class="col-md-4" href="{!! $vehiculo->str_video !!}" data-rel="prettyPhoto"><i class="fa fa-play-circle-o"></i> Video</a>
                                            	<a style="font-size:10px" class="col-md-4" href="{{ route('detalles',$vehiculo->id) }}"><i class="fa fa-eye"></i> Ver</a>
                                            	<a style="font-size:10px" class="col-md-4" href="#"><i class="fa fa-heart"></i> Fav</a>
                                            @endif
                                            
                                        </div>

                                    </div>

                                    <div class="result-item-in" style="">

                                        <h4 class="result-item-title" style="font-size:14px"><a href="{{ route('detalles',$vehiculo->id) }}">{!! $vehiculo->marca." ".$vehiculo->modelo!!}</a></h4>
                                        
                                        <div class="result-item-cont">
                                            <div class="result-item-block col1">
                                                <p>{!! $vehiculo->str_comentario !!}</p>
                                            </div>
                                            <div class="result-item-block col2">
                                                <div class="result-item-pricing">
                                                    <div class="price" style="font-size:14px">$ {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="result-item-features">
                                            <ul class="inline" style="font-size:10px">
                                               
                                               <li>Ciudad: {!! $vehiculo->ciudad !!}</li>
                                               
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                
                            @endforeach

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