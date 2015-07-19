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
                                            <div class="imageb"><a href="{{ route('detalles') }}"><img src="images/car2.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="{{ route('detalles') }}">Nissan Terrano first hand</a>
                                                <span class="price">$28000</span>
                                            </div>
                                            <div class="delete"><a href="#"><i class="icon-delete"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="checkb"><input type="checkbox"></div>
                                            <div class="imageb"><a href="{{ route('detalles') }}"><img src="images/car4.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="{{ route('detalles') }}">Mercedes Benz E class</a>
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
                                            <div class="imageb"><a href="{{ route('detalles') }}"><img src="images/car2.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="{{ route('detalles') }}">Nissan Terrano first hand</a>
                                                <span class="price">$28000</span>
                                            </div>
                                            <div class="save"><a href="{{ route('detalles') }}"><i class="fa fa-star-o"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="imageb"><a href="{{ route('detalles') }}"><img src="images/car4.jpg" alt=""></a></div>
                                            <div class="textb">
                                                <a href="{{ route('detalles') }}">Mercedes Benz E class</a>
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
                </div>
            </div>
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

@for ($i = 0; $i < 20; $i++)
   



                                <!-- Result Item -->
                                <div class="result-item format-standard">

                                    <div class="result-item-image">
                                        <a href="{{ route('detalles') }}" class="media-box"><img class="img-rounded" src="autostars/images/jeepNeel.jpg" alt=""></a>
                                        <span class="label label-default vehicle-age">2014</span>
                                        <span class="label label-success premium-listing">Azul</span>
                                        <div class="result-item-view-buttons">
                                            <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto"><i class="fa fa-play-circle-o"></i> Ver video</a>
                                            <a href="{{ route('detalles') }}"><i class="fa fa-plus"></i> Ver detalles</a>
                                        </div>
                                    </div>

                                    <div class="result-item-in">

                                        <h4 class="result-item-title"><a href="{{ route('detalles') }}">Nissan Terrano single hand driven</a></h4>
                                        
                                        <div class="result-item-cont">
                                            <div class="result-item-block col1">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam..</p>
                                            </div>
                                            <div class="result-item-block col2">
                                                <div class="result-item-pricing">
                                                    <div class="price" style="font-size:30px">$48.000</div>
                                                </div>
                                                <div class="result-item-action-buttons">
                                                    <a href="#" class="btn btn-default btn-sm"><i class="fa fa-star-o"></i> Favoritos</a>
                                                    <!--
                                                        <a href="#" class="distance-calc"><i class="fa fa-map-marker"></i> Distance from me?</a>
                                                    -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="result-item-features">
                                            <ul class="inline">
                                                <li>Km: 6.500</li>
                                                <li>Motor: 6,2</li>
                                                <li>Transmisión: Automática-Secuencial</li>
                                                <li>Dirección: Hidráulica</li>
                                                <li>Distrito Capital</li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                
    @endfor                           
                                

                            </div>



                        </div>






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