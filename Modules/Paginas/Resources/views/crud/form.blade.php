@php
$edit = isset($pagina);
@endphp

<div class="card card-block">

    {{-- Nombre o título de la página --}}
    <div class="form-group row">
        {!! Form::label('nombre', 'Página', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('nombre', null, ['class' => 'form-control boxed', 'placeholder' => 'Nombre o título de la página', 'required' => true ]) !!}
            @if ($errors->has('nombre'))
            <span class="has-error">{{ $errors->first('nombre') }}</span>
            @endif
        </div>
    </div>

    {{-- Slug --}} 
    <div class="form-group row">
        {!! Form::label('slug', 'Slug', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('slug', null, ['class' => 'form-control boxed', 'placeholder' => 'Slug o URL semántica', 'required' => true]) !!}
            <span class="text-muted small">Las slugs, URL semánticas o URL amigables son aquellas URL que son, dentro de lo que cabe, entendibles para el usuario.  Las URL semánticas deben ser en letra minúscula, sin espacios, utilizando solo letras del alfabeto inglés (sin tildes ni ñ), números, y guiones. <br>
                <button type="button" class="btn btn-secondary btn-oval btn-sm" id="regenerar-slug">Regenerar Slug <i class="fa fa-refresh"></i></button>
                <a href="https://es.wikipedia.org/wiki/URL_sem%C3%A1ntica" target="_blank" title="https://es.wikipedia.org/wiki/URL_semántica">Ver referencia.<i class="fa fa-external-link"></i></a>
            </span>
            @if ($errors->has('slug'))
            <span class="has-error">{{ $errors->first('slug') }}</span>
            @endif
        </div>
    </div>

    {{-- Descripción --}} 
    <div class="form-group row">
        {!! Form::label('descripcion', 'Descripción', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('descripcion', null, ['class' => 'form-control boxed', 'placeholder' => 'Descripción']) !!}
            <span class="text-muted small">Breve resumen del contenido o propósito de la página. Este texto es visible solo para los administradores.</span>
            @if ($errors->has('descripcion'))
            <span class="has-error">{{ $errors->first('descripcion') }}</span>
            @endif
        </div>
    </div>

    {{-- WYSIWYG editor --}}
    <div class="form-group row">
        <label class="col-sm-2 form-control-label text-xs-right"> Contenido: </label>
        <div class="col-sm-10">
            @include('paginas::crud.wysiwyg')            
        </div>
    </div>

    {{-- Nivel: --}}
    <div class="form-group row">
        {!! Form::label('parent_id', 'Nivel:', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::select('parent_id', getPaginasnestedTreeList(), null, ['class' => 'form-control boxed', 'placeholder' => '-- nivel superior --']) !!}
            <span class="text-muted small">Los niveles de las páginas, determinan su jerarquía. Por ejemplo, en la estructura Animales > Felinos > Tigres, la página Felinos es "hija" de Animales, pero "padre" de Tigres. Las páginas que comparten un mismo padre, se denominan hermanas.</span>
            @if ($errors->has('parent_id'))
            <span class="has-error">{{ $errors->first('parent_id') }}</span>
            @endif
        </div>
    </div>
    
    {{-- Activa --}}
    <div class="form-group{{ $errors->has('activa') ? ' has-error' : '' }}">
        <div>
            <label>
                {!! Form::radio('activa', 1, ($edit ? null : 1), ['class' => 'radio squared']) !!}
                <span>Activa</span>
            </label>
            <label>
                {!! Form::radio('activa', 0, null, ['class' => 'radio squared']) !!}
                <span>Inactiva</span>
            </label>
        </div>
        @if ($errors->has('activa'))
        <span class="has-error">{{ $errors->first('activa') }}</span>
        @endif
    </div>

    {!! showMetasForm(['meta_description', 'meta_author', 'og_image']) !!}
    
    <div class="form-group row">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary"> Guardar </button>
            <a href="{{ route('cajaverde.paginas.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>



{{-- Hidden --}}
{!! Form::textarea('contenido', null, ['id' => 'contenido_textarea', 'style' => 'display:none;']) !!}
{!! Form::hidden('id', null) !!}