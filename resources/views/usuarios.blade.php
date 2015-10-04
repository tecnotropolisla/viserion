@extends('app')

@section('content')

    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full dashboard-pages">
        	<div class="container">
            	<div class="dashboard-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 users-sidebar-wrapper">
                            <!-- SIDEBAR -->
                            <div class="users-sidebar tbssticky">
                            	<a href="user-dashboard.html" class="btn btn-block btn-primary add-listing-btn">Mi Cuenta</a>
                                <ul class="list-group">
                                    <li class="list-group-item active"> <a href="#"><i class="fa fa-home"></i> Inicio</a></li>
                                    <li class="list-group-item"> <span class="badge">5</span> <a href="#"><i class="fa fa-folder-o"></i> Busquedas Guardadas</a></li>
                                    <li class="list-group-item"> <span class="badge">12</span> <a href="#"><i class="fa fa-star-o"></i> Favoritos</a></li>
                                    <li class="list-group-item"> <span class="badge">2</span> <a href="#"><i class="fa fa-edit"></i> Mis Publicaciones</a></li>
                                    <li class="list-group-item"> <a href="#"><i class="fa fa-user"></i> Mi Perfil</a></li>
                                    <li class="list-group-item"> <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Salir</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8">
                                                                      
	                         @foreach ($cuenta_usuario as $usuario)							

									<h3>
									
									Mis Datos</h3>
									
                        				  <div class="row">
	                                    
		                                      <div class="col-xs-6 col-md-4 thumbnail">
		                                        
		                                            <img src="data:image/jpeg;base64,{{ $usuario->blb_img }}" alt="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" title="{!! $usuario->str_nombre !!} {!! $usuario->str_apellido !!}" style="width:100%">
		
		                                      </div>
	
	                                         &nbsp;&nbsp;&nbsp;<strong> Usuario:</strong> {!! $usuario->name !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Nombre Completo: </strong>{!! $usuario->str_nombre !!}, {!! $usuario->str_apellido !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Cédula:</strong> {!! number_format($usuario->str_ididentificacion, 0, ',', '.')    !!}<br>
											 &nbsp;&nbsp;&nbsp;<strong> Género: </strong>{!! $usuario->genero !!}<br>
											 &nbsp;&nbsp;&nbsp;<strong> Fecha de Nacimiento: </strong>{!! $usuario->fecha_nacimiento !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> País: 
	                                         <img src="data:image/jpeg;base64,{{ $usuario->blb_bandera}}" alt="{!! $usuario->pais !!}" title="{!! $usuario->pais !!}" style="width:20px">	                                         
	                                         </strong>{!! $usuario->pais !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Inscrito: </strong>{!! $usuario->fecha_inscripcion !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Teléfono: </strong>{!! $usuario->str_codarea !!} {!! $usuario->str_telefono !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Correo: </strong>{!! $usuario->email !!}<br>	                                        
	                                         &nbsp;&nbsp;&nbsp;<strong> Twitter: </strong>{!! $usuario->str_twitter !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Facebook: </strong>{!! $usuario->str_facebook !!}<br>
	                                         &nbsp;&nbsp;&nbsp;<strong> Instagram: </strong>{!! $usuario->str_instagram !!}
	                                     </div>

								@endforeach


                            <div class="dashboard-block">
                            	<div class="dashboard-block-head">
                                	<a href="user-dashboard-saved-cars.html" class="btn btn-default btn-sm pull-right">See all Ads (2)</a>
                            		<h3>Mis Publicaciones</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered dashboard-tables saved-cars-table">
                                        <thead>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>Descripción</td>
                                                <td>Precio</td>
                                                <td>Fecha de Creación</td>
                                                <td>Estatus</td>
                                                <td>Acciones</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td>
                                                    <!-- Result -->
                                                    <a href="vehicle-details.html" class="car-image"><img src="autostars/images/car2.jpg" alt=""></a>
                                                    <div class="search-find-results">
                                                        <h5><a href="vehicle-details.html">2010 BMW 125i E82 Coupe 2dr Auto 6sp 3.0i [MY10]</a></h5>
                                                        <ul class="inline">
                                                            <li>2 door Coupe</li>
                                                            <li>6 cyl, 3.0 L Petrol</li>
                                                            <li>6 speed Automatic</li>
                                                            <li>Rear Wheel Drive</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><span class="price">$40,990</span></td>
                                                <td><span class="text-success">Created on</span> 09/12/14 @ 12:09am</td>
                                                <td align="center"><span class="label label-warning">Pending payment</span></td>
  												<td>
  													<a href="#">
  														<select class="form-control selectpicker input-sm">
  															<option>Activar</option>
  															<option>Desactivar</option>
  														</select>
  													</a>
  												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                               	</div>
                                <button class="btn btn-default btn-sm disabled">Delete Selected</button>
                            </div>
                            <div class="dashboard-block">
                            	<div class="dashboard-block-head">
                                	<a href="user-dashboard-saved-cars.html" class="btn btn-default btn-sm pull-right">See all cars (12)</a>
                            		<h3>Favoritos</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered dashboard-tables saved-cars-table">
                                        <thead>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>Description</td>
                                                <td>Price/Status</td>
                                                <td>Timestamp</td>
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td>
                                                    <!-- Result -->
                                                    <a href="vehicle-details.html" class="car-image"><img src="autostars/images/car2.jpg" alt=""></a>
                                                    <div class="search-find-results">
                                                        <h5><a href="vehicle-details.html">2010 BMW 125i E82 Coupe 2dr Auto 6sp 3.0i [MY10]</a></h5>
                                                        <ul class="inline">
                                                            <li>2 door Coupe</li>
                                                            <li>6 cyl, 3.0 L Petrol</li>
                                                            <li>6 speed Automatic</li>
                                                            <li>Rear Wheel Drive</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><span class="price">$40,990</span></td>
                                                <td><span class="text-success">Saved on</span> 09/12/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td>
                                                    <!-- Result -->
                                                    <a href="vehicle-details.html" class="car-image"><img src="autostars/images/car3.jpg" alt=""></a>
                                                    <div class="search-find-results">
                                                        <h5><a href="vehicle-details.html">2010 BMW 125i E82 Coupe</a></h5>
                                                        <ul class="inline">
                                                            <li>2 door Coupe</li>
                                                            <li>6 cyl, 3.0 L Petrol</li>
                                                            <li>6 speed Automatic</li>
                                                            <li>Rear Wheel Drive</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><span class="price">$40,990</span></td>
                                                <td><span class="text-success">Saved on</span> 08/12/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td>
                                                    <!-- Result -->
                                                    <a href="vehicle-details.html" class="car-image"><img src="autostars/images/car4.jpg" alt=""></a>
                                                    <div class="search-find-results">
                                                        <h5><a href="vehicle-details.html">2010 BMW 125i E82 Coupe 2dr Auto 6sp 3.0i</a></h5>
                                                        <ul class="inline">
                                                            <li>2 door Coupe</li>
                                                            <li>6 cyl, 3.0 L Petrol</li>
                                                            <li>6 speed Automatic</li>
                                                            <li>Rear Wheel Drive</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><span class="price">$40,990</span></td>
                                                <td><span class="text-success">Saved on</span> 06/12/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                               	</div>
                                <button class="btn btn-default btn-sm disabled">Delete Selected</button>
                                <button class="btn btn-default btn-sm disabled">Compare Selected</button>
                            </div>
                            <div class="dashboard-block">
                            	<div class="dashboard-block-head">
                                	<a href="user-dashboard-saved-cars.html" class="btn btn-default btn-sm pull-right">See all searches (5)</a>
                            		<h3>Busquedas Guardadas</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered dashboard-tables saved-searches-table">
                                        <thead>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>Custom search name</td>
                                                <td>Details</td>
                                                <td>Receive alerts</td>
                                                <td>Timestamp</td>
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td><a href="#" class="search-name">Search name</a></td>
                                                <td>Donec facilisis fermentum sem, ac viverra ante luctus vel.</td>
                                                <td><a href="#"><select class="form-control selectpicker input-sm"><option>Enable</option><option>Disable</option></select></a></td>
                                                <td><span class="text-success">Saved on</span> 04/11/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td><a href="#" class="search-name">Search name</a></td>
                                                <td>&nbsp;</td>
                                                <td><a href="#"><select class="form-control selectpicker input-sm"><option>Enable</option><option>Disable</option></select></a></td>
                                                <td><span class="text-success">Saved on</span> 04/11/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td valign="middle"><input type="checkbox"></td>
                                                <td><a href="#" class="search-name">Search name</a></td>
                                                <td>Donec facilisis fermentum sem, ac viverra ante luctus vel.</td>
                                                <td><a href="#"><select class="form-control selectpicker input-sm"><option>Enable</option><option>Disable</option></select></a></td>
                                                <td><span class="text-success">Saved on</span> 04/11/14 @ 12:09am</td>
                                                <td align="center"><button class="text-danger"><i class="fa fa-times"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                               	</div>
                                <button class="btn btn-default btn-sm disabled">Delete Selected</button>
                            </div>
                        </div>
                    </div>
                </div>
           	</div>
        </div>
   	</div>
    <!-- End Body Content -->
  
@endsection