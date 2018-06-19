<fieldset>

    <legend>Datos del formulario</legend>

    <div class="row">
        {{-- Título --}}
        <div class="form-group col-md-6">
            {!! Form::label('titulo', 'Título') !!}
            {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => true]) !!}
            <span class="text-muted small">Encabezado del formulario en letra grande</span>
            @if ($errors->has('titulo'))
            <span class="has-error">{{ $errors->first('titulo') }}</span>
            @endif
        </div>

        {{-- Asunto --}}
        <div class="form-group col-md-6">
            {!! Form::label('asunto', 'Asunto') !!}
            {!! Form::text('asunto', null, ['class' => 'form-control', 'required' => true]) !!}
            <span class="text-muted small">Frase (o palabra), sobre qué trata el tema redactado. Esto será lo primero que lean los detinatarios vía e-mail.</span>
            @if ($errors->has('asunto'))
            <span class="has-error">{{ $errors->first('asunto') }}</span>
            @endif
        </div>

        {{-- Slug --}}
        <div class="form-group col-md-6">
            {!! Form::label('slug', 'Slug o URL semántica') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'required' => true]) !!}
            <span class="text-muted small">Las slugs, URL semánticas o URL amigables son aquellas URL que son, dentro de lo que cabe, entendibles para el usuario.  Las URL semánticas deben ser en letra minúscula, sin espacios, utilizando solo letras del alfabeto inglés (sin tildes ni ñ), números, y guiones. <br>
                <button type="button" class="btn btn-secondary btn-oval btn-sm" id="regenerar-slug">Regenerar Slug <i class="fa fa-refresh"></i></button>
                <a href="https://es.wikipedia.org/wiki/URL_sem%C3%A1ntica" target="_blank" title="https://es.wikipedia.org/wiki/URL_semántica">Ver referencia.<i class="fa fa-external-link"></i></a>
            </span>
            @if ($errors->has('slug'))
            <span class="has-error">{{ $errors->first('slug') }}</span>
            @endif
        </div>

        {{-- Texto de ayuda --}}
        <div class="form-group col-md-6">
            {!! Form::label('ayuda', 'Texto de ayuda') !!}
            {!! Form::textarea('ayuda', null, ['class' => 'form-control', 'required' => false, 'rows' => 2]) !!}
            <span class="text-muted small">Opcional. Es una breve explicación al usuario acerca del por qué debería enviar sus datos.</span>
            <span class="text-muted small"></span>
            @if ($errors->has('asunto'))
            <span class="has-error">{{ $errors->first('asunto') }}</span>
            @endif
        </div>

        {{-- Descripción --}}
        <div class="form-group col-md-6">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required' => false, 'rows' => 2]) !!}
            <span class="text-muted small">Opcional. Si tiene varios formularios, esto puede ayudarle a distinguirlos. No es un texto visible al usuario.</span>
            @if ($errors->has('descripcion'))
            <span class="has-error">{{ $errors->first('descripcion') }}</span>
            @endif
        </div>

        {{-- Activo --}}
        <fieldset class="col-md-6">
            <div class="form-group{{ $errors->has('activo') ? ' has-error' : '' }}">
                <div>
                    <label>
                        {!! Form::radio('activo', 1, ($edit ? null : 1), ['class' => 'radio squared']) !!}
                        <span>Activo</span>
                    </label>
                    <label>
                        {!! Form::radio('activo', 0, null, ['class' => 'radio squared']) !!}
                        <span>Inactivo</span>
                    </label>
                </div>
                @if ($errors->has('activo'))
                <span class="has-error">{{ $errors->first('activo') }}</span>
                @endif
            </div>

            <hr>

            {{-- Accesible vía por URL --}}
            <div class="form-group{{ $errors->has('accesible') ? ' has-error' : '' }}">
                <div>
                    <label>
                        {!! Form::radio('accesible', 1, ($edit ? null : 1), ['class' => 'radio squared']) !!}
                        <span>Accesible vía por URL</span>
                    </label>
                    <label>
                        {!! Form::radio('accesible', 0, null, ['class' => 'radio squared']) !!}
                        <span>Accesible solo en widgets</span>
                    </label>
                </div>
                @if ($errors->has('accesible'))
                <span class="has-error">{{ $errors->first('accesible') }}</span>
                @endif
            </div>
        </fieldset>



</div>

</fieldset>

@if($edit)
    @include('contacto::crud.form.campos')

    @include('contacto::crud.form.emails')
@endif

<div class="form-group row">
    <div class="col-sm-10 col-sm-offset-2">
        <button type="submit" class="btn btn-primary"> Guardar </button>
        <a href="{{ route('cajaverde.contacto.formularios.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</div>
