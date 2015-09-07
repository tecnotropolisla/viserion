@extends('app')

@section('content')
<!--
    <div class="actions-bar tsticky">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 search-actions">
                    
                </div>
            </div>
        </div>
    </div>
-->
        <div class="main" role="main">
        
        <div id="content" class="content full">
            <div class="container">
                <div class="row">

                    <div class="results-container">

                        <div class="results-container-in">
                            {!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag']) !!}

                            <div id="results-holder" class="results-grid-view">
                            @foreach ($registros as $total) @endforeach
                            
                            
               <b> {{ $total }} </b>  

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
                                            	<a class="col-md-6" href="{{ route('detalles',$vehiculo->id) }}"><i class="fa fa-eye"></i> Ver</a>
                                            	<a class="col-md-6" href="#"><i class="fa fa-heart"></i> Fav</a>
                                            @else
                                                <a class="col-md-4" href="{!! $vehiculo->str_video !!}" data-rel="prettyPhoto"><i class="fa fa-play-circle-o"></i> Video</a>
                                            	<a class="col-md-4" href="{{ route('detalles',$vehiculo->id) }}"><i class="fa fa-eye"></i> Ver</a>
                                            	<a class="col-md-4" href="#"><i class="fa fa-heart"></i> Fav</a>
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
                                                    <div class="price" style="font-size:18px">$ {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="result-item-features">
                                            <ul class="inline" style="font-size:12px">
                                               <li>País: {!! $vehiculo->pais !!}</li>
                                               <li>Ciudad: {!! $vehiculo->ciudad !!}</li>
                                               <li>Km: {!! number_format($vehiculo->str_recorrido, null, ',', '.') !!}</li>
                                               <li>Motor: {!! $vehiculo->cilindrada !!} cc</li>
                                               <li>Transmisión: {!! $vehiculo->transmision !!}</li>
                                               <li>Dirección: {!! $vehiculo->direccion !!}</li>                                                
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

@endsection