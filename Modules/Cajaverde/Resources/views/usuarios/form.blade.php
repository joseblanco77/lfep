@php
$edit = isset($usuario);
@endphp

{{-- Nombre --}}
<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
    <label class="control-label" for="nombre">Nombre</label>
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => true ]) !!}
    @if ($errors->has('nombre'))
    <span class="has-error">{{ $errors->first('nombre') }}</span>
    @endif
</div>


{{-- Apellido --}}
<div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
    <label class="control-label" for="apellido">Apellido</label>
    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido', 'required' => true ]) !!}
    @if ($errors->has('apellido'))
    <span class="has-error">{{ $errors->first('apellido') }}</span>
    @endif
</div>


{{-- Correo electrónico --}}
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="control-label" for="email">Correo electrónico</label>
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required' => true ]) !!}
    @if ($errors->has('email'))
    <span class="has-error">{{ $errors->first('email') }}</span>
    @endif
</div>


{{-- Contraseña --}}
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label class="control-label" for="password">Contraseña</label>
    {!! Form::password('password', [
        'class' => 'form-control', 
        'placeholder' => 
        'Contraseña', 
        'required' => ($edit ? false : true) ,
        'pattern' => getCajaverdePasswordPattern()
        ]) !!}
    <span class="text-muted small">Entre 8 y 32 caratceres: letras mayúsculas y minúsculas, números y al menos un símbolo entre $!@</span>
    @if ($errors->has('password'))
    <span class="has-error">{{ $errors->first('password') }}</span>
    @endif
</div>
    
    
{{-- Confirmar contraseña --}}
<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label class="control-label" for="password_confirmation">Confirmar contraseña</label>
    {!! Form::password('password_confirmation', [
        'class' => 'form-control', 
        'placeholder' => 
        'Confirmar contraseña', 
        'required' => ($edit ? false : true)
        ]) !!}
    @if ($errors->has('password_confirmation'))
    <span class="has-error">{{ $errors->first('password_confirmation') }}</span>
    @endif
</div>
    
    
{{-- Descripción --}}
<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
    <label class="control-label" for="descripcion">Descripción</label>
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción']) !!}
    @if ($errors->has('descripcion'))
    <span class="has-error">{{ $errors->first('descripcion') }}</span>
    @endif
</div>


{{-- Activo --}}
<div class="form-group{{ $errors->has('activo') ? ' has-error' : '' }}">
    <div>
        <label>
            {!! Form::radio('activo', 1, null, ['class' => 'radio squared']) !!}
            <span>Activo</span>
        </label>
        <label>
            {!! Form::radio('activo', 0, ($edit ? null : 1), ['class' => 'radio squared']) !!}
            <span>Inactivo</span>
        </label>
    </div>
    @if ($errors->has('activo'))
    <span class="has-error">{{ $errors->first('activo') }}</span>
    @endif
</div>


{{-- Guardar --}}
<div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('cajaverde.usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
</div>

{{-- Hidden --}}
{!! Form::hidden('id', null) !!}