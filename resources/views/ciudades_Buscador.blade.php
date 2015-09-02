@foreach ($ciudades as $ciudad) 
	<p onclick="seleccion_Buscador('{!! $ciudad->id !!}','{!! $ciudad->str_ciudad !!}')">{!! $ciudad->str_ciudad !!}</p>            
@endforeach