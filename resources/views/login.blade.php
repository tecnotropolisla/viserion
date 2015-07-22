
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Iniciar Sesión</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(['route' => 'login', 'class' => 'form']) !!}
                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        {!! Form::password('password', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="checkbox">
                        <label><input name="remember" type="checkbox"> Recordarme</label>
                    </div>
                    <div>                            
                        {!! Form::submit('Entrar',['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}

            </div>
<!--
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
-->
        </div>
    </div>
</div>