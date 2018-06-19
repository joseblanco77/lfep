@extends(config('cajaverde.admin_layout'))

@section('content')
@php
$edit = false;
@endphp
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title"> Nuevo formulario de contacto </h3>
                    </div>
                    <section class="formulario">
                        {!! Form::open(['route' => 'cajaverde.contacto.formularios.store']) !!}
                        @include('contacto::crud.form.form')
                        {!! Form::close() !!}
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@stop



@section('footscripts')
@include('contacto::crud.javascript')
@stop