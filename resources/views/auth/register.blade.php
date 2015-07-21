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
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Bienvenidos a Troovami!</h2>
                        <p>La nueva forma de publicar y vender tu vehículo, únete a la creciente comunidad de vendedores más grande de latinoamérica.</p>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <h3>Tómate un café mientras vendes tu vehículo</h3>
                            <p>Nosotros te ayudaremos a vender</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-share-alt"></i>
                            </div>
                            <h3>Compartir tu publicación será un placer</h3>
                            <p>Nuestras redes sociales serán tu gran aliado para vender rápida y cómodamente.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <h3>¿Sólo quieres búscar?</h3>
                            <p>Revisa nuestras publicaciones, selecciona y contacta directamente al vendedor.</p>
                        </div>
                        <div class="spacer-20"></div>
                        
                        <hr class="fw">
                        
                        <header>
                            <h3>Users testimonials</h3>
                        </header>
                        <div class="spacer-40"></div>
                        <!-- Testimonials -->
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="2" data-items-tablet="2" data-items-mobile="1">
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/user1.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Arthur Henry</strong><span>Carsales Inc</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/user2.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Willie &amp; Heather Obrien</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="testimonial-block">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                            </blockquote>
                                            <div class="testimonial-avatar"><img src="autostars/images/user3.jpg" alt="" width="60" height="60"></div>
                                            <div class="testimonial-info">
                                                <div class="testimonial-info-in">
                                                    <strong>Lori Bailey</strong><span>My car Experts</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <section class="signup-form sm-margint">
                           
                            <div class="regular-signup">

								<h3> <i class="fa fa-user-plus"></i> Crear Cuenta</h3>
								{!! Form::open(['route' => 'register', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 
								
								  <div class="form-group">
								  
								    {!! Form::label('name', 'Usuario',['class' => 'col-sm-2 control-label']) !!}
								    <i id="name_validar" class="fa fa-asterisk" style="color:red;"></i>
								    <div class="col-sm-8">
								      
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
											{!! Form::input('text', 'name', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								        </div>
								
								    </div>
								
								  </div>
								  
								  
									  <div class="form-group">
								  
								    {!! Form::label('name', 'Imagen',['class' => 'col-sm-2 control-label']) !!}
								    
								    <div class="col-sm-8">
								      
										<div class="input-group">
										
											{!! Form::file('blb_img',['id' => 'blb_img','onclick' =>'oir2()']) !!}
											    <output id="imgUser">
                                                    <i class="fa fa-picture-o" style="font-size:50px"></i>
                                                </output>
								        </div>
								
								    </div>
								
								  </div>							  
								  

								  <div class="form-group">
								  
								  	{!! Form::label('str_nombre', 'Nombre',['class' => 'col-sm-2 control-label']) !!} 
									<i id="str_nombre_validar" class="fa fa-asterisk" style="color:red;"></i>
								       
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil-square-o"></i></span>
								            {!! Form::input('text', 'str_nombre', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
										</div>
										      
								    </div>
								    
								  </div>
								  
								    <div class="form-group">
								  
										<i id="str_apellido_validar" class="fa fa-asterisk" style="color:red;"></i>
								        {!! Form::label('str_apellido', 'Apellido', ['class' => 'col-sm-2 control-label']) !!}
								    	<div class="col-sm-8">
								
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon1"><i class="fa fa-pencil-square-o"></i></span>
											{!! Form::input('text', 'str_apellido', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
										</div>
										      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    <i id="lng_idgenero_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('lng_idgenero', 'Género',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-venus-mars"></i></span>
								            	{!! Form::select('lng_idgenero', 
								                	(['0' => 'Seleccione'] + $genero), 
								                    null, 
								                    ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
								                    ) 
								                !!}
								        </div>        
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    <i id="dmt_fecha_nacimiento_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('dmt_fecha_nacimiento', 'Cumpleaños',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								
										<div class="input-group">
								        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-birthday-cake"></i></span>
								        	{!! Form::date('dmt_fecha_nacimiento', \Carbon\Carbon::now(),['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
									<i id="str_ididentificacion_validar" class="fa fa-asterisk" style="color:red;"></i>
								    {!! Form::label('str_ididentificacion', 'Cédula',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user-secret"></i></span>
								            {!! Form::input('text', 'str_ididentificacion', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								       </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    <i id="lng_idpais_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('lng_idpais', 'País',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								
										<div class="input-group">
								        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-flag"></i></span>
								        	{!! Form::select('lng_idpais', 
								            	(['' => 'Seleccione'] + $paises), 
								                null, 
								                ['class' => 'form-control','onchange' => 'validar(this.value,this.name)']
								                ) 
								            !!}
								        </div>      
								    </div>
								    
								  </div>
								
								  <div class="form-group">
								  
								    <i id="str_telefono_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('str_telefono', 'Teléfono',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone-square"></i></span>
								            	{!! Form::input('text', 'str_telefono', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    <i id="email_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('email', 'Correo',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								                                
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
								            {!! Form::email('email', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
								    {!! Form::label('str_twitter', 'Twitter',['class' => 'col-sm-2 control-label']) !!}
								    <div class="col-sm-8">
								                                        
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-twitter"></i></span>
								            {!! Form::input('text', 'str_twitter', '', ['class'=> 'form-control']) !!}
								        </div>      
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								  
									{!! Form::label('str_facebook', 'Facebook',['class' => 'col-sm-2 control-label']) !!}	    
								    <div class="col-sm-8">
								                                        
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-facebook"></i></span>
								        	{!! Form::input('text', 'str_facebook', '', ['class'=> 'form-control']) !!}
								        </div>      
								    </div>
								    
								  </div> 
								  
								  <div class="form-group">
								  
								    {!! Form::label('str_instagram', 'Instagram',['class' => 'col-sm-2 control-label']) !!}
								    <div class="col-sm-8">
								                                        
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-instagram"></i></span>
								            {!! Form::input('text', 'str_instagram', '', ['class'=> 'form-control']) !!}
								        </div>      
								    </div>
								    
								  </div>     
								 
								  <div class="form-group">
								  
								    <i id="password_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('password', 'Clave',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
										             
								        <div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
								            {!! Form::password('password', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								        </div>      
								    </div>
								    
								  </div>  
								        
								  <div class="form-group">
								  
								    <i id="password_confirmation_validar" class="fa fa-asterisk" style="color:red;"></i>
									{!! Form::label('password_confirmation', 'Confirmar',['class' => 'col-sm-2 control-label']) !!}    
								    <div class="col-sm-8">
								                                
										<div class="input-group">
								        	<span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
								            	{!! Form::password('password_confirmation', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}
								        </div>       
								    </div>
								    
								  </div>
								  
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-8">
										{!! Form::input('hidden', 'lng_idservicio','3') !!}
								        {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
								    </div>
								  </div>
								{!! Form::close() !!}

                            </div>
                            
                        </section>
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