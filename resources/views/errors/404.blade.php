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
                <div class="text-align-center error-404">
                    <h1 class="huge">404</h1>
                    <hr class="sm">
                    <p><strong>Disculpe - Pagina no encontrada!</strong></p>
                    <p>La pagina que usted está buscando fue movida, eliminada o renombrada, icluso puede que nunca haya existido <i class="fa fa-frown-o"></i></p>

                    <p>
                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-warning">Volver al inicio</button>
                        </a>
                    </p>


                </div>
                <div class="spacer-30"></div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->



    <!-- Start site footer -->
        @include('pie')
    <!-- End site footer -->


@endsection