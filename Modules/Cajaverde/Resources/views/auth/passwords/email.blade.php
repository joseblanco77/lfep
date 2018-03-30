@extends('cajaverde::layouts.guest')

@section('content')
<div class="card">
    <header class="auth-header">
    <h1 class="auth-title">
            <img height="50px" src="{{ asset('img/logo_perinola.svg') }}">
        </h1>
    </header>

    <div class="auth-content">

        @if(session('status'))
        <p class="text-center text-info">{{ session('status') }}</p>
        @endif
            
        <p class="text-center">Restablecer contraseña</p>
        <p class="text-muted text-center">
            <small>ingresa tu correo electrónico.</small>
        </p>
        <form id="reset-form" action="{{ route('cajaverde.password.email') }}" method="POST" novalidate="">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control underlined" name="email" id="email" value="{{ old('email') }}" placeholder="Correo electrónico" required> 
                @if ($errors->has('email'))
                <span class="has-error">El correo electrónico es obligatorio.</span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Restablecer</button>
            </div>

            <div class="form-group clearfix">
                <a class="pull-left" href="{{ route('cajaverde.login') }}">Iniciar sesión</a>
                {{--<a class="pull-right" href="signup.html">Sign Up!</a>--}}
            </div>
            
        </form>
    </div>
</div>
<div class="text-center">
    <a href="/" class="btn btn-secondary btn-sm">
        <i class="fa fa-arrow-left"></i> Ir a la página principal
    </a>
</div>
@endsection
