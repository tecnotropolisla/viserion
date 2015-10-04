<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Troovami - Vehículos</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
{!! Html::style('autostars/css/bootstrap.css') !!} 
{!! Html::style('autostars/css/bootstrap-theme.css') !!} 
{!! Html::style('autostars/css/style.css') !!} 
{!! Html::style('autostars/vendor/prettyphoto/css/prettyPhoto.css') !!} 
{!! Html::style('autostars/vendor/owl-carousel/css/owl.carousel.css') !!} 
{!! Html::style('autostars/vendor/owl-carousel/css/owl.theme.css') !!} 
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
{!! Html::style('autostars/css/custom.css') !!} <!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
{!! Html::style('autostars/colors/color1.css') !!} 
{!! Html::style('autostars/style-switcher/css/style-switcher.css') !!} 
<!-- SCRIPTS
  ================================================== -->
{!! Html::script('autostars/js/modernizr.js') !!} <!-- Modernizr -->
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

</head>
<body class="home" onload="setTimeout('formularioDinamico()',500)">

    <div class="body">
    
	<div class="site-header-wrapper">
        <header class="site-header">
            <div class="container sp-cont">
                <div class="site-logo">
                    <h1><a href="{{ route ('home') }}"><img src="{{ asset('autostars/images/logo.png') }}" alt="Logo"></a></h1>
                   <!-- <span class="site-tagline">Comprar o vender<br>ahora es más fácil!</span>-->
                </div>

                <div class="header-right">

                @if (Auth::guest())

                    <div class="user-login-panel">
                        <a href="#" class="user-login-btn" data-toggle="modal" data-target="#loginModal">
                            <i class="fa fa-user"></i>
                        </a>

                    </div>

                @endif

                @if (Auth::user())
                    <div class="user-login-panel logged-in-user">
                        <a href="#" class="user-login-btn" id="userdropdown" data-toggle="dropdown">
                            <img src="data:image/jpeg;base64,{{ Auth::user()->blb_img }}" alt="">
                            <span class="user-informa">
                                <span class="meta-data">Bienvenido</span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </span>
                            <span class="user-dd-dropper"><i class="fa fa-angle-down"></i></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="userdropdown">
                            <li><a href="{{route('publicar')}}">Publicar</a></li>
                            <li><a href="{{route('cuenta')}}">Mi Cuenta</a></li>
                            <li><a href="{{route('logout')}}">Salir</a></li>
                        </ul>
                    </div>
                @endif

                    <div class="topnav dd-menu">
                        <ul class="top-navigation sf-menu">
                            
				        @if (Auth::guest())

                            <li>
                                <a href="{{route('register')}}">Crear Cuenta</a>
                            </li>

				        @endif

                        </ul>
                    </div>
                </div>

            </div>

        </header>

        <!-- End Site Header -->
        <div class="navbar">
            <div class="container sp-cont">



            @if(Route::current()->getName() == 'home')
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                    <span>Busca tu Vehículo</span>
                </div>         
            @endif


                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li>
                        	<a href="{{ route ('home') }}">Principal</a>                        
                        </li>

                        <li class="megamenu"><a href="#">Mega Menu</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="mm-col col-md-2">
                                                <ul class="sub-menu">
                                                    <li><a href="#">Brand new cars</a></li>
                                                    <li><a href="#">Used cars</a></li>
                                                    <li><a href="#">Latest reviews</a></li>
                                                    <li><a href="#">Auto news</a></li>
                                                    <li><a href="#">Car insurance</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Buscar por tipo de Vehíiculo</span>
                                                <ul class="body-type-widget">
                                                                                                        
                                                    <li> <i style="font-size: 40px;" class="fa fa-car" title="Carros"></i> <span>Carros</span></li>
                                                    <li> <i style="font-size: 40px;" class="fa fa-motorcycle" title="Carros"></i> <span>Motocicletas</span></li>
                                                    <li> <i style="font-size: 40px;" class="fa fa-ship" title="Carros"></i> <span>Embarcaciones</span></li>
                                                    <li> <i style="font-size: 40px;" class="fa fa-plane" title="Carros"></i> <span>Aeronaves</span></li>
                                                    <li> <i style="font-size: 40px;" class="fa fa-truck" title="Carros"></i> <span>Maquinaria Agrícola</span></li>
                                                    <li> <i style="font-size: 40px;" class="fa fa-truck" title="Carros"></i> <span>Maquinaria Pesada</span></li>
                                                    <li> <i style="font-size: 40px;" class="fa fa-truck" title="Carros"></i> <span>Trailers</span></li>
                                                </ul>
                                                
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Buscar por Marca</span>
                                                <ul class="make-widget">
                                                    <li class="item"> <a href="#"><img src="autostars/images/logo_mercedes.png" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="autostars/images/logo_vw.png" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="autostars/images/logo_mazda.png" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="autostars/images/logo_toyota.png" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="autostars/images/logo_nissan.png" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="autostars/images/logo_ford.png" alt=""></a></li>
                                                    <li class="item"> <a href="#"><img src="autostars/images/logo_bmw.png" alt=""></a></li>
                                    				<li class="item"> <a href="#"><img src="autostars/images/logo_audi.png" alt=""></a></li>
                                                </ul>
                                                <a href="#" class="basic-link">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li><a href="{{ route ('nosotros') }}">Nosotros</a>

                        </li>

                    </ul>
                </nav> 

                 <div class="container">
                    @if (Session::has('errors'))

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <ul>
                                    <!-- <strong>Oops! Something went wrong : </strong> -->
                                    <strong>Lo sentimos!, ha ocurrido un inconveniente : </strong>
                                    @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                        </div>

                    @endif
                </div> 

                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form>
                            <h3>Busca tu Vehículo</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">

                                        {!! Form::label('pais', 'Paises') !!}
                                        {!! Form::select('pais', 
                                                            (['0' => 'Seleccione'] + $paisesBuscador), 
                                                            null, 
                                                            ['id' => 'pais', 'class' => 'form-control','onchange' => 'buscarCiudadPorPais_Buscador(this.value)']
                                                        ) 
                                        !!} 

                                        </div>
                                        <div class="col-md-6">
                                    	{!! Form::label('ciudad', 'Ciudades') !!}
                                    	
                                        {!! Form::input('hidden', 'ciudad', '',['id' =>'ciudad']) !!}
                                        
                                        			{!! Form::input('text', 'buscador2', '', 
														['class'=> 'form-control', 'id' => 'buscador2', 'maxlength' => '20',
															'onkeyup'=>'buscarCiudadPorLetra_Buscador(this.value)','onclick'=>'verCiudades_Buscador()']) 
													!!}	
                                        
											<div id="divBuscador"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        {!! Form::label('tipo', 'Tipos de Vehículos') !!}
                                        {!! Form::select('tipo', 
                                                            (['0' => 'Seleccione'] + $tipos), 
                                                            null, 
                                                            ['id' => 'tipo', 'class' => 'form-control','onchange' => 'dependienteMarcasBuscador(this.value)']
                                                        ) 
                                        !!} 
                                        </div>
                                        <div class="col-md-6">
                                        {!! Form::label('marca', 'Marcas Publicadas') !!}
                                        
	                                        <div id="dependienteMarcasBuscador" class="selectpicker">
	                                        {!! Form::select('marca', 
	                                                            (['0' => 'Seleccione'] ), 
	                                                            null, 
	                                                            ['id' => 'marca', 'class' => 'form-control','onchange' => '']
	                                                        ) 
	                                        !!} 
	                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        {!! Form::label('modelo', 'Modelos') !!}

						                    <div id="dependienteModelosBuscador">
						
							                    {!! Form::select('modelo', 
							                                        (['0' => 'Seleccione'] ), 
							                                        null, 
							                                        ['id'=>'modelo','class' => 'form-control','onchange'=>'']
							                                    ) 
							                    !!} 
						
						                    </div>
                                                            
                                        </div>
                                        <div class="col-md-6">
                                        {!! Form::label('color', 'Colores') !!}
                                        {!! Form::select('color', 
                                                            (['0' => 'Seleccione'] + $colores), 
                                                            null, 
                                                            ['id' => 'color', 'class' => 'form-control','onchange' => '']
                                                        ) 
                                        !!} 
                                        </div>
                                    </div>
                          
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
       
					                    {!! Form::label('min_ano', 'Año Desde') !!}
					                    <?php $ano = date('Y')?>
					                    
					    					<select id='min_ano' name='min_ano' class='form-control' value='0' onchange=''>            
						                        <option value=''>Seleccione</option>
						                        
						                        	@for ($i = $ano; $i > 1899; $i--)
													
													   <option value='{{ $i }}'>{{ $i }}</option>
													    								    
													@endfor	                        						
																								               						
											</select>                                                

                                        </div>
                                        <div class="col-md-6">
                                        
					                    {!! Form::label('max_ano', 'Año Hasta') !!}
					                    <?php $ano = date('Y')?>
					                    
					    					<select id='max_ano' name='max_ano' class='form-control' value='0' onchange=''>            
						                        <option value=''>Seleccione</option>
						                        
													@for ($i = $ano; $i > 1899; $i--)
													
													   <option value='{{ $i }}'>{{ $i }}</option>
													    								    
													@endfor	                        						
																								               						
											</select>
											 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Precio Mínimo</label>
                                            
											{!! Form::input('text', 'min_precio', '', ['id' => 'min_precio', 'class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'','onchange' => '']) !!}
											
											
                                        </div>
                                        <div class="col-md-6">
                                             {!! Form::label('max_ano', 'Precio Máximo') !!}
                                                                                         
											{!! Form::input('text', 'max_precio', '', ['id' => 'max_precio', 'class'=> 'form-control', 'maxlength' => '10','onkeypress'=>'','onchange' => '']) !!}
											
                                        </div>
                                    </div>
  
                                    <div class="row">
                                        <div class="col-md-12">
                                        <br>
                                            <input type="button" class="btn btn-block btn-primary btn-lg" value="Buscar" onclick="buscador()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   	</div>