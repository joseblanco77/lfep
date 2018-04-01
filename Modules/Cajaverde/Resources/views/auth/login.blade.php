@extends('cajaverde::layouts.guest')

@section('content')

<div class="card">
    <header class="auth-header">
        <h1 class="auth-title">
            <img height="50px" src="{{ asset('img/mdw.png') }}">
        </h1>
    </header>

    <div class="auth-content">

        @if(session('status'))
        <p class="text-center text-info">{{ session('status') }}</p>
        @endif

        @if(session('alert_error'))
        <p class="text-center text-danger">{{ session('alert_error') }}</p>
        @endif

        <p class="text-center">Inicio de sessión</p>
        <form action="{{ route('cajaverde.login') }}" id="login-form" method="POST" novalidate="">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Correo electrónico" required> 
                @if ($errors->has('email'))
                <span class="has-error">El correo electrónico es obligatorio.</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Contraseña</label>
            <input type="password" class="form-control underlined" name="password" id="password" placeholder="Contraseña" pattern="{{ getCajaverdePasswordPattern() }}" required> 
                <span class="text-muted small">Entre 8 y 32 caratceres: letras mayúsculas y minúsculas, números y al menos un símbolo entre $!@</span>
                @if ($errors->has('password'))
                <span class="has-error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="remember">
                    <input class="checkbox" id="remember" type="checkbox">
                    <span>Recordarme</span>
                </label>
                <a href="{{ route('cajaverde.password.request') }}" class="forgot-btn pull-right">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
            </div>
            {{--
            <div class="form-group">
                <p class="text-muted text-center">Do not have an account?
                    <a href="signup.html">Sign Up!</a>
                </p>
            </div>
            --}}
        </form>
    </div>
</div>

<div class="text-center">
    <a href="/" class="btn btn-secondary btn-sm">
        <i class="fa fa-arrow-left"></i> Ir a la página principal 
    </a>
</div>

@endsection
