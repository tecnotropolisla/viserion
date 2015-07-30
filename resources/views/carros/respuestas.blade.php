    <div class="form-group col-md-2">
        
        <i id="lng_idchocado_validar" class="fa fa-asterisk" style="color:red;"></i>

       {!! Form::label('lng_idchocado', 'Chocado') !!}<br>

        @foreach ($respuesta as $valor => $descripcion)

            {!! Form::radio('lng_idchocado', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
            {!! Form::label('lng_idchocado', $descripcion) !!} 

        @endforeach

    </div>

  <div class="form-group col-md-2">
        
        <i id="lng_idnegociable_validar" class="fa fa-asterisk" style="color:red;"></i>
        {!! Form::label('lng_idnegociable', 'Negociable') !!}<br>

        @foreach ($respuesta as $valor => $descripcion)

            {!! Form::radio('lng_idnegociable', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
            {!! Form::label('lng_idnegociable', $descripcion) !!} 

        @endforeach

  </div>

  <div class="form-group col-md-2">
        
        <i id="lng_idfinanciamiento_validar" class="fa fa-asterisk" style="color:red;"></i>
        {!! Form::label('lng_idfinanciamiento', 'Financiamiento') !!}<br>

        @foreach ($respuesta as $valor => $descripcion)

            {!! Form::radio('lng_idfinanciamiento', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
            {!! Form::label('lng_idfinanciamiento', $descripcion) !!} 

        @endforeach

    </div>

  <div class="form-group col-md-2">
        
        <i id="lng_idunicodueno_validar" class="fa fa-asterisk" style="color:red;"></i>

        {!! Form::label('lng_idunicodueno', 'Único Dueño') !!}<br>

        @foreach ($respuesta as $valor => $descripcion)

            {!! Form::radio('lng_idunicodueno', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
            {!! Form::label('lng_idunicodueno', $descripcion) !!} 

        @endforeach
    </div>

  <div class="form-group col-md-2">
        
        <i id="lng_idmotorreparado_validar" class="fa fa-asterisk" style="color:red;"></i>
        {!! Form::label('lng_idmotorreparado', 'Motor Reparado') !!}<br>

        @foreach ($respuesta as $valor => $descripcion)

            {!! Form::radio('lng_idmotorreparado', $valor, null,['onclick' => 'validarRadio(this.name)']) !!}
            {!! Form::label('lng_idmotorreparado', $descripcion) !!} 

        @endforeach

    </div>