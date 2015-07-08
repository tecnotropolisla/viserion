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
                    <div class="col-md-8">
                        <h2>Get started with AutoStars</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <h3>Sell your car to make money</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-list-alt"></i>
                            </div>
                            <h3>Flexible listing options</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </div>
                        <div class="spacer-20"></div>
                        <div class="icon-box ibox-rounded ibox-light ibox-effect">
                            <div class="ibox-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3>Easy to use tools</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
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
                    <div class="col-md-4">
                        <section class="signup-form sm-margint">
                            {!! Form::open(['route' => 'register', 'class' => 'form']) !!}
                            <div class="regular-signup">
                                <h3>Crear Cuenta</h3>
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        {!! Form::input('text', 'name', '', ['class'=> 'form-control']) !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        {!! Form::input('text', 'str_nombre', '', ['class'=> 'form-control']) !!}
                                    </div>
                                                            
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        {!! Form::input('text', 'str_apellido', '', ['class'=> 'form-control']) !!}
                                    </div>
                                           
                                    <div class="form-group">
                                        <label>Género</label>
                                        
                                        {!! Form::select('lng_idgenero', 
                                                            (['' => 'Seleccione'] + $genero), 
                                                            null, 
                                                            ['class' => 'form-control']
                                                        ) 
                                        !!} 

                                    </div>

                                    <div class="form-group">
                                        <label>Fecha de Nacimiento</label>
                                        
                                        {!! Form::date('dmt_fecha_nacimiento', \Carbon\Carbon::now(),['class'=> 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Cédula / N° de Indentidad</label>
                                        {!! Form::input('text', 'str_ididentificacion', '', ['class'=> 'form-control']) !!}
                                    </div>                        

                                    <div class="form-group">
                                        <label>Pais</label>

                                        {!! Form::select('lng_idpais', 
                                                            (['' => 'Seleccione'] + $paises), 
                                                            null, 
                                                            ['class' => 'form-control']
                                                        ) 
                                        !!} 

                                    </div>

                                    <div class="form-group">
                                        <label>Correo</label>
                                        {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        {!! Form::input('text', 'str_twitter', '', ['class'=> 'form-control']) !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        {!! Form::input('text', 'str_facebook', '', ['class'=> 'form-control']) !!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        {!! Form::input('text', 'str_instagram', '', ['class'=> 'form-control']) !!}
                                    </div>
                                  
                                    
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        {!! Form::password('password', ['class'=> 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label>Confirmacion de Contraseña</label>
                                        {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                                    </div>
                                        {!! Form::input('hidden', 'lng_idservicio','3') !!}

                                    <div>
                                        {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-lg btn-block']) !!}
                                    </div>
                                
                            </div>
                            {!! Form::close() !!}
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