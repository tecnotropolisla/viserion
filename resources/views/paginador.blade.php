@foreach ($vehiculos as $vehiculo)

                                <!-- Result Item -->
                                <div class="result-item format-standard">

                                    <div class="result-item-image">                         
                                        <a href="{{ route('detalles',$vehiculo->id) }}" class="media-box"><img class="" src="data:image/jpeg;base64,{{ $vehiculo->imagen }}" /></a>
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

                                    <div class="result-item-in">

                                        <h4 class="result-item-title"><a href="{{ route('detalles',$vehiculo->id) }}">{!! $vehiculo->marca." ".$vehiculo->modelo!!}</a></h4>
                                        
                                        <div class="result-item-cont">
                                            <div class="result-item-block col1">
                                                <p>{!! $vehiculo->str_comentario !!}</p>
                                            </div>
                                            <div class="result-item-block col2">
                                                <div class="result-item-pricing">
                                                    <div class="price" style="font-size:20px">$ {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!} </div>
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