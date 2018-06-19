<!-- Modal body -->
<div class="modal-body">

    {{-- Correo electrónico --}}
    <div class="form-group">
        {!! Form::label('email', 'Correo electrónico') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => true]) !!}
        @if ($errors->has('email'))
        <span class="has-error">{{ $errors->first('email') }}</span>
        @endif
    </div>

    {{-- Tipo --}}
    <div class="form-group">
        {!! Form::label('tipo', 'Tipo') !!}
        {!! Form::select('tipo', $emailTypes, null, ['class' => 'form-control', 'required' => true, 'placeholder' => '-- seleccione tipo --']) !!}
        @if ($errors->has('tipo'))
        <span class="has-error">{{ $errors->first('tipo') }}</span>
        @endif
    </div>

    {{-- Hidden --}}
    {!! Form::hidden('formulario_id', $formulario->id) !!}

</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="dismissFormCampo">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
