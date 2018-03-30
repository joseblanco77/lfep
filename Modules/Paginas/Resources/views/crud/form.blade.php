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

    {{-- Meta: descripción --}} 
    <div class="form-group row">
        {!! Form::label('meta_description', 'Meta: descripción', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('meta_description', null, ['class' => 'form-control boxed', 'placeholder' => 'meta_description o URL semántica']) !!}
            <span class="text-muted small">Se utiliza para describir brevemente el contenido de la página, y pese a que el texto no es visible en el navegador, lo utilizan los buscadores como resumen en sus páginas de resultados.</span>
            @if ($errors->has('meta_description'))
            <span class="has-error">{{ $errors->first('meta_description') }}</span>
            @endif
        </div>
    </div>
    
    {{-- Meta: autor --}} 
    <div class="form-group row">
        {!! Form::label('meta_author', 'Meta: autor', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('meta_author', null, ['class' => 'form-control boxed', 'placeholder' => 'meta_author o URL semántica']) !!}
            <span class="text-muted small">Indica el nombre de la persona o entidad que ha creado el contenido de la página.</span>
            @if ($errors->has('meta_author'))
            <span class="has-error">{{ $errors->first('meta_author') }}</span>
            @endif
        </div>
    </div>
    
    {{-- 
    <div class="form-group row">
        <label class="col-sm-2 form-control-label text-xs-right"> Category: </label>
        <div class="col-sm-10">
            <select class="c-select form-control boxed">
                <option selected>Select Category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
        <div class="col-sm-10">
            <div class="images-container">
                <div class="image-container">
                    <div class="controls">
                        <a href="" class="control-btn move">
                            <i class="fa fa-arrows"></i>
                        </a>
                        
                        <a href="" class="control-btn star">
                            <i class="fa"></i>
                        </a>
                        
                        <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                    <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                </div>
                <div class="image-container">
                    <div class="controls">
                        <a href="" class="control-btn move">
                            <i class="fa fa-arrows"></i>
                        </a>
                        
                        <a href="" class="control-btn star">
                            <i class="fa"></i>
                        </a>
                        
                        <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                    <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                </div>
                <div class="image-container">
                    <div class="controls">
                        <a href="" class="control-btn move">
                            <i class="fa fa-arrows"></i>
                        </a>
                        
                        <a href="" class="control-btn star">
                            <i class="fa"></i>
                        </a>
                        
                        <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                    <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                </div>
                <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                    <div class="image-container new">
                        <div class="image">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    --}}

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