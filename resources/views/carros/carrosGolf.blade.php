<div class="form-group col-md-4">

<i id="int_pasajeros_validar" class="fa fa-check" style="color:green;"></i>
{!! Form::label('int_pasajeros', 'Capacidad de Personas') !!}
{!! 
	Form::selectRange('int_pasajeros', 2, 10, null, ['class' => 'form-control','onchange' => 'validar(this.value,this.name)'])
!!}

</div>