@component('mail::message')

# ¡Hola!

## Haz recibido un nuevo mensaje de: {{ $message['encabezado']['titulo'] }}
@if($message['encabezado']['descripcion'])
### {{ $message['encabezado']['descripcion'] }}
@endif

---

## Respuestas
<dl>
@foreach ($message['campos'] as $index => $campo)
<dt><strong>{{ $index }}</strong></dt>
<dd>{{ $campo }}</dd>
@endforeach
</dl>
---

Saludos.

@endcomponent
