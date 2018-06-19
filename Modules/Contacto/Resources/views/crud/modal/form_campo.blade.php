<!-- Modal body -->
<div class="modal-body">

    {{-- Nombre --}}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => true]) !!}
        @if ($errors->has('nombre'))
        <span class="has-error">{{ $errors->first('nombre') }}</span>
        @endif
    </div>

    {{-- Descripción --}}
    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'required' => false]) !!}
        @if ($errors->has('descripcion'))
        <span class="has-error">{{ $errors->first('descripcion') }}</span>
        @endif
    </div>

    {{-- Valores --}}
    @php
    $tipocampo = isset($campo) ? $campo->campo->tipo : $tipo;
    @endphp
    @if($tipocampo === 'select')
    <div class="form-group">
        {!! Form::label('valor', 'Valores') !!}
        {!! Form::text('valor', null, ['class' => 'form-control', 'required' => true]) !!}
        @if ($errors->has('valor'))
        <span class="has-error">{{ $errors->first('valor') }}</span>
        @endif
    </div>
    @endif

    {{-- Obligatorio --}}
    <div class="form-group">
        @php
        $required = old('required');
        @endphp
        <div>
            <label>
                {!! Form::radio('required', 1, true, ['class' => 'radio squared', 'checked' => ($required ==  '1')]) !!}
                <span>Obligatorio</span>
            </label>
            <label>
                {!! Form::radio('required', 0, null, ['class' => 'radio squared', 'checked' => ($required ==  '0')]) !!}
                <span>Opcional</span>
            </label>
        </div>
        @if ($errors->has('required'))
        <span class="has-error">{{ $errors->first('required') }}</span>
        @endif
    </div>

    {{-- Hidden --}}
    {!! Form::hidden('tipo',          $campos[$tipocampo]) !!}
    {!! Form::hidden('campo_id',      isset($campo) ? $campo->id : $idTipo) !!}
    @if($edit)
    {!! Form::hidden('formulario_id', $formulario->id) !!}
    @endif

</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="dismissFormCampo">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
