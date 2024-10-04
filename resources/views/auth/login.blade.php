@extends('layouts.app')

@section('content')
<style>
    /* Fondo dinámico con partículas */
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #1e1e2f;
        overflow: hidden;
    }

    /* Estilo de las partículas */
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background: radial-gradient(circle, rgba(20, 20, 50, 1) 0%, rgba(0, 0, 0, 1) 100%);
        background-repeat: no-repeat;
        background-size: cover;
        animation: pulse 6s infinite alternate;
    }

    @keyframes pulse {
        0% { opacity: 0.7; }
        100% { opacity: 1; }
    }

    /* Estilos del formulario */
    .login-form-container {
        width: 100%;
        max-width: 400px;
        background-color: rgba(255, 285, 255, 0.1);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
    }

    .login-form-container h2 {
        color: #fff;
        text-align: center;
        margin-bottom: 30px;
        font-size: 26px;
    }

    .login-form-container input {
        width: 100%;
        padding: 12px 20px;
        margin: 10px 0;
        border-radius: 30px;
        border: none;
        background-color: rgba(255, 255, 255, 0.8);
        font-size: 16px;
        color: #333;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-form-container input:focus {
        outline: none;
        background-color: rgba(255, 255, 255, 1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .login-form-container button {
        width: 100%;
        padding: 12px 20px;
        margin-top: 20px;
        border-radius: 30px;
        border: none;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-form-container button:hover {
        background-color: #0056b3;
    }

    .login-form-container .forgot-password {
        text-align: center;
        margin-top: 20px;
    }

    .login-form-container .forgot-password a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .login-form-container .forgot-password a:hover {
        text-decoration: underline;
    }
</style>

<div class="particles"></div>

<div class="login-form-container">
    <h2>{{ __('Login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Iniciar') }}
        </button>

        <div class="forgot-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
