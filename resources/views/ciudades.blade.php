
            @foreach ($ciudades as $ciudad) 
            
                <button type="button" onclick="seleccion('{!! $ciudad->id !!}','{!! $ciudad->str_ciudad !!}')" class="list-group-item">
                	{!! $ciudad->str_ciudad !!}
                </button>
            
            @endforeach
