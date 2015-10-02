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
                                </nav> <br><br>

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

                                    <div class="result-item-in">

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
                                               <li><i class="fa fa-caret-right"></i> Ciudad: {!! $vehiculo->ciudad !!}</li>
                                                                                 
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                
                            @endforeach