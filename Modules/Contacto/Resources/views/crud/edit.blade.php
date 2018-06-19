@extends(config('cajaverde.admin_layout'))

@section('content')
@php
$edit = true;
$emailTypes = [
    'to'  => 'to',
    'cc'  => 'cc',
    'bcc' => 'bcc',
];
$campos = [
    'text'     => 1,
    'textarea' => 2,
    'email'    => 3,
    'select'   => 4,
];
@endphp
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title"> Editar formulario de contacto </h3>
                    </div>
                    <section class="formulario">
                        {!! Form::model($formulario, ['route' => ['cajaverde.contacto.formularios.update', $formulario->id], 'method' => 'PATCH' ]) !!}
                        @include('contacto::crud.form.form')
                        {!! Form::close() !!}

                        {{-- Agregar campo --}}
                        @foreach($campos as $tipo => $idTipo)
                        @include('contacto::crud.modal.create_campo')
                        @endforeach

                        {{-- Editar campos --}}
                        @foreach($formulario->campos as $campo)
                        @include('contacto::crud.modal.edit_campo')
                        @endforeach

                        {{-- Agregar email --}}
                        @include('contacto::crud.modal.create_email')

                        {{-- Editar email --}}

                        @foreach($formulario->emails as $email)
                        @include('contacto::crud.modal.edit_email')
                        @endforeach

                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@stop




@section('footscripts')
@include('contacto::crud.javascript')
<script>
$(function(){
    if ($('#contactoCampoModal input').length) {
        $('#contactoCampoModal').modal('show');
    }
});
</script>
@stop