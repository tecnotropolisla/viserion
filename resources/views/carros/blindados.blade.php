<div class="form-group col-md-4">
        
    <i id="str_version_validar" class="fa fa-asterisk" style="color:red;"></i>
    {!! Form::label('str_version', 'Versión') !!}
	{!! Form::input('text', 'str_version', '', ['class'=> 'form-control','onchange' => 'validar(this.value,this.name)']) !!}

</div>  