@extends('app2')

@section('content')

    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="text-align-center error-404">
                    <h1 class="">Página no encontrada</h1>
                    La página solicitada no existe<br>
                    <h3><i class="fa fa-frown-o"></i></h3>
                    
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

@endsection