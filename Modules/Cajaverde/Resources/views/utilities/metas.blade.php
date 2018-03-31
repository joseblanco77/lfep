<fieldset>

    <legend>Meta tags</legend>
        
    @if(in_array('meta_description', $tags))
    {{-- Meta: descripción --}} 
    <div class="form-group row">
        {!! Form::label('meta_description', 'Meta: descripción', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('meta_description', null, ['class' => 'form-control boxed', 'placeholder' => 'Meta: descripción']) !!}
            <span class="text-muted small">Se utiliza para describir brevemente el contenido de la página, y pese a que el texto no es visible en el navegador, lo utilizan los buscadores como resumen en sus páginas de resultados.</span>
            @if ($errors->has('meta_description'))
            <span class="has-error">{{ $errors->first('meta_description') }}</span>
            @endif
        </div>
    </div>
    @endif

    @if(in_array('meta_author', $tags))
    {{-- Meta: autor --}} 
    <div class="form-group row">
        {!! Form::label('meta_author', 'Meta: autor', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('meta_author', null, ['class' => 'form-control boxed', 'placeholder' => 'Meta: autor']) !!}
            <span class="text-muted small">Indica el nombre de la persona o entidad que ha creado el contenido de la página.</span>
            @if ($errors->has('meta_author'))
            <span class="has-error">{{ $errors->first('meta_author') }}</span>
            @endif
        </div>
    </div>
    @endif

    @if(in_array('og_image', $tags))
    {{-- Open Graph: Image --}} 
    <div class="form-group row">
        {!! Form::label('og_image', 'Open Graph: Imagen', ['class' => 'col-sm-2 form-control-label text-xs-right']) !!}
        <div class="col-sm-10">
            {!! Form::text('og_image', null, ['class' => 'form-control boxed', 'placeholder' => 'Open Graph: Imagen']) !!}
            <span class="text-muted small">La URL de la imagen que aparece cuando alguien comparte el contenido en Facebook. Consulte a <a href="https://developers.facebook.com/docs/sharing/webmasters#images" title="A Guide to Sharing for Webmasters" target="_blank">la guía para webmasters de Facebook <i class="fa fa-external-link"></i></a></a> y la <a href="https://developers.facebook.com/docs/sharing/best-practices/#images" target="_blank" title="Sharing Best Practices for Websites &amp; Mobile Apps">guía de mejores prácticas <i class="fa fa-external-link"></i></a> para aprender a especificar una imagen de vista previa de alta calidad.</span>
            @if ($errors->has('og_image'))
            <span class="has-error">{{ $errors->first('og_image') }}</span>
            @endif
        </div>
    </div>
    @endif

</fieldset>
