@extends('app')

@section('content')

    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="text-align-center error-404">
                    <h1 class="">Acceso Restringido</h1>
                    <hr class="sm">
                    <p><strong>Por favor inicie sesión</strong></p>
                    <p>El contenido de esta página es solo para usuarios registrados <i class="fa fa-frown-o"></i></p>

                    <p>
                        <a href="{{ route('register') }}">
                            <button type="button" class="btn btn-warning">Crear Cuenta</button>
                        </a>
                    </p>

                </div>
                <div class="spacer-30"></div>
            </div>
        </div>
    </div>

@endsection