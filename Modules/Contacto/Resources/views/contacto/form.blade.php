<h1> {{ $formulario->titulo }} </h1>

<p> {{ $formulario->ayuda }} </p>

{{ Form::open(['route' => 'cajaverde.contacto']) }}

    {{ Form::hidden('slug', $formulario->slug) }}

    @foreach($formulario->campos as $campo)

    <div class="form-group{{ $errors->has("campo_{$campo->id}") ? ' has-error' : '' }}">

        {{-- Label --}}
        {{ Form::label("campo_{$campo->id}", $campo->nombre) }}

        {{-- Input --}}
        @switch($campo->campo->tipo)
            @case('text')
                {{ Form::text("campo_{$campo->id}", null, ["class" => "form-control", "required" => (bool)$campo->required]) }}
                @break

                @case('email')
                {{ Form::email("campo_{$campo->id}", null, ["class" => "form-control", "required" => (bool)$campo->required]) }}
                @break

                @case('textarea')
                {{ Form::textarea("campo_{$campo->id}", null, ["class" => "form-control", "required" => (bool)$campo->required]) }}
                @break

                @case('select')
                {{ Form::select("campo_{$campo->id}", explode('|', $campo->valor), null, ["class" => "form-control", "required" => (bool)$campo->required, "placeholder" => "-- seleccione --"]) }}
                @break

            @default
                {{ Form::text("campo_{$campo->id}", null, ["class" => "form-control", "required" => (bool)$campo->required]) }}
        @endswitch

        {{-- Texto descriptivo --}}
        @if($campo->descripcion)
        <small class="text-secondary d-block">
            {{ $campo->descripcion }}
        </small>
        @endif

        {{-- Salida de errores --}}
        @if ($errors->has("campo_{$campo->id}"))
        <small class="has-error text-danger d-block">
            {{ $errors->first("campo_{$campo->id}") }}
        </small>
        @endif
    
    </div>

    @endforeach

    {{-- Buttons --}}
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        <button type="reset" class="btn btn-link btn-sm">Borrar</button>
    </div>

{{ Form::close() }}

