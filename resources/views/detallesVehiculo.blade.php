@extends('app')

@section('content')



@foreach ($vehiculos as $vehiculo)

	
@endforeach




    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <!-- Vehicle Details -->
                <article class="single-vehicle-details">
                    <div class="single-vehicle-title">
                        <span class="badge-premium-listing">Premium listing</span>
                        <h2 class="post-title">{!! $vehiculo->marca !!}  {!! $vehiculo->modelo !!} </h2>
                    </div>
                    <div class="single-listing-actions">
                        <div class="btn-group pull-right" role="group">
                            <a href="#" class="btn btn-default" title="Save this car"><i class="fa fa-heart"></i> <span>Añadir a Favoritos</span></a>                                                     
                            <a href="#" data-toggle="modal" data-target="#offerModal" class="btn btn-default" title="Make an offer"><i class="fa fa-eye"></i> <span>Ver Contacto</span></a>
                            <a href="#" data-toggle="modal" data-target="#sendModal" class="btn btn-default" title="Send to a friend"><i class="fa fa-share-alt"></i> <span>Compartir</span></a>                         
                        </div>
                        <div class="btn btn-info price">$ {!! number_format($vehiculo->str_precio_venta, null, ',', '.') !!}  </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="single-listing-images">
                            
                                <div class="featured-image format-image">
                                    <a href="data:image/jpeg;base64,{{ $vehiculo->imagen }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="data:image/jpeg;base64,{{ $vehiculo->imagen }}" alt=""></a>
                                </div>
                                
                                <div class="additional-images">

									<ul class="owl-carousel" data-columns="4" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
	                                        
	                                       @if ($vehiculo->str_video != "")
		                                        
		                                   		<li class="item format-video"> <a href="{{ $vehiculo->str_video }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="data:image/jpeg;base64,{{ $vehiculo->imagen }}" alt=""></a></li>
		                                        
		                                   @endif
		                                   
	                                       @foreach ($imagenes as $imagen)
                                  
												<li class="item format-image">
													 <a href="data:image/jpeg;base64,{{ $imagen->imagen }}" data-rel="prettyPhoto[gallery]" class="media-box">
													 	<img src="data:image/jpeg;base64,{{ $imagen->imagen }}" alt="">
													 </a>
												</li>
											
											@endforeach 					

	                                </ul>
                     
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sidebar-widget widget">

                                <ul class="list-group">
                                     <li class="list-group-item"> <span class="badge">País</span> <img src="data:image/jpeg;base64,{{ $vehiculo->bandera }}" alt="{!! $vehiculo->pais !!}" title="{!! $vehiculo->pais !!}" style="width:35px"> </li>
                                    <li class="list-group-item"> <span class="badge">Ciudad</span> ------- </li>
                                    <li class="list-group-item"> <span class="badge">Año</span> {!! $vehiculo->int_ano !!}</li>
                                    <li class="list-group-item"> <span class="badge">Marca</span> {!! $vehiculo->marca !!}</li>
                                    <li class="list-group-item"> <span class="badge">Modelo</span> {!! $vehiculo->modelo !!}</li>
                                    <li class="list-group-item"> <span class="badge">Recorrido</span> {!! number_format($vehiculo->str_recorrido, null, ',', '.') !!} </li>
                                    <li class="list-group-item"> <span class="badge">Color</span> {!! $vehiculo->color !!}</li>
                                    <li class="list-group-item"> <span class="badge">Motor</span> {!! $vehiculo->str_motor !!}</li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    
                    <div class="spacer-50"></div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="tabs vehicle-details-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#vehicle-overview">Descripción</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-add-features">Especificaciones</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-specs">Características</a></li>
                                    
                                    <!--<li> <a data-toggle="tab" href="#vehicle-location">Ubicación</a> </li>-->

                                </ul>
                                <div class="tab-content">
                                    <div id="vehicle-overview" class="tab-pane fade in active">
                                        <p>
                                            {!! $vehiculo->str_comentario !!}
                                        </p>
                                        
                                    </div>

                                    <div id="vehicle-add-features" class="tab-pane fade">



                                                      <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                <tr>
                                                                    <td>Año</td>
                                                                    <td>{!! $vehiculo->int_ano !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Marca</td>
                                                                    <td>{!! $vehiculo->marca !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Modelo</td>
                                                                    <td>{!! $vehiculo->modelo !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Recorrido</td>
                                                                    <td>{!! number_format($vehiculo->str_recorrido, null, ',', '.') !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Color</td>
                                                                    <td>{!! $vehiculo->color !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Motor</td>
                                                                    <td>{!! $vehiculo->str_motor !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Cilindros</td>
                                                                    <td>{!! $vehiculo->int_cilindros !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Placa</td>
                                                                    <td>{!! $vehiculo->str_placa !!}</td>
                                                                </tr>


                                                                <tr>
                                                                    <td>Puertas</td>
                                                                    <td>{!! $vehiculo->int_cantidad_puertas !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Estereo</td>
                                                                    <td>{!! $vehiculo->estereo !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Tapizado</td>
                                                                    <td>{!! $vehiculo->tapizado !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Vidrios</td>
                                                                    <td>{!! $vehiculo->vidrios !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tracción</td>
                                                                    <td>{!! $vehiculo->traccion !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Transmisión</td>
                                                                    <td>{!! $vehiculo->transmision !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Dirección</td>
                                                                    <td>{!! $vehiculo->direccion !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Combustible</td>
                                                                    <td>{!! $vehiculo->combustible !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Negociable</td>
                                                                    <td>{!! $vehiculo->negociable !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Financiamiento</td>
                                                                    <td>{!! $vehiculo->financiamiento !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Chocado</td>
                                                                    <td>{!! $vehiculo->chocado !!}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Unico Dueño</td>
                                                                    <td>{!! $vehiculo->unicodueno !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Motor Reparado</td>
                                                                    <td>{!! $vehiculo->reparado !!}</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                    </div>

                                    <div id="vehicle-specs" class="tab-pane fade">
                                        <div class="accordion" id="toggleArea">
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Seguridad <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseOne" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "seguridad_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Sonido <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseTwo" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "sonido_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Exterior <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseThird" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "exterior_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseForth"> Confort <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseForth" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "confort_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-group panel">
                                                <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFive"> Accesorios Internos <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                                <div id="collapseFive" class="accordion-body collapse">
                                                    <div class="accordion-inner">
                                                        <table class="table-specifications table table-striped table-hover">
                                                            <tbody>

                                                                    <tr>
                                                                        
                                                                        <td>

                                                                            <ul class="add-features-list">
                                                                                
                                                                                @foreach ($caracteristicas as $caracteristica)
                                                                                     
                                                                                     @if ($caracteristica->str_tipo == "accesoriosInternos_vehiculos")

                                                                                        <li>{!! $caracteristica->str_descripcion !!}</li>
                                                                                     
                                                                                     @endif

                                                                                @endforeach

                                                                            </ul>

                                                                        </td>
                                                                    </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Toggle --> 
                                    </div>
        
                                    <!--
                                    <div id="vehicle-location" class="tab-pane fade">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3270.54916947425!2d-81.035158!3d34.942842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856891c407522ef%3A0x263fcc9e9260347a!2sWhite+Horse+Restaurant!5e0!3m2!1sen!2sin!4v1424094975250" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                                    </div>
                                    -->

                                </div>
                            </div>
                            <div class="spacer-50"></div>
                            <!-- Recently Listed Vehicles -->
                            <section class="listing-block recent-vehicles">
                                <div class="listing-header">
                                    <h3>Vehiculos Similares</h3>
                                </div>
                                <div class="listing-container">
                                    <div class="carousel-wrapper">
                                        <div class="row">
                                            <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car1.jpg" alt=""></a>
                                                        <span class="label label-default vehicle-age">2014</span>
                                                        <span class="label label-success premium-listing">Premium Listing</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes-benz SL 300</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Grey color, by <abbr class="user-type" title="Listed by an individual user">Individual</abbr></span>
                                                        <a href="#" title="View all Sedans" class="vehicle-body-type"><img src="autostars/images/body-types/sedan.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$48500</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car2.jpg" alt=""></a>
                                                        <span class="label label-primary vehicle-age">Brand New</span>
                                                        <h5 class="vehicle-title"><a href="#">Nissan Terrano first hand</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by an dealer">Dealer</abbr></span>
                                                        <a href="#" title="View all SUVs" class="vehicle-body-type"><img src="autostars/images/body-types/suv.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$28000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car4.jpg" alt=""></a>
                                                        <span class="label label-default vehicle-age">2013</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes Benz E Class</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Silver Blue, by <abbr class="user-type" title="Listed by an individual">Individual</abbr></span>
                                                        <a href="#" title="View all convertibles" class="vehicle-body-type"><img src="autostars/images/body-types/convertible.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$76000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car3.jpg" alt=""></a>
                                                        <span class="label label-default vehicle-age">2014</span>
                                                        <h5 class="vehicle-title"><a href="#">Newly launched Nissan Sunny</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by Autostars">Autostars</abbr></span>
                                                        <a href="#" title="View all coupes" class="vehicle-body-type"><img src="autostars/images/body-types/coupe.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$31999</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car1.jpg" alt=""></a>
                                                        <span class="label label-default vehicle-age">2014</span>
                                                        <span class="label label-success premium-listing">Premium Listing</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes-benz SL 300</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Grey color, by <abbr class="user-type" title="Listed by an individual user">Individual</abbr></span>
                                                        <a href="#" title="View all Sedans" class="vehicle-body-type"><img src="autostars/images/body-types/sedan.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$48500</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car2.jpg" alt=""></a>
                                                        <span class="label label-primary vehicle-age">Brand New</span>
                                                        <h5 class="vehicle-title"><a href="#">Nissan Terrano first hand</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by an dealer">Dealer</abbr></span>
                                                        <a href="#" title="View all SUVs" class="vehicle-body-type"><img src="autostars/images/body-types/suv.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$28000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car4.jpg" alt=""></a>
                                                        <span class="label label-default vehicle-age">2013</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes Benz E Class</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Silver Blue, by <abbr class="user-type" title="Listed by an individual">Individual</abbr></span>
                                                        <a href="#" title="View all convertibles" class="vehicle-body-type"><img src="autostars/images/body-types/convertible.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$76000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="autostars/images/car3.jpg" alt=""></a>
                                                        <span class="label label-default vehicle-age">2014</span>
                                                        <h5 class="vehicle-title"><a href="#">Newly launched Nissan Sunny</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by Autostars">Autostars</abbr></span>
                                                        <a href="#" title="View all coupes" class="vehicle-body-type"><img src="autostars/images/body-types/coupe.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$31999</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Vehicle Details Sidebar -->
                        <div class="col-md-4 vehicle-details-sidebar sidebar">
                        
                            <!-- Vehicle Enquiry -->
                            <div class="sidebar-widget widget seller-contact-widget">
                                <h4 class="widgettitle"> ((<i class="fa fa-arrow-down"></i> ESPACIO DE PUBLICIDAD <i class="fa fa-arrow-down"></i>))</h4>
                                <div class="vehicle-enquiry-in">

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                          <div class="panel-body">
                                            <br><br><p class="text-align-center"> <i class="fa fa-google"></i> Ads by Google</p><br><br>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>

                            </div>

                            <div class="sidebar-widget widget seller-contact-widget">
                                
                                <div class="vehicle-enquiry-in">

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                          <div class="panel-body">
                                            <br><br><p class="text-align-center"> Anunciantes</p><br><br>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>
                            </div>

                            <div class="sidebar-widget widget seller-contact-widget">
                                
                                <div class="vehicle-enquiry-in">

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                          <div class="panel-body">
                                            <br><br><p class="text-align-center"> Anunciantes</p><br><br>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>
                            </div>

                            <div class="sidebar-widget widget seller-contact-widget">
                                
                                <div class="vehicle-enquiry-in">

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                          <div class="panel-body">
                                            <br><br><p class="text-align-center"> Anunciantes</p><br><br>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                </div>
                            </div>                            


                        </div>
                    </div>
                </article>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>



@endsection