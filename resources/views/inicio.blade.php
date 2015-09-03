@extends('app')

@section('content')

<!-- Start Body Content -->
<!-- Actions bar -->

    <div class="actions-bar tsticky">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 search-actions">
                    <ul class="utility-icons tools-bar">
                        <li><a href="#"><i class="fa fa-star-o"></i></a>
                            <div class="tool-box">
                                <div class="tool-box-head">
                                    <a href="user-dashboard-saved-cars.html" class="basic-link pull-right">View all</a>
                                    <h5>Saved cars</h5>
                                </div>
                                <div class="tool-box-in">
                                    <ul class="listing tool-car-listing">
                                        <li>
                                            <div class="checkb"><input type="checkbox"></div>
                                            <div class="imageb"><a href="#"><img src="images/car2.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="#">Nissan Terrano first hand</a>
                                                <span class="price">$28000</span>
                                            </div>
                                            <div class="delete"><a href="#"><i class="icon-delete"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="checkb"><input type="checkbox"></div>
                                            <div class="imageb"><a href="#"><img src="images/car4.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="#">Mercedes Benz E class</a>
                                                <span class="price">$76000</span>
                                            </div>
                                            <div class="delete"><a href="#"><i class="icon-delete"></i></a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tool-box-foot">
                                    <a href="#" class="btn btn-xs btn-primary pull-right">Join</a>
                                    <a href="#" class="pull-right tool-signin" data-toggle="modal" data-target="#loginModal">Sign in</a>
                                    <a href="#" class="btn btn-xs btn-info">Compare(2)</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><i class="fa fa-folder-o"></i></a>
                            <div class="tool-box">
                                <div class="tool-box-head">
                                    <a href="user-dashboard-saved-searches.html" class="basic-link pull-right">View all</a>
                                    <h5>Saved searches</h5>
                                </div>
                                <div class="tool-box-in">
                                    <ul class="listing tool-search-listing">
                                        <li>
                                            <div class="link"><a href="#">Search name</a></div>
                                            <div class="delete"><a href="#"><i class="icon-delete"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="link"><a href="#">Search name</a></div>
                                            <div class="delete"><a href="#"><i class="icon-delete"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="link"><a href="#">Search name</a></div>
                                            <div class="delete"><a href="#"><i class="icon-delete"></i></a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tool-box-foot">
                                    <a href="#" class="btn btn-xs btn-primary pull-right">Join</a>
                                    <a href="#" class="pull-right tool-signin" data-toggle="modal" data-target="#loginModal">Sign in</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><i class="fa fa-clock-o"></i></a>
                            <div class="tool-box">
                                <div class="tool-box-head">
                                    <h5>Recently viewed cars</h5>
                                </div>
                                <div class="tool-box-in">
                                    <ul class="listing tool-view-listing">
                                        <li>
                                            <div class="imageb"><a href="#"><img src="images/car2.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="">Nissan Terrano first hand</a>
                                                <span class="price">$28000</span>
                                            </div>
                                            <div class="save"><a href="#"><i class="fa fa-star-o"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="imageb"><a href="#"><img src="images/car4.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="#">Mercedes Benz E class</a>
                                                <span class="price">$76000</span>
                                            </div>
                                            <div class="save"><a href="#"><i class="fa fa-star-o"></i></a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tool-box-foot">
                                    <a href="#" class="btn btn-xs btn-primary pull-right">Join</a>
                                    <a href="#" class="pull-right tool-signin" data-toggle="modal" data-target="#loginModal">Sign in</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div class="btn-group pull-right results-sorter">
                        <button type="button" class="btn btn-default listing-sort-btn">Ordenar</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Price (High to Low)</a></li>
                            <li><a href="#">Price (Low to High)</a></li>
                            <li><a href="#">Mileage (Low to High)</a></li>
                            <li><a href="#">Mileage (High to Low)</a></li>
                        </ul>
                    </div>
                    
                    <div class="toggle-view view-count-choice pull-right">
                        <label>Mostrar</label>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">10</a>
                            <a href="#" class="btn btn-default active">20</a>
                            <a href="#" class="btn btn-default">50</a>
                        </div>
                    </div>
                    
                    <div class="toggle-view view-format-choice pull-right">
                        <label>Vista</label>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default " id="results-list-view"><i class="fa fa-th-list"></i></a>
                            <a href="#" class="btn btn-default active" id="results-grid-view"><i class="fa fa-th"></i></a>
                        </div>
                    </div>
                    <!-- Small Screens Filters Toggle Button -->
                    <button class="btn btn-default visible-xs" id="Show-Filters">Search Filters</button>
                                                <!-- Paginar-->

                </div>

            </div>

            <nav>
            	
            	{!! Form::input('hidden', 'pag', 1 , ['id'=> 'pag']) !!}
            	
                <ul class="pagination">
                    <li class=""><a onclick="anterior()" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left"></i></span></a></li>
                    
                    @foreach ($total as $paginas) @endforeach

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
            </nav>

        </div>
    </div>

        <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <!-- Search Filters -->

                    <!-- Listing Results -->
                    <div class="results-container">

                        <div class="results-container-in">

                            <div id="results-holder" class="results-grid-view">

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection