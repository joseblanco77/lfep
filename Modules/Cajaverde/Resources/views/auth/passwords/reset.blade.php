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
            
        <p class="text-center">Restablecer contraseña</p>

        <form id="reset-form" action="{{ route('cajaverde.password.request') }}" method="POST" novalidate="">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control underlined" name="email" id="email" value="{{ $email or old('email') }}" placeholder="Correo electrónico" required> 
                @if ($errors->has('email'))
                <span class="has-error">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Nueva contraseña</label>
                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Nueva contraseña" required> 
                <span class="text-muted small">Entre 8 y 32 caratceres: letras mayúsculas y minúsculas, números y al menos un símbolo entre $!@</span>
                @if ($errors->has('password'))
                <span class="has-error">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" class="form-control underlined" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña" required> 
                @if ($errors->has('password_confirmation'))
                <span class="has-error">{{ $errors->first('password_confirmation') }}</span>
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
